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
        ?>
        <div id="second" class="widget-area">
        <?php
        dynamic_sidebar('footer_widget_second');
          ?>
        </div>
          <?php
      endif;
      ?>
      <?php
      if(is_active_sidebar('footer_widget_third')) :
        ?>
        <div id="third" class="widget-area">
        <?php
        dynamic_sidebar('footer_widget_third');
          ?>
        </div>
          <?php
      endif;
      ?>
      <?php
      if(is_active_sidebar('footer_widget_fourth')) :
        ?>
        <div id="fourth" class="widget-area">
        <?php
        dynamic_sidebar('footer_widget_fourth');
          ?>
        </div>
          <?php
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
