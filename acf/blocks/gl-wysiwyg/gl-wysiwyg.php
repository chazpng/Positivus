<?php
/**
 * GL Wysiwyg Template.
 *
 * @package circles_x
 */

$style            = '';
$background_color = $block['backgroundColor'] ?? null;
$class_name       = $block['className'] ?? '';

if ( $background_color ) {
	$style = 'background-color: var(--wp--preset--color--' . $background_color . ');';
}

$paragraph = empty( get_field( 'paragraph' ) ) ? 'Your Paragraph Here...' : get_field( 'paragraph' );
?>
<div class="gl-b-wysiwyg <?php echo esc_attr( $class_name ); ?> [&_h3]:m-0 [&_p:last-child]:m-0 [&_p:nth-of-type(1)]:mt-0 container m-auto" style="<?php echo esc_attr( $style ); ?>">
	<div class="grid grid-cols-2">
		<div><?php echo wp_kses_post( $paragraph ); ?></div>
	</div>
</div>
