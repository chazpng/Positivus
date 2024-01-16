<?php
/**
 * CTA Section Template.
 *
 * @package circles_x
 */

$style       = $block['className'] ?? '';
$stats_style = get_field( 'stats_style' );
$align       = $block['align'];
?>
<div class="gl-b-stats-section">
<?php if ( 'stepped' === $stats_style ) : ?>
		<?php require gl_get_custom_block_template( 'stats-sections', 'stepped.php' ); ?>
	<?php endif; ?>
	<?php if ( 'with-image' === $stats_style ) : ?>
		<?php require gl_get_custom_block_template( 'stats-sections', 'with-image.php' ); ?>
	<?php endif; ?>
	<?php if ( 'simple' === $stats_style ) : ?>
		<?php require gl_get_custom_block_template( 'stats-sections', 'simple.php' ); ?>
	<?php endif; ?>
</div>
