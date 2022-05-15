@php
    $contact = \App\Contact::find(1);
    if($contact && !empty($contact)) {
        $newsletter = $contact->newsletter;
    } else {
        $newsletter = 'off';        
    }
        if($newsletter == 'on'){
    
@endphp
<!-- Home Popup Section -->
<div class="modal fade subscribe_popup" id="onload-popup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                </button>
                <div class="row no-gutters">
                    <div class="col-sm-5">
                        <div class="background_bg h-100" data-img-src="/assets/images/popup_img.jpg"></div>
                    </div>
                    <div class="col-sm-7">
                        <div class="popup_content">
                            <div class="popup-text">
                                <div class="heading_s4">
                                    <h4>Subscribe and Get 25% Discount!</h4>
                                </div>
                                <p>Subscribe to the newsletter to receive updates about new products.</p>
                            </div>
                            <form name="subscribeNewsletter">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input name="email" id="email-newsletter" required type="email" class="form-control rounded-0" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-fill-line btn-block text-uppercase rounded-0" title="Subscribe" id="submit-newsletter" type="button">Subscribe</button>
                                </div>
                            </form>
                          <p class="text-center" id="modal-response"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Screen Load Popup Section --> 
@php
    }
@endphp