<?php
/**
 * Checkbox
 *
 * This is an example of how to a checkbox element.
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::atom( 'checkboxes/checkbox', array('key' => 'value') );
 *
 * @package greydientlab
 */

$gl_field_type        = $args['gl_field_type'] ?? '';
$gl_field_label       = $args['gl_field_label'] ?? '';
$gl_field_description = $args['gl_field_description'] ?? '';
$container_class      = '';
$text_wrapper_class   = '';
$input_wrapper_class  = '';
$label_class          = 'font-medium text-gray-900';


switch ( $gl_field_type ) {
	case 'simple':
		$container_class     = 'relative flex items-start';
		$text_wrapper_class  = 'ml-3 text-sm leading-6';
		$input_wrapper_class = 'flex h-6 items-center';
		break;

	case 'inline':
		$container_class     = 'relative flex items-start';
		$text_wrapper_class  = 'ml-3 text-sm leading-6';
		$input_wrapper_class = 'flex h-6 items-center';
		break;

	case 'right':
		$container_class     = 'relative flex items-start pb-4 pt-3.5';
		$text_wrapper_class  = 'min-w-0 flex-1 text-sm leading-6 order-1';
		$input_wrapper_class = 'ml-3 flex h-6 items-center order-2';
		break;

	case 'heading':
		$container_class     = 'relative flex items-start py-4';
		$text_wrapper_class  = 'min-w-0 flex-1 text-sm leading-6 order-1';
		$input_wrapper_class = 'ml-3 flex h-6 items-center order-2';
		$label_class         = 'select-none font-medium text-gray-900';
		break;

	default:
		break;
}

?>
<div class="<?php echo esc_attr( $container_class ); ?>">
	<div class="<?php echo esc_attr( $input_wrapper_class ); ?>">
		<input id="<?php echo esc_html( $gl_field_label ); ?>" aria-describedby="comments-description" name="<?php echo esc_html( $gl_field_label ); ?>" type="checkbox" class="h-4 w-4 apperance-none rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
	</div>
	<div class="<?php echo esc_attr( $text_wrapper_class ); ?>">
		<label for="<?php echo esc_html( $gl_field_label ); ?>" class="font-medium text-gray-900"><?php echo esc_html( $gl_field_label ); ?></label>
		<?php if ( 'inline' === $gl_field_type ) : ?>
			<?php if ( $gl_field_description ) : ?>
				<span class="text-gray-500"><?php echo esc_html( $gl_field_description ); ?></span>
			<?php endif; ?>
		<?php else : ?>
			<?php if ( $gl_field_description ) : ?>
				<p class="text-gray-500"><?php echo esc_html( $gl_field_description ); ?></p>
			<?php endif; ?>
		<?php endif; ?>
	</div>
</div>
