<?php
/**
 * With Background Image Version 2.
 *
 * @package greydientlab
 */

?>
<div class="with-background-two relative mx-auto flex flex-col gap-20 overflow-hidden pb-20">
	<div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
		<?php if ( have_rows( 'image_repeater' ) ) : ?>
			<?php 
			while ( have_rows( 'image_repeater' ) ) :
				the_row();
				?>
				<div class="image-container relative">
					<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', '', array( 'class' => 'featured-image  aspect-[3/3.3]  w-full  object-cover object-top' ) ); ?>
					<div class="purple-background absolute  <?php echo esc_attr( ( get_row_index() % 2 ) === 0 ? 'right-0 bottom-0' : 'left-0 top-0' ); ?>  h-full w-full bg-indigo-500"></div>
					<div class="white-background absolute   <?php echo esc_attr( ( get_row_index() % 2 ) === 0 ? 'left-0 top-0' : 'right-0 bottom-0' ); ?>  h-full w-full bg-white"></div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
