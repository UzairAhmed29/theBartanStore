@extends('./layouts.app')

@section('content')
<div class="breadcrumb_section bg_gray page-title-mini" style="padding: 20px; text-align: center;">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-title">
                    <h1>{{ $category }}</h1>
                </div>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>

<div class="main_content">

<!-- START SECTION SHOP -->

</div>
<!-- END SECTION SHOP -->

@include('./partials/footer-newsletter')

</div>
@endsection
