/* global jQuery gsap SplitType*/
( function( $ ) {
	// all functions is equivalent to each class. You can just copy the specific function based on your needs.
	const initializeTrailing = function() {
		new SplitType( '.gl-a-trailing', { types: 'lines, chars' } );
		$( '.gl-a-trailing' ).each( function() {
			const characters = $( this ).find( '.char' );
			if ( characters.length > 0 ) {
				gsap.to( characters, {
					opacity: 1,
					stagger: 0.0125,
				} );
			}
		} );
	};

	$( '.gl-b-text-transition button' ).on( 'click', function() {
		initializeTrailing();
	} );

	$( document ).ready( function() {
		initializeTrailing();
	} );

	if ( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=text_transition', initializeTrailing );
	}
}( jQuery ) );
