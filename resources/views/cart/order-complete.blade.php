@extends('./layouts.app')

@section('content')
<div class="breadcrumb_section bg_gray page-title-mini" style="padding: 20px; text-align: center;">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-title">
                    <h1>{{ $title }}</h1>
                </div>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- START MAIN CONTENT -->
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center order_complete">
                	<i class="fas fa-check-circle"></i>
                    <div class="heading_s1">
                  	<h3>Your order is completed!</h3>
                    <p><b> Order ID: #{{ $key }}</b></p>
                    </div>
                  	<p>Thank you for your order! Your order is being processed and will be completed within 3-6 hours.</p>
                    <a href="{{ route('products') }}" class="btn btn-fill-out">Continue Shopping</a>
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
<!-- END MAIN CONTENT -->
@endsection