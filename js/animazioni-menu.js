$(document).ready(function(){
      $("#menu-button").click(function(){
        $("#sfondone-menu").toggleClass("in");
        $(this).toggleClass('mob-mover');
        $("#mbl1, #mbl2, #mbl3").toggleClass("x");
        $("#menu-reale").toggleClass("events");
      });

     $("#uno a").mouseenter(function(){
       $(this).addClass('in');
       $("#due a, #tre a, #quattro a, #cinque a, #sei a").addClass('out');
     });

     $("#uno a").mouseleave(function(){
       $(this).removeClass('in');
       $("#due a, #tre a, #quattro a, #cinque a, #sei a").removeClass('out');
     });

     $("#due a").mouseenter(function(){
       $(this).addClass('in');
       $("#uno a, #tre a, #quattro a, #cinque a, #sei a").addClass('out');
     });

     $("#due a").mouseleave(function(){
       $(this).removeClass('in');
       $("#uno a, #tre a, #quattro a, #cinque a, #sei a").removeClass('out');
     });

     $("#tre a").mouseenter(function(){
       $(this).addClass('in');
       $("#due a, #uno a, #quattro a, #cinque a, #sei a").addClass('out');
     });

     $("#tre a").mouseleave(function(){
       $(this).removeClass('in');
       $("#due a, #uno a, #quattro a, #cinque a, #sei a").removeClass('out');
     });

     $("#quattro a").mouseenter(function(){
       $(this).addClass('in');
       $("#due a, #tre a, #uno a, #cinque a, #sei a").addClass('out');
     });

     $("#quattro a").mouseleave(function(){
       $(this).removeClass('in');
       $("#due a, #tre a, #uno a, #cinque a, #sei a").removeClass('out');
     });


     $("#cinque a").mouseenter(function(){
       $(this).addClass('in');
       $("#due a, #tre a, #quattro a, #uno a, #sei a").addClass('out');
     });

     $("#cinque a").mouseleave(function(){
       $(this).removeClass('in');
       $("#due a, #tre a, #quattro a, #uno a, #sei a").removeClass('out');
     });

     $("#sei a").mouseenter(function(){
       $(this).addClass('in');
       $("#due a, #tre a, #quattro a, #uno a, #cinque a").addClass('out');
     });

     $("#sei a").mouseleave(function(){
       $(this).removeClass('in');
       $("#due a, #tre a, #quattro a, #uno a, #cinque a").removeClass('out');
     });




});
