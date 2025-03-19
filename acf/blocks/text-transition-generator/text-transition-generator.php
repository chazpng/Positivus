<?php
/**
 * Text Transition Generator.
 *
 * @package circles_x
 */

$x_value          = get_field( 'x_value' ) ?: 0;
$y_value          = get_field( 'y_value' ) ?: 0;
$rotate_x_value   = get_field( 'rotate_x_value' ) ?: 0;
$rotate_y_value   = get_field( 'rotate_y_value' ) ?: 0;
$skew_x_value     = get_field( 'skew_x_value' ) ?: 0;
$skew_y_value     = get_field( 'skew_y_value' ) ?: 0;
$duration_value   = get_field( 'duration_value' ) ?: 0.5;
$opacity_value    = get_field( 'opacity_value' );
$scale_value      = get_field( 'scale_value' ) ?: 1;
$ease_style       = get_field( 'ease_style' );
$ease_timing      = get_field( 'ease_timing' );
$custom_ease_text = get_field( 'custom_ease_text' ) ?: 'linear';
$split_text       = get_field( 'split_text' );
$hide_overflow    = get_field( 'hide_overflow' );
$stagger          = get_field( 'stagger' ) ?: 0.03;
?>

<div class="gl-b-text-transition-generator container relative mx-auto h-[350px] overflow-hidden">
	<div class="input-values hidden"
	data-x-value="<?php echo esc_attr( $x_value ); ?>"
	data-y-value="<?php echo esc_attr( $y_value ); ?>"
	data-rotate-x="<?php echo esc_attr( $rotate_x_value ); ?>"
	data-rotate-y="<?php echo esc_attr( $rotate_y_value ); ?>"
	data-skew-y="<?php echo esc_attr( $skew_y_value ); ?>"
	data-skew-x="<?php echo esc_attr( $skew_x_value ); ?>"
	data-opacity="<?php echo esc_attr( $opacity_value ); ?>"
	data-duration="<?php echo esc_attr( $duration_value ); ?>"
	data-scale="<?php echo esc_attr( $scale_value ); ?>"
	data-ease="<?php echo esc_attr( $ease_style ); ?>"
	data-timing="<?php echo esc_attr( $ease_timing ); ?>"
	data-stagger="<?php echo esc_attr( $stagger ); ?>"
	data-overflow="<?php echo esc_attr( $hide_overflow ); ?>"
	data-split="<?php echo esc_attr( $split_text ); ?>"
	data-custom-ease="<?php echo esc_attr( $custom_ease_text ); ?>"
	></div>
	<div class="flex h-full flex-row">
		<div class="custom-menu relative flex w-0 flex-col gap-y-10 overflow-x-hidden overflow-y-scroll transition-all duration-500">
			<div class="absolute left-0 top-0 w-full px-6 py-5">
				<div class="flex flex-col gap-y-2">
					<label for="textareaBody" class="my-auto block whitespace-nowrap text-sm/6 font-medium text-gray-900">Body</label>
					<textarea id="textareaBody" class="block w-full resize-none rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:border-indigo-600 focus:outline focus:-outline-offset-1 focus:outline-indigo-600 focus:ring-indigo-600 sm:text-sm/6" rows="4" aria-label="Body">Your Text Here</textarea>
				</div>
				<div class="flex flex-col gap-y-4 pt-5">
					<div class="flex flex-col gap-y-2">
						<label for="duration" class="my-auto block whitespace-nowrap text-sm/6 font-medium text-gray-900">Duration</label>
						<div class="flex flex-row gap-x-5">
							<input type="range" id="durationValue" name="duration" min="0.5" max="3" step="0.01" value="<?php echo esc_attr( $duration_value ); ?>" class="slider my-auto w-[82%]">
							<span class="duration-value my-auto block whitespace-nowrap text-sm/6 font-medium text-gray-900"><?php echo esc_attr( $duration_value ); ?></span>
						</div>
					</div>
					<div class="flex flex-col gap-y-2">
						<label for="opacity" class="my-auto block whitespace-nowrap text-sm/6 font-medium text-gray-900">Opacity</label>
						<div class="flex flex-row gap-x-5">
							<input type="range" id="opacityValue" name="opacity" min="0" max="1" value="<?php echo esc_attr( $opacity_value ); ?>" step="0.1" class="slider my-auto w-[82%]">
							<span class="opacity-value my-auto block whitespace-nowrap text-sm/6 font-medium text-gray-900"><?php echo esc_attr( $opacity_value ); ?></span>
						</div>
					</div>
					<div class="flex flex-col gap-y-2">
						<label for="scale" class="my-auto block whitespace-nowrap text-sm/6 font-medium text-gray-900">Scale</label>
						<div class="flex flex-row gap-x-5">
							<input type="range" id="scaleValue" name="scale" min="0" max="2" step="0.25" value="<?php echo esc_attr( $scale_value ); ?>" class="slider my-auto w-[82%]">
							<span class="scale-value my-auto block whitespace-nowrap text-sm/6 font-medium text-gray-900"><?php echo esc_attr( $scale_value ); ?></span>
						</div>
					</div>
					<div class="easing-function flex flex-col gap-y-5 pt-5">
						<label for="points" class="my-auto block whitespace-nowrap text-sm/6 font-medium text-gray-900">Easing</label>
						<div class="select-ease-function flex">
							<select class="col-start-1 row-start-1 w-full appearance-none rounded-l-md border-r-0 bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:border-indigo-600 focus:outline focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" id="easingOptions1">
								<option value="power0">Power 0</option>
								<option value="power1">Power 1</option>
								<option value="power2">Power 2</option>
								<option value="power3">Power 3</option>
								<option value="power4">Power 4</option>
								<option value="back">Back</option>
								<option value="bounce">Bounce</option>
								<option value="circ">Circ</option>
								<option value="elastic">Elastic</option>
								<option value="expo">Expo</option>
								<option value="sine">Sine</option>
							</select>
							<select class="col-start-1 row-start-1 w-full appearance-none rounded-r-md border-l-0 bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:border-indigo-600 focus:outline focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" id="easingOptions2">
								<option value="in">in</option>
								<option value="inOut">inOut</option>
								<option value="out">out</option>
							</select>
						</div>
						<div class="custom-ease-function hidden flex-col gap-y-2">
							<label for="customEase" class="my-auto block whitespace-nowrap text-sm/6 font-medium text-gray-900">Custom Ease</label>
							<input id="customEase" class="!focus:outline-0 peer block w-full rounded-md border-b bg-gray-50 px-3 py-1.5 text-gray-900 placeholder:text-gray-500 focus:border-b focus:border-indigo-600 focus:outline focus:ring-indigo-600 sm:text-sm/6" value="<?php echo esc_attr( $custom_ease_text ); ?>">
						</div>
						<div class="flex gap-x-2">
							<input type="checkbox" id="isCustomEase" class="h-5 w-5 rounded border-gray-300 text-indigo-600 outline-0 ring-0 checked:bg-indigo-600 focus:outline-0 focus:ring-0" />
							<label class="my-auto block whitespace-nowrap text-sm/6 font-medium text-gray-900">Use Custom Ease?</label>
						</div>
					</div>
				</div>
				<div class="advance-options pt-5">
					<button class="my-auto block w-full whitespace-nowrap pt-5 text-start text-sm/6 font-medium text-gray-900" id="advanceOptions">Advance Options</button>
					<div class="advance-settings-container flex hidden flex-col gap-y-5 overflow-hidden pt-10">
						<label class="my-auto block whitespace-nowrap text-sm/6 font-medium text-gray-900">Starting Position</label>
						<div class="input fields my-auto flex flex-col gap-y-5">
							<div class="flex flex-row gap-x-8">
								<div class="flex gap-x-2">
									<label for="xValue" class="my-auto block whitespace-nowrap text-sm/6 font-medium text-gray-900">X</label>
									<input id="xValue" class="!focus:outline-0 peer block w-full rounded-md border-b bg-gray-50 px-3 py-1.5 text-gray-900 placeholder:text-gray-500 focus:border-b focus:border-indigo-600 focus:outline focus:ring-indigo-600 sm:text-sm/6" type="number" value="<?php echo esc_attr( $x_value ); ?>" />
								</div>
								<div class="flex gap-x-2">
									<label for="yValue" class="my-auto block whitespace-nowrap text-sm/6 font-medium text-gray-900">Y</label>
									<input id="yValue" class="!focus:outline-0 peer block w-full rounded-md border-b bg-gray-50 px-3 py-1.5 text-gray-900 placeholder:text-gray-500 focus:border-b focus:border-indigo-600 focus:outline focus:ring-indigo-600 sm:text-sm/6" type="number" value="<?php echo esc_attr( $y_value ); ?>" />
								</div>
							</div>
							<div class="flex flex-row gap-x-8">
								<div class="flex gap-x-2">
									<label for="rotateX" class="my-auto block whitespace-nowrap text-sm/6 font-medium text-gray-900">Rotate X</label>
									<input id="rotateX" class="!focus:outline-0 peer block w-full rounded-md border-b bg-gray-50 px-3 py-1.5 text-gray-900 placeholder:text-gray-500 focus:border-b focus:border-indigo-600 focus:outline focus:ring-indigo-600 sm:text-sm/6" type="number" value="<?php echo esc_attr( $rotate_x_value ); ?>">
								</div>
								<div class="flex gap-x-2">
									<label for="rotateY" class="my-auto block whitespace-nowrap text-sm/6 font-medium text-gray-900">Rotate Y</label>
									<input id="rotateY" class="!focus:outline-0 peer block w-full rounded-md border-b bg-gray-50 px-3 py-1.5 text-gray-900 placeholder:text-gray-500 focus:border-b focus:border-indigo-600 focus:outline focus:ring-indigo-600 sm:text-sm/6" type="number" value="<?php echo esc_attr( $rotate_y_value ); ?>">
								</div>
							</div>
							<div class="flex flex-row gap-x-8">
								<div class="flex gap-x-2">
									<label for="skewX" class="my-auto block whitespace-nowrap text-sm/6 font-medium text-gray-900">Skew X</label>
									<input id="skewX" class="!focus:outline-0 peer block w-full rounded-md border-b bg-gray-50 px-3 py-1.5 text-gray-900 placeholder:text-gray-500 focus:border-b focus:border-indigo-600 focus:outline focus:ring-indigo-600 sm:text-sm/6" type="number" value="<?php echo esc_attr( $skew_x_value ); ?>">
								</div>
								<div class="flex gap-x-2">
									<label for="skewY" class="my-auto block whitespace-nowrap text-sm/6 font-medium text-gray-900">Skew Y</label>
									<input id="skewY" class="!focus:outline-0 peer block w-full rounded-md border-b bg-gray-50 px-3 py-1.5 text-gray-900 placeholder:text-gray-500 focus:border-b focus:border-indigo-600 focus:outline focus:ring-indigo-600 sm:text-sm/6" type="number" value="<?php echo esc_attr( $skew_y_value ); ?>">
								</div>
							</div>
							<div class="select flex flex-col gap-y-2">
								<label for="points" class="my-auto block whitespace-nowrap text-sm/6 font-medium text-gray-900">Split text by:</label>
								<p class="text-xs">If selected, all changes will revert and will automatically reset.</p>
								<select class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" id="splitTextType">
									<option value="none">None</option>
									<option value="line">Line</option>
									<option value="word">Word</option>
									<option value="char">Character</option>
								</select>
							</div>

							<div class="stagger-function gap-x-2">
								<label class="my-auto block whitespace-nowrap text-sm/6 font-medium text-gray-900">Stagger</label>
								<input class="!focus:outline-0 peer block w-full rounded-md border-b bg-gray-50 px-3 py-1.5 text-gray-900 placeholder:text-gray-500 focus:border-b focus:border-indigo-600 focus:outline focus:ring-indigo-600 sm:text-sm/6" type="number" min="0" value='<?php echo esc_attr( $stagger ); ?>' id="staggerValue" />
							</div>
							<div class="overflow-hide-function hidden w-full flex-col gap-y-2">
								<label for="overflowHidden" class="my-auto block whitespace-nowrap text-sm/6 font-medium text-gray-900">Hide Overflow Text?</label>
								<input type="checkbox" id="overflowHidden" class="h-5 w-5 rounded border-gray-300 text-indigo-600 outline-0 ring-0 checked:bg-indigo-600 focus:outline-0 focus:ring-0" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="relative w-full overflow-hidden px-6">
			<div class="absolute left-0 top-0 flex w-full flex-row justify-between gap-y-6 px-6 py-5">
				<div class="">
					<button class="rounded-lg bg-[#fafafa] px-4 py-2" id="editTransition">Edit</button>
				</div>
				<div class="settings list flex flex-row justify-end gap-x-4">
					<button class="rounded-lg bg-[#fafafa] px-4 py-2" id="resetTransition">Reset</button>
					<!-- <button class="rounded-lg bg-[#fafafa] px-4 py-2">View Code</button> -->
					<button class="justify-center rounded-md bg-indigo-600 px-5 py-2 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" id="generateTransition">Run</button>
				</div>
			</div>
			<div class="body-container my-auto flex h-full items-center align-middle">
				<h1 class="text-transition-outcome text-balance font-semibold leading-[150%] tracking-tight text-gray-900">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis</h1>
			</div>
		</div>
	</div>
</div>
