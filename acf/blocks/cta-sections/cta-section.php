<?php
/**
 * CTA Section Template.
 *
 * @package circles_x
 */

$style          = $block['className'] ?? '';
$cta_style = get_field( 'cta_style' );
$align          = $block['align'];
?>
<div class="gl-b-cta-section">
	<?php if ( 'two-columns' === $cta_style ) : ?>
		<?php require gl_get_custom_block_template( 'cta-sections', 'two-columns.php' ); ?>
	<?php endif; ?>

	<?php if ( 'simple' === $cta_style ) : ?>
		<?php require gl_get_custom_block_template( 'cta-sections', 'simple.php' ); ?>
	<?php endif; ?>
</div>
