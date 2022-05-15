@extends('admin/layouts.app')
{{-- multiple file upload with preview css --}}
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('admin/assets/css/product-multiple-file-upload.css') }}">
@endsection
{{-- End css --}}
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
        <form action="{{ isset($product) ? route('product.update', $product->id) : route('product.store') }}" method="POST" name="productsCreateUpdate" enctype="multipart/form-data">
            @csrf
            @isset ($product)
                @method('PUT')
            @endisset
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><b>Name <span style="color: red;"> *</span></b></label>
                                        <input type="text" name="title" class="form-control" value="{{ isset($product->title) ? $product->title : old('title') }}">
                                        <span class="text-danger"><b>{{ $errors->first('title') }}</b></span>
                                    </div>
                                    <div class="from-group">
                                        <label for=""><b>Retail Price <span style="color: red;"> *</span></b></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rs</span>
                                            </div>
                                            <input type="number" name="retailPrice" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{ isset($product->retailPrice) ? $product->retailPrice : old('retailPrice') }}">
                                            
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                        <br>
                                        <span class="text-danger"><b>{{ $errors->first('retailPrice') }}</b>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b>Warranty</b></label>
                                        <input type="text" name="warranty" class="form-control" value="{{ isset($product->warranty) ? $product->warranty : old('warranty') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b><span class="new-tag">New</span> Tag </b></label>
                                        <div class="fancy-checkbox">
                                            <label><input class="fancy-radio custom-color-green" type="checkbox" name="new"
                                                @isset($product->new)
                                                @if($product->new == 'on')
                                                checked
                                                @endif
                                                @endisset
                                                {{ ( old('new') ? 'checked' : '' ) }}><span>New tag on product</span></label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Description </b></label>
                                            <textarea class="form-control" name="description" rows="2" cols="30">{{ isset($product->description) ? $product->description : old('description') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""><b>Select Category <span style="color: red;"> *</span></b></label>
                                            <div class="multiselect_div">
                                                <select id="single-selection" name="category_id" class="multiselect multiselect-custom">
                                                    <option value="null" disabled selected>Select Category</option>
                                                    @forelse($categories as $category)
                                                    <option value="{{ $category->id }}"  @if(old('category_id')) {{ $category->id }} selected @endif
                                                        @isset ($product->category_id)
                                                        @if($product->category_id == $category->id)
                                                        selected
                                                        @endif
                                                        @endisset
                                                    >{{ $category->name }}</option>
                                                    @empty
                                                    <option value="null" disabled>Please create Category</option>
                                                    @endforelse
                                                </select>
                                                <span class="text-danger"><b>{{ $errors->first('category_id') }}</b></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b>Wholesale Price </b></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rs</span>
                                                </div>
                                                <input type="number" name="wholesalePrice" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{ isset($product->wholesalePrice) ? $product->wholesalePrice : old('wholesalePrice') }}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b>Policy</b></label>
                                            <div class="input-group">
                                                <input type="text" name="policy" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{ isset($product->policy) ? $product->policy : old('policy') }}">
                                                <div class="input-group-append">
                                                    <br>
                                                    <span class="input-group-text"> Return Policy</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Additional Info</b></label>
                                            <textarea class="form-control" name="additional_info" rows="1" cols="30">{{ isset($product->additional_info) ? $product->additional_info : old('additional_info') }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label><b>Meta Description <span style="color: red;"> *</span></b></label>
                                            <textarea class="form-control" name="meta_description" rows="2" cols="30">{{ isset($product->meta_description) ? $product->meta_description : old('meta_description')}}</textarea>
                                            <span class="text-danger"><b>{{ $errors->first('meta_description') }}</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tags Input -->
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="body">
                                <div class="form-group">
                                    
                                    <label for=""><b>Tags</b></label>
                                    <div class="input-group demo-tagsinput-area">
                                        <input type="text" name="tags" class="form-control" data-role="tagsinput" value="{{ isset($product->tags) ? $product->tags : old('tags') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Product Image</b></label>
                                    @isset ($product->thumbnail)
                                    <br>
                                        <input class="fancy-radio custom-color-green" type="checkbox" name="removeThumbnail">
                                    <label>Remove thumbnail image</label>
                                    @endisset
                                    <input type="file" name="thumbnail" class="dropify" data-allowed-file-extensions="jpg png jpeg gif svg" data-max-file-size="3M"  value="" data-show-remove="false" data-default-file="{{ isset($product->thumbnail) ? asset('uploads/' . $product->thumbnail) : '' }}">
                                    <span class="text-danger"><b>{{ $errors->first('thumbnail') }}</b></span>
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Product Image Gallery</b></label><br>
                                    <span class="btn btn-outline-warning btn-file">
                                        Browse Files
                                        <input type="file" class="form-control s" name="gallery[]" id="files" multiple accept="image/jpg, image/jpeg, image/png, image/gif,"><br />
                                    </span>
                                    <output id="Filelist"></output>
                                    @isset ($product->gallery)
                                    <input class="fancy-radio custom-color-green" type="checkbox" name="removeGallery">
                                    <label>Remove all Gallery images</label>
                                    <p style="color: red;">If you want to edit files then please remove all files and upload again! Otherwise images will remain same.</p>
                                    <output id="Filelist">
                                    <ul class="thumb-Images" id="imgList">
                                        @foreach ($product->gallery as $image)
                                        <li>
                                            <div class="img-wrap img-thumbnail"> <span class="close">×</span><img class="thumb" src="
                                            {{ asset('uploads/' . $image) }}
                                            " title="15.jpg" data-id="15.jpg">
                                        </div>
                                        <div class="FileNameCaptionStyle">
                                            <?php
                                            $image_name = explode('-', $image);
                                            ?>
                                        {{ $image_name[2] }}</div>
                                    </li>
                                    @endforeach
                                </ul>
                                </output>
                                
                                @endisset
                            </div>
                            <a href="{{ route('product.index') }}" class="btn btn btn-outline-danger">Cancel</a>
                            <button type="submit" class="btn btn btn-outline-success">
                            @isset($product)
                            Update
                            @endisset
                            @empty ($product)
                            Create
                            @endempty
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
{{-- multiple file upload with preview script --}}
@section('scripts')
<script src="{{ asset('admin/assets/js/product-multiple-file-upload.js') }}"></script>
@endsection
{{-- End script --}}
@endsection