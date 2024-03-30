/* global jQuery */

jQuery( function( $ ) {
	$( '.gl-site-header .menu-item-has-children' ).click( function( e ) {
		e.preventDefault();
		$( '.sub-menu', this ).toggleClass( 'show-sub-menu' );
	} );

	$( document ).mouseup( function( e ) {
		const container = $( '.sub-menu' );
		if ( ! container.is( e.target ) && container.has( e.target ).length === 0 ) {
			container.removeClass( 'show-sub-menu' );
		}
	} );

	$( '.mobile-menu-container .menu-item' ).click( function() {
		$( '.sub-menu', this ).toggle();
	} );

	$( '.gl-site-header .drawer-toggle' ).click( function() {
		$( '.gl-site-header .drawer' ).toggle();
	} );

	$( window ).resize( function() {
		$( '.gl-site-header .drawer' ).hide();
	} );

	$( '.single-article-container .post-content .wp-block-heading' ).each( function() {
		const headingContent = $( this ).text().trim();
		const headingId = headingContent.toLowerCase().replace( /[^a-zA-Z0-9\s-]+/g, '' ).replace( /\s+/g, '-' );
		$( this ).attr( 'id', headingId );
	} );

	$( '.single-article-container .table-wrapper ul li' ).each( function() {
		const headingId = $( this ).find( 'a' ).attr( 'href' ).toLowerCase().replace( /[^a-zA-Z0-9\s-]+/g, '' ).replace( /\s+/g, '-' );
		$( this ).find( 'a' ).attr( 'href', '#' + headingId );
	} );

	$( '.single-article-container .table-wrapper ul li a' ).click( function( e ) {
		e.preventDefault();
		const target = $( this ).attr( 'href' );
		$( 'html, body' ).animate( {
			scrollTop: $( target ).offset().top - 90,
		}, 400 );
	} );

	const $tableOfContent = $( '.single-article-container .table-wrapper ul li a' );
	$( window ).scroll( function() {
		$tableOfContent.each( function() {
			const container = $( this ).attr( 'href' );
			const containerOffset = $( container ).offset().top;
			const containerHeight = $( container ).outerHeight();
			const containerBottom = containerOffset + containerHeight;
			const scrollPosition = $( document ).scrollTop();
			// const threshold = width <= 991 ? 100 : 50;

			if ( scrollPosition < containerBottom - 100 && scrollPosition >= containerOffset - 100 ) {
				$tableOfContent.removeClass( 'text-gray-900 font-medium' );
				$( this ).addClass( 'text-gray-900 font-medium' );
			}
		} );
	} );

	$( '.radio-stacked' ).each( function( ) {
		$( this ).click( function( ) {
			$( '.radio-stacked' ).removeClass( 'border-indigo-600 ring-2 ring-indigo-600' );
			$( this ).addClass( 'border-indigo-600 ring-2 ring-indigo-600' );
		} );
	} );

	$( '.radio-cards svg' ).addClass( 'invisible' );
	$( '.radio-cards' ).each( function( ) {
		$( this ).click( function( ) {
			$( '.radio-cards' ).removeClass( 'border-indigo-600 ring-2 ring-indigo-600' );
			$( 'svg' ).addClass( 'invisible' );
			$( this ).addClass( 'border-indigo-600 ring-2 ring-indigo-600' );
			$( this ).find( 'svg' ).removeClass( 'invisible' );
		} );
	} );
	$( '.radio-sm-card' ).addClass( 'text-gray-900' );
	$( '.radio-sm-card' ).each( function( ) {
		$( this ).click( function( ) {
			$( '.radio-sm-card' ).removeClass( 'border-indigo-600 ring-2 ring-indigo-600' );
			$( '.radio-sm-card' ).removeClass( 'hover:bg-indigo-500' );
			$( '.radio-sm-card' ).addClass( 'hover:bg-gray-50', 'text-gray-900' );
			$( this ).addClass( 'border-indigo-600 ring-2 ring-indigo-600 ring-offset-2' );
			$( this ).removeClass( 'hover:bg-gray-50' ).addClass( 'hover:bg-indigo-500' );
			$( '.radio-sm-card' ).find( '.cursor-not-allowed' ).removeClass( 'border-indigo-600 ring-2 ring-indigo-600' );
		} );
	} );

	$( '.radio-table' ).each( function( ) {
		$( this ).click( function( ) {
			$( '.radio-table' ).removeClass( 'bg-indigo-50 border-indigo-200 z-10' );
			$( '.radio-table' ).removeClass( 'text-white' );
			$( '.yr-color' ).removeClass( 'text-indigo-700' );
			$( this ).removeClass( 'bg-indigo-600' );
			$( this ).removeClass( 'text-white' );
			$( this ).addClass( 'bg-indigo-50 border-indigo-200 z-10' );
			$( this ).addClass( 'text-gray-900' );
			$( this ).find( '.yr-color' ).addClass( 'text-indigo-700' );
		} );
	} );

	$( '.radio-panel' ).each( function( ) {
		$( this ).click( function( ) {
			$( '.radio-panel' ).removeClass( 'bg-indigo-50 border-indigo-200 z-10' );
			$( '.radio-panel' ).removeClass( 'text-white' );
			$( '.title-color' ).removeClass( 'text-indigo-900' );
			$( '.description-color' ).removeClass( 'text-indigo-700' );
			$( this ).removeClass( 'bg-indigo-600' );
			$( this ).removeClass( 'text-white' );
			$( this ).addClass( 'bg-indigo-50 border-indigo-200 z-10' );
			$( this ).addClass( 'text-gray-900' );
			$( this ).find( '.title-color' ).addClass( 'text-indigo-900' );
			$( this ).find( '.description-color' ).addClass( 'text-indigo-700' );
		} );
	} );

	$( '.radio-color' ).each( function( ) {
		$( this ).click( function( ) {
			$( '.radio-color' ).removeClass( 'bg-indigo-600' );
			$( '.radio-color' ).removeClass( 'ring-2 ring-offset-3' );
			$( this ).addClass( 'ring-2 ring-offset-3' );
		} );
	} );

	function switchTab( tabIdToShow, tabIdToHide, tabToShowClass, tabToHideClass ) {
		$( tabIdToShow ).removeClass( 'hidden' ).addClass( tabToShowClass ).removeClass( tabToHideClass );
		$( tabIdToHide ).addClass( 'hidden' ).removeClass( tabToShowClass ).addClass( tabToHideClass );
	}

	$( '#tabs-1-tab-2' ).click( function() {
		switchTab( '#tabs-1-panel-2', '#tabs-1-panel-1', 'bg-white', 'bg-gray-100' );
	} );

	$( '#tabs-1-tab-1' ).click( function() {
		switchTab( '#tabs-1-panel-1', '#tabs-1-panel-2', 'bg-gray-100', 'bg-white' );
	} );

	$( '.default-mood-option' ).click( function() {
		$( '.list-items' ).toggleClass( 'opacity-0 -z-10 opacity-100 z-10' );
	} );

	$( '.emotions' ).each( function( ) {
		$( '.list-items li' ).mouseenter( function( ) {
			$( '.list-items li' ).addClass( 'bg-white' ).removeClass( 'bg-gray-100' );
		} );
		$( this ).click( function( ) {
			$( this ).addClass( 'bg-gray-100' ).removeClass( 'bg-white' );
			$( '.list-items' ).toggleClass( 'opacity-0 -z-10 opacity-100 z-10' );
			const index = $( this ).index() + 1;
			$( '.default-mood-option' ).addClass( 'hidden' );
			$( '#icon' + index ).removeClass( 'hidden' );
		} );
	} );

	$( '.default-mood-options' ).click( function() {
		$( '.list-itemss' ).toggleClass( 'opacity-0 -z-10 opacity-100 z-10' );
	} );

	$( '.emotionss' ).each( function( ) {
		$( '.list-itemss li' ).mouseenter( function( ) {
			$( '.list-itemss li' ).addClass( 'bg-white' ).removeClass( 'bg-gray-100' );
		} );
		$( this ).click( function( ) {
			$( this ).addClass( 'bg-gray-100' ).removeClass( 'bg-white' );
			$( '.list-itemss' ).toggleClass( 'opacity-0 -z-10 opacity-100 z-10' );
			const index = $( this ).index() + 1;
			$( '.default-mood-options' ).addClass( 'hidden' );
			$( '#icons' + index ).removeClass( 'hidden' );
		} );
	} );

	function togglePillItem( buttonClass, pillItemClass ) {
		$( buttonClass ).click( function() {
			const $pillItem = $( pillItemClass );
			$pillItem.toggleClass( 'opacity-0 -z-10 opacity-100 z-10' );
			if ( $pillItem.hasClass( 'opacity-100 z-10' ) ) {
				$( pillItemClass ).not( $pillItem ).removeClass( 'opacity-100 z-10' ).addClass( 'opacity-0 -z-10' );
			}
		} );
	}
	togglePillItem( '.button-1', '.pill-item1' );
	togglePillItem( '.button-2', '.pill-item2' );
	togglePillItem( '.button-3', '.pill-item3' );

	function handlePillItemClick( pillClass, showId, hideId, hideClass ) {
		$( pillClass ).click( function() {
			$( showId ).removeClass( 'hidden' ).addClass( 'flex' );
			$( hideId ).addClass( 'hidden' ).removeClass( 'flex' );
			$( hideClass ).removeClass( 'opacity-100 z-10' ).addClass( 'opacity-0 -z-10' );
		} );
	}

	handlePillItemClick( '.pill1-list-item1', '#assignItem1', '#assignItem2', '.pill-item1' );
	handlePillItemClick( '.pill1-list-item2', '#assignItem2', '#assignItem1', '.pill-item1' );
	handlePillItemClick( '.pill2-list-item1', '#labelItem1', '#labelItem2', '.pill-item2' );
	handlePillItemClick( '.pill2-list-item2', '#labelItem2', '#labelItem1', '.pill-item2' );
	handlePillItemClick( '.pill3-list-item1', '#dateItem1', '#dateItem2', '.pill-item3' );
	handlePillItemClick( '.pill3-list-item2', '#dateItem2', '#dateItem1', '.pill-item3' );

	$( '#dropdown-button' ).click( function() {
		$( '#dropdown-menu' ).toggleClass( 'hidden' );
	} );

	$( '#dropdown-menu li' ).each( function() {
		const status = $( this ).attr( 'data-status' );
		if ( status === 'offline' ) {
			$( this ).find( '.status' ).removeClass( 'bg-green-400' ).addClass( 'bg-gray-200' );
		}
	} );
	$( '#dropdown-menu li' ).click( function() {
		const value = $( this ).attr( 'data-value' );
		const status = $( this ).attr( 'data-status' );
		if ( status ) {
			if ( status === 'offline' ) {
				$( '#statusColor' ).removeClass( 'bg-green-400' ).addClass( 'bg-gray-200' );
			}
			if ( status === 'online' ) {
				$( '#statusColor' ).addClass( 'bg-green-400' ).removeClass( 'bg-gray-200' );
			}
		}
		$( '#selected-option' ).text( value );
		$( '#dropdown-menu li' ).removeClass( 'bg-indigo-600 text-white font-bold' );
		$( this ).addClass( 'bg-indigo-600 text-white font-bold' );
		$( '#dropdown-menu li svg' ).addClass( 'hidden' );
		$( this ).find( 'svg' ).removeClass( 'hidden' );
		$( '#dropdown-menu' ).addClass( 'hidden' );
	} );

	$( '#dropdown-menu li' ).hover(
		function() {
			$( '#dropdown-menu li svg' )
				.not( $( this ).find( 'svg' ) )
				.addClass( 'text-indigo-600' )
				.removeClass( 'text-white' );
			$( this ).find( 'svg' ).addClass( 'text-white' ).removeClass( 'text-indigo-600' );
			$( '#dropdown-menu li' ).not( this ).removeClass( 'bg-indigo-600 text-white' );
			$( this ).addClass( 'hover:bg-indigo-600' );
		},
		function() {
			$( this ).removeClass( 'hover:bg-indigo-600' );
		}
	);
} );
