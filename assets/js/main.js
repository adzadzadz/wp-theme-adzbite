var $=jQuery.noConflict();
 

$(document).ready(function() {
 
// =================================================
// ================== Mobile Menu ==================
// =================================================

  $("header .mobile-menu .glyphicon").click(function () {
    if($("header .mobile-menu-view").is(":hidden")) {
      $("header .mobile-menu-view:hidden").show();
    }
    else {
      $("header .mobile-menu-view:visible").hide();
    }
  });
  $(document).on('click', function( e ) {
    // $("header .mobile-menu-view:visible").hide();
  });


// =================================================
// ============= Top Carousel Script ===============
// =================================================

  $("#top-carousel").owlCarousel({
    items : 4,
    itemsCustom : false,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,3],
    itemsTabletSmall: false,
    itemsMobile : [479,2],
    singleItem : false,
    itemsScaleUp : false,

    lazyLoad : true,
    navigation : true,

    //Autoplay
    autoPlay : true,
    stopOnHover : false,

    //Basic Speeds
    slideSpeed : 200,
    paginationSpeed : 800,
    rewindSpeed : 1000,

    transitionStyle : true,
    //Mouse Events
    mouseDrag : false,
    touchDrag : false,
  }); 
   

// ===================================================
// ===================== Lightbox ====================
// ===================================================
  $('.lb_thumb').hover(function () {
      $(this).find('div.text').fadeIn('fast');
  });
  $('.lb_thumb').mouseleave(function () {
      $(this).find('div.text').fadeOut('fast');
  });
  $('.lb_thumb').click(function(e) {
      var img_link = $(this).find('img').data('link');
      
      if ($('.lightbox').length > 0) { // #lightbox exists
                     //place href as img src value
          $('.lightbox').html('<img src="' + img_link + '" />');
          //show lightbox window - you could use .show('fast') for a transition
          $('.lightbox').fadeIn('fast');
      }
      $('.lightbox').live('click keydown', function() { 
      $('.lightbox').fadeOut('slow');
    });
  });
  $(document).keydown(function(e) {
    if (e.keyCode == 27) {
        $('.lightbox').fadeOut('slow');
    }
  });




// ===================================================
// ===================== Contact =====================
// ===================================================

 

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


//FORM functions - START
  var $adzbite_contact_form_url = $('.adzbite-contact form').attr('action'),
      $adzbite_contact_form_method = $('.adzbite-contact form').attr('method');

  $(".adzbite-contact-button").click(function () {

    if(validateForm()) {
      var $name = $('.adzbite-contact form').find('input#name').val(),
          $email = $('.adzbite-contact form').find('input#email').val(),
          $website = $('.adzbite-contact form').find('input#website').val(),
          $message = $('.adzbite-contact form').find( "textarea#message" ).val();
      $.ajax({
      url:$adzbite_contact_form_url,
      data: 'name=' + $name + '&email=' + $email + '&website=' + $website + '&message=' + $message,
      type: $adzbite_contact_form_method,
      beforeSend:function() {
          $('.adzbite-contact .alert').slideUp('fast');
          $(".adzbite-contact .result").slideDown("slow");
          $(".adzbite-contact .result").html('<div class="alert alert-info"><strong>Sending message.</strong> Please wait.</div>');
      },
      success:function(data){
        $('.adzbite-contact .alert').slideUp('fast');
        $(".adzbite-contact .result").slideDown("slow");
        $(".adzbite-contact .result").html(data);
    }});
    }
  });
//FORM funtions - END

  $('header li').hover(function () {
    if ($(this).find('.children') != undefined) {
      $(this).find('.children').show();
    }
    $(this).mouseleave(function () {
      $(this).find('.children').hide();
    })
  });

});

/*===================================================================================
  =============================FACEBOOK LIKE PAGE PLUGIN=============================
  =================================================================================== */

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=272663612872931";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));



/*===================================================================================
  ========================FACEBOOK LIKE & SHARE POST PLUGIN==========================
  =================================================================================== */

// Like Share & Comment Post
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=758749107492947";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
