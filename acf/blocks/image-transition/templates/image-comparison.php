<?php
/**
 * Image Comparison.
 *
 * @package greydientlab
 */

?>
<div class="image-comparison relative mx-auto flex flex-col pb-20">
	<div class="image-main-container relative h-[30vw] !overflow-hidden">
		<div class="comparison-line absolute left-1/2 z-10 h-full w-1.5 -translate-x-1/2 cursor-col-resize bg-indigo-300"></div>
		<?php if ( have_rows( 'image_repeater' ) ) : ?>
			<?php
			while ( have_rows( 'image_repeater' ) ) :
				the_row();
				?>
				<div class="image-container absolute   !overflow-hidden left-0 top-0 h-[32vw] <?php echo esc_attr( get_row_index() === 1 ? 'w-full' : 'w-1/2 comparison-image' ); ?>" data-id="featuredimg-<?php echo esc_attr( get_row_index() ); ?>">
					<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', '', array( 'class' => 'featured-image w-full h-full object-cover object-left ' ) ); ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
