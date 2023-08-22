<?php
/**
 * With Product Screenshot Template.
 *
 * @package greydientlab
 */

?>

<?php
$label       = get_field( 'label' ) ?: 'Your Label Here';
$main_title  = get_field( 'title' ) ?: 'Your Title Here';
$description = get_field( 'description' ) ?: 'Your Description Here';
$bg_image    = get_field( 'featured_image' ) ?: get_block_asset_url( 'features', 'img-placeholder.jpg' );
$align_image = get_field( 'align_image_to_the_left' ) ? 'flex items-start justify-end lg:order-first' : 'w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0 overflow-hidden';
?>
<div class="overflow-hidden bg-white py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
			<div class="lg:pr-8 lg:pt-4">
				<div class="lg:max-w-lg">
					<h2 class="text-base font-semibold leading-7"><?php echo esc_html( $label ); ?></h2>
					<p class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl"><?php echo esc_html( $main_title ); ?></p>
					<p class="mt-6 text-lg leading-8"><?php echo esc_html( $description ); ?></p>

					<?php if ( have_rows( 'list' ) ) : ?>
						<dl class="mt-10 max-w-xl space-y-8 text-base leading-7 lg:max-w-none">
							<?php
							while ( have_rows( 'list' ) ) :
								the_row();
								$icon             = empty( get_sub_field( 'list_icon' ) ) ? get_block_asset_url( 'features', 'icon-placeholder.svg' ) : get_sub_field( 'list_icon' );
								$list_title       = empty( get_sub_field( 'list_title' ) ) ? 'Your Title Here' : get_sub_field( 'list_title' );
								$list_description = empty( get_sub_field( 'list_description' ) ) ? 'Your Description Here' : get_sub_field( 'list_description' );
								?>
								<div class="relative pl-9">
									<dt class="inline font-semibold">
										<?php if ( get_sub_field( 'list_icon' ) ) : ?>
											<?php echo wp_get_attachment_image( get_sub_field( 'list_icon' ), 'full', '', array( 'class' => 'absolute left-1 top-1 h-5 w-5' ) ); ?>
										<?php else : ?>
											<img class="absolute left-1 top-1 h-5 w-5" src="<?php get_block_asset( 'features', 'icon-placeholder.svg' ); ?>" alt="Placeholder">
										<?php endif; ?>
										<?php echo esc_html( $list_title ); ?>.
									</dt>
									<dd class="inline"><?php echo esc_html( $list_description ); ?></dd>
								</div>
							<?php endwhile; ?>
						</dl>
					<?php endif; ?>
				</div>
			</div>

			<div class="<?php echo esc_attr( $align_image ); ?>">
				<?php if ( get_field( 'featured_image' ) ) : ?>
					<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'full', '', array( 'class' => 'w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0' ) ); ?>
				<?php else : ?>
					<img class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0" src="<?php get_block_asset( 'features', '2432x1442.svg' ); ?>" alt="Placeholder">
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
