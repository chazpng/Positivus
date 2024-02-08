/* global jQuery */

jQuery( function( $ ) {
	$( '#stacked-flyout-menu .menu-item-has-children' ).click( function( e ) {
		e.preventDefault();
		$( '.sub-menu', this ).toggleClass( 'show-sub-menu' );
	} );

	$( document ).mouseup( function( e ) {
		const container = $( '.sub-menu' );
		if ( ! container.is( e.target ) && container.has( e.target ).length === 0 ) {
			container.removeClass( 'show-sub-menu' );
		}
	} );

	$( '#mobile-stacked-flyout-menu .menu-item-has-children' ).click( function( e ) {
		e.preventDefault();
		$( '.sub-menu', this ).toggle();
	} );

	$( '.stacked-flyout-menu-header .drawer-toggle' ).click( function() {
		$( '.stacked-flyout-menu-header .drawer' ).toggle();
	} );

	$( window ).resize( function() {
		$( '.stacked-flyout-menu-header .drawer' ).hide();
	} );
} );
