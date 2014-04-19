var $=jQuery.noConflict();
 

$(document).ready(function() {
 
// =================================================
// ============= Top Carousel Script ===============
// =================================================

  $("#top-carousel").owlCarousel({
    items : 4,
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
  }); 
   
});





/*===================================================================================
  ===============================FACEBOOK LIKE PLUGIN================================
  =================================================================================== */

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=272663612872931";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


// Carousel Auto-Cycle
  $(document).ready(function() {
    $('.mini-carousel').carousel({
      interval: 6000
    })
  });
