<?php
/**
 * Simple Three Column with small Icon Template.
 *
 * @package greydientlab
 */

?>
<?php
$label       = empty( get_field( 'label' ) ) ? 'Your Label Here' : get_field( 'label' );
$main_title  = empty( get_field( 'title' ) ) ? 'Your Title Here' : get_field( 'title' );
$description = empty( get_field( 'description' ) ) ? 'Your Description Here' : get_field( 'description' );
?>

<div class="bg-white py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
	<div class="mx-auto max-w-2xl lg:text-center">
		<h2 class="text-base font-semibold leading-7 text-indigo-600"><?php echo esc_html( $label ); ?></h2>
		<p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php echo esc_html( $main_title ); ?></p>
		<p class="mt-6 text-lg leading-8 text-gray-600"><?php echo esc_html( $description ); ?></p>
	</div>
	<div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
		<?php if ( have_rows( 'list' ) ) : ?>
		<dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
			<?php 
			while ( have_rows( 'list' ) ) :
				the_row();
				$icon             = empty( get_sub_field( 'list_icon' ) ) ? get_block_asset_url( 'features', 'icon-placeholder.svg' ) : get_sub_field( 'list_icon' );
				$list_title       = empty( get_sub_field( 'list_title' ) ) ? 'Your Title Here' : get_sub_field( 'list_title' );
				$list_description = empty( get_sub_field( 'list_description' ) ) ? 'Your Description Here' : get_sub_field( 'list_description' );
				?>
			<div class="flex flex-col">
				<dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
				<img src="<?php echo esc_url( $icon ); ?>" class="h-5 w-5 flex-none text-indigo-600">
				<?php echo esc_url( $list_title ); ?>
				</dt>
				<dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
				<p class="flex-auto"><?php echo esc_url( $list_description ); ?></p>
				<p class="mt-6">
					<a href="#" class="text-sm font-semibold leading-6 text-indigo-600">Learn more <span aria-hidden="true">→</span></a>
				</p>
				</dd>
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
			<div class="flex flex-col">
				<dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
				<img src="<?php echo esc_url( get_block_asset_url( 'features', 'icon-placeholder.svg' ) ); ?>" class="h-5 w-5 flex-none text-indigo-600">
				Your Title Here
				</dt>
				<dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
				<p class="flex-auto">Your Paragraph Here</p>
				<p class="mt-6">
					<a href="#" class="text-sm font-semibold leading-6 text-indigo-600">Button Here <span aria-hidden="true">→</span></a>
				</p>
				</dd>
			</div>
			<div class="flex flex-col">
				<dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
				<img src="<?php echo esc_url( get_block_asset_url( 'features', 'icon-placeholder.svg' ) ); ?>" class="h-5 w-5 flex-none text-indigo-600">
				Your Title Here
				</dt>
				<dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
				<p class="flex-auto">Your Paragraph Here</p>
				<p class="mt-6">
					<a href="#" class="text-sm font-semibold leading-6 text-indigo-600">Button Here <span aria-hidden="true">→</span></a>
				</p>
				</dd>
			</div>
			<div class="flex flex-col">
				<dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
				<img src="<?php echo esc_url( get_block_asset_url( 'features', 'icon-placeholder.svg' ) ); ?>" class="h-5 w-5 flex-none text-indigo-600">
				Your Title Here
				</dt>
				<dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
				<p class="flex-auto">Your Paragraph Here</p>
				<p class="mt-6">
					<a href="#" class="text-sm font-semibold leading-6 text-indigo-600">Button Here <span aria-hidden="true">→</span></a>
				</p>
				</dd>
			</div>
			</dl>
		<?php endif; ?>
	</div>
	</div>
</div>
