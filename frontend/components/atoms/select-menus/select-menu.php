<?php
/**
 * Select Menus
 *
 * This is an example of how to a checkbox element.
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::atom( 'checkboxes/checkbox', array('key' => 'value') );
 *
 * @package greydientlab
 */

$gl_select_type = $args['gl_select_type'] ?? 'simple';
$gl_select_list = $args['gl_select_list'] ?? '';

?>
<?php if ( 'simple' === $gl_select_type ) : ?>
	<div>
		<label for="location" class="block text-sm font-medium leading-6 text-gray-900">Location</label>
		<select id="location" name="location" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
			<option>United States</option>
			<option selected>Canada</option>
			<option>Mexico</option>
		</select>
	</div>
<?php endif; ?>
<?php if ( 'simple-custom' === $gl_select_type ) : ?>
	<div>
		<label for="selectbox" class="block text-sm font-medium leading-6 text-gray-900">Assigned to</label>
		<div class="relative mt-2 inline-block w-full text-left">
			<div>
				<button id="dropdown-button" type="button" class="focus:shadow-outline-blue inline-flex w-full justify-between rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium leading-5 text-gray-700 shadow-sm transition duration-150 ease-in-out hover:text-gray-500 focus:border-blue-300 focus:outline-none active:bg-gray-50 active:text-gray-800">
					<span id="selected-option">Wade Cooper</span>
					<svg class="hidden h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
					</svg>
				</button>
			</div>
			<div id="dropdown-menu" class="absolute z-10 mt-1 hidden max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
				<?php
				echo $gl_select_list; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
				?>

			</div>
		</div>
	</div>
<?php endif; ?>


<?php if ( 'status' === $gl_select_type ) : ?>
	<div>
		<label for="selectbox" class="block text-sm font-medium leading-6 text-gray-900">Assigned to</label>
		<div class="relative mt-2 inline-block w-full text-left">
			<div>
				<button type="button" id="dropdown-button" class="relative w-full cursor-default rounded-md bg-white py-1.5 pl-3 pr-10 text-left text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
					<span class="flex items-center">
						<span aria-label="Online" class="inline-block h-2 w-2 flex-shrink-0 rounded-full bg-green-400" id="statusColor"></span>
						<span class="ml-3 block truncate" id="selected-option">Wade Cooper</span>
					</span>
					<span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
						<svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
							<path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
						</svg>
					</span>
				</button>
			</div>
			<div id="dropdown-menu" class="absolute z-10 mt-1 hidden max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
				<?php 
				echo $gl_select_list; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
				?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if ( 'image' === $gl_select_type ) : ?>
	<div>
		<label for="selectbox" class="block text-sm font-medium leading-6 text-gray-900">Assigned to</label>
		<div class="relative mt-2 inline-block w-full text-left">
			<div>
				<button type="button" id="dropdown-button" class="relative w-full cursor-default rounded-md bg-white py-1.5 pl-3 pr-10 text-left text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm sm:leading-6" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
					<span class="image-container flex items-center">
						<img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-5 w-5 flex-shrink-0 rounded-full" id="avatarImg">
						<span class="ml-3 block truncate" id="selected-option">Wade Cooper</span>
					</span>
					<span class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
						<svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
							<path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
						</svg>
					</span>
				</button>
			</div>
			<div id="dropdown-menu" class="absolute z-10 mt-1 hidden max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
				<?php 
				echo $gl_select_list; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
				?>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php if ( 'secondary-text' === $gl_select_type ) : ?>
	<div>
		<label for="selectbox" class="block text-sm font-medium leading-6 text-gray-900">Assigned to</label>
		<div class="relative mt-2 inline-block w-full text-left">
			<div>
				<button type="button" id="dropdown-button" class="relative w-full cursor-default rounded-md bg-white py-1.5 pl-3 pr-10 text-left text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm sm:leading-6" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
					<span class="inline-flex w-full truncate">
						<span class="truncate" id="selected-option">Tom Cook</span>
						<span class="ml-2 truncate text-gray-500" id="secondaryText">@tomcook</span>
					</span>
					<span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
						<svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
							<path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
						</svg>
					</span>
				</button>
			</div>
			<div id="dropdown-menu" class="absolute z-10 mt-1 hidden max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
				<?php 
				echo $gl_select_list; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
				?>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php if ( 'branded' === $gl_select_type ) : ?>
	<div>
		<label for="selectbox" class="sr-only block text-sm font-medium leading-6 text-gray-900">Change published status</label>
		<div class="relative">
			<div class="inline-flex divide-x divide-indigo-700 rounded-md shadow-sm">
				<div class="inline-flex items-center gap-x-1.5 rounded-l-md bg-indigo-600 px-3 py-2 text-white shadow-sm">
					<svg class="-ml-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
					</svg>
					<p class="text-sm font-semibold" id="selected-option">Published</p>
				</div>
				<button type="button" id="dropdown-button" class="inline-flex items-center rounded-l-none rounded-r-md bg-indigo-600 p-2 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 focus:ring-offset-gray-50" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
					<span class="sr-only">Change published status</span>
					<svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
					</svg>
				</button>
			</div>
			<div id="dropdown-menu" class="absolute z-10 mt-1 hidden max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
				<?php 
				echo $gl_select_list; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
				?>
			</div>
		</div>
	</div>
<?php endif; ?>
