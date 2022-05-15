<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Hash;
use Auth;
use Session;
use DB;
use Carbon\Carbon;
use Mail;

class FrontentAuthController extends Controller
{
    public function showLoginForm()
    {
        $title = 'Login';
    	return view('front-auth.frontend-login', compact('title'));
    }

    public function showRegisterForm()
    {
    	return view('front-auth.frontend-register');
    }

    public function login(Request $request)
    {
    	$this->validate($request, [
	        'email'           => 'required|email',
	        'password'           => 'required',
	    ]);
    	$user = User::where('email', $request->email)->first();
    	if($user){
	    	$check = Hash::check($request->password, $user->password);
		    if ($check) {
		    	$userdata = array(
		    		// 'name' => $request->name,
		    		'email' => $request->email,
		    		'password' => $request->password,
		    	);
	    	    	// dd('ya');
	    	    if (Auth::attempt($userdata)) {
	    	    	return redirect(route('main'));
	    	    }
		    } else {
		    	// dd('false');
		    	return redirect(route('front-login'));
		    }
		} else {
			return redirect()->back();
		}
    }

    public function register(RegisterRequest $request)
    {
    	User::create([
            'name' => $request->name,
            'role' => 'Customer',
            'status' => 'Activated',
            'email' => $request->email,
            'password' => Hash::make($request->password),
            ]);
    	return redirect(route('front-login'));
    }

    public function frontendlogout(Request $request) {
      Auth::logout();
      return redirect(route('main'));
    }

    public function getForgotPass()
    {
        return view('front-auth.reset-password');
    }

    public function postForgotPass(Request $request)
    {
        // If email is exit in request 
        if($request->email) {
            // getting user
            $user = User::where('email', $request->email)->first();
            // if user not exist
            if(!$user) {
                Session::flash('error', 'User with this Email does Not exist!');
                return redirect()->back();
            }
            // If user exist
            //Create Password Reset Token
            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => str_random(60),
                'created_at' => Carbon::now()
            ]);

            //Get the token just created above
            $tokenData = DB::table('password_resets')->where('email', $request->email)->first();

            if ($tokenData && $user) {

                $user = User::where('email', $request->email)->select('name', 'email')->first();
                // Generate, the password reset link. The token generated is embedded in the link
                $link = config('base_url') . 'password/reset/' . $tokenData->token . '?email=' . urlencode($user->email);
                $data = array(
                    'name' => $user->name,
                    'token' => $tokenData->token
                );
                Mail::send('email.reset-password', ['token' => $tokenData->token, 'user' => $user->name], function ($message) use ($request) {
                    $message->subject('Reset Password');
                    $message->from('theBartanStore@softtack.com');
                    $message->sender('theBartanStore@softtack.com');
                
                    $message->to($request->email);
                });

                Session::flash('success', 'A reset link has been sent to your email address.');
                return redirect()->back();
            } else {
                Session::flash('error', 'A Network Error occurred. Please try again.');
                return redirect()->back();
            }
        }
    }

    public function resetPassword($token) {
        return view('front-auth.email-reset-password', ['token' => $token]);
    }

    public function updatePassword(Request $request)
    {
        if(!$request->token) {
            Session::flash('message', 'Token field must not be blank!');
            return redirect()->back();
        } else {
            $this->validate($request, [
                'password' => 'required|max:12|min:6'
            ]);
            $token = DB::table('password_resets')->where('token', $request->token)->first();
            if($token !== null) {
                $user = User::where('email', explode(" ", $token->email)[0])->first();
                $user->update([
                    'password' => Hash::make($request->password)
                ]);
                $user->save();
                DB::table('password_resets')->where('token', $request->token)->delete();
                Session::flash('success-message', 'Password Updated Successfully!');
                return redirect()->back();
            } else {
                Session::flash('message', 'Token has expired');
                return redirect()->back();
            }
        }

    }
}
