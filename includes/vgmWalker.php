<?php

/**
 * \class vgmWalker
 */
class vgmWalker extends Walker_Nav_Menu
{
  function start_el(&$output, $item, $depth, $args)
  {
    global $wp_query;

    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

    $item_output = '<a'. $attributes .'>';
    $item_output .= apply_filters( 'the_title', $item->title, $item->ID );
    $item_output .= '</a>';

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }

  function end_el(&$output, $item, $depth=0, $args=array()) {
    $output .= "";
  }
}