/* global jQuery ResizeSensor*/
( function( $ ) {
	const initializeResizableBlock = function( $block ) {
		let $resizable = $( '.gl-b-resizable' );
		let $preview = $( '.gl-b-resizable .preview-button' );
		let $code = $( '.gl-b-resizable .code-button' );
		let $html = $( '.gl-b-resizable' );
		let $label = $( '.gl-b-resizable .copy-label' );
		let $copyCode = $( '.copy-code' );

		if ( $block ) {
			$resizable = $block.find( '.gl-b-resizable' );
			$preview = $block.find( '.gl-b-resizable .preview-button' );
			$code = $block.find( '.gl-b-resizable .code-button' );
			$label = $block.find( '.gl-b-resizable .copy-label' );
			$html = $block.find( '.gl-b-resizable' );
			$copyCode = $block.find( '.copy-code' );
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

		$copyCode.on( 'click', function() {
			const id = $( this ).data( 'id' );
			const el = $( '#' + id + ' .code-content' ).html();
			const copyButton = $( '#' + id ).find( '.copy-code-label' );
			navigator.clipboard.writeText( el ).then( function() {
				$( copyButton ).text( 'Copied' );
				setTimeout( function() {
					$( copyButton ).text( 'Copy Code' );
				}, 3000 );
			} );
		} );

		// copy label of the block
		$( $label ).click( function() {
			const id = $( this ).data( 'id' );
			const copyText = $( '#' + id ).find( '.label' ).text();
			const copyButton = $( '#' + id ).find( '.copy-label-text' );
			navigator.clipboard.writeText( copyText ).then( function() {
				$( copyButton ).text( 'Copied' );
				setTimeout( function() {
					$( copyButton ).text( 'Copy' );
				}, 3000 );
			} );
		} );

		$( $preview ).click( function() {
			const id = $( this ).data( 'id' );
			const preview = $( '#' + id + ' .preview-button' );
			$( '#' + id + ' .toggle-button' ).removeClass( 'shadow-sm bg-white text-gray-700 active', 'bg-transparent text-gray-500' );
			$( '#' + id + ' .preview-content' ).removeClass( 'hidden' );
			$( '#' + id + ' .code-content' ).addClass( 'hidden' );
			preview.addClass( 'shadow-sm bg-white text-gray-700 active' );
		} );

		$( $code ).click( function() {
			const id = $( this ).data( 'id' );
			const code = $( '#' + id + ' .code-button' );
			$( '#' + id + ' .toggle-button' ).removeClass( 'shadow-sm bg-white text-gray-700 active', 'bg-transparent text-gray-500' ).addClass( 'text-gray-500' );
			$( '#' + id + ' .preview-content' ).addClass( 'hidden' );
			$( '#' + id + ' .code-content' ).removeClass( 'hidden' );
			code.addClass( 'shadow-sm bg-white text-gray-700 active' );
		} );
	};

	$( document ).ready( function() {
		initializeResizableBlock();
	} );

	if ( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=resizable', initializeResizableBlock );
	}
}( jQuery ) );
