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
</div>
