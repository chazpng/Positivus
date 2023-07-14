<?php
/**
 * Offset 2x2 Template.
 *
 * @package greydientlab
 */

?>

<?php
$main_title = empty( get_field( 'title' ) ) ? 'Your Title Here' : get_field( 'title' );
?>

<div class="bg-white py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
			<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
			<?php if ( have_rows( 'list' ) ) : ?>
				<dl class="col-span-2 grid grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2">
					<?php
					while ( have_rows( 'list' ) ) :
						the_row();
						$icon             = empty( get_sub_field( 'list_icon' ) ) ? get_block_asset_url( 'features', 'icon-placeholder.svg' ) : get_sub_field( 'list_icon' );
						$list_title       = empty( get_sub_field( 'list_title' ) ) ? 'Your Title Here' : get_sub_field( 'list_title' );
						$list_description = empty( get_sub_field( 'list_description' ) ) ? 'Your Description Here' : get_sub_field( 'list_description' );
						?>
						<div>
							<dt class="text-base font-semibold leading-7 text-gray-900">
								<div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
								<?php echo wp_get_attachment_image( get_sub_field( 'list_icon' ), 'full', '', array( 'class' => 'h-6 w-6' ) ); ?>
								</div>
								<?php echo esc_html( $list_title ); ?>
							</dt>
							<dd class="mt-1 text-base leading-7 text-gray-600"><?php echo esc_html( $list_description ); ?></dd>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
					<dl class="col-span-2 grid grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2">
						<div>
							<dt class="text-base font-semibold leading-7 text-gray-900">
								<div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
								<img src="<?php echo esc_url( get_block_asset_url( 'features', 'icon-placeholder.svg' ) ); ?>" class="h-6 w-6 text-white">
								</div>
								Your Title Here
							</dt>
							<dd class="mt-1 text-base leading-7 text-gray-600">Your Description Here</dd>
						</div>
						<div>
							<dt class="text-base font-semibold leading-7 text-gray-900">
								<div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
								<img src="<?php echo esc_url( get_block_asset_url( 'features', 'icon-placeholder.svg' ) ); ?>" class="h-6 w-6 text-white">
								</div>
								Your Title Here
							</dt>
							<dd class="mt-1 text-base leading-7 text-gray-600">Your Description Here</dd>
						</div>
						<div>
							<dt class="text-base font-semibold leading-7 text-gray-900">
								<div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
								<img src="<?php echo esc_url( get_block_asset_url( 'features', 'icon-placeholder.svg' ) ); ?>" class="h-6 w-6 text-white">
								</div>
								Your Title Here
							</dt>
							<dd class="mt-1 text-base leading-7 text-gray-600">Your Description Here</dd>
						</div>
						<div>
							<dt class="text-base font-semibold leading-7 text-gray-900">
								<div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
								<img src="<?php echo esc_url( get_block_asset_url( 'features', 'icon-placeholder.svg' ) ); ?>" class="h-6 w-6 text-white">
								</div>
								Your Title Here
							</dt>
							<dd class="mt-1 text-base leading-7 text-gray-600">Your Description Here</dd>
						</div>
					</dl>
				<?php endif; ?>
		</div>
	</div>
</div>
