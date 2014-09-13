<?php
/* menu */
	register_nav_menu('primary','Hovedmenu');

/* sidebar */
	if ( function_exists('register_sidebar')) {

		register_sidebar(array(
			'name' => __( 'sidebar' ),
			'id' => 'sidebar',
			'description' => __( 'Widgets på denne side bliver vist i sidebar'),
			'before_title' => '<h1>',
			'after_title' => '</h1>'
			));
		
		register_sidebar(array(
			'name' => __( 'footer' ),
			'id' => 'footer',
			'description' => __( 'Widgets på denne side bliver vist i footer' ),
			'before_title' => '<h1>',
			'after_title' => '</h1>'
			));

		register_sidebar(array(
			'name' => __( 'frontpage_banner' ),
			'id' => 'frontpage_banner',
			'description' => __( 'Banner til frontpage' ),
			'before_title' => '<h1>',
			'after_title' => '</h1>'
			));
	}

/* thumbnails */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 400, 400 );
	add_image_size( 'singlepost-img', 750, 400 );