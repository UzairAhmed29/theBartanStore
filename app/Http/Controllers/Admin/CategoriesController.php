<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Categories';
        $categories = Category::all();
        return view('admin/categories.view', compact('title', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add Category';
        return view('admin/categories.add', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // check for duplicate entry
        $check = Category::where('name', '=', $request->name)->first();
        if($check) {
            Session::flash('warning', 'Category already exist with the name!');
            return redirect()->back();
        } else {
            $create = Category::firstOrNew([
            'name' => $request->name,
            'slug' => str_slug($request->name),
            'status' => 'Deactivated',
            ]);
        
            $create->save();
            Session::flash('success', 'Category created successfully');
            return redirect(route('category.index'));
        }
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
    public function edit(Category $category)
    {
        $title = 'Edit Category';
        return view('admin.categories.add', compact('title', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if($category) {
            $category->update([
                'name' => $request->name, 
                'slug' => str_slug($request->name) 
            ]);

            Session::flash('info', 'Category updated successfully!');
            return redirect(route('category.index')); 
        } else {
            Session::flash('warning', 'Something went wrong please tr again later!');
            return redirect(route('category.index.')); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if($category) {
            if($category->products->count() == 0) {
                $category->delete();
                Session::flash('info', 'Category deleted successfully!');
                return redirect()->back(); 
            } else {
                Session::flash('warning', 'Category is related to product!');
                return redirect()->back();
            }
             
        } else {
            Session::flash('error', 'Something went wrong please try again later!');
            return redirect()->back();
        }
    }
    // custom function
    public function status(Category $id)
    {
        $id->update([
            'status' => $id->status == 'Activated' ? 'Deactivated' : 'Activated',
            ]);
        Session::flash('info', 'Status updated successfully!');
        return redirect()->back();
    }
}
