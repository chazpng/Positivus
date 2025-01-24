/* global jQuery gsap SplitType*/
( function( $ ) {
	const initializeTextTransition = function() {
		const textTransition = document.querySelector( '.gl-text-transition-generator' );
		const textTarget = document.querySelector( '.text-transition-outcome' );
		let isAnimating = false;
		let xValue = 0;
		let yValue = 0;
		let skewXValue = 0;
		let skewYValue = 0;
		let rotateX = 0;
		let rotateY = 0;
		let opacityValue = 1;
		let scaleValue = '1';
		let durationValue = 1;
		let staggerValue = 0.02;
		let easingValue1 = 'power0';
		let easingValue2 = 'in';
		let easingValue = `${ easingValue1 }.${ easingValue2 }`;
		let splitTextType = 'none';
		let splitInstance;
		splitInstance = new SplitType( textTarget, { types: 'lines, words, chars' } );

		if ( $( textTransition ).length > 0 ) {
			$( '#textareaBody' ).on( 'keyup', function() {
				if ( splitInstance ) {
					splitInstance.revert();
				}
				const value = $( this ).val().trim();
				if ( value === '' ) {
					$( textTarget ).html( 'Your Text Here' );
				} else {
					$( textTarget ).html( value );
				}
				splitInstance = new SplitType( textTarget, { types: 'lines, words, chars' } );
				setTarget();
			} );

			$( '#xValue' ).on( 'keyup', function() {
				const value = $( this ).val().trim();
				if ( value === '' ) {
					xValue = 0;
					$( this ).val( 0 );
				} else {
					xValue = value;
				}
				setTarget();
			} );

			$( '#yValue' ).on( 'keyup', function() {
				const value = $( this ).val().trim();
				if ( value === '' ) {
					yValue = 0;
					$( this ).val( 0 );
				} else {
					yValue = value;
				}
				setTarget();
			} );

			$( '#skewX' ).on( 'keyup', function() {
				const value = $( this ).val().trim();
				if ( value === '' ) {
					skewXValue = 0;
					$( this ).val( 0 );
				} else {
					skewXValue = value;
				}
				setTarget();
			} );

			$( '#skewY' ).on( 'keyup', function() {
				const value = $( this ).val().trim();
				if ( value === '' ) {
					skewYValue = 0;
					$( this ).val( 0 );
				} else {
					skewYValue = value;
				}
				setTarget();
			} );

			$( '#rotateX' ).on( 'keyup', function() {
				const value = $( this ).val().trim();
				if ( value === '' ) {
					rotateX = 0;
					$( this ).val( 0 );
				} else {
					rotateX = value;
				}
				setTarget();
			} );

			$( '#rotateY' ).on( 'keyup', function() {
				const value = $( this ).val().trim();
				if ( value === '' ) {
					rotateY = 0;
					$( this ).val( 0 );
				} else {
					rotateY = value;
				}
				gsap.set( textTarget, {
					rotateY,
				} );
			} );

			$( '#opacityValue' ).on( 'input', function() {
				const value = $( this ).val().trim();
				if ( value === '' ) {
					opacityValue = 1;
				} else {
					opacityValue = value;
					$( '.opacity-value' ).html( value );
				}
				setTarget();
			} );

			$( '#scaleValue' ).on( 'input', function() {
				const value = $( this ).val().trim();
				if ( value === '' ) {
					scaleValue = '1';
				} else {
					scaleValue = value;
					$( '.scale-value' ).html( value );
				}
				setTarget();
			} );

			$( '#durationValue' ).on( 'input', function() {
				const value = $( this ).val().trim();
				if ( value === '' ) {
					durationValue = '0.5';
				} else {
					durationValue = value;
					$( '.duration-value' ).html( value );
				}
			} );

			$( '#easingOptions1' ).change( function() {
				easingValue1 = $( this ).val();
				easingValue = `${ easingValue1 }.${ easingValue2 }`;
			} );

			$( '#easingOptions2' ).change( function() {
				easingValue2 = $( this ).val();
				easingValue = `${ easingValue1 }.${ easingValue2 }`;
			} );

			$( '#customEase' ).on( 'keyup', function() {
				const value = $( this ).val().trim();
				if ( value === '' ) {
					easingValue = 'linear';
				} else {
					easingValue = value;
				}
			} );

			$( '#staggerValue' ).on( 'keyup', function() {
				const value = $( this ).val().trim();
				if ( value === '' ) {
					staggerValue = 0.02;
					$( value ).val( 0.02 );
				} else {
					staggerValue = value;
				}
			} );

			$( '#splitTextType' ).change( function() {
				resetTransition();
				splitTextType = $( this ).val();
				if ( splitTextType === 'none' ) {
					$( '.stagger-function, .overflow-hide-function' ).addClass( 'hidden' ).removeClass( 'flex' );
				} else {
					$( '.stagger-function, .overflow-hide-function' ).removeClass( 'hidden' ).addClass( 'flex' );
				}
				setTarget();
			} );

			$( '#isCustomEase' ).change( function() {
				if ( $( '#isCustomEase' ).is( ':checked' ) ) {
					$( '.select-ease-function' ).addClass( 'hidden' ).removeClass( 'flex' );
					$( '.custom-ease-function' ).removeClass( 'hidden' ).addClass( 'flex' );
					easingValue = $( '#customEase' ).val();
				} else {
					$( '.custom-ease-function' ).addClass( 'hidden' ).removeClass( 'flex' );
					$( '.select-ease-function' ).removeClass( 'hidden' ).addClass( 'flex' );
					easingValue = `${ easingValue1 }.${ easingValue2 }`;
				}
			} );

			$( '#overflowHidden' ).change( function() {
				if ( $( '#overflowHidden' ).is( ':checked' ) ) {
					if ( splitTextType === 'word' ) {
						const line = $( textTarget ).find( '.line' );
						$( line ).addClass( 'overflow-hidden' );
					} else if ( splitTextType === 'char' ) {
						const word = $( textTarget ).find( '.word' );
						$( word ).addClass( 'overflow-hidden' );
					}
				} else {
					$( '.line, word' ).removeClass( 'overflow-hidden' );
				}
			} );

			$( '#generateTransition' ).on( 'click', function() {
				runTransition();
			} );

			$( '#resetTransition' ).on( 'click', function() {
				resetTransition();
				setTarget();
			} );

			const setTarget = function() {
				if ( splitTextType === 'none' ) {
					gsap.set( textTarget, {
						opacity: opacityValue,
						scale: scaleValue,
						x: xValue,
						y: yValue,
						rotateX,
						rotateY,
						skewX: skewXValue,
						skewY: skewYValue,
					} );
				} else {
					const resetAll = $( textTarget ).find( '.char, .line, .word' );
					gsap.set( resetAll, {
						opacity: 1,
						scale: 1,
						y: 0,
						x: 0,
						rotateX: 0,
						rotateY: 0,
						skewX: 0,
						skewY: 0,
					} );
					const characters = $( textTarget ).find( `.${ splitTextType }` );
					if ( characters.length > 0 ) {
						gsap.set( characters, {
							opacity: opacityValue,
							scale: scaleValue,
							x: xValue,
							y: yValue,
							rotateX,
							rotateY,
							skewX: skewXValue,
							skewY: skewYValue,
						} );
					}
				}
			};

			const runTransition = function() {
				if ( splitTextType === 'none' ) {
					if ( isAnimating ) {
						return;
					}
					isAnimating = true;
					gsap.from( textTarget, {
						opacity: opacityValue,
						scale: scaleValue,
						x: xValue,
						y: yValue,
						rotateX,
						rotateY,
						skewX: skewXValue,
						skewY: skewYValue,
					} );
					gsap.to( textTarget, {
						duration: durationValue,
						opacity: 1,
						scale: 1,
						y: 0,
						x: 0,
						rotateX: 0,
						rotateY: 0,
						skewX: 0,
						skewY: 0,
						transformOrigin: '50% 50%',
						ease: `${ easingValue }`,
					} );
					setTimeout( function() {
						gsap.to( textTarget, {
							duration: durationValue,
							opacity: opacityValue,
							scale: scaleValue,
							x: xValue,
							y: yValue,
							rotateX,
							rotateY,
							skewX: skewXValue,
							skewY: skewYValue,
							ease: `${ easingValue }`,
							onComplete: () => {
								isAnimating = false;
							},
						} );
					}, 2000 + ( durationValue * 1000 ) );
				} else {
					const characters = $( textTarget ).find( `.${ splitTextType }` );
					if ( characters.length > 0 ) {
						if ( isAnimating ) {
							return;
						}
						isAnimating = true;
						gsap.from( characters, {
							opacity: opacityValue,
							scale: scaleValue,
							x: xValue,
							y: yValue,
							rotateX,
							rotateY,
							skewX: skewXValue,
							skewY: skewYValue,
						} );
						gsap.to( characters, {
							duration: durationValue,
							opacity: 1,
							scale: 1,
							y: 0,
							x: 0,
							rotateX: 0,
							rotateY: 0,
							skewX: 0,
							skewY: 0,
							transformOrigin: '50% 50%',
							ease: `${ easingValue }`,
							stagger: staggerValue,
						} );
						setTimeout( function() {
							gsap.to( characters, {
								duration: durationValue,
								opacity: opacityValue,
								scale: scaleValue,
								x: xValue,
								y: yValue,
								rotateX,
								rotateY,
								skewX: skewXValue,
								skewY: skewYValue,
								ease: `${ easingValue }`,
								stagger: staggerValue,
								onComplete: () => {
									isAnimating = false;
								},
							} );
						}, 2000 + ( durationValue * 1000 ) + ( staggerValue * characters.length * 1000 ) );
					}
				}
			};

			const resetTransition = function() {
				isAnimating = false;
				xValue = 0;
				yValue = 0;
				skewXValue = 0;
				skewYValue = 0;
				rotateX = 0;
				rotateY = 0;
				opacityValue = 1;
				scaleValue = 1;
				durationValue = 0.5;
				staggerValue = 0.02;
				easingValue1 = 'power0';
				easingValue2 = 'in';
				easingValue = `${ easingValue1 }.${ easingValue2 }`;
				$( '#overflowHidden, #isCustomEase' ).prop( 'checked', false );
				$( '#xValue, #yValue, #zValue, #rotateY, #rotateX, #skewY, #skewX' ).val( 0 );
				$( '#opacityValue, #scaleValue' ).val( 1 );
				$( '#durationValue' ).val( 1 );
				$( '#staggerValue' ).val( 0.02 );
				$( '#easingOptions1' ).val( 'power0' );
				$( '#easingOptions2' ).val( 'in' );
				$( '.stagger-function, .overflow-hide-function' ).removeClass( 'flex' ).addClass( 'hidden' );
				$( '.custom-ease-function' ).addClass( 'hidden' ).removeClass( 'flex' );
				$( '.select-ease-function' ).removeClass( 'hidden' ).addClass( 'flex' );
				$( '.scale-value, .opacity-value' ).html( 1 );
				$( '.duration-value' ).html( 0.5 );
				if ( splitTextType === 'none' ) {
					$( '.stagger-function, .overflow-hide-function' ).addClass( 'hidden' ).removeClass( 'flex' );
				} else {
					$( '.stagger-function, .overflow-hide-function' ).removeClass( 'hidden' ).addClass( 'flex' );
				}
			};
		}
	};

	$( document ).ready( function() {
		initializeTextTransition();
	} );

	if ( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=image_transition', initializeTextTransition );
	}
}( jQuery ) );
