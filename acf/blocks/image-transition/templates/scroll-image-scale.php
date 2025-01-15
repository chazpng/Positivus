<?php
/**
 * With Full height Backgorund Image.
 *
 * @package greydientlab
 */

?>
<div class="scroll-image-scale relative mx-auto -mt-[100px] mb-[100px] h-[250vh]">
	<?php if ( have_rows( 'image_repeater' ) ) : ?>
		<?php 
		while ( have_rows( 'image_repeater' ) ) :
			the_row(); 
			?>
			<div class="image-container sticky top-[50px]">
				<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', '', array( 'class' => 'featured-image w-full h-full object-cover object-center' ) ); ?>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
