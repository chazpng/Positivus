<?php
/**
 * Centered 2x2 Grid Template.
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
		<div class="mx-auto max-w-2xl text-center md:text-left">
			<h2 class="text-base font-semibold leading-7 text-purple"><?php echo esc_html( $label ); ?></h2>
			<p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php echo esc_html( $main_title ); ?></p>
			<p class="mt-6 text-lg leading-8 text-gray-600"><?php echo esc_html( $description ); ?></p>
		</div>
		<div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
			<?php if ( have_rows( 'list' ) ) : ?>
				<dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
					<?php
					while ( have_rows( 'list' ) ) :
						the_row();
						$icon             = empty( get_sub_field( 'list_icon' ) ) ? get_block_asset_url( 'features', 'icon-placeholder.svg' ) : get_sub_field( 'list_icon' );
						$list_title       = empty( get_sub_field( 'list_title' ) ) ? 'Your Title Here' : get_sub_field( 'list_title' );
						$list_description = empty( get_sub_field( 'list_description' ) ) ? 'Your Description Here' : get_sub_field( 'list_description' );
						?>
					<div class="relative pl-16">
						<dt class="text-base font-semibold leading-7 text-gray-900">
							<div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
								<img src="<?php echo esc_url( $icon ); ?>" class="h-6 w-6 text-white">
							</div>
							<?php echo esc_html( $list_title ); ?>
						</dt>
						<dd class="mt-2 text-base leading-7 text-gray-600"><?php echo esc_html( $list_description ); ?></dd>
					</div>
					<?php endwhile; ?>
				<?php else : ?>
					<div class="relative pl-16">
						<dt class="text-base font-semibold leading-7 text-gray-900">
							<div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
							<img src="<?php get_block_asset_url( 'features', 'icon-placeholder.svg' ); ?>">
							</div>
							Your Title Here
						</dt>
						<dd class="mt-2 text-base leading-7 text-gray-600">Your Description Here</dd>
					</div>
					<div class="relative pl-16">
						<dt class="text-base font-semibold leading-7 text-gray-900">
							<div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
							<img src="<?php get_block_asset_url( 'features', 'icon-placeholder.svg' ); ?>">
							</div>
							Your Title Here
						</dt>
						<dd class="mt-2 text-base leading-7 text-gray-600">Your Description Here</dd>
					</div>
					<div class="relative pl-16">
						<dt class="text-base font-semibold leading-7 text-gray-900">
							<div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
							<img src="<?php get_block_asset_url( 'features', 'icon-placeholder.svg' ); ?>">
							</div>
							Your Title Here
						</dt>
						<dd class="mt-2 text-base leading-7 text-gray-600">Your Description Here</dd>
					</div>
					<div class="relative pl-16">
						<dt class="text-base font-semibold leading-7 text-gray-900">
							<div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
							<img src="<?php get_block_asset_url( 'features', 'icon-placeholder.svg' ); ?>">
							</div>
							Your Title Here
						</dt>
						<dd class="mt-2 text-base leading-7 text-gray-600">Your Description Here</dd>
					</div>

				</dl>
			<?php endif; ?>
		</div>
	</div>
</div>
