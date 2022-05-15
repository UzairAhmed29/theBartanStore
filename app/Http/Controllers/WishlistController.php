<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Wishlist;
use Session;

class WishlistController extends Controller
{
    public function index()
    {
        Session::flush('wishlist');

        $title = 'Wishlist';
        if(!Session::has('wishlist')) {
        	return view('cart.wishlist', ['items' => null]);
        }
        $oldWishlist = Session::get('wishlist');
        $wishlist = new Wishlist($oldWishlist);
        return view('cart.wishlist', ['items' => $wishlist->items, 'totalPrice' => $wishlist->totalPrice]);
    }

    public function addToWishlist(Request $request, $slug)
    {
    	$product = Product::where('slug', $slug)->first();
    	$oldWishlist = Session::has('wishlist') ? Session::get('wishlist') : null;
    	$wishlist = new Wishlist($oldWishlist);
        if(isset($wishlist->items[$product->id])){
            Session::flash('success', 'Product Already added in the Wishlist');
            return redirect()->back();   
        } else {
            $wishlist->add($product, $product->id);
            $request->session()->put('wishlist', $wishlist);
            return redirect()->back();   
        }
    }

    public function ajaxAdd(Request $request)
    {
        $product = Product::where('slug', $request->slug)->first();
        $oldWishlist = Session::has('wishlist') ? Session::get('wishlist') : null;
        $wishlist = new Wishlist($oldWishlist);
        if(isset($wishlist->items[$product->id])){
            return response()->json(['error' => 'Product Already added in the Wishlist', 'id' => $product->id]);   
        } else {
            $wishlist->add($product, $product->id);
            $request->session()->put('wishlist', $wishlist);
            return response()->json(['success' => 'Product added in Wishlist', 'id' => $product->id]);   
        }
    }

    public function remove($slug) {
        $product = Product::where('slug', $slug)->first();
        if($product) {
            $id = $product->id;
            $oldWishlist = Session::get('wishlist');
            $wishlist = new Wishlist($oldWishlist);
            unset($wishlist->items[$id]);
            --$wishlist->totalQuantity; 
            Session::flush('wishlist');
            if(!empty($wishlist->items)){
                Session::put('wishlist', $wishlist);
            }
            return redirect()->back();
        } 
    }
}