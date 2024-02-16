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
<?php if ( 'stepped' === $pricing_style ) : ?>
		<?php require gl_get_custom_block_template( 'pricing', 'stepped.php' ); ?>
	<?php endif; ?>
	<?php if ( 'with-image' === $pricing_style ) : ?>
		<?php require gl_get_custom_block_template( 'pricing', 'with-image.php' ); ?>
	<?php endif; ?>
	<?php if ( 'simple' === $pricing_style ) : ?>
		<?php require gl_get_custom_block_template( 'pricing', 'simple.php' ); ?>
	<?php endif; ?>
</div>
