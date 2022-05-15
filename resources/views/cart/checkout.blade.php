@extends('./layouts.app')

@section('content')
@if(session()->has('error'))
<div class="breadcrumb_section bg_gray page-title-mini" style="padding: 01px!important; text-align: center; background-color: #ff324d!important;">
    <div class="container">
        <div class="row">
            <p style="color: white; margin: revert;">{{ Session::get('error') }}</p>
        </div>
    </div>
</div>
@endif
@if(session()->has('success'))
<div class="breadcrumb_section bg_gray page-title-mini" style="padding: 01px!important; text-align: center; background-color: #28a745!important;">
    <div class="container">
        <div class="row">
            <p style="color: white; margin: revert;">{{ Session::get('success') }}</p>
        </div>
    </div>
</div>
@endif
<!-- START MAIN CONTENT -->
<div class="main_content">.
@if(!Cart::isEmpty())
<!-- START SECTION SHOP -->
<div class="section">
    <div class="container" id="error-prepend">
        <div class="row">
            <div class="col-lg-6">
                <div class="toggle_info">
                    @if(!auth()->user())
                    <span><i class="fas fa-user"></i>Returning customer? <a href="#loginform" data-toggle="collapse" class="collapsed" aria-expanded="false">Click here to login</a></span>
                    @else
                    <span><i class="fas fa-user"></i>Thanks for Logging In! <a href="{{ route('get-my-account') }}">My Account</a></span>
                    @endif
                </div>
                <div class="panel-collapse collapse login_form" id="loginform">
                    <div class="panel-body">
                        <p>If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                        <div class="form-group">
                            <input type="email" class="form-control" id="loginEmail" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" id="loginPassword" name="password" placeholder="Password">
                            <span style="color: red;">{{ $errors->first('password') }}</span>
                        </div>
                        <div class="login_footer form-group">
                            <div class="chek-form">
                                <div class="custome-checkbox">
                                    <input class="form-check-input" id="loginRemeber" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label" for="remember"><span>Remember me</span></label>
                                </div>
                            </div>
                            <div style="display: grid; justify-items: end;">
                                <a href="{{ route('front-register') }}">Register</a>
                                <a href="#">Forgot password?</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="button" id="loginButton" class="btn btn-fill-out btn-block" name="login">Log in</button>
                            <img src="{{ asset('/assets/images/loader.gif') }}" style="width: 45px;     margin: 0 auto; display: block; margin-top: 5px; display: none" id="loginLoader">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="toggle_info">
                    <span><i class="fas fa-tag"></i>Have a coupon? <a href="#coupon" data-toggle="collapse" class="collapsed" aria-expanded="false">Click here to enter your code</a></span>
                </div>
                <div class="panel-collapse collapse coupon_form" id="coupon">
                    <div class="panel-body">
                        <p>If you have a coupon code, please apply it below.</p>
                    <form action="{{ route('coupon') }}" method="GET">
                        <div class="coupon field_form input-group">
                            <input type="text" value="" name="coupon_code" class="form-control" placeholder="Enter Coupon Code..">
                            <div class="input-group-append">
                                <button class="btn btn-fill-out btn-sm" type="submit">Apply Coupon</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="medium_divider"></div>
                <div class="divider center_icon"><i class="linearicons-credit-card"></i></div>
                <div class="medium_divider"></div>
            </div>
        </div>
        <form method="POST" action="{{ route('place-order') }}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="heading_s1">
                    <h4>Billing & Shipping Details</h4>
                </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="fname" placeholder="First name *" value="{{ old('fname') }}">
                        <span class="text-danger"><b>{{ $errors->first('fname') }}</b></span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="lname" placeholder="Last name" value="{{ old('lname') }}">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="cname" placeholder="Company Name" value="{{ old('cname') }}">
                    </div>
                    <div class="form-group">
                        <div class="custom_select">
                            <select class="form-control" name="country">
                                <option selected disabled>Select Country</option>
                                @forelse($countries as $country)
                                <option value="{{ $country->name }}">{{ $country->name }}</option {{ old('country') == $country->name ? 'selected' : '' }}>
                                @empty
                                @endforelse
                            </select>
                                <span class="text-danger"><b>{{ $errors->first('country') }}</b></span>
                        </div>
                        @php
                            foreach (Cart::getConditions() as $element){
                            }
                        @endphp
                        <input type="hidden" name="userId" value="{{ (auth()->user()) ? auth()->user()->id : '' }}">
                        <input type="hidden" name="condition" id="couponCode" value="{{ Cart::getConditions() }}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="addressline1" placeholder="Address *"  value="{{ old('addressline1') }}">
                        <span class="text-danger"><b>{{ $errors->first('addressline1') }}</b></span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="addressline2" placeholder="Address line 2" value="{{ old('addressline2') }}">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="city" placeholder="City / Town *" value="{{ old('city') }}">
                        <span class="text-danger"><b>{{ $errors->first('city') }}</b></span>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="zipcode" placeholder="Postcode / ZIP *" value="{{ old('zipcode') }}">
                        <span class="text-danger"><b>{{ $errors->first('zipcode') }}</b></span>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="phone" placeholder="Phone *" value="{{ old('phone') }}">
                        <span class="text-danger"><b>{{ $errors->first('phone') }}</b></span>
                    </div>
                    @if(!auth()->user())
                    <div class="form-group">
                        <input class="form-control" type="text" name="email" placeholder="Email address *" value="{{ old('email') }}" required>
                        <span class="text-danger"><b>{{ $errors->first('email') }}</b></span>
                    </div>
                    <div class="form-group">
                        <div class="chek-form">
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="createaccount">
                                <label class="form-check-label label_info" for="createaccount"><span>Create an account?</span></label>
                            </div>
                        </div>
                    </div>
                    @else
                    <input type="hidden" name="customer_email" value="{{ auth()->user()->email }}">
                    @endif
                    <div class="form-group create-account">
                        <input class="form-control" type="password" placeholder="Password" name="password" required>
                    </div>
                    <div class="ship_detail">
                        <div class="form-group">
                        <div class="chek-form">
                        </div>
                    </div>
                        <div class="different_address">
                    </div>
                    </div>
                    <div class="heading_s1">
                        <h4>Additional information</h4>
                    </div>
                    <div class="form-group mb-0">
                        <textarea rows="5" class="form-control" name="notes" placeholder="Order notes"></textarea>
                    </div>
            </div>
            <div class="col-md-6">
                <div class="order_review">
                    <div class="heading_s1">
                        <h4>Your Orders</h4>
                    </div>
                    <div class="table-responsive order_table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse(Cart::getContent() as $item)
                                <input type="hidden" name="productIds[]" value="{{ $item->name }}">
                                <tr>
                                    <td>{{ str_limit($item->associatedModel->title, $limit = 30, $end = '...') }} <span class="product-qty">x {{ $item->quantity }}</span></td>
                                    <td>{{ number_format($item->getPriceSum()) }}</td>
                                </tr>
                                @empty
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>     
                                    <th>SubTotal</th>
                                    <td class="product-subtotal">Rs. {{ number_format(\Cart::getSubTotal()) }}</td>
                                </tr>
                                <tr>
                                    <th>Shipping</th>
                                    <td>Free Shipping</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td class="product-subtotal">Rs. {{ number_format(Cart::getTotal()) }}</td>
                                </tr>
                                <input type="hidden" name="grandTotal" value="{{ Cart::getTotal() }}">
                                <tr class="append-coupon"></tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment_method">
                        <div class="heading_s1">
                            <h4>Payment</h4>
                        </div>
                        <div class="payment_option">
                            <div class="custome-radio">
                                <input class="form-check-input" type="radio" id="exampleRadios5" checked>
                                <label class="form-check-label" for="exampleRadios5">Cash On Delivery</label>
                                <p data-method="option5" class="payment-text">As a customer, one of the most significant benefits of COD is that you can pay only after you get the product in hand.</p>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="orderButton" class="btn btn-fill-out btn-block">Place Order</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@else
<div class="container" style="margin-bottom: 40px; margin-top: 40px;">
<div class="alert alert-warning">
    <p>Your Cart is currently Empty</p>
    <a href="{{ route('products') }}" class="btn btn-fill-out btn-addtocart">Return Shop</a>
    </div>
</div>
@endif
<!-- END SECTION SHOP -->

<!-- START SECTION SUBSCRIBE NEWSLETTER -->
@include('./partials/footer-newsletter')

<!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>
<!-- END MAIN CONTENT -->

@endsection
@section('scripts')
<script>
jQuery(document).ready(function($) {

    jQuery("#orderButton").on('click', function() {
        jQuery("form[method='POST']").submit();
    });


    $(function(){
        // var regExp = /^\w*(\.\w*)?@\w*\.[a-z]+(\.[a-z]+)?$/;
        var regExp = /^([\w\.\+]{1,})([^\W])(@)([\w]{1,})(\.[\w]{1,})+$/;
      $('#loginEmail').on('keyup', function() {
        regExp.test( $(this).val() ) ? jQuery(this).css('border-color', 'green') : jQuery(this).css('border-color', 'red');
      });
    });


    if(jQuery('#couponCode').val() !== '[]') {
        jQuery(".append-coupon").append('<td><a href="{{ route('remove-coupon') }}">Remove Coupon <span style="color:red;"> X</span></a></td>');
    }

    jQuery("button#loginButton").on('click', function(event) {
        event.preventDefault();
        var regExp = /^([\w\.\+]{1,})([^\W])(@)([\w]{1,})(\.[\w]{1,})+$/;
        var email = jQuery("#loginEmail").val();
        if(regExp.test( $('#loginEmail').val() )){
            var password = jQuery("#loginPassword").val();
            if(email == '' || password == '') {
                alert('Please fill the required Fields!');
            } else {
                jQuery("#loginLoader").css('display', 'block');
                checkoutLogin(email, password);
            }
        } else {
            alert('Email is Invalid');
        }

    });

    function checkoutLogin(email, password) {
        var remember = jQuery("#loginRemeber").val();
        var token = jQuery('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: '{{ route('checkout-login') }}',
            type: 'POST',
            dataType: 'json',
            data: {
                _token: token,
                email: email,
                password: password,
                remember: remember,
            },
        })
        .done(function(response) {
            if(response[0] == 'success') {
                jQuery("#loginLoader").css('display', 'none');
                jQuery(".error-ajax").hide();
                $("#error-prepend").prepend('<div class="breadcrumb_section bg_gray page-title-mini" style="padding: 01px; text-align: center; background-color: #28a745!important;"><div class="container"><div class="row"><p style="color: white; margin: revert;  margin-left: 15px;">'+ response[1] +'</p></div></div></div>');
                $("html, body").animate({ scrollTop: 0 }, "slow");
                setTimeout(function () {
                    location.reload(true);
                }, 3000);
            }
            else if(response[0] == 'error'){
                jQuery("#loginLoader").css('display', 'none');
                $("#error-prepend").prepend('<div class="error-ajax breadcrumb_section bg_gray page-title-mini" style="padding: 01px; text-align: center; background-color: #ff324d!important;"><div class="container"><div class="row"><p style="color: white; margin: revert;  margin-left: 15px;">'+ response[1] +'</p></div></div></div>');
                $("html, body").animate({ scrollTop: 0 }, "slow");
                return false;
            }
        })
        .fail(function() {
        })
        .always(function() {
        });

    }

});


</script>
@endsection
