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
                        <a href="{{ route('brand.create') }}" class="btn btn-outline-success">Add New</a>
                        <ul class="header-dropdown dropdown">
                            
                            <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom spacing5">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                    @forelse($brands as $brand)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('/uploads/brand/' . $brand->image) }}" width="100" height="100" class="img-thumbnail">
                                        </td>
                                        <form action="{{ route('BrandStatus', $brand->id) }}" name="BrandStatus" method="POST">
                                            @csrf
                                            @method('PUT')
                                            @if($brand->status == 'Deactivated')
                                            <td><button type="submit" class="badge badge-warning  ml-0 mr-0">Deactivated</button></td>
                                            @else
                                            <td><button type="submit" class="badge badge-success  ml-0 mr-0">Activated</button></td>
                                            @endif
                                        </form>
                                        <td>
                                            <form action="{{ route('brand.destroy', $brand->id) }}" method="POST" name="BrandDelete">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('brand.edit', $brand->id) }}" class="btn btn-sm btn-default " title="Edit" data-toggle="tooltip" data-placement="top"><i class="fa fa-edit"></i></a>
                                            
                                            <button type="submit" class="btn btn-sm btn-default swal-dialog" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash"></i></button>
                                        </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        Brands Not Found
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