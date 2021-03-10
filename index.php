<?php 

get_header(); ?>

<div class="site-content clearfix">
<!-- Main Column -->
<div class="main-column">

    <?php if(have_posts()):
        while(have_posts()):the_post();

            get_template_part('content',get_post_format());
        endwhile;
        
    else:
        echo '<p> No Content found</p>';

    endif; ?>

</div><!--/Main Column  -->

<?php get_sidebar(); ?>
</div>
<?php get_footer();
?>