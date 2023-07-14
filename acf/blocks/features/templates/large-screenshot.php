<?php
/**
 * With Large Screenshot Template.
 *
 * @package greydientlab
 */

?>

<?php
$label       = empty( get_field( 'label' ) ) ? 'Your Label Here' : get_field( 'label' );
$main_title  = empty( get_field( 'title' ) ) ? 'Your Title Here' : get_field( 'title' );
$description = empty( get_field( 'description' ) ) ? 'Your Description Here' : get_field( 'description' );
$bg_image    = empty( get_field( 'featured_image' ) ) ? get_block_asset_url( 'features', 'img-placeholder.jpg' ) : get_field( 'featured_image' );
?>

<div class="bg-white py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto max-w-2xl sm:text-center">
			<h2 class="text-base font-semibold leading-7 text-purple"><?php echo esc_html( $label ); ?></h2>
			<p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php echo esc_html( $main_title ); ?></p>
			<p class="mt-6 text-lg leading-8 text-gray-600"><?php echo esc_html( $description ); ?></p>
		</div>
	</div>
	<div class="relative overflow-hidden pt-16">
		<div class="mx-auto max-w-7xl px-6 lg:px-8">
			<?php 
			echo wp_get_attachment_image(
				get_field( 'featured_image' ),
				'full',
				'',
				array(
					'class' => 'mb-[-12%] rounded-xl shadow-2xl ring-1 ring-gray-900/10', 
					'alt'   => 'App screenshot',
				) 
			); 
			?>
			<div class="relative" aria-hidden="true">
				<div class="absolute -inset-x-20 bottom-0 bg-gradient-to-t from-white pt-[7%]"></div>
			</div>
		</div>
	</div>
	<div class="mx-auto mt-16 max-w-7xl px-6 sm:mt-20 md:mt-24 lg:px-8">
		<?php if ( have_rows( 'list' ) ) : ?>
			<dl class="mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-10 text-base leading-7 text-gray-600 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-x-8 lg:gap-y-16">
				<?php
				while ( have_rows( 'list' ) ) :
					the_row();
					$icon             = empty( get_sub_field( 'list_icon' ) ) ? get_block_asset_url( 'features', 'icon-placeholder.svg' ) : get_sub_field( 'list_icon' );
					$list_title       = empty( get_sub_field( 'list_title' ) ) ? 'Your Title Here' : get_sub_field( 'list_title' );
					$list_description = empty( get_sub_field( 'list_description' ) ) ? 'Your Description Here' : get_sub_field( 'list_description' );
					?>
					<div class="relative pl-9">
						<dt class="inline font-semibold text-gray-900">
							<?php echo wp_get_attachment_image( get_sub_field( 'list_icon' ), 'full', '', array( 'class' => 'h-6 w-6' ) ); ?>
							<?php echo esc_html( $list_title ); ?>
						</dt>
						<dd class="inline"><?php echo esc_html( $list_description ); ?></dd>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<dl class="mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-10 text-base leading-7 text-gray-600 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-x-8 lg:gap-y-16">
				<div class="relative pl-9">
					<dt class="inline font-semibold text-gray-900">
					<img src="<?php echo esc_url( get_block_asset_url( 'features', 'icon-placeholder.svg' ) ); ?>" class="absolute left-1 top-1 h-5 w-5 text-indigo-600">
						Your Title Here
					</dt>
					<dd class="inline">Your Description Here</dd>
				</div>
				<div class="relative pl-9">
					<dt class="inline font-semibold text-gray-900">
					<img src="<?php echo esc_url( get_block_asset_url( 'features', 'icon-placeholder.svg' ) ); ?>" class="absolute left-1 top-1 h-5 w-5 text-indigo-600">
						Your Title Here
					</dt>
					<dd class="inline">Your Description Here</dd>
				</div>
				<div class="relative pl-9">
					<dt class="inline font-semibold text-gray-900">
					<img src="<?php echo esc_url( get_block_asset_url( 'features', 'icon-placeholder.svg' ) ); ?>" class="absolute left-1 top-1 h-5 w-5 text-indigo-600">
						Your Title Here
					</dt>
					<dd class="inline">Your Description Here</dd>
				</div>
				<div class="relative pl-9">
					<dt class="inline font-semibold text-gray-900">
					<img src="<?php echo esc_url( get_block_asset_url( 'features', 'icon-placeholder.svg' ) ); ?>" class="absolute left-1 top-1 h-5 w-5 text-indigo-600">
						Your Title Here
					</dt>
					<dd class="inline">Your Description Here</dd>
				</div>
				<div class="relative pl-9">
					<dt class="inline font-semibold text-gray-900">
					<img src="<?php echo esc_url( get_block_asset_url( 'features', 'icon-placeholder.svg' ) ); ?>" class="absolute left-1 top-1 h-5 w-5 text-indigo-600">
						Your Title Here
					</dt>
					<dd class="inline">Your Description Here</dd>
				</div>
				<div class="relative pl-9">
					<dt class="inline font-semibold text-gray-900">
					<img src="<?php echo esc_url( get_block_asset_url( 'features', 'icon-placeholder.svg' ) ); ?>" class="absolute left-1 top-1 h-5 w-5 text-indigo-600">
						Your Title Here
					</dt>
					<dd class="inline">Your Description Here</dd>
				</div>
			</dl>
		<?php endif; ?>
	</div>
</div>
