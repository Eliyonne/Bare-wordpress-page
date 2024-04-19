<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Do not change! For now... -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
    <div class="main-header-container">
        <?php 
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }    
        ?>
        <?php bloginfo( 'name' ); ?>
        <?php wp_nav_menu( array ('theme_location' => 'header-menu')); ?>
    </div>
    </header>
