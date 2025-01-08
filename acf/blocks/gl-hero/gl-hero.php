<?php
/**
 * Greydient Lab Hero Section.
 * This section is not based on the Tailwind UI.
 * This file is similar to the hero block, but this one is more independent and organized.
 * All fields are separately to each other for better access and avoid confusion.
 * 
 * @package circles_x
 */

$gl_hero = get_field( 'hero_style' );
$style   = $block['className'] ?? '';
?>
<div class="gl-b-hero-section">
	<?php if ( 'full' === $gl_hero ) : ?>
		<?php require gl_get_custom_block_template( 'gl-hero', 'full-height-background-image.php' ); ?>
	<?php endif; ?>
</div>
