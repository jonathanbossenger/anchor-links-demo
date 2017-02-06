<?php

define( 'PARENT_THEME_URL', trailingslashit( get_template_directory_uri( ) ) );
define( 'CHILD_THEME_URL', trailingslashit( get_stylesheet_directory_uri( ) ) );

function divi_child_theme_enqueue_styles() {

	$parent_style = 'divi-style'; // This is the 'parent-style'.

	wp_enqueue_style( $parent_style, PARENT_THEME_URL . 'style.css' );
	wp_enqueue_style( 'divi-child-style', CHILD_THEME_URL . 'style.css', array( $parent_style ) );

	$functions_script = 'divi-child-functions';

	$data = array();

	if( isset( $_GET['et_open_accordion'] ) ){
		$data['accordion'] = $_GET['et_open_accordion'];
	}

	if( isset( $_GET['et_open_tab'] ) ){
		$data['tab'] = $_GET['et_open_tab'];
	}

	wp_register_script( $functions_script, CHILD_THEME_URL . 'functions.js', array( 'jquery' ), '1.0', true );
	wp_localize_script( $functions_script, 'openers', $data );
	wp_enqueue_script( $functions_script );

}
add_action( 'wp_enqueue_scripts', 'divi_child_theme_enqueue_styles' );