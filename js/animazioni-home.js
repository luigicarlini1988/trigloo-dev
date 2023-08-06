$(document).ready(function(){
   $('#section-skills').stickem();
   $("#giga").paroller({ factor: 0.4, type: 'foreground', direction: 'horizontal',  transition: 'transform 0.1s ease' });
   $(".phs-imm").paroller({ factor: 0.12, type: 'foreground', direction: 'vertical',  transition: 'transform 0.1s ease' });
   $("#header-home .titoletto , #tondo, #occhio1, #occhio2, #scroll-d , #wrap-skill, #skills-mobile").addClass('in');
   $("#header-home .testo-intro").addClass('in');
});
