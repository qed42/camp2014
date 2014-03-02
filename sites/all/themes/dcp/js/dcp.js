(function ($) {
  $(document).ready(function() {
    if($(window).width() <= 400 ){
      $('.navigation-menu').click(function(){
        if($(this).hasClass('hover-menu')){
          $(this).removeClass('hover-menu');
          $(this).removeClass('close-menu');
        } else {
          $(this).addClass('hover-menu');
          $(this).addClass('close-menu');
        }
      });
    }
  });
})(jQuery);
