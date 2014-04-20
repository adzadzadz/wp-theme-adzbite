var $=jQuery.noConflict();
 

$(document).ready(function() {
 
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
    navigation : false,

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
      $(this).find('div.text').fadeIn('slow');
  });
  $('.lb_thumb').mouseleave(function () {
      $(this).find('div.text').fadeOut('slow');
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

// Like Post
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=758749107492947";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


// Share Post
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=758749107492947";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));