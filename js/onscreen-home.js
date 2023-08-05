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
   if (jQuery('#sk-d1').length > 0) { // if target element exists in DOM
      if (jQuery('#sk-d1').is_on_screen()) { // if target element is visible on screen after DOM loaded
         $('#numeri-ins').addClass('uno');
         $('#skeda1').addClass('in');
         $('#sk-foto1').addClass('in');

         $('#skeda2').removeClass('in');
         $('#sk-foto2').removeClass('in');
         $('#numeri-ins').removeClass('due');
      }
   }





   if (jQuery('#sk-d2').length > 0) { // if target element exists in DOM
      if (jQuery('#sk-d2').is_on_screen()) { // if target element is visible on screen after DOM loaded
         $('#numeri-ins').addClass('due');
         $('#skeda2').addClass('in');
         $('#sk-foto2').addClass('in');

         $('#numeri-ins').removeClass('uno');
         $('#numeri-ins').removeClass('tre');

         $('#skeda1').removeClass('in');
         $('#skeda3').removeClass('in');
         $('#sk-foto1').removeClass('in');
         $('#sk-foto3').removeClass('in');

      }
   }




   if (jQuery('#sk-d3').length > 0) { // if target element exists in DOM
      if (jQuery('#sk-d3').is_on_screen()) { // if target element is visible on screen after DOM loaded
         $('#numeri-ins').addClass('tre');
         $('#skeda3').addClass('in');
         $('#sk-foto3').addClass('in');

         $('#numeri-ins').removeClass('due');
         $('#skeda2').removeClass('in');
         $('#sk-foto2').removeClass('in');

      }
   }

});

jQuery(window).scroll(function () { // bind window scroll event
   if (jQuery('#banda-rossa').length > 0) { // if target element exists in DOM
      if (jQuery('#banda-rossa').is_on_screen()) { // if target element is visible on screen after DOM loaded
         $('.sfondone').addClass('in');

      } else {
         $('.sfondone').removeClass('in');


      }
   }

});

jQuery(window).scroll(function () { // bind window scroll event
   if (jQuery('#ancora-per-center-sx').length > 0) { // if target element exists in DOM
      if (jQuery('#ancora-per-center-sx').is_on_screen()) { // if target element is visible on screen after DOM loaded
         $('#wwd').addClass('in');

      } else {
         $('#wwd').removeClass('in');


      }
   }

});


jQuery(window).scroll(function () { // bind window scroll event
   if (jQuery('#small-portfolio').length > 0) { // if target element exists in DOM
      if (jQuery('#small-portfolio').is_on_screen()) { // if target element is visible on screen after DOM loaded
         $('#swk').addClass('in');

      } else {
         $('#swk').removeClass('in');


      }
   }

});


jQuery(window).scroll(function () { // bind window scroll event
   if (jQuery('#cta-portfolio').length > 0) { // if target element exists in DOM
      if (jQuery('#cta-portfolio').is_on_screen()) { // if target element is visible on screen after DOM loaded
         $('#swk').removeClass('in');
      }
   }

});


jQuery(window).scroll(function () { // bind window scroll event
   if (jQuery('.cta-deco').length > 0) { // if target element exists in DOM
      if (jQuery('.cta-deco').is_on_screen()) { // if target element is visible on screen after DOM loaded
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


jQuery(window).scroll(function () { // bind window scroll event
   if (jQuery('#header-home').length > 0) { // if target element exists in DOM
      if (jQuery('#header-home').is_on_screen()) { // if target element is visible on screen after DOM loaded
         $('#logo').removeClass('out');
         $('#icoo').removeClass('in');

      } else {

         $('#icoo').addClass('in');
         $('#logo').addClass('out');
      }
   }

});

jQuery(window).scroll(function () { // bind window scroll event
   if (jQuery('#header-home').length > 0) { // if target element exists in DOM
      if (jQuery('#header-home').is_on_screen()) { // if target element is visible on screen after DOM loaded
         $('#logo').removeClass('out');
         $('#icoo').removeClass('in');

      }
   }

});

/*jQuery(window).scroll(function(){ // bind window scroll event
   if( jQuery('.sm-img.first').length > 0 ) { // if target element exists in DOM
      if( jQuery('.sm-img.first').is_on_screen() ) { // if target element is visible on screen after DOM loaded
        jQuery('.sm-img.first').addClass('in');

        }
  }

});*/



jQuery(window).scroll(function () { // bind window scroll event
   $('.sm-img').each(function () {
      if ($(this).is_on_screen()) {

         $(this).addClass('in');

      }
   });

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



jQuery(window).scroll(function () { // bind window scroll event
   $('.ps-thumb-img').each(function () {
      if ($(this).is_on_screen()) {

         $(this).addClass('in');

      }
   });


});
