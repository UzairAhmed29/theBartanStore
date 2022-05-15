<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Contact;
use App\Gallery;
use App\Product;
use App\Brand;
use App\Review;
use Carbon\Carbon;
use App\ProductVaritions;
use Session;

class ProductController extends Controller
{

	public function index(Request $request)
	{
        $title = 'Shop';
        $categories = Category::where('status', 'Activated')->limit(20)->get();
        $products = Product::where('status', 'Activated')->paginate(9);
		return view('product.products', compact('products', 'categories', 'title'));
	}

    public function categoryRelatedProducts($slug)
    {
        $category_id = Category::where('slug', $slug)->first();
        $products = Product::where('category_id', $category_id->id)->paginate(9);

        return redirect(route('products'))->with('products', $products);
    }

    public function priceRange(Request $request)
    {
        if($request->start !== null && $request->end !== null) {
            $startPrice = $request->start;
            $endPrice = $request->end;
            $products = Product::where('status', 'Activated')->whereBetween('retailPrice', [(int)$startPrice, (int)$endPrice])->paginate(9);
            return redirect(route('products'))->with(['range' => $products, 'start' => $startPrice, 'end' => $endPrice]);
        }
    }

    public function productDetail($slug)
    {   
        $title = 'Product Detail';
        $product = Product::where('slug', $slug)->with('reviews')->first();
        if($product){
            $reviewCount = $product->reviews->count();
        } else {
            $reviewCount = 0;
        }
        $relatedProducts = Product::where('status', 'Activated')->inRandomOrder()->take(6)->get();
        return view('product.product-detail', compact('product', 'title', 'relatedProducts', 'reviewCount', 'value'));
    }

    public function gallery()
    {
        $galleriesOne = Gallery::where('status', 'Activated')->orWhere('image_type', 'gallery')->with('product')->orderBy('id', 'DESC')->get();
        $title = 'Product Gallery';
        return view('product.product-gallery', compact('title', 'galleriesOne'));
    }

    public function getPrice(Request $request, $id)
    {
        $value = $request->data;
        $response = ProductVaritions::where([['title', 'LIKE', '%'.$value.'%'], ['product_id', $id]])->first();
        if($response == null && empty($response)){
            return response()->json(["info" => "false"]);
        }
        else {
            $body = array();
            $body = [
                'title' => $response->title,
                'sku' => $response->sku,
                'stock' => $response->stock,
                'retailPrice' => $response->retailPrice,
                'wholesalePrice' => $response->wholesalePrice,
            ];
            return response()->json(["success" => "true", "data" => $body]);
        }
    }

    public function review(Request $request, $slug)
    {
        if($request && $slug) {
            $product_id = Product::where('slug', $slug)->first();
            $check = Review::where(['user_id' => $request->userId, 'product_id' => $product_id->id])->first();
            if(!$check) {
                $index = $request->index + 1;
                $review  = Review::create([
                    'user_id' => $request->userId,
                    'product_id' => $product_id->id,
                    'title' => $request->title,
                    'message' => $request->message,
                    'index' => $index,
                    'visibility' => ($index == 1) ? 'hidden' : 'visible',
                ]);
            } else {
                Session::flash('warning', 'You have already added a review on this product!');
                return redirect()->back();
            }
        }
        return redirect()->back();
    }
}
