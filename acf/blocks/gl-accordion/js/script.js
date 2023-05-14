/* global jQuery */
( function( $ ) {
	const initializeAccordion = function( $block ) {

	};

	$( document ).ready( function() {
		initializeAccordion();
	} );

	if ( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=gl-container', initializeAccordion );
	}
}( jQuery ) );
