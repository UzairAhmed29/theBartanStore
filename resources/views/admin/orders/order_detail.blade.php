@extends('admin/layouts.app')

@section('content')
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h1>{{ $title }}</h1>
                    </div>            
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card download">
                        <div class="header">
                            @if($order->user == null)
                            <h2>Name: {{ $order->firstName }} {{ ($order->lastName == null) ? null : $order->lastName }}
                                @else
                                <h2><a href="{{ route('user.edit', $order->user_id) }}">{{ $order->firstName }} {{ ($order->lastName == null) ? null : $order->lastName }} </a> | Checked out as logged In
                                @endif
                                <small><b>Email: {{ $order->email }}</b></small>
                                <small><b>Phone: {{ $order->phone }}</b></small>
                                @if($order->companyName)
                                <small><b>Company: {{ $order->companyName }}</b></small>
                                @endif
                                <small>
                                    <b>Shipping & billing Address{{ $order->addressline1 }} {{ ($order->addressline2 == null) ? null : $order->addressline2 }}, {{ $order->city }}, {{ $order->country }}, {{ $order->postalCode }}.</small></b></h2>
                            
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6">
                                    <p class="m-b-0"><strong>Order Date: </strong> {{ $order->created_at->toDayDateTimeString() }}</p>
                                    <p><strong>Order ID: </strong> #<b>{{ $order->orderId }}</b></p>                                    
                                </div>
                                <div class="col-md-6 col-sm-6 text-right">
                                    
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-custom spacing5 mb-5">
                                            <thead>
                                                <tr>
                                                    <th>#</th>                                                        
                                                    <th>Item</th>
                                                    <th style="width: 120px;">Quantity</th>
                                                    <th class="hidden-sm-down" style="width: 80px;">Cost</th>
                                                    <th style="width: 80px; text-align: right">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($order->product_ids as $key => $item)
                                            @php
                                                $data = json_decode($item);
                                            @endphp
                                                {{-- {{ dd($data) }} --}}
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>
                                                        <span>{{ $data->name }}</span>
                                                        @forelse ($data->attributes as $element)
                                                        <p class="hidden-sm-down mb-0 text-muted"
                                                        >
                                                        {{ $element }}
                                                    </p>
                                                        @empty
                                                        @endforelse
                                                    </td>
                                                    <td>{{ $data->quantity }}</td>
                                                    <td class="hidden-sm-down">Rs. {{ number_format($data->price / $data->quantity) }}</td>
                                                    <td class="text-right">Rs. {{ number_format($data->price) }}</td>
                                                </tr>
                                                @empty
                                                @endforelse                    
                                            </tbody>
                                            <tfoot>
                                                <form action="{{ route('order.update', $order->id) }}" name="orderStatus" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                <td colspan="4">
                                                    <div class="col-lg-4 col-md-12" style="    display: grid;">
                                                    <label><b>Order Status</b></label>
                                                    <div class="multiselect_div">
                                                        <select id="single-selection" name="order_status" class="multiselect multiselect-custom">
                                                            <option value="completed" {{ ($order->order_status == 'completed') ? 'selected' :'' }}>Completed</option>
                                                            <option value="processing" {{ ($order->order_status == 'processing') ? 'selected' :'' }}>Processing</option>
                                                            <option value="pending" {{ ($order->order_status == 'pending') ? 'selected' :'' }}>Pending</option>
                                                            <option value="failed" {{ ($order->order_status == 'failed') ? 'selected' : '' }}>Failed</option>
                                                        </select>
                                                        </div>
                                                            <button type="submit" class="btn btn-outline-success">Update</button>
                                                    </div>
                                                </td>
                                                </form>
                                                <td class="text-right">
                                                    @if($order->isCouponApplied !== 0 && $order->coupon)
                                                    <p style="text-align: justify"><b>Coupon Name: </b>{{ $order->coupon->name }}</p>
                                                    <p style="text-align: justify"><b>Coupon Code: </b>{{ $order->coupon->code }}</p>
                                                    <p style="text-align: justify"><b>Coupon Discount: </b>{{ $order->coupon->value }}</p>
                                                    @endif
                                                    <span>Total: <strong class="text-success">Rs. {{ number_format($order->orderTotal) }}</strong></span>
                                                </td>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    @if($order->notes)
                                    <span><strong>Note: {{ $order->notes }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6 text-right">
                                    <button class="btn btn-info" id="print-order"><i class="icon-printer"></i> Print</button>
                                </div>
                            </div> 
                        </div>
                    </div>                                       
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.1.1/jspdf.umd.min.js"></script>
<script src="{{ asset('/admin/assets/js/jspdf.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>

<script type="text/javascript">   
    $('#print-order').click(function () {
        var pdf = new jsPDF('p','pt');
        source = $('div.download')[0];
        margins = {
            top: 20,
            bottom: 20,
            left: 40,
            width: 650
        };
        pdf.fromHTML(
        source, 
        margins.left, 
        margins.top, { 
            'width': margins.width, 
        },
        function (dispose) {
            setTimeout(function() {
                pdf.save('sample.pdf');
            }, 2000);
        }, margins);
    });
</script>
@endsection
