if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 // some code..

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

   $('.ps-thumb-img').each(function() {
           if ($(this).is_on_screen()) {
              if ($(this).hasClass('done')){
               $(this).removeClass('done');
               $(this).animate({width: "100%"}, 800);
             }
           }
     });

 });





 $(document).ready(function(){
   $("#wwd, .outer-giga, #scroll-d, #header-servizi .titoletto, #header-servizi .hr, #cont-fotoservizi, #header-servizi, #header-servizio-espolso").addClass('in');
   $(".titolone , .titolo, .titolino ").animatext({
      mode:"words"
    });

    $(".titolos").animatext({

       speed: 50
     });

    $(".testo-intro").animatext({
       mode:"words",
       speed: 50
     });

 });

}else{

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

    $('.ps-thumb-img').each(function() {
            if ($(this).is_on_screen()) {
               if ($(this).hasClass('done')){
                $(this).removeClass('done');
                $(this).animate({width: "100%"}, 800);
              }
            }
      });

  });


$(document).ready(function(){

  $(".titolone , .titolo, .titolino ").animatext({
     mode:"words"
   });

   $(".titolos").animatext({

      speed: 50
    });

   $(".testo-intro").animatext({
      mode:"words",
      speed: 50
    });

   $(".giga, .giga.white").paroller({ factor: 0.4, type: 'foreground', direction: 'horizontal',  transition: 'transform 0.1s ease' });
   $(".giga.r").paroller({ factor: -0.4, type: 'foreground', direction: 'horizontal',  transition: 'transform 0.1s ease' });
   $(".tria, .cir, .plu").paroller({ factor: 0.3, type: 'foreground', direction: 'vertical',  transition: 'transform 0.1s ease' });
   $(".ps-thumb .ps-thumb-img").paroller({ factor: 0.2, type: 'foreground', direction: 'vertical',  transition: 'transform 0.1s ease' });
   $("#wwd, .outer-giga, #scroll-d, #header-servizi .titoletto, #header-servizi .hr, #header-servizi, #header-servizio-espolso").addClass('in');
   //$("#header-home .testo-intro").addClass('in');
});

}
