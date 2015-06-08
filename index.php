<?php get_header(); ?>
    <?php
    // if we set this page as the post page, remember - we can NOT assign post
    // to pages admin area.settings.reading
    // so wp checks
    if( have_posts() ):
        while(have_posts() ) : the_post(); echo 'THIS IS THE FORMAT: '.get_post_format(); ?>
        <!-- took everything out of here and put it in content.php -->
        <?php get_template_part('content', get_post_format()); ?>
    <?php endwhile;
    endif;
    ?>
<?php get_footer(); ?>