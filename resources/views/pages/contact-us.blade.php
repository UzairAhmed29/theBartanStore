@extends('./layouts.app')

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
<div class="main_content">

<!-- START SECTION CONTACT -->
<div class="section pb_70">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="contact_wrap contact_style3">
                    <div class="contact_icon">
                        <i class="linearicons-map2"></i>
                    </div>
                    @php
                        $contact = \App\Contact::find(1);
                        if($contact && !empty($contact)) {
                            $contact = \App\Contact::find(1);
                        }
                    @endphp
                    <div class="contact_text">
                        <span>Address</span>
                        @if(\App\Contact::count() !== 0)
                            <p>{{ $contact->address }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="contact_wrap contact_style3">
                    <div class="contact_icon">
                        <i class="linearicons-envelope-open"></i>
                    </div>
                    <div class="contact_text">
                        <span>Email Address</span>
                        @if(\App\Contact::count() !== 0)
                        <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="contact_wrap contact_style3">
                    <div class="contact_icon">
                        <i class="linearicons-tablet2"></i>
                    </div>
                    <div class="contact_text">
                        <span>Phone</span>
                        @if(\App\Contact::count() !== 0)
                            <p>{{ $contact->phone }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION CONTACT -->

<!-- START SECTION CONTACT -->
<div class="section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="heading_s1">
                    <h2>Get In touch</h2>
                </div>
                <p class="leads">**We look forward to hearing from you and will try to respond within 1-2 business days</p>
                @if(!Session::has('query_message'))
                <div class="field_form">
                    <form method="POST" action="{{ route('postContactUs') }}" name="contactUs">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input placeholder="Enter Name *" class="form-control" name="name" type="text" value="{{ old('name') }}">
                                <span class="text-danger"><b>{{ $errors->first('name') }}</b></span>
                             </div>
                            <div class="form-group col-md-6">
                                <input placeholder="Enter Email *" class="form-control" name="email" type="email" value="{{ old('email') }}">
                                <span class="text-danger"><b>{{ $errors->first('email') }}</b></span>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="phone" placeholder="Enter Phone No. *" class="form-control" name="phone" value="{{ old('phone') }}">
                                <span class="text-danger"><b>{{ $errors->first('phone') }}</b></span>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" placeholder="Enter Subject" class="form-control" name="subject" value="{{ old('subject') }}">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea placeholder="Message *" class="form-control" name="message" rows="4">{{ old('message') }}</textarea>
                                <span class="text-danger"><b>{{ $errors->first('message') }}</b></span>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" title="Submit Your Message!" class="btn btn-fill-out">Send Message</button>
                            </div>
                            <div class="col-md-12">
                                <div id="alert-msg" class="alert-msg text-center"></div>
                            </div>
                        </div>
                    </form>     
                </div>
                @else
                <p class="text-success"><b>{{ Session::get('query_message') }}</b></p>
                @endif
            </div>
            <div class="col-lg-6 pt-2 pt-lg-0 mt-4 mt-lg-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35653.22190900109!2d68.18314038533592!3d27.55482067412662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3935abc466076cb7%3A0x2640dedb67058d9c!2sLarkana%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1601149743051!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <div id="map" class="contact_map2" data-zoom="12" data-latitude="40.680" data-longitude="-73.945"></div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->

@include('./partials/footer-newsletter')

</div>
@endsection