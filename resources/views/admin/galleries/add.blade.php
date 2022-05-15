@extends('admin/layouts.app')
@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('admin/assets/css/media-dropdown-css.css') }}">
@endsection
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
                        <form action="{{ isset($gallery) ? route('gallery.update', $gallery->id) : route('gallery.store') }}" method="POST" name="GalleryCreateUpdate" enctype="multipart/form-data">    
                            @csrf
                            @isset ($gallery)
                                @method('PUT')
                            @endisset
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-12">
                            	 	<div class="form-group">
                            	<label for=""><b>Product Image  <span style="color: red;"> *</span></b>
                               {{--  @isset ($gallery)
                                    <p style="color: red;">Please select the image again!</p>
                                @endisset --}}
                                </label>
                            	<input type="file" class="dropify" name="image" data-default-file="{{ isset($gallery) ? asset('uploads/media/' . $gallery->image) : '' }}" accept="image/jpg, image/jpeg, image/png, image/gif," required>
                                <span class="text-danger"><b>{{ $errors->first('image') }}</b></span>
                            </div>
                            <div class="form-group">
                                    <label for=""><b>Select Product <span style="color: red;"> *</span></b></label>
                                    <div class="select">
                                      <select name="product_id" id="slct">
                                        <option selected disabled>Choose Product</option>
                                        @forelse($products as $product)
                                        <option value="{{ $product->id }}" 
                                        @if(old('product_id') == $product->id) {{ 'selected' }} @endif
                                        @isset($gallery)
                                        @if($gallery->product_id == $product->id) {{ 'selected' }}@endif
                                        @endisset
                                        >{{ $product->title }}</option>
                                        @empty
                                        <option disabled>Please create products first!</option>
                                        @endforelse
                                      </select>
                                    </div>
                                      <span class="text-danger"><b>{{ $errors->first('product_id') }}</b></span>
                                    </div>
                                <div class="form-group">
                                	<label for=""><b>Select Media Type <span style="color: red;"> *</span></b></label>
									<div class="select">
									  <select name="image_type" id="slct">
									    <option selected disabled>Choose an option</option>
									    <option value="carousel"
                                        @if(old('image_type') == 'carousel') {{ 'selected' }} @endif
                                        @isset($gallery)
                                            @if($gallery->image_type == 'carousel')
                                            {{ 'selected' }}
                                            @endif
                                        @endisset
                                        >Carousel</option>
									    <option value="advertisement"
                                        @if(old('image_type') == 'advertisement') {{ 'selected' }} @endif
                                        @isset($gallery)
                                            @if($gallery->image_type == 'advertisement')
                                            {{ 'selected' }}
                                            @endif
                                        @endisset
                                        >Advertisement</option>
									    <option value="gallery"
                                        @if(old('image_type') == 'gallery') {{ 'selected' }} @endif
                                        @isset($gallery)
                                            @if($gallery->image_type == 'gallery')
                                            {{ 'selected' }}
                                            @endif
                                        @endisset
                                        >Gallery</option>
									  </select>
									</div>
                                      <span class="text-danger"><b>{{ $errors->first('image_type') }}</b></span>
                                    </div>
                                <a href="{{ route('gallery.index') }}" class="btn btn btn-outline-danger">Cancel</a>
                            <button type="submit" class="btn btn btn-outline-success">
                                @isset ($gallery)
                                    Update
                                @endisset
                                @empty ($gallery)
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