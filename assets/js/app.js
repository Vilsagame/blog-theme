/**
 * \file assets\js\app.js
 * \author Cyril POIDEVIN
 * \version 0.0.1
 *
 * Minimal Javascript for this theme
 */

/* global templateUrl */
/* global jQuery */
/* global getTwitters */
/* global ddsmoothmenu */

/*
 * BACKGROUND
 */
(function ($) {
  $.backstretch(templateUrl + '/assets/images/bg/1.jpg')
})(jQuery);

/*
 * -----------------------------------------------------------------------------------
 * POSTS GRID
 * ----------------------------------------------------------------------------------- */
(function ($) {
  var $container = $('.blog-grid')
  console.log('container sélectionné')

  var gutter = 30
  var minWidth = 345
  console.log('debut de la fonction')
  $container.masonry({
    itemSelector: '.post',
    gutterWidth: gutter,
    isAnimated: true,
    columnWidth: function (containerWidth) {
      var boxWidth = (((containerWidth - gutter) / 2) | 0)
      if (boxWidth < minWidth) {
        boxWidth = (((containerWidth - gutter) / 2) | 0)
      }

      if (boxWidth < minWidth) {
        boxWidth = containerWidth
      }
      $('.post').width(boxWidth)
      return boxWidth
    }
  })
  console.log('fin de la fonction')
  $container.css('visibility', 'visible').parent().removeClass('loading')
})(jQuery);

/* -----------------------------------------------------------------------------------
 * VIDEO
 * ----------------------------------------------------------------------------------- */

(function ($) {
  $('.video').fitVids()
})(jQuery);

/* -----------------------------------------------------------------------------------
 * BUTTON HOVER
 * ----------------------------------------------------------------------------------- */

(function ($) {
  $('a.button, .forms fieldset .btn-submit, #commentform input#submit').css('opacity', '1.0')
  $('a.button, .forms fieldset .btn-submit, #commentform input#submit').hover(function () {
    $(this).stop().animate({ opacity: 0.85 }, 'fast')
  },
  function () {
    $(this).stop().animate({ opacity: 1.0 }, 'fast')
  })
})(jQuery);

/* -----------------------------------------------------------------------------------
 * IMAGE HOVER
 *----------------------------------------------------------------------------------- */

(function ($) {
  $('.quick-flickr-item').addClass('frame')
  $('.frame a').prepend('<span class="more"></span>')
})(jQuery);

(function ($) {
  $('.frame').mouseenter(function (e) {
    $(this).children('a').children('span').fadeIn(300)
  }).mouseleave(function (e) {
    $(this).children('a').children('span').fadeOut(200)
  })
})(jQuery)

 /* -----------------------------------------------------------------------------------
  * TWITTER
  * ----------------------------------------------------------------------------------- */

getTwitters('twitter', {
  id: 'elemisdesign',
  count: 2,
  enableLinks: true,
  ignoreReplies: false,
  template: '<span class="twitterPrefix"><span class="twitterStatus">%text%</span><br /><em class="twitterTime"><a href="http://twitter.com/%user_screen_name%/statuses/%id%">%time%</a></em>',
  newwindow: true
});

/* -----------------------------------------------------------------------------------
 * FLICKR
 * ----------------------------------------------------------------------------------- */

(function ($) {
  $('.flickr-feed').dcFlickr({
    limit: 9,
    q: {
      id: '51789731@N07',
      lang: 'en-us',
      format: 'json',
      jsoncallback: '?'
    },
    onLoad: function () {
      $('.frame a').prepend('<span class="more"></span>')
      $('.frame').mouseenter(function (e) {
        $(this).children('a').children('span').fadeIn(300)
      }).mouseleave(function (e) {
        $(this).children('a').children('span').fadeOut(200)
      })
    }
  })
})(jQuery);

/* -----------------------------------------------------------------------------------
 * AUDIO PLAYER
 * ----------------------------------------------------------------------------------- */

(function ($) {
  $('.blog-grid audio').mediaelementplayer({
    audioWidth: '100%',
    features: ['playpause', 'progress', 'tracks'],
    videoVolume: 'horizontal'
  })
})(jQuery);

(function ($) {
  $('.single audio').mediaelementplayer({
    audioWidth: '100%',
    features: ['playpause', 'progress', 'tracks'],
    videoVolume: 'horizontal'
  })
})(jQuery)

/* -----------------------------------------------------------------------------------
 * MENU
 * ----------------------------------------------------------------------------------- */
ddsmoothmenu.init({
  mainmenuid: 'menu',
  orientation: 'h',
  classname: 'menu',
  contentsource: 'markup'
})
