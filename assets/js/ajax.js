var $=jQuery.noConflict();

$(document).ready(function() {

    //=========================================================
    //========================= Login =========================
    //=========================================================

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
                'action':'adzbite_register_form',
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

