/* global jQuery */
( function( $ ) {
	const initializePricing = function() {
		$( '.card-1' ).removeClass( 'hidden' );
		$( '.gl-b-pricing-section .cursor-pointer' ).click( function() {
			$( '.gl-b-pricing-section .cursor-pointer' ).removeClass( 'bg-indigo-600 text-white' );
			$( '.gl-b-pricing-section .cursor-pointer' ).addClass( 'text-gray-500' );
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

		$( '.header-border' ).each( function( index, element ) {
			if ( $( element ).hasClass( 'border-indigo-600' ) ) {
				$( '.body-border-' + index ).removeClass( 'ring-1 ring-gray-900/10' ).addClass( 'ring-2 ring-indigo-600' );
				$( '.li-text-' + ( index + 1 ) ).removeClass( 'text-gray-600 font-normal' ).addClass( 'text-indigo-600 font-semibold' );
			} else if ( $( element ).hasClass( 'border-indigo-500' ) && $( element ).hasClass( 'dark' ) ) {
				$( '.body-border-' + index ).removeClass( 'ring-1 ring-gray-900/10' ).addClass( 'ring-1 ring-indigo-400' );
				$( '.li-text-' + ( index + 1 ) ).removeClass( 'text-gray-300 font-normal' ).addClass( 'text-indigo-500 font-semibold' );
			} else if ( $( element ).hasClass( 'dark' ) ) {
				$( '.body-border-' + index ).removeClass( 'ring-2 ring-indigo-500' ).addClass( 'ring-1 ring-white/5' );
				$( '.li-text-' + ( index + 1 ) ).removeClass( 'text-indigo-500 font-semibold' ).addClass( ' text-gray-300 font-normal' );
			} else {
				$( '.body-border-' + index ).removeClass( 'ring-2 ring-indigo-600' ).addClass( 'ring-1 ring-gray-900/10' );
				$( '.li-text-' + ( index + 1 ) ).removeClass( 'text-indigo-600 font-semibold' ).addClass( 'text-gray-600 font-normal' );
			}
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
