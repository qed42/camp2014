(function ($) {
  $(document).ready(function() {
    $('.navigation-menu').hover(function(){
      if($(window).width() < '600' ){
        if($(this).hasClass('hover-menu')){
          $(this).removeClass('hover-menu');
          $(this).removeClass('close-menu');
        } else {
          $(this).addClass('hover-menu');
          $(this).addClass('close-menu');
        }
      }
    });
  });
})(jQuery);
