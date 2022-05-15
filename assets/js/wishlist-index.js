jQuery(document).ready(function($) {
	$("a#add-wishlist-index").on('click', function (e) {
		e.preventDefault();
		var prodSlug = $(this).siblings('input[name="slug-for-wishlist"]').val();
		var id = $(this).siblings('input[name="prodId"]').val();
		ajaxAdd(prodSlug);
 	    $(".identifier-"+id).attr('id', 'alreadyExist');
	});

	function ajaxAdd(slug) {
		var token = jQuery('meta[name="csrf-token"]').attr('content');
		$.ajax({
			url: '/wishlist/'+slug+'/add',
			type: 'POST',
			dataType: 'json',
			data: {
				_token: token,
				slug: slug
			},
		})
		.done(function(response) {
			if(response.success){
				$("input[value=" + slug + '-' + response.id + "]").parent('div.on_sale').append('<p id="remove-cond" style="color: green;"> <i class="fa fa-check" aria-hidden="true"></i> ' +response.success+'</p>');
			} else {
				$("input[value=" + slug + '-' + response.id + "]").parent('div.on_sale').append('<p id="remove-cond" style="color: rgb(255 165 0);"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> ' +response.error+'</p>');
			}	
		}) 
		.fail(function() {
			
		})
		.always(function() {
			
		});
		
	}
});