<?php
/*
 * Declare Custom Constants and Variables intended for Global Use
 *
 */
define( 'FCI_TEMPLATE_DIRECTORY_URI', get_template_directory_uri() );
define( 'FCI_THEME_DIRECTORY_URI', get_stylesheet_directory_uri() );
$fci_theme = wp_get_theme();


/*
 * fci_enqueue_scripts()
 *
 * Parent theme enqueues scripts and styles get_stylesheet_directory_uri() causing 404s
 * Deregister and re-register/enqueue with URLs for parent theme via get_template_directory_uri().
 *
 */
function fci_enqueue_scripts() {
	
	global $fci_theme;

	/* Deregister & Dequeue styles and scripts enqueued by parent theme */
	wp_dequeue_style( 'understrap-styles' );
	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );
	wp_deregister_style( 'understrap-styles' );
	
	/* Re-enqueue parent styles and scripts with proper URLs */
	wp_enqueue_style( 'understrap-styles', FCI_TEMPLATE_DIRECTORY_URI . '/css/theme.min.css', array(), $fci_theme->parent()->get( 'Version' ) );
	wp_enqueue_script( 'understrap-scripts', FCI_TEMPLATE_DIRECTORY_URI . '/js/theme.min.js', array(), $fci_theme->parent()->get( 'Version' ), true );

	/* Enqueue child theme's style.css file */
	wp_enqueue_style( 'understrap-child-styles', FCI_THEME_DIRECTORY_URI . '/style.css', array( 'understrap-styles' ), $fci_theme->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'fci_enqueue_scripts' );