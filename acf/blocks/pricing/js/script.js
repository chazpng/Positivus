/* global jQuery */
( function( $ ) {
	const initializePricing = function() {
		$( '.card-1' ).removeClass( 'hidden' );
		$( '.cursor-pointer' ).click( function() {
			$( '.cursor-pointer' ).removeClass( 'bg-indigo-600 text-white' );
			$( '.cursor-pointer' ).addClass( 'text-gray-500' );
			$( this ).addClass( 'bg-indigo-600 text-white' );
			const radioButton = $( this ).find( '.subscription-input' );
			radioButton.prop( 'checked', true );
			$( '.cards' ).each( function() {
				if ( $( this ).attr( 'id' ) !== radioButton.val() ) {
					$( this ).addClass( 'hidden' );
				} else {
					$( this ).removeClass( 'hidden' );
				}
			} );
		} );
	};

	$( document ).ready( function() {
		initializePricing();
	} );

	if ( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=pricing', initializePricing );
	}
}( jQuery ) );
