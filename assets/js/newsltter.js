 jQuery(document).ready(function($) {

        jQuery("button.btn-radius").on('click', function(event) {

            event.preventDefault();

            var email = $("#email-newsletter").val();

            var token = jQuery('meta[name="csrf-token"]').attr('content');



            $.ajax({

            	url: '/public/newsletter/subscribe',

            	type: 'POST',

            	dataType: 'json',

            	data: {

            		email: email

            		_token: token

            	},

            })

            .done(function(response) {

            	console.log(response);

            })

            .fail(function() {

            	console.log("error");

            })

            .always(function() {

            	console.log("complete");

            });

            

        });

    });