<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Gallery;
use App\Product;
use Session;
use Keygen;
use File;

class GalleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $title = 'Media';
        $galleries = Gallery::with('product')->get();
        return view('admin.galleries.view', compact('title', 'galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add Media';
        $products = Product::where('status', 'Activated')->get();
        return view('admin.galleries.add', compact('title', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $key = Keygen::numeric(10)->generate();

        // Media File Upload configurartion
        $File = $request->file('image');
        if ($File) {
            // change filename 
            $FileName = time() . '-' . '0' . $key . '-' . $File->getClientOriginalName();
            // Move file to uploads directory
            $File->move(public_path('uploads/media'), $FileName);
        }

        $brand = Gallery::create([
            'status' => 'Deactivated',
            'image_type' => $request->image_type,
            'product_id' => $request->product_id,
            'image'  =>  $FileName
        ]);

        Session::flash('success', 'Gallery created successfully');
        return redirect(route('gallery.index'));
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
    public function edit(Gallery $gallery)
    {
        $title = 'Edit Media';
        $products = Product::where('status', 'Activated')->get();
        return view('admin.galleries.add', compact('title', 'gallery', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        if ($gallery) {

            $key = Keygen::numeric(10)->generate();

            if(!$request->image || empty($request->image)) {
                $FileName = $gallery->image;
            } else {
                // Media File Upload configurartion
                $File = $request->file('image');
                // change filename 
                $FileName = time() . '-' . '0' . $key . '-' . $File->getClientOriginalName();
                // Move file to uploads directory
                $File->move(public_path('uploads/media'), $FileName);

                $image = $gallery->image;
                // check if the file exist in directory
                $image_path = public_path().'/uploads/media/' . $image;
                if(File::exists($image_path)){
                    // Deleting image
                  File::delete(public_path('/uploads/media/' . $image));
                }else{
                    // Redirecting if the image is not exist in directory 
                    Session::flash('error', 'File not exist!');
                    return redirect()->back();
                }
            }

            $gallery->update([
                'image' => $FileName,
                'image_type' => $request->image_type,
                'product_id' => $request->product_id,                
            ]);
            Session::flash('success', 'Gallery updated successfully!');
            return redirect(route('gallery.index'));

        } else {
            Session::flash('error', 'Something went wrong please try again later!');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        // check if brand exist
        if($gallery) {
            // deleting image 
            $image = $gallery->image;
            // check if the file exist in directory
            $image_path = public_path().'/uploads/media/' . $image;
            if(File::exists($image_path)){
                // Deleting image
              File::delete(public_path('/uploads/media/' . $image));
            }else{
                // Redirecting if the image is not exist in directory 
                $gallery->delete();
                Session::flash('error', 'File not exist!');
                return redirect()->back();
            }

            $gallery->delete();
            Session::flash('info', 'Gallery deleted successfully!');
            return redirect()->back(); 
        } else {
            Session::flash('error', 'Something went wrong please try again later!');
            return redirect()->back();
        }
    }
    // custom function

    public function status(Gallery $id)
    {
        $id->update([
            'status' => $id->status == 'Activated' ? 'Deactivated' : 'Activated',
            ]);
        Session::flash('info', 'Status updated successfully!');
        return redirect()->back();
    }
}
