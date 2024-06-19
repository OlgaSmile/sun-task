<?php

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'my_theme_styles' );
 
function my_theme_styles() {

	wp_enqueue_style( 'main', get_stylesheet_uri() );
  wp_enqueue_style( 'my_theme-style', get_template_directory_uri() . '/assets/styles/main.css', array('main') );

  wp_enqueue_script( 'my_theme-scripts', get_template_directory_uri() . '/assets/scripts/main.js', array(), false, true );

  if (is_front_page(  )) {
    wp_enqueue_style('hero-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/hero.css', array('main'));
    wp_enqueue_style('description-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/description-section.css', array('main'));
  }
}

/** add fonts */
function add_google_fonts() {
  wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,300;1,600&family=Italiana&display=swap', [], null );
}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

/** Register menus */
function my_theme_menus() {
  $locations = array(
    'header' => __( 'Header Menu', 'my-theme' ),
  );

  register_nav_menus( $locations );
}

add_action( 'init', 'my_theme_menus');


/** Add custom logo */
if ( ! function_exists('my_theme_setup')) {
  function my_theme_setup() {
    add_theme_support( 'custom-logo', 
      array(
        'height'      => 40,
        'width'       => 180,
        'flex-width'  => true,
        'flex-height' => true,        
      )
    );
    add_theme_support( 'title-tag' );    
  }
  add_action( 'after_setup_theme', 'my_theme_setup' );
}