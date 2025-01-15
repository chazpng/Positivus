<?php
/**
 * With Full height Backgorund Image.
 *
 * @package greydientlab
 */

?>
<div class="parallax-effect relative mx-auto flex flex-col pb-20">
	<div class="grid grid-cols-1 gap-8">
		<?php if ( have_rows( 'image_repeater' ) ) : ?>
			<?php 
			while ( have_rows( 'image_repeater' ) ) :
				the_row(); 
				?>
				<div class="image-container relative h-[30vw] w-full overflow-hidden">
					<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', '', array( 'class' => 'featured-image w-full h-[120%] absolute bottom-0 left-0 object-cover object-center' ) ); ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
