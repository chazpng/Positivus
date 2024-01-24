<?php
/**
 * Dropdown Button Groups
 *
 * This is an example of how to a dropdown button groups element.
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::molecule( 'button-groups/dropdown', array('key' => 'value') );
 *
 * @package greydientlab
 */

$dummy = [
	[
		'text' => 'Save and Schedule',
		'link' => '#',
	],
	[
		'text' => 'Save and Publish',
		'link' => '#',
	],
	[
		'text' => 'Export PDF',
		'link' => '#',
	],
];

$gl_bg_color   = $args['gl_bg_color'] ?? 'bg-white';
$gl_btn_label  = $args['gl_btn_label'] ?? 'Save changes';
$gl_text_color = $args['gl_text_color'] ?? 'text-gray-900';
$gl_left_link  = $args['gl_left_link'] ?? '#';
$gl_right_link = $args['gl_right_link'] ?? '#';

$gl_dropdown_items = $args['gl_dropdown_items'] ?? $dummy;

$default_classes  = 'relative inline-flex items-center bg-white px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10';
$btn_first_class  = sprintf( '%s %s %s %s', $gl_bg_color, $gl_text_color, $default_classes, 'rounded-l-md' );
$btn_second_class = sprintf( '%s %s %s %s', $gl_bg_color, $gl_text_color, $default_classes, 'rounded-r-md -ml-px' );
?>
<div class="inline-flex rounded-md shadow-sm">
	<button type="button" class="relative inline-flex items-center rounded-l-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">
		<?php echo esc_html( $gl_btn_label ); ?>
	</button>

	<div class="relative -ml-px block" x-data="{ open: false }" @click.outside="open=false">
		<button type="button" class="relative inline-flex items-center rounded-r-md bg-white px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10" id="option-menu-button" aria-expanded="true" aria-haspopup="true" @click="open = !open">
			<span class="sr-only">Open options</span>
			<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
				<path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
			</svg>
		</button>

		<div
			class="absolute right-0 z-10 -mr-1 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
			role="menu"
			aria-orientation="vertical"
			aria-labelledby="option-menu-button"
			tabindex="-1"
			x-show="open"
			x-transition x-transition.duration.500ms
		>
			<div class="py-1" role="none">
				<?php foreach ( $gl_dropdown_items as $value ) : ?>
					<a
						href="<?php echo esc_attr( $value['link'] ); ?>"
						class="text-gray-700 block px-4 py-2 text-sm hover:text-gray-900 hover:bg-gray-100"
						role="menuitem"
						tabindex="-1"
						@click="open = !open"
					>
						<?php echo esc_html( $value['text'] ); ?>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
