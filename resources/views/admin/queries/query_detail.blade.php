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
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6">
                                    <p class="m-b-0"><strong>Name: </strong> {{ $contact_u->name }}</p>
                                    <p><strong>Email: </strong><input type="text" value="{{ $contact_u->email }}" id="copy" disabled=""></p><p><strong>Phone: </strong>{{ $contact_u->phone }}</p>                                    
                                </div>
                                <div class="col-md-6 col-sm-6 text-right">
                                    
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <div class="card">
										  <div class="card-body">
										    <h5 class="card-title"><b>Subject : </b> {{ $contact_u->subject }}</h5>
										    <p class="card-text"><b>Message : </b> {{ $contact_u->message }}</p>
										  </div>
										</div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>                                       
                </div>
            </div>
        </div>
    </div>
@endsection