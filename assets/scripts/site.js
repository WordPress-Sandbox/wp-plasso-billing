
/* Smooth Scrolling
---------------------------------------------------------------------------------------------------- */

jQuery(document).ready(function( $ ) {
  $(document).on('click', '.scroll', function() {
    var target = this.hash;
    var $target = $(target);

    if ($(this).hasClass('down')) {
      $('html, body').stop().animate({
        'scrollTop': $(window).scrollTop() + 300
      });
    } else if ($(this).hasClass('form')) {

      $('.panel.active').stop().animate({
        'scrollTop': $target.offset().top - 60
      });
    } else {
      $('html, body').stop().animate({
        'scrollTop': $target.offset().top - 60
      });
    }

    return false;
  });
});
