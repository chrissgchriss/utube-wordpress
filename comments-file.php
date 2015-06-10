<?php get_header(); ?>

<div class="row">
    
    
        <?php
        
        // 1. create an array of arguments for our category array filter
        $args_cat = array(
            'include' => '1,9,8' // 1,9,8 needs to be specified as a string, not an array value
        );
        //2. call these specific categories and loop throuhg these categories
        // This variable will store inside all the categories we are looking for, like &statement in Obj C
        $categories = get_categories($args_cat);
        // var_dump($categories); this shows what we retried from our get_categories function
        // now just to see what is inside our categories we can do a var_dump
        // now we check...we see lots of info, but we only need 3 things the id of our categories
        //OK
        // now we need to loop throuhg what was inside of $categories
        // foreach function
        foreach($categories as $category);
        // now inside this loop...we call custom php query -- copy our customized query below...
        // now we wanted to only have 1 blog post per page, so change post_per_page to 1
        $args = array(
                'type' => 'post',
                'posts_per_page' => 1,
                // category has to be inside the loop we are calling...
                // we go inside $category and look for term_id (see var dump - everything was in there)
                'category__in' => $category->term_id, // so in this loop we are creating 3 queries...
                // every time we loop, we call one post, then loop again to call the second post... third...
                'category__not_in' => array(1,10),
            );
            $lastBlog = new WP_Query( $args );
            
            if( $lastBlog->have_posts() ):
            
                while($lastBlog->have_posts() ) : $lastBlog->the_post(); echo 'THIS IS page-home.php THE FORMAT: '.get_post_format(); ?>
                <!-- took everything out of here and put it in content.php -->
                <!-- below is mark up for featured -->
                <div class="col-xs-12 col-sm-4">
                <?php get_template_part('content','featured'); ?>
                </div>
                
                <?php endwhile;
            endif;
            wp_reset_postdata();
            // this is the end...
        endforeach;
        
        
            $args = array(
                'type' => 'post',
                'posts_per_page' => 3,
                'category__in' => array(7,8,9),
                'category__not_in' => array(1,10),
            );
            $lastBlog = new WP_Query( $args );
            
            if( $lastBlog->have_posts() ):
            
                while($lastBlog->have_posts() ) : $lastBlog->the_post(); echo 'THIS IS page-home.php THE FORMAT: '.get_post_format(); ?>
                <!-- took everything out of here and put it in content.php -->
                <!-- below is mark up for featured -->
                <div class="col-xs-12 col-sm-4">
                <?php get_template_part('content','featured'); ?>
                </div>
                
                <?php endwhile;
            endif;
            wp_reset_postdata();
        ?>
</div>
    
    
    
<div class="row">   
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