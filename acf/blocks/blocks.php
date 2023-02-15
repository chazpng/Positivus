<?php
/**
 * Initialize ACF Custom Blocks
 * Learn more about blocks here:
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
	// wp_register_script( 'journey', get_template_directory_uri() . '/custom-blocks/journey/js/script.min.js', array( 'jquery', 'acf' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'register_block_script', 999 );
