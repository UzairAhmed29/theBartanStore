<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Coupon;
use Session;

class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'View Coupons';
        $coupons = Coupon::all();
        return view('admin.coupons.view', compact('title', 'coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add Coupon';
        return view('admin.coupons.add', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request) {
            $coupon = Coupon::create([
                'name' => $request->name,
                'code' => $request->code,
                'type' => 'discount',
                'value' => $request->value,
                'description' => $request->description,
            ]);

            Session::flash('success', 'Coupon Added Successfully!');
            return redirect(route('coupon.index'));
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Coupon';
        $coupon = Coupon::find($id);
        return view('admin.coupons.add', compact('title', 'coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($id && $request) {
            $coupon = Coupon::find($id);
            $coupon->update([
                'name' => $request->name,
                'code' => $request->code,
                'value' => $request->value . '%',
                'description' => $request->description,
            ]);

            Session::flash('info', 'coupon updated successfully!');
            return redirect(route('coupon.index')); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon = Coupon::find($id);
        $coupon->delete();
        Session::flash('info', 'Coupon deleted successfully!');
        return redirect()->back(); 
    }
}
