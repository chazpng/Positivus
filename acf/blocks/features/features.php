<?php
/**
 * Features Template.
 *
 * @package circles_x
 */

$style          = $block['className'] ?? '';
$features_style = get_field( 'features_style' );
?>
<div class="gl-b-feature-section">
	<?php if ( 'product-screenshot' === $features_style ) : ?>
		<?php require get_custom_block_template( 'features', 'product-screenshot.php' ); ?>
	<?php endif; ?>
	<?php if ( '2x2-grid' === $features_style ) : ?>
		<?php require get_custom_block_template( 'features', 'centered-2x2-grid.php' ); ?>
	<?php endif; ?>
	<?php if ( 'large-screenshot' === $features_style ) : ?>
		<?php require get_custom_block_template( 'features', 'large-screenshot.php' ); ?>
	<?php endif; ?>
	<?php if ( 'offset-feature' === $features_style ) : ?>
		<?php require get_custom_block_template( 'features', 'offset-with-feature-list.php' ); ?>
	<?php endif; ?>
	<?php if ( 'simple' === $features_style ) : ?>
		<?php require get_custom_block_template( 'features', 'simple.php' ); ?>
	<?php endif; ?>
	<?php if ( 'offset-2x2' === $features_style ) : ?>
		<?php require get_custom_block_template( 'features', 'offset-2x2-grid.php' ); ?>
	<?php endif; ?>
	<?php if ( 'three-column' === $features_style ) : ?>
		<?php require get_custom_block_template( 'features', 'three-column-with-icons.php' ); ?>
	<?php endif; ?>
	<?php if ( 'with-testimonial' === $features_style ) : ?>
		<?php require get_custom_block_template( 'features', 'with-testimonial.php' ); ?>
	<?php endif; ?>
	<?php if ( 'three-column-large-icons' === $features_style ) : ?>
		<?php require get_custom_block_template( 'features', 'three-column-with-large-icons.php' ); ?>
	<?php endif; ?>
	<?php if ( 'two-column-with-icons' === $features_style ) : ?>
		<?php require get_custom_block_template( 'features', 'two-column-with-icons.php' ); ?>
	<?php endif; ?>
	<?php if ( 'code-panel' === $features_style ) : ?>
		<?php require get_custom_block_template( 'features', 'code-panel.php' ); ?>
	<?php endif; ?>
	<?php if ( 'contained-in-panel' === $features_style ) : ?>
		<?php require get_custom_block_template( 'features', 'contained-in-panel.php' ); ?>
	<?php endif; ?>
	<?php if ( 'product-screenshot-panel' === $features_style ) : ?>
		<?php require get_custom_block_template( 'features', 'product-screenshot-panel.php' ); ?>
	<?php endif; ?>
</div>
