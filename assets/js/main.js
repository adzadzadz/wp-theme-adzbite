var $=jQuery.noConflict();

$(document).ready(function() {

// =================================================
// ================== PAGE EVENTS ==================
// =================================================
$('.top-content .goto').click(function () {
  var title = "You just clicked on something!";
  var message = "Sorry, I am still working on the pages. The button you clicked will make sense soon. :)";


  showNotifmodal(title, message);
});

$('.wrap-thumbnail').hover(function () {
  $(this).find('img.main').css({"height":"110%","width":"110%"});
  // $(this).find('img.hover').css({"height":"75%","width":"100%"});
  $(this).find('.img_darken').fadeIn('slow');
});
$('.wrap-thumbnail').mouseleave(function () {
  $(this).find('img.main').css({"height":"100%","width":"100%"});
  // $(this).find('img.hover').css({"height":"0%","width":"100%"});
  $(this).find('.img_darken').fadeOut('fast');
});
 
// =================================================
// ====================== Menu =====================
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
  $(document).click(function (e) {

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

/*===================================================================================
  ================================== WORK SECTION ===================================
  =================================================================================== */

$('.cool-gallery-single').mouseenter(function (idx, el) {
  $(this).find('.cool-gallery-text-wrap').show();
  $(this).find('.cool-gallery-text').css('z-index','60');
  $(this).find('.img-wrap').css('z-index','61');
  $(this).find('.img-wrap').animate({top: "-100px", opacity: "1"}, 300);
  $(this).find('.cool-gallery-text').animate({top: "0", opacity: "1", 'min-height': "190px"}, 300);
  $(this).find('.cool-gallery-content').animate({marginTop: "0px", opacity: "1"}, 500);

  // $(this).find('.cool-gallery-text').slideToggle('slow');
  $(this).mouseleave(function () {
    $(this).find('.cool-gallery-text-wrap').hide();
    $(this).find('.cool-gallery-text').css('z-index','50');
    $(this).find('.img-wrap').css('z-index','51');
    $(this).find('.cool-gallery-text').stop().animate({top: "-130px", opacity: "0", height: "20px"}, 200);
    $(this).find('.img-wrap').stop().animate({opacity: "0.9", top: "0px"}, 300);
    $(this).find('.cool-gallery-content').stop().animate({marginTop: "-100px", opacity: "0"}, 500);
    
      // $(this).find('.cool-gallery-text').slideUp('slow');
  });
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


/*===================================================================================
  ================================ Google Follow ====================================
  =================================================================================== */

(function() {
  var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
  po.src = 'https://apis.google.com/js/platform.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();










