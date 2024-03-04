<?php
/**
 * Content Sections Template.
 *
 * @package circles_x
 */

$style         = $block['className'] ?? '';
$content_style = get_field( 'content_style' );
$align         = $block['align'];
?>


<div class="gl-b-content-section">
	<?php if ( 'simple' === $content_style ) : ?>
		<?php require gl_get_custom_block_template( 'content', 'simple.php' ); ?>
	<?php endif; ?>
	<?php if ( 'sticky' === $content_style ) : ?>
		<?php require gl_get_custom_block_template( 'content', 'sticky.php' ); ?>
	<?php endif; ?>
	<?php if ( 'stats' === $content_style ) : ?>
		<?php require gl_get_custom_block_template( 'content', 'stats.php' ); ?>
	<?php endif; ?>
	<?php if ( 'split' === $content_style ) : ?>
		<?php require gl_get_custom_block_template( 'content', 'split-image.php' ); ?>
	<?php endif; ?>
	<?php if ( 'testimonial' === $content_style ) : ?>
		<?php require gl_get_custom_block_template( 'content', 'testimonial.php' ); ?>
	<?php endif; ?>
	<?php if ( 'screenshot' === $content_style ) : ?>
		<?php require gl_get_custom_block_template( 'content', 'screenshot.php' ); ?>
	<?php endif; ?>
</div>
