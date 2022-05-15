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
                        <h5 class="text-center"><b>Add Attributes to: "{{ $id->title }}"</b></h5>
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-info" id="selector">Add Attributes</button>
                        </div>
                        <div id="attributes-container" class="">
                            
                            <div class="row clearfix" id="append-fields">
                            </div>
                        </div>
                        <div class="input-group mb-3" id="saveAttributes">
                            <button class="btn btn-outline-success" id="attributeRequest">Save Attributes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Edit Attributes --}}
        @isset($productAttr)
        @if($productAttr->count() !== 0 && !empty($productAttr) )
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <h5 class="text-center"><b>Edit Attributes : "{{ $id->title }}"</b></h5>
                        <div class="input-group mb-3">
                            <a href="#" class="btn btn-outline-info" id="enable-fields">Edit</a>
                        </div>
                        <div id="attributes-container" class="">
                            <div class="row clearfix" id="append-fields">
                            </div>
                            @forelse($productAttr as $pAttr)
                            @php
                            $string = implode(" ", $pAttr->values);
                            $final = str_replace(' ', ', ', $string);
                            @endphp
                            <div class="row clearfix" id="append-fields">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="attributes-name" class="control-label">Attribute Name <span style="color: red;">*</span>
                                        </label>
                                        <input type="text" name="attrNameUpdate[]" id="attributes-name" class="form-control" value="{{ isset($pAttr->name) ? $pAttr->name : '' }}" data-id="{{ $pAttr->id }}" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-11 col-sm-11">
                                    <div class="form-group">
                                        <label for="Value">Attributes Value <span style="color: red;">*</span></label>
                                        <div class="input-group demo-tagsinput-area">
                                            <input type="text" data-id="{{ $pAttr->id }}" id="tags" name="attrValueUpdate[]" class="form-control" data-role="tagsinput" value="{{ isset($final) ? $final : '' }}" style="display: none;" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1" style="margin-top: 36px;">
                                    <form action="{{ route('deleteAttr', $pAttr->id) }}" method="POST" name="deleteAttr">
                                        @csrf
                                        @method('DELETE')
                                    <input type="hidden" name="" id="updateAttr" value="{{ $pAttr->id }}">
                                        <button type="submit" class="btn btn-sm btn-default swal-dialog" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash"></i></button>
                                        <input type="hidden" name="attr-id[]" id="attr-id" value="{{ $pAttr->id }}">
                                    </form>
                                </div>
                            </div>
                    @empty
                    @endforelse
                    <div class="input-group mb-3">
                        <a href="#" id="updateAttrributes" class="btn btn-outline-success">Update</a>
                    </div>
            </div>
        </div>
    </div>
    @endif
    @endisset
    {{-- End Edit attributes --}}

{{-- Manage Variations --}}
        @isset($productAttr)
        @if($productAttr->count() !== 0 && !empty($productAttr) )
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <h5 class="text-center"><b>Manage Product Variations</b></h5>
                            @php
                            $variations = App\ProductVaritions::where('product_id', $id->id)->get();
                            $createdVariations = App\ProductVaritions::where('product_id', $id->id)->count();
                            @endphp
                        <div class="input-group mb-3">
                            @if ($createdVariations !== 0)
                            <a href="{{ route('recreateVariations', $id->id) }}" class="btn btn-outline-warning">Recreate Variations</a>
                            @else
                            <a href="{{ route('createVariations', $id->id) }}" class="btn btn-outline-warning">Create Variations</a>
                            @endif
                            <strong class="variationStyling">{{ $createdVariations }} Variations</strong>
                            <p>A <strong>SKU</strong> is a reference code for an item for which you keep inventory. Therefore, it must be <strong>unique;</strong> otherwise, you will not be able to keep accurate inventory for all of the items that require keeping inventory. ... So, your products indeed have <strong>unique SKUs</strong>.</p>
                        </div>
                            @if($variations && isset($variations) && !empty($variations) && $variations->count() !== 0)
                            @forelse($variations as $index => $variation)
                            <!--Accordion wrapper-->
                               <div class="bs-example">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h2 class="mb-0">
                                                <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse{{ $index }}"><i class="fa fa-plus"></i> {{ $variation->title }}</button>                            
                                                </h2>
                                            </div>
                                            <div id="collapse{{ $index }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div class="row clearfix" id="append-fields">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="attributes-name" class="control-label">SKU <span style="color: red;">*</span></label>
                                                    <input type="text" name="sku[]" value="{{ isset($variation->sku) ? $variation->sku : '' }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="Value">Stock <span style="color: red;">*</span></label>
                                                    <select name="stock[]" class="form-control">
                                                        <option value="null" disabled {{ ($variation->stock == 'null') ? 'selected' : ''  }}>Select Stock</option>
                                                        <option value="in-stock" {{ ($variation->stock == 'in-stock') ? 'selected' : ''  }}>In Stock</option>
                                                        <option value="out-stock" {{ ($variation->stock == 'out-stock') ? 'selected' : ''  }}>Out Of Stock</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="attributes-name" class="control-label">Retail Price <span style="color: red;">*</span></label>
                                                    <input type="text" name="retailPrice[]" value="{{ isset($variation->retailPrice) ? $variation->retailPrice : '' }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="Value">Wholesale Price</label>
                                                    <input type="text" name="wholesalePrice[]" class="form-control" value="{{ isset($variation->wholesalePrice) ? $variation->wholesalePrice : '' }}" placeholder="0.00">
                                                </div>
                                            </div>
                                            <input type="hidden" name="variationIds[]" value="{{ $variation->id }}">
                                        <div class="input-group mb-3">
                                            <form action="{{ route('deleteVariation', $variation->id) }}" method="POST" name="deleteSingleVariation">
                                                @csrf
                                                @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger swal-dialog">Delete</button>
                                            </form>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            @endforelse
                            @endif
                        <div class="input-group mb-3">
                            @if ($createdVariations !== 0)
                            <button type="button" id="updateVariation" class="btn btn-outline-info">Save Changes</button>
                            @endif
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endisset

</div>
</div>
@endsection
<style>
     .bs-example{
        margin: 20px;
    }
    .accordion .fa{
        margin-right: 0.5rem;
    }
    @media only screen and (max-width: 600px) {
        .variationStyling {
            margin-left: 46%;
        }
    }
    @media only screen and (min-width: 600px) {
        .variationStyling {
            margin-left: 53%;
        }
    }
    @media only screen and (min-width: 768px) {
        .variationStyling {
            margin-left: 67%;
        }
    }
    @media only screen and (min-width: 992px) {
        .variationStyling {
            margin-left: 70%;
        }
    }
    @media only screen and (min-width: 1200px) {
        .variationStyling {
            margin-left: 88%;
        }

    }


    
</style>
@section('scripts')
<script type="text/javascript" src="{{ asset('/admin/assets/js/swal-delete.js') }}"></script>
<script type="text/javascript">
jQuery.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
</script>
    <script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
            $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
            $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
            $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
{{-- Add attributes fields in DOM --}}
// jQuery("#selector").on('click', function() {
// jQuery("#attributes-container").append('<div class="row clearfix" id="append-fields"><div class="col-lg-4 col-md-12 col-sm-12"><div class="form-group"><label for="attributes-name" class="control-label">Attribute Name <span style="color: red;">*</span></label><input type="text" name="attributes-name[]" id="attributes-name" class="form-control"></div></div><div class="col-lg-7 col-md-10 col-sm-10"><div class="form-group"><label for="Value">Attributes Value <span style="color: red;">*</span></label><div class="input-group demo-tagsinput-area"><input type="text" id="tags" name="attribute-values[]" class="form-control" data-role="tagsinput" value=""></div></div></div><div class="col-lg-1 col-md-1 col-sm-1" style="margin-top: 36px;"><i class="ti-close" id="remove-attributes"></i></div></div></div>');
// });
//Refresh Tags Field
setInterval(function() {
$('input[name="attribute-values[]"]').tagsinput('refresh');
}, 500);
// Remove attributes fields from DOM
setInterval(function(){ jQuery("#remove-attributes").on('click', function() {
jQuery(this).closest("#append-fields").remove();
}); }, 600);
// End
// Getting attribute names and values
jQuery(document).ready(function() {
jQuery("#attributeRequest").on('click', function(event) {
event.preventDefault();
// Getting attribute name values
var attributeName = jQuery('input[name="attributes-name[]"]').map(
function(){
return this.value;
}).get();
// Getting attribute values
var attributeValues = jQuery('input[name="attribute-values[]"]').map(
function(){
return this.value;
}).get();
// Check for validation
console.log(attributeName);
console.log(attributeValues);
if(attributeName == '' || attributeValues == '')
{
alert('Please fill the fields!');
} else {
var id    = '{{ $id->id }}';
var url   = '{{ route('saveAttributes', $id->id) }}';
var token = jQuery('meta[name="csrf-token"]').attr('content');
// Ajax save attributes in database
$.ajax({
url: url,
type: 'POST',
dataType: 'json',
data: {
id: id,
url: url,
_token: token,
attributeName: attributeName,
attributeValues: attributeValues,
},
})
.done(function(response) {
if(response.success){
toastr.success(response.success);
setTimeout(function () {
location.reload(true);
}, 2000);
} else if (response.error) {
toastr.error(response.error);
} else if(response.info) {
toastr.info(response.info);
}
console.log(response);
})
.fail(function(response) {
})
.always(function(response) {
});
}
});
});
// toggle save button
// setInterval(function() {
// var length = jQuery("#remove-attributes").length;
// if(length) {
// jQuery("#saveAttributes").jied('d-none');
// } else {
// jQuery("#saveAttributes").addClass('d-none');
// }
// }, 100);
// check if the attributes alreay exist
jQuery("#selector").on('click', function(event) {
event.preventDefault();
var id    = '{{ $id->id }}';
var url   = '{{ route('addAttr', $id->id) }}';
var token = jQuery('meta[name="csrf-token"]').attr('content');
$.ajax({
url: url,
type: 'POST',
headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
dataType: 'json',
data: {
id: id,
token: token,
},
})
.done(function(response) {
if(response.success) {
if(jQuery(".bootstrap-tagsinput").length !== 2) {
jQuery("#attributes-container").append('<div class="row clearfix" id="append-fields"><div class="col-lg-4 col-md-12 col-sm-12"><div class="form-group"><label for="attributes-name" class="control-label">Attribute Name <span style="color: red;">*</span></label><input type="text" name="attributes-name[]" id="attributes-name" class="form-control"></div></div><div class="col-lg-7 col-md-10 col-sm-10"><div class="form-group"><label for="Value">Attributes Value <span style="color: red;">*</span></label><div class="input-group demo-tagsinput-area"><input type="text" id="tags" name="attribute-values[]" class="form-control" data-role="tagsinput" value=""></div></div></div><div class="col-lg-1 col-md-1 col-sm-1" style="margin-top: 36px;"><i class="ti-close" id="remove-attributes"></i></div></div></div>');
toastr.success(response.success);
} else {
toastr.warning('You can\'t add more than two Product Attributes');
}
} else if(response.error) {
toastr.error(response.error);
}
})
.fail(function() {
console.log("error");
})
.always(function() {
console.log("complete");
});
});

// Edit Attributes
jQuery("#enable-fields").on('click', function(event) {
    event.preventDefault();
    jQuery(':text').removeAttr('disabled');
});

// Update Attr

jQuery("a#updateAttrributes").on('click', function(event) {
    event.preventDefault();
    var url = '{{ route('updateAttr') }}';
    var token = jQuery('meta[name="csrf-token"]').attr('content');
    var name = jQuery('input[name="attrNameUpdate[]"]').map(
        function(){
            return this.value;
        }).get();
    var value = jQuery('input[name="attrValueUpdate[]"]').map(
        function(){
            return this.value;
        }).get();
    var id = jQuery('input[name="attr-id[]"]').map(
        function(){
            return this.value;
        }).get();
    var product_id ='{{ $id->id }}';
    
    jQuery.ajax({
        url: url,
        type: 'PUT',
        cache: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
        dataType: 'json',
        data: {
            id: id,
            token: token,
            name: name,
            value: value,
            product_id: product_id,
        },
    })
    .done(function(response) {
        if(response.success) {
            toastr.success(response.success);
            setTimeout(function () {
            location.reload(true);
            }, 2000);
        }
    })
    .fail(function() {
        console.log("error");
    })
    .always(function() {
        console.log("complete");
    });
});

// Update All Variations

jQuery("button#updateVariation").on('click', function(event) {
    event.preventDefault();
    var url = '{{ route('updateVariations', $id->id) }}';
    var token = jQuery('meta[name="csrf-token"]').attr('content');
    var id ='{{ $id->id }}';
    var sku = jQuery('input[name="sku[]"]').map(
        function(){
            return this.value;
        }).get();
    var stock = jQuery('select[name="stock[]"]').map(
        function(){
            return this.value;
        }).get();
    var retailPrice = jQuery('input[name="retailPrice[]"]').map(
        function(){
            return this.value;
        }).get();
    var wholesalePrice = jQuery('input[name="wholesalePrice[]"]').map(
        function(){
            return this.value;
        }).get();
    var variationIds = jQuery('input[name="variationIds[]"]').map(
        function(){
            return this.value;
        }).get();
    jQuery.ajax({
        url: url,
        type: 'PUT',
        cache: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
        dataType: 'json',
        data: {
            token: token,
            product_id: id,
            sku: sku,
            stock: stock,
            retailPrice: retailPrice,
            wholesalePrice: wholesalePrice,
            variationIds: variationIds,
        },
    })
    .done(function(response) {
        if(response.success) {
            toastr.success(response.success);
            setTimeout(function () {
            location.reload(true);
            }, 2000);
        }
    })
    .fail(function() {
        console.log("error");
    })
    .always(function() {
        console.log("complete");
    });
});
</script>
@endsection