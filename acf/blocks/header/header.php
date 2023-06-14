<?php
/**
 * Header Template.
 *
 * @package circles_x
 */

$style       = $block['className'] ?? '';
$header_type = get_field( 'header_type' );
?>
<div class="gl-b-header">
	<?php if ( 'stacked-flyout-menu' === $header_type ) : ?>
		<?php require get_custom_block_template( 'header', 'stacked-flyout-menu.php' ); ?>
	<?php endif; ?>
</div>
