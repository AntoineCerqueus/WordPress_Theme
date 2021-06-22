<?php
// This function enqueues the Normalize.css for use. 
//The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.


// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

function add_theme_scripts() {


	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');

	wp_enqueue_style( 'style', get_template_directory_uri() . '/mediaqueries.css');

	wp_enqueue_style( 'style', get_template_directory_uri() . '/normalize.css');


	// wp_enqueue_script( 'script', get_template_directory_uri() . 'scripts.js');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts');



