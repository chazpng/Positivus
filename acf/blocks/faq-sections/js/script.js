/* global jQuery */
( function( $ ) {
	const initializeFaq = function() {
		$( '.faq' ).hide();
		$( '#faq-1' ).show();
		$( '.faq-button' ).on( 'click', function() {
			$( this ).parent().next( '.faq' ).slideToggle();
			$( this ).find( '.plus' ).toggleClass( 'hidden' );
			$( this ).find( '.minus' ).toggleClass( 'hidden' );
		} );
	};

	$( document ).ready( function() {
		initializeFaq();
	} );

	if ( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=faq_sections', initializeFaq );
	}
}( jQuery ) );
