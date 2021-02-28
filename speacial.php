<?php 

/*
Template Name: Special Layout
*/
get_header();

if(have_posts()):
    while(have_posts()):the_post(); ?>

    <article class="post page">
        <h2><?php the_title(); ?></h2>

        <!-- Info-box -->
        <div class="info-box">
        <h4>Disclaimer Title</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid provident animi dolore officia voluptatem itaque laboriosam ipsa possimus explicabo necessitatibus. Reiciendis harum eius accusamus beatae voluptate cupiditate quod dolorum magnam!</p>
        </div>
        <?php the_content(); ?>
    </article>
    <?php endwhile;
    
else:
    echo '<p> No Content found</p>';

endif;

get_footer();
?>