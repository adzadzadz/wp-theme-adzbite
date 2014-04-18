var $=jQuery.noConflict();
 
// Use jQuery via $j(...)
$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
    items : 4,
    lazyLoad : true,
    navigation : false,

    //Autoplay
    autoPlay : true,
    stopOnHover : true,

    //Basic Speeds
    slideSpeed : 200,
    paginationSpeed : 800,
    rewindSpeed : 1000,
  }); 
 
});