<?php get_header(); ?>

    <?php
    
    if( have_posts() ):
        while(have_posts() ) : the_post(); ?>
        
          <h3> <?php the_title(); ?></h3>
          <small>Posted on:<?php the_time('Fj, Y'); ?> at <?php the_time('g:i a'); ?>, in
          <?php the_category(); ?></small>
          <p><?php the_content(); ?></p>
          <h4>There are no post in here so this text and all the above should not show up!!!<br>
          Unless I switch the TEMPLATE to DEFAULT TEMPLATE in admin area</h4>
        
    <?php endwhile;
    endif;
    ?>

<?php get_footer(); ?>