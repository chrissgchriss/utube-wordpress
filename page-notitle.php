<?php 

/*
Template Name: Page No Title
*/

get_header(); ?>

    <?php
    
    if( have_posts() ):
        while(have_posts() ) : the_post(); ?>
        
          
          <small>Posted on:<?php the_time('Fj, Y'); ?> at <?php the_time('g:i a'); ?>, in
          <?php the_category(); ?></small>
          <p>  <?php the_content(); ?></p>
          
          <h4>This is extra text inbedded in the page not like the_title and the_content
          which are placed by wp_functions -<br><br> I had to go in and change the menu navigation
          label to account for me changing the title, so watch for that if your navigation
          changes! I made this into a template by commenting in the top</h4>
          
          <h3 style="color: red;">I put this static text in here: Template Name: Page No Title</h3>
        
    <?php endwhile;
    endif;
    ?>

<?php get_footer(); ?>