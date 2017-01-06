<?php if (have_posts()) : ?>
  <div class="articles">
  <?php while (have_posts()) : ?>
    <?php the_post(); ?>
    <article class="article">
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <?php the_post_thumbnail(); ?>
        </a>
      <?php endif; ?>
      <?php the_content( 'Lire la suite ...' ); ?>
    </article>
  <?php endwhile; ?>
  </div>
<?php endif;  ?>
<?php
global $wp_query;
$big = 999999999;
$total_pages = $wp_query->max_num_pages;

if ($total_pages > 1) :?>
  <div>
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