<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Carbon\Carbon;
use Artisan;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = 'Home';
        $order = Order::sum('orderTotal');
        $orders = Order::whereDate('created_at', Carbon::today())->limit(6)->get();
        return view('admin/home', compact('title', 'order', 'orders'));
    }

    public function cache()
    {
        Artisan::call('cache:clear');
        Artisan::call('route:cache');
        Artisan::call('view:clear');
        Session::flash('success', 'Cache Cleared Successfully!');
        return redirect()->back();
    }
}
