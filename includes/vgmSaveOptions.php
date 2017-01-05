<?php
/**
 * \file vgmSaveOptions.php
 * \author Cyril POIDEVIN
 * \version 0.0.1
 */

/*
 * Save the options from the admin page
 */
function vgmSaveOptions()
{
  if (!current_user_can( 'publish_pages' )) {
    wp_die('Vous n\'êtes pas authorisé à effectuer cette opération');
  }
  check_admin_referer('vgm_options_verify');
  $opts = get_option( 'vgm_opts' );

  $opts['logo_url'] = sanitize_text_field($_POST['logo_url']);
  update_option('vgm_opts', $opts);

   wp_redirect(admin_url('admin.php?page=vgm_theme_opts&status=1'));
   exit;
}