$(document).ready(function(){
	
	
			
			
	 scrollToTop();
/* affix the navbar after scroll below header */
$('#nav').affix({
      offset: {
        top: $('.home-banner-one').height()-$('#nav').height()
      }
});	
 

 

 
 var owl=$("#owl-example2").data('owlCarousel');
 
	$(".owl-next").on("click",function() {
  	owl.next();
});

var owl2=$("#owl-example2").data('owlCarousel');
 
	$(".owl-prev").on("click",function() {
  	owl2.prev();
});



 var owl3=$("#owl-example").data('owlCarousel');
 
	$(".client-next").on("click",function() {
  	owl3.next();
});

var owl4=$("#owl-example").data('owlCarousel');
 
	$(".client-prev").on("click",function() {
  	owl4.prev();
});



});	


	
	function scrollToTop(){
	    var offset = 350;
    var duration = 300;
    $(window).scroll(function(){
        if ($(this).scrollTop() > offset) {
            $('.scroll-up1').fadeIn(duration);
        } else {
            $('.scroll-up1').fadeOut(duration);
        }
    });

    $('.scroll-up1').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0},1000);
        return false;
    });
}
	
	
	
	
	$("#owl-example").owlCarousel({

      autoPlay: 1000, //Set AutoPlay to 3 seconds
items : 4,
     
     itemsDesktop:2,
     
     itemsDesktopSmall:1,
	/*loop:true,
	responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1380:{
            items:3,
            nav:false
        }
        
    }*/
//     itemsDesktop:2,
     
//     itemsDesktopSmall:1,
     
     pagination:false
     
//      navigation:true,
      
//      autoWidth:true
      
   /* navigationText: ["<img src='img/button-previous.png'>","<img src='img/button-next.png'>"],*/

 });
 
   $("#owl-example2").owlCarousel({
	
     autoPlay: 3000, //Set AutoPlay to 3 seconds

     items : 4,
     
     itemsDesktop:2,
     
     itemsDesktopSmall:1,
     
     pagination:false
  

 });
 