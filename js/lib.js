(function($) {
	




$(window).load(function() {
  // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 150,
    itemMargin: 15,
    asNavFor: '#slider'
  });
 
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
});



// build the accordian style for FAQS
$(function() {
	$('#accordion h4').click(function() {
	$(this).next().slideToggle(300);
	$(this).toggleClass('active');
	return false;
	}).next().hide(300);
});




	
// Auto wrap the iframes of videos into a responsive container
$(document).ready(function () { 
    $('iframe[src*="youtube.com"]').wrap('<div class="videoWrapper" />'); 
    $('iframe[src*="vimeo.com"]').wrap('<div class="videoWrapper" />');
    $('iframe[src*="instagram.com"]').wrap('<div class="videoWrapper" />');
    
  //  $('ul.main-menu li:last-child a').wrap('<div class="button-slant" />');
   //  $('.button').wrap('<div class="button-slant" />');
    
});


		
// open and close the menu on trigger 
$('.menu-trigger').click(function(){
    $("body").toggleClass("menu-active");
});



$(document).ready(function(){
$('body > :not(.pace) .animated').waypoint(function(direction) {  
    $(this).addClass('start');  
},{offset:'75%'});
}); 


 
})(jQuery);
