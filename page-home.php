<?php get_header(); ?>

<div class="row">
    
    <div class="col-xs-12">
        <?php
        
            $args = array(
                'type' => 'post',
                'posts_per_page' => 3,
            );
            $lastBlog = new WP_Query( $args );
            
            if( $lastBlog->have_posts() ):
            
                while($lastBlog->have_posts() ) : $lastBlog->the_post(); echo 'THIS IS page-home.php THE FORMAT: '.get_post_format(); ?>
                <!-- took everything out of here and put it in content.php -->
                <?php get_template_part('content', get_post_format()); ?>
                
                <?php endwhile;
            endif;
            wp_reset_postdata();
        ?>
    </div>
    
    
    
    
    <div class="col-xs-12 col-sm-8">
        <?php
        
            if( have_posts() ):
                while(have_posts() ) : the_post(); echo 'THIS IS ORIGINAL THE FORMAT: '.get_post_format(); ?>
                <!-- took everything out of here and put it in content.php -->
                <?php get_template_part('content', get_post_format()); ?>
            <?php endwhile;
            endif;
            
            //START PRINT OTHER 2 POSTS NOT THE FIRST ONE
/*            
            $args = array(
                          'type' => 'post',
                          'post_per_page' => 2,
                          'offset' => 1,
            );
            $lastBlog = new WP_Query($args);
            
            if( $lastBlog->have_posts() ):
            
                while($lastBlog->have_posts() ) : $lastBlog->the_post(); echo 'THIS IS OTHER 2 THE FORMAT: '.get_post_format(); ?>
                
                <?php get_template_part('content', get_post_format()); ?>
                
                <?php endwhile;
            endif;
            wp_reset_postdata();
*/
        ?>
        
        <!--<hr>-->
        
        <?php
            //START PRINT ONLY CERTAIN CATEGORIES, post_per_page=-1 means no limit
/*            
            $lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=news');
            
            if( $lastBlog->have_posts() ):
            
                while($lastBlog->have_posts() ) : $lastBlog->the_post(); echo 'THIS IS NEWS CATEGORY THE FORMAT: '.get_post_format(); ?>
                
                <?php get_template_part('content', get_post_format()); ?>
                
                <?php endwhile;
            endif;
            wp_reset_postdata();
*/            
        ?>
        
        
    </div>
    
    <div class="col-xs-12 col-sm-4"><?php get_sidebar(); ?></div>
   
</div><!-- end row -->    
<?php get_footer(); ?>