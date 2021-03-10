<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container">
    <!-- Site-header -->
    <header class="site-header">

        <!-- Head Search -->
        <div class="head-search">
            <?php get_search_form(); ?>
        </div>
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <h5><?php bloginfo('description') ?>

        <?php if (is_page(8)) { ?>
                - Thank you for viewing our work
        <?php } ?></h5>

        <nav class="site-nav">
            <?php 
            $args = array(
                'theme_location' => 'primary'
            );
            ?>
            <?php wp_nav_menu($args); ?>
        </nav>
    </header>
