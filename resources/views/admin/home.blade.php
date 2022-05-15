@extends('admin/layouts.app')

@section('stylesheet')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection

@section('content')
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h1>Dashboard</h1>
                    </div>            
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-3 col-md-6" >
                    <div class="card" data-aos="flip-up">
                        <div class="body">
                            <div class="d-flex align-items-center">
                                <div class="icon-in-bg bg-indigo text-white rounded-circle"><i class="fa fa-briefcase"></i></div>
                                <div class="ml-4">
                                    <span>Total income</span>
                                    <h4 class="mb-0 font-weight-medium"><span>Rs. </span><span class="counter">{{ isset($order) ? number_format($order) : '' }}</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" >
                    <div class="card" data-aos="flip-up">
                        <div class="body">
                            <div class="d-flex align-items-center">
                                <div class="icon-in-bg bg-azura text-white rounded-circle"><i class="fa fa-credit-card"></i></div>
                                <div class="ml-4">
                                    <span>Products</span>
                                    <h4 class="mb-0 font-weight-medium"><span></span><span class="counter">{{ \App\Product::all()->count() }}</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" >
                    <div class="card" data-aos="flip-up">
                        <div class="body">
                            <div class="d-flex align-items-center">
                                <div class="icon-in-bg bg-orange text-white rounded-circle"><i class="fa fa-users"></i></div>
                                <div class="ml-4">
                                    <span>Categories</span>
                                    <h4 class="mb-0 font-weight-medium"><span></span><span class="counter">{{ \App\Category::all()->count() }}</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" >
                    <div class="card" data-aos="flip-up">
                        <div class="body">
                            <div class="d-flex align-items-center">
                                <div class="icon-in-bg bg-pink text-white rounded-circle"><i class="fa fa-life-ring"></i></div>
                                <div class="ml-4">
                                    <span>Orders</span>
                                    <h4 class="mb-0 font-weight-medium"><span></span><span class="counter">{{ \App\Order::all()->count() }}</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12" data-aos="fade-up-right">
                    <div class="table-responsive">
                        <table class="table table-hover table-custom spacing5">
                            <thead>
                                <tr> 
                                    <th style="width: 20px;">Order Id</th>
                                    <th>Customer</th>
                                    <th>Products</th>
                                    <th style="width: 50px;">Order Total</th>
                                    <th style="width: 50px;">Order Status</th>
                                    <th style="width: 110px;">Action</th>
                                </tr>
                            </thead>
                            <tbody class="search-data">
                                @forelse($orders as $key => $order)
                                @php
                                    $name = $order->firstName;
                                    $e  = explode(" ", $name);
                                    $a = str_split($e[0]);
                                    if($order->lastName){
                                        $lName = $order->lastName;
                                    $es  = explode(" ", $lName);
                                    $as = str_split($es[0]);
                                    } else {
                                        $as = null;
                                    }
                                @endphp
                                <tr>
                                    <td>
                                        <span>#{{ $order->orderId }}</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avtar-pic w35 bg-pink" data-toggle="tooltip" data-placement="top" title="" style="text-align: center;">{{ $a[0] }}{{ $as[0] }}<span></span></div>
                                            <div class="ml-3">
                                                <a href="{{ ($order->user) ? route('user.edit', $order->user->id) : '#' }}" title="">{{ $order->firstName }} {{ ($order->lastName) ? $order->lastName : ''}}</a>
                                                <p class="mb-0">{{ $order->email }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                    @foreach($order->product_ids as $val)
                                        <p>{{ str_limit(json_decode($val)->name, 30, '...') }}</p>
                                    @endforeach
                                    </td>
                                    <td>Rs. {{ number_format($order->orderTotal) }}</td>
                                    @if($order->order_status == 'processing')
                                    <td><span class="badge badge-success  ml-0 mr-0">Processing</span></td>
                                    @elseif($order->order_status == 'pending')
                                    <td><span class="badge badge-warning  ml-0 mr-0">Pending</span></td>
                                    @elseif($order->order_status == 'completed')
                                    <td><span class="badge badge-info  ml-0 mr-0">Completed</span></td>
                                    @elseif($order->order_status == 'failed')
                                    <td><span class="badge badge-danger  ml-0 mr-0">Failed</span></td>
                                    @endif
                                    <td>
                                        <form action="{{ route('order.destroy', $order->id) }}" method="POST" name="OrderDelete">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('order.edit', $order->id) }}" class="btn btn-sm btn-default " title="View" data-toggle="tooltip" data-placement="top"><i class="icon-share-alt"></i></a>
                                        <button type="button" class="btn btn-sm btn-default swal-dialog" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr><td>No Orders Found</td></tr>
                                @endforelse
                            </tbody>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('admin/assets/js/jquery.counterup.min.js') }}"></script>

    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 50,
                time: 1000
            });
        });
          AOS.init();
    </script>
@endsection
