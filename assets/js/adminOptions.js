/**
 * \file assets\js\adminOptions.js
 * \author Cyril POIDEVIN
 * \version 0.0.1
 *
 * Javascript for the administration page of this theme
 */
/* global jQuery */
/* global wp */
(function ($) {
  var frame = wp.media({
    title: 'Selectionner une image',
    button: {
      text: 'Utiliser ce média'
    },
    multiple: false
  })

  $('#logo_button').click(function (e) {
    e.preventDefault()
    frame.open()
  })

  frame.on('select', function () {
    var objImg = frame.state().get('selection').first().toJSON()
    console.log(objImg)
    var url = objImg.sizes.thumbnail.url
    $('#logo_url_disabled').val(url)
    $('#logo_url').val(url)
    $('#logo_preview').attr('src', url)
  })
})(jQuery)
