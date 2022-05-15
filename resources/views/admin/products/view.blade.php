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
                            <a href="{{ route('product.create') }}" class="btn btn-outline-success">Add New</a>
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
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>Name</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @forelse($products as $product)
                                        <tr>
                                            <td>{{ str_limit($product->title, 50, '...') }}</td>
                                            <td>{{ $product->category->name }}</td>
                                            <td>{{ number_format($product->retailPrice) }}</td>
                                        <form action="{{ route('productStatus', $product->id) }}" name="productStatus" method="POST">
                                            @csrf
                                            @method('PUT')
                                        	@if($product->status == 'Deactivated')
                                                <td><button type="submit" class="badge badge-warning  ml-0 mr-0">Deactivated</a></td>
                                            @else
                                            	<td><button type="submit" class="badge badge-success  ml-0 mr-0">Activated</a></td>
                                            @endif
                                        </form>
                                    <td>
                                        <form action="{{ route('product.destroy', $product->id) }}" method="POST" name="ProductDelete">
                                            @csrf
                                            @method('DELETE')
                                        {{-- Manage Attributes --}}
                                        <a href="{{ route('attributes', $product->id) }}" class="btn btn-sm btn-default " title="Manage Product Attributes and Variations" data-toggle="tooltip" data-placement="top"><i class="ti-layers"></i></a>
                                        {{-- Edit --}}
                                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-default " title="Edit" data-toggle="tooltip" data-placement="top"><i class="fa fa-edit"></i></a>
                                        {{-- Delete --}}
                                        <button type="submit" class="btn btn-sm btn-default swal-dialog" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash"></i></button>
                                        </form>
                                    </td>
                                        </tr>
                                        @empty
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                             Products Not Found
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