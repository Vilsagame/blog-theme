<div class="post format-image box">
    <div class="frame">
        <a href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        </a>
    </div>
    <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content( 'Lire la suite ...' ); ?>
    <div class="details">
        <span class="icon-image"><a href="#"><?php the_time('F jS, Y') ?></a></span>
        <span class="comments"><a href="#">3</a></span>
    </div>
</div>
