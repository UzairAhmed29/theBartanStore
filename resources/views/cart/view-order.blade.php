@extends('./layouts.app')

@section('content')
<div class="breadcrumb_section bg_gray page-title-mini" style="padding: 20px; text-align: center;">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-title">
                    <h1>Order Id: #{{ $order->orderId }}</h1>
                </div>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>


<div class="main_content">

<!-- END SECTION SHOP -->
<div class="section">
    <section class="root">
  <figure>
    <img src="https://image.flaticon.com/icons/svg/970/970514.svg" alt="">
    <figcaption>
      <h4>Tracking Details</h4>
      <h6>Order Number</h6>
      <h2># {{ $order->orderId }}</h2>
      <p>Order Status: <b>{{ $order->order_status }}</b></p>
    </figcaption>
  </figure>
  <div class="order-track">
    <div class="order-track-step">
      <div class="order-track-status">
        <span class="order-track-status-dot"></span>
        <span class="order-track-status-line"></span>
      </div>
      <div class="order-track-text">
        <p class="order-track-text-stat">Order Created</p>
        <span class="order-track-text-sub">{{ $order->created_at->toDayDateTimeString() }}</span>
      </div>
    </div>
    <div class="order-track-step">
      <div class="order-track-status">
        <span class="order-track-status-dot"></span>
        <span class="order-track-status-line"></span>
      </div>
      <div class="order-track-text">
        <p class="order-track-text-stat"> Products </p>
        @forelse($order->product_ids as $key => $item)
         @php
            $data = json_decode($item);
        @endphp
            <span style="display: list-item; list-style: none;" class="order-track-text-sub">{{ $key + 1 }}) {{ $data->name }} </span>
        @empty
        @endforelse 
      </div>
    </div>
    <div class="order-track-step">
      <div class="order-track-status">
        <span class="order-track-status-dot"></span>
        <span class="order-track-status-line"></span>
      </div>
      <div class="order-track-text">
        <p class="order-track-text-stat"> Order Total - Rs. {{ number_format($order->orderTotal) }}</p>
        <span class="order-track-text-sub">3rd November, 2019</span>
      </div>
    </div>
  </div>
</section>
</div>
<!-- START SECTION SUBSCRIBE NEWSLETTER -->
@include('./partials/footer-newsletter')
<!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>
<!-- END MAIN CONTENT -->
@endsection
<style>



.root {
    width: 1000px;
    margin: 0 auto;
    padding: 1rem;
    border-radius: 5px;
    box-shadow: 0 2rem 6rem rgba(0, 0, 0, 0.3);
}

figure {
  display: flex;
}
figure img {
  width: 8rem;
  height: 8rem;
  border-radius: 15%;
  border: 1.5px solid #f05a00;
  margin-right: 1.5rem;
  padding:1rem;
}
figure figcaption {
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
}
figure figcaption h4 {
  font-size: 1.4rem;
  font-weight: 500;
}
figure figcaption h6 {
  font-size: 1rem;
  font-weight: 300;
}
figure figcaption h2 {
  font-size: 1.6rem;
  font-weight: 500;
}

.order-track {
  margin-top: 2rem;
  padding: 0 1rem;
  border-top: 1px dashed #2c3e50;
  padding-top: 2.5rem;
  display: flex;
  flex-direction: column;
}
.order-track-step {
  display: flex;
  height: 7rem;
}
.order-track-step:last-child {
  overflow: hidden;
  height: 4rem;
}
.order-track-step:last-child .order-track-status span:last-of-type {
  display: none;
}
.order-track-status {
  margin-right: 1.5rem;
  position: relative;
}
.order-track-status-dot {
  display: block;
  width: 2.2rem;
  height: 2.2rem;
  border-radius: 50%;
  background: #f05a00;
}
.order-track-status-line {
  display: block;
  margin: 0 auto;
  width: 2px;
  height: 7rem;
  background: #f05a00;
}
.order-track-text-stat {
  font-size: 1.3rem;
  font-weight: 500;
  margin-bottom: 3px;
}
.order-track-text-sub {
  font-size: 1rem;
  font-weight: 300;
}

.order-track {
  transition: all .3s height 0.3s;
  transform-origin: top center;
}
</style>
