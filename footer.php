    </main>
    <?php get_sidebar(); ?>
    <div class="site-cache" id="site-cache"></div>
    <?php wp_footer(); ?>
  </div>
  <footer class="footer">
    <nav class="footer-menu">
      <?php wp_nav_menu(array('theme_location' => 'footer_menu',
                              'container' => false,
                              'menu_id'  => '',
                              'echo' => true,
                              'before' => '',
                              'after' => '',
                              'link_before' => '',
                              'link_after' => '',
                              'depth' => 0,
                              'items_wrap'      => '%3$s',
                              'walker' => new vgmWalker()
                            )); ?>
    </nav>
  </footer>
</div>
</div>
</body>
</html>