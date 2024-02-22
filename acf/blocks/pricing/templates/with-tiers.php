<?php
/**
 * With Stats Template.
 *
 * @package greydientlab
 */

?>

<?php
$bg_color             = 'bg-white';
$bg_color_2           = 'bg-gray-900';
$gradient_color_1     = '#7775D6';
$gradient_color_2     = '#E935C1';
$text_color_primary   = 'text-gray-900';
$text_color_secondary = 'text-gray-600';
$text_color_label     = 'text-indigo-600';
$main_label           = get_field( 'eyebrow_label' ) ?: 'Pricing';
$main_description     = get_field( 'description' ) ?: 'Distinctio et nulla eum soluta et neque labore quibusdam. Saepe et quasi iusto modi velit ut non voluptas in. Explicabo id ut laborum.';
$main_title           = get_field( 'title' ) ?: 'Pricing plans for teams of all sizes';
$ring_color           = '';
$label_bg_color       = 'bg-indigo-600/10';
$price_button_color   = 'bg-indigo-600 hover:bg-indigo-500 focus-visible:outline-indigo-600';
$card_classes         = 'bg-white';
$extra_tier_border    = 'ring-gray-900/10';
$divider_color        = 'divide-gray-100';
$label_style          = 'text-gray-500';


if ( 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$text_color_label     = 'text-indigo-400';
	$bg_color             = 'bg-gray-900';
	$bg_color_2           = 'bg-gray-800';
	$gradient_color_1     = '#80CAFF';
	$gradient_color_2     = '#4F46E5';
	$ring_color           = 'ring-2 ring-indigo-400';
	$price_button_color   = 'bg-indigo-500 hover:bg-indigo-400 focus-visible:outline-indigo-500';
	$label_bg_color       = 'bg-indigo-500/10';
	$card_classes         = 'bg-gray-800';
	$extra_tier_border    = 'ring-white/10';
	$divider_color        = 'divide-white/10';
	$label_style          = 'text-gray-400';
}

?>
<?php if ( 'two-tiers-extra' === get_field( 'with_tiers_type' ) ) : ?>
	<div class="isolate overflow-hidden <?php echo esc_attr( $bg_color_2 ); ?>">
		<div class="mx-auto max-w-7xl px-6 pb-96 pt-24 text-center sm:pt-32 lg:px-8">
			<div class="mx-auto max-w-4xl">
				<h2 class="text-base font-semibold leading-7 text-indigo-400"><?php echo esc_html( $main_label ); ?></h2>
				<p class="mt-2 text-4xl font-bold tracking-tight text-white sm:text-5xl"><?php echo esc_html( $main_title ); ?></p>
			</div>
			<div class="relative mt-6">
				<p class="mx-auto max-w-2xl text-lg leading-8 text-white/60"><?php echo esc_html( $main_description ); ?></p>
				<svg viewBox="0 0 1208 1024" class="absolute -top-10 left-1/2 -z-10 h-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:-top-12 md:-top-20 lg:-top-12 xl:top-0">
					<ellipse cx="604" cy="512" fill="url(#6d1bd035-0dd1-437e-93fa-59d316231eb0)" rx="604" ry="512" />
					<defs>
						<radialGradient id="6d1bd035-0dd1-437e-93fa-59d316231eb0">
							<stop stop-color="<?php echo esc_attr( $gradient_color_1 ); ?>" />
							<stop offset="1" stop-color="<?php echo esc_attr( $gradient_color_2 ); ?>" />
						</radialGradient>
					</defs>
				</svg>
			</div>
		</div>
		<div class="flow-root <?php echo esc_attr( $bg_color ); ?> pb-24 sm:pb-32">
			<div class="-mt-80">
				<div class="mx-auto max-w-7xl px-6 lg:px-8">
					<?php
					if ( have_rows( 'without_toggle_repeater' ) ) :
						$grid_col = count( get_field( 'without_toggle_repeater' ) );
						$index    = ( 1 === $grid_col ) ? 'lg:grid-cols-1 gap-y-8' : 'lg:grid-cols-2 gap-8';
						?>
						<div class="mx-auto grid max-w-md grid-cols-1  lg:max-w-4xl <?php echo esc_attr( $index ); ?>">
							<?php
							while ( have_rows( 'without_toggle_repeater' ) ) :
								the_row();
								$tier_price_title       = get_sub_field( 'tier_price_title' ) ?: 'Freelancer';
								$tier_price_description = get_sub_field( 'tier_price_description' ) ?: 'The essentials to provide your best work for clients.';
								$tier_price             = get_sub_field( 'tier_price' ) ?: '$2';
								$tier_price_date        = get_sub_field( 'tier_price_subscription' ) ?: '/month';
								$tier_price_button      = get_sub_field( 'price_button_text' ) ?: 'Buy plan';
								?>
								<div class="flex flex-col justify-between rounded-3xl <?php echo esc_attr( $card_classes ); ?> <?php echo esc_attr( $ring_color ); ?> p-8 shadow-xl  sm:p-10">
									<div>
										<h3 id="tier-hobby" class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_attr( $tier_price_title ); ?></h3>
										<div class="mt-4 flex items-baseline gap-x-2">
											<span class="text-5xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_attr( $tier_price ); ?></span>
											<span class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_attr( $tier_price_date ); ?></span>
										</div>
										<p class="mt-6 text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_attr( $tier_price_description ); ?></p>
										<ul role="list" class="mt-10 space-y-4 text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>">
											<?php if ( have_rows( 'tier_feature_list' ) ) : ?>
												<?php
												while ( have_rows( 'tier_feature_list' ) ) :
													the_row();
													$tier_features = get_sub_field( 'tier_features' ) ?: '25 products';
													?>
													<li class="flex gap-x-3">
														<svg class="h-6 w-5 flex-none <?php echo esc_attr( $text_color_label ); ?> " viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
															<path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
														</svg>
														<?php echo esc_html( $tier_features ); ?>
													</li>
												<?php endwhile; ?>
											<?php else : ?>
											<?php endif; ?>
										</ul>
									</div>
									<a href="<?php echo esc_attr( the_sub_field( 'page_link' ) ); ?>" aria-describedby="tier-hobby" class="mt-8 block text-white rounded-md px-3.5 py-2 text-center text-sm font-semibold leading-6 <?php echo esc_attr( $price_button_color ); ?>"><?php echo esc_attr( $tier_price_button ); ?></a>
								</div>

							<?php endwhile; ?>
							<?php if ( have_rows( 'extra_tier_repeater' ) ) : ?>
								<?php
								while ( have_rows( 'extra_tier_repeater' ) ) :
									the_row();

									$extra_price_title       = get_sub_field( 'tier_price_title' ) ?: 'Discounted';
									$extra_price_description = get_sub_field( 'tier_price_description' ) ?: 'Dolor dolores repudiandae doloribus. Rerum sunt aut eum. Odit omnis non voluptatem sunt eos nostrum.';
									$extra_price_button      = get_sub_field( 'price_button_text' ) ?: 'Buy discounted license';

									?>
									<div class="flex flex-col items-start gap-x-8 <?php echo esc_attr( $extra_tier_border ); ?> gap-y-6 rounded-3xl p-8 ring-1 sm:gap-y-10 sm:p-10 lg:col-span-2 lg:flex-row lg:items-center">
										<div class="lg:min-w-0 lg:flex-1">
											<h3 class="text-lg font-semibold leading-8 tracking-tight <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_attr( $extra_price_title ); ?></h3>
											<p class="mt-1 text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_attr( $extra_price_description ); ?></p>
										</div>
										<a href="<?php echo esc_attr( the_sub_field( 'page_link' ) ); ?>" class="rounded-md px-3.5 py-2 text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_label ); ?> ring-1 ring-inset ring-indigo-400 hover:ring-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400"><?php echo esc_attr( $extra_price_button ); ?><span aria-hidden="true">&rarr;</span></a>
									</div>
								<?php endwhile; ?>
							<?php else : ?>
							<?php endif; ?>
						</div>
					<?php else : ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php if ( 'three-tiers-divider' === get_field( 'with_tiers_type' ) ) : ?>
	<div class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
		<div class="mx-auto max-w-7xl px-6 lg:px-8">
			<div class="mx-auto max-w-4xl sm:text-center">
				<h2 class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $main_label ); ?></h2>
				<p class="mt-2 text-4xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-5xl"><?php echo esc_html( $main_title ); ?></p>
			</div>
			<p class="mx-auto mt-6 max-w-2xl text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?> sm:text-center"><?php echo esc_html( $main_description ); ?></p>
			<div class="mt-20 flow-root">
				<?php 
				if ( have_rows( 'without_toggle_repeater' ) ) :
					$grid_col = count( get_field( 'without_toggle_repeater' ) );
					$index    = ( 3 >= $grid_col ) ? $grid_col : '3';
					?>
					<div class="isolate -mt-16 grid max-w-sm grid-cols-1 gap-y-16 divide-y <?php echo esc_attr( $divider_color ); ?> sm:mx-auto lg:-mx-8 lg:mt-0 lg:max-w-none lg:grid-cols-<?php echo esc_attr( $index ); ?> lg:divide-x lg:divide-y-0 xl:-mx-4">
						<?php
						while ( have_rows( 'without_toggle_repeater' ) ) :
							the_row();
							$tier_price_title       = get_sub_field( 'tier_price_title' ) ?: 'Basic';
							$tier_price_description = get_sub_field( 'tier_price_description' ) ?: 'Everything necessary to get started.';
							$tier_price             = get_sub_field( 'tier_price' ) ?: '$15';
							$tier_price_label       = get_sub_field( 'tier_price_label' ) ?: '$12 per month if paid annually';
							$tier_price_date        = get_sub_field( 'tier_price_subscription' ) ?: '/month';
							$tier_price_button      = get_sub_field( 'price_button_text' ) ?: 'Buy plan';
								
							?>
							<div class="pt-16 lg:px-8 lg:pt-0 xl:px-14">
								<h3 id="tier-basic" class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $tier_price_title ); ?></h3>
								<p class="mt-6 flex items-baseline gap-x-1">
									<span class="text-5xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $tier_price ); ?></span>
									<span class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $tier_price_date ); ?></span>
								</p>
								<p class="mt-3 text-sm leading-6 <?php echo esc_attr( $label_style ); ?>"><?php echo esc_html( $tier_price_label ); ?></p>
								<a href="<?php echo esc_url( the_sub_field( 'price_link' ) ); ?>" aria-describedby="tier-basic" class="mt-10 block rounded-md  px-3 py-2 text-center text-sm font-semibold leading-6 text-white shadow-sm <?php echo esc_attr( $price_button_color ); ?> focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 "><?php echo esc_html( $tier_price_button ); ?></a>
								<p class="mt-10 text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $tier_price_description ); ?></p>
								<ul role="list" class="mt-6 space-y-3 text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>">
									<?php if ( have_rows( 'tier_feature_list' ) ) : ?>
										<?php
										while ( have_rows( 'tier_feature_list' ) ) :
											the_row();
											$tier_features = get_sub_field( 'tier_features' ) ?: '25 products';
											?>
											<li class="flex gap-x-3">
												<svg class="h-6 w-5 flex-none <?php echo esc_attr( $text_color_label ); ?>" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
													<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
												</svg>
											<?php echo esc_html( $tier_features ); ?>
											</li>
										<?php endwhile; ?>
									<?php else : ?>
									<?php endif; ?>
								</ul>
							</div>
						<?php endwhile; ?>
					</div>
				<?php else : ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php endif; ?>
