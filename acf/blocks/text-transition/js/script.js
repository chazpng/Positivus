/* global jQuery gsap SplitType*/
( function( $ ) {
	// all functions is equivalent to each class. You can just copy the specific function based on your needs.
	const initializeTrailing = function() {
		new SplitType( '.gl-a-trailing, .gl-a-trailing-top, .gl-a-trailing-bottom', { types: 'lines, chars' } );
		$( '.gl-a-trailing, .gl-a-trailing-top, .gl-a-trailing-bottom' ).each( function() {
			const characters = $( this ).find( '.char' );
			if ( characters.length > 0 ) {
				gsap.to( characters, {
					opacity: 1,
					y: 0,
					stagger: 0.0125,
				} );
			}
		} );
	};

	const initializeSimpleFade = function() {
		$( '.gl-a-simple-fade, .gl-a-simple-fade-bottom, .gl-a-simple-fade-top' ).each( function() {
			const element = $( this );
			gsap.from( element, {
				opacity: 0,
				y: 40,
				duration: 1,
				ease: 'power2.in',
			} );
		} );
	};

	const initializeRevealSlow = function() {
		new SplitType( '.gl-a-reveal-slow', { types: 'lines, chars' } );
		$( '.gl-a-reveal-slow .line' ).each( function( index ) {
			const element = $( this ).find( '.char' );
			gsap.from( element, {
				y: '120%',
				duration: 1.8,
				ease: 'power4.easeOut',
				delay: 0.18 * index,
			} );
		} );
	};

	const initializeRevealFast = function() {
		new SplitType( '.gl-a-reveal-fast', { types: 'lines, chars' } );
		$( '.gl-a-reveal-fast .line' ).each( function( index ) {
			const element = $( this ).find( '.char' );
			gsap.from( element, {
				y: '120%',
				duration: 1,
				ease: 'power4.easeOut',
				delay: 0.2 * index,
			} );
		} );
	};

	const initializeRevealSkew = function() {
		new SplitType( '.gl-a-reveal-skew', { types: 'lines, chars' } );
		$( '.gl-a-reveal-skew .line' ).each( function() {
			const element = $( this ).find( '.char' );
			gsap.from( element, {
				y: '120%',
				duration: 1,
				ease: 'power4.Out',
				skewY: 10,
				stagger: {
					amount: 0.2,
				},
			} );
		} );
	};

	const initializeRevealScale = function() {
		new SplitType( '.gl-a-reveal-scale', { types: 'lines, chars' } );
		const element = $( '.gl-a-reveal-scale' ).find( '.char' );
		gsap.from( element, {
			duration: 0.8,
			opacity: 0,
			scale: 0.5,
			y: 0,
			transformOrigin: '50% 50%',
			ease: 'back',
			stagger: 0.01,
		} );
	};

	$( '.gl-b-text-transition button' ).on( 'click', function() {
		initializeTrailing();
		initializeSimpleFade();
		initializeRevealSlow();
		initializeRevealFast();
		initializeRevealSkew();
		initializeRevealScale();
	} );

	$( document ).ready( function() {
		initializeTrailing();
		initializeSimpleFade();
		initializeRevealSlow();
		initializeRevealFast();
		initializeRevealSkew();
		initializeRevealScale();
	} );

	if ( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=text_transition', initializeTrailing );
		window.acf.addAction( 'render_block_preview/type=text_transition', initializeSimpleFade );
		window.acf.addAction( 'render_block_preview/type=text_transition', initializeRevealSlow );
		window.acf.addAction( 'render_block_preview/type=text_transition', initializeRevealFast );
		window.acf.addAction( 'render_block_preview/type=text_transition', initializeRevealSkew );
		window.acf.addAction( 'render_block_preview/type=text_transition', initializeRevealScale );
	}
}( jQuery ) );
