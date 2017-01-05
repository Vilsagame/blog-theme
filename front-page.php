<?php get_header() ?>

<?php get_template_part('content'); ?>

<h1>Les derniers articles</h1>

<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 2,
);

$my_query = new WP_Query($args);
?>

<?php if($my_query->have_posts()) : ?>
  <?php while ($my_query->have_posts() ) : ?>
    <?php $my_query->the_post(); ?>
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
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php get_footer() ?>