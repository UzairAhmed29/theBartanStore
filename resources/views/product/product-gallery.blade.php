@extends('./layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('/assets/css/product-gallery.css') }}">
@endsection
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

<div class="main_content">

<!-- START SECTION SHOP -->
<ul class="gallery_box">
    @forelse($galleriesOne as $image)
    <li data-aos="fade-up">
        <a href="{{ route('product-detail', $image->product->slug) }}"><img src="{{ asset('/uploads/media/' . $image->image) }}" width="525" height="304">
        <div class="box_data">
            <span>{{ $image->product->title }}</span>
        </div></a>
    </li>
    @empty
    <div class="alert alert-warning text-center">No Product Gallery Found</div>
    <li data-aos="fade-up">
        <a href="#"><img src="{{ asset('/assets/images/product-gallery-not-found.png') }}" width="525" height="304">
        <div class="box_data">
            <span>Demo Product</span>
        </div></a>
    </li>
    <li data-aos="fade-up">
        <a href="#"><img src="{{ asset('/assets/images/product-gallery-not-found.png') }}" width="525" height="304">
        <div class="box_data">
            <span>Demo Product</span>
        </div></a>
    </li>
    <li data-aos="fade-up">
        <a href="#"><img src="{{ asset('/assets/images/product-gallery-not-found.png') }}" width="525" height="304">
        <div class="box_data">
            <span>Demo Product</span>
        </div></a>
    </li>
    @endforelse
</ul>
<!-- END SECTION SHOP -->

@include('./partials/footer-newsletter')

</div>
@endsection
