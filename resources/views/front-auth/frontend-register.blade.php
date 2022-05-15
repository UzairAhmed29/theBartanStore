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

                    <img class="img-fluid" src="{{ asset('/admin/assets/images/register.png') }}" />

                </div>

                <form class="form-auth-small" method="POST" name="frontendRegister" action="{{ route('fRegister') }}">

                    @csrf

                    <div class="mb-3">

                        <p class="lead">Register</p>

                    </div>

                    <div class="form-group">

                        <label for="Name" class="control-label sr-only">Name</label>

                        <input type="text" class="form-control round" name="name" id="signin-email" value="" placeholder="Name">

                        <span class="text-danger"><b>{{ $errors->first('name') }}</b></span>

                    </div>

                     <div class="form-group">

                        <label for="signin-email" class="control-label sr-only">Email</label>

                        <input type="email" class="form-control round" name="email" id="signin-email" value="" placeholder="Email">

                        <span class="text-danger"><b>{{ $errors->first('email') }}</b></span>

                    </div>

                    <div class="form-group">

                        <label for="signin-password" class="control-label sr-only">Password</label>

                        <input type="password" class="form-control round" name="password" id="signin-password" value="" placeholder="Password">

                        <span class="text-danger"><b>{{ $errors->first('password') }}</b></span>

                    </div>

                    <div class="form-group">

                        <label for="signin-password" class="control-label sr-only">Confirm Password</label>

                        <input type="password" class="form-control round" name="confirmPassword" id="signin-password" value="" placeholder="Confirm Password">

                        <span class="text-danger"><b>{{ $errors->first('confirmPassword') }}</b></span>

                    </div>

                    <div class="form-group clearfix">

                        <label class="fancy-checkbox element-left">

                            <input type="checkbox">

                            <span>Remember me</span>

                        </label>								

                    </div>

                    <button type="submit" class="btn btn-primary btn-round btn-block">REGISTER</button>

                    <div class="mt-4">

                        <span>Already have an account? <a href="{{ route('front-login') }}">Login</a></span>

                    </div>

                </form>

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

