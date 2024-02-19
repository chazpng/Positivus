<?php
/**
 * CTA Section Template.
 *
 * @package circles_x
 */

$style         = $block['className'] ?? '';
$pricing_style = get_field( 'pricing_style' );
$align         = $block['align'];
?>
<div class="gl-b-pricing-section">
	<?php if ( 'without-tiers' === $pricing_style ) : ?>
		<?php require gl_get_custom_block_template( 'pricing', 'without-tiers.php' ); ?>
	<?php endif; ?>
	<?php if ( 'with-tiers' === $pricing_style ) : ?>
		<?php require gl_get_custom_block_template( 'pricing', 'with-tiers.php' ); ?>
	<?php endif; ?>
	<?php if ( 'with-toggle' === $pricing_style ) : ?>
		<?php require gl_get_custom_block_template( 'pricing', 'with-toggle.php' ); ?>
	<?php endif; ?>
</div>
