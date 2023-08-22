/* global jQuery ResizeSensor */
( function( $ ) {
	const initializeResizableBlock = function( $block ) {
		let $resizable = $( '.gl-b-resizable' );
		// let $copyCode = $( '.copy-code' );

		if ( $block ) {
			$resizable = $block.find( '.gl-b-resizable' );
			// $copyCode = $block.find( '.copy-code' );
		}

		$resizable.each( function() {
			$( this ).find( 'iframe' ).on( 'load', function() {
				const id = $( this ).data( 'id' );
				const $this = $( this );
				this.style.height = this.contentDocument.body.scrollHeight + 'px';
				$( '#' + id ).find( '.screen-size' ).text( 'width: ' + $this.width() + 'px' );

				new ResizeSensor( $( '#' + id ).find( '.resize-x' ), function() {
					const iframeHeight = $( '#' + id ).find( 'iframe' )[ 0 ].contentDocument.body.scrollHeight;
					$( '#' + id ).find( 'iframe' ).css( 'height', iframeHeight + 'px' );
					$( '#' + id ).find( '.screen-size' ).text( 'width: ' + $this.width() + 'px' );
				} );
			} );
		} );

		// $copyCode.on( 'click', function() {
		// 	const id = $( this ).data( 'id' );
		// 	const el = $( '#' + id + ' iframe' ).contents().find( '.gl-b-header' ).html();
		// 	$( 'svg g', this ).removeClass( 'opacity-0' );
		// 	console.log( el );
		// } );
	};

	$( document ).ready( function() {
		initializeResizableBlock();
	} );

	if ( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=resizable', initializeResizableBlock );
	}
}( jQuery ) );
