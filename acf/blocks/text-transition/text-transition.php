<?php
/**
 * Text Transition.
 * 
 * You can use the following class for text transition.
 * 1. trailing.
 *
 * @package greydientlab
 */

$style = $block['className'] ?? '';

?>
<div class="gl-b-text-transition">
	<div class="mx-auto max-w-7xl py-[150px]">
		<h1 class="<?php echo esc_attr( get_field( 'custom_class' ) ); ?> gl-animated"><?php echo esc_html( get_field( 'body' ) ); ?></h1>
	</div>
	<div class="absolute right-5 top-5">
		<button class="group relative ml-2 hidden items-center justify-center gap-x-2 rounded-lg px-4 py-3 text-sm font-medium text-gray-700 shadow-sm ring-1 ring-gray-200 hover:bg-slate-200/20 sm:flex">
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M14.1667 14.1667L18.3334 10L14.1667 5.83333M5.83341 5.83333L1.66675 10L5.83341 14.1667M11.6667 2.5L8.33342 17.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
			</svg>
			<span class="">Refresh</span>
		</button>
	</div>
</div>
