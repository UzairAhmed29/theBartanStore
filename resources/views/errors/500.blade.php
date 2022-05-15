@extends('./layouts.app')

@section('content')
<div class="breadcrumb_section bg_gray page-title-mini" style="padding: 20px; text-align: center;">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-title">
                    <h1>Page Not Found</h1>
                </div>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- START MAIN CONTENT -->
<div class="main_content">

<!-- START 404 SECTION -->
<div class="section">
    <div class="error_wrap">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10 order-lg-first">
                    <div class="text-center">
                        <div class="error_txt">500</div>
                        <h5 class="mb-2 mb-sm-3">oops! The page you requested was not found!</h5> 
                        <p>The page you are looking for was moved, removed, renamed or might never existed.</p>
                        <a href="{{ route('main') }}" class="btn btn-fill-out">Back To Home</a>
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
<!-- END MAIN CONTENT -->
@endsection