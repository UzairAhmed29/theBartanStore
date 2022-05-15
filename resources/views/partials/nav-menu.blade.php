{{-- <ul class="navbar-nav">

    <li class="dropdown">

        <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{ route('main') }}">Home</a> 

    </li>

    <li class="dropdown">

    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Products</a>

    <div class="dropdown-menu">

        <ul> 

            <li><a class="dropdown-item nav-link nav_item" href="{{ route('products') }}">Products</a></li>

            <li><a class="dropdown-item nav-link nav_item" href="{{ route('gallery') }}">Product Gallery</a></li>

        </ul>

    </div>

</li>

    <li class="dropdown dropdown-mega-menu">

        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Shop</a>

        <div class="dropdown-menu">

            <ul class="mega-menu d-lg-flex">

                <li class="mega-menu-col col-lg-9">

                    <ul class="d-lg-flex">

                        <li class="mega-menu-col col-lg-4">

                            @if(\App\Product::count() != 0)

                            @php

                                $trendingProducts = App\Product::where('status', 'Activated')->inRandomOrder()->limit(6)->get();

                            @endphp

                            <ul> 

                                <li class="dropdown-header">Trending Products</li>

                                @forelse($trendingProducts as $tProduct)

                                <li><a class="dropdown-item nav-link nav_item" href="{{ route('product-detail', $tProduct->slug) }}">{{ str_limit($tProduct->title, 20, $end = '...') }}</a></li>

                                @empty

                                @endforelse

                            </ul>

                            @endif

                        </li>

                        <li class="mega-menu-col col-lg-4">

                             @if(\App\Product::count() != 0)

                            @php

                                $featuredProducts = App\Product::where('status', 'Activated')->where('new', 'on')->take(6)->get();

                            @endphp

                            <ul>

                                <li class="dropdown-header">Featured Products</li>

                               @forelse($featuredProducts as $fProduct)

                                <li><a class="dropdown-item nav-link nav_item" href="{{ route('product-detail', $fProduct->slug) }}">{{ str_limit($fProduct->title, 20, $end = '...') }}</a></li>

                                @empty

                                @endforelse

                            </ul>

                            @endif

                        </li>

                        <li class="mega-menu-col col-lg-4">

                             @if(\App\Product::count() != 0)

                            @php

                                $onSaleProducts = App\Product::where('status', 'Activated')->where('wholesalePrice', '!=', null)->take(6)->get();

                            @endphp

                            <ul>

                                <li class="dropdown-header">On Sale Products</li>

                                @forelse($onSaleProducts as $osProduct)

                                <li><a class="dropdown-item nav-link nav_item" href="{{ route('product-detail', $osProduct->slug) }}">{{ str_limit($osProduct->title, 20, $end = '...') }}</a></li>

                                @empty

                                @endforelse

                            </ul>

                            @endif

                        </li>

                    </ul>

                </li>

                <li class="mega-menu-col col-lg-3">

                    <div class="header_banner">

                        <div class="header_banner_content">

                             @if(\App\Product::count() != 0)

                            @php

                                $imageProducts = App\Product::where('status', 'Activated')->orWhere('thumbnail', '!=', null)->orWhere('wholesalePrice', '!=', null)->take(1)->get();

                            @endphp

                            @foreach($imageProducts as $imageProduct)

                            <div class="shop_banner">

                                <div class="banner_img overlay_bg_40">

                                    @if($imageProduct->thumbnail)

                                        <img src="{{ asset('/uploads/' . $imageProduct->thumbnail) }}" alt="{{ $imageProduct->title }}" width="209" height="232" />

                                    @else

                                        <img src="{{ asset('/assets/images/404.jpg') }}" alt="{{ $imageProduct->title }}" width="209" height="232" />

                                    @endif

                                </div> 

                                <div class="shop_bn_content">

                                    <h5 class="text-uppercase shop_subtitle">New Collection</h5>

                                    <h3 class="text-uppercase shop_title">Save Rs. {{ number_format($imageProduct->retailPrice - $imageProduct->wholesalePrice) }}</h3>

                                    <a href="{{ route('product-detail', $imageProduct->slug) }}" class="btn btn-white rounded-0 btn-sm text-uppercase">Shop Now</a>

                                </div>

                            </div>

                            @endforeach

                            @endif

                        </div>

                    </div>

                </li>

            </ul>

        </div>

    </li>



    <li><a class="nav-link nav_item  {{ (request()->is('/contact-us')) ? 'active' : '' }}" href="{{ route('get-contactUs') }}">Contact Us</a></li> 


    <li class="dropdown">

        <a class="dropdown-toggle nav-link {{ (request()->is('pages/faq')) ? 'active' : '' }}" href="{{ route('faq') }}" data-toggle="dropdown">FAQ</a>

        <div class="dropdown-menu">

            <ul> 

                <li><a class="dropdown-item nav-link nav_item" href="{{ route('faq') }}">Terms & Use</a></li>

                <li><a class="dropdown-item nav-link nav_item" href="{{ route('faq') }}">Returtn & Exchange</a></li>

                <li><a class="dropdown-item nav-link nav_item" href="{{ route('faq') }}">Product Our Guarantee</a></li>

                <li><a class="dropdown-item nav-link nav_item" href="{{ route('faq') }}">Shipping & Delivery</a></li>

            </ul>

        </div>

    </li>

</ul>

<style>

@media (min-width: 992px){

    .navbar-expand-lg .navbar-nav {

        display: contents;

    }

    .contact_phone{

        display: none;

    }

}

</style> --}}