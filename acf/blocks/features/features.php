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
</div>
