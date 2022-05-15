@extends('admin/layouts.app')

@section('content')
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>User Profile</h2>
                    </div>            
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card social">
                        <div class="profile-header d-flex justify-content-between justify-content-center">
                            <div class="d-flex">
                                <div class="mr-3">
                                    @php    
                                        $name = auth()->user()->name;
                                        $e  = explode(" ", $name);
                                        $a = str_split($e[0]);
                                    @endphp
                                    @if(auth()->user()->avatar !== null)
                                        <img style="width: 150px;" src="{{ asset('/uploads/user/' . auth()->user()->avatar) }}" class="rounded" alt="{{ auth()->user()->name }}">
                                    @else
                                        <div class="avtar-pic w50 bg-pink" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name"><span>{{ $a[0] }}</span></div>
                                    @endif
                                </div>
                                <div class="details">
                                    <h5 class="mb-0">{{ auth()->user()->name }} {{ isset(auth()->user()->lastName) ? auth()->user()->lastName : '' }}</h5>
                                    <span class="text-light">{{ isset(auth()->user()->designation) ? auth()->user()->designation : '' }}</span>
                                </div>                                
                            </div>
                            <div>
                            @if(auth()->user()->twitterProfile)
                                <a href="{{ auth()->user()->twitterProfile }}" target="_blank" class="btn btn-primary btn-sm" style="background: #00ACEE; border-color: #0075a2;"><i class="fa fa-twitter fa-fw"></i>Twitter</a>
                            @endif
                            @if(auth()->user()->facebookProfile)
                                <a href="{{ auth()->user()->facebookProfile }}" target="_blank" class="btn btn-success btn-sm" style="background-color: #3B5998; border-color: #263961;"><i class="fa fa-facebook fa-fw"></i>Facebook</a>
                            @endif
                            @if(auth()->user()->instagramProfile)
                                <a href="{{ auth()->user()->instagramProfile }}" target="_blank" class="btn btn-success btn-sm" style="background: linear-gradient(to right, #ff3019 0%, #c90477 100%); border: red;"><i class="fa fa-instagram">&nbsp;&nbsp;</i>Instagram</a>
                            @endif
                            </div>
                        </div>
                    </div>                    
                </div>


                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="card">
                        <div class="header">
                            <h2>Info</h2>
                            <ul class="header-dropdown dropdown">                                
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <small class="text-muted">Address: </small>
                            <p>{{ isset(auth()->user()->address) ? auth()->user()->address : '' }} {{ isset(auth()->user()->city) ? auth()->user()->city : '' }} {{ isset(auth()->user()->province) ? ',' . auth()->user()->province : ''}} {{ isset(auth()->user()->country) ? ',' . auth()->user()->country : '' }}</p>
                            <hr>
                            <small class="text-muted">Email address: </small>
                            <p>{{ auth()->user()->email }}</p>                            
                            <hr>
                            <small class="text-muted">Mobile: </small>
                            <p>{{ isset(auth()->user()->phone) ? auth()->user()->phone : '' }}</p>
                            <hr>
                            <small class="text-muted">Gender: </small>
                            <p class="m-b-0">{{ isset(auth()->user()->gender) ? auth()->user()->gender : '' }}</p>
                            <hr>
                            <small class="text-muted">Social: </small>
                            @if(isset(auth()->user()->twitterProfile))
                            <p><i class="fa fa-twitter m-r-5"></i> {{ isset(auth()->user()->twitterProfile) ? auth()->user()->twitterProfile : '' }}</p>
                            @endif
                            @if(isset(auth()->user()->facebookProfile))
                            <p><i class="fa fa-facebook  m-r-5"></i> {{ isset(auth()->user()->facebookProfile) ? auth()->user()->facebookProfile : '' }}</p>
                            @endif
                            @if(isset(auth()->user()->instagramProfile))
                            <p><i class="fa fa-instagram m-r-5"></i> {{ isset(auth()->user()->instagramProfile) ? auth()->user()->instagramProfile : '' }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Profile Picture</h2>
                        </div>
                        <div class="body">
                            <form action="{{ route('updateProfileImage') }}" method="POST" name="updateProfileImage" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <input type="file" name="avatar" class="dropify" data-default-file="{{ isset(auth()->user()->avatar) ? asset('uploads/user/' . auth()->user()->avatar) : ''}}" data-allowed-file-extensions="jpg png jpeg" required>
                                </div>
                            <button type="submit" class="btn btn-round btn-primary">Update</button> &nbsp;&nbsp;
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-xl-8 col-lg-8 col-md-7">
                    <div class="card">
                        <div class="header">
                            <h2>Basic Information</h2>
                            <ul class="header-dropdown dropdown">                                
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="{{ route('updateProfileBasic') }}" method="POST" name="UpdateProfileBasic">
                                @csrf
                                @method('PUT')
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">                                                
                                        <input type="text" name="name" class="form-control" placeholder="First Name" value="{{ auth()->user()->name }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">                                          
                                        <input type="text" name="lastName" class="form-control" placeholder="Last Name" value="{{ isset(auth()->user()->lastName) ? auth()->user()->lastName : '' }}">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <select class="form-control" name="gender">
                                            <option disabled 
                                            @if(isset(auth()->user()->gender) || auth()->user()->gender == null)
                                            selected
                                            @endif
                                            >-- Select Gander --</option>
                                            <option value="male"
                                            @if(isset(auth()->user()->gender) || auth()->user()->gender == 'male')
                                            selected
                                            @endif
                                            >Male</option>
                                            <option value="female"
                                            @if(isset(auth()->user()->gender) || auth()->user()->gender == 'female')
                                            selected
                                            @endif
                                            >Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" name="designation" data-date-autoclose="true" class="form-control" placeholder="Designaion" value="{{ isset(auth()->user()->designation) ? auth()->user()->designation : '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-globe"></i></span>
                                            </div>
                                            <input type="text" name="webiste" class="form-control" placeholder="http://" value="{{ isset(auth()->user()->webiste) ? auth()->user()->webiste : '' }}">
                                        </div>
                                    </div>
                                </div>                                
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <select class="form-control" name="country">
                                            <option disabled 
                                            @if(auth()->user()->country == null)
                                            selected
                                            @endif
                                            >-- Select Country --</option>
                                            @forelse($countries as $country)
                                                <option value="{{ $country->code }}"
                                            @if(isset(auth()->user()->country) || auth()->user()->country == $country->code)
                                            selected
                                            @endif
                                                    >{{ $country->name }}</option>
                                                @empty
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="province" class="form-control" placeholder="State/Province" value="{{ isset(auth()->user()->province) ? auth()->user()->province : '' }}">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="city" class="form-control" placeholder="City" value="{{ isset(auth()->user()->city) ? auth()->user()->city : '' }}">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">                 
                                    <div class="form-group">
                                        <input type="text" name="" class="form-control" value="{{ str_slug(auth()->user()->name) }}" disabled placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" value="{{ auth()->user()->email }}" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="{{ isset(auth()->user()->phone) ? auth()->user()->phone : '' }}">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3"><i class="fa fa-facebook-f"></i></span>
                                            </div>
                                            <input type="text" name="facebookProfile" value="{{ isset(auth()->user()->facebookProfile) ? auth()->user()->facebookProfile : old('facebookProfile') }}" class="form-control" placeholder="Facebook Profile" id="basic-url" aria-describedby="basic-addon3">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3"><i class="fa fa-twitter"></i></span>
                                            </div>
                                            <input type="text" name="twitterProfile" value="{{ isset(auth()->user()->twitterProfile) ? auth()->user()->twitterProfile : old('twitterProfile') }}" class="form-control" placeholder="Twitter Profile" id="basic-url" aria-describedby="basic-addon3">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3"><i class="fa fa-instagram"></i></span>
                                            </div>
                                            <input type="text" name="instagramProfile" value="{{ isset(auth()->user()->instagramProfile) ? auth()->user()->instagramProfile : old('instagramProfile') }}" class="form-control" placeholder="Instagram Profile" id="basic-url" aria-describedby="basic-addon3">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">                                                
                                        <textarea rows="4" name="address" class="form-control" placeholder="Address">{{ isset(auth()->user()->address) ? auth()->user()->address : '' }}</textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <ul class="list-group mb-3 tp-setting">
                                    </ul>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-round btn-primary">Update</button> &nbsp;&nbsp;
                            <button type="button" class="btn btn-round btn-default">Cancel</button>
                        </div>
                        </form>
                    </div>

                    <div class="card">
                        <div class="header">
                            <h2>Account Data</h2>
                        </div>
                        <form action="{{ route('changePassword') }}" method="POST" name="changePassword">
                            @csrf
                            @method('PUT')
                        <div class="body">
                            <div class="row clearfix">                    
                                <div class="col-lg-12 col-md-12">
                                    <hr>
                                    <h6>Change Password</h6>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Current Password" name="current_password">
                                    <span class="text-danger"><b>{{ $errors->first('current_password') }}</b></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="New Password" name="new_password">
                                    <span class="text-danger"><b>{{ $errors->first('new_password') }}</b></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm New Password" name="new_confirm_password">
                                    <span class="text-danger"><b>{{ $errors->first('new_confirm_password') }}</b></span>
                                    </div>
                                </div>
                            </div>
                            <button type="sumit" class="btn btn-round btn-primary">Update</button> &nbsp;&nbsp;
                            <a href="{{ route('home') }}" class="btn btn-round btn-default">Cancel</a>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection