
function init_() {

	   
				 var wid = $(window).width();
				 if(wid < 800) {
					 $('.sec_2').data('wow-offset', '0');
					 console.log($('.sec_2').data('wow-offset'));
				 }
				 
	       console.log($('.sec_2').data('wow-offset'))




	$(".about_section-title").lettering();
	$(".price_section-title").lettering();
	$(".costomer_section-title").lettering();

	function animation(e) {
  		var title1 = new TimelineMax();
  
  		title1.staggerFromTo( e, 1, 
  		{ease: Back.easeOut.config(3.7), opacity: 0, bottom: -100},
  		{ease: Back.easeOut.config(3.7), opacity: 1, bottom: 0}, 0.05);
  
	}

	  function elementScrolled(elem,offset,handler) {	
	  	
	  	if($(elem).hasClass('animated_')) {
	  		$(window).off("scroll", handler);
	  		return false;
  		}

	    var docViewTop = $(window).scrollTop();
	    var docViewBottom = docViewTop + $(window).height();
	    var elemTop = $(elem).offset().top;
	    elemTop += parseFloat(offset);
	    return ((elemTop <= docViewBottom) && (elemTop >= docViewTop));
  }


	// trigger event when scroll in that view port
	// 
	// 
	// 
	

	// card animation

	var o = $(".card");
$(".top").on("mousemove", function (t) {
    var e = -($(window).innerWidth() / 2 - t.pageX) / 40,
        n = ($(window).innerHeight() + 200 / 2 - t.pageY) / 60;
    o.attr("style", "transform: rotateY(" + e + "deg) rotateX(" + n + "deg);-webkit-transform: rotateY(" + e + "deg) rotateX(" + n + "deg);-moz-transform: rotateY(" + e + "deg) rotateX(" + n + "deg)")
});
	
	var handler_ = function () {
		// console.log('fire');
		  if(elementScrolled('.about_section-title',400,handler_)) {
		  	var e_about = $('.about_section-title span');
		  	animation(e_about);
		  	$('.about_section-title').addClass('animated_');
		  	$('.about_section-title_container').css('opacity',1);
		  } 
	}

	var handler_price_title = function() {
		// console.log('fire');
		  if(elementScrolled('.price_section-title',400,handler_price_title)) {
		  	var e_about = $('.price_section-title span');
		  	animation(e_about);
		  	$('.price_section-title').addClass('animated_');
		  	$('.price_section-title_container').css('opacity',1);
		  } 	
	}

	var handler_costomer_title = function() {
		console.log('fire');
		  if(elementScrolled('.costomer_section-title',400,handler_costomer_title)) {
		  	var e_about = $('.costomer_section-title span');
		  	animation(e_about);
		  	$('.costomer_section-title').addClass('animated_');
		  	$('.costomer_section-title_container').css('opacity',1);
		  } 	
	}
	

	$(window).scroll(handler_);
	$(window).scroll(handler_price_title);
	$(window).scroll(handler_costomer_title);




	


	$('.hideSeekTab').on('click', function() {
    // if the one you clicked is open,      
    if ($(this).find('p').hasClass('open')) {
      // then close it.
      $('.hideSeekTab .open').slideToggle().removeClass('open');
      $('.iconBox').removeClass('closed');
      // otherwise,
    } else {
      // close all tabs,
      $('.hideSeekTab .open').slideToggle().removeClass('open');
      // and open the one you clicked
      $(this).find('p').slideToggle().addClass('open');
      $('.iconBox').removeClass('closed');
      $(this).find('.iconBox').addClass('closed');
    }
  });

}