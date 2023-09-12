<?php
/**
 * With Product Screenshot Template.
 *
 * @package greydientlab
 */

?>

<?php
$label              = get_field( 'label' ) ?: 'Your Label Here';
$main_title         = get_field( 'title' ) ?: 'Your Title Here';
$description        = get_field( 'description' ) ?: 'Your Description Here';
$bg_image           = get_field( 'featured_image' ) ?: get_block_asset_url( 'features', 'img-placeholder.jpg' );
$align_image        = get_field( 'align_image_to_the_left' ) ? 'flex items-start justify-end lg:order-first' : 'w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0 overflow-hidden';
$bg_color           = 'bg-white';
$text_color_primary = '';

// Config: Colors.
if ( 'is-style-dark' === $style ) {
	$text_color_primary = 'text-white';
	$bg_color           = 'bg-gray-900';
}

$inner_container = 'mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2';

if ( get_field( 'panel_type' ) === 'contained-panel' ) {
	$bg_color           = 'bg-white';
	$text_color_primary = 'text-white';
	$container_class    = 'bg-white py-24';
	$inner_container    = 'relative isolate overflow-hidden bg-gray-900 px-6 py-20 sm:rounded-3xl sm:px-10 sm:py-24 lg:py-24 xl:px-24';
}

$container_class = $bg_color . ' overflow-hidden py-24 sm:py-32';

?>
<div class="<?php echo esc_attr( $container_class ); ?>">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="<?php echo esc_attr( $inner_container ); ?>">

			<?php if ( get_field( 'panel_type' ) !== 'none' ) : ?>

				<?php if ( get_field( 'panel_type' ) === 'featured-panel' ) : ?>
					<div class="lg:pr-8 lg:pt-4">
						<div class="lg:max-w-lg">
							<h2 class="<?php echo esc_attr( $text_color_primary ); ?> text-base font-semibold leading-7"><?php echo esc_html( $label ); ?></h2>
							<p class="<?php echo esc_attr( $text_color_primary ); ?> mt-2 text-3xl font-bold tracking-tight sm:text-4xl"><?php echo esc_html( $main_title ); ?></p>
							<p class="<?php echo esc_attr( $text_color_primary ); ?> mt-6 text-lg leading-8"><?php echo esc_html( $description ); ?></p>

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
											<dt class="<?php echo esc_attr( $text_color_primary ); ?> inline font-semibold">
												<?php if ( get_sub_field( 'list_icon' ) ) : ?>
													<?php echo wp_get_attachment_image( get_sub_field( 'list_icon' ), 'full', '', array( 'class' => 'absolute left-1 top-1 h-5 w-5' ) ); ?>
												<?php else : ?>
													<img class="absolute left-1 top-1 h-5 w-5" src="<?php get_block_asset( 'features', 'icon-placeholder.svg' ); ?>" alt="Placeholder">
												<?php endif; ?>
												<?php echo esc_html( $list_title ); ?>
											</dt>
											<dd class="<?php echo esc_attr( $text_color_primary ); ?> inline"><?php echo esc_html( $list_description ); ?></dd>

											<?php if ( get_sub_field( 'link_text' ) ) : ?>
												<?php $page_link = get_sub_field( 'page_link' ) ?: get_sub_field( 'url' ); ?>
												<p class="mt-6">
													<a href="<?php echo esc_url( $page_link ); ?>" class="text-sm font-semibold leading-6 text-indigo-400" target="_blank"><?php the_sub_field( 'link_text' ); ?> <span aria-hidden="true">→</span></a>
												</p>
											<?php endif; ?>
										</div>
									<?php endwhile; ?>
								</dl>
							<?php endif; ?>
						</div>
					</div>

					<div class="sm:px-6 lg:px-0">
						<div class="relative isolate overflow-hidden bg-indigo-500 px-6 pt-8 sm:mx-auto sm:max-w-2xl sm:rounded-3xl sm:pl-16 sm:pr-0 sm:pt-16 lg:mx-0 lg:max-w-none">
							<div class="absolute -inset-y-px -left-3 -z-10 w-full origin-bottom-left skew-x-[-30deg] bg-indigo-100 opacity-20 ring-1 ring-inset ring-white" aria-hidden="true"></div>

							<div class="mx-auto max-w-2xl sm:mx-0 sm:max-w-none">
								<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'full', '', array( 'class' => '-mb-12 w-[57rem] max-w-none rounded-tl-xl bg-gray-800 ring-1 ring-white/10' ) ); ?>
							</div>

							<div class="pointer-events-none absolute inset-0 ring-1 ring-inset ring-black/10 sm:rounded-3xl" aria-hidden="true"></div>
						</div>
					</div>
				<?php endif; ?>

				<?php if ( get_field( 'panel_type' ) === 'contained-panel' ) : ?>
					<div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-center lg:gap-y-0">
						<div class="lg:row-start-2 lg:max-w-md">
							<h2 class="<?php echo esc_attr( $text_color_primary ); ?> text-base font-semibold leading-7"><?php echo esc_html( $label ); ?></h2>
							<p class="<?php echo esc_attr( $text_color_primary ); ?> mt-2 text-3xl font-bold tracking-tight sm:text-4xl"><?php echo esc_html( $main_title ); ?></p>
							<p class="<?php echo esc_attr( $text_color_primary ); ?> mt-6 text-lg leading-8"><?php echo esc_html( $description ); ?></p>
						</div>

						<div class="relative -z-20 min-w-full max-w-xl rounded-xl shadow-xl ring-1 ring-white/10 lg:row-span-4 lg:w-[64rem] lg:max-w-none">
							<?php if ( get_field( 'use_wysiwyg' ) ) : ?>
								<?php echo wp_kses_post( get_field( 'html_code' ) ); ?>
							<?php else : ?>
								<?php if ( get_field( 'featured_image' ) ) : ?>
									<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'full', '', array( 'class' => 'relative -z-20 min-w-full max-w-xl rounded-xl shadow-xl ring-1 ring-white/10 lg:row-span-4 lg:w-[64rem] lg:max-w-none' ) ); ?>
								<?php else : ?>
									<img class="relative -z-20 min-w-full max-w-xl rounded-xl shadow-xl ring-1 ring-white/10 lg:row-span-4 lg:w-[64rem] lg:max-w-none" src="<?php get_block_asset( 'features', '2432x1442.svg' ); ?>" alt="Placeholder">
								<?php endif; ?>
							<?php endif; ?>
						</div>

						<?php if ( have_rows( 'list' ) ) : ?>
							<div class="max-w-xl lg:row-start-3 lg:mt-10 lg:max-w-md lg:border-t lg:border-white/10 lg:pt-10">
								<dl class="max-w-xl space-y-8 text-base leading-7 text-gray-300 lg:max-w-none">
									<?php
									while ( have_rows( 'list' ) ) :
										the_row();
										$icon             = empty( get_sub_field( 'list_icon' ) ) ? get_block_asset_url( 'features', 'icon-placeholder.svg' ) : get_sub_field( 'list_icon' );
										$list_title       = empty( get_sub_field( 'list_title' ) ) ? 'Your Title Here' : get_sub_field( 'list_title' );
										$list_description = empty( get_sub_field( 'list_description' ) ) ? 'Your Description Here' : get_sub_field( 'list_description' );
										?>
										<div class="relative">
											<dt class="ml-9 inline-block font-semibold text-white">
												<?php if ( get_sub_field( 'list_icon' ) ) : ?>
													<?php echo wp_get_attachment_image( get_sub_field( 'list_icon' ), 'full', '', array( 'class' => 'absolute left-1 top-1 h-5 w-5 text-indigo-500' ) ); ?>
												<?php else : ?>
													<img class="absolute left-1 top-1 h-5 w-5 text-indigo-500" src="<?php get_block_asset( 'features', 'icon-placeholder.svg' ); ?>" alt="Placeholder">
												<?php endif; ?>
												<?php echo esc_html( $list_title ); ?>
											</dt>
											<!-- space -->
											<dd class="<?php echo esc_attr( $text_color_primary ); ?> inline"><?php echo esc_html( $list_description ); ?></dd>
										</div>
									<?php endwhile; ?>
								</dl>
							</div>
						<?php endif; ?>

						<div class="pointer-events-none absolute left-12 top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-3xl lg:bottom-[-12rem] lg:top-auto lg:translate-y-0 lg:transform-gpu" aria-hidden="true">
							<div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-25" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
						</div>
					</div>
				<?php endif; ?>

			<?php else : ?>

				<div class="lg:pr-8 lg:pt-4">
					<div class="lg:max-w-lg">
						<h2 class="<?php echo esc_attr( $text_color_primary ); ?> text-base font-semibold leading-7"><?php echo esc_html( $label ); ?></h2>
						<p class="<?php echo esc_attr( $text_color_primary ); ?> mt-2 text-3xl font-bold tracking-tight sm:text-4xl"><?php echo esc_html( $main_title ); ?></p>
						<p class="<?php echo esc_attr( $text_color_primary ); ?> mt-6 text-lg leading-8"><?php echo esc_html( $description ); ?></p>

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
										<dt class="<?php echo esc_attr( $text_color_primary ); ?> inline font-semibold">
											<?php if ( get_sub_field( 'list_icon' ) ) : ?>
												<?php echo wp_get_attachment_image( get_sub_field( 'list_icon' ), 'full', '', array( 'class' => 'absolute left-1 top-1 h-5 w-5' ) ); ?>
											<?php else : ?>
												<img class="absolute left-1 top-1 h-5 w-5" src="<?php get_block_asset( 'features', 'icon-placeholder.svg' ); ?>" alt="Placeholder">
											<?php endif; ?>
											<?php echo esc_html( $list_title ); ?>
										</dt>
										<dd class="<?php echo esc_attr( $text_color_primary ); ?> inline"><?php echo esc_html( $list_description ); ?></dd>

										<?php if ( get_sub_field( 'link_text' ) ) : ?>
											<?php $page_link = get_sub_field( 'page_link' ) ?: get_sub_field( 'url' ); ?>
											<p class="mt-6">
												<a href="<?php echo esc_url( $page_link ); ?>" class="text-sm font-semibold leading-6 text-indigo-400" target="_blank"><?php the_sub_field( 'link_text' ); ?> <span aria-hidden="true">→</span></a>
											</p>
										<?php endif; ?>
									</div>
								<?php endwhile; ?>
							</dl>
						<?php endif; ?>
					</div>
				</div>

				<?php if ( get_field( 'use_wysiwyg' ) ) : ?>
					<?php echo wp_kses_post( get_field( 'html_code' ) ); ?>
				<?php else : ?>
					<div class="<?php echo esc_attr( $align_image ); ?>">
						<?php if ( get_field( 'featured_image' ) ) : ?>
							<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'full', '', array( 'class' => 'w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0' ) ); ?>
						<?php else : ?>
							<img class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0" src="<?php get_block_asset( 'features', '2432x1442.svg' ); ?>" alt="Placeholder">
						<?php endif; ?>
					</div>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
