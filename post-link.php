<div class="post format-link box">
    <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="arrow">&rarr;</span></a></h2>
    <?php the_content( 'Lire la suite ...' ); ?>
    <div class="details">
        <span class="icon-image"><a href="#"><?php the_time('F jS, Y') ?></a></span>
        <span class="comments"><a href="#">3</a></span>
    </div>
</div>
