@extends('admin/layouts.app')
@section('content')
<div id="main-content">
	<div class="container-fluid">
		<div class="block-header">
			<div class="row clearfix">
				<div class="col -md-6 col-sm-12">
					<h2>{{ $title }}</h2>
					<nav aria-label="breadcrumb">
					</nav>
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-lg-12">
				<div class="card">
					<a href="{{ route('user.create') }}" class="btn btn-outline-success">Add New</a>
					<div class="tab-content mt-0">
						<div class="tab-pane active show" id="Users">
							<div class="table-responsive">
								<table class="table table-hover table-custom spacing8">
									<thead>
										<tr>
											<th class="w60">Name</th>
											<th></th>
											<th>Status</th>
											<th>Created Date</th>
											<th>Role</th>
											<th class="w100">Action</th>

										</tr>
									</thead>
									<tbody>
										@forelse($users as $user)
										<tr>
											@php
												$name = $user->name;
												$e  = explode(" ", $name);
												$a = str_split($e[0]);
											@endphp
											@if($user->avatar)
												<td class="width45">
													<img src="{{ asset('uploads/user/' . $user->avatar) }}" alt="" width="40" height="" class="img-thumbnail">
												</td>
											@else
												<td class="width45">
												<div class="avtar-pic w35 bg-pink" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name"><span>{{ $a[0] }}</span></div>
											</td>
											@endif
											<td>
												<h6 class="mb-0">{{ $user->name}} {{  isset($user->lastName) ? $user->lastName : '' }}</h6>
												<span>{{ $user->email }}</span>
											</td>
											<form action="{{ route('UserStatus', $user->id) }}" name="UserStatus" method="POST">
                                            @csrf
                                            @method('PUT')
                                            @if($user->status == 'Deactivated')
                                            <td width="300"><button type="submit" class="badge badge-warning  ml-0 mr-0">Deactivated</button></td>
                                            @else
                                            <td width="300"><button type="submit" class="badge badge-success  ml-0 mr-0">Activated</button></td>
                                            @endif
                                        </form>

											<td>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
											@if($user->role == 'Administrator')
											<td><span class="badge badge-danger">Super Admin</span></td>
											@elseif($user->role == 'Admin')
											<td><span class="badge badge-info">Admin</span></td>
											@else
											<td><span class="badge badge-default">Customer</span></td>
											@endif

											<td>
											<form action="{{ route('user.destroy', $user->id) }}" method="POST" name="UserDelete">
											@csrf
											@method('DELETE')

												@if(auth()->user()->id  !== $user->id)
													<a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-default" title="Edit"><i class="fa fa-edit"></i></a>
												@endif
											@if($user->role == 'Administrator')
                                            <button style="display: none;" type="submit" class="btn btn-sm btn-default" title="Delete" data-type="confirm"><i class="fas fa-trash text-danger"></i></button>
                                            @else
                                                 <button type="submit" class="btn btn-sm btn-default" title="Delete" data-type="confirm"><i class="fas fa-trash text-danger"></i></button>
											@endif
											</form>
											</td>
										</tr>
										@empty
											<div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                             Users Not Found
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
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('/admin/assets/js/swal-delete.js') }}"></script>
@endsection
