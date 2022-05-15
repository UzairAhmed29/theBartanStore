@extends('admin/layouts.app')
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
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                        </div>
                        <div class="body">
                            <form action="{{ isset($coupon) ? route('coupon.update', $coupon->id) : route('coupon.store') }}" method="POST" name="StoreCoupon">
                                @csrf
                                @isset ($coupon)
                                @method('PUT')
                                @endisset
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Name <span style="color: red;"> *</span></label>
                                        <input type="text" name="name" class="form-control" value="{{ isset($coupon) ? $coupon->name : '' }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Code<span style="color: red;"> *</span></label>
                                        <input type="text" name="code" class="form-control" value="{{ isset($coupon) ? $coupon->code : '' }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Type<span style="color: red;"> *</span></label>
                                        <input type="text" name="type" value="discount" class="form-control" disabled>
                                    </div>
                                    <button class="btn btn-outline-success" type="submit">
                                        @isset ($coupon)
                                            Update
                                        @endisset
                                        @empty ($coupon)    
                                            Submit
                                        @endempty
                                </button>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Value<span style="color: red;"> *</span>  <b>In Pecentage</b></label>
                                        <div class="input-group mb-3">
                                        <input input type="number" name="value" class="form-control"  value="{{ isset($coupon) ? $coupon->value : '' }}" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">%</span>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea name="description" class="form-control" cols="30" rows="5" required>{{ isset($coupon) ? $coupon->description : '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- multiple file upload with preview script --}}
@section('scripts')
@endsection
{{-- End script --}}
@endsection