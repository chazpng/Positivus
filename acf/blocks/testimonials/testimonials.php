<?php
/**
 * Testimonials Template.
 *
 * @package greydientlab
 */

$style             = $block['className'] ?? '';
$testimonial_style = get_field( 'testimonial_style' );
?>
<div class="gl-b-testimonial-section">
	<?php if ( 'simple' === $testimonial_style ) : ?>
		<?php require gl_get_custom_block_template( 'testimonials', 'simple.php' ); ?>
	<?php endif; ?>
	<?php if ( 'large_avatar' === $testimonial_style ) : ?>
		<?php require gl_get_custom_block_template( 'testimonials', 'large-avatar.php' ); ?>
	<?php endif; ?>
	<?php if ( 'overlapping_image' === $testimonial_style ) : ?>
		<?php require gl_get_custom_block_template( 'testimonials', 'overlapping.php' ); ?>
	<?php endif; ?>
	<?php if ( 'background_image' === $testimonial_style ) : ?>
		<?php require gl_get_custom_block_template( 'testimonials', 'bg-image.php' ); ?>
	<?php endif; ?>
</div>
