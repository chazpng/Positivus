<?php
/**
 * Blog Template.
 *
 * @package circles_x
 */

$style      = $block['className'] ?? '';
$blog_style = get_field( 'blog_type' );
$align      = $block['align'];
?>
<div class="gl-b-blog-section">
	<?php if ( 'three-column' === $blog_style ) : ?>
		<?php require gl_get_custom_block_template( 'blog', 'three-column.php' ); ?>
	<?php endif; ?>
	<?php if ( 'simple' === $blog_style ) : ?>
		<?php require gl_get_custom_block_template( 'blog', 'single-column.php' ); ?>
	<?php endif; ?>
	<?php if ( 'featured' === $blog_style ) : ?>
		<?php require gl_get_custom_block_template( 'blog', 'featured.php' ); ?>
	<?php endif; ?>
	<?php if ( 'photo-list' === $blog_style ) : ?>
		<?php require gl_get_custom_block_template( 'blog', 'photo-list.php' ); ?>
	<?php endif; ?>
</div>
