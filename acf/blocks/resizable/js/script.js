/* global jQuery ResizeSensor */
( function( $ ) {
	const initializeResizableBlock = function( $block ) {
		let $iframe = $( '.gl-b-resizable iframe' );
		let $resizable = $( '.gl-b-resizable .resize-x' );

		if ( $block ) {
			$iframe = $block.find( '.gl-b-resizable iframe' );
			$resizable = $block.find( '.gl-b-resizable .resize-x' );
		}

		$iframe.on( 'load', function() {
			const id = $( this ).data( 'id' );
			this.style.height = this.contentDocument.body.scrollHeight + 'px';
			$( '.gl-b-resizable' ).find( '.screen-size' ).text( 'width: ' + $resizable.width() + 'px' );

			new ResizeSensor( $( '#' + id ).find( '.resize-x' ), function() {
				const iframeHeight = $( '#' + id ).find( 'iframe' )[ 0 ].contentDocument.body.scrollHeight;
				$( '#' + id ).find( 'iframe' ).css( 'height', iframeHeight + 'px' );
				$( '#' + id ).find( '.screen-size' ).text( 'width: ' + $resizable.width() + 'px' );
			} );
		} );
	};

	$( document ).ready( function() {
		initializeResizableBlock();
	} );

	if ( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=resizable', initializeResizableBlock );
	}
}( jQuery ) );
