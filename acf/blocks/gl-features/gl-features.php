<?php
/**
 * Greydient Lab Features Section.
 * This section is not based on the Tailwind UI.
 * This file is similar to the features block, but this one is more independent and organized.
 * All fields are separately to each other for better access and avoid confusion.
 * 
 * @package circles_x
 */

$gl_features = get_field( 'features_style' );
$style       = $block['className'] ?? '';
?>
<div class="gl-b-features-section">
	<?php if ( 'with-expanding-image' === $gl_features ) : ?>
		<?php require gl_get_custom_block_template( 'gl-features', 'with-expanding-image.php' ); ?>
	<?php endif; ?>
</div>
