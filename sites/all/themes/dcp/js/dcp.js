(function ($) {
  $(document).ready(function() {
    $('.navigation-menu').click(function(){
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

    if($('#block-system-main').find('.at-panel').length > 0){
      $('body').addClass('panelised');
    }else{
      $('body').addClass('not-panelised');
    }
  });
})(jQuery);
