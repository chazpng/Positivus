/* global jQuery Swiper*/
( function( $ ) {
// all functions is equivalent to each template. You can just copy the specific function based on your needs.
	const initializeWithExpandingImage = function() {
		const withExpandingImage = document.querySelector( '.with-expanding-images' );
		if ( withExpandingImage ) {
			$( '.with-expanding-images' ).on( 'mouseenter', '.wei-repeater-images', function() {
				const siblings = $( this ).siblings();
				$( siblings ).removeClass( 'flex-[50%]' ).addClass( 'flex-[25%]' );
				$( this ).addClass( 'flex-[50%]' ).removeClass( 'flex-[25%]' );
			} );
			new Swiper( '.swiper', {
				loop: true,
				slidesPerView: 'auto',
				centeredSlides: false,
				allowTouchMove: true,
				spaceBetween: 16,
				speed: 300,
				autoplay: {
					delay: 3000,
					disableOnInteraction: false,
				},
			} );
		}
	};

	$( document ).ready( function() {
		initializeWithExpandingImage();
	} );

	if ( window.acf ) {
		window.acf.addAction( 'render_block_preview/type=gl_features', initializeWithExpandingImage );
	}
}( jQuery ) );
