<?php
/**
 * Header Template.
 *
 * @package circles_x
 */

$style       = $block['className'] ?? '';
$header_type = get_field( 'header_type' );
$align       = $block['align'];
?>
<div class="gl-b-header <?php echo esc_attr( $align ); ?>">
	<?php require get_custom_block_template( 'header', 'header.php' ); ?>
</div>
