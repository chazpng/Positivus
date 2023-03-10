<?php
/**
 * GL Container Template.
 *
 * @package circles_x
 */

$style = $block['className'] ?? '';
?>
<div class="gl-b-container-block <?php echo esc_attr( $style ); ?>">
	<div class="spacer-top">
		<div class="desktop"></div>
		<div class="tablet"></div>
		<div class="mobile"></div>
	</div>

	<div class="acf-inner-blocks-container">
		<?php echo '<InnerBlocks />'; ?>
	</div>

	<div class="spacer-bottom">
		<div class="desktop"></div>
		<div class="tablet"></div>
		<div class="mobile"></div>
	</div>
</div>
