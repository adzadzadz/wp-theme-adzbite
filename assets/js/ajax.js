// var $=jQuery.noConflict();

    // Ajax Request Sample
    // $.ajax({
    //     url: ajax_object.ajax_url,
    //     type:'post',
    //     data: {
    //         'action':'adzbite_login',
    //         'fruit' : fruit
    //     },
    //     success:function(response) {
    //         // This outputs the result of the ajax request
    //         alert(response);
    //     },
    //     error: function(errorThrown){
    //         console.log(errorThrown);
    //     }
    // });

$(document).ready(function() {

    //=========================================================
    //========================= Login =========================
    //=========================================================

    $('span.close-btn').click(function () {
        alert("WORKS");
        $('.notifbox').fadeOut('slow');
        $('.thebox').slideUp();
    });

    $("#btn-login").click(function () {

        $.ajax({
            url: ajax_object.ajax_url,
            type:'post',
            data: {
                'action':'adzbite_login_form',
            },
            beforeSend: function(){
                $(".thebox").html('<span class="glyphicon glyphicon-remove close-btn"></span><h2> Loading! </h2>');
            },
            success:function(data) {
                // This outputs the result of the ajax request
                var login_form = data;
                 $(".thebox").html('<span class="glyphicon glyphicon-remove close-btn"></span><h2> Login! </h2><hr><p>' + login_form + '</p>');
            },
            error: function(errorThrown){
                console.log(errorThrown);
            }
        });

       
        $(".notifbox").show();
        $(".thebox").slideDown('slow');
    });

    $("#btn-register").click(function () {

        $.ajax({
            url: ajax_object.ajax_url,
            type:'post',
            data: {
                'action':'contact_message',
            },
            beforeSend: function(){
                $(".thebox").html('<span class="glyphicon glyphicon-remove close-btn"></span><h2> Loading! </h2>');
            },
            success:function(data) {
                // This outputs the result of the ajax request
                var login_form = data;
                 $(".thebox").html('<span class="glyphicon glyphicon-remove close-btn"></span><h2> Sign up </h2><hr><p>' + login_form + '</p>');
            },
            error: function(errorThrown){
                console.log(errorThrown);
            }
        });

       
        $(".notifbox").show();
        $(".thebox").slideDown('slow');
    });
        
});

// Mailer

    // Ajax Request Sample
    function sendMail() {

        function validateForm() {

            var $adzbite_contact_form_name = $('.adzbite-contact form').find('input#name').val(),
                $adzbite_contact_form_email = $('.adzbite-contact form').find('input#email').val(),
                $adzbite_contact_form_website = $('.adzbite-contact form').find('input#website').val(),
                $adzbite_contact_form_message = $('.adzbite-contact form').find('textarea#message').val();

              if($adzbite_contact_form_name == "") {
                $('.adzbite-contact .alert').slideUp('fast');
                $('.alert-name').slideDown("fast");
                $('.alert-name').html('Please enter your <strong>name</strong>');
              }
              else if($adzbite_contact_form_name.length < 3) {
                $('.adzbite-contact .alert').slideUp('fast');
                $('.alert-name').slideDown("fast");
                $('.alert-name').html('<strong>Name</strong> must be at least 3 characters long.');
              }
              else if($adzbite_contact_form_email == "") {
                $('.adzbite-contact .alert').slideUp('fast');
                $('.alert-email').slideDown("fast");
                $('.alert-email').html('Please enter an <strong>email address</strong>');
              }
              else if(!validateEmail($adzbite_contact_form_email)) {
                $('.adzbite-contact .alert').slideUp('fast');
                $('.alert-email').slideDown("fast");
                $('.alert-email').html('<strong>Email</strong> example: name@domain.com');
              }
              else if($adzbite_contact_form_message.length < 25) {
                $('.adzbite-contact .alert').slideUp('fast');
                $('.alert-message').slideDown("fast");
                $('.alert-message').html('<strong>Message</strong> must be at least 25 characters long. :P');
              }
              else {
                return true;
              }


          function validateEmail(v) {
            var r = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?");
            return (v.match(r) == null) ? false : true;
          }
        }


        if(validateForm()) {
            var name = $('.adzbite-contact').find('input[name="name"]').val();
            var email = $('.adzbite-contact').find('input[name="email"]').val();
            var website = $('.adzbite-contact').find('input[name="website"]').val();
            var message = $('.adzbite-contact').find('textarea[name="message"]').val();

            $.ajax({
                url: ajax_object.ajax_url,
                type:'post',
                data: {
                    'action':'contact_message',
                    'name' : name,
                    'email' : email,
                    'website' : website,
                    'message' : message,
                },
                beforeSend:function() {
                    $('.adzbite-contact').slideUp('slow');
                    $(".contact-wrap .result").fadeIn("slow");
                    $(".contact-wrap .result").html('<div class="alert alert-info"><strong>Sending message.</strong> Please wait.</div>');
                },
                success:function(data){
                    $('.adzbite-contact .alert').slideUp('fast');
                    $(".contact-wrap .result").html(data);
                    $(".contact-wrap .result").slideDown("slow");
                    
                },
                error: function(errorThrown){
                    console.log(errorThrown);
                }
            });
        }
    }