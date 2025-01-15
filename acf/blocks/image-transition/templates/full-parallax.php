<?php
/**
 * With Full height Backgorund Image.
 *
 * @package greydientlab
 */

?>
<div class="full-parallax relative mx-auto flex flex-col pb-20">
	<div class="relative">
		<?php if ( have_rows( 'image_repeater' ) ) : ?>
			<?php 
			while ( have_rows( 'image_repeater' ) ) :
				the_row(); 
				?>
				<div class="sticky top-0">
					<div class="image-container relative h-screen w-full overflow-hidden">
						<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', '', array( 'class' => 'featured-image w-full h-[200%] absolute bottom-0 left-0 object-cover object-center' ) ); ?>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
