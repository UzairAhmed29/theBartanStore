@extends('./layouts.app')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('/assets/css/faq.css') }}">
@endsection

@section('content')
<div class="breadcrumb_section bg_gray page-title-mini" style="padding: 20px; text-align: center;">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-title">
                    <h1>{{ $title }}</h1>
                </div>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>

<div class="main_content">

<!-- START SECTION SHOP -->
<section class="faq-section">
<div class="container">
  <div class="row">
    <!-- ***** FAQ Start ***** -->
    <div class="col-md-6 offset-md-3">

        <div class="faq-title text-center pb-3">
            <h2>FAQ</h2>
        </div>
    </div>
    <div class="col-md-6 offset-md-3">
        <div class="faq" id="accordion">
            <div class="card">
                <div class="card-header" id="faqHeading-1">
                    <div class="mb-0">
                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                            <span class="badge">1</span>Delivery – Charges and Timing
                        </h5>
                    </div>
                </div>
                <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                    <div class="card-body">
                        <p>We offer free shipping on all domestic orders above Rs. 2,000.</p>
                        <p>The total shipping charges are based on the final weight and volume of the package to be delivered. This will be calculated at checkout and will vary between Rs. 150 and Rs. 500.</p>
                        <p>All orders are usually delivered within 3-5 business days from shipping.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqHeading-2">
                    <div class="mb-0">
                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                            <span class="badge">2</span> How do I track my order?
                        </h5>
                    </div>
                </div>
                <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                    <div class="card-body">
                        <p>If you are a registered user, simply log into your account and go to ‘My Orders’ to track the status of your order.</p>
                        <p>If you have any questions on your order, please do not hesitate to reach us on Email</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqHeading-3">
                    <div class="mb-0">
                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                            <span class="badge">3</span>Who will deliver my order?
                        </h5>
                    </div>
                </div>
                <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                    <div class="card-body">
                        <p>Our delivery partners will attempt to deliver the package twice before they return it us. Please provide a mobile number that you are available at and ensure that your complete shipping address is provided while confirming the order.</p>
                        <p>At the time of delivery, if the packaging looks damaged or tampered, please do not accept the package and contact us at your convenience. We will resend your order at the earliest.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqHeading-4">
                    <div class="mb-0">
                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                            <span class="badge">4</span> Can you combine orders to reduce shipping costs?
                        </h5>
                    </div>
                </div>
                <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                    <div class="card-body">
                        <p>Unfortunately, orders once placed cannot be combined. Shipping charges are applicable to every order placed online.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqHeading-5">
                    <div class="mb-0">
                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                            <span class="badge">5</span> Can I ship items to multiple addresses?
                        </h5>
                    </div>
                </div>
                <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                    <div class="card-body">
                        <p>To ship items to multiple addresses, simply place a separate order for each shipment. We can't divide the same order into multiple shipments.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqHeading-6">
                    <div class="mb-0">
                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                            <span class="badge">6</span> Shipping Terms and Conditions
                        </h5>
                    </div>
                </div>
                <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                    <div class="card-body">
                        <p>Any order may incur a shipping charge is a part of the order is cancelled.</p>
                        <p>For standard deliveries, Saturdays, Sundays and public holidays in Pakistan are not set as business days.</p><p>For free shipping, you product total after any discount should be above Rs. 2,000.</p>
                        <p>Orders can be shipped within Pakistan only.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
</section>
<!-- END SECTION SHOP -->

@include('./partials/footer-newsletter')

</div>
@endsection