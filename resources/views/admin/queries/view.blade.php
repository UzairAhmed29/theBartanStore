@extends('admin/layouts.app')

@section('content')
<div id="main-content">        
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>{{ $title }}</h2>
                    </div>            
                </div>
            </div>
             <div class="col-lg-4">
                <div class="form-group"> 
                    <label for="">Search Query</label>
                    <input type="search" id="search" class="form-control" placeholder="" aria-controls="DataTables_Table_0" data-list=".search-query">
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-hover table-custom spacing5">
                            <tbody class="search-query">
                                @forelse($queries as $query)
                                <tr>
                                    <td>
                                        <a><b>{{ $query->name }}</b></a>
                                        <p class="mb-0">{{ $query->phone }}</p>
                                    </td>
                                    <td>
                                        <span>{{ $query->email }}</span>
                                    </td>
                                    <td>
                                        <span>{{ $query->subject }}</span>
                                    </td>
                                    <td>
                                        <form action="{{ route('contact_us.destroy', $query->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('contact_us.show', $query->id) }}" class="btn btn-sm btn-default " title="View" data-toggle="tooltip" data-placement="top"><i class="fa fa-share"></i></a>
                                        <button type="submit" class="btn btn-sm btn-default swal-dialog" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <p>No Queries Found</p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('/admin/assets/js/swal-delete.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/hideseek/0.8.0/jquery.hideseek.min.js"></script>

<script>
    $("#search").hideseek({
  highlight: true,
  ignore_accents: true
});

</script>
@endsection