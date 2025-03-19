/* global jQuery gsap SplitType*/
( function( $ ) {
	const initializeTextTransition = function() {
		const textTransition = document.querySelector( '.gl-b-text-transition-generator' );
		const textTarget = document.querySelector( '.text-transition-outcome' );
		const defaultXValue = $( textTransition ).find( '.input-values' ).data( 'x-value' );
		const defaultYValue = $( textTransition ).find( '.input-values' ).data( 'y-value' );
		const defaultSkewXValue = $( textTransition ).find( '.input-values' ).data( 'skew-x' );
		const defaultSkewYValue = $( textTransition ).find( '.input-values' ).data( 'skew-y' );
		const defaultRotateXValue = $( textTransition ).find( '.input-values' ).data( 'rotate-x' );
		const defaultRotateYValue = $( textTransition ).find( '.input-values' ).data( 'rotate-y' );
		const defaultOpacity = $( textTransition ).find( '.input-values' ).data( 'opacity' );
		const defaultScale = $( textTransition ).find( '.input-values' ).data( 'scale' );
		const defaultDuration = $( textTransition ).find( '.input-values' ).data( 'duration' );
		const defaultStagger = $( textTransition ).find( '.input-values' ).data( 'stagger' );
		const defaultEase = $( textTransition ).find( '.input-values' ).data( 'ease' );
		const defaultTiming = $( textTransition ).find( '.input-values' ).data( 'timing' );
		const defaultSplit = $( textTransition ).find( '.input-values' ).data( 'split' );
		const defaultCustomEase = $( textTransition ).find( '.input-values' ).data( 'custom-ease' );
		const defaultOverflow = $( textTransition ).find( '.input-values' ).data( 'overflow' );
		let xValue = defaultXValue;
		let yValue = defaultYValue;
		let skewXValue = defaultSkewXValue;
		let skewYValue = defaultSkewYValue;
		let rotateX = defaultRotateXValue;
		let rotateY = defaultRotateYValue;
		let opacityValue = defaultOpacity;
		let scaleValue = defaultScale;
		let durationValue = defaultDuration;
		let staggerValue = defaultStagger;
		let easingValue1 = defaultEase;
		let easingValue2 = defaultTiming;
		let easingValue = `${ easingValue1 }.${ easingValue2 }`;
		let splitTextType = defaultSplit;
		let splitInstance;
		$( '#easingOptions1' ).val( defaultEase );
		$( '#easingOptions2' ).val( defaultTiming );
		$( '#splitTextType' ).val( defaultSplit );
		splitInstance = new SplitType( textTarget, { types: 'lines, words, chars' } );
		if ( defaultOverflow === 1 ) {
			$( '#overflowHidden' ).prop( 'checked', true );
			setTimeout( () => {
				if ( splitTextType === 'word' ) {
					const line = $( textTarget ).find( '.line' );
					$( line ).addClass( 'overflow-hidden' );
				} else if ( splitTextType === 'char' ) {
					const word = $( textTarget ).find( '.word' );
					$( word ).addClass( 'overflow-hidden' );
				}
			}, 500 );
		} else {
			$( '.line, word' ).removeClass( 'overflow-hidden' );
			$( '#overflowHidden' ).prop( 'checked', false );
		}
		if ( splitTextType === 'none' || splitTextType === 'line' ) {
			$( '.overflow-hide-function' ).addClass( 'hidden' );
		} else {
			$( '.overflow-hide-function' ).removeClass( 'hidden' );
		}

		$( '#editTransition' ).click( function() {
			$( '.custom-menu' ).toggleClass( 'w-0 w-1/3 border-r' );
			if ( splitInstance ) {
				splitInstance.revert();
			}
			setTimeout( () => {
				splitInstance = new SplitType( textTarget, { types: 'lines, words, chars' } );
				if ( splitTextType === 'word' ) {
					const line = $( textTarget ).find( '.line' );
					$( line ).addClass( 'overflow-hidden' );
				} else if ( splitTextType === 'char' ) {
					const word = $( textTarget ).find( '.word' );
					$( word ).addClass( 'overflow-hidden' );
				}
			}, 500 );
		} );

		$( '#advanceOptions' ).click( function() {
			const $menu = $( '.advance-settings-container' );
			if ( $menu.is( ':visible' ) ) {
				$menu.slideUp();
			} else {
				$menu.slideDown().css( 'display', 'flex' );
			}
		} );

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
				} else {
					xValue = value;
				}
				setTarget();
			} );

			$( '#yValue' ).on( 'keyup', function() {
				const value = $( this ).val().trim();
				if ( value === '' ) {
					yValue = 0;
				} else {
					yValue = value;
				}
				setTarget();
			} );

			$( '#skewX' ).on( 'keyup', function() {
				const value = $( this ).val().trim();
				if ( value === '' ) {
					skewXValue = 0;
				} else {
					skewXValue = value;
				}
				setTarget();
			} );

			$( '#skewY' ).on( 'keyup', function() {
				const value = $( this ).val().trim();
				if ( value === '' ) {
					skewYValue = 0;
				} else {
					skewYValue = value;
				}
				setTarget();
			} );

			$( '#rotateX' ).on( 'keyup', function() {
				const value = $( this ).val().trim();
				if ( value === '' ) {
					rotateX = 0;
				} else {
					rotateX = value;
				}
				setTarget();
			} );

			$( '#rotateY' ).on( 'keyup', function() {
				const value = $( this ).val().trim();
				if ( value === '' ) {
					rotateY = 0;
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
					easingValue = defaultCustomEase;
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
				setTarget();
			} );

			$( '#splitTextType' ).change( function() {
				resetTransition();
				splitTextType = $( this ).val();
				setTarget();
				if ( splitTextType === 'none' || splitTextType === 'line' ) {
					$( '.overflow-hide-function' ).addClass( 'hidden' );
				} else {
					$( '.overflow-hide-function' ).removeClass( 'hidden' );
				}
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
				gsap.set( textTarget, {
					opacity: 1,
					scale: 1,
					y: 0,
					x: 0,
					rotateX: 0,
					rotateY: 0,
					skewX: 0,
					skewY: 0,
				} );
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
					gsap.from( textTarget, {
						opacity: opacityValue,
						scale: scaleValue,
						x: xValue,
						y: yValue,
						rotateX,
						rotateY,
						skewX: skewXValue,
						skewY: skewYValue,
						ease: `${ easingValue }`,
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
				} else {
					const characters = $( textTarget ).find( `.${ splitTextType }` );
					if ( characters.length > 0 ) {
						gsap.from( characters, {
							opacity: opacityValue,
							scale: scaleValue,
							x: xValue,
							y: yValue,
							rotateX,
							rotateY,
							skewX: skewXValue,
							skewY: skewYValue,
							stagger: staggerValue,
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
					}
				}
			};

			const resetTransition = function() {
				xValue = defaultXValue;
				yValue = defaultYValue;
				skewXValue = defaultSkewXValue;
				skewYValue = defaultSkewYValue;
				rotateX = defaultRotateXValue;
				rotateY = defaultRotateYValue;
				opacityValue = defaultOpacity;
				scaleValue = defaultScale;
				durationValue = defaultDuration;
				staggerValue = defaultStagger;
				easingValue1 = defaultEase;
				easingValue2 = defaultTiming;
				easingValue = `${ easingValue1 }.${ easingValue2 }`;
				splitTextType = defaultSplit;
				$( ' #isCustomEase' ).prop( 'checked', false );
				$( '#xValue' ).val( defaultXValue );
				$( '#yValue' ).val( defaultYValue );
				$( '#rotateY' ).val( defaultRotateXValue );
				$( '#rotateX' ).val( defaultRotateYValue );
				$( '#skewY' ).val( defaultSkewXValue );
				$( '#skewX' ).val( defaultSkewYValue );
				$( '#opacityValue' ).val( defaultOpacity );
				$( '#scaleValue' ).val( defaultScale );
				$( '#durationValue' ).val( defaultDuration );
				$( '#staggerValue' ).val( defaultStagger );
				$( '#easingOptions1' ).val( defaultEase );
				$( '#easingOptions2' ).val( defaultTiming );
				$( '.custom-ease-function' ).addClass( 'hidden' ).removeClass( 'flex' );
				$( '.select-ease-function' ).removeClass( 'hidden' ).addClass( 'flex' );
				$( '.scale-value, .opacity-value' ).html( 1 );
				$( '.scale-value' ).html( defaultScale );
				$( '.opacity-value' ).html( defaultOpacity );
				$( '.duration-value' ).html( defaultDuration );
				if ( defaultOverflow === 1 ) {
					$( '#overflowHidden' ).prop( 'checked', true );
					setTimeout( () => {
						if ( splitTextType === 'word' ) {
							const line = $( textTarget ).find( '.line' );
							$( line ).addClass( 'overflow-hidden' );
						} else if ( splitTextType === 'char' ) {
							const word = $( textTarget ).find( '.word' );
							$( word ).addClass( 'overflow-hidden' );
						}
					}, 500 );
				} else {
					$( '.line, word' ).removeClass( 'overflow-hidden' );
					$( '#overflowHidden' ).prop( 'checked', false );
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
