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
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <form action="{{ isset($brand) ? route('brand.update', $brand->id) : route('brand.store') }}" name="BrandForm" method="POST" enctype="multipart/form-data">    
                        @csrf
                        @isset ($brand)
                            @method('PUT')
                        @endisset
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                	 	<div class="form-group">
                                	<label for=""><b>Brand Image  <span style="color: red;"> *</span></b></label>
                                	<input type="file" name="image" class="dropify" data-default-file="{{ isset($brand) ? asset('uploads/brand/' . $brand->image) : ''}}" accept="image/jpg, image/jpeg, image/png, image/gif," required>
                                    <span class="text-danger"><b>{{ $errors->first('image') }}</b></span>
                                </div>
                                    <a href="{{ route('brand.index') }}" class="btn btn btn-outline-danger">Cancel</a>
                                <button type="submit" class="btn btn btn-outline-success">
                                    @isset ($brand)
                                        Update
                                    @endisset
                                    @empty ($brand)
                                        Create
                                    @endempty
                                </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
			<!-- Tags Input -->
		</div>
    </div>
@endsection