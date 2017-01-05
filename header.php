<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <!-- <title><?php echo wp_title(); ?></title> -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0">
  <meta name="description" content="a changer">
  <?php wp_head(); ?>
</head>
<body>
<div class="site-container">
  <div class="site-pusher">
    <header class="header">
      <div class="header__logo">
      </div>
      <div class="header__title">
        <h1><?php bloginfo() ?></h1>
        <p><?php bloginfo( 'description' ); ?></p>
      </div>

    </header>
