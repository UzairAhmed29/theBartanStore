\@extends('admin/layouts.app')
@section('content')
<div class="demo-masked-input">
	<div id="main-content">
		<div class="container-fluid">
			<div class="block-header">
				<div class="row clearfix">
					<div class="col-md-6 col-sm-12">
						<h2>{{ $title }}</h2>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-lg-12">
					<div class="card">
					<form action="{{ isset($user) ? route('user.update', $user->id) : route('user.store') }}" method="POST" name="UserCreateUpdate" enctype="multipart/form-data">
						@csrf
						@isset ($user)
							@method('PUT')
						@endisset
						<div class="tab-content mt-2">
							<div class="tab-pane active show" id="addUser">
								<div class="body mt-1">
									<div class="row clearfix">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<input type="text" name="name" value="{{ isset($user->name) ? $user->name : old('name') }}" class="form-control" placeholder="First Name *" {{ isset($user->name) ? 'required' : '' }}>
		                                    <span class="text-danger"><b>{{ $errors->first('name') }}</b></span>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<input type="text" name="lastName" value="{{ isset($user->lastName) ? $user->lastName : old('lastName') }}" class="form-control" placeholder="Last Name">
											</div>
										</div>

										<div class="col-lg-3 col-md-4 col-sm-12">
											<div class="form-group">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
													</div>
													<input type="email" name="email" value="{{ isset($user->email) ? $user->email : old('email') }}" class="form-control email" placeholder="example@example.com" {{ isset($user->email) ? 'required' : '' }}>
                                    			<span class="text-danger"><b>{{ $errors->first('email') }}</b></span>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-12">
											<div class="form-group">
												<input type="password" name="password" value="{{ isset($user) ? $user->password : '' }}" class="form-control" placeholder="Password">
                                    		<span class="text-danger"><b>{{ $errors->first('password') }}</b></span>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-12">
											<div class="form-group">
												<input type="password" name="confirmPassword" value="{{ isset($user) ? $user->password : '' }}" class="form-control" placeholder="Confirm Password">
                                    			<span class="text-danger"><b>{{ $errors->first('confirmPassword') }}</b></span>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-12">
											<div class="form-group">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text"><i class="fa fa-mobile-phone"></i></span>
													</div>
													<input type="phone" name="phone" value="{{ isset($user->phone) ? $user->phone : old('phone') }}" class="form-control mobile-phone-number" placeholder="Phone">
												</div>
											</div>
										</div>

										<div class="col-lg-3 col-md-4 col-sm-12">
											<div class="form-group">
												<input type="text" name="designation" value="{{ isset($user->designation) ? $user->designation : old('designation') }}" class="form-control" placeholder="Designation">
											</div>

										</div>
										<div class="col-lg-3 col-md-4 col-sm-12">
											<div class="form-group">
												<select class="form-control show-tick" name="gender">
												<option disabled>Gender</option>
												<option value="male" {{ (old('gender') == 'male') ? 'selected' : '' }}
												@if(isset($user->gender) && $user->gender == 'male')
													selected
												@endif
												>Male</option>
												<option value="female" {{ (old('gender') == 'female') ? 'selected' : '' }}
												@if(isset($user->gender) && $user->gender == 'female')
													selected
												@endif
												>Female</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-12">
										<div class="form-group">
											<select class="form-control show-tick" name="role"  {{ isset($user->role) ? 'required' : '' }}>
												<option disabled>Select Role Type</option>
												<option value="Administrator"  {{ (old('role') == 'Administrator') ? 'selected' : '' }}
												@if(isset($user->role) && $user->role == 'Administrator')
													selected
												@endif
												>Super Admin</option>
												<option value="Admin"  {{ (old('role') == 'Admin') ? 'selected' : '' }}
												@if(isset($user->role) && $user->role == 'Admin')
													selected
												@endif
												>Admin</option>
												<option value="Customer"  {{ (old('role') == 'Customer') ? 'selected' : '' }}
												@if(isset($user->role) && $user->role == 'Customer')
													selected
												@endif
												>Customer</option>
											</select>

                                    		<span class="text-danger"><b>{{ $errors->first('role') }}</b></span>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-12">
										<div class="form-group">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon3">https:</span>
												</div>
												<input type="Website" name="website" value="{{ isset($user->website) ? $user->website : old('website') }}" class="form-control" placeholder="Website" id="basic-url" aria-describedby="basic-addon3">
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-12">
										<div class="form-group">
											<select class="form-control" name="country">
											<option disabled>Country</option>
											@forelse($countries as $country)
											<option value="{{ $country->code }}" {{ (old('country') == $country->code) ? 'selected' : '' }}
											@if(isset($user->country) && $user->country == $country->code)
											selected
											@endif
											>{{ $country->name }}</option>
											@empty
											<option>Country not found</option disabled>
											@endforelse
										</select>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-sm-12">
									<div class="form-group">
										<input type="text" name="province" value="{{ isset($user->province) ? $user->province : old('province') }}" class="form-control" placeholder="State / Province">
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-sm-12">
									<div class="form-group">
										<input type="text" name="city" value="{{ isset($user->city) ? $user->city : old('city') }}" class="form-control" placeholder="City">
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-sm-12">
									<div class="form-group">
										<input type="text" name="address" value="{{ isset($user->address) ? $user->address : old('address') }}" class="form-control" placeholder="Address">
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-sm-12">
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon3"><i class="fa fa-facebook-f"></i></span>
											</div>
											<input type="text" name="facebookProfile" value="{{ isset($user->facebookProfile) ? $user->facebookProfile : old('facebookProfile') }}" class="form-control" placeholder="Facebook Profile" id="basic-url" aria-describedby="basic-addon3">
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-sm-12">
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon3"><i class="fa fa-twitter"></i></span>
											</div>
											<input type="text" name="twitterProfile" value="{{ isset($user->twitterProfile) ? $user->twitterProfile : old('twitterProfile') }}" class="form-control" placeholder="Twitter Profile" id="basic-url" aria-describedby="basic-addon3">
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-sm-12">
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon3"><i class="fa fa-instagram"></i></span>
											</div>
											<input type="text" name="instagramProfile" value="{{ isset($user->instagramProfile) ? $user->instagramProfile : old('instagramProfile') }}" class="form-control" placeholder="Instagram Profile" id="basic-url" aria-describedby="basic-addon3">
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" name="avatar" class="custom-file-input" id="inputGroupFile01" value="">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
								</div>
								<div class="col-lg-3 col-md-4 col-sm-12">
									<a href="{{ route('user.index') }}" class="btn btn btn-outline-danger">Cancel</a>
									<button type="submit" class="btn btn btn-outline-success">
										@isset ($user)
										    Update
										@endisset
										@empty ($user)
										    Create
										@endempty
									</button>
								</div>
							</div>
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
@endsection
