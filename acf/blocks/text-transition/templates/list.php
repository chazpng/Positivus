<?php
/**
 * Simple Team Section Template.
 *
 * @package circles_x
 */

?>

<div class="mx-auto max-w-7xl py-[150px] <?php echo esc_attr( get_field( 'custom_class' ) ); ?> gl-animated overflow-hidden">
	<?php if ( 'gl-a-text-fall' === get_field( 'custom_class' ) ) : ?>
	<div class="wrap m-auto">
		<ul class="invisible relative flex flex-col overflow-visible">
			<li class="absolute top-0">
				<h1>Do you like animations?</h1>
			</li>
			<li class="absolute top-0">
				<h1>We like them a lot!</h1>
			</li>
			<li class="absolute top-0">
				<h1>Bring any story to life</h1>
			</li>
			<li class="absolute top-0">
				<h1>or use micro animations</h1>
			</li>
			<li class="absolute top-0">
				<h1>to draw attention to any website.</h1>
			</li>
		</ul>
	</div>
	<?php endif; ?>
	<?php if ( 'gl-a-text-carousel' === get_field( 'custom_class' ) ) : ?>
		<ul class="flex flex-row gap-x-[200px] whitespace-nowrap">
			<li>
				<h1>Do you like animations?</h1>
			</li>
			<li>
				<h1>We like them a lot!</h1>
			</li>
			<li>
				<h1>Bring any story to life</h1>
			</li>
			<li>
				<h1>or use micro animations</h1>
			</li>
			<li>
				<h1>to draw attention to any website.</h1>
			</li>
			<li>
				<h1>Do you like animations?</h1>
			</li>
			<li>
				<h1>We like them a lot!</h1>
			</li>
			<li>
				<h1>Bring any story to life</h1>
			</li>
			<li>
				<h1>or use micro animations</h1>
			</li>
			<li>
				<h1>to draw attention to any website.</h1>
			</li>
		</ul>
	<?php endif; ?>
</div>
<?php if ( ! get_field( 'hide_refresh' ) ) : ?>
	<div class="absolute right-5 top-5">
		<button class="group relative ml-2 hidden items-center justify-center gap-x-2 rounded-lg px-4 py-3 text-sm font-medium text-gray-700 shadow-sm ring-1 ring-gray-200 hover:bg-slate-200/20 sm:flex">
			Refresh
		</button>
	</div>
<?php endif; ?>
