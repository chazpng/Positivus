/* global jQuery barba gsap ScrollTrigger*/
jQuery( function( $ ) {
	let $anchorname;
	const colors = [ '#22245E', '#373B9F', '#575BD1', '#9CA1FA', '#D2D8FF', '#DCE4FF', '#EAEFFC' ];
	let transitionStyle = 1;

	function randomBox( shuffledBoxes, isEnter ) {
		gsap.to( shuffledBoxes, {
			duration: 0.1,
			opacity: isEnter ? 0 : 1,
			ease: 'linear',
			stagger: {
				each: 0.004,
				from: 'random',
			},
		} );
	}

	function slideTransition( isEnter, isLeft ) {
		const boxes = gsap.utils.toArray( '.square-transition .box-color' );
		const columns = 12;
		for ( let row = 0; row < boxes.length / columns; row++ ) {
			const startIndex = row * columns;
			const endIndex = startIndex + columns;
			const rowBoxes = isLeft ? boxes.slice( startIndex, endIndex ) : boxes.slice( startIndex, endIndex ).reverse();
			gsap.to( rowBoxes, {
				opacity: isEnter ? 0 : 1,
				duration: 0.1,
				stagger: 0.03,
			} );
		}
	}

	function pairTransition( isEnter, isReverse ) {
		const boxes = gsap.utils.toArray( '.square-transition .box-color' );
		const columns = 12;
		if ( isReverse ) {
			for ( let row = 0; row < boxes.length / columns; row++ ) {
				const startIndex = row * columns;
				const endIndex = startIndex + columns;
				const rowBoxes = boxes.slice( startIndex, endIndex );
				gsap.to( rowBoxes, {
					opacity: isEnter ? 0 : 1,
					duration: 0.1,
					stagger: 0.04,
				} );
			}
			for ( let row = 0; row < boxes.length / columns; row++ ) {
				const startIndex = row * columns;
				const endIndex = startIndex + columns;
				const rowBoxes = boxes.slice( startIndex, endIndex ).reverse();
				gsap.to( rowBoxes, {
					opacity: isEnter ? 0 : 1,
					duration: 0.1,
					stagger: 0.04,
				} );
			}
		} else {
			for ( let row = 0; row < boxes.length / columns; row++ ) {
				const startIndex = row * columns;
				const endIndex = startIndex + ( columns / 2 );
				const rowBoxes = boxes.slice( startIndex, endIndex ).reverse();
				gsap.to( rowBoxes, {
					opacity: isEnter ? 0 : 1,
					duration: 0.1,
					stagger: 0.04,
				} );
			}
			for ( let row = 0; row < boxes.length / columns; row++ ) {
				const startIndex = ( row * columns ) + 6;
				const endIndex = startIndex + ( columns / 2 );
				const rowBoxes = boxes.slice( startIndex, endIndex );
				gsap.to( rowBoxes, {
					opacity: isEnter ? 0 : 1,
					duration: 0.1,
					stagger: 0.04,
				} );
			}
		}
	}

	function squareTransition() {
		$( '.square-transition .box-color' ).each( function() {
			const randomColor = colors[ Math.floor( Math.random() * colors.length ) ];
			$( this ).css( 'background-color', randomColor );
		} );
		const boxes = document.querySelectorAll( '.square-transition .box-color' );
		const shuffledBoxes = Array.from( boxes ).sort( () => Math.random() - 0.5 );
		transitionStyle = Math.floor( Math.random() * 6 ) + 1;
		switch ( transitionStyle ) {
			case 1:
				randomBox( shuffledBoxes, false );
				break;
			case 2:
				slideTransition( false, false );
				break;
			case 3:
				slideTransition( false, true );
				break;
			case 4:
				pairTransition( false, false );
				break;
			case 5:
				slideTransition( false, false );
				break;
			case 6:
				pairTransition( false, true );
				break;
		}
	}

	function squareTransitionExit() {
		const boxes = document.querySelectorAll( '.square-transition .box-color' );
		const shuffledBoxes = Array.from( boxes ).sort( () => Math.random() - 0.5 );
		transitionStyle = Math.floor( Math.random() * 6 ) + 1;
		switch ( transitionStyle ) {
			case 1:
				randomBox( shuffledBoxes, true );
				break;
			case 2:
				slideTransition( true, false );
				break;
			case 3:
				slideTransition( true, true );
				break;
			case 4:
				slideTransition( true, false );
				break;
			case 5:
				pairTransition( true, false );
				break;
			case 6:
				pairTransition( true, true );
				break;
		}
	}

	function glBlock() {
		$( '.gl-b-resizable iframe' ).on( 'load', function() {
			let dataId = $( this ).data( 'transition' );
			let iframeContent = $( this ).contents();
			const pageTransitionID = iframeContent.find( '#page' );
			$( pageTransitionID ).attr( 'data-id', dataId );
		} );
	}
	glBlock();

	function getAnchorName() {
		$( document ).on( "click", ".menu-item a", function() {
			$anchorname = $( this ).text().trim();
			$( '.dynamic-text' ).html( $anchorname );
		} );
	}
	getAnchorName();

	function rectangleTransition() {
		const boxes = document.querySelectorAll( '.box-colors' );
		$( boxes ).each( function() {
			const rectangles = $( this ).find( '.color-contain' );
			const boxWidthContainer = $( this ).find( '.random-colors' );
			const boxWidth = [ 'w-[45.14%]', 'w-[11.11%]', 'w-[24.31%]', 'w-[20.83%]' ];
			const shuffledWidth = boxWidth.sort( ( ) => Math.random( ) - 0.5 );
			const colors = [ 'bg-indigo-50', 'bg-indigo-300', 'bg-indigo-500', 'bg-indigo-800', 'bg-indigo-900', 'bg-indigo-950' ];
			const shuffledColor = colors.sort( ( ) => Math.random( ) - 0.5 );
			$( boxWidthContainer ).each( function( ) {
				$( this ).removeClass( 'w-0 w-[45.14%] w-[11.11%] w-[24.31%] w-[20.83%]' );
			} );
			$( boxWidthContainer ).each( function( index ) {
				if ( index < shuffledWidth.length ) {
					$( this ).addClass( shuffledWidth[ index ] );
				}
			} );

			$( rectangles ).each( function( ) {
				$( this ).removeClass( 'right-0 bg-indigo-50 bg-indigo-300 bg-indigo-500 bg-indigo-800 bg-indigo-900 bg-indigo-950' ).addClass( 'left-0' );
			} );
			$( rectangles ).each( function( index ) {
				if ( index < shuffledColor.length ) {
					$( this ).addClass( shuffledColor[ index ] );
				}
				setTimeout( () => {
					const randomDelay = [ 0, 1, 2, 3 ];
					const shuffled = randomDelay.sort( () => Math.random() - 0.5 );
					gsap.to( this, {
						width: '100%',
						delay: 0.102 * shuffled[ index ],
					} );
				}, 10 );
			} );
		} );
	}

	function rectangleTransitionExit() {
		const boxes = document.querySelectorAll( '.box-colors' );
		$( window ).scrollTop( 0 );
		$( boxes ).each( function() {
			const rectangles = $( this ).find( '.color-contain' );
			$( rectangles ).each( function( index ) {
				$( this ).addClass( 'right-0' ).removeClass( 'left-0' );
				const randomDelay = [ 0, 1, 2, 3 ];
				const shuffled = randomDelay.sort( () => Math.random() - 0.5 );
				setTimeout( () => {
					gsap.to( this, {
						width: 0,
						delay: 0.102 * shuffled[ index ],
					} );
				}, 100 );
			} );
		} );
	}

	function cascadeTransition() {
		const curtain = $( '.cascade-transition' ).find( '.curtain' );
		$( curtain ).each( function( ) {
			$( this ).removeClass( 'right-0' ).addClass( 'left-0' );
		} );
		gsap.to( '.cascade-transition .curtain', {
			width: '100%',
			stagger: 0.07,
			duration: 0.3,
			ease: 'Power4.inOut',
		} )
	}

	function cascadeTransitionExit() {
		const curtain = $( '.cascade-transition' ).find( '.curtain' );
		$( curtain ).each( function( ) {
			$( this ).addClass( 'right-0' ).removeClass( 'left-0' );
		} );
		gsap.to( '.cascade-transition .curtain', {
			width: '0',
			stagger: 0.07,
			duration: 0.3,
			ease: 'Power4.inOut',
		} );
	}

	function dissolveTransition() {
		gsap.to( '.dissolve-transition', {
			opacity: 1,
			ease: 'Power4.inOut',
		} );
	}

	function dissolveTransitionExit() {
		gsap.to( '.dissolve-transition', {
			opacity: 0,
			ease: 'Power4.inOut',
		} );
	}

	function scaleTransition() {
		gsap.set( '.dynamic-text', { y: 40 } );
		gsap.to( '.scale-transition', {
			opacity: 1,
			ease: 'Power4.inOut',
		} );
		gsap.to( '.scale-transition .scale-wrapper', {
			scaleY: 0.88,
			scaleX: 0.95,
			ease: 'Power4.inOut',
		} );
		gsap.to( '.scale-transition .dynamic-text', {
			y: 0,
			ease: 'Power4.inOut',
		} );
	}

	function scaleTransitionExit() {
		gsap.to( '.scale-transition .scale-wrapper', {
			scale: 1,
			ease: 'Power4.inOut',
		} );
		gsap.to( '.scale-transition .dynamic-text', {
			y: -40,
			ease: 'Power4.inOut',
		} );
		setTimeout(() => { 
			gsap.to( '.scale-transition', {
				opacity: 0,
				ease: 'Power4.inOut',
			} );
		}, 200 );
	}

	function blindsTransition() {
		const curtain = $( '.blinds-transition' ).find( '.curtain' );
		$( curtain ).each( function( ) {
			$( this ).removeClass( 'bottom-0' ).addClass( 'top-0' );
		} );
		gsap.to( '.blinds-transition .curtain', {
			height: '100%',
			stagger: 0.015,
			duration: 0.5,
			ease: 'Power1.out',
		} );
	}

	function blindsTransitionExit() {
		const curtain = $( '.blinds-transition' ).find( '.curtain' );
		$( curtain ).each( function( ) {
			$( this ).addClass( 'bottom-0' ).removeClass( 'top-0' );
		} );
		gsap.to( '.blinds-transition .curtain', {
			height: '0',
			stagger: 0.015,
			duration: 0.5,
			ease: 'Power1.in',
		} );
	}

	function roundSwipeTransition() {
		const circle = $( '.round-swipe-transition' ).find( '.circle' );
		gsap.set( '.round-swipe-transition .dynamic-text', { y: 40, opacity : 1 } );
		gsap.set( circle, { y: '20%', opacity: 1 } );
		gsap.to( circle, {
			y: '-10%',
			duration: 0.75,
			borderRadius: '100%',
			ease: 'Power1.inOut',
		} );
		gsap.to( '.round-swipe-transition .dynamic-text', {
			y: 0,
			ease: 'Power4.inOut',
		} );
	}

	function roundSwipeTransitionExit() {
		const circle = $( '.round-swipe-transition' ).find( '.circle' );
		gsap.to( circle, {
			y: '-100%',
			duration: 0.75,
			ease: 'Power4.in',
		} );
		gsap.to( '.round-swipe-transition .dynamic-text', {
			y: -40,
			opacity: 0,
			delay: 0.35,
			ease: 'Power4.inOut',
		} );
	}

	function staggerBlockTransition() {
		const curtain = $( '.stagger-blocks-transition' ).find( '.curtain' );
		$( curtain ).each( function( ) {
			$( this ).removeClass( 'top-0' ).addClass( 'bottom-0' );
		} );
		gsap.to( '.stagger-blocks-transition .curtain', {
			height: '100%',
			stagger: 0.075,
			duration: 0.3,
			ease: 'Power4.inOut',
		} )
	}

	function staggerBlockTransitionExit() {
		const curtain = $( '.stagger-blocks-transition' ).find( '.curtain' );
		$( curtain ).each( function( ) {
			$( this ).addClass( 'top-0' ).removeClass( 'bottom-0' );
		} );
		gsap.to( '.stagger-blocks-transition .curtain', {
			height: 0,
			stagger: 0.075,
			duration: 0.3,
			ease: 'Power4.inOut',
		} );
	}

	function pageTransition() {
		const transitionPage = $( '#page' ).data( 'id' );
		if ( transitionPage === 'rectangleTransition' ) {
			rectangleTransition();
		} else if ( transitionPage === 'cascadeTransition' ) {
			cascadeTransition();
		} else if ( transitionPage === 'dissolveTransition' ) {
			dissolveTransition();
		} else if ( transitionPage === 'scaleTransition' ) {
			scaleTransition();
		} else if ( transitionPage === 'blindsTransition' ) {
			blindsTransition();
		} else if ( transitionPage === 'roundSwipeTransition' ) {
			roundSwipeTransition();
		} else if ( transitionPage === 'squareTransition' ) {
			squareTransition();
		} else if ( transitionPage === 'staggerBlockTransition' ) {
			staggerBlockTransition();
		}
	}
 
	function pageTransitionExit() {
		const transitionPage = $( '#page' ).data( 'id' );
		if ( transitionPage === 'rectangleTransition' ) {
			rectangleTransitionExit();
		} else if ( transitionPage === 'cascadeTransition' ){
			cascadeTransitionExit();
		} else if ( transitionPage === 'dissolveTransition' ){
			dissolveTransitionExit();
		} else if ( transitionPage === 'scaleTransition' ){
			scaleTransitionExit();
		} else if ( transitionPage === 'blindsTransition' ) {
			blindsTransitionExit();
		} else if ( transitionPage === 'roundSwipeTransition' ) {
			roundSwipeTransitionExit();
		} else if ( transitionPage === 'squareTransition' ) {
			squareTransitionExit();
		} else if ( transitionPage === 'staggerBlockTransition' ) {
			staggerBlockTransitionExit();
		}
	}

	function disableCurrentActive() {
		$( '.current_page_item a' ).click( function( e ) {
			e.preventDefault();
		} );
	}
	function delay( n ) {
		n = n || 200;
		return new Promise( ( done ) => {
			setTimeout( () => {
				done();
			}, n );
		} );
	}
	/* --- BARBA CONFIG --- */
	barba.init( {
		sync: true,
		transitions: [ {
			async leave() {
				const done = this.async();
				pageTransition();
				await delay( 850 );
				done();
			},
			async enter() {
				pageTransitionExit();
				disableCurrentActive();
			},
			async once() {
				disableCurrentActive();
			},
		} ],
	} );
	/* ! --- BARBA CONFIG --- */
} );
