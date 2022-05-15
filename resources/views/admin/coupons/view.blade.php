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
                    <div class="card">
                        <div class="header">
                            <a href="{{ route('coupon.create') }}" class="btn btn-outline-success">Add New</a>
                            <ul class="header-dropdown dropdown">
                                
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom spacing5">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Value</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>Name</th>
                                            <th>Code</th>
                                            <th>Value</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @forelse($coupons as $coupon)
                                        <tr>
                                            <td>{{ $coupon->name }}</td>
                                            <td>{{ $coupon->code }}</td>
                                            <td>{{ $coupon->value }}</td>
                                    <td>
                                        <form action="{{ route('coupon.destroy', $coupon->id) }}" method="POST" name="CouponDelete">
                                            @csrf
                                            @method('DELETE')
                                        <a href="{{ route('coupon.edit', $coupon->id) }}" class="btn btn-sm btn-default " title="Edit" data-toggle="tooltip" data-placement="top"><i class="fa fa-edit"></i></a>
                                        {{-- Delete --}}
                                        <button type="submit" class="btn btn-sm btn-default swal-dialog" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash"></i></button>
                                        </form>
                                    </td>
                                        </tr>
                                        @empty
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                             Coupons Not Found
                                        </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('/admin/assets/js/swal-delete.js') }}"></script>
@endsection