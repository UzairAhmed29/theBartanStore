@extends('./layouts.app')

@section('content')
<div class="breadcrumb_section bg_gray page-title-mini" style="padding: 20px; text-align: center;">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-title">
                    <h1>Wishlist</h1>
                </div>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section" style="padding:0 0!important;">
	<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive wishlist_table">
                	<table class="table">
                    	<thead>
                        	<tr>
                            	<th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name"  width="40%">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-add-to-cart"></th>
                                <th class="product-action" width="15%">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @if(Session::get('wishlist'))
                            @foreach($items as $item)
                        	<tr>
                                @if($item['item']->thumbnail)
                                <td class="product-thumbnail"><a href="{{ route('product-detail', $item['item']->slug) }}"><img src="{{ asset('/uploads/' . $item['item']->thumbnail) }}" alt="{{ $item['item']->title }}"></a></td>
                                @else
                            	<td class="product-thumbnail"><a href="{{ route('product-detail', $item['item']->slug) }}"><img src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $item['item']->title }}"></a></td>
                                @endif
                                <td class="product-name" data-title="Product"><a href="{{ route('product-detail', $item['item']->slug) }}">{{ $item['item']->title }}</a></td>
                                <td class="product-price" data-title="Price">Rs. {{ number_format($item['item']->retailPrice) }}</td>
                                <td class="product-add-to-cart"><a href="{{ ($item['item']['productVariations']->count() == 0) ? route('add-to-cart-single', $item['item']->slug) : route('product-detail', $item['item']->slug) }}" class="btn btn-fill-out"><i class="icon-basket-loaded"></i> Add to Cart</a></td>
                                <td>
                                    <input type="hidden" name="wishlist-slug" value="{{ ($item['item']) ? $item['item']->slug : '' }}">
                                    <button id="remove-wishlist" class="icon-btn add-btn">  
                                        <div class="btn-txt">Remove</div>
                                    </button> 
                                </td>       
                            </tr>
                            @endforeach
                            @else
                            <tr><td class="product-thumbnail"></td>
                                <td class="product-name"><div class="alert alert-danger">Wishlist is Empty go back to <a href="/products">Shop!</a></td>
                                <td class="product-price"></td>
                                <td class="product-quantity"></td>
                                <td class="product-subtotal"></td>
                                <td class="product-remove"></td></tr>
                                </div>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->
<style>
    
.icon-btn {
  width: 50px;
  height: 50px;
  border: 1px solid #cdcdcd;
  background: white;
  border-radius: 25px;
  overflow: hidden;
  position: relative;
  transition: width 0.2s ease-in-out;
}
.add-btn:hover {
  width: 120px;
}
.add-btn::before,
.add-btn::after {
  transition: width 0.2s ease-in-out, border-radius 0.2s ease-in-out;
  content: "";
  position: absolute;
  height: 4px;
  width: 10px;
  top: calc(50% - 2px);
  background: red;
}
.add-btn::after {
  right: 14px;
  overflow: hidden;
  border-top-right-radius: 2px;
  border-bottom-right-radius: 2px;
}
.add-btn::before {
  left: 14px;
  border-top-left-radius: 2px;
  border-bottom-left-radius: 2px;
}
.icon-btn:focus {
  outline: none;
}
.btn-txt {
  opacity: 0;
  transition: opacity 0.2s;
}
.add-btn:hover::before,
.add-btn:hover::after {
  width: 4px;
  border-radius: 2px;
}
.add-btn:hover .btn-txt {
  opacity: 1;
}
.add-icon::after,
.add-icon::before {
  transition: all 0.2s ease-in-out;
  content: "";
  position: absolute;
  height: 20px;
  width: 2px;
  top: calc(50% - 10px);
  background: red;
  overflow: hidden;
}
.add-icon::before {
  left: 22px;
  border-top-left-radius: 2px;
  border-bottom-left-radius: 2px;
}
.add-icon::after {
  right: 22px;
  border-top-right-radius: 2px;
  border-bottom-right-radius: 2px;
}
.add-btn:hover .add-icon::before {
  left: 15px;
  height: 4px;
  top: calc(50% - 2px);
}
.add-btn:hover .add-icon::after {
  right: 15px;
  height: 4px;
  top: calc(50% - 2px);
}

</style>
<!-- START SECTION SUBSCRIBE NEWSLETTER -->
@include('./partials/footer-newsletter')
<!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>
<!-- END MAIN CONTENT -->
@endsection

@section('scripts')
<script>
    jQuery(document).ready(function($) {
        $("button#remove-wishlist").on('click', function (e) {
            e.preventDefault();
            var slug = $("input[name='wishlist-slug']").val();
            url = '/wishlist/'+slug+'/remove';
            setTimeout(function(){ document.location.href = url; }, 2000);
        });
    });
</script>
@endsection