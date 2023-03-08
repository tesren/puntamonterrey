<?php
/**
 * Punta Monterrey functions and definitions
 */


if ( ! function_exists( 'puntamont_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function puntamont_theme_support() {

		// Add support 
		add_theme_support('title-tag');
		add_theme_support('custom-logo');
		add_theme_support('post-thumbnails');
		add_theme_support( 'custom-header' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}

endif;

add_action( 'after_setup_theme', 'puntamont_theme_support' );


//ENABLE CUSTOM MENU

function puntamont_menus()
{    
    $locations = array(
        'primary' => __( 'Primary Menu', 'PuntaMonterrey' ),
		'footer' => "Footer menu Items",
    );
    
    register_nav_menus( $locations );
}

add_action('init', 'puntamont_menus');


if ( ! function_exists( 'puntamont_theme_styles' ) ) :

	/*
	* Enqueue styles.
	*/

	function puntamont_theme_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_register_style(
			'puntamonterrey-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'puntamonterrey-style' );
    	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() .'/assets/css/bootstrap.min.css' );
    	//wp_enqueue_style( 'splide-css', get_template_directory_uri() .'/assets/css/splide.min.css' );
    	wp_enqueue_style( 'puntamont-css', get_template_directory_uri() .'/assets/css/puntamont_style.css' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'puntamont_theme_styles' );


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


/**
 * Punta Monterrey Custom Post Types
*/

require get_template_directory().'/inc/room-cpt.php';
require get_template_directory().'/inc/messages-cpt.php';


/**
 * Punta Monterrey Custom Functions
*/
function get_list_terms($postID, $taxonomy){
	$terms_list = array_reverse(wp_get_post_terms( $postID, $taxonomy ) );

	$j =1;
	if ( ! empty( $terms_list ) && ! is_wp_error( $terms_list ) ) {
		foreach ( $terms_list as $term ) {
			echo $term->name;
			if( $j < count($terms_list) ){
				echo ', ';
			}
			$j++;
		}
	}
}

function get_property_type($postID, $taxonomy){
        
	$terms_list = array_reverse(wp_get_post_terms( $postID, $taxonomy ) );

	if ( ! empty( $terms_list ) && ! is_wp_error( $terms_list ) ) {
		foreach ( $terms_list as $term ) {
			echo $term->name;
		}
	}
}