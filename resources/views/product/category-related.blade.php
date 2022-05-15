@extends('./layouts.app')


@section('content')
<div class="main_content">
<h2 class="text-center mt-5">Category: {{ $title }}</h2>
<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
    	<div class="row">
			<div class="col-lg-12">
            	<div class="row align-items-center mb-4 pb-1">
                    <div class="col-12">
                        <div class="product_header">
                            <div class="product_header_left">
                            </div>
                            <div class="product_header_right">
                            	<div class="products_view">
                                    <a href="javascript:Void(0);" class="shorting_icon grid active"><i class="ti-view-grid"></i></a>
                                    <a href="javascript:Void(0);" class="shorting_icon list"><i class="ti-layout-list-thumb"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row shop_container">
            	@forelse($products as $product)
                    <div class="col-md-4 col-6">
                        <div class="product">
                        	@if($product->new == 'on')
                            	<span class="pr_flash">New</span>
                            @endif
                            <div class="product_img">
                                <a href="{{ route('product-detail', $product->slug) }}">
                                	@if($product->thumbnail)
                                    <img src="{{ asset('uploads/' . $product->thumbnail) }}" alt="{{ $product->title }}">
                                    @else
                                    <img src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $product->title }}" width="211" height="234">
                                    @endif
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li class="add-to-cart"><a href="{{ ($product->productVariations->count() == 0) ? route('add-to-cart-single', $product->slug) : route('product-detail', $product->slug) }}"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                        <li><a href="{{ route('add-wishlist', $product->slug) }}"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="{{ route('product-detail', $product->slug) }}">{{ $product->title }}</a></h6>
                                <div class="product_price">
                                    <span class="price">Rs. {{ isset($product->wholesalePrice) ? number_format($product->wholesalePrice) : number_format($product->retailPrice) }}</span>
                                        @if($product->wholesalePrice)
                                            <del>Rs. {{ number_format($product->retailPrice) }}</del><br>
	                                        @if($product->wholesalePrice)
	                                            <div class="on_sale">
	                                                <span>Save: Rs {{ number_format($product->retailPrice - $product->wholesalePrice) }}</span>
	                                            </div>
	                                        @endif
                                        @endif
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:87%"></div>
                                    </div>
                                    <span class="rating_num">(25)</span>
                                </div>
                                <div class="pr_desc">
                                    <p>{{ str_limit($product->meta_description, 95,  '...') }}</p>
                                </div>
                                <div class="list_product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li class="add-to-cart">
                                            <a href="{{ ($product->productVariations->count() == 0) ? route('add-to-cart-single', $product->slug) : route('product-detail', $product->slug) }}">
                                                <i class="icon-basket-loaded"></i>
                                                {{ ($product->productVariations->count() == 0) ? 'Add To Cart' : 'Select Options' }}
                                            </a></li>
                                        <li><a href="{{ route('add-wishlist', $product->slug) }}"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                <div class="col-md-4 col-6">
                        <div class="product">
                            <span class="pr_flash">New</span>
                            <div class="product_img">
                                <a href="#">
                                    <img src="{{ asset('/assets/images/product-not-found.png') }}" alt="">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="#"></a></h6>
                                <div class="product_price">
                                    <span class="price">Rs. 0</span>
                                    <del>Rs. 0</del><br>
                                        <div class="on_sale">
                                        <span>Save: Rs 0</span>
                                    </div>
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:87%"></div>
                                    </div>
                                    <span class="rating_num">(25)</span>
                                </div>
                                <div class="pr_desc">
                                    <p></p>
                                </div>
                                <div class="list_product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li class="add-to-cart">
                                            <a href="#">
                                                <i class="icon-basket-loaded"></i>
                                                Add To Cart
                                            </a></li>
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
                </div>
        	</div>
        </div>
    </div>
</div>
@include('./partials/footer-newsletter')
<!-- END SECTION SHOP -->

@endsection
