jQuery(document).ready(function($) {
        jQuery("button#submit-newsletter").on('click', function(event) {
            event.preventDefault();
            var email = $("#email-newsletter").val();
            var token = jQuery('input[name="_token"]').val();
            console.log(email);
            if(email !== ''){
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                if(emailReg.test( email ) == true) {
                    $.ajax({
                    url: '/newsletter/subscribe',
                    type: 'POST',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                    dataType: 'json',
                    data: {
                        email: email,
                        _token: token,
                    },
                })
                .done(function(response) {
                        console.log(response);
                    if(response) {
                        if(jQuery("#onload-popup").length == 1) {
                            jQuery("p#modal-response").html(response.message);
                            setTimeout(function() {
                                jQuery("#onload-popup").css({
                                display: 'none',
                                overflow: 'visible'
                            });
                            jQuery(".modal-backdrop.show").css('opacity', '0');
                            jQuery(".modal-open").css('overflow', 'visible');
                            }, 3000);
                        } else {
                            jQuery('p#response').html(response.message);
                        }
                    } 
                })
                .fail(function() {
                        console.log(response);
                    
                })
                .always(function() {
                });                
                } else {
                    alert('Invalid Email Address!');                
                }
                
            } else {
                alert('Please fill the Email Field!');
            }
        });
    });
