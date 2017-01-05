<?php get_header() ?>

<?php get_template_part('content'); ?>

<div class="author">
  <p>Cette article a été écrit par : <?php the_author_link(); ?>, le <?php the_date(); ?></p>
</div>

<?php get_footer() ?>