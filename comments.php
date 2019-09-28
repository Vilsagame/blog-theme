<hr>
<?php
comment_form();
if (have_comments()) : ?>
    <ul class="post-comments">
        <?php
            wp_list_comments();
        ?>
    </ul>
<?php endif; ?>