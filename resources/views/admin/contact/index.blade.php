@extends('admin/layouts.app')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('admin/assets/css/contact_form.css') }}">
@endsection
@section('content')
@php
if ($errors->any()) {
$active = 'active show';
} else {
$active = '';
}
@endphp
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
					<ul class="nav nav-tabs">
						<li class="nav-item"><a class="nav-link {{ ($errors->any()) ? '' : 'active show' }}" data-toggle="tab" href="#Users">About</a></li>
						<li class="nav-item"><a class="nav-link {{ ($errors->any()) ? 'active show' : '' }}" data-toggle="tab" href="#addUser">Edit</a></li>
					</ul>
					<div class="tab-content mt-0">
						<div class="tab-pane  {{ ($errors->any()) ? '' : 'active show' }}" id="Users">
							<div class="table-responsive">
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="card">
										<br>
										<small class="text-muted">Address: </small>
										<p>{{ $contact->address }}</p>
										<hr>
										<small class="text-muted">Email address: </small>
										<p>{{ $contact->email }}</p>
										<hr>
										<small class="text-muted">Mobile: </small>
										<p>{{ $contact->phone }}</p>
										<hr>
										<small class="text-muted">Facebook: </small>
										<p class="m-b-0">{{ isset($contact->facebook) ? $contact->facebook : 'https://www.facebook.com' }}</p>
										<hr>
										<small class="text-muted">Code: &nbsp;<a href="#"><i style="color: #9A9A9A;" class="fa fa-chain-broken" id="trigger" aria-hidden="true"></i></a>
										</small>
										<div class="code">
											<p class="m-b-0">{{ $contact->code }}</p>
										</div>
										<hr>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane  {{ ($errors->any()) ? 'active show' : '' }}" id="addUser">
							<form action="{{ route('contact.update', $contact->id) }}" method="POST" name="contact">
								@csrf
								@method('PUT')
								<div class="body mt-2">
									<div class="row clearfix">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<input value="{{ isset($contact) ? $contact->address : old('address') }}" type="text" name="address" class="form-control" placeholder="Address *">
												<span class="text-danger"><b>{{ $errors->first('address') }}</b></span>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<input value="{{ isset($contact) ? $contact->email : old(
												'email') }}" type="text" name="email" class="form-control" placeholder="Email *">
												<span class="text-danger"><b>{{ $errors->first('email') }}</b></span>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<input value="{{ isset($contact) ? $contact->phone : old('phone') }}" type="text" class="form-control" name="phone" placeholder="Phone">
												<span class="text-danger"><b>{{ $errors->first('phone') }}</b></span>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<input value="{{ isset($contact->facebook) ? $contact->facebook : old('facebook')  }}" type="text" class="form-control" name="facebook" placeholder="Facebook">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="control-label" for="passwordinput"><b>User Registeration Code <span style="color: red;"> *</span></b> <span id="popover-password-top" class="hide pull-right block-help"></span></label>
												<input id="password" name="code" type="text" placeholder="" class="form-control input-md" data-placement="bottom" data-toggle="popover" data-container="body" type="button" data-html="true" value="{{ isset($contact) ? $contact->code : old('code') }}">
												<div id="popover-password">
													<p>Code Strength: <span id="result"> </span></p>
													<div class="progress">
														<div id="password-strength" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
														</div>
													</div>
													<br>
													<ul class="list-unstyled">
														<li class=""><span class="low-upper-case"><i class="icon-shield" aria-hidden="true"></i></span>&nbsp; 1 lowercase &amp; 1 uppercase</li>
														<li class=""><span class="one-number"><i class="icon-magic-wand" aria-hidden="true"></i></span> &nbsp;1 number (0-9)</li>
														<li class=""><span class="one-special-char"><i class="icon-puzzle" aria-hidden="true"></i></span> &nbsp;1 Special Character (!@#$%^&*).</li>
														<li class=""><span class="eight-character"><i class="icon-pencil" aria-hidden="true"></i></span>&nbsp; Atleast 8 Character</li>
													</ul>
													<span class="text-danger"><b>{{ $errors->first('code') }}</b></span>
												</div>
											</div>
											<!-- Password input-->
											<div class="ex-account text-center">
											</form>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="form-group">
											<label for="">MailChimp Api Key</label>
											<input value="{{ isset($contact->mc_api_key) ? $contact->mc_api_key : '' }}" type="text" name="mc_api_key" class="form-control" placeholder="MailChimp Api Key">
										</div>
										<div class="form-group">
											<label>MailChimp List ID</label>
											<input value="{{ isset($contact->mc_list_id) ? $contact->mc_list_id : '' }}" type="text" name="list_id" class="form-control" placeholder="MailChimp List ID">
										</div>
			                        <div class="form-group">
                                        <div class="fancy-checkbox">
                                            <label><input class="fancy-radio custom-color-green" type="checkbox" name="newsletter" 
                                            @isset ($contact->newsletter)
                                            @if($contact->newsletter || $contact->newsletter == 'on')
                                            	checked 
                                            	@endif   
                                            @endisset
                                            	><span> Show Newsletter on frontend </span></label>
                                            </div>
                                        </div>
                                    </div>
								</div>
								<button type="submit" class="btn btn btn-outline-success">Update</button>
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
@section('scripts')
<script src="{{ asset('admin/assets/js/contact_form.js') }}"></script>
@endsection
@endsection