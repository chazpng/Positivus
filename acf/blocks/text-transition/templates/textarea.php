<?php
/**
 * Simple Team Section Template.
 *
 * @package circles_x
 */

?>

<div class="mx-auto max-w-7xl py-[100px]">
	<h1 class="<?php echo esc_attr( get_field( 'custom_class' ) ); ?> gl-animated"><?php echo esc_html( get_field( 'body' ) ); ?></h1>
</div>
<div class="absolute right-5 top-5">
	<button class="group relative ml-2 hidden items-center justify-center gap-x-2 rounded-lg px-4 py-3 text-sm font-medium text-gray-700 shadow-sm ring-1 ring-gray-200 hover:bg-slate-200/20 sm:flex">
		Play
	</button>
</div>
