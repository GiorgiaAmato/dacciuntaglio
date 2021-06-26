<?php

/*  Theme setup
/* ------------------------------------ */
if ( ! function_exists( 'beautyHairstyle_setup' ) ) {

	function beautyHairstyle_setup() {

		add_theme_support( "title-tag" );

		// Enable automatic feed links
		add_theme_support( 'automatic-feed-links' );

		// Enable featured image
		add_theme_support( 'post-thumbnails' );

		// Thumbnail sizes
		add_image_size( 'beautyHairstyle_single', 800, 493, true ); //(cropped)
		add_image_size( 'beautyHairstyle_big', 1400, 928, true ); 	//(cropped)

		// Custom menu areas
		register_nav_menus( array(
			'header' => esc_html__( 'header', 'beautyHairstyle' ),
            'footer' => esc_html__( 'footer', 'beautyHairstyle' ),
            ) );

		// Load theme languages
		load_theme_textdomain( 'beautyHairstyle', get_template_directory().'/languages' );

	}

}
add_action( 'after_setup_theme', 'beautyHairstyle_setup' );


/*  Include Styles and script
/* ------------------------------------ */
if ( ! function_exists( 'beautyHairstyle_styles_scripts' ) ) {

	function beautyHairstyle_style_scripts() {

		//wp_enqueue_script('jquery');
		wp_enqueue_script( 'beautyHairstyle-scripts', get_template_directory_uri() . '/js/index.js', array( 'jquery' ),'', true );

		wp_enqueue_style( 'beautyHairstyle-siliguri','//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;700&display=swap');
        
        wp_enqueue_style( 'beautyHairstyle-montainschristmas','//fonts.googleapis.com/css2?family=Mountains+of+Christmas:wght@700&display=swap');

		wp_enqueue_script( 'beautyHairstyle-movingletters', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js');

		wp_enqueue_style( 'beautyHairstyle', get_template_directory_uri().'/style.css');

	}

}
add_action( 'wp_enqueue_scripts', 'beautyHairstyle_style_scripts' );




?>