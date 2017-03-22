<?php
/**
 * \file functions.php
 * \author Cyril POIDEVIN
 * \version 0.0.1
 *
 * Wordpress Functions File.
 */

/**
 * \fn vgmAddStyle
 *
 * Add css's files and js in template
 */
function vgmAddStyle() {
  /* Styles */
  wp_enqueue_style('vgmDefaultStyle', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
  wp_enqueue_style('vgmStyle', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
  wp_enqueue_style('vgmMediaQueriesStyle', get_template_directory_uri() . '/assets/css/media-queries.css', array(), '1.0.0', 'all');
  /* Scripts */
  wp_enqueue_script('vgmMainScript', get_template_directory_uri() . '/assets/js/app.js', array(
      'vgmJquery',
      'vgmTwitterScript',
      'vgmDCFlickrScript',
      'vgmJquery',
      'vgmDdsmoothmenu',
      'vgmRetina',
      'vgmSelectnav',
      'vgmMasonry',
      'vgmFitvids',
      'vgmBackstretch',
      'vgmMediaelement',
      'vgmMediaelementplayer',
  ), '1.0.0', true);
  wp_enqueue_script('vgmTwitterScript', get_template_directory_uri() . '/assets/js/twitter.min.js', array('vgmJquery'), '2.0.0', true);
  wp_enqueue_script('vgmDCFlickrScript', get_template_directory_uri() . '/assets/js/jquery.dcflickr.js', array('vgmJquery'), '1.0.0', true);
  wp_enqueue_script('vgmJquery', get_template_directory_uri() . '/assets/js/jquery-1.7.2.min.js', array(), '1.11.3', true);
  wp_enqueue_script('vgmDdsmoothmenu', get_template_directory_uri() . '/assets/js/ddsmoothmenu.js', array(), '2.0.0', true);
  wp_enqueue_script('vgmRetina', get_template_directory_uri() . '/assets/js/retina.js', array(), '2.1.0', true);
  wp_enqueue_script('vgmSelectnav', get_template_directory_uri() . '/assets/js/selectnav.js', array(), '0.1.0', true);
  wp_enqueue_script('vgmMasonry', get_template_directory_uri() . '/assets/js/jquery.masonry.min.js', array(), '4.1.1', true);
  wp_enqueue_script('vgmFitvids', get_template_directory_uri() . '/assets/js/jquery.fitvids.js', array(), '1.1.0', true);
  wp_enqueue_script('vgmBackstretch', get_template_directory_uri() . '/assets/js/jquery.backstretch.min.js', array(), '2.1.15', true);
  wp_enqueue_script('vgmMediaelement', get_template_directory_uri() . '/assets/js/mediaelement.min.js', array(), '3.2.4', true);
  wp_enqueue_script('vgmMediaelementplayer', get_template_directory_uri() . '/assets/js/mediaelementplayer.min.js', array(), '2.1.0', true);
}
add_action('wp_enqueue_scripts', 'vgmAddStyle');

/**
 * \fn vgmSetup
 *
 * Add and remove feature in the theme
 */
function vgmSetup()
{
  // Support des vignettes
  add_theme_support('post-thumbnails');
  remove_action('wp_head', 'wp_generator');
  add_theme_support('title-tag');
  register_nav_menus(array('main_menu'=>'Menu principal'));
  $args = array(
    'default-color' => '202020',
    'default-image' => '',
  );
  add_theme_support( 'custom-background', $args );
  add_theme_support( 'custom-logo', array(
      'height'      => 400,
      'width'       => 400,
      'flex-width' => true,
    ) );
  add_theme_support( 'automatic-feed-links' );
  // Add theme support for Post Formats
  add_theme_support( 'post-formats', array( 'status', 'quote', 'image', 'link', 'aside' ) );
  // Add theme support for HTML5 Semantic Markup
  add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
}
add_action('after_setup_theme', 'vgmSetup');

/**
 * \fn vgmPictSizes
 *
 * Redifine the pictures sizes
 *
 * \param  array $sizes The sizes
 * \return array The new sizes
 */
function vgmPictSizes($sizes)
{
  $addsizes = array(
    "medium_large" => "Medium Large"
  );
  $newsizes = array_merge($sizes, $addsizes);
  return $newsizes;
}
add_filter( 'image_size_names_choose', 'vgmPictSizes' );

/*
 * \fn vgmAddSidebar
 *
 * Ajout d'un widget
*/
function vgmAddSidebar()
{
    register_sidebar(array(
        'id' => 'footer_widget_first',
        'name' => 'Première zone de widget du footer',
        'description' => 'Apparait à gauche du footer, en premier pour les mobiles',
        'before_widget' => '<div id="%1$s" class="%2$s widget">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
    register_sidebar(array(
        'id' => 'footer_widget_second',
        'name' => 'Seconde zone de widget du footer',
        'description' => 'Apparait à gauche du footer, en deuxième pour les mobiles',
        'before_widget' => '<div id="%1$s" class="%2$s widget">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
    register_sidebar(array(
        'id' => 'footer_widget_third',
        'name' => 'Troisième zone de widget du footer',
        'description' => 'Apparait à droite du footer, en troisième pour les mobiles',
        'before_widget' => '<div id="%1$s" class="%2$s widget">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
    register_sidebar(array(
        'id' => 'footer_widget_fourth',
        'name' => 'Quatrième zone de widget du footer',
        'description' => 'Apparait à droite du footer, en dernier pour les mobiles',
        'before_widget' => '<div id="%1$s" class="%2$s widget">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
}
add_action('widgets_init','vgmAddSidebar');
