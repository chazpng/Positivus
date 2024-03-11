<?php
/**
 * Header Template.
 *
 * @package circles_x
 */

$uniqid = uniqid();
?>
<div class="gl-b-resizable" id="<?php echo esc_attr( $uniqid ); ?>">
	<div class="items-center justify-center max-w-screen-2xl m-auto">
		<div class="flex justify-between">

			<div class="flex gap-x-2.5 ">
				<div class="grow my-auto">
					<!-- <p class="screen-size"></p> -->
					<p class="label" data-id="<?php echo esc_attr( $uniqid ); ?>"><span class="font-bold mr-2.5"><?php the_field( 'number_id' ); ?></span> <?php the_title(); ?> <?php the_field( 'label' ); ?></p>
				</div>
				<div class="flex items-center">
					<button class="copy-label group relative hidden items-center justify-center sm:flex ring-1 ring-gray-200 px-4 py-2.5 gap-x-2 text-gray-700 text-sm leading-[22px] font-medium rounded-lg hover:bg-slate-200/20 shadow-sm" data-id="<?php echo esc_attr( $uniqid ); ?>">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g id="copy-01" clip-path="url(#clip0_1314_466)">
								<path id="Icon" d="M4.16663 12.5C3.39006 12.5 3.00177 12.5 2.69549 12.3732C2.28711 12.204 1.96265 11.8795 1.79349 11.4712C1.66663 11.1649 1.66663 10.7766 1.66663 10V4.33335C1.66663 3.39993 1.66663 2.93322 1.84828 2.5767C2.00807 2.2631 2.26304 2.00813 2.57664 1.84834C2.93316 1.66669 3.39987 1.66669 4.33329 1.66669H9.99996C10.7765 1.66669 11.1648 1.66669 11.4711 1.79355C11.8795 1.96271 12.2039 2.28717 12.3731 2.69555C12.5 3.00183 12.5 3.39012 12.5 4.16669M10.1666 18.3334H15.6666C16.6 18.3334 17.0668 18.3334 17.4233 18.1517C17.7369 17.9919 17.9918 17.7369 18.1516 17.4233C18.3333 17.0668 18.3333 16.6001 18.3333 15.6667V10.1667C18.3333 9.23327 18.3333 8.76656 18.1516 8.41004C17.9918 8.09643 17.7369 7.84147 17.4233 7.68168C17.0668 7.50002 16.6 7.50002 15.6666 7.50002H10.1666C9.23321 7.50002 8.7665 7.50002 8.40998 7.68168C8.09637 7.84147 7.8414 8.09643 7.68162 8.41004C7.49996 8.76656 7.49996 9.23327 7.49996 10.1667V15.6667C7.49996 16.6001 7.49996 17.0668 7.68162 17.4233C7.8414 17.7369 8.09637 17.9919 8.40998 18.1517C8.7665 18.3334 9.23321 18.3334 10.1666 18.3334Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							</g>
							<defs>
								<clipPath id="clip0_1314_466">
									<rect width="20" height="20" fill="white" />
								</clipPath>
							</defs>
						</svg>
						<span class="copy-label-text">Copy</span>
					</button>
				</div>
			</div>

			<div class="flex items-center">
				<div class="flex gap-x-2.5 p-1 bg-gray-50 ring-1 ring-gray-100 rounded-lg">
					<button class="toggle-button preview-button group relative hidden font-semibold items-center justify-center sm:flex px-3 py-2 gap-x-2 text-sm rounded-lg shadow-sm bg-white text-gray-700 active" data-id="<?php echo esc_attr( $uniqid ); ?>">
						Preview
					</button>
					<button class="toggle-button code-button group relative hidden font-semibold items-center justify-center sm:flex px-3 py-2 gap-x-2 text-sm rounded-lg bg-transparent text-gray-500" data-id="<?php echo esc_attr( $uniqid ); ?>">
						Code
					</button>
				</div>

				<button class="copy-code group relative ml-2 hidden items-center justify-center sm:flex ring-1 ring-gray-200 px-4 py-2.5 gap-x-2 text-gray-700 text-sm font-medium rounded-lg hover:bg-slate-200/20 shadow-sm" data-id="<?php echo esc_attr( $uniqid ); ?>">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M14.1667 14.1667L18.3334 10L14.1667 5.83333M5.83341 5.83333L1.66675 10L5.83341 14.1667M11.6667 2.5L8.33342 17.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span class="copy-code-label">Copy Code</span>
				</button>
			</div>
		</div>

		<div class="preview-content content max-w-full resize-x overflow-auto m-auto pt-5" data-id="<?php echo esc_attr( $uniqid ); ?>">
			<iframe src="<?php the_field( 'page' ); ?>" frameborder="0" data-id="<?php echo esc_attr( $uniqid ); ?>"></iframe>
		</div>

		<div class="code-content content max-w-full resize-x overflow-auto m-auto mt-5 hidden min-h-80 bg-[#1E293B] rounded-lg p-5" data-id="<?php echo esc_attr( $uniqid ); ?>">
			<p class="text-white">Loading...</p>
		</div>
	</div>

</div>
</div>
