
$(document).ready(function(){
	


    'use strict';
	
	//hide placeholder on form focus
	$('[placeholder]').focus(function(){
		$(this).attr('data-text',$(this).attr('placeholder'));
		$(this).attr('placeholder','');
	}).blur(function(){
		$(this).attr('placeholder',$(this).attr('data-text'));
	});
	
	
	// show s-h
		
		$(window).scroll(function () {
            // set distance user needs to scroll before we fadeIn navbar
			if ($(this).scrollTop() > 75) {
				$('.s-h').css('display','block');
			} else {
				$('.s-h').css('display','none');
			}
		});
	
	
	// start scroll-to-top	
	

    var scrollButton = $('.scroll-to-top');

    $(window).scroll(function (){

        if($(this).scrollTop() >= 200 ) {

            scrollButton.show();

        }else {

            scrollButton.hide(); 
        }
    }); 

    scrollButton.click(function (){


        $("html,body").animate({ scrollTop:0 } , 600);

    }); 
	
	
	
	
	  $('.cat .span-cat a').click(function(e){
        
        e.preventDefault(); 
        
      $('html , body').animate({
          
       scrollTop: $('#' + $(this).data('scroll')).offset().top + -170
          
          
      },1000); 
        
    }); 
	
	
	
	
	if($('.to').val() !== ''){
		   
		   $('.too').css('display','block'); 
     }else{
		 
		 $('.too').css('display','none'); 
	 }
	
	
	
	
	
	
	
// ajax input 
	
$('#keyword').keyup(function() {
  
  // If value is not empty
  if ($(this).val().length === 0) {
    // Hide the element
    $('#datafetch').hide();
  } else {
    // Otherwise show it
    $('#datafetch').show();
  }
}).keyup(); 
	
	
	
	
  //************************
	
	$(".bro-one").click(function(){
       
       $('.cat-one').slideToggle(300); 
			
    }); 
	
	
	
	
	
	 // nice scroll 
    
     $("html").niceScroll({
		 cursorwidth: "12px",
		 cursoropacitymin: 1, 
		 cursorborderradius:0,
	 });
	

	// stop page admin 

		$( ".wc-comment-left a" ).click(function( event ) {
			 event.preventDefault();
		});

	
	

  
  }); 


























