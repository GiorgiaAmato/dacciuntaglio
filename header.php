<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?> http://dacciuntaglio.netsons.org/wp-content/uploads/2021/06/silhouette.png" />

    <?php wp_head(); ?>
 
</head>

<body <?php body_class(); ?>>

    <div class="container clearfix">
        <header class="header clearfix">
            <a href="http://dacciuntaglio.netsons.org/home/" class="header__logo"><img src="http://dacciuntaglio.netsons.org/wp-content/uploads/2021/06/silhouette.png" class="img_logo"> <?php bloginfo('description'); ?> </a>
            <a href="" class="header__icon-bar">
                <span></span>
                <span></span>
                <span></span>
            </a>

            <?php
            wp_nav_menu(array(
              'theme_location' => 'header',
              'depth' => 2,
              'container' => false,
              'menu_class' => 'header__menu'
            ));
            ?>
            


        </header>
    </div>

