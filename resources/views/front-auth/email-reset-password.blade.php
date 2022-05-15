<!doctype html>
<html lang="en">

<head>
<title>Oculux | Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">

<link rel="icon" href="{{ asset('/assets/images/favicon.png') }}" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ asset('/admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admin/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admin/assets/vendor/animate-css/vivify.min.css') }}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ asset('/admin/assets/css/site.min.css') }}">

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

<div class="auth-main2 particles_js">
    <div class="auth_div vivify fadeInTop">
        <div class="card">            
            <div class="body">
                <div class="login-img">
                    <img class="img-fluid" style="max-width: 55%; margin-left: 56px;" src="{{ asset('/assets/images/reset-password-email.jpg') }}" />
                </div>
                @if(!Session::has('success-message'))
                <form class="form-auth-small" action="{{ route('reset-new-password') }}" method="POST" name="postresetPassword">
                    @csrf
                    <div class="mb-3">
                        <p class="lead">Reset Password</p>
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label sr-only">Reset Password</label>
                        <input type="password" required class="form-control round" id="signin-email" name="password" value="" placeholder="Reset Password">
                        <span class="text-danger"><b>{{ $errors->first('password') }}</b></span>
                    </div>
                    <input type="hidden" name="token" value="{{ $token }}">
                    <button type="submit" class="btn btn-primary btn-round btn-block">Submit</button>
                    @if(Session::has('message'))
                        <p class="text-danger text-center mt-2">{{ Session::get('message') }}</p>
                    @endif
                    <div class="mt-4">
                        <span>Don't have an account? <a href="{{ route('front-register')}}">Register</a></span>
                    </div>
                </form>
                @else
                <div>
                    
                <img style="width: 214px; height: 209px; margin-top: 80px; margin-right: 93px;" src="{{ asset('/assets/images/success.gif') }}" alt="">
                    <p class="text-success" style="margin-top: 20px; font-size: 17px;">{{ Session::get('success-message') }}</p>
                </div>
                @endif
                <div class="pattern">
                    <span class="red"></span>
                    <span class="indigo"></span>
                    <span class="blue"></span>
                    <span class="green"></span>
                    <span class="orange"></span>
                </div>
            </div>            
        </div>
    </div>
    <div id="particles-js"></div>
</div>
<!-- END WRAPPER -->
    
<script src="{{ asset('/admin/assets/bundles/libscripts.bundle.js') }}"></script>    
<script src="{{ asset('/admin/assets/bundles/vendorscripts.bundle.js') }}"></script>
<script src="{{ asset('/admin/assets/bundles/mainscripts.bundle.js') }}"></script>
</body>
</html>
