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
$gl_corner_hint       = $args['gl_input_corner_hint'] ?? '';
$gl_input_placeholder = $args['gl_input_placeholder'] ?? 'you@example.com';
$gl_input_field_type  = $args['gl_input_field_type'] ?? 'email';

$gl_input_class       = 'flex flex-col';
$gl_input_field_class = 'block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6';
$gl_field_class       = 'input-field mt-2';
$gl_text_class        = 'text-gray-500';
$gl_placeholder_class = 'text-gray-500';
$header_container     = '';

switch ( $gl_input_type ) {
	case 'error':
		$gl_field_class = 'input-field relative error mt-2';
		$gl_text_class  = 'text-red-500';
		break;

	case 'disabled':
		$gl_field_class       = 'input-field relative mt-2';
		$gl_input_field_class = 'block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500 disabled:ring-gray-200 sm:text-sm sm:leading-6';
		break;

	case 'leading-icon':
		$gl_field_class       = 'input-field relative mt-2';
		$gl_input_field_class = 'block w-full rounded-md border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6';
		break;
	case 'trailing-icon':
		$gl_field_class       = 'input-field relative mt-2';
		$gl_input_field_class = 'block w-full rounded-md border-0 py-1.5 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6';
		break;
	case 'add-on':
		$gl_field_class       = 'input-field mt-2 flex shadow-sm';
		$gl_input_field_class = 'block w-full min-w-0 flex-1 rounded-none rounded-r-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6';
		break;
	case 'inline-add-on':
		$gl_field_class       = 'input-field mt-2 flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md';
		$gl_input_field_class = 'block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6';
		break;
	case 'inline-trailing':
		$gl_field_class       = 'input-field relative mt-2 rounded-md shadow-sm';
		$gl_input_field_class = 'block w-full rounded-md border-0 py-1.5 pl-7 pr-12 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6';
		break;
	case 'inline-leading-dropdown':
		$gl_field_class       = 'input-field relative mt-2 rounded-md shadow-sm';
		$gl_input_field_class = 'block w-full rounded-md border-0 py-1.5 pl-16 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6';
		break;
	case 'inline-leading-add-on-trailing-dropdown':
		$gl_field_class       = 'relative mt-2 rounded-md shadow-sm';
		$gl_input_field_class = 'block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6';
		break;
	case 'leading-icon-trailing-button':
		$gl_field_class       = 'relative flex flex-grow items-stretch focus-within:z-10';
		$gl_input_field_class = 'block w-full rounded-none rounded-l-md border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6';
		break;
	case 'inset':
		$gl_field_class       = 'rounded-md px-3 pb-1.5 pt-2.5 shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-indigo-600';
		$gl_input_field_class = 'block w-full border-0 p-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6';
		$header_container     = 'hidden';
		break;
	case 'inset-shared-borders':
		$gl_field_class       = 'relative rounded-md rounded-b-none px-3 pb-1.5 pt-2.5 ring-1 ring-inset ring-gray-300 focus-within:z-10 focus-within:ring-2 focus-within:ring-indigo-600';
		$gl_input_field_class = 'block w-full border-0 p-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6';
		$header_container     = 'hidden';
		break;
	case 'overlap':
		$gl_field_class       = 'relative';
		$gl_input_field_class = 'block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6';
		$header_container     = 'hidden';
		break;
	case 'pill':
		$gl_field_class       = 'input-field relative mt-2';
		$gl_input_field_class = 'block w-full rounded-full border-0 px-4 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6';
		break;
	case 'bottom-border':
		$gl_field_class       = 'input-field relative mt-2';
		$gl_input_field_class = 'peer block w-full border-0 bg-gray-50 py-1.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6';
		break;
	case 'keyboard':
		$gl_field_class       = 'input-field relative mt-2 flex items-center';
		$gl_input_field_class = 'block w-full rounded-md border-0 py-1.5 pr-14 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6';
		break;
	default:
		break;
}


?>
<?php if ( 'shared-borders' !== $gl_input_type ) : ?>
	<div class="input-field <?php echo esc_attr( $gl_input_class ); ?>">
		<div class="flex justify-between <?php echo esc_attr( $header_container ); ?>">
			<?php if ( $gl_input_label ) : ?>
				<label class="block text-sm font-medium leading-6 text-gray-900"><?php echo esc_html( $gl_input_label ); ?></label>
			<?php endif; ?>
			<?php if ( $gl_corner_hint ) : ?>
				<label class="text-sm leading-6 text-gray-500"><?php echo esc_html( $gl_corner_hint ); ?></label>
			<?php endif; ?>
		</div>
		<?php if ( 'leading-icon-trailing-button' === $gl_input_type ) : ?>
			<div class="mt-2 flex rounded-md shadow-sm">
			<?php endif; ?>
			<div class="<?php echo esc_attr( $gl_field_class ); ?>">
				<?php if ( 'leading-icon' === $gl_input_type ) : ?>
					<div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
						<svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
							<path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
							<path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
						</svg>
					</div>
				<?php endif; ?>
				<?php if ( 'leading-icon-trailing-button' === $gl_input_type ) : ?>
					<div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
						<svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
							<path d="M7 8a3 3 0 100-6 3 3 0 000 6zM14.5 9a2.5 2.5 0 100-5 2.5 2.5 0 000 5zM1.615 16.428a1.224 1.224 0 01-.569-1.175 6.002 6.002 0 0111.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 017 18a9.953 9.953 0 01-5.385-1.572zM14.5 16h-.106c.07-.297.088-.611.048-.933a7.47 7.47 0 00-1.588-3.755 4.502 4.502 0 015.874 2.636.818.818 0 01-.36.98A7.465 7.465 0 0114.5 16z" />
						</svg>
					</div>
				<?php endif; ?>
				<?php if ( 'add-on' === $gl_input_type ) : ?>
					<span class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 px-3 text-gray-500 sm:text-sm">http://</span>
				<?php endif; ?>
				<?php if ( 'inline-add-on' === $gl_input_type ) : ?>
					<span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">http://</span>
				<?php endif; ?>
				<?php if ( 'inline-trailing' === $gl_input_type || 'inline-leading-add-on-trailing-dropdown' === $gl_input_type ) : ?>
					<div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
						<span class="text-gray-500 sm:text-sm">$</span>
					</div>
				<?php endif; ?>
				<?php if ( 'inset' === $gl_input_type || 'inset-shared-borders' === $gl_input_type ) : ?>
					<label for="name" class="block text-xs font-medium text-gray-900"><?php echo esc_html( $gl_input_label ); ?></label>
				<?php endif; ?>
				<?php if ( 'overlap' === $gl_input_type ) : ?>
					<label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900"><?php echo esc_html( $gl_input_label ); ?></label>
				<?php endif; ?>
				<?php if ( 'inline-leading-dropdown' === $gl_input_type ) : ?>
					<div class="absolute inset-y-0 left-0 flex items-center">
						<label for="country" class="sr-only">Country</label>
						<select id="country" name="country" autocomplete="country" class="h-full rounded-md border-0 bg-transparent py-0 pl-3 pr-7 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
							<option>US</option>
							<option>CA</option>
							<option>EU</option>
						</select>
					</div>
				<?php endif; ?>
				<?php if ( 'inline-leading-add-on-trailing-dropdown' === $gl_input_type ) : ?>
					<div class="absolute inset-y-0 right-0 flex items-center">
						<label for="currency" class="sr-only">Currency</label>
						<select id="currency" name="currency" class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
							<option>USD</option>
							<option>CAD</option>
							<option>EUR</option>
						</select>
					</div>
				<?php endif; ?>
				<input type="<?php echo esc_html( $gl_input_field_type ); ?>" name="<?php echo esc_html( $gl_input_field_type ); ?>" id="<?php echo esc_html( $gl_input_field_type ); ?>" class="<?php echo esc_attr( $gl_input_field_class ); ?>" placeholder="you@example.com" 
										<?php 
										if ( 'disabled' === $gl_input_type ) :
											?>
					disabled <?php endif; ?>>
				<?php if ( 'error' === $gl_input_type ) : ?>
					<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
						<svg class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
							<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
						</svg>
					</div>
				<?php endif; ?>
				<?php if ( 'trailing-icon' === $gl_input_type ) : ?>
					<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
						<svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
							<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM8.94 6.94a.75.75 0 11-1.061-1.061 3 3 0 112.871 5.026v.345a.75.75 0 01-1.5 0v-.5c0-.72.57-1.172 1.081-1.287A1.5 1.5 0 108.94 6.94zM10 15a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
						</svg>
					</div>
				<?php endif; ?>
				<?php if ( 'inline-trailing' === $gl_input_type ) : ?>
					<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
						<span class="text-gray-500 sm:text-sm" id="price-currency">USD</span>
					</div>
				<?php endif; ?>
				<?php if ( 'bottom-border' === $gl_input_type ) : ?>
					<div class="absolute inset-x-0 bottom-0 border-t border-gray-300 peer-focus:border-t-2 peer-focus:border-indigo-600" aria-hidden="true"></div>
				<?php endif; ?>
				<?php if ( 'keyboard' === $gl_input_type ) : ?>
					<div class="absolute inset-y-0 right-0 flex py-1.5 pr-1.5">
						<kbd class="inline-flex items-center rounded border border-gray-200 px-1 font-sans text-xs text-gray-400">⌘K</kbd>
					</div>
				<?php endif; ?>
			</div>
			<?php if ( 'inset-shared-borders' === $gl_input_type ) : ?>
				<div class="relative rounded-md rounded-t-none px-3 pb-1.5 pt-2.5 ring-1 ring-inset ring-gray-300 focus-within:z-10 focus-within:ring-2 focus-within:ring-indigo-600">
					<label for="job-title" class="block text-xs font-medium text-gray-900">Job Title</label>
					<input type="text" name="job-title" id="job-title" class="block w-full border-0 p-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Head of Tomfoolery">
				</div>
			<?php endif; ?>

			<?php if ( 'leading-icon-trailing-button' === $gl_input_type ) : ?>
				<button type="button" class="relative -ml-px inline-flex items-center gap-x-1.5 rounded-r-md px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
					<svg class="-ml-0.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path fill-rule="evenodd" d="M2 3.75A.75.75 0 012.75 3h11.5a.75.75 0 010 1.5H2.75A.75.75 0 012 3.75zM2 7.5a.75.75 0 01.75-.75h6.365a.75.75 0 010 1.5H2.75A.75.75 0 012 7.5zM14 7a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02l-1.95-2.1v6.59a.75.75 0 01-1.5 0V9.66l-1.95 2.1a.75.75 0 11-1.1-1.02l3.25-3.5A.75.75 0 0114 7zM2 11.25a.75.75 0 01.75-.75H7A.75.75 0 017 12H2.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
					</svg>
					Sort
				</button>
			</div>
		<?php endif; ?>
		<?php if ( $gl_input_help_text ) : ?>
			<p class="mt-2 text-sm <?php echo esc_attr( $gl_text_class ); ?>" id="email-description"><?php echo esc_html( $gl_input_help_text ); ?></p>
		<?php endif; ?>
	</div>
<?php else : ?>
	<div>
		<fieldset>
			<legend class="block text-sm font-medium leading-6 text-gray-900">Card Details</legend>
			<div class="mt-2 -space-y-px rounded-md bg-white shadow-sm">
				<div>
					<label for="card-number" class="sr-only">Card number</label>
					<input type="text" name="card-number" id="card-number" class="relative block w-full rounded-none rounded-t-md border-0 bg-transparent py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Card number">
				</div>
				<div class="flex -space-x-px">
					<div class="w-1/2 min-w-0 flex-1">
						<label for="card-expiration-date" class="sr-only">Expiration date</label>
						<input type="text" name="card-expiration-date" id="card-expiration-date" class="relative block w-full rounded-none rounded-bl-md border-0 bg-transparent py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="MM / YY">
					</div>
					<div class="min-w-0 flex-1">
						<label for="card-cvc" class="sr-only">CVC</label>
						<input type="text" name="card-cvc" id="card-cvc" class="relative block w-full rounded-none rounded-br-md border-0 bg-transparent py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="CVC">
					</div>
				</div>
			</div>
		</fieldset>
		<fieldset class="mt-6 bg-white">
			<legend class="block text-sm font-medium leading-6 text-gray-900">Billing address</legend>
			<div class="mt-2 -space-y-px rounded-md shadow-sm">
				<div>
					<label for="country" class="sr-only">Country</label>
					<select id="country" name="country" autocomplete="country-name" class="relative block w-full rounded-none rounded-t-md border-0 bg-transparent py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
						<option>United States</option>
						<option>Canada</option>
						<option>Mexico</option>
					</select>
				</div>
				<div>
					<label for="postal-code" class="sr-only">ZIP / Postal code</label>
					<input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="relative block w-full rounded-none rounded-b-md border-0 bg-transparent py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="ZIP / Postal code">
				</div>
			</div>
		</fieldset>
	</div>
<?php endif; ?>

<div class="px-4 py-8  max-w-sm mx-auto">

