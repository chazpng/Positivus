/* global jQuery */
( function( $ ) {
	const initializeCta = function() {

	};

	$( document ).ready( function() {
		initializeCta();
	} );

	if ( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=cta_sections', initializeCta );
	}
}( jQuery ) );
