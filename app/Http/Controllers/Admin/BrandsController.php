<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\BrandRequest;
use App\Http\Controllers\Controller;
use App\Brand;
use Session;
use Keygen;
use File;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Brands';
        $brands = Brand::all();
        return view('admin.brands.view', compact('title', 'brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add Brands';
        return view('admin.brands.add', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $key = Keygen::numeric(10)->generate();

        // Brand File Upload configurartion
        $File = $request->file('image');
        if ($File) {
            // change filename 
            $FileName = time() . '-' . '0' . $key . '-' . $File->getClientOriginalName();
            // Move file to uploads directory
            $File->move(public_path('uploads/brand'), $FileName);
        }

        $brand = Brand::create([
            'status' => 'Deactivated',
            'image'  =>  $FileName
        ]);

        Session::flash('success', 'Brand  created successfully');
        return redirect(route('brand.index'));
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
    public function edit(Brand $brand)
    {
        $title = 'Edit Brands';
        return view('admin.brands.add', compact('title', 'brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $key = Keygen::numeric(10)->generate();

        // Brand File Upload configurartion
        $File = $request->file('image');
        if ($File) {
            // change filename 
            $FileName = time() . '-' . '0' . $key . '-' . $File->getClientOriginalName();
            // Move file to uploads directory
            $File->move(public_path('uploads/brand'), $FileName);
        }
        // deleting old brand image
        $brandImage = $brand->image;
        $image_path = public_path().'/uploads/brand/' . $brandImage;
        if(File::exists($image_path)){
            // Deleting brandImage
          File::delete(public_path('/uploads/brand/' . $brandImage));
        }else{
            // Redirecting if the image is not exist in directory 
            Session::flash('error', 'File not exist!');
            return redirect()->back();
        }
            
        $brand->update([
            'image'  =>  $FileName
        ]);

        Session::flash('success', 'Brand updated successfully');
        return redirect(route('brand.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        // check if brand exist
        if($brand) {
            // deleting image 
            $image = $brand->image;
            // check if the file exist in directory
            $image_path = public_path().'/uploads/brand/' . $image;
            if(File::exists($image_path)){
                // Deleting image
              File::delete(public_path('/uploads/brand/' . $image));
            }else{
                // Redirecting if the image is not exist in directory 
                $brand->delete();
                Session::flash('error', 'File not exist!');
                return redirect()->back();
            }

            $brand->delete();
            Session::flash('info', 'Brand deleted successfully!');
            return redirect()->back(); 
        } else {
            Session::flash('error', 'Something went wrong please try again later!');
            return redirect()->back();
        }
    }
    // custom function

    public function status(Brand $id)
    {
        $id->update([
            'status' => $id->status == 'Activated' ? 'Deactivated' : 'Activated',
            ]);
        Session::flash('info', 'Status updated successfully!');
        return redirect()->back();
    }
}
