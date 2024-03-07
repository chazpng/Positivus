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
		<div class="flex">
			<div class="grow">
				<p class="screen-size"></p>
				<p class="label"><span class="font-bold mr-2.5"><?php the_field( 'number_id' ); ?></span><?php the_title(); ?> <?php the_field( 'label' ); ?></p>
			</div>

			<div class="flex items-center">
				<button class="copy-code group relative ml-2 hidden items-center justify-center sm:flex ring-1 ring-gray-200 px-4 py-2.5 gap-x-2 text-gray-700 text-sm font-medium rounded-lg hover:bg-slate-200/20 shadow-sm" data-id="<?php echo esc_attr( $uniqid ); ?>">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M14.1667 14.1667L18.3334 10L14.1667 5.83333M5.83341 5.83333L1.66675 10L5.83341 14.1667M11.6667 2.5L8.33342 17.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					Copy Code
					<span class="transition-opacity bg-gray-800 px-1 text-sm text-gray-100 rounded-md absolute left-1/2 -translate-x-1/2 translate-y-full opacity-0 m-4 mx-auto">Tooltip</span>
				</button>
			</div>
		</div>

		<div class="max-w-full resize-x overflow-auto m-auto pt-5" data-id="<?php echo esc_attr( $uniqid ); ?>">
			<iframe src="<?php the_field( 'page' ); ?>" frameborder="0" data-id="<?php echo esc_attr( $uniqid ); ?>"></iframe>
		</div>
	</div>
</div>
