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
<div class="gl-b-wysiwyg <?php echo esc_attr( $class_name ); ?>" style="<?php echo esc_attr( $style ); ?>">
	<?php echo wp_kses_post( $paragraph ); ?>
</div>
