<?php
/**
 * FAQ Section Template.
 *
 * @package circles_x
 */

$style     = $block['className'] ?? '';
$faq_style = get_field( 'faq_style' );
$align     = $block['align'];
?>
<div class="gl-b-faq-section">
	<?php if ( 'accordion' === $faq_style ) : ?>
		<?php require gl_get_custom_block_template( 'faq-sections', 'accordion.php' ); ?>
	<?php endif; ?>
	<?php if ( 'simple' === $faq_style ) : ?>
		<?php require gl_get_custom_block_template( 'faq-sections', 'simple.php' ); ?>
	<?php endif; ?>
</div>
