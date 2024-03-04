<?php
/**
 * Dropdown
 *
 * This is an example of how to add a dropdown element.
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::atom( 'dropdowns/dropdown', array('key' => 'value') );
 *
 * @package greydientlab
 */

$dummy = [
	[
		'text' => 'Account settings',
		'link' => '#',
	],
	[
		'text' => 'Support',
		'link' => '#',
	],
	[
		'text' => 'License',
		'link' => '#',
	],
	[
		'text' => 'Sign out',
		'link' => '#',
	],
];

$gl_dropdown_label = $args['gl_dropdown_label'] ?? 'Options';
$gl_dropdown_items = $args['gl_dropdown_items'] ?? $dummy;
$gl_is_minimal     = $args['gl_is_minimal'] ?? false;

$gl_custom_html_dropdown = $args['gl_custom_html_dropdown'] ?? false;

?>
<div class="relative inline-block text-left" x-data="{ open: false }" @click.outside="open=false">
	<div>
		<?php if ( $gl_is_minimal ) : ?>
			<button
				type="button"
				class="flex items-center rounded-full bg-transparent text-gray-400 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500"
				id="menu-button"
				aria-expanded="true"
				aria-haspopup="true"
				@click="open = !open"
			>
				<span class="sr-only">Open options</span>
				<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					<path d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
				</svg>
			</button>
		<?php else : ?>
			<button
				type="button"
				class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
				id="menu-button"
				aria-expanded="true"
				aria-haspopup="true"
				@click="open = !open"
			>
				<?php echo esc_html( $gl_dropdown_label ); ?>
				<svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					<path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
				</svg>
			</button>
		<?php endif; ?>
	</div>

	<div
		class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none divide-y divide-gray-100"
		role="menu"
		aria-orientation="vertical"
		aria-labelledby="menu-button"
		tabindex="-1"
		x-show="open"
		x-transition x-transition.duration.50ms
	>
	<?php if ( $gl_custom_html_dropdown ) : ?>

		<?php echo $gl_custom_html_dropdown; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

	<?php else : ?>

		<div class="py-1" role="none">
			<?php foreach ( $gl_dropdown_items as $value ) : ?>
				<a
					href="<?php echo esc_attr( $value['link'] ); ?>"
					class="hover:bg-gray-100 hover:text-gray-900 text-gray-700 px-4 py-2 text-sm group flex items-center"
					role="menuitem"
					tabindex="-1"
					@click="open = !open"
				>
					<?php if ( array_key_exists( 'icon', $value ) ) : ?>

						<?php if ( preg_match( '/http/i', $value['icon'] ) ) : ?>
							<img src="<?php echo esc_url( $value['icon'] ); ?>" class="h-5 w-5 mr-3" alt="Icon">
						<?php endif; ?>

						<?php if ( preg_match( '/svg/i', $value['icon'] ) ) : ?>
							<?php echo $value['icon']; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						<?php endif; ?>

					<?php endif; ?>
					<?php echo esc_html( $value['text'] ); ?>
				</a>
			<?php endforeach; ?>
		</div>

	<?php endif; ?>
	</div>
</div>

