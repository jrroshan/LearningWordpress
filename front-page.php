<?php 

get_header(); ?>

<div class="site-content clearfix">

    <?php if(have_posts()):
        while(have_posts()):the_post();

           the_content();
        endwhile;
        
    else:
        echo '<p> No Content found</p>';

    endif; 

    // opinion posts loop begins here

   $opinionPosts = new WP_Query('cat=6&posts_per_page=2&orderby=title&order=ASC');

    if($opinionPosts->have_posts()):
        while($opinionPosts->have_posts()):$opinionPosts->the_post();?>
            // Output content however we please here
            <h2><?php the_title(); ?></h2>
        <?php endwhile;

    else:
        // Fallback no content message here
    endif;

    wp_reset_postdata();

// News posts loop begins here

$opinionPosts = new WP_Query('cat=7&posts_per_page=2&orderby=title&order=ASC');

 if($opinionPosts->have_posts()):
     while($opinionPosts->have_posts()):$opinionPosts->the_post();?>
         // Output content however we please here
         <h2><?php the_title(); ?></h2>
     <?php endwhile;

 else:
     // Fallback no content message here
 endif;

 wp_reset_postdata();

 ?>




</div>
<?php get_footer();
?>