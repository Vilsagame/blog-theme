<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0">
  <meta name="description" content="a changer">
  <?php wp_head(); ?>
</head>
<body>
<div class="site-container">
  <div class="site-pusher">
    <header class="header">
      <a href="#" class="header__icon" id="header__icon"></a>
      <div class="header__logo">
      </div>
      <div class="header__title">
        <h1><a href="<?php bloginfo('wpurl') ?>"><?php bloginfo() ?></a></h1>
        <p><?php bloginfo('description'); ?></p>
      </div>
      <nav class="menu">
        <?php wp_nav_menu(array('theme_location' => 'main_menu',
                                'container' => false,
                                'menu_id'  => '',
                                'echo' => true,
                                'before' => '',
                                'after' => '',
                                'link_before' => '',
                                'link_after' => '',
                                'depth' => 0,
                                'items_wrap'      => '%3$s',
                                'walker' => new vgmWalker())); ?>
      </nav>
    </header>
    <div class="site-content">
      <main class="main">
