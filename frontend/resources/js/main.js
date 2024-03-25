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

	$( '.radio-table' ).each( function( ) {
		$( this ).click( function( ) {
			$( '.radio-table' ).removeClass( 'bg-indigo-50' );
			$( '.radio-table' ).removeClass( 'text-white' );
			$( '.yr-color' ).removeClass( 'text-indigo-700' );
			$( this ).removeClass( 'bg-indigo-600' );
			$( this ).removeClass( 'text-white' );
			$( this ).addClass( 'bg-indigo-50' );
			$( this ).addClass( 'text-gray-900' );
			$( this ).find( '.yr-color' ).addClass( 'text-indigo-700' );
		} );
	} );

	$( '.radio-panel' ).each( function( ) {
		$( this ).click( function( ) {
			$( '.radio-panel' ).removeClass( 'bg-indigo-50' );
			$( '.radio-panel' ).removeClass( 'text-white' );
			$( '.title-color' ).removeClass( 'text-indigo-900' );
			$( '.description-color' ).removeClass( 'text-indigo-700' );
			$( this ).removeClass( 'bg-indigo-600' );
			$( this ).removeClass( 'text-white' );
			$( this ).addClass( 'bg-indigo-50' );
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
} );
