<?php
/**
 * Logos Template.
 *
 * @package circles_x
 */

$style     = $block['className'] ?? '';
$logos_style = get_field( 'logos_style' );
$align     = $block['align'];
?>
<div class="gl-b-logos-section">
	<?php if ( 'simple' === $logos_style ) : ?>
		<?php require gl_get_custom_block_template( 'logos', 'simple.php' ); ?>
	<?php endif; ?>
	<?php if ( 'split' === $logos_style ) : ?>
		<?php require gl_get_custom_block_template( 'logos', 'split.php' ); ?>
	<?php endif; ?>
	<?php if ( 'grid' === $logos_style ) : ?>
		<?php require gl_get_custom_block_template( 'logos', 'grid.php' ); ?>
	<?php endif; ?>
</div>
