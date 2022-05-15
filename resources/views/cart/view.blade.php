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
@if(!Cart::isEmpty())
<!-- START SECTION SHOP -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(\Session::has('success'))
                    <div class="alert alert-success">
                        {{ \Session::get('success') }}
                    </div>
                @endif
                @if(\Session::has('error'))
                    <div class="alert alert-danger">
                        {{ \Session::get('error') }}
                    </div>
                @endif
                <button type="button" style="border: none; color: red; background-color: white;" onclick="print()" id="print-order"><u>Print</u></button>
                <div class="table-responsive shop_cart_table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                                <th class="product-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($items as $item)
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="{{ route('product-detail', $item->associatedModel->slug) }}">
                                        @if($item->associatedModel->thumbnail)
                                        <img src="{{ asset('/uploads/' . $item->associatedModel->thumbnail) }}" alt="{{ $item->title }}">
                                        @else
                                        <img src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $item->title }}">
                                        @endif
                                    </a>
                                </td>
                                {{-- {{ dd($items) }} --}}
                                <td class="product-name" data-title="Product"><a href="{{ route('product-detail', $item->associatedModel->slug) }}">{{ $item->associatedModel->title }}</a>
                                    @if(isset($item->attributes[0]) && isset($item->attributes[1]))
                                    <p>{{ $item->attributes[0] }} </br>  {{ $item->attributes[1] }}</p>
                                    @endif
                                </td>
                                <td class="product-price" data-title="Price">{{ number_format($item->price) }}</td>
                                <td class="product-quantity" data-title="Quantity">
                                    <input type="hidden" name="cartId[]" id="cartId" value="{{ $item->id }}">
                                    <div class="quantity">
                                    <input type="button" value="-" class="minus">
                                    <input type="number" name="quantity[]" value="{{ $item->quantity }}" title="Qty" class="qty" size="4">
                                    <input type="button" value="+" class="plus">
                                    </div>
                                </td>
                                <td class="product-subtotal" data-title="Total">{{ number_format(Cart::get($item->id)->getPriceSum()) }}</td>
                                <form action="{{ route('remove-cart', $item->id) }}" method="POST" name="removeItemCart">
                                    @csrf
                                    @method('DELETE')
                                <td><button style="background: transparent; border: none;" class="product-remove" data-title="Remove"><a href="#"><i class="ti-close"></i></a></button></td>
                                </form>
                            </tr>
                            @empty
                            <tr style="color: #721c24; background-color: #f8d7da; border-color: #f5c6cb;">
                                <td class="product-thumbnail"></td>
                                <td class="product-name">Cart is Empty go back to <a href="/product">Shop!</a></td>
                                <td class="product-price"></td>
                                <td class="product-quantity"></td>
                                <td class="product-subtotal"></td>
                                <td class="product-remove"></td>
                            </tr>
                            @endforelse
                        </tbody>
                        @if($items->count() !== 0)
                        <tfoot>
                            <tr>
                                <td colspan="6" class="px-0">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-lg-4 col-md-6 mb-3 mb-md-0">
                                        <form action="{{ route('coupon') }}" method="GET">
                                            <div class="coupon field_form input-group">
                                                <input type="text" name="coupon_code" value="" class="form-control form-control-sm" placeholder="Enter Coupon Code.." required>
                                                <div class="input-group-append">
                                                    <button class="btn btn-fill-out btn-sm" type="submit">Apply Coupon</button>
                                                </div>
                                            </div>
                                            <input type="hidden" name="condition" id="couponCode" value="{{ Cart::getConditions() }}">
                                            {{-- {{ dd(Cart::getConditions()) }} --}}
                                        </form>
                                        </div>
                                        <div class="col-lg-8 col-md-6 text-left text-md-right">
                                            <img src="{{ asset('/assets/images/loader.gif') }}" style="width: 45px; margin-right: 12px; display: none" id="loader"> 
                                            <button class="btn btn-line-fill btn-sm" type="button" id="updateCart">Update Cart</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                        @endif
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="medium_divider"></div>
                <div class="divider center_icon"><i class="ti-shopping-cart-full"></i></div>
                <div class="medium_divider"></div>
            </div>
        </div>
        <div class="row">
            @if($items->count() !== 0)
            <div class="col-md-12">
                <div class="border p-3 p-md-4">
                    <div class="heading_s1 mb-3">
                        <h6>Cart Totals</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="cart_total_label">Cart Subtotal</td>
                                    <td class="cart_total_amount">{{ number_format(Cart::getSubTotal()) }}</td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">Shipping</td>
                                    <td class="cart_total_amount">Free Shipping</td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">Total</td>
                                    <td class="cart_total_amount"><strong>{{ number_format(Cart::getTotal()) }}</strong></td>
                                </tr>
                                <tr class="append-coupon"></tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('view-checkout') }}" class="btn btn-fill-out">Proceed To CheckOut</a>
                    <a href="{{ route('cart-clear') }}" class="btn btn-line-fill btn-sm" style="float: right;">Clear Cart</a>
                </div>
            </div>
            @endif
        </div>
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
<script src="{{ asset('/assets/js/updateCart.js') }}"></script>
<script>
        if(jQuery('#couponCode').val() !== '[]') {
        jQuery(".append-coupon").append('<td><a href="{{ route('remove-coupon') }}">Remove Coupon <span style="color:red;"> X</span></a></td>');
    }    
     $('button#print-order').click(function () {
     
        let print = () => {
                let objFra = document.getElementById('shop_cart_table')[0];
                objFra.contentWindow.focus();
                objFra.contentWindow.print();
            };
        });
     
</script>
@endsection