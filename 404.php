<?php get_header() ?>
<div class="site-content">
  <main class="main not-found">
    <h1>No man's land</h1>
    <p>
      Nous sommes vraiment désolé si vous avez perdu votre chemin !</p>
    <p>
      <a href="<?php bloginfo('wpurl'); ?>">Revenez à l'accueil </a> ou <a href="javascript:history.go(-1)">à la page d'où vous venez</a>
    </p>
  </main>
  <?php get_sidebar(); ?>
  <div class="site-cache" id="site-cache"></div>
<?php get_footer() ?>