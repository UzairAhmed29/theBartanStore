<!DOCTYPE html>

<html lang="en">

<head>

<!-- Meta -->

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta content="Anil z" name="author">

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">

<meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">



<!-- SITE TITLE -->

@php

    if(empty($title))

        $title = '';

@endphp

<title>{{ $title }} | theBartanStore</title>

<!-- Favicon Icon -->

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/images/favicon.png') }}">

<!-- Animation CSS -->

<link rel="stylesheet" href="{{ asset('/assets/css/animate.css') }}">   

<!-- Latest Bootstrap min CSS -->

<link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}">

<!-- Google Font -->

<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet"> 

<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> 

<!-- Icon Font CSS -->

<link rel="stylesheet" href="{{ asset('/assets/css/all.min.css') }}">

<link rel="stylesheet" href="{{ asset('/assets/css/ionicons.min.css') }}">

<link rel="stylesheet" href="{{ asset('/assets/css/themify-icons.css') }}">

<link rel="stylesheet" href="{{ asset('/assets/css/linearicons.css') }}">

<link rel="stylesheet" href="{{ asset('/assets/css/flaticon.css') }}">

<link rel="stylesheet" href="{{ asset('/assets/css/simple-line-icons.css') }}">

<!--- owl carousel CSS-->

<link rel="stylesheet" href="{{ asset('/assets/owlcarousel/css/owl.carousel.min.css') }}">

<link rel="stylesheet" href="{{ asset('/assets/owlcarousel/css/owl.theme.css') }}">

<link rel="stylesheet" href="{{ asset('/assets/owlcarousel/css/owl.theme.default.min.css') }}">

<!-- Magnific Popup CSS -->

<link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.css') }}">

<!-- Slick CSS -->

<link rel="stylesheet" href="{{ asset('/assets/css/slick.css') }}">

<link rel="stylesheet" href="{{ asset('/assets/css/slick-theme.css') }}">

<!-- Style CSS -->

<link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

<link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">



</head>

<body>

<!-- LOADER -->

<div class="preloader">

    <div class="lds-ellipsis">

        <span></span>

        <span></span>

        <span></span>

    </div>

</div>

<!-- END LOADER -->

@include('/partials/modal-newsletter')

<!-- START HEADER -->

<header class="header_wrap">

    <div class="top-header light_skin bg_dark d-none d-md-block">

        <div class="custom-container">

            <div class="row align-items-center">

                <div class="col-lg-6 col-md-8">

                    <div class="header_topbar_info">

                            <div id="typewriteText"></div>

{{-- <span>Now delivering across Pakistan. Free Shipping over Rs.2000.</span> --}}

                    </div>

                </div>

                <div class="col-lg-6 col-md-4">

                    <div class="d-flex align-items-center justify-content-center justify-content-md-end">

                        <ul class="header_list" style="list-style: none; display: inline-flex;">

                            <li><a href="{{ route('wishlist') }}"><i class="ti-heart"></i><span>Wishlist</span></a></li>

                            @if(auth()->user())

                            <div class="dropdown">

                            <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <i class="fas fa-bars"></i>

                              </button>

                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="left: -157px; !important;">

                                <a class="dropdown-item"> {{ auth()->user()->name}}</a>

                                @if(auth()->user()->role !== 'Customer')

                                <a class="dropdown-item" target="_blank" href="{{ route('home') }}">Dashboard</a>

                                @endif

                                <a class="dropdown-item" href="{{ route('get-my-account') }}">My Account</a>

                              </div>

                            </div>      



                            @else

                            <li><a href="{{ route('front-login') }}"><i class="ti-user"></i><span>Login</span></a></li>

                            <li><a href="{{ route('front-register') }}"><i class="ti-check-box"></i><span>Register</span></a></li>

                            @endif

                        </ul>

                    </div>

                </div>

            </div>

                                    {{-- @forelse($exclusiveProducts as $a)

                                    {{ dd($a->productVariations->count() == 0) }}

                                    @empty

                                    @endforelse --}}

        </div>

    </div>

    <div class="middle-header dark_skin">

        <div class="custom-container">

            <div class="nav_block">

                <a class="navbar-brand" href="https://thebartanstore.com">

                    <img class="logo_light" src="{{ asset('/assets/images/logo_light.png') }}" alt="logo" />

                    <img class="logo_dark" src="{{ asset('/assets/images/logo_dark.png') }}" alt="logo" />

                </a>

                <div class="product_search_form rounded_input">

                    <form action="{{ route('searchByCategory') }}" method="POST">

                        @csrf

                        <div class="input-group">

                            <div class="input-group-prepend">

                                <div class="custom_select">

                                    <select class="first_null" name="category">

                                        <option disabled selected>All Category</option>

                                    @forelse($searchCategories as $sCategory)

                                        <option value="{{ $sCategory->id }}">{{ $sCategory->name }}</option>

                                    @empty

                                    <option disabled>Categories Not found</option>

                                    @endforelse

                                    </select>

                                </div>

                            </div>

                            <input class="form-control" name="q" placeholder="Search Product..." type="text">

                            <button type="submit" class="search_btn2"><i class="fa fa-search"></i></button>

                        </div>

                    </form>

                </div>

                <ul class="navbar-nav attr-nav align-items-center">

                    <li><a href="#" class="nav-link"><i class="linearicons-heart"></i><span class="wishlist_count">0</span></a></li>

                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-bag2"></i><span class="cart_count">{{ Cart::getTotalQuantity() }}</span><span class="amount"><span class="currency_symbol">Rs. </span>{{ Cart::getSubTotal() }}</span></a>

                        <div class="cart_box cart_right dropdown-menu dropdown-menu-right">

                            <ul class="cart_list">

                                

                                @forelse(Cart::getContent() as $cart)

                                <li>

                                    <form action="{{ route('remove-cart', $cart->id) }}" method="POST" name="removeItemCart">

                                        @csrf

                                        @method('DELETE')

                                    <button type="submit" class="item_remove" style="    background-color: white; border: none;"><i class="ion-close"></i></button>

                                    </form>

                                    @if($cart->associatedModel->thumbnail)

                                    <a href="{{ route('product-detail', $cart->associatedModel->slug) }}"><img src="{{ asset('/uploads/' . $cart->associatedModel->thumbnail) }}" alt="{{ $cart->associatedModel->title }}" height="80" width="80">

                                    @else

                                    <a href="{{ route('product-detail', $cart->associatedModel->slug) }}"><img src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $cart->associatedModel->title }}" height="80" width="80">

                                    @endif

                                        {{ str_limit($cart->associatedModel->title, $limit = 30, $end = '...') }}</a>

                                    <span class="cart_quantity"> {{ $cart->quantity }} x <span class="cart_amount"> <span class="price_symbole">Rs. </span></span>{{ $cart->price }}</span>

                                </li>

                                @empty

                                <li>No Poducts in Cart</li>

                                @endforelse

                            </ul>

                            <div class="cart_footer">

                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">Rs. </span></span>{{ number_format(Cart::getSubTotal()) }}</p>

                                <p class="cart_buttons"><a href="{{ route('view-cart') }}" class="btn btn-fill-line view-cart">View Cart</a><a href="{{ route('view-checkout') }}" class="btn btn-fill-out checkout">Checkout</a></p>

                            </div>

                        </div>

                    </li>

                </ul>

            </div>

        </div>

    </div>

    @if(Session::has('cart-success'))
    <div class="alert alert-success" style="height: 55px;" id="cart-success">
        <p class="text-center">{{ Session::get('cart-success') }}</p>
    </div>
    @endif

    <div class="bottom_header dark_skin main_menu_uppercase border-top border-bottom">

        <div class="custom-container">

            <div class="row"> 

                <div class="col-lg-3 col-md-4 col-sm-6 col-3">

                    <div class="categories_wrap">

                        <button type="button" data-toggle="collapse" data-target="#navCatContent" aria-expanded="false" class="categories_btn">

                            <i class="linearicons-menu"></i><span>All Categories </span>

                        </button>

                        <div id="navCatContent" class="nav_cat navbar collapse">

                            <ul> 

                                @forelse($menuCategory as $mCategory)

                                <li class="dropdown dropdown-mega-menu">

                                    <a class="dropdown-item nav-link {{ ($mCategory->products->count() > 0) ? 'dropdown-toggler' : '' }}" href="/public/category{{ $mCategory->slug }}" data-toggle="dropdown"><span>{{ $mCategory->name }}</span></a>

                                @if($mCategory->products->count() > 0)

                                    <div class="dropdown-menu">

                                        <ul class="mega-menu d-lg-flex">

                                            <li class="mega-menu-col col-lg-7">

                                                <ul class="d-lg-flex">

                                                    <li class="mega-menu-col col-lg-6">

                                                        <ul> 

                                                            <li class="dropdown-header">Featured Item</li>

                                                            @forelse($mCategory->products as $mProduct)

                                                            <li><a class="dropdown-item nav-link nav_item" href="{{ route('product-detail', $mProduct->slug) }}">{{ $mProduct->title }}</a></li>

                                                            @empty

                                                            @endforelse

                                                        </ul>

                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>

                                    </div>

                                @else



                                @endif

                                </li>

                                @empty

                                <ul>

                                    <li>Categories Not Found</li>

                                </ul>

                                @endforelse

                                <li>

                                    <ul class="more_slide_open">

                                        @forelse($moreMenuCategory as $mmCategory)

                                        <li><a class="dropdown-item nav-link nav_item" href="login.html"><span>{{ $mmCategory->name }}</span></a></li>

                                        @empty

                                        @endforelse

                                    </ul>

                                </li>

                            </ul>

                            <div class="more_categories">More Categories</div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-9 col-md-8 col-sm-6 col-9">

                    <nav class="navbar navbar-expand-lg">

                        <button class="navbar-toggler side_navbar_toggler" type="button" data-toggle="collapse" data-target="#navbarSidetoggle" aria-expanded="false"> 

                            <span class="ion-android-menu"></span>

                        </button>

                        <div class="pr_search_icon">

                            <a href="javascript:void(0);" class="nav-link pr_search_trigger"><i class="linearicons-magnifier"></i></a>

                        </div> 

                        <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">

                            

                            @include('partials/nav-menu')



                        </div>

                        <div class="contact_phone contact_support">

                            <i class="linearicons-phone-wave"></i>

                            @if(\App\Contact::count() != 0)

                            <span>{{ $contact->phone }}</span>

                            @endif

                        </div>

                    </nav>

                </div>

            </div>

        </div>

    </div>

</header>

<!-- END HEADER -->

<!-- START SECTION BANNER -->

<div class="mt-4 staggered-animation-wrap">

    <div class="custom-container">

        <div class="row">

            <div class="col-lg-7 offset-lg-3">

                {{-- End Carousel --}}

                <div class="banner_section shop_el_slider">

                    <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-ride="carousel">

                        <div class="carousel-inner">

                        @forelse($carousels as $key => $carousel)

                            <div class="carousel-item {{$key == 0 ? 'active' : '' }} background_bg" data-img-src="{{ asset('/uploads/media/' . $carousel->image) }}">

                                <div class="banner_slide_content banner_content_inner">

                                    <div class="col-lg-7 col-10">

                                        <div class="banner_content3 overflow-hidden">

                                            <h5 class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s">Save up to 40% Off Moonsoon Splash Sale!</h5>

                                            <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">{{ $carousel->product->title }}</h2>

                                            <h4 class="staggered-animation mb-4 product-price" data-animation="slideInLeft" data-animation-delay="1.2s"><span class="price">

                                            @isset($carousel->product->wholesalePrice)

                                               Rs. {{ number_format($carousel->product->wholesalePrice) }} 

                                            @endisset

                                            @empty($carousel->product->wholesalePrice)

                                               Rs. {{ number_format($carousel->product->retailPrice) }}

                                            @endempty    

                                            </span>

                                            @isset($carousel->product->wholesalePrice)    

                                                <del>Rs. {{ number_format($carousel->product->retailPrice) }}</del>

                                                <br>

                                                <span class="on_sale">Save: Rs. {{ number_format($carousel->product->retailPrice - $carousel->product->wholesalePrice) }}</span>

                                            @endisset

                                            </h4>

                                            <a class="btn btn-fill-out btn-radius staggered-animation text-uppercase" href="{{ route('product-detail', $carousel->product->slug) }}" data-animation="slideInLeft" data-animation-delay="1.5s">Shop Now</a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        @empty

                         <div class="carousel-item active background_bg" data-img-src="{{ asset('/assets/images/carousel-not-found.png') }}">

                                <div class="banner_slide_content banner_content_inner">

                                    <div class="col-lg-8 col-10">

                                        <div class="banner_content3 overflow-hidden">

                                            <h5 class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s">50% off in all products</h5>

                                            <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">Smart Watches</h2>

                                            <h4 class="staggered-animation mb-3 mb-sm-4 product-price" data-animation="slideInLeft" data-animation-delay="1.2s"><span class="price">$45.00</span><del>$55.25</del></h4>

                                            <a class="btn btn-fill-out btn-radius staggered-animation text-uppercase" href="#" data-animation="slideInLeft" data-animation-delay="1.5s">Shop Now</a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        @endforelse

                        </div>

                        <ol class="carousel-indicators indicators_style3">

                    @forelse($carousels as $key => $carousel)    

                        <li data-target="#carouselExampleControls" data-slide-to="{{ $key }}" class="{{$key == 0 ? 'active' : '' }}"></li>

                    @empty

                    @endforelse

                        </ol>

                    </div>

                </div>

                {{-- End Carousel --}}

            </div>

            <div class="col-lg-2 d-none d-lg-block">

                @forelse($rightAdsMedia as $key => $raMedia)

                    <a href="{{ route('product-detail', $raMedia->product->slug) }}" class="hover_effect1">

                        <div class="el_title ">

                            {{-- <h6 style="font-family: Poppins; color: grey;">{{ \Str::words($raMedia->product->title, 3) }}</h6> --}}

                            <span></span>

                        </div>

                        <div class="el_img">

                            <img src="{{ asset('/uploads/media/' . $raMedia->image) }}" alt="{{ $raMedia->product->title }}" width="190" height="235">

                        </div>

                    </a>

                @empty

                @endforelse

            </div>

        </div>

    </div>

</div>

<!-- END SECTION BANNER -->



<!-- END MAIN CONTENT -->

<div class="main_content">



<!-- START SECTION SHOP -->

<div class="section small_pt pb-0">

    <div class="custom-container">

        <div class="row">

            <div class="col-xl-3 d-none d-xl-block">

                <div class="sale-banner">

                    @forelse($leftAdMedia as $laMedia)

                    <a class="hover_effect1" href="{{ route('product-detail', $laMedia->product->slug) }}">

                        @if($laMedia->image)

                        <img src="{{  asset('/uploads/media/' . $laMedia->image) }}" alt="

                        shop_banner_img6" width="385" height="435">

                        @else

                        <img src="{{  asset('/assets/images/404.jpg') }}" alt="{{ $laMedia->product->title }}" width="385" height="435">

                        @endif

                    </a>

                    @empty

                    <a class="hover_effect1" href="#">

                        <img src="{{ asset('assets/images/left-banner-404.png') }}" alt="shop_banner_img6">

                    </a>

                    @endforelse

                </div>

            </div>

            <div class="col-xl-9">

                <div class="row">

                    <div class="col-12">

                        <div class="heading_tab_header">

                            <div class="heading_s2">

                                <h4>Exclusive Products</h4>

                            </div>

                            <div class="tab-style2">

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tabmenubar" aria-expanded="false"> 

                                    <span class="ion-android-menu"></span>

                                </button>

                                <ul class="nav nav-tabs justify-content-center justify-content-md-end" id="tabmenubar" role="tablist">

                                    <li class="nav-item">

                                        <a class="nav-link active" id="arrival-tab" data-toggle="tab" href="#arrival" role="tab" aria-controls="arrival" aria-selected="true">New Arrival</a>

                                    </li>

                                    <li class="nav-item">

                                        <a class="nav-link" id="sellers-tab" data-toggle="tab" href="#sellers" role="tab" aria-controls="sellers" aria-selected="false">Best Sellers</a>

                                    </li>

                                    <li class="nav-item">

                                        <a class="nav-link" id="featured-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="false">Featured</a>

                                    </li>

                                    <li class="nav-item">

                                        <a class="nav-link" id="special-tab" data-toggle="tab" href="#special" role="tab" aria-controls="special" aria-selected="false">Special Offer

                                        </a>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-12">

                        <div class="tab_slider">

                            <div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">

                                {{-- Esclusive Products --}}

                                <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>

                                    @forelse($exclusiveProducts as $ExcProd)

                                    <div class="item">

                                        <div class="product_wrap">

                                            {{-- New Tag --}}

                                            @if($ExcProd->new)

                                                <span class="pr_flash">New</span>

                                            @endif

                                            {{-- End New Tag --}}

                                            <div class="product_img">

                                                <a href="{{ route('product-detail', $ExcProd->slug) }}">

                                                {{-- Product Image --}}

                                                @if($ExcProd->thumbnail)

                                                    <img src="{{ asset('/uploads/' . $ExcProd->thumbnail) }}" alt="{{ $ExcProd->title }}" width="230" height="230" id="{{ $ExcProd->id }}">

                                                {{-- 404 Product Image --}}

                                                @else

                                                        <img src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $ExcProd->title }}"  width="230" height="230">

                                                @endif

                                                    {{-- Hover Gallery Image --}}

                                                @if($ExcProd->gallery)

                                                @forelse($ExcProd->gallery as $exGalleryImage)

                                                    <img class="product_hover_img" src="{{ asset('/uploads/' . $exGalleryImage) }}" alt="el_hover_img3"  width="230" height="230">

                                                @empty

                                                @endforelse

                                                    {{-- Hover Thumbnail image --}}

                                                @elseif(!$ExcProd->thumbnail)

                                                        <img class="product_hover_img" src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $ExcProd->title }}"  width="230" height="230">

                                                @else

                                                    {{-- Hover Product Image --}}

                                                    <img class="product_hover_img" src="{{ asset('/uploads/' . $ExcProd->thumbnail) }}" alt="{{ $ExcProd->title }}" width="230" height="230">

                                                @endif

                                                </a>

                                                <div class="product_action_box">

                                                    <ul class="list_none pr_action_btn">

                                                        <li class="add-to-cart"><a href="{{ ($ExcProd->productVariations->count() == 0) ? route('add-to-cart-single', $ExcProd->slug) : route('product-detail', $ExcProd->slug) }}"><i class="icon-basket-loaded"></i> Add To Cart</a></li>

                                                        <li><a href="{{ route('add-wishlist', $ExcProd->slug) }}"><i class="icon-heart"></i></a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                            <div class="product_info">

                                                <h6 class="product_title"><a href="{{ route('product-detail', $ExcProd->slug) }}">{{ $ExcProd->title }}</a></h6>

                                                <div class="product_price">

                                                    <span class="price">Rs. {{ isset($ExcProd->wholesalePrice) ? number_format($ExcProd->wholesalePrice) : number_format($ExcProd->retailPrice) }}</span>

                                                    @if($ExcProd->wholesalePrice)

                                                    <del>Rs. {{ number_format($ExcProd->retailPrice) }}</del><br>

                                                    @if($ExcProd->wholesalePrice)

                                                    <div class="on_sale">

                                                        <span>Save: Rs {{ number_format($ExcProd->retailPrice - $ExcProd->wholesalePrice) }}</span>

                                                    </div>

                                                    @endif

                                                    @endif

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    @empty

                                    <div class="item">

                                        <div class="product_wrap">

                                            <div class="product_img">

                                                <a href="#">

                                                    <img src="{{ asset('/assets/images/product-not-found.png') }}" alt="el_img1">

                                                    <img class="product_hover_img" src="{{ asset('/assets/images/product-not-found.png') }}" alt="el_hover_img1">

                                                </a>

                                                <div class="product_action_box">

                                                    <ul class="list_none pr_action_btn">

                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>

                                                        <li><a href="#"><i class="icon-heart"></i></a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                            <div class="product_info">

                                                <h6 class="product_title"><a href="#">Demo Products</a></h6>

                                                <div class="product_price">

                                                    <span class="price">$45.00</span>

                                                    <del>$55.25</del>

                                                    <div class="on_sale">

                                                        <span>35% Off</span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    @endforelse

                                </div>

                                {{-- End Exclusive Products --}}

                            </div>

                            <div class="tab-pane fade" id="sellers" role="tabpanel" aria-labelledby="sellers-tab">

                                <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>

                                    @forelse($bestSellerProducts as $bsProd)

                                    <div class="item">

                                        <div class="product_wrap">

                                            @if($bsProd->new)

                                                <span class="pr_flash">New</span>

                                            @endif

                                            <div class="product_img">

                                                <a href="{{ route('product-detail', $bsProd->slug) }}">

                                                {{-- Product Image --}}

                                                @if($bsProd->thumbnail)

                                                    <img src="{{ asset('/uploads/' . $bsProd->thumbnail) }}" alt="{{ $bsProd->title }}" width="230" height="230" id="{{ $bsProd->id }}">

                                                {{-- 404 Product Image --}}

                                                @else

                                                        <img src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $bsProd->title }}"  width="230" height="230">

                                                @endif

                                                    {{-- Hover Gallery Image --}}

                                                @if($bsProd->gallery)

                                                @forelse($bsProd->gallery as $bsGalleryImage)

                                                    <img class="product_hover_img" src="{{ asset('/uploads/' . $bsGalleryImage) }}" alt="el_hover_img3"  width="230" height="230">

                                                @empty

                                                @endforelse

                                                    {{-- Hover Thumbnail image --}}

                                                @elseif(!$bsProd->thumbnail)

                                                        <img class="product_hover_img" src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $bsProd->title }}"  width="230" height="230">

                                                @else

                                                    {{-- Hover Product Image --}}

                                                    <img class="product_hover_img" src="{{ asset('/uploads/' . $bsProd->thumbnail) }}" alt="{{ $bsProd->title }}" width="230" height="230">

                                                @endif

                                                </a>

                                                <div class="product_action_box">

                                                    <ul class="list_none pr_action_btn">

                                                        <li class="add-to-cart"><a href="{{ ($bsProd->productVariations->count() == 0) ? route('add-to-cart-single', $bsProd->slug) : route('product-detail', $bsProd->slug) }}"><i class="icon-basket-loaded"></i> Add To Cart</a></li>

                                                        <li><a href="{{ route('add-wishlist', $bsProd->slug) }}"><i class="icon-heart"></i></a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                            <div class="product_info">

                                                <h6 class="product_title"><a href="{{ route('product-detail', $bsProd->slug) }}">{{ $bsProd->title }}</a></h6>

                                                <div class="product_price">

                                                    <span class="price">Rs. {{ isset($bsProd->wholesalePrice) ? number_format($bsProd->wholesalePrice) : number_format($bsProd->retailPrice) }}</span>

                                                    @if($bsProd->wholesalePrice)

                                                    <del>Rs. {{ number_format($bsProd->retailPrice) }}</del><br>

                                                    @if($bsProd->wholesalePrice)

                                                    <div class="on_sale">

                                                        <span>Save: Rs {{ number_format($bsProd->retailPrice - $bsProd->wholesalePrice) }}</span>

                                                    </div>

                                                    @endif

                                                    @endif

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    @empty

                                    <div class="item">

                                        <div class="product_wrap">

                                            <div class="product_img">

                                                <a href="#">

                                                    <img src="{{ asset('/assets/images/product-not-found.png') }}" alt="el_img1">

                                                    <img class="product_hover_img" src="{{ asset('/assets/images/product-not-found.png') }}" alt="el_hover_img1">

                                                </a>

                                                <div class="product_action_box">

                                                    <ul class="list_none pr_action_btn">

                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>

                                                        <li><a href="#"><i class="icon-heart"></i></a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                            <div class="product_info">

                                                <h6 class="product_title"><a href="#">Demo Products</a></h6>

                                                <div class="product_price">

                                                    <span class="price">$45.00</span>

                                                    <del>$55.25</del>

                                                    <div class="on_sale">

                                                        <span>35% Off</span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    @endforelse

                                </div>

                            </div>

                            <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">

                                <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>

                                    @forelse($featuredProducts as $fProd)

                                    <div class="item">

                                        <div class="product_wrap">

                                            <span class="pr_flash bg-danger">Hot</span>

                                            <div class="product_img">

                                                <a href="{{ route('product-detail', $fProd->slug) }}">

                                                {{-- Product Image --}}

                                                @if($fProd->thumbnail)

                                                    <img src="{{ asset('/uploads/' . $fProd->thumbnail) }}" alt="{{ $fProd->title }}" width="230" height="230" id="{{ $fProd->id }}">

                                                {{-- 404 Product Image --}}

                                                @else

                                                        <img src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $fProd->title }}"  width="230" height="230">

                                                @endif

                                                    {{-- Hover Gallery Image --}}

                                                @if($fProd->gallery)

                                                @forelse($fProd->gallery as $galleryImage)

                                                    <img class="product_hover_img" src="{{ asset('/uploads/' . $galleryImage) }}" alt="el_hover_img3"  width="230" height="230">

                                                @empty

                                                @endforelse

                                                    {{-- Hover Thumbnail image --}}

                                                @elseif(!$fProd->thumbnail)

                                                        <img class="product_hover_img" src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $fProd->title }}"  width="230" height="230">

                                                @else

                                                    {{-- Hover Product Image --}}

                                                    <img class="product_hover_img" src="{{ asset('/uploads/' . $fProd->thumbnail) }}" alt="{{ $fProd->title }}" width="230" height="230">

                                                @endif

                                                </a>

                                                <div class="product_action_box">

                                                    <ul class="list_none pr_action_btn">

                                                        <li class="add-to-cart"><a href="{{ ($fProd->productVariations->count() == 0) ? route('add-to-cart-single', $fProd->slug) : route('product-detail', $fProd->slug) }}"><i class="icon-basket-loaded"></i> Add To Cart</a></li>

                                                        <li><a href="{{ route('add-wishlist', $fProd->slug) }}"><i class="icon-heart"></i></a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                            <div class="product_info">

                                                <h6 class="product_title"><a href="{{ route('product-detail', $fProd->slug) }}">{{ $fProd->title }}</a></h6>

                                                <div class="product_price">

                                                    <span class="price">Rs. {{ isset($fProd->wholesalePrice) ? number_format($fProd->wholesalePrice) : number_format($fProd->retailPrice) }}</span>

                                                    @if($fProd->wholesalePrice)

                                                    <del>Rs. {{ number_format($fProd->retailPrice) }}</del><br>

                                                    @if($fProd->wholesalePrice)

                                                    <div class="on_sale">

                                                        <span>Save: Rs {{ number_format($fProd->retailPrice - $fProd->wholesalePrice) }}</span>

                                                    </div>

                                                    @endif

                                                    @endif

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    @empty

                                    <div class="item">

                                        <div class="product_wrap">

                                            <div class="product_img">

                                                <a href="#">

                                                    <img src="{{ asset('/assets/images/product-not-found.png') }}" alt="el_img1">

                                                    <img class="product_hover_img" src="{{ asset('/assets/images/product-not-found.png') }}" alt="el_hover_img1">

                                                </a>

                                                <div class="product_action_box">

                                                    <ul class="list_none pr_action_btn">

                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>

                                                        <li><a href="#"><i class="icon-heart"></i></a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                            <div class="product_info">

                                                <h6 class="product_title"><a href="#">Demo Products</a></h6>

                                                <div class="product_price">

                                                    <span class="price">$45.00</span>

                                                    <del>$55.25</del>

                                                    <div class="on_sale">

                                                        <span>35% Off</span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    @endforelse

                                </div>

                            </div>

                            <div class="tab-pane fade" id="special" role="tabpanel" aria-labelledby="special-tab">

                                <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>

                                    @forelse($specialOfferProducts as $soProd)

                                    <div class="item">

                                        <div class="product_wrap">

                                            @if($soProd->new)

                                                <span class="pr_flash">New</span>

                                            @endif

                                            <div class="product_img">

                                                <a href="{{ route('product-detail', $soProd->slug) }}">

                                                {{-- Product Image --}}

                                                @if($soProd->thumbnail)

                                                    <img src="{{ asset('/uploads/' . $soProd->thumbnail) }}" alt="{{ $soProd->title }}" width="230" height="230" id="{{ $soProd->id }}">

                                                {{-- 404 Product Image --}}

                                                @else

                                                        <img src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $soProd->title }}"  width="230" height="230">

                                                @endif

                                                    {{-- Hover Gallery Image --}}

                                                @if($soProd->gallery)

                                                @forelse($soProd->gallery as $galleryImage)

                                                    <img class="product_hover_img" src="{{ asset('/uploads/' . $galleryImage) }}" alt="el_hover_img3"  width="230" height="230">

                                                @empty

                                                @endforelse

                                                    {{-- Hover Thumbnail image --}}

                                                @elseif(!$soProd->thumbnail)

                                                        <img class="product_hover_img" src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $soProd->title }}"  width="230" height="230">

                                                @else

                                                    {{-- Hover Product Image --}}

                                                    <img class="product_hover_img" src="{{ asset('/uploads/' . $soProd->thumbnail) }}" alt="{{ $soProd->title }}" width="230" height="230">

                                                @endif

                                                </a>

                                                <div class="product_action_box">

                                                    <ul class="list_none pr_action_btn">

                                                        <li class="add-to-cart"><a href="{{ ($soProd->productVariations->count() == 0) ? route('add-to-cart-single', $soProd->slug) : route('product-detail', $soProd->slug) }}"><i class="icon-basket-loaded"></i> Add To Cart</a></li>

                                                        <li><a href="{{ route('add-wishlist', $soProd->slug) }}"><i class="icon-heart"></i></a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                            <div class="product_info">

                                                <h6 class="product_title"><a href="">{{ $soProd->title }}</a></h6>

                                                <div class="product_price">

                                                    <span class="price">Rs. {{ isset($soProd->wholesalePrice) ? number_format($soProd->wholesalePrice) : number_format($soProd->retailPrice) }}</span>

                                                    @if($soProd->wholesalePrice)

                                                    <del>Rs. {{ number_format($soProd->retailPrice) }}</del><br>

                                                    @if($soProd->wholesalePrice)

                                                    <div class="on_sale">

                                                        <span>Save: Rs {{ number_format($soProd->retailPrice - $soProd->wholesalePrice) }}</span>

                                                    </div>

                                                    @endif

                                                    @endif

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    @empty

                                    <div class="item">

                                        <div class="product_wrap">

                                            <div class="product_img">

                                                <a href="#">

                                                    <img src="{{ asset('/assets/images/product-not-found.png') }}" alt="el_img1">

                                                    <img class="product_hover_img" src="{{ asset('/assets/images/product-not-found.png') }}" alt="el_hover_img1">

                                                </a>

                                                <div class="product_action_box">

                                                    <ul class="list_none pr_action_btn">

                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>

                                                        <li><a href="#"><i class="icon-heart"></i></a></li>

                                                    </ul>

                                                </div>

                                            </div>

                                            <div class="product_info">

                                                <h6 class="product_title"><a href="#">Demo Products</a></h6>

                                                <div class="product_price">

                                                    <span class="price">$45.00</span>

                                                    <del>$55.25</del>

                                                    <div class="on_sale">

                                                        <span>35% Off</span>

                                                    </div>

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

            </div>

        </div>

    </div>

</div>

<!-- END SECTION SHOP -->



<!-- START SECTION SHOP -->

<div class="section pt-0 pb-0">

    <div class="custom-container">

        <div class="row">

            <div class="col-md-12">

                <div class="heading_tab_header">

                    <div class="heading_s2">

                        <h4>Deal Of The Day</h4>

                    </div>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <div class="product_slider carousel_slider owl-carousel owl-theme nav_style3" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "650":{"items": "2"}, "1199":{"items": "2"}}'>

                    @forelse($dealOfDay as $doDay)

                    <div class="item">

                        <div class="deal_wrap">

                            <div class="product_img">

                                @if($doDay->thumbnail)

                                <a href="{{ route('product-detail', $doDay->slug) }}">

                                    <img src="{{ asset('/uploads/' . $doDay->thumbnail) }}" alt="{{ $doDay->title }}" width="330" height="333">

                                </a>

                                @else

                                <a href="{{ route('product-detail', $doDay->slug) }}">

                                    <img src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $doDay->title }}" width="330" height="333">

                                </a>

                                @endif

                            </div>

                            <div class="deal_content">

                                <div class="product_info">

                                    <h5 class="product_title"><a href="{{ route('product-detail', $doDay->slug) }}">{{ $doDay->title }}</a></h5>

                                    <div class="product_price">

                                        <span class="price">Rs. {{ isset($doDay->wholesalePrice) ? number_format($doDay->wholesalePrice) : number_format($doDay->retailPrice) }}</span>

                                        @if($doDay->wholesalePrice)

                                        <del>Rs. {{ number_format($doDay->retailPrice) }}</del><br>

                                        @if($doDay->wholesalePrice)

                                        <div class="on_sale">

                                            <span>Save: Rs {{ number_format($doDay->retailPrice - $doDay->wholesalePrice) }}</span>

                                        </div>

                                        @endif

                                        @endif

                                    </div>

                                </div>

                                {{-- <div class="countdown_time countdown_style4 mb-4" data-time="2020/06/02 12:30:15"></div> --}}

                                <br>

                                    <div class="countdown_time countdown_style4 mb-4" data-time="2020/06/02 12:30:15">

                                    <div class="countdown_box">

                                        <div class="countdown-wrap">

                                            <span class="countdown days">00 </span>

                                            <span class="cd_text">Days</span>

                                        </div>

                                    </div>

                                    <div class="countdown_box">

                                        <div class="countdown-wrap">

                                            <span class="countdown hours">00</span>

                                            <span class="cd_text">Hours</span>

                                        </div>

                                    </div>

                                    <div class="countdown_box">

                                        <div class="countdown-wrap">

                                            <span class="countdown minutes">00</span>

                                            <span class="cd_text">Minutes</span>

                                        </div>

                                    </div>

                                    <div class="countdown_box">

                                        <div class="countdown-wrap">

                                            <span class="countdown seconds">00</span>

                                            <span class="cd_text">Seconds</span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    @empty

                    <div class="item">

                        <div class="deal_wrap">

                            <div class="product_img">

                                <a href="#">

                                    <img src="{{ asset('/assets/images/product-not-found.png') }}" alt="el_img1">

                                </a>

                            </div>

                            <div class="deal_content">

                                <div class="product_info">

                                    <h5 class="product_title"><a href="#">Demo Product</a></h5>

                                    <div class="product_price">

                                        <span class="price">$45.00</span>

                                        <del>$55.25</del>

                                    </div>

                                </div>

                                <div class="deal_progress">

                                    <span class="stock-sold">Already Sold: <strong>6</strong></span>

                                    <span class="stock-available">Available: <strong>8</strong></span>

                                    <div class="progress">

                                        <div class="progress-bar" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width:46%"> 46% </div>

                                    </div>

                                </div>

                                <div class="countdown_time countdown_style4 mb-4" data-time="2020/06/02 12:30:15"></div>

                            </div>

                        </div>

                    </div>

                    @endforelse

                </div>

            </div>

        </div>

    </div>

</div>

<!-- END SECTION SHOP -->



<!-- START SECTION SHOP -->

<div class="section small_pt small_pb">

    <div class="custom-container">

        <div class="row">

            <div class="col-xl-3 d-none d-xl-block">

                <div class="sale-banner">

                    @forelse($bottomleftAdMedia as $laaMedia)

                    <a class="hover_effect1" href="{{ route('product-detail', $laaMedia->product->slug) }}">

                        @if($laaMedia->image)

                        <img src="{{  asset('/uploads/media/' . $laaMedia->image) }}" alt="{{ $laaMedia->product->title }}" width="385" height="435">

                        @else

                        <img src="{{  asset('/assets/images/404.jpg') }}" alt="{{ $laaMedia->product->title }}" width="385" height="435">

                        @endif

                    </a>

                    @empty

                     <a class="hover_effect1" href="#">

                        <img src="{{ asset('/assets/images/sidebar-banner-not-found.png') }}" alt="shop_banner_img7">

                    </a>

                    @endforelse

                </div>

            </div>

            <div class="col-xl-9">

                <div class="row">

                    <div class="col-12">

                        <div class="heading_tab_header">

                            <div class="heading_s2">

                                <h4>Our Top Categories</h4>

                            </div>

                            <div class="view_all">

                                <a href="#" class="text_default"><i class="linearicons-power"></i> <span>View All</span></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-12">

                        <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>

                            @forelse($trendingProducts as $trnProduct)

                            <div class="item">

                                <div class="product_wrap">

                                @if($trnProduct->new)

                                    <span class="pr_flash">New</span>

                                @endif

                                <div class="product_img">

                                    <a href="{{ route('products') }}">

                                    {{-- Product Image --}}

                                    @if($trnProduct->products)

                                        @foreach($trnProduct->products as $image)

                                            <img src="{{ asset('/uploads/' . $image->thumbnail) }}" alt="{{ $trnProduct->title }}" width="230" height="230" id="{{ $trnProduct->id }}">

                                            @break

                                        @endforeach

                                    @endif

                                        </a>

                                    </div>

                                    <div class="product_info">

                                    <h6 class="product_title"><a class="center-title" href="{{ route('products') }}"><b>{{ $trnProduct->name }}</b></a></h6>

                                    </div>

                                </div>

                            </div>

                            @empty

                            <div class="item">

                                <div class="product_wrap">

                                    <div class="product_img">

                                        <a href="#">

                                            <img src="{{ asset('/assets/images/product-not-found.png') }}" alt="el_img1">

                                        </a>

                                    </div>

                                    <div class="product_info">

                                        <h6 class="product_title"><a href="#">Red & Black Headphone</a></h6>

                                    </div>

                                </div>

                            </div>

                            @endforelse

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- END SECTION SHOP -->



<!-- START SECTION CLIENT LOGO -->

@if($brands)

<div class="section pt-0 small_pb">

    <div class="custom-container">

        <div class="row">

            <div class="col-md-12">

                <div class="heading_tab_header">

                    <div class="heading_s2">

                        <h4>Our Brands</h4>

                    </div>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-12">

                <div class="client_logo carousel_slider owl-carousel owl-theme nav_style3" data-dots="false" data-nav="true" data-margin="30" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "5"}, "1199":{"items": "6"}}'>

                    @forelse($brands as $brand)

                    <div class="item">

                        <div class="cl_logo">

                            <img src="{{ asset('/uploads/brand/' . $brand->image) }}" alt="brand" width="163" height="85" />

                        </div>

                    </div>

                    @empty

                    <div class="item">

                        <div class="cl_logo">

                            <img src="{{ asset('/assets/images/brand-not-found.png') }}" alt="cl_logo"/>

                        </div>

                    </div>

                    @endforelse

                </div>

            </div>

        </div>

    </div>

</div>

@endif

<!-- END SECTION CLIENT LOGO -->



<!-- START SECTION SHOP -->

<div class="section pt-0 pb_20">

    <div class="custom-container">

        <div class="row">

            <div class="col-lg-4">

                <div class="row">

                    <div class="col-12">

                        <div class="heading_tab_header">

                            <div class="heading_s2">

                                <h4>Featured Products</h4>

                            </div>

                            <div class="view_all">

                                <a href="#" class="text_default"><span>View All</span></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-12">

                        <div class="product_slider carousel_slider product_list owl-carousel owl-theme nav_style5" data-nav="true" data-dots="false" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "380":{"items": "1"}, "640":{"items": "2"}, "991":{"items": "1"}}'>

                            <div class="item">

                            @forelse($footerOneFeaturedProducts as $fofProducts)

                                <div class="product_wrap">

                                    <span class="pr_flash">New</span>

                                    <div class="product_img">

                                        <a href="{{ route('product-detail', $fofProducts->slug) }}">

                                        {{-- Product Image --}}

                                            @if($fofProducts->thumbnail)

                                                <img width="110" height="122" src="{{ asset('/uploads/' . $fofProducts->thumbnail) }}" alt="{{ $fofProducts->title }} id={{ $fofProducts->id }}">

                                            {{-- 404 Product Image --}}

                                            @else

                                                <img width="110" height="122" src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $fofProducts->title }}">

                                            @endif

                                                {{-- Hover Gallery Image --}}

                                            @if($fofProducts->gallery)

                                            @forelse($fofProducts->gallery as $exGalleryImage)

                                                <img width="110" height="122" class="product_hover_img" src="{{ asset('/uploads/' . $exGalleryImage) }}" alt="el_hover_img3">

                                            @empty

                                            @endforelse

                                                {{-- Hover Thumbnail image --}}

                                            @elseif(!$fofProducts->thumbnail)

                                                <img width="110" height="122" class="product_hover_img" src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $fofProducts->title }}">

                                            @else

                                                {{-- Hover Product Image --}}

                                                <img width="110" height="122" class="product_hover_img" src="{{ asset('/uploads/' . $fofProducts->thumbnail) }}" alt="{{ $fofProducts->title }}">

                                            @endif



                                        </a>

                                    </div>

                                    <div class="product_info">

                                        <h6 class="product_title"><a href="{{ route('product-detail', $fofProducts->slug) }}">{{ $fofProducts->title }}">{{ $fofProducts->title }}</a></h6>

                                        <div class="product_price">

                                            <span class="price">Rs. {{ isset($fofProducts->wholesalePrice) ? number_format($fofProducts->wholesalePrice) : number_format($fofProducts->retailPrice) }}</span>

                                            @if($fofProducts->wholesalePrice)

                                            <del>Rs. {{ number_format($fofProducts->retailPrice) }}</del><br>

                                            @if($fofProducts->wholesalePrice)

                                            <div class="on_sale">

                                                <span>Save: Rs {{ number_format($fofProducts->retailPrice - $fofProducts->wholesalePrice) }}</span>

                                            </div>

                                            @endif

                                            @endif

                                        </div>

                                    </div>

                                </div>

                            @empty

                            <div class="product_wrap">

                                <div class="product_img">

                                    <a href="#">

                                        <img src="{{ asset('/assets/images/el_img2.png') }}" alt="el_img2">

                                        <img class="product_hover_img" src="{{ asset('/assets/images/el_img2.png') }}" alt="el_hover_img2">

                                    </a>

                                </div>

                                <div class="product_info">

                                    <h6 class="product_title"><a href="shop-product-detail.html">Demo Products</a></h6>

                                    <div class="product_price">

                                        <span class="price">$55.00</span>

                                        <del>$95.00</del>

                                        <div class="on_sale">

                                            <span>25% Off</span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            @endforelse

                            </div>

                            <div class="item">    

                            @forelse($footerTwoFeaturedProducts as $ftfProducts)

                                <div class="product_wrap">

                                    <span class="pr_flash">New</span>

                                    <div class="product_img">

                                        <a href="{{ route('product-detail', $ftfProducts->slug) }}">

                                        {{-- Product Image --}}

                                            @if($ftfProducts->thumbnail)

                                                <img width="110" height="122" src="{{ asset('/uploads/' . $ftfProducts->thumbnail) }}" alt="{{ $ftfProducts->title }} id="{{ $ftfProducts->id }}">

                                            {{-- 404 Product Image --}}

                                            @else

                                                <img width="110" height="122" src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $ftfProducts->title }}">

                                            @endif

                                                {{-- Hover Gallery Image --}}

                                            @if($ftfProducts->gallery)

                                            @forelse($ftfProducts->gallery as $exGalleryImage)

                                                <img width="110" height="122" class="product_hover_img" src="{{ asset('/uploads/' . $exGalleryImage) }}" alt="el_hover_img3">

                                            @empty

                                            @endforelse

                                                {{-- Hover Thumbnail image --}}

                                            @elseif(!$ftfProducts->thumbnail)

                                                <img width="110" height="122" class="product_hover_img" src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $ftfProducts->title }}">

                                            @else

                                                {{-- Hover Product Image --}}

                                                <img width="110" height="122" class="product_hover_img" src="{{ asset('/uploads/' . $ftfProducts->thumbnail) }}" alt="{{ $ftfProducts->title }}">

                                            @endif

                                        </a>

                                    </div>

                                    <div class="product_info">

                                        <h6 class="product_title"><a href="{{ route('product-detail', $ftfProducts->slug) }}">{{ $ftfProducts->title }}">{{ $ftfProducts->title }}</a></h6>

                                        <div class="product_price">

                                            <span class="price">Rs. {{ isset($ftfProducts->wholesalePrice) ? number_format($ftfProducts->wholesalePrice) : number_format($ftfProducts->retailPrice) }}</span>

                                            @if($ftfProducts->wholesalePrice)

                                            <del>Rs. {{ number_format($ftfProducts->retailPrice) }}</del><br>

                                            @if($ftfProducts->wholesalePrice)

                                            <div class="on_sale">

                                                <span>Save: Rs {{ number_format($ftfProducts->retailPrice - $ftfProducts->wholesalePrice) }}</span>

                                            </div>

                                            @endif

                                            @endif

                                                </div>    

                                    </div>

                                </div>

                            @empty

                            <div class="product_wrap">

                                <div class="product_img">

                                    <a href="#">

                                        <img src="{{ asset('/assets/images/el_img2.png') }}" alt="el_img2">

                                        <img class="product_hover_img" src="{{ asset('/assets/images/el_img2.png') }}" alt="el_hover_img2">

                                    </a>

                                </div>

                                <div class="product_info">

                                    <h6 class="product_title"><a href="shop-product-detail.html">Demo Products</a></h6>

                                    <div class="product_price">

                                        <span class="price">$55.00</span>

                                        <del>$95.00</del>

                                        <div class="on_sale">

                                            <span>25% Off</span>

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

            <div class="col-lg-4">

                <div class="row">

                    <div class="col-12">

                        <div class="heading_tab_header">

                            <div class="heading_s2">

                                <h4>Top Rated Products</h4>

                            </div>

                            <div class="view_all">

                                <a href="#" class="text_default"><span>View All</span></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-12">

                        <div class="product_slider carousel_slider product_list owl-carousel owl-theme nav_style5" data-nav="true" data-dots="false" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "380":{"items": "1"}, "640":{"items": "2"}, "991":{"items": "1"}}'>

                            <div class="item">

                                @forelse($topOneRatedProducts as $torProduct)

                                <div class="product_wrap">

                                    {{-- New Tag --}}

                                    @if($torProduct->new)

                                        <span class="pr_flash">New</span>

                                    @endif

                                    {{-- End New Tag --}}

                                    <div class="product_img">

                                        <a href="{{ route('product-detail', $torProduct->slug) }}">

                                            

                                             @if($torProduct->thumbnail)

                                                <img width="110" height="122" src="{{ asset('/uploads/' . $torProduct->thumbnail) }}" alt="{{ $torProduct->title }}" id="{{ $torProduct->id }}">

                                            {{-- 404 Product Image --}}

                                            @else

                                                <img width="110" height="122" src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $torProduct->title }}">

                                            @endif

                                                {{-- Hover Gallery Image --}}

                                            @if($torProduct->gallery)

                                            @forelse($torProduct->gallery as $exGalleryImage)

                                                <img width="110" height="122" class="product_hover_img" src="{{ asset('/uploads/' . $exGalleryImage) }}" alt="el_hover_img3">

                                            @empty

                                            @endforelse

                                                {{-- Hover Thumbnail image --}}

                                            @elseif(!$torProduct->thumbnail)

                                                <img width="110" height="122" class="product_hover_img" src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $torProduct->title }}">

                                            @else

                                                {{-- Hover Product Image --}}

                                                <img width="110" height="122" class="product_hover_img" src="{{ asset('/uploads/' . $torProduct->thumbnail) }}" alt="{{ $torProduct->title }}">

                                            @endif



                                        </a>

                                    </div>

                                    <div class="product_info">

                                        <h6 class="product_title"><a href="{{ route('product-detail', $torProduct->slug) }}">{{ $torProduct->title }}">{{ $torProduct->title }}</a></h6>

                                        <div class="product_price">

                                            <span class="price">Rs. {{ isset($torProduct->wholesalePrice) ? number_format($torProduct->wholesalePrice) : number_format($torProduct->retailPrice) }}</span>

                                            @if($torProduct->wholesalePrice)

                                            <del>Rs. {{ number_format($torProduct->retailPrice) }}</del><br>

                                            @if($torProduct->wholesalePrice)

                                            <div class="on_sale">

                                                <span>Save: Rs {{ number_format($torProduct->retailPrice - $torProduct->wholesalePrice) }}</span>

                                            </div>

                                            @endif

                                            @endif

                                                </div>

                                    </div>

                                </div>

                            @empty

                            <div class="product_wrap">

                                <div class="product_img">

                                    <a href="#">

                                        <img src="{{ asset('/assets/images/el_img2.png') }}" alt="el_img2">

                                        <img class="product_hover_img" src="{{ asset('/assets/images/el_img2.png') }}" alt="el_hover_img2">

                                    </a>

                                </div>

                                <div class="product_info">

                                    <h6 class="product_title"><a href="shop-product-detail.html">Demo Products</a></h6>

                                    <div class="product_price">

                                        <span class="price">$55.00</span>

                                        <del>$95.00</del>

                                        <div class="on_sale">

                                            <span>25% Off</span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            @endforelse

                            </div>

                            <div class="item">

                             @forelse($topTwoRatedProducts as $ttrProduct)

                                <div class="product_wrap">

                                    {{-- New Tag --}}

                                    @if($ttrProduct->new)

                                        <span class="pr_flash">New</span>

                                    @endif

                                    {{-- End New Tag --}}

                                    <div class="product_img">

                                        <a href="{{ route('product-detail', $ttrProduct->slug) }}">

                                             @if($ttrProduct->thumbnail)

                                                <img width="110" height="122" src="{{ asset('/uploads/' . $ttrProduct->thumbnail) }}" alt="{{ $ttrProduct->title }}" id="{{ $ttrProduct->id }}">

                                            {{-- 404 Product Image --}}

                                            @else

                                                <img width="110" height="122" src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $ttrProduct->title }}">

                                            @endif

                                                {{-- Hover Gallery Image --}}

                                            @if($ttrProduct->gallery)

                                            @forelse($ttrProduct->gallery as $exGalleryImage)

                                                <img width="110" height="122" class="product_hover_img" src="{{ asset('/uploads/' . $exGalleryImage) }}" alt="el_hover_img3">

                                            @empty

                                            @endforelse

                                                {{-- Hover Thumbnail image --}}

                                            @elseif(!$ttrProduct->thumbnail)

                                                <img width="110" height="122" class="product_hover_img" src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $ttrProduct->title }}">

                                            @else

                                                {{-- Hover Product Image --}}

                                                <img width="110" height="122" class="product_hover_img" src="{{ asset('/uploads/' . $ttrProduct->thumbnail) }}" alt="{{ $ttrProduct->title }}">

                                            @endif

                                        </a>

                                    </div>

                                    <div class="product_info">

                                        <h6 class="product_title"><a href="{{ route('product-detail', $ttrProduct->slug) }}">{{ $ttrProduct->title }}">{{ $ttrProduct->title }}</a></h6>

                                        <div class="product_price">

                                            <span class="price">Rs. {{ isset($ttrProduct->wholesalePrice) ? number_format($ttrProduct->wholesalePrice) : number_format($ttrProduct->retailPrice) }}</span>

                                            @if($ttrProduct->wholesalePrice)

                                            <del>Rs. {{ number_format($ttrProduct->retailPrice) }}</del><br>

                                            @if($ttrProduct->wholesalePrice)

                                            <div class="on_sale">

                                                <span>Save: Rs {{ number_format($ttrProduct->retailPrice - $ttrProduct->wholesalePrice) }}</span>

                                            </div>

                                            @endif

                                            @endif

                                                </div>



                                    </div>

                                </div>

                                @empty

                                <div class="product_wrap">

                                <div class="product_img">

                                    <a href="#">

                                        <img src="{{ asset('/assets/images/el_img2.png') }}" alt="el_img2">

                                        <img class="product_hover_img" src="{{ asset('/assets/images/el_img2.png') }}" alt="el_hover_img2">

                                    </a>

                                </div>

                                <div class="product_info">

                                    <h6 class="product_title"><a href="shop-product-detail.html">Demo Products</a></h6>

                                    <div class="product_price">

                                        <span class="price">$55.00</span>

                                        <del>$95.00</del>

                                        <div class="on_sale">

                                            <span>25% Off</span>

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

            <div class="col-lg-4">

                <div class="row">

                    <div class="col-12">

                        <div class="heading_tab_header">

                            <div class="heading_s2">

                                <h4>On Sale Products</h4>

                            </div>

                            <div class="view_all">

                                <a href="#" class="text_default"><span>View All</span></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-12">

                        <div class="product_slider carousel_slider product_list owl-carousel owl-theme nav_style5" data-nav="true" data-dots="false" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "380":{"items": "1"}, "640":{"items": "2"}, "991":{"items": "1"}}'>

                            <div class="item">

                                @forelse($onTwoSaleProducts as $oosProduct)

                                <div class="product_wrap">

                                    <span class="pr_flash bg-danger">Hot</span>

                                    <div class="product_img">

                                        <a href="{{ route('product-detail', $oosProduct->slug) }}">

                                            @if($oosProduct->thumbnail)

                                                <img width="110" height="122" src="{{ asset('/uploads/' . $oosProduct->thumbnail) }}" alt="{{ $oosProduct->title }}" id="{{ $oosProduct->id }}">

                                            {{-- 404 Product Image --}}

                                            @else

                                                <img width="110" height="122" src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $oosProduct->title }}">

                                            @endif

                                                {{-- Hover Gallery Image --}}

                                            @if($oosProduct->gallery)

                                            @forelse($oosProduct->gallery as $exGalleryImage)

                                                <img width="110" height="122" class="product_hover_img" src="{{ asset('/uploads/' . $exGalleryImage) }}" alt="el_hover_img3">

                                            @empty

                                            @endforelse

                                                {{-- Hover Thumbnail image --}}

                                            @elseif(!$oosProduct->thumbnail)

                                                <img width="110" height="122" class="product_hover_img" src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $oosProduct->title }}">

                                            @else

                                                {{-- Hover Product Image --}}

                                                <img width="110" height="122" class="product_hover_img" src="{{ asset('/uploads/' . $oosProduct->thumbnail) }}" alt="{{ $oosProduct->title }}">

                                            @endif

                                        </a>

                                    </div>

                                    <div class="product_info">

                                        <h6 class="product_title"><a href="{{ route('product-detail', $oosProduct->slug) }}">{{ $oosProduct->title }}</a></h6>

                                        <div class="product_price">

                                            <span class="price">Rs. {{ isset($oosProduct->wholesalePrice) ? number_format($oosProduct->wholesalePrice) : number_format($oosProduct->retailPrice) }}</span>

                                            @if($oosProduct->wholesalePrice)

                                            <del>Rs. {{ number_format($oosProduct->retailPrice) }}</del><br>

                                            @if($oosProduct->wholesalePrice)

                                            <div class="on_sale">

                                                <span>Save: Rs {{ number_format($oosProduct->retailPrice - $oosProduct->wholesalePrice) }}</span>

                                            </div>

                                            @endif

                                            @endif

                                                </div>

                                    </div>

                                </div>

                                @empty

                                <div class="product_wrap">

                                <div class="product_img">

                                    <a href="#">

                                        <img src="{{ asset('/assets/images/el_img2.png') }}" alt="el_img2">

                                        <img class="product_hover_img" src="{{ asset('/assets/images/el_img2.png') }}" alt="el_hover_img2">

                                    </a>

                                </div>

                                <div class="product_info">

                                    <h6 class="product_title"><a href="shop-product-detail.html">Demo Products</a></h6>

                                    <div class="product_price">

                                        <span class="price">$55.00</span>

                                        <del>$95.00</del>

                                        <div class="on_sale">

                                            <span>25% Off</span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                                @endforelse

                            </div>

                            <div class="item">

                                @forelse($onTwoSaleProducts as $otsProduct)

                                <div class="product_wrap">

                                    <span class="pr_flash bg-danger">Hot</span>

                                    <div class="product_img">

                                        <a href="{{ route('product-detail', $otsProduct->slug) }}">

                                            @if($otsProduct->thumbnail)

                                                <img width="110" height="122" src="{{ asset('/uploads/' . $otsProduct->thumbnail) }}" alt="{{ $otsProduct->title }}" id="{{ $otsProduct->id }}">

                                            {{-- 404 Product Image --}}

                                            @else

                                                <img width="110" height="122" src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $otsProduct->title }}">

                                            @endif

                                                {{-- Hover Gallery Image --}}

                                            @if($otsProduct->gallery)

                                            @forelse($otsProduct->gallery as $exGalleryImage)

                                                <img width="110" height="122" class="product_hover_img" src="{{ asset('/uploads/' . $exGalleryImage) }}" alt="el_hover_img3">

                                            @empty

                                            @endforelse

                                                {{-- Hover Thumbnail image --}}

                                            @elseif(!$otsProduct->thumbnail)

                                                <img width="110" height="122" class="product_hover_img" src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $otsProduct->title }}">

                                            @else

                                                {{-- Hover Product Image --}}

                                                <img width="110" height="122" class="product_hover_img" src="{{ asset('/uploads/' . $otsProduct->thumbnail) }}" alt="{{ $otsProduct->title }}">

                                            @endif    

                                        </a>

                                    </div>

                                    <div class="product_info">

                                        <h6 class="product_title"><a href="{{ route('product-detail', $otsProduct->slug) }}">{{ $otsProduct->title }}</a></h6>

                                        <div class="product_price">

                                            <span class="price">Rs. {{ isset($otsProduct->wholesalePrice) ? number_format($otsProduct->wholesalePrice) : number_format($otsProduct->retailPrice) }}</span>

                                            @if($otsProduct->wholesalePrice)

                                            <del>Rs. {{ number_format($otsProduct->retailPrice) }}</del><br>

                                            @if($otsProduct->wholesalePrice)

                                            <div class="on_sale">

                                                <span>Save: Rs {{ number_format($otsProduct->retailPrice - $otsProduct->wholesalePrice) }}</span>

                                            </div>

                                            @endif

                                            @endif

                                                </div>

                                    </div>

                                </div>

                                @empty

                                <div class="product_wrap">

                                <div class="product_img">

                                    <a href="#">

                                        <img src="{{ asset('/assets/images/el_img2.png') }}" alt="el_img2">

                                        <img class="product_hover_img" src="{{ asset('/assets/images/el_img2.png') }}" alt="el_hover_img2">

                                    </a>

                                </div>

                                <div class="product_info">

                                    <h6 class="product_title"><a href="shop-product-detail.html">Demo Products</a></h6>

                                    <div class="product_price">

                                        <span class="price">$55.00</span>

                                        <del>$95.00</del>

                                        <div class="on_sale">

                                            <span>25% Off</span>

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

        </div>

    </div>

</div>

<!-- END SECTION SHOP -->



<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-body">

        <img src="//placehold.it/600x400" class="img-fluid" alt=""/>

      </div>

    </div>

  </div>

</div>





@include('partials/footer-newsletter')



</div>

<!-- END MAIN CONTENT -->



<!-- START FOOTER -->

<footer class="bg_gray">

    <div class="footer_top small_pt pb_20">

        <div class="custom-container">

            <div class="row">

                <div class="col-lg-4 col-md-12 col-sm-12">

                    <div class="widget">

                        <div class="footer_logo">

                            <a href="#"><img src="{{ asset('/assets/images/logo_dark.png') }}" alt="logo"/></a>

                        </div>

                        <p class="mb-3">The Bartan Store aims to empower and encourage families to cook, eat and live healthy. This begins with your cookware and kitchen utensils.</p>

                        <ul class="contact_info">

                            <li>

                                <i class="ti-location-pin"></i>

                                @if(\App\Contact::count() != 0)

                                    <p>{{ $contact->address }}</p>

                                @else

                                    <p>Demo Address</p>

                                @endif

                            </li>

                            <li>

                                <i class="ti-email"></i>

                                @if(\App\Contact::count() != 0)

                                    <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>

                                @else

                                    <a href="#">John@doe.com</a>

                                @endif

                            </li>

                            <li>

                                <i class="ti-mobile"></i>

                                @if(\App\Contact::count() != 0)

                                    <p>{{ $contact->phone }}</p>

                                @else

                                    <p>0900-78601</p>

                                @endif

                            </li>

                        </ul>

                    </div>

                </div>

                <div class="col-lg-2 col-md-4 col-sm-6">

                    <div class="widget">

                        <h6 class="widget_title">Useful Links</h6>

                        <ul class="widget_links">

                            <li><a href="/">Home</a></li>

                            <li><a href="#">Shop</a></li>

                            <li><a href="#">Catgories</a></li>

                            <li><a href="#">Gallery</a></li>

                            <li><a href="#">Support</a></li>

                        </ul>

                    </div>

                </div>



                <div class="col-lg-2 col-md-4 col-sm-6">

                    <div class="widget">

                        <h6 class="widget_title">Customer Service</h6>

                        <ul class="widget_links">

                            <li><a href="{{ route('faq') }}">FAQ</a></li>

                            <li><a href="{{ route('get-contactUs') }}">Contact Us</a></li>

                            <li><a href="{{ route('faq') }}">Terms & Use</a></li>

                            <li><a href="{{ route('faq') }}">Returns & Excahnges</a></li>

                            <li><a href="{{ route('faq') }}">Our Guarantee</a></li>

                            <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>

                        </ul>

                    </div>

                </div>

                <div class="col-lg-2 col-md-3 col-sm-6">

                    <div class="widget">

                        <h6 class="widget_title">Category</h6>

                        <ul class="widget_links">

                            @if(\App\Category::count() != 0) 

                            @php

                             $categories = App\Category::where('status', 'Activated')->orWhere('id', 'DESC')->take(5)->get();

                            

                            @endphp

                            @foreach($categories as $category)

                                <li><a href="#">{{ $category->name }}</a></li>

                            @endforeach

                            @else

                            <li><a href="#">No Category Found</a></li>

                            @endif

                        </ul>

                    </div>

                </div>

                <div class="col-lg-2 col-md-3 col-sm-6">

                    <div class="widget">

                        <h6 class="widget_title">Top Products</h6>

                        <ul class="widget_links">

                            @if(\App\Product::count() != 0) 

                            @php

                             $products = App\Product::where('status', 'Activated')->orWhere('id', 'ASC')->take(5)->get();

                            

                            @endphp

                            @foreach($products as $product)

                                <li><a href="{{ route('product-detail', $product->slug) }}">{{ str_limit($product->title, 25) }}</a></li>

                            @endforeach

                            @else

                            <li><a href="#">No Product Found</a></li>

                            @endif

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="middle_footer">

        <div class="custom-container">

            <div class="row">

                <div class="col-12">

                    <div class="shopping_info">

                        <div class="row justify-content-center">

                            <div class="col-md-4">  

                                <div class="icon_box icon_box_style2">

                                    <div class="icon">

                                        <i class="flaticon-shipped"></i>

                                    </div>

                                    <div class="icon_box_content">

                                        <h5>Free Delivery</h5>

                                        <p>Now delivering across Pakistan. Free Shipping over Rs.2000.</p>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-4">  

                                <div class="icon_box icon_box_style2">

                                    <div class="icon">

                                        <i class="flaticon-money-back"></i>

                                    </div>

                                    <div class="icon_box_content">

                                        <h5>30 Day Returns Guarantee</h5>

                                        <p>When returning the items, we do a refund of the order. If you wish to exchange for another item or color, you can make a new order on our store.</p>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-4">  

                                <div class="icon_box icon_box_style2">

                                    <div class="icon">

                                        <i class="flaticon-support"></i>

                                    </div>

                                    <div class="icon_box_content">

                                        <h5>27/4 Online Support</h5>

                                        <p>Our Help Center is full of online resources that will guide you step by step through using our features, setting up your store or troubleshooting issues.</p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="bottom_footer border-top-tran">

        <div class="custom-container">

            <div class="row">

                <div class="col-lg-4">

                    <p class="mb-lg-0 text-center">© 2020 All Rights Reserved by theBartanStore <br />Proudly Powered by <a href="https://softtackles.com/">SoftTackles</a></p>

                </div>

                <div class="col-lg-4 order-lg-first">

                    <div class="widget mb-lg-0">

                        <ul class="social_icons text-center text-lg-left">

                            <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>

                            <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>

                            <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

</footer>

<!-- END FOOTER -->

<!-- Latest jQuery --> 

<script src="{{ asset('/assets/js/jquery-1.12.4.min.js') }}"></script> 

<!-- popper min js -->

<script src="{{ asset('/assets/js/popper.min.js') }}"></script>

<!-- Latest compiled and minified Bootstrap --> 

<script src="{{ asset('/assets/bootstrap/js/bootstrap.min.js') }}"></script> 

<!-- owl-carousel min js  --> 

<script src="{{ asset('/assets/owlcarousel/js/owl.carousel.min.js') }}"></script> 

<!-- magnific-popup min js  --> 

<script src="{{ asset('/assets/js/magnific-popup.min.js') }}"></script> 

<!-- waypoints min js  --> 

<script src="{{ asset('/assets/js/waypoints.min.js') }}"></script> 

<!-- parallax js  --> 

<script src="{{ asset('/assets/js/parallax.js') }}"></script> 

<!-- countdown js  --> 

<script src="{{ asset('/assets/js/jquery.countdown.min.js') }}"></script> 

<!-- fit video  -->

<script src="{{ asset('/assets/js/Hoverparallax.min.js') }}"></script>

<!-- jquery.countTo js  -->

<script src="{{ asset('/assets/js/jquery.countTo.js') }}"></script>

<!-- imagesloaded js --> 

<script src="{{ asset('/assets/js/imagesloaded.pkgd.min.js') }}"></script>

<!-- isotope min js --> 

<script src="{{ asset('/assets/js/isotope.min.js') }}"></script>

<!-- jquery.appear js  -->

<script src="{{ asset('/assets/js/jquery.appear.js') }}"></script>

<!-- jquery.parallax-scroll js -->

<script src="{{ asset('/assets/js/jquery.parallax-scroll.js') }}"></script>

<!-- jquery.dd.min js -->

<script src="{{ asset('/assets/js/jquery.dd.min.js') }}"></script>

<!-- slick js -->

<script src="{{ asset('/assets/js/slick.min.js') }}"></script>

<!-- elevatezoom js -->

<script src="{{ asset('/assets/js/jquery.elevatezoom.js') }}"></script>

<!-- scripts js --> 

<script src="{{ asset('/assets/js/scripts.js') }}"></script>

{{-- newsletter --}}

<script src="{{ asset('/assets/js/newsletter.js') }}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdn.rawgit.com/mrvautin/typewrite/master/dist/typewrite.min.js"></script>

<script>

jQuery(document).ready(function(){

jQuery("#cart-success").fadeOut(10000);

setInterval(function time(){

  var d = new Date();

  var hours = 24 - d.getHours();

  var min = 60 - d.getMinutes();

  if((min + '').length == 1){

    min = '0' + min;

  }

  var sec = 60 - d.getSeconds();

  if((sec + '').length == 1){

        sec = '0' + sec;

  }

  jQuery('.hours').html(hours);

  jQuery('.minutes').html(min);

  jQuery('.seconds').html(sec);

}, 1000);



jQuery('#typewriteText').typewrite({

    continuous: true,

        actions: [

            {delay: 3000},

            {type: 'Weclome To the Bartan Store.'},

            {delay: 3000},

            {remove: {num: 28, type: 'stepped'}},

            {delay: 2000},

            {type: 'Now delivering across Pakistan. Free Shipping over Rs.2000.'},

            {delay: 5000},

            {remove: {num: 59, type: 'whole'}},

            {type: 'Copyright 2020 Seeba Lifestyles Pvt Ltd. all rights reserved.'},

            {delay: 3000},

            {remove: {num: 61, type: 'stepped'}},

        ]

    });

});    

</script>



</body>

</html>