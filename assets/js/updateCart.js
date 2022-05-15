 jQuery(document).ready(function($) {

    jQuery("button#updateCart").on('click', function(event) {

        event.preventDefault();

        jQuery("#loader").css('display', 'inline');

        var id = jQuery('input[name="cartId[]"]').map(

			function(){

			return this.value;

			}).get();

        var quantity = jQuery('input[name="quantity[]"]').map(

			function(){

			return this.value;

			}).get();

        var token = jQuery('meta[name="csrf-token"]').attr('content');

	    jQuery.ajax({
	    	// ''
	        url: '/cart/'  + id + '/update',

	        type: 'PUT',

	        cache: false,

	        headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},

	        dataType: 'json',

	        data: {

	            id: id,

	            _token: token,

	            quantity: quantity,

	        },

	    })

	    .done(function(response) {

	        if(response[0] == 'success') {

	            setTimeout(function () {

	            location.reload(true);

	            }, 2500);

	        }

	    })

	    .fail(function() {

	    })

	    .always(function() {

	    });

    });

});

