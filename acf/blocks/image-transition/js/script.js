/* global jQuery gsap*/
( function( $ ) {
	const initializeWithBackground = function() {
		const withBackground = document.querySelector( '.with-background' );
		if ( $( withBackground ).length > 0 ) {
			const images = document.querySelectorAll( '.with-background .featured-image' );
			$( images ).each( function( index ) {
				const element = $( this );
				gsap.to( element, {
					height: '100%',
					duration: 1,
					ease: 'power2.inOut',
					delay: 0.5 * index,
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

	const initializeWithBackground2 = function() {
		const withBackground = document.querySelector( '.with-background-two' );
		if ( $( withBackground ).length > 0 ) {
			const images = document.querySelectorAll( '.with-background-two .image-container' );
			const tl = gsap.timeline( {
				scrollTrigger: {
					trigger: '.with-background-two',
					start: '25% center',
					end: '25% center',
					scrub: 5,
				},
			} );
			$( images ).each( function() {
				const whiteBackground = $( this ).find( '.white-background' );
				const purpleBackground = $( this ).find( '.purple-background' );
				tl.to( whiteBackground, {
					height: '0',
					duration: 5,
					ease: 'power2.inOut',
				}, 0 );
				tl.to( purpleBackground, {
					width: '0',
					duration: 3,
					ease: 'power2.inOut',
				}, 5 );
			} );
		}
	};

	const initializeImageComparison = function() {
		const imageComparison = document.querySelector( '.image-comparison' );
		if ( $( imageComparison ).length > 0 ) {
			const imageContainer = document.querySelector( '.image-comparison .image-main-container' );
			$( imageContainer ).on( 'mousemove', function( e ) {
				const relativeX = e.pageX - $( this ).offset().left;
				$( '.comparison-line' ).css( 'left', relativeX );
				$( '.comparison-image' ).css( 'width', relativeX );
			} );
		}
	};

	const initializeReverseScroll = function() {
		const imageComparison = document.querySelector( '.reverse-auto-scroll' );
		if ( $( imageComparison ).length > 0 ) {
			let timer = null;
			const scrollArea = $( '.reverse-auto-scroll' );
			const win = $( window );
			let scrollMax = scrollArea[ 0 ].scrollHeight - scrollArea.innerHeight();
			let scrollTime = ( scrollMax / 1000 ) * 20000;

			const initSetting = function() {
				const boxHeight = $( '.box.up' ).innerHeight();
				$( '.box' ).height( boxHeight );
				$( '.wrapper' ).height( boxHeight / 2 );
				scrollMax = scrollArea[ 0 ].scrollHeight - scrollArea.innerHeight();
				scrollTime = ( scrollMax / 1000 ) * 20000;
				$( '.down' ).css( { 'margin-top': scrollMax * ( -1 ) } );
				autoScroll();
			};
			function autoScroll() {
				const ws = scrollArea.scrollTop();
				const autoScrollTime = ws === 0 ? scrollTime : ( scrollMax - ws ) / scrollMax * scrollTime;
				scrollArea.animate( { scrollTop: scrollMax }, autoScrollTime, 'linear' );
			}

			function preventScrollBeyondBounds( event ) {
				const currentScroll = scrollArea.scrollTop();
				if ( ( currentScroll <= 0 && event.originalEvent.deltaY < 0 ) ||
					( currentScroll >= scrollMax && event.originalEvent.deltaY > 0 ) ) {
					event.preventDefault();
				}
			}
			scrollArea.on( 'scroll', function( e ) {
				$( '.down' ).css( 'transform', 'translate3d(0,' + ( scrollArea.scrollTop() * 2 ) + 'px, 0)' );
				preventScrollBeyondBounds( e );
			} );
			scrollArea.on( 'wheel', function( e ) {
				preventScrollBeyondBounds( e );
				scrollArea.stop();
				if ( timer !== null ) {
					clearTimeout( timer );
				}
				timer = setTimeout( function() {
					autoScroll();
					timer = null;
				}, 500 );
			} );
			win.on( 'load', initSetting );
		}
	};

	const initializePixelated = function() {
		const pixelatedReveal = document.querySelector( '.pixelated' );
		if ( $( pixelatedReveal ).length > 0 ) {
			const images = document.querySelectorAll( '.pixelated .tiled-image' );
			$( images ).each( function() {
				const element = $( this );
				gsap.to( element, {
					opacity: 0,
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

	const initializeTiled = function() {
		const tiledReveal = document.querySelector( '.tiled' );
		if ( $( tiledReveal ).length > 0 ) {
			const boxes = document.querySelectorAll( '.tiled .boxes' );
			const shuffledBoxes = Array.from( boxes ).sort( () => Math.random() - 0.5 );
			gsap.to( shuffledBoxes, {
				scrollTrigger: {
					trigger: '.tiled',
					start: 'top center',
					end: 'bottom center',
					toggleActions: 'play none none reverse',
				},
				opacity: 0,
				duration: 1,
				stagger: {
					each: 0.015,
					from: 'random',
				},
				ease: 'power4.inOut',
			} );
		}
	};

	$( document ).ready( function() {
		initializeImageScale();
		initializeWithBackground();
		initializeWithBackground2();
		initializeParallaxEffect();
		initializeRevealParallaxEffect();
		initializeFullParallax();
		initializeImageComparison();
		initializeReverseScroll();
		initializePixelated();
		initializeTiled();
	} );

	if ( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=image_transition', initializeImageScale );
		window.acf.addAction( 'render_block_preview/type=image_transition', initializeWithBackground );
		window.acf.addAction( 'render_block_preview/type=image_transition', initializeWithBackground2 );
		window.acf.addAction( 'render_block_preview/type=image_transition', initializeParallaxEffect );
		window.acf.addAction( 'render_block_preview/type=image_transition', initializeRevealParallaxEffect );
		window.acf.addAction( 'render_block_preview/type=image_transition', initializeImageComparison );
		window.acf.addAction( 'render_block_preview/type=image_transition', initializeReverseScroll );
		window.acf.addAction( 'render_block_preview/type=image_transition', initializePixelated );
		window.acf.addAction( 'render_block_preview/type=image_transition', initializeTiled );
	}
}( jQuery ) );
