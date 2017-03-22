<div class="blog-wrap">
    <div class="blog-grid">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <?php get_template_part('post', get_post_format() ? : 'standard'); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
</div>
<?php
global $wp_query;
$big = 999999999;
$total_pages = $wp_query->max_num_pages;

if ($total_pages > 1) :?>
  <div id="navigation">
    <?php echo paginate_links(array(
      'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
      'format' => '/page/%#%',
      'current' => max(1, get_query_var('paged')),
      'total' => $total_pages,
      'end_size' => 1,
      'mid_size' => 2,
      'prev_next' => true,
      'prev_text' => '<< Page précédente',
      'next_text' => 'Page suivante >>'
    )); ?>
  </div>
<?php endif; ?>
