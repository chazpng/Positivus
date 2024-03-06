<?php
/**
 * Article Image Block.
 *
 * @package greydientlab
 */

?>
<div class="pt-3 pb-12 gl-b-article-image-block">
	<?php echo wp_get_attachment_image( get_field( 'image' ), 'full', '', array( 'class' => 'h-full w-full object-contain rounded-xl' ) ); ?>
	<?php if ( get_field( 'description' ) ) : ?>
		<div class="description">
		<p class="text-gray-600 !text-sm mt-4 !mb-0"><?php echo esc_html( get_field( 'description' ) ); ?> 
		<?php 
		if ( get_field( 'credentials_name' ) && get_field( 'credentials_url' ) ) :
			?>
			<span><a class="underline" target="_blank" href="<?php echo esc_url( the_field( 'credentials_url' ) ); ?>"><?php echo esc_html( get_field( 'credentials_name' ) ); ?></a></span> <?php endif; ?>
		</p>
		</div>
	<?php endif; ?>
</div>
