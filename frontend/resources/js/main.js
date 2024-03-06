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
} );
