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
}
add_action('after_setup_theme', 'vgmSetup');