@extends('admin/layouts.app')
@section('content')
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>{{ $title }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group"> 
                <label for="">Search Order</label>
                    <input type="search" id="search" class="form-control" placeholder="" aria-controls="DataTables_Table_0" data-list=".search-data">
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="table-responsive invoice_list mb-4">
                        <table class="table table-hover table-custom spacing8">
                            <thead>
                                <tr> 
                                    <th style="width: 20px;">Order Id</th>
                                    <th>Customer</th>
                                    <th>Products</th>
                                    <th style="width: 50px;">Order Total</th>
                                    <th style="width: 50px;">Order Status</th>
                                    <th style="width: 110px;">Action</th>
                                </tr>
                            </thead>
                            <tbody class="search-data">
                                @forelse($orders as $key => $order)
                                @php
                                    $name = $order->firstName;
                                    $e  = explode(" ", $name);
                                    $a = str_split($e[0]);
                                    if($order->lastName){
                                        $lName = $order->lastName;
                                    $es  = explode(" ", $lName);
                                    $as = str_split($es[0]);
                                    } else {
                                        $as = null;
                                    }
                                @endphp
                                <tr>
                                    <td>
                                        <span>#{{ $order->orderId }}</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avtar-pic w35 bg-pink" data-toggle="tooltip" data-placement="top" title="" style="text-align: center;">{{ $a[0] }}{{ $as[0] }}<span></span></div>
                                            <div class="ml-3">
                                                <a href="{{ ($order->user) ? route('user.edit', $order->user->id) : '#' }}" title="">{{ $order->firstName }} {{ ($order->lastName) ? $order->lastName : ''}}</a>
                                                <p class="mb-0">{{ $order->email }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p>{{ $order->phone }}</p>
                                    </td>
                                    <td>Rs. {{ number_format($order->orderTotal) }}</td>
                                    @if($order->order_status == 'processing')
                                    <td><span class="badge badge-success  ml-0 mr-0">Processing</span></td>
                                    @elseif($order->order_status == 'pending')
                                    <td><span class="badge badge-warning  ml-0 mr-0">Pending</span></td>
                                    @elseif($order->order_status == 'completed')
                                    <td><span class="badge badge-info  ml-0 mr-0">Completed</span></td>
                                    @elseif($order->order_status == 'failed')
                                    <td><span class="badge badge-danger  ml-0 mr-0">Failed</span></td>
                                    @endif
                                    <td>
                                        <form action="{{ route('order.destroy', $order->id) }}" method="POST" name="OrderDelete">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('order.edit', $order->id) }}" class="btn btn-sm btn-default " title="View" data-toggle="tooltip" data-placement="top"><i class="icon-share-alt"></i></a>
                                        <button type="button" class="btn btn-sm btn-default swal-dialog" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr><td>No Orders Found</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('/admin/assets/js/swal-delete.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/hideseek/0.8.0/jquery.hideseek.min.js"></script>

<script>
    $("#search").hideseek({
  highlight: true,
  ignore_accents: true
});

</script>
@endsection