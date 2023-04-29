<?php
/**
 * GL Container Template.
 *
 * @package circles_x
 */

$style            = '';
$background_color = $block['backgroundColor'] ?? null;
$array_style      = $block['style'] ?? null;
$class_name       = $block['className'] ?? '';
$font_size        = $block['fontSize'] ?? null;
$text_color       = $block['textColor'] ?? null;
$align_text       = $block['align_text'] ?? null;

if ( $background_color ) {
	$style = 'background-color: var(--wp--preset--color--' . $background_color . ');';
}

if ( $array_style ) {
	$array_style = wp_style_engine_get_styles( $array_style );
	$style      .= ' ' . $array_style['css'];
}

if ( $font_size ) {
	$style .= ' font-size: var(--wp--preset--font-size--' . $font_size . ');';
}

if ( $text_color ) {
	$style .= ' color: var(--wp--preset--color--' . $text_color . ');';
}

if ( $align_text ) {
	$style .= ' text-align: ' . $align_text . ';';
}

?>
<p class="gl-b-text <?php echo esc_attr( $class_name ); ?>" style="<?php echo esc_attr( $style ); ?>">
	<?php the_field( 'text' ); ?>
</p>
