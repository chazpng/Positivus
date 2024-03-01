<?php
/**
 * Hero Section Template.
 *
 * @package circles_x
 */

$style      = $block['className'] ?? '';
$hero_style = get_field( 'hero_style' );
$align      = $block['align'];
?>


<div class="gl-b-hero-section  overflow-hidden">
	<?php if ( 'simple' === $hero_style ) : ?>
		<?php require gl_get_custom_block_template( 'hero-sections', 'simple.php' ); ?>
	<?php endif; ?>
	<?php if ( 'column' === $hero_style ) : ?>
		<?php require gl_get_custom_block_template( 'hero-sections', 'two-column.php' ); ?>
	<?php endif; ?>
</div>
