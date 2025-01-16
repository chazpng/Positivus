<?php
/**
 * Pixelated Transition.
 *
 * @package greydientlab
 */

?>
<div class="pixelated relative mx-auto flex flex-col pb-20">
	<div class="image-wrapper relative h-full">
		<?php if ( have_rows( 'image_repeater_pixelated' ) ) : ?>
			<?php
			while ( have_rows( 'image_repeater_pixelated' ) ) :
				the_row();
				?>
				<div class="relative">
					<?php echo wp_get_attachment_image( get_sub_field( 'image_hd' ), 'full', '', array( 'class' => 'featured-image w-full h-full object-cover object-center' ) ); ?>
					<?php echo wp_get_attachment_image( get_sub_field( 'image_pixelated' ), 'full', '', array( 'class' => 'tiled-image w-full h-full object-cover absolute top-0 left-0 w-full object-center' ) ); ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
