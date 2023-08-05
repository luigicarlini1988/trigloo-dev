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




 $(document).ready(function(){
   $("#wwd, .outer-giga, #scroll-d, #header-servizi .titoletto, #header-servizi .hr, #cont-fotoservizi, #header-servizi").addClass('in');
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





$(document).ready(function(){
   $(".tria, .cir, .plu").paroller({ factor: 0.3, type: 'foreground', direction: 'vertical',  transition: 'transform 0.1s ease' });
   $(".ps-thumb-img").paroller({ factor: 0.1, type: 'foreground', direction: 'vertical',  transition: 'transform 0.1s ease' });
   $("#wwd, .outer-giga, #scroll-d, #header-servizi .titoletto, #header-servizi .hr, #cont-fotoservizi, #header-servizi, #header-servizio-espolso").addClass('in');

   $("#ajax-1").click(function(){
     $("#ajax-load").load("part-folio/online.html");

   });

   $("#ajax-2").click(function(){
     $("#ajax-load").load("part-folio/offline.html");

   });


   $("#ajax-3").click(function(){
     $("#ajax-load").load("part-folio/sales.html");

   });

});

}
