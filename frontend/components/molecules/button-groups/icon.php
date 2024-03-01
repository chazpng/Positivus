<?php
/**
 * Icon Button Groups
 *
 * This is an example of how to a icon button groups element.
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::molecule( 'button-groups/icon', array('key' => 'value') );
 *
 * @package greydientlab
 */

$gl_bg_color   = $args['gl_bg_color'] ?? 'bg-white';
$gl_text_color = $args['gl_text_color'] ?? 'text-gray-900';
$gl_left_link  = $args['gl_left_link'] ?? '#';
$gl_right_link = $args['gl_right_link'] ?? '#';

$default_classes  = 'relative inline-flex items-center bg-white px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10';
$btn_first_class  = sprintf( '%s %s %s %s', $gl_bg_color, $gl_text_color, $default_classes, 'rounded-l-md' );
$btn_second_class = sprintf( '%s %s %s %s', $gl_bg_color, $gl_text_color, $default_classes, 'rounded-r-md -ml-px' );
?>
<span class="isolate inline-flex rounded-md shadow-sm">
	<button type="button" class="<?php echo esc_attr( $btn_first_class ); ?>">
		<a class="text-gray-400" href="<?php echo esc_url( $gl_left_link ); ?>">
			<span class="sr-only">Previous</span>
			<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
				<path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
			</svg>
		</a>
	</button>

	<button type="button" class="<?php echo esc_attr( $btn_second_class ); ?>">
		<a class="text-gray-400" href="<?php echo esc_url( $gl_right_link ); ?>">
			<span class="sr-only">Next</span>
			<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
				<path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
			</svg>
		</a>
	</button>
</span>
