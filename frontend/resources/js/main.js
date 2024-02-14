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

	$( '.gl-site-header .drawer-toggle' ).click( function() {
		$( '.gl-site-header .drawer' ).toggle();
	} );

	$( window ).resize( function() {
		$( '.gl-site-header .drawer' ).hide();
	} );
} );
