<?php
/**
 * Text Transition.
 * 
 * You can use the following class for text transition.
 * 1. gl-a-simple-fade.
 *
 * @package greydientlab
 */

$style       = $block['className'] ?? '';
$field_style = get_field( 'field_style' );
$repeater    = get_field( 'list_repeater' );
?>
<div class="gl-b-text-transition relative rounded-xl border px-8">
	<?php if ( 'textarea' === $field_style ) : ?>
		<?php require gl_get_custom_block_template( 'text-transition', 'textarea.php' ); ?>
	<?php endif; ?>
	<?php if ( 'list-items' === $field_style ) : ?>
		<?php require gl_get_custom_block_template( 'text-transition', 'list.php' ); ?>
	<?php endif; ?>
</div>
