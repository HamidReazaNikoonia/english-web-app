
function init_() {



	$(".about_section-title").lettering();
	$(".price_section-title").lettering();

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
		console.log('fire');
		  if(elementScrolled('.price_section-title',400,handler_price_title)) {
		  	var e_about = $('.price_section-title span');
		  	animation(e_about);
		  	$('.price_section-title').addClass('animated_');
		  	$('.price_section-title_container').css('opacity',1);
		  } 	
	}
	

	$(window).scroll(handler_);
	$(window).scroll(handler_price_title)

}