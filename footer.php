</div>
<footer class="footer-wrapper">
  <div id="footer" class="four">
      <?php
      if(is_active_sidebar('footer_widget_first')) :
        ?>
        <div id="first" class="widget-area">
        <?php
        dynamic_sidebar('footer_widget_first');
          ?>
        </div>
          <?php
      endif;
      ?>
      <?php
      if(is_active_sidebar('footer_widget_second')) :
        dynamic_sidebar('footer_widget_second');
      endif;
      ?>
      <?php
      if(is_active_sidebar('footer_widget_third')) :
        dynamic_sidebar('footer_widget_third');
      endif;
      ?>
      <?php
      if(is_active_sidebar('footer_widget_fourth')) :
        dynamic_sidebar('footer_widget_fourth');
      endif;
      ?>
  </div>
</footer>
<div class="site-generator-wrapper">
  <div class="site-generator">Design by <a href="http://elemisfreebies.com">elemis</a>.</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
