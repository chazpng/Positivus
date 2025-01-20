/* global jQuery gsap SplitType*/
( function( $ ) {
	// all functions is equivalent to each class. You can just copy the specific function based on your needs.
	//note that all functions dont have scrollTrigger yet.
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

	const initializeBurnIn = function() {
		new SplitType( '.gl-a-burn-in', { types: 'lines, chars' } );
		$( '.gl-a-burn-in' ).each( function() {
			const characters = $( this ).find( '.char' );
			const shuffledChar = Array.from( characters ).sort( () => Math.random() - 0.5 );
			const tl = gsap.timeline();
			tl.addLabel( 'frame1' )
				.to( shuffledChar, { duration: 0, stagger: 0, autoAlpha: 0, y: 5, textShadow: '0px 0px 16px rgb(0, 0, 0)', color: 'transparent' }, 'frame1' )
				.addLabel( 'frame2' )
				.to( shuffledChar, { duration: 0.5, stagger: 0.015, autoAlpha: 1, y: 0, textShadow: '0px 0px 0px rgb(0, 0, 0)', color: '000' } );
		} );
	};

	const initializeRandomSkew = function() {
		new SplitType( '.gl-a-random-skew', { types: 'lines, chars' } );
		$( '.gl-a-random-skew' ).each( function() {
			const characters = $( this ).find( '.char' );
			const shuffledChar = Array.from( characters ).sort( () => Math.random() - 0.5 );
			const tl = gsap.timeline();
			tl.addLabel( 'frame3' )
				.to( shuffledChar, { duration: 0, stagger: 0, autoAlpha: 0, rotationX: '-60px', color: '000' }, 'frame3' )
				.addLabel( 'frame4' )
				.to( shuffledChar, { duration: 0.5, stagger: 0.015, autoAlpha: 1, rotationX: 0, color: '000' } );
		} );
	};

	const initializeSimpleFade = function() {
		$( '.gl-a-simple-fade' ).each( function() {
			const element = $( this );
			gsap.from( element, {
				opacity: 0,
				y: 0,
				duration: 1,
				ease: 'power2.in',
			} );
		} );

		$( '.gl-a-simple-fade-bottom' ).each( function() {
			const element = $( this );
			gsap.from( element, {
				opacity: 0,
				y: 40,
				duration: 1,
				ease: 'power2.in',
			} );
		} );

		$( '.gl-a-simple-fade-top' ).each( function() {
			const element = $( this );
			gsap.from( element, {
				opacity: 0,
				y: -40,
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

	const initializeTextCarousel = function() {
		// note for this animation you need to consider the width of the li, the gap between text. The x position should be based on the length of the li.
		const list = document.querySelector( '.gl-a-text-carousel ul' );
		gsap.to( list, {
			duration: 30,
			x: '-2980px',
			repeat: -1,
			ease: 'linear',
		} );
	};

	const initializeTextFall = function() {
		const titleList = gsap.utils.toArray( '.gl-a-text-fall ul li h1' );
		const titlesTl = gsap.timeline( { repeat: -1 } );
		gsap.registerEffect( {
			name: 'rotateIn',
			extendTimeline: true,
			defaults: {
				duration: 1,
				rotationY: 0,
				rotationX: 0,
				transformOrigin: '50% 50%',
				ease: 'back',
				parent: '.wrap',
			},
			effect: ( targets, config ) => {
				gsap.set( config.parent, { perspective: 800 } );
				const tl = gsap.timeline();
				tl.from( targets, {
					duration: config.duration,
					rotationY: config.rotationY,
					rotationX: config.rotationX,
					transformOrigin: config.transformOrigin,
					ease: config.ease,
					stagger: {
						each: 0.06,
					},
				} );

				tl.from(
					targets,
					{
						duration: 0.4,
						autoAlpha: 0,
						ease: 'none',
						stagger: {
							each: 0.05,
						},
					},
					0
				);
				return tl;
			},
		} );
		gsap.registerEffect( {
			name: 'rotateOut',
			extendTimeline: true,
			defaults: {
				duration: 0.5,
				x: 0,
				y: 0,
				rotationY: 0,
				rotationX: 0,
				rotationZ: 0,
				transformOrigin: '50% 50%',
				ease: 'power1.in',
				parent: '.wrap',
			},
			effect: ( targets, config ) => {
				gsap.set( config.parent, { perspective: 800 } );
				const tl = gsap.timeline();
				tl.to( targets, {
					x: config.x,
					y: config.y,
					rotationY: config.rotationY,
					rotationX: config.rotationX,
					rotationZ: config.rotationZ,
					transformOrigin: config.transformOrigin,
					ease: config.ease,
					stagger: {
						each: 0.04,
					},
				} );

				tl.to(
					targets,
					{
						duration: 0.45,
						opacity: 0,
						ease: 'none',
						stagger: {
							amount: 0.02,
						},
					},
					0
				);
				return tl;
			},
		} );

		function splitElements() {
			gsap.set( titleList, { autoAlpha: 1 } );
			$( '.gl-a-text-fall ul' ).removeClass( 'invisible' );
			new SplitType( '.gl-a-text-fall ul li h1', { types: 'lines, words, chars' } );
			titleList.forEach( ( element, dex ) => {
				titlesTl
					.rotateIn( $( element ).find( '.word' ), {
						rotationX: 90,
						transformOrigin: '100% 0',
						ease: 'back(2.3)',
					}, dex > 0 ? '-=0.38' : 0 )
					.rotateOut( $( element ).find( '.word' ), {
						y: 20,
						rotationX: -100,
						transformOrigin: '100% 100%',
					} );
			} );
		}
		splitElements();
	};

	$( '.gl-b-text-transition button' ).on( 'click', function() {
		initializeTrailing();
		initializeSimpleFade();
		initializeRevealSlow();
		initializeRevealFast();
		initializeRevealSkew();
		initializeRevealScale();
		initializeTextCarousel();
		initializeTextFall();
		initializeBurnIn();
		initializeRandomSkew();
	} );

	$( document ).ready( function() {
		initializeTrailing();
		initializeSimpleFade();
		initializeRevealSlow();
		initializeRevealFast();
		initializeRevealSkew();
		initializeRevealScale();
		initializeTextCarousel();
		initializeTextFall();
		initializeBurnIn();
		initializeRandomSkew();
	} );

	if ( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=text_transition', initializeTrailing );
		window.acf.addAction( 'render_block_preview/type=text_transition', initializeSimpleFade );
		window.acf.addAction( 'render_block_preview/type=text_transition', initializeRevealSlow );
		window.acf.addAction( 'render_block_preview/type=text_transition', initializeRevealFast );
		window.acf.addAction( 'render_block_preview/type=text_transition', initializeRevealSkew );
		window.acf.addAction( 'render_block_preview/type=text_transition', initializeRevealScale );
		window.acf.addAction( 'render_block_preview/type=text_transition', initializeTextCarousel );
		window.acf.addAction( 'render_block_preview/type=text_transition', initializeTextFall );
		window.acf.addAction( 'render_block_preview/type=text_transition', initializeBurnIn );
		window.acf.addAction( 'render_block_preview/type=text_transition', initializeRandomSkew );
	}
}( jQuery ) );
