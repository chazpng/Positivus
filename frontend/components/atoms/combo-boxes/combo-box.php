<?php
/**
 * Combo Boxes
 *
 * This is an example of how to a checkbox element.
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::atom( 'checkboxes/checkbox', array('key' => 'value') );
 *
 * @package greydientlab
 */

$gl_combo_type = $args['gl_combo_type'] ?? 'simple';
?>
<?php if ( 'simple' === $gl_combo_type ) : ?>
<div>
	<label for="combobox" class="block text-sm font-medium leading-6 text-gray-900">Assigned to</label>
	<div class="relative mt-2 inline-block w-full text-left">
		<div>
			<button id="dropdown-button" type="button" class="focus:shadow-outline-blue inline-flex w-full justify-between rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium leading-5 text-gray-700 shadow-sm transition duration-150 ease-in-out hover:text-gray-500 focus:border-blue-300 focus:outline-none active:bg-gray-50 active:text-gray-800">
				<span id="selected-option">Option 1</span>
				<svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					<path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
				</svg>
			</button>
		</div>
		<div id="dropdown-menu" class="absolute right-0 mt-2 hidden max-h-60 w-full origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5">
			<div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
				<a href="#" class="flex justify-between bg-indigo-600 px-4 py-2 text-sm font-bold text-gray-900 text-white hover:bg-indigo-600 hover:text-white" data-value="Option 1">
					Option 1
					<svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
					</svg>
				</a>
				<a href="#" class="flex justify-between px-4 py-2 text-sm text-gray-900 hover:bg-indigo-600 hover:text-white" data-value="Option 2">
					Option 2
					<svg class="hidden h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
					</svg>
				</a>
				<a href="#" class="flex justify-between px-4 py-2 text-sm text-gray-900 hover:bg-indigo-600 hover:text-white" data-value="Option 3">
					Option 3
					<svg class="hidden h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
					</svg>
				</a>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php if ( 'check-on-left' === $gl_combo_type ) : ?>
<?php endif; ?>

<?php if ( 'status' === $gl_combo_type ) : ?>
<?php endif; ?>

<?php if ( 'image' === $gl_combo_type ) : ?>
<?php endif; ?>

<?php if ( 'secondary-text' === $gl_combo_type ) : ?>
<?php endif; ?>
