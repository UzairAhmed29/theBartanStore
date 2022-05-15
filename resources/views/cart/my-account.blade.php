@extends('./layouts.app')

@section('content')
<div class="breadcrumb_section bg_gray page-title-mini" style="padding: 15px!important; text-align: center;">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-title">
                    <h1>My Account</h1>
                </div>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>

<!-- START MAIN CONTENT -->
<div class="main_content">
@if(Session::has('success'))
<div class="alert alert-success">
    <p class="text-center">{{ Session::get('success') }}</p>
</div>
@endif
<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="dashboard_menu">
                    <ul class="nav nav-tabs flex-column" style="display: table-row-group;" role="tablist">
                      <li class="nav-item" style="margin-right: 34px;">
                        <a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="ti-layout-grid2"></i> Dashboard</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" style=" text-align: inherit;" id="orders-tab" data-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="ti-shopping-cart-full"></i> Orders</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="account-detail-tab" data-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="ti-id-badge"></i> Account details</a>
                      </li>
                      @if(auth()->user())
                      <li class="nav-item">
                        <form action="{{ route('fLogout') }}" method="POST" class="dropdown-item" style="">
                            @csrf
                            <button type="submit" style="background: none; border: none; display: contents;"><i class="ti-lock"></i> Logout</button>
                        </form>
                      </li>
                      @endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="tab-content dashboard_content" style="margin-top: 0px !important">
                  	<div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    	<div class="card">
                        	<div class="card-header">
                                <h3>Dashboard</h3>
                            </div>
                            <div class="card-body">
                    			<p>From your account dashboard. you can easily check &amp; view your <a href="javascript:void(0);" onclick="$('#orders-tab').trigger('click')"> recent orders</a></p>
                            </div>
                        </div>
                  	</div>
                  	<div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                    	<div class="card">
                        	<div class="card-header">
                                <h3>Orders</h3>
                            </div>
                            <div class="card-body">
                    			<div class="table-responsive">
                                    @if(auth()->user())
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse(auth()->user()->orders as $order)
                                            <tr>
                                                <td>#{{ $order->orderId }}</td>
                                                <td>{{ $order->created_at->toDayDateTimeString() }}</td>
                                                <td>Rs. {{ number_format($order->orderTotal) }}</td>
                                                <td style="display: flex;">
                                                    <a href="{{ route('order-view', $order->id) }}" style="padding: 1px 11px; border: 1px solid rgb(255 0 0); border-radius: 22px; color: rgb(255 50 77);">View</a> 
                                                    @if($order->order_status !== 'cancelled')
                                                 &nbsp;&nbsp;   | &nbsp;&nbsp;
                                                    <form action="{{ route('order-cancel', $order->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                    <button type="submit" style="padding: 1px 5px; border: 1px solid rgb(255 0 0); border-radius: 22px; color: rgb(255 50 77); background-color: #ffffff">Cancel</button>
                                                    </form>
                                                    @else
                                                    <span style="margin-left: 19px; color: rgb(255 0 0);">Cancelled</span>
                                                    @endif
                                             </td>
                                            </tr>
                                            @empty
                                            <p>You have 0 Orders. Continue <a href="{{ route('products') }}"> Shopping</a></p>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    @else
                                    <p>Please <a href="{{ route('front-login') }}">Login</a> to see the Orders!</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                  	</div>
                    <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                        <div class="card">
                            <div class="card-header">
                                <h3>Update Account Details</h3>
                            </div>
                            @if(auth()->user())
                            <div class="card-body">
                                <form method="POST" name="accountDetails" action="{{ route('update-user-info') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>First Name </label>
                                            <input class="form-control" name="name" type="text">
                                         </div>
                                         <div class="form-group col-md-6">
                                            <label>Last Name </label>
                                            <input class="form-control" name="lName">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Email Address </label>
                                            <input class="form-control" name="email" type="email">
                                             <span class="text-danger"><b>{{ $errors->first('title') }}</b></span>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>New Password </label>
                                            <input class="form-control" name="npassword" type="password">
                                             <span class="text-danger"><b>{{ $errors->first('npassword') }}</b></span>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Confirm Password <span class="required">*</span></label>
                                            <input class="form-control" name="cpassword" type="password">
                                             <span class="text-danger"><b>{{ $errors->first('cpassword') }}</b></span>

                                        </div>
                                        <input type="hidden" name="user_id" value="{{ (auth()->user()->id) ? auth()->user()->id : '' }}">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @else
                            <p class="mt-2 ml-2">Please <a href="{{ route('front-login') }}"> Login</a> To Update Account details.</p>
                            @endif
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END SECTION SHOP -->

<!-- START SECTION SUBSCRIBE NEWSLETTER -->
@include('./partials/footer-newsletter')
<!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>

@endsection