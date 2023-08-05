jQuery.fn.is_on_screen = function(){
    var win = jQuery(window);
    var viewport = {
        top : win.scrollTop(),
        left : win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();

    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();

    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};


jQuery(window).scroll(function(){ // bind window scroll event
	if( jQuery('#header-servizio-espolso').length > 0 ) { // if target element exists in DOM
		if( jQuery('#header-servizio-espolso').is_on_screen() ) { // if target element is visible on screen after DOM loaded
        $('#logo').removeClass('out');
        $('#icoo').removeClass('in');

      }else{

        $('#icoo').addClass('in');
        $('#logo').addClass('out');
      }
  }

});

jQuery(window).scroll(function(){ // bind window scroll event
	if( jQuery('.scatena').length > 0 ) { // if target element exists in DOM
		if( jQuery('.scatena').is_on_screen() ) { // if target element is visible on screen after DOM loaded
        $('#section-servizio-esploso .ss2').addClass('in');


      }else{

      }
  }

});

jQuery(window).scroll(function(){ // bind window scroll event
	if( jQuery('.ss-banda.sec').length > 0 ) { // if target element exists in DOM
		if( jQuery('.ss-banda.sec').is_on_screen() ) { // if target element is visible on screen after DOM loaded
        $('.ss-banda.sec').addClass('in');


      }else{

      }
  }

});






jQuery(window).scroll(function(){ // bind window scroll event
	if( jQuery('#logo-resp').length > 0 ) { // if target element exists in DOM
		if( jQuery('#logo-resp').is_on_screen() ) { // if target element is visible on screen after DOM loaded
        jQuery('#fixed-UI-left-mob').removeClass('in');

      }else{
        jQuery('#fixed-UI-left-mob').addClass('in');
      }
  }

});

jQuery(window).scroll(function(){ // bind window scroll event
	if( jQuery('.cta-deco').length > 0 ) { // if target element exists in DOM
		if( jQuery('.cta-deco').is_on_screen() ) { // if target element is visible on screen after DOM loaded
      $('.r1').addClass('anim');
      $('.r2').addClass('anim');
      $('.r3').addClass('anim');
      $('.cta-deco').addClass('anim');

		} else {
      $('.r1').removeClass('anim');
      $('.r2').removeClass('anim');
      $('.r3').removeClass('anim');
      $('.cta-deco').removeClass('anim');


		}
	}

});


jQuery(window).scroll(function(){ // resize before lavori correlati

  if(jQuery('#sezione-lavori-corr .divisorio').is_on_screen() ) {
    window.dispatchEvent(new Event('resize'));
  }


});
