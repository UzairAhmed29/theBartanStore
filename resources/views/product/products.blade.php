@extends('./layouts.app')


@section('content')
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
    	<div class="row">
			<div class="col-lg-9">
            	<div class="row align-items-center mb-4 pb-1">
                    <div class="col-12">
                        <div class="product_header">
                            <div class="product_header_left">
                                <div class="custom_select">
                                    <select class="form-control form-control-sm">
                                        <option value="order">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div>
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
                @php
                    if(Session::has('products'))
                        $products = Session::get('products');
                    elseif(Session::has('range'))
                        $products = Session::get('range');
                @endphp
                        
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
        		<div class="row">
                    <div class="col-12">
                        {{ $products->links() }}
                       {{--  <ul class="pagination mt-3 justify-content-center pagination_style1">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="linearicons-arrow-right"></i></a></li>
                        </ul> --}}
                    </div>
                </div>
        	</div>
            <div class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0">
            	<div class="sidebar">
                	<div class="widget">
                        <h5 class="widget_title">Categories</h5>
                        <ul class="widget_categories">
                            @forelse($categories as $category)
                            <li><a href="{{ ($category->products->count() !== 0) ? route('category-related-products', $category->slug) : '#' }}"><span class="categories_name">{{ $category->name }}</span><span class="categories_num">{{ $category->products->count() }}</span></a></li>
                            @empty
                            <li><a href="#">Categories Not Found</a></li>
                            @endforelse
                        </ul>
                    </div>
                    <div class="widget">
                    	<h5 class="widget_title">Filter</h5>
                        <form action="{{ route('products-priceRange') }}" method="GET">
                            @csrf
                        <div class="filter_price">
                             <div id="price_filter" data-min="{{ $products->min('retailPrice') }}" data-max="{{ $products->max('retailPrice') }}" data-min-value="{{ (Session::has('start')) ? Session::get('start') : '' }}" data-max-value="{{ (Session::has('end')) ? Session::get('end') : '' }}" data-price-sign="Rs. "></div>
                             <div class="price_range">
                                 <span>Price: <span id="flt_price"></span></span>
                                 <input type="hidden" name="start" id="price_first">
                                 <input type="hidden" name="end" id="price_second">
                             <button type="submit" style="border: 1px solid; color: #ff4959; background: white; border-radius: 46px; margin: 10px; padding: 2px 10px;">Apply</button>   
                             </div>
                         </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('./partials/footer-newsletter')
<!-- END SECTION SHOP -->

@endsection
