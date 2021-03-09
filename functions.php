<?php 
function launcher_after_setup_theme () {
	load_theme_textdomain("launcher");
	add_theme_support("post-thumbnails" );
	add_theme_support("title-tag");
}

add_action("after_setup_theme", "launcher_after_setup_theme");

function launcher_assets(){
	wp_enqueue_style( 'launcher', get_stylesheet_uri());

	wp_enqueue_style( 'animate-css', get_theme_file_uri("/assets/css/animate.css"));
	wp_enqueue_style( 'icomoon-css', get_theme_file_uri("/assets/css/icomoon.css"));
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri("/assets/css/bootstrap.css"));
	wp_enqueue_style( 'style-css', get_theme_file_uri("/assets/css/style.css"));



	wp_enqueue_script('jquery-easing-js', get_theme_file_uri('/assets/js/jquery.easing.1.3.js'), array('jquery'), '1.0.0', true);
	wp_enqueue_script('bootstrap-js', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'), '1.0.0', true);
	wp_enqueue_script('waypoints-js', get_theme_file_uri('/assets/js/jquery.waypoints.min.js'), array('jquery'), '1.0.0', true);
	wp_enqueue_script('simplyCountdown-js', get_theme_file_uri('/assets/js/simplyCountdown.min.js'), array('jquery'), '1.0.0', true);
	wp_enqueue_script('main-js', get_theme_file_uri('/assets/js/main.js'), array('jquery'), '1.0.0', true);
}
add_action( "wp_enqueue_scripts", "launcher_assets" );

function launcher_sidebar(){
	/**
	 * Footer left
	 */
	$footerLeft = array(
		'name'          => __( 'Footer left', 'launcher' ),
		'id'            => 'footer-left',
		'description'   => __('Footer Left','launcher'),
		'class'         => '',
		'before_widget' => '<li id="%1" class="widget %2">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	);
	
	register_sidebar( $footerLeft );


	/**
	 * Footer Right
	 */
	$footerRight = array(
		'name'          => __( 'Footer right', 'launcher' ),
		'id'            => 'footer-right',
		'description'   => __('Footer Right'),
		'class'         => '',
		'before_widget' => '<li id="%1" class="text-right widget %2">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	);
	
	register_sidebar( $footerRight );
	



	
}
add_action( 'widgets_init', 'launcher_sidebar' );