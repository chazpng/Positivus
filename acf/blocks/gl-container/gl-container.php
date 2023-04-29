<?php
/**
 * GL Container Template.
 *
 * @package circles_x
 */

$style            = '';
$bg_image         = '';
$background_color = $block['backgroundColor'] ?? null;
$array_style      = $block['style'] ?? null;
$class_name       = $block['className'] ?? '';

if ( $background_color ) {
	$style = 'background-color: var(--wp--preset--color--' . $background_color . ')';
}

if ( $array_style ) {
	$array_style = wp_style_engine_get_styles( $array_style );
	$style       = $array_style['css'];
}

if ( ! empty( get_field( 'background_image' ) ) ) {
	$style .= ' background-image: url(' . get_field( 'background_image' ) . ');';
}

?>
<div class="gl-b-container-block <?php echo esc_attr( $class_name ); ?>" style="<?php echo esc_attr( $style ); ?>">
	<div class="spacer-top">
		<div class="desktop" style="height: <?php the_field( 'desktop_top_spacing' ); ?>px"></div>
		<div class="tablet" style="height: <?php the_field( 'tablet_top_spacing' ); ?>px"></div>
		<div class="mobile" style="height: <?php the_field( 'mobile_top_spacing' ); ?>px"></div>
	</div>

	<div class="acf-inner-blocks-container">
		<?php echo '<InnerBlocks />'; ?>
	</div>

	<div class="spacer-bottom">
		<div class="desktop" style="height: <?php the_field( 'desktop_bottom_spacing' ); ?>px"></div>
		<div class="tablet" style="height: <?php the_field( 'tablet_bottom_spacing' ); ?>px"></div>
		<div class="mobile" style="height: <?php the_field( 'mobile_bottom_spacing' ); ?>px"></div>
	</div>
</div>
