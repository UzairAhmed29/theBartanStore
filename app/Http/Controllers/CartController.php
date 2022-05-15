<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PlaceOrderRequest;
use App\Http\Requests;
use App\Product;
use App\Country;
use App\Coupon;
use App\Order;
use App\User;
use Session;
use Hash;
use Cart;
use Auth;
use Keygen;
use Mail;
use Twilio\Rest\Client;
use Carbon\Carbon;


class CartController extends Controller
{
    public function add(Request $request)
    {
    	$product = Product::find($request->ID);
    	$check = Cart::getContent();
    	
		Cart::add(array(
		    'id' => $product->id,
		    'name' => $product->title,
		    'price' => $request->price,
		    'quantity' => $request->quantity,
		    'attributes' => array($request->valueOne, $request->valueTwo),
		    'associatedModel' => $product
		));
		return redirect(route('view-cart'));
    }

    public function addSingleProduct(Request $request, $slug)
    {
    	if($request->quantity == null) {
    		$qty = 1;
    	} else {
    		$qty = $request->quantity;
    	}
        $product = Product::where('slug', $slug)->first();
        Cart::add(array(
            'id' => $product->id,
            'name' => $product->title,
            'price' => $product->retailPrice,
            'quantity' => $qty,
            'attributes' => array(),
            'associatedModel' => $product
        ));
    	Session::flash('cart-success', 'Product Added in Cart Successfully.');
    	if($request->quantity == null)
	    	return redirect()->back();
	    else
        	return response()->json(['success' => 'true']);
	}

    public function view() 
    {
    	$title = 'Cart';
        $items = Cart::getContent();
    	return view('cart.view', compact('title', 'items'));
    }

    public function remove($cart)
    {
    	Cart::remove($cart);
    	return redirect()->back();
    }

    public function update(Request $request, $cart)
    {
        if($cart) {
            foreach($request->id as $index => $value)
            {
                Cart::update($value, array(
                    'quantity' => array(
                        'relative' => false,
                        'value' => $request->quantity[$index]
                    ),
                ));
            }
        	return response()->json(['success', 'Quantity Updated Successfully!']);
        }
    }

    public function clear()
    {
        Cart::clear();
        Cart::clearCartConditions();
        return redirect()->back();
    }

    public function applyCoupon(Request $request)
    {
        $couponCode = $request->coupon_code;

        $couponData = Coupon::where('code', $couponCode)->first();

        if(!$couponData){
            Session::flash('error', 'Sorry! Coupon does not exist!');
            return redirect()->back();
        }
        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => $couponData->name,
            'type' => $couponData->type,
            'target' => 'total',
            'value' => '-' . $couponData->value,
        ));

        Cart::condition($condition);
        Session::flash('success', 'Coupon Applied!');
        return redirect()->back();

    }

    public function removeCoupon()
    {
        Cart::clearCartConditions();
        Session::flash('success', 'Coupon Removed!');
        return redirect()->back();
    }

    public function viewCheckout()
    {
        $title = 'Checkout';
        $countries = Country::all();
        return view('cart.checkout', compact('countries', 'title'));
    }

    public function LoginCheckout(Request $request)
    {
        $remember_me = $request->has('remember') ? true : false;
        $user = User::where('email', $request->email)->first();
        if($user){
            $check = Hash::check($request->password, $user->password);
            if ($check) {
                $userdata = array(
                    'email' => $request->email,
                    'password' => $request->password,
                    'remember' => $remember_me
                );
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember_me)) {
                    return response()->json(['success', 'Logged in Successfully.']);
                }
            } else {
                return response()->json(['error', 'Incorrect Password!']);
            }
        } else {
            return response()->json(['error', 'Incorrect Email or Password!']);
        }
    }

    public function order(PlaceOrderRequest $request)
    {
        if($request) {
            // Generating Rand key or Order Id
            $key = Keygen::alphanum(5)->generate();
            // Getting Aplied coupon
            $couponCode = json_decode($request->condition);
            if(!$couponCode == []){
                $array = array();
                foreach ($couponCode as $code => $value) {
                }
                // dd($request->condition);
                $coupon = Coupon::where('name', $code)->first()->toArray();
                $coupon_id = $coupon['id'];
            } else {
                $coupon_id = null;
            }

            // Creating user 
            if($request->checkbox == 'on' && $request->password !== null) {
                $user = User::create([
                    'name' => $request->fname,
                    'role' => 'Customer',
                    'status' => 'Activated',
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
                $userId = $user->id;
            } elseif($request->userId) {
                $userId = $request->userId;
            } else {
                $userId = null;
            }
            // Email
            if($request->email && empty($request->customer_email)){
                $email = $request->email;
            } else {
                $email = $request->customer_email;
            }

            // Creatign Order
            $order = Order::create([
                'product_ids' => $request->productIds,
                'user_id' => $userId,
                'orderId' => $key,
                'order_status' => 'processing',
                'firstName' => $request->fname,
                'lastName' => ($request->lname == null) ? null : $request->lname,
                'companyName' => ($request->cname == null) ? null : $request->cname,
                'country' => $request->country,
                'addressline1' => $request->addressline1,
                'addressline2' => ($request->addressline2 == null) ? null : $request->addressline2,
                'city' => $request->city,
                'postalCode' => $request->zipcode,
                'phone' => $request->phone,
                'email' => $email,
                'notes' => ($request->notes == null) ? null : $request->notes,
                'orderTotal' => $request->grandTotal,
                'IsCouponApplied' => ($coupon_id == null) ? 0 : $coupon_id,
            ]);

            $message = "Hello " .  $request->fname . ",\n" . "Thanks for shopping from theBartanStore.\nYou'll find a summary of your recent purchase below.\nPlease allow us up to 5 buisness days (excluding weekends, holidays, and sale days) to process and ship your order.\nOrder Number: # " . $key . "\nOrder Date: " . Carbon::now() . "\nOrder Total: Rs. " . number_format($request->grandTotal) . "\nOrder Status: Processing.";
            
            require_once base_path(). "/Vendor/Twilio/autoload.php";

            $sid    = "ACf04413a195593734b7a447342c131dc8";
            $token  = "75d217c296b1d919b2039983a5cc6ee6";
            $twilio = new Client($sid, $token);
            $send = $twilio->messages->create("whatsapp:+923132365440", // to
                [
                    "from" => "whatsapp:+14155238886",
                    "body" => $message
                ]
            );

            dd($send);

           // $url = "https://lifetimesms.com/plain";

           //  $parameters = [
           //      "api_token" => "",
           //      "api_secret" => "",
           //      "to" => $request->phone,
           //      "from" => "bartanStore",
           //      "message" => implode(" ", $message),
           //  ];
           //  $ch = curl_init();
           //  $timeout  =  30;
           //  curl_setopt($ch, CURLOPT_URL, $url);
           //  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           //  curl_setopt($ch, CURLOPT_HEADER, 0);
           //  curl_setopt($ch, CURLOPT_POST, 1);
           //  curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
           //  curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
           //  $response = curl_exec($ch);
           //  curl_close($ch);
            
            // Cart::clear();
            Cart::clearCartConditions();
            return redirect(route('order-complete', $key));
        }
    }

    public function orderComplete($key)
    {
        $title = 'Order Complete';
        return view('cart.order-complete', compact('key', 'title'));
    }

    public function myAccount()
    {
        $title = 'My Account';
        return view('cart.my-account', compact('title'));
    }

    public function cancelOrder(Order $order)
    {
         if($order){
            $order->update([
                'order_status' => 'cancelled'
            ]);
            $order->save();
         }
         return redirect()->back();
    }

    public function viewOrder(Order $order)
    {
        if($order)
            return view('cart.view-order', compact('order'));
    }

    public function updateUser(Request $request)
    {
        if($request->user_id) {
                
            $user = $request->user_id;
            $result = User::find($user);
            
                $rules = [
                    'npassword'          => 'required|same:cpassword',
                    'cpassword'          => 'required|min:8',
                ];

                 $customMessages = [
                    'npassword.required' => 'The new password field is required',
                    'cpassword.required' => 'The confirm password field is required',
                    'npassword.same'     => 'New password didn"t match with Confirm Password',
                    'cpassword.min'      => 'Password must be at least 8 characters',
                ];

                $this->validate($request, $rules, $customMessages);
                $result->update([
                    'password' => $request->npassword,
                    'name' => isset($request->name) ? $request->name : '',
                    'lastName' => isset($request->lName) ? $request->lName : '',
                    'email' => isset($request->email) ? $request->email : '',
                ]);
                $result->update();
                Session::flash('success', 'Account Details Updated Successfully!');
                return redirect()->back();
        }
    }
    
}
