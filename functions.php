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
  /* Scripts */
  wp_enqueue_script('vgmMainScript', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '1.0.0', true);
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
  require_once('includes/vgmWalker.php');
  register_nav_menus(array('main_menu'=>'Menu principal'));
  register_nav_menus(array('footer_menu'=>'Menu de pied de page'));
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
    'id' => 'zone_widget_droite',
    'name' => 'Sidebar de droite',
    'description' => 'Apparait à droite du site, en bas pour les mobiles',
    'before_widget' => '<div id="%1$s" class="%2$s widget">',
    'after_widget' => '</div>',
    'before_title' => '<h1>',
    'after_title' => '</h1>'
  ));
}
add_action('widgets_init','vgmAddSidebar');