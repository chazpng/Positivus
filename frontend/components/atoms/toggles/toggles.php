<?php
/**
 * Toggle
 *
 * This is an example of how to a toggle element.
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::atom( 'toggles/toggle', array('key' => 'value') );
 *
 * @package greydientlab
 */

$gl_toggle_type = $args['gl_toggle_type'] ?? '';
$btn_class      = '';

switch ( $gl_toggle_type ) {
	case 'toggle-simple':
		$btn_class .= 'bg-gray-200 relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2';
		break;

	case 'toggle-short':
		$btn_class .= ' bg-white text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50';
		break;

	case 'toggle-icon':
		$btn_class .= ' bg-indigo-500 text-white hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500';
		break;

	case 'toggle-left-label':
		$btn_class .= ' bg-white/10 text-white hover:bg-white/20';
		break;

	case 'toggle-right-label':
		$btn_class .= ' bg-indigo-50 text-indigo-600 hover:bg-indigo-100';
		break;

	default:
		break;
}

?>
<div class="test">
	<?php echo do_shortcode( '[contact-form-7 id="8ebab60" title="Toggle"]' ); ?>
</div>
