<?php
/**
 * Stats Template.
 *
 * @package circles_x
 */

$style       = $block['className'] ?? '';
$stats_style = get_field( 'stats_style' );
?>
<div class="gl-b-stats-section">
	<?php if ( 'simple' === $stats_style ) : ?>
		<?php require gl_get_custom_block_template( 'stats', 'simple.php' ); ?>
	<?php endif; ?>
	<?php if ( 'simple-grid' === $stats_style ) : ?>
		<?php require gl_get_custom_block_template( 'stats', 'simple-grid.php' ); ?>
	<?php endif; ?>
	<?php if ( 'split-image' === $stats_style ) : ?>
		<?php require gl_get_custom_block_template( 'stats', 'split-image.php' ); ?>
	<?php endif; ?>
	<?php if ( 'stepped' === $stats_style ) : ?>
		<?php require gl_get_custom_block_template( 'stats', 'stepped.php' ); ?>
	<?php endif; ?>
	<?php if ( 'timeline' === $stats_style ) : ?>
		<?php require gl_get_custom_block_template( 'stats', 'timeline.php' ); ?>
	<?php endif; ?>
	<?php if ( 'with-background-image' === $stats_style ) : ?>
		<?php require gl_get_custom_block_template( 'stats', 'with-background-image.php' ); ?>
	<?php endif; ?>
	<?php if ( 'with-description' === $stats_style ) : ?>
		<?php require gl_get_custom_block_template( 'stats', 'with-description.php' ); ?>
	<?php endif; ?>
	<?php if ( 'with-two-column-description' === $stats_style ) : ?>
		<?php require gl_get_custom_block_template( 'stats', 'with-two-column-description.php' ); ?>
	<?php endif; ?>
</div>
