<?php
/**
 * Blog Template.
 *
 * @package circles_x
 */

$style       = $block['className'] ?? '';
$logos_style = get_field( 'blog_type' );
$align       = $block['align'];
?>
<div class="gl-b-logos-section">
	<?php if ( 'three-column' === $logos_style ) : ?>
		<?php require gl_get_custom_block_template( 'blog', 'three-column.php' ); ?>
	<?php endif; ?>
	<?php if ( 'simple' === $logos_style ) : ?>
		<?php require gl_get_custom_block_template( 'blog', 'single-column.php' ); ?>
	<?php endif; ?>
	<?php if ( 'featured' === $logos_style ) : ?>
		<?php require gl_get_custom_block_template( 'blog', 'featured.php' ); ?>
	<?php endif; ?>
</div>
