<?php
/**
 * Tiled Transition.
 *
 * @package greydientlab
 */

?>
<div class="tiled relative mx-auto flex flex-col pb-20">
	<div class="image-wrapper relative h-full">
		<?php if ( have_rows( 'image_repeater' ) ) : ?>
			<?php
			while ( have_rows( 'image_repeater' ) ) :
				the_row();
				?>
				<div class="relative">
					<div class="absolute left-0 top-0 grid h-full w-full grid-cols-6">
						<?php for ( $i = 0; $i < 36; $i++ ) : ?>
							<div class="boxes bg-white"></div>
						<?php endfor; ?>
					</div>
					<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', '', array( 'class' => 'featured-image w-full h-full object-cover w-full object-center' ) ); ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
