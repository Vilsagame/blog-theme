<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0">
  <meta name="description" content="a changer">
  <?php wp_head(); ?>
  <script type="text/javascript">
      var templateUrl = '<?= get_bloginfo("template_url"); ?>';
  </script>
</head>
<body>
    <div class="scanlines"></div>
    <div class="header-wrapper opacity">
        <div class="header">
            <div class="logo">
                <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); ?>
                <?php $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
                <a href="<?php bloginfo('wpurl') ?>"><img src="<?php echo $image[0];?>" height="29"></a>
            </div>
            <div id="menu-wrapper">
                <nav id="menu" class="menu">
                    <ul id="tiny">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'main_menu',
                            'menu_id'  => '',
                            'echo' => true,
                            'container' => false,
                            'before' => '',
                            'after' => '',
                            'link_before' => '',
                            'link_after' => '',
                            'depth' => 0,
                            'items_wrap' => '%3$s'
                        )); ?>
                    </ul>
                </nav>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="wrapper">
        <div class="intro">Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum, Vestibulum id ligula porta. </div>
        <ul class="social">
            <li><a class="rss" href="#"></a></li>
            <li><a class="facebook" href="#"></a></li>
            <li><a class="twitter" href="#"></a></li>
            <li><a class="pinterest" href="#"></a></li>
            <li><a class="dribbble" href="#"></a></li>
            <li><a class="flickr" href="#"></a></li>
            <li><a class="linkedin" href="#"></a></li>
        </ul>
