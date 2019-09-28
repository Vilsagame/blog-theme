<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <div class="box">
            <h1 class="title"><?php the_title(); ?></h1>
            <?php if ( has_post_thumbnail() ) : ?>
            <div class="one-third"
                <div class="outer none"><span class="inset"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></span>
            </div>
            <div class="two-third last">
            <?php endif; ?>
            <?php the_content( 'Lire la suite ...' ); ?>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="clear"></div>
                </div>
            <?php endif; ?>
            <?php if (comments_open()) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>
        </div>
<?php endwhile; ?>
<?php endif;  ?>
