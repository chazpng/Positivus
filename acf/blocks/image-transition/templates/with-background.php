<?php
/**
 * With Full height Backgorund Image.
 *
 * @package greydientlab
 */

?>
<div class="with-background relative mx-auto flex flex-col gap-20 overflow-hidden pb-20">
	<div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
		<?php if ( have_rows( 'image_repeater' ) ) : ?>
			<?php 
			while ( have_rows( 'image_repeater' ) ) :
				the_row(); 
				?>
				<div class="image-container relative">
					<img src="<?php echo esc_url( gl_get_block_asset_url( 'image-transition', 'gl-component-bg-image.png' ) ); ?>" class='aspect-[3/3.3] h-full w-full object-cover object-top'>
					<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', '', array( 'class' => 'featured-image absolute aspect-[3/3.3] top-0 left-0 h-0 w-full  object-cover object-top' ) ); ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
