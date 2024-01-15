<?php
/**
 * CTA Section Template.
 *
 * @package circles_x
 */

$style     = $block['className'] ?? '';
$cta_style = get_field( 'cta_style' );
$align     = $block['align'];
?>
<div class="gl-b-cta-section">

<<<<<<< HEAD
	<?php if ( 'with-image-tiles' === $cta_style ) : ?>
		<?php require gl_get_custom_block_template( 'cta-sections', 'with-image-tiles.php' ); ?>
	<?php endif; ?>

	<?php if ( 'split-with-image' === $cta_style ) : ?>
		<?php require gl_get_custom_block_template( 'cta-sections', 'split-with-image.php' ); ?>
	<?php endif; ?>

	<?php if ( 'two-columns' === $cta_style ) : ?>
		<?php require gl_get_custom_block_template( 'cta-sections', 'two-columns.php' ); ?>
	<?php endif; ?>

	<?php if ( 'with-panel' === $cta_style ) : ?>
		<?php require gl_get_custom_block_template( 'cta-sections', 'with-panel.php' ); ?>
	<?php endif; ?>

	<?php if ( 'simple' === $cta_style ) : ?>
		<?php require gl_get_custom_block_template( 'cta-sections', 'simple.php' ); ?>
	<?php endif; ?>
=======
	<?php if ( 'split-with-image' === $cta_style ) : ?>
		<?php require gl_get_custom_block_template( 'cta-sections', 'split-with-image.php' ); ?>
	<?php endif; ?>

	<?php if ( 'two-columns' === $cta_style ) : ?>
		<?php require gl_get_custom_block_template( 'cta-sections', 'two-columns.php' ); ?>
	<?php endif; ?>

	<?php if ( 'with-panel' === $cta_style ) : ?>
		<?php require gl_get_custom_block_template( 'cta-sections', 'with-panel.php' ); ?>
	<?php endif; ?>

	<?php if ( 'simple' === $cta_style ) : ?>
		<?php require gl_get_custom_block_template( 'cta-sections', 'simple.php' ); ?>
	<?php endif; ?>
>>>>>>> fb573ce0fb45efa5e251f6ef1c9a8bcfe10c5401
</div>
