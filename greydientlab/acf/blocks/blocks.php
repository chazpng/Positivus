<?php
/**
 * Initialize ACF Custom Blocks
 * Learn more about blocks here:
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package greydientlab
 */

/**
 * Register Custom ACF Blocks.
 */
function register_acf_blocks() {
	$path  = dirname( __FILE__ );
	$files = array_diff( scandir( $path ), array( '.', '..', '.blocks.php' ) );

	foreach ( $files as $file ) {
		register_block_type( dirname( __FILE__ ) . '/' . $file );
	}
}
add_action( 'init', 'register_acf_blocks' );

/**
 * Register block script
 */
function register_block_script() {
	// TODO: loop to include scripts.
	wp_register_script( 'carousel-logo', get_template_directory_uri() . '/acf/blocks/carousel-logo/js/script.js', array( 'jquery', 'acf', 'slick' ), '1.0.0', true );
}
add_action( 'init', 'register_block_script' );
