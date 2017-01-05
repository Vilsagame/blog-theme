<?php
/**
 * \file includes\vgmAdminOptions.php
 * \author Cyril POIDEVIN
 * \version 0.0.1
 *
 * Create the admin page for this theme
 */

/**
 * \fn vgmBuildAdminOptionsPage
 */
function vgmBuildAdminOptionsPage()
{
  $theme_opts = get_option( 'vgm_opts' );
  ?>
  <h1>Réglage du thème : Vilsagame</h1>
  <?php if (isset($_GET['status']) && $_GET['status'] == 1) : ?>
    <div class="alert success">Les modifications ont bien été enregistrées</div>
  <?php endif; ?>
  <form class="vgm-form" id="form_vgm_opts" method="post" action="admin-post.php">
    <input type="hidden" name="action" value="vgm_save_options">
    <?php wp_nonce_field('vgm_options_verify'); ?>
    <!-- Logo -->
    <div class="row">
      <label>Logo</label>
      <div class="img">
        <div>
          <button type="button" id="logo_button">Choisir une image</button>
          <input type="text" name="logo_url_disabled" id="logo_url_disabled" value="<?php echo $theme_opts['logo_url']; ?>" disabled>
        </div>
        <input type="hidden" name="logo_url" id="logo_url" value="<?php echo $theme_opts['logo_url']; ?>">
        <img src="<?php echo $theme_opts['logo_url'] ?>" id="logo_preview">
      </div>
    </div>
    <!-- soumission -->
    <div class="row">
      <button type="submit"> Mettre à jour les options</button>
    </div>
  </form>
  <?php
}
?>