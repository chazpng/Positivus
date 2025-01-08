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
	const initializeSimpleFade = function() {
		$( '.gl-a-simple-fade' ).each( function() {
			const element = $( this );
			gsap.from( element, {
				opacity: 0,
				duration: 1,
				ease: 'power2.in',
			} );
		} );
	};
	const initializeSimpleFadeBottom = function() {
		$( '.gl-a-simple-fade-bottom' ).each( function() {
			const element = $( this );
			gsap.from( element, {
				opacity: 0,
				y: 20,
				duration: 1,
			} );
		} );
	};

	$( '.gl-b-text-transition button' ).on( 'click', function() {
		initializeTrailing();
		initializeSimpleFade();
		initializeSimpleFadeBottom();
	} );

	$( document ).ready( function() {
		initializeTrailing();
		initializeSimpleFade();
		initializeSimpleFadeBottom();
	} );

	if ( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=text_transition', initializeTrailing );
		window.acf.addAction( 'render_block_preview/type=text_transition', initializeSimpleFade );
		window.acf.addAction( 'render_block_preview/type=text_transition', initializeSimpleFadeBottom );
	}
}( jQuery ) );
