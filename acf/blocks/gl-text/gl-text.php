<?php
/**
 * GL Container Template.
 *
 * @package circles_x
 */

$class_attr = get_block_wrapper_attributes( array( 'class' => 'gl-b-text m-0 p-0' ) );
$text       = empty( get_field( 'text' ) ) ? 'Your Text Here...' : get_field( 'text' );
?>
<p <?php echo wp_kses_data( $class_attr ); ?>>
	<?php echo wp_kses_post( nl2br( $text ) ); ?>
</p>
