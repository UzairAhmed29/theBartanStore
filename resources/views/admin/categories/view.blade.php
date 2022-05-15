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
                        <a href="{{ route('category.create') }}" class="btn btn-outline-success">Add New</a>
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
                                        <th>Related To Product</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Related To Product</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                    @forelse($categories as $category)
                                    <tr>
                                        <td width="500">{{ $category->name }}</td>
                                        <td width="500">{{ $category->products->count() }}</td>
                                        <form action="{{ route('CategoryStatus', $category->id) }}" name="CategoryStatus" method="POST">
                                            @csrf
                                            @method('PUT')
                                            @if($category->status == 'Deactivated')
                                            <td width="300"><button type="submit" class="badge badge-warning  ml-0 mr-0">Deactivated</button></td>
                                            @else
                                            <td width="300"><button type="submit" class="badge badge-success  ml-0 mr-0">Activated</button></td>
                                            @endif
                                        </form>
                                        <td>
                                        <form action="{{ route('category.destroy', $category->id) }}" method="POST" name="CategoryDelete">
                                            @csrf
                                            @method('DELETE')         
                                            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-default " title="Edit" data-toggle="tooltip" data-placement="top"><i class="fa fa-edit"></i></a>
                                            <button type="submit" class="btn btn-sm btn-default swal-dialog " title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash"></i></button>
                                        </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        Categories Not Found
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