<!doctype html>
<html lang="en">

<head>
<title>Oculux | Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
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
                <p class="lead">{{ __('Reset Password') }}</p>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form class="form-auth-small m-t-20" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">{{ __('E-Mail Address') }}</label>
                        <input type="email" name="email" class="form-control round @error('email') is-invalid @enderror" id="email signin-email" value="{{ old('email') }}" placeholder="E-Mail" required autocomplete="email" autofocus>
                         @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-round btn-block">{{ __('Send Password Reset Link') }}</button>
                </form>
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
