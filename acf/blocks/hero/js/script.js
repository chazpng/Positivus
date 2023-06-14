/* global jQuery */
( function( $ ) {
	const initializeHeader = function() {

	};

	$( document ).ready( function() {
		initializeHeader();
	} );

	if ( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=header', initializeHeader );
	}
}( jQuery ) );
