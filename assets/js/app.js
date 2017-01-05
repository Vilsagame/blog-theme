/**
 * \file assets\js\app.js
 * \author Cyril POIDEVIN
 * \version 0.0.1
 *
 * Minimal Javascript for this theme
 */

/* global jQuery */
(function ($) {
  /* Toggle 'with--sidebar' class in body  */
  $('#header__icon').click(function (e) {
    e.preventDefault()
    $('body').toggleClass('with--sidebar')
  })

  $('#site-cache').click(function (e) {
    $('body').removeClass('with--sidebar')
  })
})(jQuery)
