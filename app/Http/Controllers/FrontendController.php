<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactUsRequest;
use App\Http\Requests;
use App\Category;
use App\Contact;
use App\Gallery;
use App\Product;
use App\Brand;
use Carbon\Carbon;
use App\Review;
use App\ProductVaritions;
use \DrewM\MailChimp\MailChimp;
use Session;
use App\Contact_us;


class FrontendController extends Controller
{

    public function main()
    {
        $title = 'Home';
        $searchCategories = Category::where('status', 'Activated')->get();
        $menuCategory = Category::where('status', 'Activated')->with('products')->get();
        // $moreMenuCategory = Category::where('status', 'Activated')->skip(10)->take(6)->get();
    	$exclusiveProducts = Product::where('status', 'Activated')->with('productVariations')->orderBy('id', 'DESC')->take(6)->get();
    	$bestSellerProducts = Product::where('status', 'Activated')->with('productVariations')->orderBy('id', 'ASC')->take(6)->get();
    	$featuredProducts = Product::where('status', 'Activated')->with('productVariations')->where('new', 'on')->take(6)->get();
    	$specialOfferProducts = Product::where('status', 'Activated')->with('productVariations')->where('wholesalePrice', '!=', null)->take(4)->get();
        $carousels = Gallery::where('status', 'Activated')->where('image_type', 'carousel')->with('product')->orderBy('id', 'DESC')->take(3)->get();
        $rightAdsMedia = Gallery::where('status', 'Activated')->where('image_type', 'advertisement')->with('product')->orderBy('id', 'DESC')->take(2)->get();
        $leftAdMedia = Gallery::where('status', 'Activated')->where('image_type', 'advertisement')->with('product')->orderBy('id', 'DESC')->skip(2)->take(1)->get();
        $contact = Contact::find(1);
        $trendingProducts = Category::whereHas('products', function($query) {
            $query->where('thumbnail', '!=', 'null')->limit(1);
        })->with('products')->limit(4)->get();
        $brands = Brand::where('status', 'Activated')->take(7)->orderBy('id', 'DESC')->get();
        $footerOneFeaturedProducts = Product::where('status', 'Activated')->with('productVariations')->where('new', 'on')->take(3)->get();
        $footerTwoFeaturedProducts = Product::where('status', 'Activated')->with('productVariations')->where('new', 'on')->skip(3)->take(3)->get();
        $topOneRatedProducts = Product::where('status', 'Activated')->with('productVariations')->orderBy('id', 'DESC')->take(3)->get();
        $topTwoRatedProducts = Product::where('status', 'Activated')->with('productVariations')->orderBy('id', 'DESC')->skip(3)->take(3)->get();
        $onOneSaleProducts = Product::where('status', 'Activated')->with('productVariations')->where('wholesalePrice', '!=', null)->take(3)->get();
        $onTwoSaleProducts = Product::where('status', 'Activated')->with('productVariations')->where('wholesalePrice', '!=', null)->skip(3)->take(3)->get();

    	return view('index',
            compact(
                'exclusiveProducts',
                'bestSellerProducts',
                'featuredProducts',
                'specialOfferProducts',
                'carousels',
                'contact',
                'rightAdsMedia',
                'searchCategories',
                'menuCategory',
                'leftAdMedia',
                'trendingProducts',
                'brands',
                'footerOneFeaturedProducts',
                'footerTwoFeaturedProducts',
                'topOneRatedProducts',
                'topTwoRatedProducts',
                'onOneSaleProducts',
                'onTwoSaleProducts',
                'title'
            )
        );
    }



    public function faq()
    {
        $title = 'F.A.Q,s';
        return view('pages.faq', compact('title'));
    }

    public function privacy_policy()
    {
         $title = 'Privacy Policy';
        return view('pages.privacy-policy', compact('title'));
    }

    public function getContactUs()
    {
        $title = 'Contact-Us';
        return view('pages.contact-us', compact('title'));
    }

    public function postContactUs(ContactUsRequest $request)
    {
        if($request) {
            Contact_us::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => ($request->subject) ? $request->subject : null,
                'message' => $request->message,
            ]);
            Session::flash('query_message', 'Query Submitted Successfully!');
            return redirect()->back();
        }
    }

    public function searchByCategory(Request $request)
    {
        if($request->category && $request->q) {
            $search = $request->q;
            $category = $request->category;
            $product = Product::where('title','LIKE','%'.$search.'%')->where('status', 'Activated')->where('category_id', $category)->with('productVariations')->get();
            if(count($product) > 0)
                return view('pages.seacrhByCategory')->withDetails($product)->withQuery( $search );
            else return view ('pages.seacrhByCategory')->withMessage('No Details found. Try to search again !');
        } elseif($request->category && $request->q == null) {

            $category_id = $request->category;
            $category = Category::find($category_id);
            $category_name = $category->name;
            $products = Product::where('category_id', $category_id)->with('category')->where('status', 'Activated')->get();
            if(count($products) > 0)
                return view('pages.seacrhByCategory')->withDetails($products)->withQuery( $category_name );
            else return view ('pages.seacrhByCategory')->withMessage('No Details found. Try to search again !');

        } else {
            $search = $request->q;
            $product = Product::where('title','LIKE','%'.$search.'%')->with('productVariations')->where('status', 'Activated')->get();
            if(count($product) > 0)
                return view('pages.seacrhByCategory')->withDetails($product)->withQuery( $search );
            else return view ('pages.seacrhByCategory')->withMessage('No Details found. Try to search again !');
        }
    }

    public function newsletter(Request $request)
    {
        if(Contact::count() != 0){
            $contact = Contact::find(1);
            if($contact->mc_list_id && $contact->mc_api_key) {
                $api_key = $contact->mc_api_key;
                $list_id = $contact->mc_list_id;

                include __DIR__ . '\MailChimp.php';

                $MailChimp = new MailChimp($api_key);
                $result = $MailChimp->post("lists/" . $list_id . "/members", [
                    'email_address' => $request->email,
                    'status'        => 'subscribed',
                ]);

            return response(['message' => 'Email Submitted Successfully!']);

            } else {
                return response(['message' => 'API key not provided!']);
            }
        } else {
            return response(['message' => 'API key not found!']);
        }
    }

    public function category($category)
    {
        if($category) {
            $data = Category::where('slug', $category)->where('status', 'Activated')->with('products')->get();
            $title = $data;
            foreach($data as $value) {

            }
            $title = $value->name;
            $products = $value->products;
            return view('product.category-related', compact('products', 'title'));
        }
    }
}
