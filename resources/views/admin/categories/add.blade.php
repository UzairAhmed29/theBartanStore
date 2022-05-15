@extends('admin/layouts.app')

@section('content')
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6">
                    	<h1>{{ $title }}</h1>
                    </div>            
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                                <form action="{{ isset($category) ? route('category.update', $category->id) : route('category.store') }}" method="POST" name="categoryCreateUpdate">
                                    @csrf
                                    @isset ($category)
                                        @method('PUT')
                                    @endisset
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-12">
                            	 	<div class="form-group">
                            		<label for=""><b>Name <span style="color: red;"> *</span></b></label>
                                    <input type="text" name="name" class="form-control" value="{{ isset($category->name) ? $category->name : '' }}" required>
                                </div>
                                <a href="{{ route('category.index') }}" class="btn btn btn-outline-danger">Cancel</a>
                            <button type="submit" class="btn btn btn-outline-success">
                                @isset ($category)
                                    Update
                                @endisset
                                @empty ($category)
                                    Create
                                @endempty

                            </button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
			<!-- Tags Input -->
		</div>
    </div>
@endsection