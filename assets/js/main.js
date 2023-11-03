/* ===================================================================
 * wp - Main JS
 *
 * ------------------------------------------------------------------- */

(function ($) {
  'use strict';

  /* owlcarousel
   * ----------------------------------------------------- */
  var owlcarousel = function () {
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      items: 1
    });
  };

  /* mobile Menu
   * ----------------------------------------------------- */

  var mobileMenu = function () {
    $('.mobile-menu').click(function () {
      $('body').toggleClass('menu-open');
    });
  };

  /* select frist word
   * ----------------------------------------------------- */

  var firstWord = function () {
    var titleWords = post_title.split(' ');
    var firstWord = titleWords[0];
    var finalWord = '<span>' + firstWord + '</span>';
    var modifiedTitle = post_title.replace(firstWord, finalWord);

    document.getElementById('dual-color-heading').innerHTML = modifiedTitle;
  };

  /* Initialize
   * ------------------------------------------------------ */
  (function ssInit() {
    owlcarousel();
    mobileMenu();
    firstWord();
  })();
})(jQuery);
