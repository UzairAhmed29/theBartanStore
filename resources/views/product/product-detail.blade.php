@extends('./layouts.app')
@section('content')

<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-title">
                    @if(\App\Product::count() != 0)
                        <h1>{{ $title }} : {{ $product->title }}</h1>
                    @endif
                </div>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>

<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
              <div class="product-image">
                    <div class="product_img_box">
                    @if(\App\Product::count() != 0)
                    @if($product->thumbnail)
                        <img id="product_img" src='{{ asset('uploads/' . $product->thumbnail) }}' data-zoom-image="{{ asset('uploads/' . $product->thumbnail) }}" alt="{{ $product->title }}" width="522" height="580" />
                        <a href="#" class="product_img_zoom" title="Zoom">
                            <span class="linearicons-zoom-in"></span>
                        </a>
                    @else
                        <img id="product_img" src='/assets/images/404.jpg' data-zoom-image="/assets/images/404.jpg" alt="Not Found" width="522" height="580" />
                        <a href="#" class="product_img_zoom" title="Zoom">
                            <span class="linearicons-zoom-in"></span>
                        </a>
                    @endif
                    </div>
                @if($product->gallery)
                    <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
                    @foreach($product->gallery as $key => $image)
                        <div class="item">
                            <a href="#" class="product_gallery_item {{ ($key == 0) ? 'active' : '' }}" data-image="{{ asset('/uploads/' . $image) }}" data-zoom-image="{{ asset('/uploads/' . $image) }}">
                                <img src="{{ asset('/uploads/' . $image) }}" />
                            </a>
                        </div>
                    @endforeach
                    </div>
                @endif
                @endif
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="pr_detail">
                    @if(\App\Product::count() != 0)
                    <form method="POST" name="VariableProductAddToCart" action="{{ route('add-to-cart', $product->slug) }}">
                        @csrf
                    <div class="product_description">
                        <h4 class="product_title">{{ $product->title }}</h4>
                        <input type="hidden" name="productName" value="{{ $product->title }}">
                        <div class="product_price">
                            <input type="hidden" name="simpleProductPrice" value="{{ isset($product->wholesalePrice) ? number_format($product->wholesalePrice) : number_format($product->retailPrice) }}">
                            <span class="price" id="override-WP">Rs. {{ isset($product->wholesalePrice) ? number_format($product->wholesalePrice) : number_format($product->retailPrice) }}</span>
                            <input type="hidden" id="priceForCart" name="price" value="">
                            <input type="hidden" id="produtIDforCart" name="ID" value="{{ $product->id }}">
                        @if($product->wholesalePrice)
                            <del id="override-RP">Rs. {{ number_format($product->retailPrice) }}</del>
                            <div class="on_sale">
                                <span>Save: Rs. {{ number_format($product->retailPrice - $product->wholesalePrice) }}</span>
                            </div>
                        @endif    
                        </div>
                        @php        
                        $starFive = \App\Review::where('product_id', $product->id)->where('index', 5)->count();
                        $starFour = \App\Review::where('product_id', $product->id)->where('index', 4)->count();
                        $starThree = \App\Review::where('product_id', $product->id)->where('index', 3)->count();
                        $starTwo = \App\Review::where('product_id', $product->id)->where('index', 2)->count();
                        $starOne = \App\Review::where('product_id', $product->id)->where('index', 1)->count();
                        $ratings = array("1" => $starOne, "2" => $starTwo, "3" =>  $starThree , "4" => $starFour, "5" =>  $starFive);

                            $max = 0;
                            $n = 0;
                            foreach ($ratings as $rate => $count) {
                                $max += $rate * $count;
                                $n += $count;
                            }
                            if($max !== 0 && $n !== 0)
                                $averageRating = (int) round($max / $n);
                            else
                                $averageRating = 0;
                        @endphp
                        <div class="rating_wrap">
                            <div class="rating">
                                <div class="product_rate" style="
                                    @if($averageRating == 0)
                                    width: 0%;
                                    @elseif($averageRating == 1)
                                    width: 20%;
                                    @elseif($averageRating == 2)
                                    width: 40%;
                                    @elseif($averageRating == 3)
                                    width: 60%;
                                    @elseif($averageRating == 4)
                                    width: 80%;
                                    @elseif($averageRating == 5)
                                    width: 100%;
                                @endif
                                "></div>
                                </div>
                            <span class="rating_num">({{ $reviewCount }})</span>
                            </div>
                        <br><br>
                        {{-- In Stock --}}
                        <span class="product_inStock" style="display: block; color: green; width: 100%; margin-bottom: 3px; display: none;"><i class="fas fa-smile"></i> The Product is In Stock and Available.</span>
                        {{-- out stock --}}
                        <span class="product_outStock" style="display: block; color: orange; width: 100%; margin-bottom: 3px; display: none;"><i class="fas fa-frown"></i></i> The Product is currently Out Of Stock</span>
                        <div class="pr_desc">
                            <p>{{ $product->meta_description }}</p>
                        </div>
                        <div class="product_sort_info">
                            <ul>
                                @if($product->warranty)
                                    <li><i class="linearicons-shield-check"></i> {{ $product->warranty }}</li>
                                @endif
                                @if($product->policy)
                                    <li><i class="linearicons-sync"></i> {{ $product->policy }} Return Policy</li>
                                @endif
                                <li><i class="linearicons-bag-dollar"></i> Cash on Delivery available</li>
                            </ul>
                        </div>
                        
                        @php
                            $countAttr  = $product->productAttributes->count();    
                            $firstAttr  = App\ProductAttributes::where('product_id', $product->id)->take(1)->get();
                            $secondAttr = App\ProductAttributes::where('product_id', $product->id)->skip(1)->take(1)->get();
                        @endphp
                    @if($countAttr == 2)
                        @forelse($firstAttr as $dataOne)
                        <div class="pr_switch_wrap">
                            <span class="switch_lable"><b>{{ $dataOne->name }}</b></span>
                            <select id="productVariations" class="form-control" name="valueOne" style="border-color: #ff324d;" required>
                                <option disabled selected>Select Variation</option>
                            @foreach($dataOne->values as $valueOne)
                                <option value="{{ $valueOne }}">{{ $valueOne }}</option>
                            @endforeach
                            </select>
                        </div>
                        @empty
                        @endforelse

                        @forelse($secondAttr as $dataTwo)
                        <div class="pr_switch_wrap">
                            <span class="switch_lable"><b>{{ $dataTwo->name }}</b></span>
                            <select id="productVariations" class="form-control" name="valueTwo" style="border-color: #ff324d;" required>
                                <option disabled selected>Select Variation</option>
                            @foreach($dataTwo->values as $valueTwo)
                                <option value="{{ $valueTwo }}">{{ $valueTwo }}</option>
                            @endforeach
                            </select>
                        </div>
                        @empty
                        @endforelse
                        
                    @elseif($countAttr == 1)
                        @forelse($product->productAttributes as $attributes)
                        <div class="pr_switch_wrap">
                            <span class="switch_lable"><b>{{ $attributes->name }}</b></span>
                            <select id="productVariations" class="form-control" id="variationValues" name="ValueSingle" style="border-color: #ff324d;">
                                <option disabled selected>Select Variation</option>
                            @foreach($attributes->values as $value)
                                <option value="{{ $value }}">{{ $value }}</option>
                            @endforeach
                            </select>
                        </div>
                        @empty
                        @endforelse
                    @endif
                        </div>
                    <hr />
                    <div class="cart_extra">
                        <div class="cart-product-quantity">
                            <div class="quantity">
                                <input type="button" value="-" class="minus">
                                <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                <input type="button" value="+" class="plus">
                            </div>
                        </div>
                        <div class="cart_btn">
                            @if($countAttr == 0)
                            <button type="button" style="color: white;" id="simple-prod" class="btn btn-fill-out btn-addtocart"><i class="icon-basket-loaded"></i> Add to cart</button>
                            <input type="hidden" name="simple_prd-slug" value="{{ $product->slug }}">
                            @else
                            <button class="btn btn-fill-out btn-addtocart" type="button"><i class="icon-basket-loaded"></i> Add to cart</button>
                            @endif
                            <a href="{{ route('add-wishlist', $product->slug) }}" class="add_wishlist swal-dialog" id=""><i class="icon-heart" style=""></i></a>
                        </div>
                            <a href="#" class="botao-wpp">
                             <i class="fab fa-whatsapp"></i> &nbsp;Share on Whatsapp</a>
                    </div>
                    <hr />
                    <ul class="product-meta">
                        <li id="override-SKU">SKU: {{ $product->slug }}</a></li>
                        <li>Category: <a href="#">{{ $product->category->name }}</a></li>
                    @if($product->tags)
                        <li>Tags: {{ str_replace(",", " | ", $product->tags) }}</a> 
                        </li>
                    @endif
                    </ul>
                    
                    <div class="product_share">
                        <span>Share:</span>
                        <ul class="social_icons">
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($product->slug) }}" target="_blank"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
                </form>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="large_divider clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab-style3">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="Description-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Additional-info-tab" data-toggle="tab" href="#Additional-info" role="tab" aria-controls="Additional-info" aria-selected="false">Additional info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Reviews-tab" data-toggle="tab" href="#Reviews" role="tab" aria-controls="Reviews" aria-selected="false">Reviews ({{ $reviewCount }})</a>
                        </li>
                    </ul>
                    @if(\App\Product::count() != 0)
                    <div class="tab-content shop_info_tab">
                        @if($product->description)
                        <div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                            <p>{{ $product->description }}</p>
                        </div>
                        @endif
                        @if($product->additional_info)
                        <div class="tab-pane fade" id="Additional-info" role="tabpanel" aria-labelledby="Additional-info-tab">
                            <p>{{ $product->additional_info }}</p>
                        </div>
                        @endif
                        <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                            <div class="comments">
                                <h5 class="product_tab_title">{{ $reviewCount }} Review For <span>{{ $product->title }}</span></h5>
                                <ul class="list_none comment_list mt-4">
                                    @forelse($product->reviews as $review)
                                    @if($review->visibility == 'visible')
                                    <li>
                                        <div class="comment_img">
                                            @if($review->user->avatar)
                                            <img src="{{ asset('/uploads/user/' . $review->user->avatar) }}" alt="{{ $review->user->name }}"/>
                                            @else
                                            <img src="{{ asset('/assets/images/user.png') }}" alt="{{ $review->user->name }}"/>
                                            @endif
                                        </div>
                                        <div class="comment_block">
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="
                                                    @if($review->index == 1)
                                                    width: 20%;
                                                    @elseif($review->index == 2)
                                                    width: 40%;
                                                    @elseif($review->index == 3)
                                                    width: 60%;
                                                    @elseif($review->index == 4)
                                                    width: 80%;
                                                    @elseif($review->index == 5)
                                                    width: 100%;
                                                    @endif
                                                    "></div>
                                                </div>
                                            </div>
                                            <p class="customer_meta">
                                                <span class="review_author">{{ $review->user->name }}</span>
                                                <span class="comment-date">{{ $review->created_at->diffForHumans() }}</span>
                                            </p>
                                            <div class="description">
                                                <p>{{ $review->message }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    @endif
                                    @empty
                                    <br>
                                    @endforelse
                                </ul>
                            </div>
                            @if(auth()->user())
                            <div class="review_form field_form">
                                @if(Session::has('warning'))
                                <div class="container mt-4">
                                  <div class="alert alert-warning d-flex justify-items-center" role="alert">
                                    <b class="pl-3 my-2">{{ Session::get('warning') }}</b>
                                  </div>
                                </div>
                                @endif
                                <h5>Add a review</h5>
                                <form id="reviewform" class="row mt-3" method="POST" action="{{ route('productReview', $product->slug) }}">
                                    @csrf
                                    <div class="form-group col-12">
                                        <div class="star_rating">
                                            <span data-value="1"><i class="far fa-star" data-index="0"></i></span>
                                            <span data-value="2"><i class="far fa-star" data-index="1"></i></span> 
                                            <span data-value="3"><i class="far fa-star" data-index="2"></i></span>
                                            <span data-value="4"><i class="far fa-star" data-index="3"></i></span>
                                            <span data-value="5"><i class="far fa-star" data-index="4"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="text" required="required" placeholder="Review Title" class="form-control" name="title" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea required="required" placeholder="Your review *" class="form-control" name="message" rows="4" required></textarea>
                                     </div>
                                     <input type="hidden" name="index" value="">    
                                    <input type="hidden" name="userId" value="{{ (auth()->user()) ? auth()->user()->id : '' }}">    
                                    <div class="form-group col-12">
                                        <button type="submit" class="btn btn-fill-out" name="submit" id="submitReview" value="Submit">Submit Review</button>
                                    </div>
                                </form>
                            </div>
                            @else
                            <span><i class="fa fa-lock" aria-hidden="true"></i> You must be <b><a href="{{ route('front-login') }}">logged in</a></b> to submit a review.</span>
                            @endif
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="small_divider"></div>
                <div class="divider"></div>
                <div class="medium_divider"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="heading_s1">
                    <h3>Releted Products</h3>
                </div>
                <div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                    @forelse($relatedProducts as $relProduct)
                    <div class="item">
                        <div class="product">
                            <div class="product_img">
                                <a href="{{ route('product-detail', $relProduct->slug) }}">
                                @if($product->thumbnail)
                                    <img src="{{ asset('/uploads/' . $relProduct->thumbnail) }}" alt="{{ $product->title }}" width="287" height="319">
                                @else
                                    <img src="/assets/images/product_img5.jpg" alt="{{ asset('/assets/images/404.jpg') }}"  width="287" height="319">
                                @endif
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li class="add-to-cart"><a href="{{ ($product->productVariations->count() == 0) ? route('add-to-cart-single', $product->slug) : route('product-detail', $product->slug) }}"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                        <li><a href="{{ route('add-wishlist', $product->slug) }}"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="{{ route('product-detail', $relProduct->slug) }}">{{$relProduct->title}}</a></h6>
                                <div class="product_price">
                                    <span class="price">Rs. {{ isset($relProduct->wholesalePrice) ? number_format($relProduct->wholesalePrice) : number_format($relProduct->retailPrice) }}</span>
                                    @if($relProduct->wholesalePrice)
                                    <del>Rs. {{ number_format($relProduct->retailPrice) }}</del><br>
                                    @if($relProduct->wholesalePrice)
                                    <div class="on_sale">
                                        <span>Save: Rs {{ number_format($relProduct->retailPrice - $relProduct->wholesalePrice) }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->
<style>
.botao-wpp {
  text-decoration: none;
  color: #eee;
  display: inline-block;
  background-color: #25d366;
  padding: 1rem 2rem;
  border-radius: 3px;
}

.botao-wpp:hover {
  background-color: white;
  color: #25d366;
}

.botao-wpp:focus {
  background-color: darken(#25d366, 15%);
}

/* só centraliza o botão */
</style>
<!-- START SECTION SUBSCRIBE NEWSLETTER -->
@include('./partials/footer-newsletter')
<!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>
@endsection

<!-- Latest jQuery --> 
<script src="{{ asset('/assets/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('/assets/js/review.js') }}"></script>
<script src="{{ asset('/assets/js/whatsappOrderProductDetail.js') }}"></script>
@section('scripts')
<script>
jQuery(document).ready(function($) {

	jQuery("button#simple-prod").on('click', function(event) {
        event.preventDefault();
        
        var simple_quantity = jQuery("input[name='quantity']").val();
        var simple_slug = jQuery("input[name='simple_prd-slug']").val();
        var token = jQuery('meta[name="csrf-token"]').attr('content');
        jQuery.ajax({
            url: '/product/' + simple_slug + '/add-to-cart/single',
            type: 'GET',
            dataType: 'json',
            data: {
                 _token: token,
                 quantity: simple_quantity,
                 slug: simple_slug,
            },
            })
            .done(function(response) {
                if(response.success) {
                    window.location.reload();
                }
            })
            .fail(function() {
            })
            .always(function() {
        });
    });


	
    if(jQuery('select[name="valueOne"]' || 'select[name="valueTwo"]').length){
        jQuery(".btn-addtocart").on('click', function() {
            var firstfield = jQuery('select[name="valueOne"]').val();
            var secondfield = jQuery('select[name="valueTwo"]').val();
            if(firstfield == null || secondfield == null){
                alert("Please select Variations First");    
            } else {
                jQuery("form[name='VariableProductAddToCart']").submit();
            }     
        });
    }

    if(jQuery('select[name="ValueSingle"]').length){
        jQuery(".btn-addtocart").on('click', function() {
            var onlyValue = jQuery('select[name="ValueSingle"]').val();
            if(onlyValue == null){
                alert("Please select Variations First");    
            } else {
                jQuery("form[name='VariableProductAddToCart']").submit();
            }     
        });
    }
// jQuery.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });

    // Rating append in input field name index
    jQuery("div.star_rating span i.fa-star").on('click', function() {
        var index = jQuery(this).data('index');
        jQuery('input[name="index"]').val(index);
    });
    // jQuery("button#submitReview").on('click', function() {
    //     if(jQuery('input[name="index"]').val() == ''){
    //         alert('Please add a review');
    //     } else {
    //         jQuery("form#reviewform").submit();
    //     }
    // });


    if(jQuery("select#productVariations").length === 2){
       
        jQuery("body").on('change', 'select', function(event) {
            var first = jQuery('select[name="valueOne"]').val();
            var second = jQuery('select[name="valueTwo"]').val();
            var value = first+' '+second;
            getPrice(value);
        });
    } else if((jQuery("select#productVariations").length === 1)) {
        jQuery("body").on('change', 'select', function(event) {
            var value = jQuery('select[name="ValueSingle"]').val();
            getPrice(value);
        });
    } else {
        return;
    }
    @if(\App\Product::count() != 0)
    function getPrice(value) {
        var token = jQuery('meta[name="csrf-token"]').attr('content');
        jQuery.ajax({
            url: '{{ route('getPrice', $product->id) }}',
            type: 'POST',
            // headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
            dataType: 'json',
            data: {
                _token: token,
                data: value,
            },
        })
        .done(function(response) {
            if(response.success) {
                // var obj = JSON.parse(response);
                // console.log(response.data.title);
                // console.log(response.data.sku);
                // console.log(response.data.stock);
                // console.log(response.data.retailPrice);
                // console.log(response.data.wholesalePrice);
                // Settings SKU
                if(response.data.sku){
                    jQuery("li#override-SKU").html("SKU: " + response.data.sku);
                }
                // Setting Stock
                if(response.data.stock == 'in-stock') {
                    jQuery(".product_inStock").css('display', 'block');
                    jQuery(".product_outStock").css('display', 'none');
                    jQuery("button.btn-addtocart").css('display', 'inline');
                } else {
                    jQuery(".product_outStock").css('display', 'block');
                    jQuery(".product_inStock").css('display', 'none');
                    jQuery("button.btn-addtocart").css('display', 'none');
                }
                // Setting price
                const RP = response.data.retailPrice;
                const WP = response.data.wholesalePrice;
                const save = RP - WP; 
                if(response.data.wholesalePrice < 1){
                    jQuery(".on_sale").css('display', 'none');
                    jQuery("del#override-RP").css('display', 'none');
                    jQuery("span#override-WP").html("RS. " + new Intl.NumberFormat({ style: 'currency', currency: 'PKR' }).format(RP));
                    jQuery("input#priceForCart").val(RP);
                } else {
                    jQuery(".on_sale").css('display', 'inline-block');
                    jQuery("del#override-RP").css('display', 'inline');
                    jQuery("span#override-WP").html("RS. " + new Intl.NumberFormat({ style: 'currency', currency: 'PKR' }).format(WP));
                    jQuery("del#override-RP").html("RS. " + new Intl.NumberFormat({ style: 'currency', currency: 'PKR' }).format(RP));
                    jQuery(".on_sale").html("Save: Rs. " + save);
                    jQuery("input#priceForCart").val(WP);
                }
            }
        })
        .fail(function() {
        })
        .always(function() {
        });
    }
    @endif
});

</script>
@endsection
