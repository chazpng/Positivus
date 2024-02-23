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
	const initializePricingStyle = function() {
		const firstVal = $( '.two-tier-class:first-child' ).data( 'value' );
		const secondVal = $( '.two-tier-class:last-child' ).data( 'value' );

		if ( firstVal > secondVal ) {
			$( '.two-tier-class:last-child' ).addClass( 'normal-style' );
			$( '.two-tier-class:first-child' ).addClass( 'highlighted-style' );
		} else if ( firstVal === secondVal ) {
			$( '.two-tier-class:first-child' ).addClass( 'default-1' );
			$( '.two-tier-class:last-child' ).addClass( 'default-2' );
		} else {
			$( '.two-tier-class:first-child' ).addClass( 'normal-style' );
			$( '.two-tier-class:last-child' ).addClass( 'highlighted-style' );
		}
	};

	$( document ).ready( function() {
		initializePricing();
		initializePricingStyle();
	} );

	if ( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=pricing', initializePricing );
		window.acf.addAction( 'render_block_preview/type=pricing', initializePricingStyle );
	}
}( jQuery ) );
