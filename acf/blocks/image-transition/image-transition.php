<?php
/**
 * Logos Template.
 *
 * @package circles_x
 */

$style       = $block['className'] ?? '';
$image_style = get_field( 'image_style' );
$align       = $block['align'];
?>
<div class="gl-b-image-transition">
	<?php if ( 'with-background' === $image_style ) : ?>
		<?php require gl_get_custom_block_template( 'image-transition', 'with-background.php' ); ?>
	<?php endif; ?>
	<?php if ( 'scroll-image-scale' === $image_style ) : ?>
		<?php require gl_get_custom_block_template( 'image-transition', 'scroll-image-scale.php' ); ?>
	<?php endif; ?>
	<?php if ( 'parallax-effect' === $image_style ) : ?>
		<?php require gl_get_custom_block_template( 'image-transition', 'parallax-effect.php' ); ?>
	<?php endif; ?>
	<?php if ( 'image-reveal-parallax' === $image_style ) : ?>
		<?php require gl_get_custom_block_template( 'image-transition', 'image-reveal-parallax.php' ); ?>
	<?php endif; ?>
	<?php if ( 'full-parallax' === $image_style ) : ?>
		<?php require gl_get_custom_block_template( 'image-transition', 'full-parallax.php' ); ?>
	<?php endif; ?>
</div>
