/* global jQuery acf */
( function( $ ) {
	const initializeSelectableCardsBlock = function( $block ) {
		let $spacerTop = $( '.gl-b-container-block .spacer-top' );
		let $spacerBottom = $( '.gl-b-container-block .spacer-bottom' );

		if ( $block ) {
			$spacerTop = $block.find( '.gl-b-container-block .spacer-top' );
			$spacerBottom = $block.find( '.gl-b-container-block .spacer-bottom' );
		}

		acf.addAction( 'new_field/key=field_gl_container_desktop_top_spacing', function( $field ) {
			$field.on( 'change', function() {
				const value = $field.val();
				$spacerTop.find( '.desktop' ).css( 'height', value + 'px' );
			} );
		} );

		acf.addAction( 'new_field/key=field_gl_container_tablet_top_spacing', function( $field ) {
			$field.on( 'change', function() {
				const value = $field.val();
				$spacerTop.find( '.tablet' ).css( 'height', value + 'px' );
			} );
		} );

		acf.addAction( 'new_field/key=field_gl_container_mobile_top_spacing', function( $field ) {
			$field.on( 'change', function() {
				const value = $field.val();
				$spacerTop.find( '.mobile' ).css( 'height', value + 'px' );
			} );
		} );

		acf.addAction( 'new_field/key=field_gl_container_desktop_bottom_spacing', function( $field ) {
			$field.on( 'change', function() {
				const value = $field.val();
				$spacerBottom.find( '.desktop' ).css( 'height', value + 'px' );
			} );
		} );

		acf.addAction( 'new_field/key=field_gl_container_tablet_bottom_spacing', function( $field ) {
			$field.on( 'change', function() {
				const value = $field.val();
				$spacerBottom.find( '.tablet' ).css( 'height', value + 'px' );
			} );
		} );

		acf.addAction( 'new_field/key=field_gl_container_mobile_bottom_spacing', function( $field ) {
			$field.on( 'change', function() {
				const value = $field.val();
				$spacerBottom.find( '.mobile' ).css( 'height', value + 'px' );
			} );
		} );
	};

	$( document ).ready( function() {
		initializeSelectableCardsBlock();
	} );

	if ( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=gl-container', initializeSelectableCardsBlock );
	}
}( jQuery ) );
