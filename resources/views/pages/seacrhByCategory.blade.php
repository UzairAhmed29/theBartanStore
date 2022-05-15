@extends('./layouts.app')

@section('content')
<div class="breadcrumb_section bg_gray page-title-mini" style="padding: 20px; text-align: center;">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-title">
                    @isset ($details)
                    <h1>The search for your query <b style="background-color: yellow"> "{{ $query }}"</b></h1>
                    @endisset
                    @empty($details)
                    <h1><b>{{ $message }}</b></h1>
                    @endempty
                </div>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>

<div class="main_content">
<!-- START SECTION SHOP -->
@empty($message)
  <div class="main">
  @if($details)
    <section class="shopping-cart">
      <ol class="ui-list shopping-cart--list" id="shopping-cart--list">
          @foreach($details as $data)
          <li class="_grid shopping-cart--list-item">
            <div class="_column product-image">
              @if($data->thumbnail)
                  <img class="product-image--img" src="{{ asset('/uploads/' . $data->thumbnail) }}" alt="{{ $data->title }}" />
              @else
                  <img class="product-image--img" src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $data->title }}" />
              @endif
            </div>

            <div class="_column product-info">
              <h4 class="product-name">{{str_limit($data->title, 60 ,'...')  }}</h4>
              <p class="product-desc" style="font-size: 12px; margin-bottom: 0;">{{ str_limit($data->meta_description, 95,  '...') }}</p>
              <div class="product_price" style="width: 160px; float: left;">
              <span class="price">Rs. {{ isset($data->wholesalePrice) ? number_format($data->wholesalePrice) : number_format($data->retailPrice) }}</span>
                  @if($data->wholesalePrice)
                  <del>Rs. {{ number_format($data->retailPrice) }}</del>
                  @if($data->wholesalePrice)
                  <div class="on_sale">
                      <span>Save: Rs {{ number_format($data->retailPrice - $data->wholesalePrice) }}</span>
                  </div>
                  @endif
                  @endif
                  <br>
                  {{-- <a href="" class="ans">Button</a> --}}
                  <div class="buttonContainer">
                  <a href="{{ route('product-detail', $data->slug) }}" class="button">Read More</a>
                  </div>
              </div>
                  <div class="Pcategory"><p>Category: <b>{{ $data->category->name }}</b></p></div>
              <div class="cart_extra float-right" style="margin-top: -3%">
              <div class="cart_btn" style="margin-right: 15px;">
                  <a class="btn btn-fill-out btn-addtocart" href="{{ ($data->productVariations->count() == 0) ? route('add-to-cart-single', $data->slug) : route('product-detail', $data->slug) }}" style="color: white;padding: 15px 35px"><i class="icon-basket-loaded"></i>{{($data->productVariations->count() == 0) ? 'Add to cart' : 'Select Options' }} </a>
                  <a class="add_wishlist" href="{{ route('add-wishlist', $data->slug) }}"><i class="icon-heart"></i></a>
              </div>
          </div>
            </div>
          </li>
          @endforeach
      </ol>
    </section>
  @endif
</div>
@endempty
<!-- END SECTION SHOP -->

@include('./partials/footer-newsletter')

</div>
@endsection
<style>
  {{-- Search Boxes CSS --}}
    [class*="entypo-"]:before { font-family: 'entypo', sans-serif; }
body {
  font: 300 1.25em/1.4 "Lato", sans-serif;
}

._grid {
  text-align: justify !important;
  text-justify: distribute-all-lines;
  font-size: 0 !important;
  text-rendering: optimizespeed;
}
._grid:after {
  content: "";
  display: inline-block;
  width: 100%;
}
._column {
  display: inline-block;
  vertical-align: top;
  font-size: medium;
  text-align: left;
  text-rendering: optimizeLegibility;
}
.shopping-cart {
  width: 80%;
  max-width: 60rem;
  margin: 0 auto;
}
.shopping-cart--list-item {
  border: 1px solid #bdc3c7;
  margin-bottom: 3rem;
  height: 10rem;
  overflow: hidden;
}
.shopping-cart--list-item:hover,
.shopping-cart--list-item:hover * {
  border-color: #ff324d;
  transition: 0.7s;
}
.shopping-cart--list-item > ._column {
    height: 100%; 
}

.product-image {
  width: 16.663198%;
  background: url("data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7") no-repeat center / cover transparent;
}

.product-info {
  width: 70.832119%;
  padding: .5rem;
}
.product-name {
  font: 300 -0.6em/1 "Lato", sans-serif;
  letter-spacing: -.025em;
  margin: 0 0 .125em;
}
.shopping-cart--list-item:hover .product-total-price {
  background-color: rgb(255 50 77);
  color: #ecf0f1;
}
/* BUTTON CSS
------------------------------------------- */

a.button{
  display:inline-block;
  font-size: 13px;
  text-decoration:none; 
  color:rgb(255 50 77);
  border:1px solid rgb(255 50 77);
  border-radius:100px;
  padding: .3em 1.2em;
  margin-top:5px;
  background-size: 200% 100%; 
  background-image: linear-gradient(to right, transparent 50%, rgb(255 50 77) 50%);
  transition: background-position .3s cubic-bezier(0.19, 1, 0.22, 1) .1s, color .5s ease 0s, background-color .5s ease;
}

a.button:hover{
  color:rgba(255, 255, 255, 1);
  background-color:rgb(255 50 77);
  background-position: -100% 100%;
}

.Pcategory {
  font-size: 12px;
  margin-left: 23%; 
}
.Pcategory b{
  color:rgb(255 50 77);
}
</style>
