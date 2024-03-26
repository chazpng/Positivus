<?php
/**
 * Textarea
 *
 * This is an example of how to a checkbox element.
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::atom( 'radio-groups/radio-group', array('key' => 'value') );
 *
 * @package greydientlab
 */

$gl_textarea_type = $args['gl_textarea_type'] ?? 'avatar';
$legend_class     = 'sr-only';
$fieldset_class   = '';
$container_class  = '';
?>
<?php if ( 'simple' === $gl_textarea_type ) : ?>
	<div>
		<label for="comment" class="block text-sm font-medium leading-6 text-gray-900">Add your comment</label>
		<div class="mt-2">
			<textarea rows="4" name="comment" id="comment" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
		</div>
	</div>
<?php endif; ?>
<?php if ( 'avatar' === $gl_textarea_type ) : ?>
	<div class="flex items-start space-x-4">
		<div class="flex-shrink-0">
			<img class="inline-block h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
		</div>
		<div class="min-w-0 flex-1">
			<form action="#" class="relative">
				<div class="overflow-hidden rounded-lg shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-indigo-600">
					<label for="comment" class="sr-only">Add your comment</label>
					<textarea rows="3" name="comment" id="comment" class="block w-full resize-none border-0 bg-transparent py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Add your comment..."></textarea>
					<div class="py-2" aria-hidden="true">
						<div class="py-px">
							<div class="h-9"></div>
						</div>
					</div>
				</div>

				<div class="absolute inset-x-0 bottom-0 flex justify-between py-2 pl-3 pr-2">
					<div class="flex items-center space-x-5">
						<div class="flex items-center">
							<button type="button" class="-m-2.5 flex h-10 w-10 items-center justify-center rounded-full text-gray-400 hover:text-gray-500">
								<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
									<path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
								</svg>
								<span class="sr-only">Attach a file</span>
							</button>
						</div>
						<div class="flex items-center">
							<div>
								<label id="listbox-label" class="sr-only">Your mood</label>
								<div class="relative">
									<button type="button" class="relative -m-2.5 flex h-10 w-10 items-center justify-center rounded-full text-gray-400 hover:text-gray-500" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
										<span class="flex items-center justify-center">
											<span class="default-mood-option" id="icon6">
												<svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
													<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.536-4.464a.75.75 0 10-1.061-1.061 3.5 3.5 0 01-4.95 0 .75.75 0 00-1.06 1.06 5 5 0 007.07 0zM9 8.5c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S7.448 7 8 7s1 .672 1 1.5zm3 1.5c.552 0 1-.672 1-1.5S12.552 7 12 7s-1 .672-1 1.5.448 1.5 1 1.5z" clip-rule="evenodd" />
												</svg>
												<span class="sr-only">Add your mood</span>
											</span>
											<span class="hidden default-mood-option" id="icon1">
												<span class="flex h-8 w-8 items-center justify-center rounded-full bg-red-500">
													<svg class="h-5 w-5 flex-shrink-0 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path fill-rule="evenodd" d="M13.5 4.938a7 7 0 11-9.006 1.737c.202-.257.59-.218.793.039.278.352.594.672.943.954.332.269.786-.049.773-.476a5.977 5.977 0 01.572-2.759 6.026 6.026 0 012.486-2.665c.247-.14.55-.016.677.238A6.967 6.967 0 0013.5 4.938zM14 12a4 4 0 01-4 4c-1.913 0-3.52-1.398-3.91-3.182-.093-.429.44-.643.814-.413a4.043 4.043 0 001.601.564c.303.038.531-.24.51-.544a5.975 5.975 0 011.315-4.192.447.447 0 01.431-.16A4.001 4.001 0 0114 12z" clip-rule="evenodd" />
													</svg>
												</span>
												<span class="sr-only">Excited</span>
											</span>

											<span class="hidden default-mood-option" id="icon2">
												<span class="bg-pink-400 flex h-8 w-8 items-center justify-center rounded-full">
													<svg class="text-white h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M9.653 16.915l-.005-.003-.019-.01a20.759 20.759 0 01-1.162-.682 22.045 22.045 0 01-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 018-2.828A4.5 4.5 0 0118 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 01-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 01-.69.001l-.002-.001z" />
													</svg>
												</span>
												<span class="sr-only">Excited</span>
											</span>

											<span class="hidden default-mood-option" id="icon3">
												<span class="bg-green-400 flex h-8 w-8 items-center justify-center rounded-full">
													<svg class="text-white h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.536-4.464a.75.75 0 10-1.061-1.061 3.5 3.5 0 01-4.95 0 .75.75 0 00-1.06 1.06 5 5 0 007.07 0zM9 8.5c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S7.448 7 8 7s1 .672 1 1.5zm3 1.5c.552 0 1-.672 1-1.5S12.552 7 12 7s-1 .672-1 1.5.448 1.5 1 1.5z" clip-rule="evenodd" />
													</svg>
												</span>
												<span class="sr-only">Excited</span>
											</span>

											<span class="hidden default-mood-option" id="icon4">
												<span class="bg-yellow-400 flex h-8 w-8 items-center justify-center rounded-full">
													<svg class="text-white h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-3.536-3.475a.75.75 0 001.061 0 3.5 3.5 0 014.95 0 .75.75 0 101.06-1.06 5 5 0 00-7.07 0 .75.75 0 000 1.06zM9 8.5c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S7.448 7 8 7s1 .672 1 1.5zm3 1.5c.552 0 1-.672 1-1.5S12.552 7 12 7s-1 .672-1 1.5.448 1.5 1 1.5z" clip-rule="evenodd" />
													</svg>
												</span>
												<span class="sr-only">Excited</span>
											</span>

											<span class="hidden default-mood-option" id="icon5">
												<span class="bg-blue-500 flex h-8 w-8 items-center justify-center rounded-full">
													<svg class="text-white h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M1 8.25a1.25 1.25 0 112.5 0v7.5a1.25 1.25 0 11-2.5 0v-7.5zM11 3V1.7c0-.268.14-.526.395-.607A2 2 0 0114 3c0 .995-.182 1.948-.514 2.826-.204.54.166 1.174.744 1.174h2.52c1.243 0 2.261 1.01 2.146 2.247a23.864 23.864 0 01-1.341 5.974C17.153 16.323 16.072 17 14.9 17h-3.192a3 3 0 01-1.341-.317l-2.734-1.366A3 3 0 006.292 15H5V8h.963c.685 0 1.258-.483 1.612-1.068a4.011 4.011 0 012.166-1.73c.432-.143.853-.386 1.011-.814.16-.432.248-.9.248-1.388z" />
													</svg>
												</span>
												<span class="sr-only">Excited</span>
											</span>
										</span>
									</button>
									<ul class="list-items opacity-0 -z-10 transition ease-in duration-100 absolute -ml-6 mt-1 w-60 rounded-lg bg-white py-3 text-base shadow ring-1 ring-black ring-opacity-5 focus:outline-none sm:ml-auto sm:w-64 sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-5">
										<li class="bg-white emotions relative cursor-default hover:bg-gray-100 px-3 py-2" id="listbox-option-0" role="option">
											<div class="flex items-center">
												<div class="bg-red-500 flex h-8 w-8 items-center justify-center rounded-full">
													<svg class="text-white h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path fill-rule="evenodd" d="M13.5 4.938a7 7 0 11-9.006 1.737c.202-.257.59-.218.793.039.278.352.594.672.943.954.332.269.786-.049.773-.476a5.977 5.977 0 01.572-2.759 6.026 6.026 0 012.486-2.665c.247-.14.55-.016.677.238A6.967 6.967 0 0013.5 4.938zM14 12a4 4 0 01-4 4c-1.913 0-3.52-1.398-3.91-3.182-.093-.429.44-.643.814-.413a4.043 4.043 0 001.601.564c.303.038.531-.24.51-.544a5.975 5.975 0 011.315-4.192.447.447 0 01.431-.16A4.001 4.001 0 0114 12z" clip-rule="evenodd" />
													</svg>
												</div>
												<span class="ml-3 block truncate font-medium">Excited</span>
											</div>
										</li>
										<li class="bg-white emotions relative cursor-default hover:bg-gray-100 px-3 py-2" id="listbox-option-1" role="option">
											<div class="flex items-center">
												<div class="bg-pink-400 flex h-8 w-8 items-center justify-center rounded-full">
													<svg class="text-white h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M9.653 16.915l-.005-.003-.019-.01a20.759 20.759 0 01-1.162-.682 22.045 22.045 0 01-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 018-2.828A4.5 4.5 0 0118 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 01-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 01-.69.001l-.002-.001z" />
													</svg>
												</div>
												<span class="ml-3 block truncate font-medium">Loved</span>
											</div>
										</li>
										<li class="bg-white emotions relative cursor-default hover:bg-gray-100 px-3 py-2" id="listbox-option-2" role="option">
											<div class="flex items-center">
												<div class="bg-green-400 flex h-8 w-8 items-center justify-center rounded-full">
													<svg class="text-white h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.536-4.464a.75.75 0 10-1.061-1.061 3.5 3.5 0 01-4.95 0 .75.75 0 00-1.06 1.06 5 5 0 007.07 0zM9 8.5c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S7.448 7 8 7s1 .672 1 1.5zm3 1.5c.552 0 1-.672 1-1.5S12.552 7 12 7s-1 .672-1 1.5.448 1.5 1 1.5z" clip-rule="evenodd" />
													</svg>
												</div>
												<span class="ml-3 block truncate font-medium">Happy</span>
											</div>
										</li>
										<li class="bg-white emotions relative cursor-default hover:bg-gray-100 px-3 py-2" id="listbox-option-3" role="option">
											<div class="flex items-center">
												<div class="bg-yellow-400 flex h-8 w-8 items-center justify-center rounded-full">
													<svg class="text-white h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-3.536-3.475a.75.75 0 001.061 0 3.5 3.5 0 014.95 0 .75.75 0 101.06-1.06 5 5 0 00-7.07 0 .75.75 0 000 1.06zM9 8.5c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S7.448 7 8 7s1 .672 1 1.5zm3 1.5c.552 0 1-.672 1-1.5S12.552 7 12 7s-1 .672-1 1.5.448 1.5 1 1.5z" clip-rule="evenodd" />
													</svg>
												</div>
												<span class="ml-3 block truncate font-medium">Sad</span>
											</div>
										</li>
										<li class="bg-white emotions relative cursor-default hover:bg-gray-100 px-3 py-2" id="listbox-option-4" role="option">
											<div class="flex items-center">
												<div class="bg-blue-500 flex h-8 w-8 items-center justify-center rounded-full">
													<svg class="text-white h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M1 8.25a1.25 1.25 0 112.5 0v7.5a1.25 1.25 0 11-2.5 0v-7.5zM11 3V1.7c0-.268.14-.526.395-.607A2 2 0 0114 3c0 .995-.182 1.948-.514 2.826-.204.54.166 1.174.744 1.174h2.52c1.243 0 2.261 1.01 2.146 2.247a23.864 23.864 0 01-1.341 5.974C17.153 16.323 16.072 17 14.9 17h-3.192a3 3 0 01-1.341-.317l-2.734-1.366A3 3 0 006.292 15H5V8h.963c.685 0 1.258-.483 1.612-1.068a4.011 4.011 0 012.166-1.73c.432-.143.853-.386 1.011-.814.16-.432.248-.9.248-1.388z" />
													</svg>
												</div>
												<span class="ml-3 block truncate font-medium">Thumbsy</span>
											</div>
										</li>
										<li class="bg-white emotions relative cursor-default hover:bg-gray-100 px-3 py-2" id="listbox-option-5" role="option">
											<div class="flex items-center">
												<div class="bg-transparent flex h-8 w-8 items-center justify-center rounded-full">
													<svg class="text-gray-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
													</svg>
												</div>
												<span class="ml-3 block truncate font-medium">I feel nothing</span>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="flex-shrink-0">
						<button type="submit" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Post</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php endif; ?>
<?php if ( 'underline' === $gl_textarea_type ) : ?>
	<div class="flex items-start space-x-4">
		<div class="flex-shrink-0">
			<img class="inline-block h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
		</div>
		<div class="min-w-0 flex-1">
			<form action="#">
				<div class="border-b border-gray-200 focus-within:border-indigo-600">
					<label for="comment" class="sr-only">Add your comment</label>
					<textarea rows="3" name="comment" id="comment" class="block w-full resize-none border-0 border-b border-transparent p-0 pb-2 text-gray-900 placeholder:text-gray-400 focus:border-indigo-600 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Add your comment..."></textarea>
				</div>
				<div class="flex justify-between pt-2">
					<div class="flex items-center space-x-5">
						<div class="flow-root">
							<button type="button" class="-m-2 inline-flex h-10 w-10 items-center justify-center rounded-full text-gray-400 hover:text-gray-500">
								<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
								</svg>
								<span class="sr-only">Attach a file</span>
							</button>
						</div>
						<div class="flow-root">
							<div>
								<label id="listbox-label" class="sr-only">Your mood</label>
								<div class="relative">
									<button type="button" class="relative -m-2 inline-flex h-10 w-10 items-center justify-center rounded-full text-gray-400 hover:text-gray-500" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
										<span class="flex items-center justify-center">
											<span class="default-mood-options" id="icons6">
												<svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
													<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.536-4.464a.75.75 0 10-1.061-1.061 3.5 3.5 0 01-4.95 0 .75.75 0 00-1.06 1.06 5 5 0 007.07 0zM9 8.5c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S7.448 7 8 7s1 .672 1 1.5zm3 1.5c.552 0 1-.672 1-1.5S12.552 7 12 7s-1 .672-1 1.5.448 1.5 1 1.5z" clip-rule="evenodd" />
												</svg>
												<span class="sr-only">Add your mood</span>
											</span>
											<span class="hidden default-mood-options" id="icons1">
												<span class="flex h-8 w-8 items-center justify-center rounded-full bg-red-500">
													<svg class="h-5 w-5 flex-shrink-0 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path fill-rule="evenodd" d="M13.5 4.938a7 7 0 11-9.006 1.737c.202-.257.59-.218.793.039.278.352.594.672.943.954.332.269.786-.049.773-.476a5.977 5.977 0 01.572-2.759 6.026 6.026 0 012.486-2.665c.247-.14.55-.016.677.238A6.967 6.967 0 0013.5 4.938zM14 12a4 4 0 01-4 4c-1.913 0-3.52-1.398-3.91-3.182-.093-.429.44-.643.814-.413a4.043 4.043 0 001.601.564c.303.038.531-.24.51-.544a5.975 5.975 0 011.315-4.192.447.447 0 01.431-.16A4.001 4.001 0 0114 12z" clip-rule="evenodd" />
													</svg>
												</span>
												<span class="sr-only">Excited</span>
											</span>

											<span class="hidden default-mood-options" id="icons2">
												<span class="bg-pink-400 flex h-8 w-8 items-center justify-center rounded-full">
													<svg class="text-white h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M9.653 16.915l-.005-.003-.019-.01a20.759 20.759 0 01-1.162-.682 22.045 22.045 0 01-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 018-2.828A4.5 4.5 0 0118 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 01-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 01-.69.001l-.002-.001z" />
													</svg>
												</span>
												<span class="sr-only">Excited</span>
											</span>

											<span class="hidden default-mood-options" id="icons3">
												<span class="bg-green-400 flex h-8 w-8 items-center justify-center rounded-full">
													<svg class="text-white h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.536-4.464a.75.75 0 10-1.061-1.061 3.5 3.5 0 01-4.95 0 .75.75 0 00-1.06 1.06 5 5 0 007.07 0zM9 8.5c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S7.448 7 8 7s1 .672 1 1.5zm3 1.5c.552 0 1-.672 1-1.5S12.552 7 12 7s-1 .672-1 1.5.448 1.5 1 1.5z" clip-rule="evenodd" />
													</svg>
												</span>
												<span class="sr-only">Excited</span>
											</span>

											<span class="hidden default-mood-options" id="icons4">
												<span class="bg-yellow-400 flex h-8 w-8 items-center justify-center rounded-full">
													<svg class="text-white h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-3.536-3.475a.75.75 0 001.061 0 3.5 3.5 0 014.95 0 .75.75 0 101.06-1.06 5 5 0 00-7.07 0 .75.75 0 000 1.06zM9 8.5c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S7.448 7 8 7s1 .672 1 1.5zm3 1.5c.552 0 1-.672 1-1.5S12.552 7 12 7s-1 .672-1 1.5.448 1.5 1 1.5z" clip-rule="evenodd" />
													</svg>
												</span>
												<span class="sr-only">Excited</span>
											</span>

											<span class="hidden default-mood-options" id="icons5">
												<span class="bg-blue-500 flex h-8 w-8 items-center justify-center rounded-full">
													<svg class="text-white h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M1 8.25a1.25 1.25 0 112.5 0v7.5a1.25 1.25 0 11-2.5 0v-7.5zM11 3V1.7c0-.268.14-.526.395-.607A2 2 0 0114 3c0 .995-.182 1.948-.514 2.826-.204.54.166 1.174.744 1.174h2.52c1.243 0 2.261 1.01 2.146 2.247a23.864 23.864 0 01-1.341 5.974C17.153 16.323 16.072 17 14.9 17h-3.192a3 3 0 01-1.341-.317l-2.734-1.366A3 3 0 006.292 15H5V8h.963c.685 0 1.258-.483 1.612-1.068a4.011 4.011 0 012.166-1.73c.432-.143.853-.386 1.011-.814.16-.432.248-.9.248-1.388z" />
													</svg>
												</span>
												<span class="sr-only">Excited</span>
											</span>
										</span>
									</button>
									<ul class="list-itemss opacity-0 -z-10 transition ease-in duration-100 absolute -ml-6 w-60 rounded-lg bg-white py-3 text-base shadow ring-1 ring-black ring-opacity-5 focus:outline-none sm:ml-auto sm:w-64 sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-5">
										<li class="bg-white relative emotionss cursor-default select-none px-3 py-2 hover:bg-gray-100" id="listbox-option-0" role="option">
											<div class="flex items-center">
												<div class="bg-red-500 flex h-8 w-8 items-center justify-center rounded-full">
													<svg class="text-white h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path fill-rule="evenodd" d="M13.5 4.938a7 7 0 11-9.006 1.737c.202-.257.59-.218.793.039.278.352.594.672.943.954.332.269.786-.049.773-.476a5.977 5.977 0 01.572-2.759 6.026 6.026 0 012.486-2.665c.247-.14.55-.016.677.238A6.967 6.967 0 0013.5 4.938zM14 12a4 4 0 01-4 4c-1.913 0-3.52-1.398-3.91-3.182-.093-.429.44-.643.814-.413a4.043 4.043 0 001.601.564c.303.038.531-.24.51-.544a5.975 5.975 0 011.315-4.192.447.447 0 01.431-.16A4.001 4.001 0 0114 12z" clip-rule="evenodd" />
													</svg>
												</div>
												<span class="ml-3 block truncate font-medium">Excited</span>
											</div>
										</li>
										<li class="bg-white relative emotionss cursor-default select-none px-3 py-2 hover:bg-gray-100" id="listbox-option-1" role="option">
											<div class="flex items-center">
												<div class="bg-pink-400 flex h-8 w-8 items-center justify-center rounded-full">
													<svg class="text-white h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M9.653 16.915l-.005-.003-.019-.01a20.759 20.759 0 01-1.162-.682 22.045 22.045 0 01-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 018-2.828A4.5 4.5 0 0118 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 01-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 01-.69.001l-.002-.001z" />
													</svg>
												</div>
												<span class="ml-3 block truncate font-medium">Loved</span>
											</div>
										</li>
										<li class="bg-white relative emotionss cursor-default select-none px-3 py-2 hover:bg-gray-100" id="listbox-option-2" role="option">
											<div class="flex items-center">
												<div class="bg-green-400 flex h-8 w-8 items-center justify-center rounded-full">
													<svg class="text-white h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.536-4.464a.75.75 0 10-1.061-1.061 3.5 3.5 0 01-4.95 0 .75.75 0 00-1.06 1.06 5 5 0 007.07 0zM9 8.5c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S7.448 7 8 7s1 .672 1 1.5zm3 1.5c.552 0 1-.672 1-1.5S12.552 7 12 7s-1 .672-1 1.5.448 1.5 1 1.5z" clip-rule="evenodd" />
													</svg>
												</div>
												<span class="ml-3 block truncate font-medium">Happy</span>
											</div>
										</li>
										<li class="bg-white relative emotionss cursor-default select-none px-3 py-2 hover:bg-gray-100" id="listbox-option-3" role="option">
											<div class="flex items-center">
												<div class="bg-yellow-400 flex h-8 w-8 items-center justify-center rounded-full">
													<svg class="text-white h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-3.536-3.475a.75.75 0 001.061 0 3.5 3.5 0 014.95 0 .75.75 0 101.06-1.06 5 5 0 00-7.07 0 .75.75 0 000 1.06zM9 8.5c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S7.448 7 8 7s1 .672 1 1.5zm3 1.5c.552 0 1-.672 1-1.5S12.552 7 12 7s-1 .672-1 1.5.448 1.5 1 1.5z" clip-rule="evenodd" />
													</svg>
												</div>
												<span class="ml-3 block truncate font-medium">Sad</span>
											</div>
										</li>
										<li class="bg-white relative emotionss cursor-default select-none px-3 py-2 hover:bg-gray-100" id="listbox-option-4" role="option">
											<div class="flex items-center">
												<div class="bg-blue-500 flex h-8 w-8 items-center justify-center rounded-full">
													<svg class="text-white h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M1 8.25a1.25 1.25 0 112.5 0v7.5a1.25 1.25 0 11-2.5 0v-7.5zM11 3V1.7c0-.268.14-.526.395-.607A2 2 0 0114 3c0 .995-.182 1.948-.514 2.826-.204.54.166 1.174.744 1.174h2.52c1.243 0 2.261 1.01 2.146 2.247a23.864 23.864 0 01-1.341 5.974C17.153 16.323 16.072 17 14.9 17h-3.192a3 3 0 01-1.341-.317l-2.734-1.366A3 3 0 006.292 15H5V8h.963c.685 0 1.258-.483 1.612-1.068a4.011 4.011 0 012.166-1.73c.432-.143.853-.386 1.011-.814.16-.432.248-.9.248-1.388z" />
													</svg>
												</div>
												<span class="ml-3 block truncate font-medium">Thumbsy</span>
											</div>
										</li>
										<li class="bg-white relative emotionss cursor-default select-none px-3 py-2 hover:bg-gray-100" id="listbox-option-5" role="option">
											<div class="flex items-center">
												<div class="bg-transparent flex h-8 w-8 items-center justify-center rounded-full">
													<svg class="text-gray-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
													</svg>
												</div>
												<span class="ml-3 block truncate font-medium">I feel nothing</span>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="flex-shrink-0">
						<button type="submit" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Post</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php endif; ?>
<?php if ( 'pill' === $gl_textarea_type ) : ?>
	<form action="#" class="relative">
		<div class="overflow-hidden rounded-lg border border-gray-300 shadow-sm focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
			<label for="title" class="sr-only">Title</label>
			<input type="text" name="title" id="title" class="block w-full border-0 pt-2.5 text-lg font-medium placeholder:text-gray-400 focus:ring-0" placeholder="Title">
			<label for="description" class="sr-only">Description</label>
			<textarea rows="2" name="description" id="description" class="block w-full resize-none border-0 py-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Write a description..."></textarea>
			<div aria-hidden="true">
				<div class="py-2">
					<div class="h-9"></div>
				</div>
				<div class="h-px"></div>
				<div class="py-2">
					<div class="py-px">
						<div class="h-9"></div>
					</div>
				</div>
			</div>
		</div>

		<div class="absolute inset-x-px bottom-0">
			<div class="flex flex-nowrap justify-end space-x-2 px-2 py-2 sm:px-3">
				<div class="flex-shrink-0">
					<label id="listbox-label" class="sr-only">Assign</label>
					<div class="relative">
						<button type="button" class="button-1 relative inline-flex items-center whitespace-nowrap rounded-full bg-gray-50 px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 sm:px-3" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
							<svg class="h-5 w-5 flex-shrink-0 text-gray-300 sm:-ml-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z" clip-rule="evenodd" />
							</svg>
							<img src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="  hidden h-5 w-5 flex-shrink-0 rounded-full">
							<span class="hidden truncate sm:ml-2 sm:block">Assign</span>
						</button>
						<ul class="pill-item1 opacity-0 -z-10 transition ease-in duration-100 absolute right-0 mt-1 max-h-56 w-52 overflow-auto rounded-lg bg-white py-3 text-base shadow ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-0">
							<li class="bg-white relative cursor-default select-none px-3 py-2 hover:bg-gray-100" id="listbox-option-0" role="option">
								<div class="flex items-center">
									<svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z" clip-rule="evenodd" />
									</svg>
									<span class="ml-3 block truncate font-medium">Unassigned</span>
								</div>
							</li>
							<li class="bg-white relative cursor-default select-none px-3 py-2 hover:bg-gray-100" id="listbox-option-1" role="option">
								<div class="flex items-center">
									<img src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-5 w-5 flex-shrink-0 rounded-full">
									<span class="ml-3 block truncate font-medium">Wade Cooper</span>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="flex-shrink-0">
					<label id="listbox-label" class="sr-only">Add a label</label>
					<div class="relative">
						<button type="button" class="button-2 relative inline-flex items-center whitespace-nowrap rounded-full bg-gray-50 px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 sm:px-3" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
							<svg class="h-5 w-5 flex-shrink-0 text-gray-300 sm:-ml-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path fill-rule="evenodd" d="M5.5 3A2.5 2.5 0 003 5.5v2.879a2.5 2.5 0 00.732 1.767l6.5 6.5a2.5 2.5 0 003.536 0l2.878-2.878a2.5 2.5 0 000-3.536l-6.5-6.5A2.5 2.5 0 008.38 3H5.5zM6 7a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
							</svg>
							<span class="hidden truncate sm:ml-2 sm:block">Label</span>
						</button>
						<ul class="pill-item2 opacity-0 -z-10 transition ease-in duration-100 absolute right-0 mt-1 max-h-56 w-52 overflow-auto rounded-lg bg-white py-3 text-base shadow ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-0">
							<li class="bg-white relative cursor-default select-none px-3 py-2 hover:bg-gray-100" id="listbox-option-0" role="option">
								<div class="flex items-center">
									<span class="block truncate font-medium">Unlabelled</span>
								</div>
							</li>
							<li class="bg-white relative cursor-default select-none px-3 py-2 hover:bg-gray-100" id="listbox-option-1" role="option">
								<div class="flex items-center">
									<span class="block truncate font-medium">Engineering</span>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="flex-shrink-0">
					<label id="listbox-label" class="sr-only">Add a due date</label>
					<div class="relative">
						<button type="button" class="button-3 relative inline-flex items-center whitespace-nowrap rounded-full bg-gray-50 px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 sm:px-3" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
							<svg class="h-5 w-5 flex-shrink-0 text-gray-300 sm:-ml-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
							</svg>
							<span class="hidden truncate sm:ml-2 sm:block">Due date</span>
						</button>
						<ul class="pill-item3 opacity-0 -z-10 transition ease-in duration-100 absolute right-0 mt-1 max-h-56 w-52 overflow-auto rounded-lg bg-white py-3 text-base shadow ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-0">
							<li class="bg-white relative cursor-default hover:bg-gray-100 px-3 py-2" id="listbox-option-0" role="option">
								<div class="flex items-center ">
									<span class="block truncate font-medium">No due date</span>
								</div>
							</li>
							<li class="bg-white relative cursor-default hover:bg-gray-100 px-3 py-2" id="listbox-option-1" role="option">
								<div class="flex items-center ">
									<span class="block truncate font-medium">Today</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="flex items-center justify-between space-x-3 border-t border-gray-200 px-2 py-2 sm:px-3">
				<div class="flex">
					<button type="button" class="group -my-2 -ml-2 inline-flex items-center rounded-full px-3 py-2 text-left text-gray-400">
						<svg class="-ml-1 mr-2 h-5 w-5 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
							<path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
						</svg>
						<span class="text-sm italic text-gray-500 group-hover:text-gray-600">Attach a file</span>
					</button>
				</div>
				<div class="flex-shrink-0">
					<button type="submit" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
				</div>
			</div>
		</div>
	</form>
<?php endif; ?>
<?php if ( 'preview' === $gl_textarea_type ) : ?>
	<form action="#">
		<div>
			<div class="flex items-center" aria-orientation="horizontal" role="tablist">
				<button id="tabs-1-tab-1" class=" text-gray-500 hover:bg-gray-100 bg-gray-100 hover:text-gray-900 rounded-md border border-transparent px-3 py-1.5 text-sm font-medium" aria-controls="tabs-1-panel-1" role="tab" type="button">Write</button>
				<button id="tabs-1-tab-2" class="bg-white text-gray-500 hover:bg-gray-100 hover:text-gray-900 ml-2 rounded-md border border-transparent px-3 py-1.5 text-sm font-medium" aria-controls="tabs-1-panel-2" role="tab" type="button">Preview</button>
				<div class="ml-auto flex items-center space-x-5">
					<div class="flex items-center">
						<button type="button" class="-m-2.5 inline-flex h-10 w-10 items-center justify-center rounded-full text-gray-400 hover:text-gray-500">
							<span class="sr-only">Insert link</span>
							<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z" />
								<path d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z" />
							</svg>
						</button>
					</div>
					<div class="flex items-center">
						<button type="button" class="-m-2.5 inline-flex h-10 w-10 items-center justify-center rounded-full text-gray-400 hover:text-gray-500">
							<span class="sr-only">Insert code</span>
							<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path fill-rule="evenodd" d="M6.28 5.22a.75.75 0 010 1.06L2.56 10l3.72 3.72a.75.75 0 01-1.06 1.06L.97 10.53a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0zm7.44 0a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06L17.44 10l-3.72-3.72a.75.75 0 010-1.06zM11.377 2.011a.75.75 0 01.612.867l-2.5 14.5a.75.75 0 01-1.478-.255l2.5-14.5a.75.75 0 01.866-.612z" clip-rule="evenodd" />
							</svg>
						</button>
					</div>
					<div class="flex items-center">
						<button type="button" class="-m-2.5 inline-flex h-10 w-10 items-center justify-center rounded-full text-gray-400 hover:text-gray-500">
							<span class="sr-only">Mention someone</span>
							<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path fill-rule="evenodd" d="M5.404 14.596A6.5 6.5 0 1116.5 10a1.25 1.25 0 01-2.5 0 4 4 0 10-.571 2.06A2.75 2.75 0 0018 10a8 8 0 10-2.343 5.657.75.75 0 00-1.06-1.06 6.5 6.5 0 01-9.193 0zM10 7.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5z" clip-rule="evenodd" />
							</svg>
						</button>
					</div>
				</div>
			</div>
			<div class="mt-2">
				<div id="tabs-1-panel-1" class="-m-0.5 rounded-lg p-0.5" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
					<label for="comment" class="sr-only">Comment</label>
					<div>
						<textarea rows="5" name="comment" id="comment" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Add your comment..."></textarea>
					</div>
				</div>
				<div id="tabs-1-panel-2" class="-m-0.5 rounded-lg p-0.5 hidden" aria-labelledby="tabs-1-tab-2" role="tabpanel" tabindex="0">
					<div class="border-b">
						<div class="mx-px mt-px px-3 pb-12 pt-2 text-sm leading-5 text-gray-800">Preview content will render here.</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mt-2 flex justify-end">
			<button type="submit" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Post</button>
		</div>
	</form>
<?php endif; ?>
