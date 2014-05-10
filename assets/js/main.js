$(document).ready(function() {

// =================================================
// ================== PAGE EVENTS ==================
// =================================================
$('.top-content .goto').click(function () {
  var title = "You just clicked on something!";
  var message = "Sorry, I am still working on the pages. The button you clicked will make sense soon. :)";


  showNotifmodal(title, message);
});

 
// =================================================
// ====================== INIT =====================
// =================================================

  $('header li').hover(function () {
    if ($(this).find('ul.sub-menu') != undefined) {
      $(this).find('ul.sub-menu').show();
    }
    $(this).mouseleave(function () {
      $(this).find('ul.sub-menu').hide();
    })
  });


// =================================================
// ================== Mobile Menu ==================
// =================================================

  $("header .mobile-menu .glyphicon").click(function (e) {
    if($("header .mobile-menu-view").is(":hidden")) {
      $("header .mobile-menu-view:hidden").show();
    }
    else {
      $("header .mobile-menu-view:visible").hide();
    }
  });
  $(document).on('click', function (e) {
    // $("header .mobile-menu-view").hide();
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
   


// =================================================
// ============== Top Carousel MODE ================
// =================================================
  $('.top-img').hover(function () {
      $(this).find('div.text').fadeIn('fast');
      $(this).find('div.view').slideDown('fast');
      $(this).find('div.goto').fadeIn('slow');
  });
  $('.top-img').mouseleave(function () {
      $(this).find('div.text').fadeOut();
      $(this).find('div.view').slideUp();
      $(this).find('div.goto').fadeOut();
  });

  $('.top-img .view').click(function(e) {
      var img_link = $(this).data('link');
      var img_alt = $(this).data('alt');
      if ($('.lightbox-popup').length > 0) { // #lightbox-popup exists
                     //place href as img src value
          $('.lightbox-popup').html('<img src="' + img_link + '" alt="' + img_alt + '"/>');
          //show lightbox-popup window - you could use .show('fast') for a transition
          $('.lightbox-popup').fadeIn('fast');
      }
      $('.lightbox-popup').live('click keydown', function() { 
      $('.lightbox-popup').fadeOut('slow');
    });
  });
  $(document).keydown(function(e) {
    if (e.keyCode == 27) {
        $('.lightbox-popup').fadeOut('slow');
    }
  });


// ===================================================
// ================= Lightbox-popup ==================
// ===================================================
  $('.lb-pop').click(function(e) {
    var img_link = $(this).find('img').data('link');
    var img_alt = $(this).find('img').attr('alt');
    if ($('.lightbox-popup').length > 0) { // #lightbox-popup exists
                   //place href as img src value
        $('.lightbox-popup').html('<img src="' + img_link + '" alt="' + img_alt + '"/>');
        //show lightbox-popup window - you could use .show('fast') for a transition
        $('.lightbox-popup').fadeIn('fast');
    }
    $('.lightbox-popup').live('click keydown', function() { 
      $('.lightbox-popup').fadeOut('slow');
    });
  });


// ===================================================
// ==================== Notif Box ====================
// ===================================================
  function showNotifmodal(title, message) {
      
    if ($('.notifbox').length > 0) { // #notifbox exists
                   //place href as img src value
        $('.thebox').html('<span class="glyphicon glyphicon-remove close-btn"></span><h2>' + title + '</h2><hr><p>' + message + '</p>');
        //show notifbox window - you could use .show('fast') for a transition
        $('.notifbox').show();
        $('.thebox').slideDown();
    }
  }
 
  $('.close-btn').live('click keydown', function() { 
    $('.notifbox').fadeOut('slow');
    $('.thebox').slideUp();
  });  


  $(document).keydown(function(e) {
    if (e.keyCode == 27) {
        $('.lightbox-popup').fadeOut('slow');
        $('.notifbox').fadeOut('slow');
        $('.thebox').slideUp();
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

















