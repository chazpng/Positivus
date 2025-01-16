<?php
/**
 * Parallax Effect.
 *
 * @package greydientlab
 */

?>
<div class="reverse-auto-scroll mx-auto flex h-[600px] overflow-scroll pb-20">
	<div class="wrapper mx-auto flex gap-x-8">
		<div class="first-column-container box up flex-1">
			<?php if ( have_rows( 'image_repeater' ) ) : ?>
				<?php
				while ( have_rows( 'image_repeater' ) ) :
					the_row();
					?>
					<div class="image-container relative mb-8 w-full">
						<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', '', array( 'class' => 'featured-image w-full object-cover object-center' ) ); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="second-column-container box down flex-1">
			<?php if ( have_rows( 'image_repeater_two' ) ) : ?>
				<?php
				while ( have_rows( 'image_repeater_two' ) ) :
					the_row();
					?>
					<div class="image-container relative mb-8 w-full">
						<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', '', array( 'class' => 'featured-image w-full object-cover object-center' ) ); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
