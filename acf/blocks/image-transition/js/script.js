/* global jQuery gsap*/
( function( $ ) {
	const initializeWithBackground = function() {
		const withBackground = document.querySelector( '.with-background' );
		if ( $( withBackground ).length > 0 ) {
			const images = document.querySelectorAll( '.with-background .featured-image' );
			$( images ).each( function() {
				const element = $( this );
				gsap.to( element, {
					height: '100%',
					duration: 1,
					ease: 'power2.inOut',
					scrollTrigger: {
						trigger: this,
						start: 'top center',
						end: 'top center',
						scrub: 3,
					},
				} );
			} );
		}
	};

	const initializeImageScale = function() {
		const withBackground = document.querySelector( '.scroll-image-scale' );
		if ( $( withBackground ).length > 0 ) {
			const images = document.querySelectorAll( '.scroll-image-scale .featured-image' );
			$( images ).each( function() {
				const element = $( this );
				gsap.from( element, {
					scale: 0.5,
					scrollTrigger: {
						trigger: '.scroll-image-scale',
						start: 'top center',
						end: '75% center',
						scrub: 2,
					},
				} );
			} );
		}
	};

	const initializeParallaxEffect = function() {
		const parallaxEffect = document.querySelector( '.parallax-effect' );
		if ( parallaxEffect ) {
			const images = parallaxEffect.querySelectorAll( '.parallax-effect .image-container' );
			// Iterate through each image container
			images.forEach( ( container ) => {
				const element = container.querySelector( '.parallax-effect .featured-image' );
				if ( element ) {
					gsap.fromTo( element,
						{
							y: 0,
						},
						{
							y: () => element.offsetHeight - container.offsetHeight,
							scrollTrigger: {
								trigger: container,
								start: 'top bottom',
								end: 'bottom top',
								scrub: 1,
							},
						}
					);
				}
			} );
		}
	};

	const initializeRevealParallaxEffect = function() {
		const imageRevealParallax = document.querySelector( '.image-reveal-parallax' );
		if ( imageRevealParallax ) {
			const images = imageRevealParallax.querySelectorAll( '.image-reveal-parallax .image-container' );
			// Iterate through each image container
			images.forEach( ( container ) => {
				gsap.from( $( container ).find( '.white-background' ), {
					width: '100%',
					duration: 1,
					ease: 'power2.inOut',
					scrollTrigger: {
						trigger: container,
						start: 'top center',
						end: 'top center',
						scrub: 4,
					},
				} );
				const element = container.querySelector( '.image-reveal-parallax .featured-image' );
				if ( element ) {
					gsap.fromTo( element,
						{
							y: 0,
						},
						{
							y: () => element.offsetHeight - container.offsetHeight,
							scrollTrigger: {
								trigger: container,
								start: 'top bottom',
								end: 'bottom top',
								scrub: 1,
							},
						}
					);
				}
			} );
		}
	};

	const initializeFullParallax = function() {
		const parallaxEffect = document.querySelector( '.full-parallax' );
		if ( parallaxEffect ) {
			const images = parallaxEffect.querySelectorAll( '.full-parallax .image-container' );
			// Iterate through each image container
			images.forEach( ( container ) => {
				const element = container.querySelector( '.full-parallax .featured-image' );
				if ( element ) {
					gsap.fromTo( element,
						{
							y: 0,
						},
						{
							y: () => element.offsetHeight - container.offsetHeight,
							scrollTrigger: {
								trigger: container,
								start: 'top bottom',
								end: 'bottom top',
								scrub: 1,
							},
						}
					);
				}
			} );
		}
	};

	$( document ).ready( function() {
		initializeImageScale();
		initializeWithBackground();
		initializeParallaxEffect();
		initializeRevealParallaxEffect();
		initializeFullParallax();
	} );

	if ( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=image_transition', initializeImageScale );
		window.acf.addAction( 'render_block_preview/type=image_transition', initializeWithBackground );
		window.acf.addAction( 'render_block_preview/type=image_transition', initializeParallaxEffect );
		window.acf.addAction( 'render_block_preview/type=image_transition', initializeRevealParallaxEffect );
		window.acf.addAction( 'render_block_preview/type=image_transition', initializeRevealParallaxEffect );
	}
}( jQuery ) );
