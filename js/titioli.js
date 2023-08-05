$(document).ready(function(){

  var wo = $('.anim').blast({
    delimiter: 'word',
    returnGenerated: true
  });

  wo.each(function(i) {
      // initialize position
      $(this).css({
        position: 'relative',
        top: 20,
        opacity:0

      })

      // Delay: we don't want to animate
      // characters simultaneously
      .delay(i * 95)

      // Animate to the right
      .animate({ top: '0px', opacity: '1' }, 600);
    });


});
