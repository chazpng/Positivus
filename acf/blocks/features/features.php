<?php
/**
 * Features Template.
 *
 * @package circles_x
 */

$style          = $block['className'] ?? '';
$features_style = get_field( 'features_style' );
$align          = $block['align'];
?>
<div class="gl-b-feature-section">
	<?php if ( 'product' === $features_style ) : ?>
		<?php require gl_get_custom_block_template( 'features', 'product.php' ); ?>
	<?php endif; ?>
	<?php if ( 'simple' === $features_style ) : ?>
		<?php require gl_get_custom_block_template( 'features', 'simple.php' ); ?>
	<?php endif; ?>
</div>
