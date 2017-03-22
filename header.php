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
        <div class="intro">
            <blockquote>
                Il y existe deux manières de concevoir un logiciel. La première, c’est de le faire si simple qu’il est évident qu’il ne présente aucun problème. La seconde, c’est de le faire si compliqué qu’il ne présente aucun problème évident. La première méthode est de loin la plus complexe.
                <cite>C.A.R. Hoare</cite>
            </blockquote>
        </div>
        <ul class="social">
            <li><a class="rss" href="/feed/"></a></li>
            <!-- <li><a class="facebook" href="#"></a></li>
            <li><a class="twitter" href="#"></a></li> -->
        </ul>
