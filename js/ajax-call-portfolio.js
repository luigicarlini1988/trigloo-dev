$(document).ready(function(){
    $("#ajax-1").click(function(){
      $("#ajax-load").load("part-folio/online.html");
      $(this).addClass('activia');

      $("#ajax-2").removeClass('activia');
      $("#ajax-3").removeClass('activia');

    });

    $("#ajax-2").click(function(){
      $("#ajax-load").load("part-folio/offline.html");
      $(this).addClass('activia');

      $("#ajax-1").removeClass('activia');
      $("#ajax-3").removeClass('activia');

    });


    $("#ajax-3").click(function(){
      $("#ajax-load").load("part-folio/sales.html");
      $(this).addClass('activia');

      $("#ajax-1").removeClass('activia');
      $("#ajax-2").removeClass('activia');

    });
});
