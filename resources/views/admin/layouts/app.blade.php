<!doctype html>
<html lang="en">

<head>
    @php
        if(empty($title))
            $title = '';
    @endphp
<title>{{ $title }} | Dasboard - theBartanStore</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">
<meta name="csrf-token" content="{{ csrf_token() }}" />

<link rel="icon" href="{{ asset('admin/assets/images/favicon.ico') }}" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/animate-css/vivify.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/themify-icons/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/c3/c3.min.css') }}"/>
<!-- For demo use -->
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/themify-icons/demo-files/demo.css') }}">
<!-- Just Demo not include in project -->
<link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/sweetalert/sweetalert.css') }}"/>
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/dropify/css/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/jquery-steps/jquery.steps.css') }}">
<!-- Toatr CSS -->
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/toastr/toastr.min.css') }}">
<!-- Form Advanced -->
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/multi-select/css/multi-select.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/nouislider/nouislider.min.css') }}">
<!-- Validation css -->
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/parsleyjs/css/parsley.css') }}">
<!-- Gallery Css -->
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/light-gallery/css/lightgallery.css') }}">
<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ asset('admin/assets/css/site.min.css') }}">
@yield('stylesheet')
</head>
<body class="theme-cyan font-montserrat">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="bar4"></div>
        <div class="bar5"></div>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<div id="wrapper">
    <nav class="navbar top-navbar nav-pills nav-fill">
        <div class="container-fluid">

            <div class="navbar-left">
                <div class="navbar-btn">
                    <a href="#"><img src="{{ asset('admin/assets/images/icon.svg') }}" alt="Oculux Logo" class="img-fluid logo"></a>
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('main') }}" class="megamenu_toggle icon-menu" title="Mega Menu">Visit Site</a></li>
                    <li><a href="{{ route('product.index') }}" class="megamenu_toggle icon-menu {{ (request()->is('dashboard/product')) ? 'active' : '' }}" title="Mega Menu">Products</a></li>
                    <li class="p_social"><a href="{{ route('order.index') }}" class="social icon-menu {{ (request()->is('dashboard/order')) ? 'active' : '' }}" title="News">Orders</a></li>
                    <li class="p_news"><a href="{{ route('contact_us.index') }}" class="news icon-menu {{ (request()->is('dashboard/contact_us')) ? 'active' : '' }}" title="News">Queries</a></li>
                </ul>
            </div>
            
            <div class="navbar-right">
                <div id="navbar-menu">
                <a href="{{ route('cache-clear') }}" class="btn btn-outline-warning">Clear Cache</a>
                    <ul class="nav navbar-nav">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <li><button type="submit" class="nav-logout"><i class="icon-power logout-nav"></i></button></li>
                    </form>
                    </ul>
                </div>
            </div>
        </div>
        <div class="progress-container"><div class="progress-bar" id="myBar"></div></div>
    </nav>
    <div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="/public/dashboard"><img src="{{ asset('admin/assets/images/icon.svg') }}" alt="Oculux Logo" class="img-fluid logo"><span>The Bartan Store</span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu icon-close"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="user_div">
                    @php    
                        $name = auth()->user()->name;
                        $e  = explode(" ", $name);
                        $a = str_split($e[0]);
                    @endphp
                    @if(auth()->user()->avatar !== null)
                    <img src="{{ asset('uploads/user/' . auth()->user()->avatar) }}" class="user-photo" alt="User Profile Picture">
                    @else
                        <div class="avtar-pic w35 bg-pink" data-toggle="tooltip" data-placement="top" title="" data-original-title=""><span>{{ $a[0] }}</span></div>
                    @endif
                </div>
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{ Auth::user()->name }}</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                        <li><a href="{{ route('profile') }}"><i class="icon-user"></i>My Profile</a></li>
                        <form action="{{ route('logout') }}" method="POST">
                        @csrf
                            <li><button type="submit" class="logout-sidebar"><i class="logout-sidebar-icon icon-power"></i>Logout</button></li>
                        </form>

                    </ul>
                </div>                
            </div>  
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li class="header">Main</li>
                    <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}"><a href="{{ route('home') }}"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
                    <li class="{{ (request()->is('dashboard/product')) || (request()->is('dashboard/product/create')) || (request()->is('dashboard/product/*')) ? 'active open' : '' }}">
                        <a href="#Contact" class="has-arrow"><i class="icon-layers"></i><span>Products</span></a>
                        <ul>
                            <li class="{{ (request()->is('dashboard/product')) ? 'active' : '' }}"><a href="{{ route('product.index') }}">View Products</a></li>
                            <li class="{{ (request()->is('dashboard/product/create')) ? 'active' : '' }}"><a href="{{ route('product.create') }}">Add Products</a></li>
                        </ul>
                    </li>
                    <li class="{{ (request()->is('dashboard/coupon')) || (request()->is('dashboard/coupon/create')) || (request()->is('dashboard/coupon*')) ? 'active open' : '' }}">
                        <a href="#Contact" class="has-arrow"><i class="icon-key"></i><span>Coupons</span></a>
                        <ul>
                            <li class="{{ (request()->is('dashboard/coupon')) ? 'active' : '' }}"><a href="{{ route('coupon.index') }}">View Coupons</a></li>
                            <li class="{{ (request()->is('dashboard/create')) ? 'active' : '' }}"><a href="{{ route('coupon.create') }}">Add Coupon</a></li>
                        </ul>
                    </li>
                    <li class="{{ (request()->is('dashboard/category')) || (request()->is('dashboard/category/create')) || (request()->is('dashboard/category/*')) ? 'active open' : '' }}">
                        <a href="#Contact" class="has-arrow"><i class="icon-puzzle"></i><span>Categories</span></a>
                        <ul>
                            <li class="{{ (request()->is('dashboard/category')) ? 'active' : '' }}"><a href="{{ route('category.index') }}">View Category</a></li>
                            <li class="{{ (request()->is('dashboard/category/create')) ? 'active' : '' }}"><a href="{{ route('category.create') }}">Add Category</a></li>
                        </ul>
                    </li>
                    <li class="{{ (request()->is('dashboard/order')) ? 'active open' : '' }}">
                        <a href="#Contact" class="has-arrow"><i class="icon-grid"></i><span>Orders</span></a>
                        <ul>
                            <li class="{{ (request()->is('dashboard/order')) ? 'active' : '' }}"><a href="{{ route('order.index') }}">View Orders</a></li>
                        </ul>
                    </li>
                    <li class="{{ (request()->is('dashboard/brand')) || (request()->is('dashboard/brand/create')) || (request()->is('dashboard/brand/*')) ? 'active open' : '' }}">
                        <a href="#Contact" class="has-arrow"><i class=" icon-target"></i><span>Brands</span></a>
                        <ul>
                            <li class="{{ request()->is('dashboard/brand') ? 'active' : '' }}"><a href="{{ route('brand.index') }}">View Brand</a></li>
                            <li class="{{ request()->is('dashboard/brand/create') ? 'active' : '' }}"><a href="{{ route('brand.create') }}">Add Brand</a></li>
                        </ul>
                    </li>
                    <li class="{{ (request()->is('dashboard/gallery')) || (request()->is('dashboard/gallery/create')) || (request()->is('dashboard/gallery/*')) ? 'active open' : '' }}">
                        <a href="#Contact" class="has-arrow"><i class="icon-camera"></i><span>Media</span></a>
                        <ul>
                            <li class="{{ request()->is('dashboard/gallery') ? 'active' : '' }}"><a href="{{ route('gallery.index') }}">View Media</a></li>
                            <li class="{{ request()->is('dashboard/gallery/create') ? 'active' : '' }}"><a href="{{ route('gallery.create') }}">Add Media</a></li>
                        </ul>
                    </li>
                    <li class="{{ (request()->is('dashboard/contact_us')) ? 'active open' : '' }}">
                        <a href="#Contact" class="has-arrow"><i class="icon-note"></i><span>Queries</span></a>
                        <ul>
                            <li class="{{ (request()->is('dashboard/contact_us')) ? 'active' : '' }}"><a href="{{ route('contact_us.index') }}">View Queries</a></li>
                        </ul>
                    </li>
                    <li class="{{ (request()->is('dashboard/user')) || (request()->is('dashboard/user/create')) || (request()->is('dashboard/user/*')) ? 'active open' : '' }}">
                        <a href="#Contact" class="has-arrow"><i class="icon-users"></i><span>Users</span></a>
                        <ul>
                            <li class="{{ (request()->is('dashboard/user')) ? 'active' : '' }}"><a href="{{ route('user.index') }}">View User</a></li>
                            <li class="{{ (request()->is('dashboard/user/create')) ? 'active' : '' }}"><a href="{{ route('user.create') }}">Add User</a></li>
                        </ul>
                    </li>
                    <li class="{{ request()->is('dashboard/contact') ? 'active' : '' }}">
                        <a href="{{ route('contact.index') }}" class=""><i class="icon-list"></i><span>About</span></a>
                    </li>
                </ul>
            </nav>     
        </div>
    </div>

@yield('content')    
</div>

<!-- Javascript -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script> --}}
<script src="{{ asset('admin/assets/bundles/libscripts.bundle.js') }}"></script>    
<script src="{{ asset('admin/assets/bundles/vendorscripts.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/tables/editable-table.js') }}"></script>
<script src="{{ asset('admin/assets/bundles/c3.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/js/index.js') }}"></script>
<!-- Editable Table Plugin Js -->
<script src="{{ asset('admin/assets/vendor/editable-table/mindmup-editabletable.js') }}"></script>
<!-- Datatable Plugin Js -->
<script src="{{ asset('admin/assets/bundles/datatablescripts.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/jquery-datatable/buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/tables/jquery-datatable.js') }}"></script>
<!-- SweetAlert Plugin Js -->
<script src="{{ asset('admin/assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/ui/dialogs.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/dropify/js/dropify.js') }}"></script>
<!-- JQuery Steps Plugin Js -->
<script src="{{ asset('admin/assets/vendor/jquery-steps/jquery.steps.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/forms/dropify.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/forms/form-wizard.js') }}"></script>
{{-- Toastr Js --}}
<script src="{{ asset('admin/assets/vendor/toastr/toastr.js') }}"></script>
<!-- Bootstrap Colorpicker Js --> 
<script src="{{ asset('admin/assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
<!-- Input Mask Plugin Js --> 
<script src="{{ asset('admin/assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
<!-- Multi Select Plugin Js -->
<script src="{{ asset('admin/assets/vendor/multi-select/js/jquery.multi-select.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap Tags Input Plugin Js --> 
<script src="{{ asset('admin/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
<!-- noUISlider Plugin Js -->
<script src="{{ asset('admin/assets/vendor/nouislider/nouislider.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/forms/advanced-form-elements.js') }}"></script>
<!-- Validation Js -->
<script src="{{ asset('admin/assets/vendor/parsleyjs/js/parsley.min.js') }}"></script>
<!-- Light Gallery Plugin Js --> 
<script src="{{ asset('admin/assets/bundles/lightgallery.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/medias/image-gallery.js') }}"></script>
<!-- Table -->
<script src="{{ asset('admin/assets/js/pages/tables/table-filter.js') }}"></script>
@yield('scripts')
{{-- Session Flash --}}
    {{-- Success Tostr + Session flash --}}  
 @if(Session::has('success'))
    <script type="text/javascript">
            toastr.success("{{ Session::get('success') }}");
    </script>
    {{-- Info Tostr + Session flash --}}
@elseif(Session::has('info'))
    <script type="text/javascript">
            toastr.info("{{ Session::get('info') }}");
    </script>
    {{-- Warning Tostr + Session flash --}}
@elseif(Session::has('warning'))
    <script type="text/javascript">
            toastr.warning("{{ Session::get('warning') }}");
    </script>
    {{-- Error Tostr + Session flash --}}
@elseif(Session::has('error'))
    <script type="text/javascript">
            toastr.error("{{ Session::get('error') }}");
    </script>
{{-- End Session Flash --}}
@endif
</body>
</html>
