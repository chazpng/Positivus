<?php
/**
 * Input Fields
 *
 * This is an example of how to a input element.
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::atom( 'input-fields/input-field', array('key' => 'value') );
 *
 * @package greydientlab
 */

$gl_input_type        = $args['gl_input_type'] ?? '';
$gl_input_label       = $args['gl_input_label'] ?? '';
$gl_input_help_text   = $args['gl_input_help_text'] ?? '';
$gl_input_description = $args['gl_input_title'] ?? '';
$gl_input_code        = $args['gl_input_code'] ?? '';


$gl_input_class = 'flex flex-col';
?>

<div class="input-field <?php echo esc_attr( $gl_input_class ); ?>">
	<?php if ( $gl_input_label ) : ?>
		<label class="block text-sm font-medium leading-6 text-gray-900"><?php echo esc_html( $gl_input_label ); ?></label>
	<?php endif; ?>
	<div class="mt-2">
		<?php echo do_shortcode( $gl_input_code ); ?>
	</div>
	<?php if ( $gl_input_help_text ) : ?>
		<p class="mt-2 text-sm text-gray-500" id="email-description"><?php echo esc_html( $gl_input_help_text ); ?></p>
	<?php endif; ?>
</div>
