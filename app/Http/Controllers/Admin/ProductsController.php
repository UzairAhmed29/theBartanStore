<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\ProductAttributes;
use App\ProductVaritions;
use App\Product;
use App\Category;
use App\Review;
use Validator;
use Session;
use Keygen;
use File;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Products';
        $products = Product::orderBy('id', 'DESC')->with('category')->get();
        return view('admin.products.view', compact('title', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add Product';
        $categories = Category::where('status', '=', 'Activated')->get();
        return view('admin.products.add', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        // Validate Request
        $validated = $request->validated();

        // Creating random key for unique filename
        $key = Keygen::numeric(10)->generate();

        // Thumbnail File Upload configurartion
        // Checking if file exist 
        $singleFile = $request->file('thumbnail');
        if ($singleFile) {
            // change filename 
            $singleFileName = time() . '-' . '0' . $key . '-' . $singleFile->getClientOriginalName();
            // Move file to uploads directory
            $singleFile->move(public_path('uploads'), $singleFileName);
        } else {
            $singleFileName = null;
        }

        // Gallery multiple File Uploads configurartion
        // Checking if file exist 
        $multipleFiles = $request->file('gallery');
        if ($request->hasFile('gallery')) {
            // change filename 
            $imageNameArr = [];
            foreach ($multipleFiles as $file) {
                $multipleFileName = time() . '-' . $key . '-' . $file->getClientOriginalName();
                $imageNameArr[] = $multipleFileName;
                // moving file to uploads directory
                $file->move(public_path('uploads'), $multipleFileName);
            } 
        } else {
            $imageNameArr = null;
        }

        $create = Product::create([
            'title'              => $request->title,
            'slug'               => str_slug($request->title),
            'category_id'        => $request->category_id,
            'tags'               => $request->tags,
            'retailPrice'        => $request->retailPrice,
            'wholesalePrice'     => $request->wholesalePrice,
            'meta_description'   => $request->meta_description,
            'description'        => $request->description,
            'warranty'           => $request->warranty,
            'policy'             => $request->policy,
            'new'                => $request->new,
            'status'             => 'Deactivated',
            'additional_info'    => $request->additional_info,
            'thumbnail'          => $singleFileName, 
            'gallery'            => $imageNameArr,
 
        ]);
        $create->save();
        Session::flash('success', 'Product created successfully');
        return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $title = 'Edit Product';
        $categories = Category::where('status', '=', 'Activated')->get();
        return view('admin.products.add', compact('title', 'categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        // Validate Request
        $validated = $request->validated();

        // Creating random key for unique filename
        $key = Keygen::numeric(10)->generate();

        // Remove gallery images
        if(isset($request->removeGallery) || $request->removeGallery == 'on') {
            if ($product->gallery || is_array($product->gallery)) {
                $deleteGallery = $product->gallery;
                // Break gallery images into string
                foreach ($deleteGallery as $image) {
                    // check if the file exist in directory
                    $image_path = public_path().'/uploads/' . $image;
                    if(File::exists($image_path)){
                        // Deleting gallery images
                        File::delete(public_path('uploads/' . $image));
                    } else{
                        // Redirecting if the image is not exist in directory 
                        Session::flash('error', 'File not exist!');
                        return redirect()->back();
                    }
                }    
            }
        } //Remove gallery

        // Remove thumbnail image
        if (isset($request->removeThumbnail) || $request->removeThumbnail == 'on') {
            $thumbnail = $product->thumbnail;
                // check if the file exist in directory
                $image_path = public_path().'/uploads/' . $thumbnail;
                if(File::exists($image_path)){
                    // Deleting thumbnail image
                  File::delete(public_path('uploads/' . $thumbnail));
                }else{
                    // Redirecting if the image is not exist in directory 
                    Session::flash('error', 'File not exist!');
                    return redirect()->back();
                }
        }
        // 

        // Thumbnail
        // if the file is not updated 
        if(!$request->thumbnail || empty($request->thumbnail) || isset($request->removeThumbnail)) {
            // keeping the old file
            $thumbnail = $product->thumbnail;
        // if the file is  updated 
        } else {
            $singleFile = $request->file('thumbnail');
                // change filename 
                $thumbnail = time() . '-' . '0' . $key . '-' . $singleFile->getClientOriginalName();
                // Move file to uploads directory
                $singleFile->move(public_path('uploads'), $thumbnail);
                // if old file exist
                if($product->thumbnail) {
                    // Deleting old file
                    File::delete(public_path('uploads/' . $product->thumbnail));
            }
        }
        // Gallery
        // if the file is not updated 
        if(!$request->gallery || empty($request->gallery)  || isset($request->removeGallery)) {
            // keeping the old file
            $imageNameArr = $product->gallery;
        // if the file is  updated 
        } else {
            $multipleFiles = $request->file('gallery');
            if ($request->hasFile('gallery')) {
                // change filename 
                $imageNameArr = [];
                foreach ($multipleFiles as $file) {
                    $multipleFileName = time() . '-' . $key . '-' . $file->getClientOriginalName();
                    $imageNameArr[] = $multipleFileName;
                    // moving file to uploads directory
                    $file->move(public_path('uploads'), $multipleFileName);
                    } 

                }
            // if old file exist
            if ($product->gallery || is_array($product->gallery)) {
                $deleteGallery = $product->gallery;
                // Break gallery images into string
                foreach ($deleteGallery as $image) {
                    // check if the file exist in directory
                    $image_path = public_path().'/uploads/' . $image;
                    if(File::exists($image_path)){
                        // Deleting gallery images
                        File::delete(public_path('uploads/' . $image));
                    } else{
                        // Redirecting if the image is not exist in directory 
                        Session::flash('error', 'File not exist!');
                        return redirect()->back();
                    }
                }    
            }
        }

        $product->update([
            'title'              => $request->title,
            'slug'               => str_slug($request->title),
            'category_id'        => $request->category_id,
            'tags'               => $request->tags,
            'retailPrice'        => $request->retailPrice,
            'wholesalePrice'     => $request->wholesalePrice,
            'meta_description'   => $request->meta_description,
            'description'        => $request->description,
            'warranty'           => $request->warranty,
            'policy'             => $request->policy,
            'new'                => $request->new,
            'additional_info'    => $request->additional_info,
            'thumbnail'          => isset($request->removeThumbnail) ? null : $thumbnail,
            'gallery'            => isset($request->removeGallery) ? null : $imageNameArr ,
        ]);
        Session::flash('success', 'Product updated successfully');
        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // Check if product is exist in DB
        if($product) {
            if($product->galleries->count() == 0) {
                // Deleting product from the DB
                // deleting product attrbiutes along with product
                foreach ($product->productAttributes as $deleteProductAttributes) {
                    $productAttr = ProductAttributes::find($deleteProductAttributes->id);
                    $productAttr->delete();
                }
                // deleting product variations along with product
                foreach ($product->productVariations as $deleteProductVariations) {
                    $productVariations = ProductVaritions::find($deleteProductVariations->id);
                    $productVariations->delete();
                }
                // deleting product reviews along with product
                foreach ($product->reviews as $deleteProductReviews) {
                    $productReviews = Review::find($deleteProductReviews->id);
                    $productReviews->delete();
                }
                $product->delete();
                // Check if the thumbnail image is exist with product in DB
                if($product->thumbnail) {
                    $thumbnail = $product->thumbnail;
                    // check if the file exist in directory
                    $image_path = public_path().'/uploads/' . $thumbnail;
                    if(File::exists($image_path)){
                        // Deleting thumbnail image
                      File::delete(public_path('uploads/' . $thumbnail));
                    }else{
                        // Redirecting if the image is not exist in directory 
                        Session::flash('error', 'File not exist!');
                        return redirect()->back();
                    }
                }
                    // Check if the gallery image is exist with product in DB
                    if ($product->gallery || is_array($product->gallery)) {
                        $gallery = $product->gallery;
                        // Break gallery images into string
                        foreach ($gallery as $image) {
                            // check if the file exist in directory
                            $image_path = public_path().'/uploads/' . $image;
                            if(File::exists($image_path)){
                                // Deleting gallery images
                                File::delete(public_path('uploads/' . $image));
                            } else{
                                // Redirecting if the image is not exist in directory 
                                Session::flash('error', 'File not exist!');
                                return redirect()->back();
                            }
                        }    
                    }
                Session::flash('info', 'Product deleted successfully!');
                return redirect()->back();    
            } else {
                Session::flash('warning', 'Product is related to Media!');
                return redirect()->back();
            }
        } else {
            // If product is not exist in DB 
            Session::flash('error', 'Something went wrong please try again later!');
            return redirect()->back();
        }
    }

    // Custom Function

    public function status(Product $id)
    {
            $id->update([
                'status' => $id->status == 'Activated' ? 'Deactivated' : 'Activated',
            ]);
        Session::flash('info', 'Status updated successfully!');
        return redirect()->back();
    }
}
