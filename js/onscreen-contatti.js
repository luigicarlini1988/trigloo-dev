jQuery.fn.is_on_screen = function () {
  var win = jQuery(window);
  var viewport = {
    top: win.scrollTop(),
    left: win.scrollLeft()
  };
  viewport.right = viewport.left + win.width();
  viewport.bottom = viewport.top + win.height();

  var bounds = this.offset();
  bounds.right = bounds.left + this.outerWidth();
  bounds.bottom = bounds.top + this.outerHeight();

  return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};


jQuery(window).scroll(function () { // bind window scroll event
  if (jQuery('#header-servizio-contatti').length > 0) { // if target element exists in DOM
    if (jQuery('#header-servizio-contatti').is_on_screen()) { // if target element is visible on screen after DOM loaded
      $('#logo').removeClass('out');
      $('#icoo').removeClass('in');

    } else {

      $('#icoo').addClass('in');
      $('#logo').addClass('out');
    }
  }

});





jQuery(window).scroll(function () { // bind window scroll event
  if (jQuery('#logo-resp').length > 0) { // if target element exists in DOM
    if (jQuery('#logo-resp').is_on_screen()) { // if target element is visible on screen after DOM loaded
      jQuery('#fixed-UI-left-mob').removeClass('in');

    } else {
      jQuery('#fixed-UI-left-mob').addClass('in');
    }
  }

});


