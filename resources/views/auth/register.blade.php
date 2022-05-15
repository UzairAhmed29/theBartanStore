<!doctype html>
<html lang="en">

<head>
<title>Oculux | Sign Up</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="author" content="GetBootstrap, design by: puffintheme.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/animate-css/vivify.min.css') }}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ asset('admin/assets/css/site.min.css') }}">


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

<div class="pattern">
    <span class="red"></span>
    <span class="indigo"></span>
    <span class="blue"></span>
    <span class="green"></span>
    <span class="orange"></span>
</div>
<div class="auth-main particles_js">
    <div class="auth_div vivify popIn">
        <div class="auth_brand">
            <a class="navbar-brand" href="javascript:void(0);"><img src="{{ asset('admin/assets/images/icon.svg') }}" width="30" height="30" class="d-inline-block align-top mr-2" alt="">The Bartan Store</a>                                                
        </div>
        <div class="card">
            <div class="body">
                <form action="{{ route('custom-registeration') }}" method="POST">
                    @csrf
                <p class="lead">Create an account</p>
                <br>
                @if(Session::has('registeration'))
                    <p>{{ Session::get('registeration') }}</p>
                @endif
                    <div class="form-group">
                        <input type="text" class="form-control round" id="name" placeholder="Your Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <span class="text-danger"><b>{{ $errors->first('name') }}</b></span>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control round" id="email" placeholder="Your E-mail" name="email" value="{{ old('email') }}" required autocomplete="email">
                        <span class="text-danger"><b>{{ $errors->first('email') }}</b></span>
                    </div>
                    <div class="form-group">                            
                        <input type="password" class="form-control round" id="password" placeholder="Password" name="password" required autocomplete="new-password">
                        <span class="text-danger"><b>{{ $errors->first('password') }}</b></span>
                    </div>
                    <div class="form-group">                            
                        <input type="password" class="form-control round" id="password-confirm" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                        <span class="text-danger"><b>{{ $errors->first('password_confirmation') }}</b></span>
                    </div>
                    {{-- OTP --}}
                    <div class="form-group">                            
                        <input type="password" class="form-control round" id="otp" placeholder="One Time Password" name="one_time_pass" data-toggle="tooltip" data-placement="right" title="You will get this password from the dashboard -> About -> code!" required>
                    </div>
                    {{-- END OTP --}}
                    <button type="submit" class="btn btn-primary btn-round btn-block">{{ __('Register') }}</button>                                
                </form> 
                <br>
                <span>Have an account? <a href="{{ route('login') }}">Register</a></span>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>
<!-- END WRAPPER -->

<script src="{{ asset('admin/assets/bundles/libscripts.bundle.js') }}"></script>    
<script src="{{ asset('admin/assets/bundles/vendorscripts.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/bundles/mainscripts.bundle.js') }}"></script>
</body>
</html>