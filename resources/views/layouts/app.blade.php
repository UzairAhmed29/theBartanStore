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
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- SITE TITLE -->
@php
    if(empty($title))
        $title = '';
@endphp
<title>{{ (request()->is('wishlist')) ? 'Wishlist' : $title }} | theBartanStore</title>
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
<!-- jquery-ui CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
<!-- Slick CSS -->
<link rel="stylesheet" href="{{ asset('/assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/slick-theme.css') }}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel=”stylesheet” href="{{ asset('/admin/assets/vendor/sweetalert/sweetalert.css') }}">
@yield('stylesheet')

</head>

<body>
@if(\App\Contact::count() != 0)
@php
$contact = \App\Contact::find(1);
@endphp
@endif
<!-- LOADER -->
<div class="preloader">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- END LOADER -->
@include('./partials/modal-newsletter')
<!-- START HEADER -->
<header class="header_wrap">
    <div class="top-header light_skin bg_dark d-none d-md-block" style="height: 50px!important">

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
                                <li><a href="{{ route('get-my-account') }}"><i class="ti-user"></i><span>{{ auth()->user()->name}}</span></a></li>
                                <li><form action="{{ route('fLogout') }}" method="POST" style="">
                                    @csrf
                                    <button type="submit" style="background: none; color: #ffffff; border: none;"><i class="ti-lock"></i> Logout</button>
                                </form>
                              </li>
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
                <a class="navbar-brand" href="https://thebartanstore.com/">
                    <img class="logo_light" src="{{ asset('/assets/images/logo_light.png') }}" alt="logo" />
                    <img class="logo_dark" src="{{ asset('/assets/images/logo_dark.png') }}" alt="logo" />
                </a>
                <div class="product_search_form rounded_input">
                    <form action="{{ route('searchByCategory') }}" method="POST">
                        @csrf
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="custom_select">
                                    @php
                                        $searchCategories = \App\Category::where('status', 'Activated')->get();
                                    @endphp
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
                            <input class="form-control" name="q" placeholder="Search Product..."  type="text">
                            <button type="submit" class="search_btn2"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="{{ route('wishlist') }}" class="nav-link"><i class="linearicons-heart"></i><span class="wishlist_count">
                        @if(Session::has('wishlist'))
                        {{ Session::get('wishlist')->totalQuantity }}
                        @endif
                    </span></a></li>
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="{{ route('view-cart') }}" data-toggle="dropdown"><i class="linearicons-bag2"></i><span class="cart_count">{{ Cart::getTotalQuantity() }}</span><span class="amount"><span class="currency_symbol">Rs. </span>{{ Cart::getSubTotal() }}</span></a>
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
                        @php
                            $menuCategory = \App\Category::where('status', 'Activated')->with('products')->take(10)->get();
                        @endphp
                        <div id="navCatContent" class="nav_cat navbar collapse">
                            <ul> 
                                @forelse($menuCategory as $mCategory)
                                <li class="dropdown dropdown-mega-menu">
                                    <a class="dropdown-item nav-link {{ ($mCategory->products->count() > 0) ? 'dropdown-toggler' : '' }}" href="#" data-toggle="dropdown"><span>{{ $mCategory->name }}</span></a>
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
                                    @php
                                        $moreMenuCategory = \App\Category::where('status', 'Activated')->skip(10)->take(6)->get();
                                    @endphp
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

<!-- START SECTION BREADCRUMB -->

<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
@yield('content')
<!-- END MAIN CONTENT -->

<!-- START FOOTER -->
<footer class="footer_dark">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="footer_logo">
                            <a href="/"><img src="{{ asset('/assets/images/logo_light.png') }}" alt="logo"/></a>
                        </div>
                        <p>The Bartan Store aims to empower and encourage families to cook, eat and live healthy. This begins with your cookware and kitchen utensils.</p>
                    </div>
                    <div class="widget">
                        <ul class="social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">Useful Links</h6>
                        <ul class="widget_links">
                            <li><a href="{{ route('main') }}">Home</a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Catgories</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Support</a></li>
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
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
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
                <div class="col-lg-3 col-md-4 col-sm-6">
                @if(\App\Contact::count() != 0)
                    <div class="widget">
                        <h6 class="widget_title">Contact Info</h6>
                        <ul class="contact_info contact_info_light">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p>{{ $contact->address }}</p>
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>{{ $contact->phone }}</p>
                            </li>
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer border-top-tran">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-md-0 text-center text-md-left">© 2020 All Rights Reserved by the Bartan Store</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 

<!-- Latest jQuery --> 
<script src="{{ asset('/assets/js/jquery-1.12.4.min.js') }}"></script>
<!-- jquery-ui --> 
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
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
{{-- SweetAlert  CDN--}}
<script src="{{ asset('/admin/assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
{{-- newsletter --}}
<script src="{{ asset('/assets/js/newsletter.js') }}"></script>

<!-- Google Map Js -->
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;callback=initMap"></script> --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/mrvautin/typewrite/master/dist/typewrite.min.js"></script>
<!-- scripts js --> 
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script>
  AOS.init();

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
jQuery("#navCatContent").css('display', 'none');
jQuery(".linearicons-menu").on('click', function() {
    jQuery("#navCatContent").fadeToggle();
    
});
</script>
@yield('scripts')
</body>
</html>