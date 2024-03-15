<?php
/**
 * Radio Group
 *
 * This is an example of how to a checkbox element.
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::atom( 'radio-groups/radio-group', array('key' => 'value') );
 *
 * @package greydientlab
 */

$gl_radio_type   = $args['gl_radio_type'] ?? '';
$gl_custom_radio = $args['gl_custom_radio'] ?? '';
$gl_legend_label = $args['gl_legend_label'] ?? '';

$legend_class    = 'sr-only';
$fieldset_class  = '';
$container_class = '';


switch ( $gl_radio_type ) {
	case 'simple':
		$fieldset_class  = 'mt-4';
		$container_class = 'space-y-4';
		break;

	case 'inline':
		$fieldset_class  = 'mt-4';
		$container_class = 'space-y-4 sm:flex sm:items-center sm:space-x-10 sm:space-y-0';
		break;

	case 'description':
		$container_class = 'space-y-5';
		break;

	case 'inline-description':
		$container_class = 'space-y-5';
		break;

	case 'right':
		$legend_class    = 'text-base font-semibold text-gray-900';
		$container_class = 'mt-4 divide-y divide-gray-200 border-b border-t border-gray-200';
		break;
	case 'right-description':
		$fieldset_class  = 'mt-2';
		$container_class = 'divide-y divide-gray-200';
		break;

	case 'color':
		$legend_class    = 'block text-sm font-medium leading-6 text-gray-900';
		$container_class = 'mt-4 flex items-center space-x-3';
		break;

	case 'cards':
		$legend_class    = 'text-base font-semibold leading-6 text-gray-900';
		$container_class = 'mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-3 sm:gap-x-4';
		break;

	case 'small-cards':
		$fieldset_class  = 'mt-2';
		$container_class = 'grid grid-cols-3 gap-3 sm:grid-cols-6';
		break;

	case 'stacked-cards':
		$container_class = 'space-y-4';
		break;

	case 'table':
		$container_class = 'relative -space-y-px rounded-md bg-white';
		break;

	case 'panel':
		$container_class = '-space-y-px rounded-md bg-white';
		break;

	default:
		break;
}

?>
<fieldset class="<?php echo esc_attr( $fieldset_class ); ?>">
	<legend class="<?php echo esc_attr( $legend_class ); ?>"><?php echo esc_attr( $gl_legend_label ); ?></legend>
	<div class="<?php echo esc_attr( $container_class ); ?>">
		<?php
		echo $gl_custom_radio; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
		?>
	</div>
</fieldset>

