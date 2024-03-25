<?php
/**
 * With Stats Template.
 *
 * @package greydientlab
 */

?>

<?php
$bg_color              = '';
$bg_color_2            = 'bg-gray-50';
$text_color_primary    = 'text-gray-900';
$text_color_secondary  = 'text-gray-600';
$text_color_label      = 'text-indigo-600';
$main_label            = get_field( 'eyebrow_label' ) ?: 'Pricing';
$main_description      = get_field( 'description' ) ?: 'Distinctio et nulla eum soluta et neque labore quibusdam. Saepe et quasi iusto modi velit ut non voluptas in. Explicabo id ut laborum.';
$main_title            = get_field( 'title' ) ?: 'Pricing plans for teams of all sizes';
$price_list_title      = get_field( 'price_list_title' ) ?: 'Whats included';
$price_description     = get_field( 'price_description' ) ?: 'Lorem ipsum dolor sit amet consect etur adipisicing elit. Itaque amet indis perferendis blanditiis repellendus etur quidem assumenda.';
$price_title           = get_field( 'price_title' ) ?: 'Lifetime membership';
$price_container_color = 'bg-gray-50';
$ring_color            = 'ring-gray-200';
$price_button_color    = 'bg-indigo-600 hover:bg-indigo-500 focus-visible:outline-indigo-600';
$card_class            = 'bg-white/60';
$card_style            = '';


if ( get_field( 'checkbox_field' ) ) {
	$card_style           = 'emp';
	$text_color_primary   = 'text-color-primary';
	$text_color_secondary = 'text-color-secondary';
	$text_color_label     = 'text-color-label';
}



if ( 'is-style-dark' === $style ) {
	$text_color_primary    = 'text-white';
	$text_color_secondary  = 'text-gray-300';
	$text_color_label      = 'text-indigo-400';
	$bg_color              = 'bg-gray-900';
	$price_container_color = 'bg-white/5';
	$ring_color            = 'ring-white/10';
	$divider_color         = 'bg-white/10';
	$price_button_color    = 'bg-indigo-500 hover:bg-indigo-400 focus-visible:outline-indigo-500';
	$card_class            = 'bg-gray-800/80';
	$card_style            = 'dark';

	if ( get_field( 'checkbox_field' ) ) {
		$card_style           = 'empdark';
		$text_color_primary   = 'text-color-primary';
		$text_color_secondary = 'text-color-secondary';
		$text_color_label     = 'text-color-label';
	}

	if ( 'emphasized' === get_field( 'highlight_type' ) ) {
		$card_style           = 'emp';
		$text_color_primary   = 'text-color-primary';
		$text_color_secondary = 'text-color-secondary';
		$text_color_label     = 'text-color-label';
	}
}

?>
<?php if ( 'four-tiers-toggle' === get_field( 'with_toggle_type' ) ) : ?>
	<div class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
		<div class="mx-auto max-w-7xl px-6 lg:px-8">
			<div class="mx-auto max-w-4xl text-center">
				<h2 class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $main_label ); ?></h2>
				<p class="mt-2 text-4xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-5xl"><?php echo esc_html( $main_title ); ?></p>
			</div>
			<p class="mx-auto mt-6 max-w-2xl text-center text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $main_description ); ?></p>

			<?php
			if ( have_rows( 'pricing_structure_list' ) ) :
				$total_buttons = count( get_field( 'pricing_structure_list' ) );
				?>
				<div class="mt-16 flex justify-center">
					<fieldset class="grid grid-cols-<?php echo esc_attr( $total_buttons ); ?> gap-x-1 rounded-full p-1 text-center text-xs font-semibold leading-5 ring-1 ring-inset <?php echo esc_attr( $ring_color ); ?>">
						<legend class="sr-only">Payment frequency</legend>
						<?php
						while ( have_rows( 'pricing_structure_list' ) ) :
							the_row();
							$subscription = get_sub_field( 'pricing_subscription' ) ?: 'Monthly';

							?>
							<label class="cursor-pointer rounded-full px-2.5 py-1 <?php echo esc_attr( get_row_index() === 1 ? 'bg-indigo-600 text-white' : 'text-gray-500' ); ?>" id="button<?php echo esc_attr( $total_buttons ); ?>">
								<input type="radio" name="frequency" value="<?php echo esc_html( $subscription ); ?>" class="sr-only subscription-input">
								<span><?php echo esc_html( $subscription ); ?></span>
							</label>
						<?php endwhile; ?>
					</fieldset>
				</div>
			<?php else : ?>
			<?php endif; ?>
			<?php if ( have_rows( 'pricing_structure_list' ) ) : ?>
				<?php
				while ( have_rows( 'pricing_structure_list' ) ) :
					the_row();
					$subscription = get_sub_field( 'pricing_subscription' ) ?: 'monthly';
					?>
					<?php $with_toggle_repeater = get_sub_field( 'with_toggle_repeater' ); ?>
					<?php
					if ( $with_toggle_repeater ) :
						$total_cards = count( $with_toggle_repeater );
						?>
						<div class="cards card-<?php echo esc_attr( get_row_index() ); ?> isolate mx-auto mt-10 grid max-w-md grid-cols-1 gap-8 lg:mx-0 lg:max-w-none hidden lg:grid-cols-<?php echo esc_html( $total_cards ); ?> " id="<?php echo esc_attr( $subscription ); ?>">
							<?php
							while ( have_rows( 'with_toggle_repeater' ) ) :
								the_row();
								$tier_price_title       = get_sub_field( 'tier_price_title' ) ?: 'Freelancer';
								$tier_price_label       = get_sub_field( 'tier_price_label' ) ?: 'Most popular';
								$tier_price_description = get_sub_field( 'tier_price_description' ) ?: 'The essentials to provide your best work for clients.';
								$tier_price             = get_sub_field( 'tier_price' ) ?: '$2';
								$tier_price_date        = get_sub_field( 'tier_price_subscription' ) ?: '/month';
								$tier_price_button      = get_sub_field( 'price_button_text' ) ?: 'Buy plan';
								$card_ring              = 'ring-1 ring-gray-200';
								$text_color_primary     = 'text-gray-900';
								$text_color_secondary   = 'text-gray-600';
								$text_color_label       = 'text-indigo-600';
								$button_color           = 'focus-visible:outline-indigo-600 text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300';
								$label_bg_color         = 'bg-indigo-600 text-white';



								if ( get_sub_field( 'checkbox_highlight' ) ) {
									$card_ring            = 'ring-2 ring-indigo-600';
									$text_color_primary   = 'text-indigo-600';
									$text_color_secondary = 'text-gray-600';
									$text_color_label     = 'text-indigo-600';
									$button_color         = 'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 bg-indigo-600 text-white shadow-sm hover:bg-indigo-500';
									$label_bg_color       = 'bg-indigo-600 text-white';

									if ( 'emphasized' === get_sub_field( 'highlight_type' ) ) {
										$card_ring            = 'bg-gray-800 ring-2 ring-gray-200';
										$text_color_primary   = 'text-white';
										$text_color_secondary = 'text-gray-300';
										$text_color_label     = 'text-white';
										$button_color         = 'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 bg-white/10 text-white hover:bg-white/20 focus-visible:outline-white';
										$label_bg_color       = 'bg-white/10 text-white';
									}
								}

								if ( 'is-style-dark' === $style ) {
									$card_ring            = 'ring-1 ring-white/10';
									$text_color_primary   = 'text-white';
									$text_color_secondary = 'text-gray-300';
									$text_color_label     = 'text-white';
									$button_color         = 'bg-white/10 text-white hover:bg-white/20 focus-visible:outline-white';
									$label_bg_color       = 'bg-indigo-500 text-white';

									if ( get_sub_field( 'checkbox_highlight' ) ) {
										$card_ring            = 'bg-white/5 ring-2 ring-indigo-400';
										$text_color_primary   = 'text-white';
										$text_color_secondary = 'text-gray-300';
										$text_color_label     = 'text-white';
										$button_color         = 'bg-indigo-500 text-white shadow-sm hover:bg-indigo-400 focus-visible:outline-indigo-500';
										$label_bg_color       = 'bg-indigo-500 text-white';
									}

									if ( 'emphasized' === get_sub_field( 'highlight_type' ) ) {
										$card_ring            = 'ring-1 ring-white/10 bg-white';
										$text_color_primary   = 'text-indigo-600';
										$text_color_secondary = 'text-gray-600';
										$text_color_label     = 'text-indigo-600';
										$button_color         = 'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 bg-indigo-600 text-white shadow-sm hover:bg-indigo-500';
										$label_bg_color       = 'bg-indigo-600 text-white';
									}
								}
								?>


								<div class="rounded-3xl p-8 xl:p-10  <?php echo esc_attr( $card_ring ); ?>">
									<div class="flex items-center justify-between gap-x-4">
										<h3 id="tier-freelancer" class="text-lg font-semibold leading-8 <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $tier_price_title ); ?></h3>
										<?php if ( 3 >= $total_cards && get_sub_field( 'checkbox_highlight' ) && get_sub_field( 'tier_price_label' ) ) : ?>
											<p class="rounded-full <?php echo esc_attr( $label_bg_color ); ?> px-2.5 py-1 text-xs font-semibold leading-5"><?php echo esc_html( $tier_price_label ); ?></p>
										<?php endif; ?>
									</div>
									<p class="mt-4 text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $tier_price_description ); ?></p>
									<p class="mt-6 flex items-baseline gap-x-1">
										<span class="text-4xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $tier_price ); ?></span>
										<span class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $tier_price_date ); ?></span>
									</p>
									<a href="<?php echo esc_attr( the_sub_field( 'page_link' ) ); ?>" aria-describedby="tier-freelancer" class="mt-6 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 <?php echo esc_attr( $button_color ); ?>"><?php echo esc_html( $tier_price_button ); ?></a>

									<ul role="list" class="mt-8 space-y-3 text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>">
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
							<?php endwhile; ?>
						</div>
					<?php else : ?>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php else : ?>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>
<?php if ( 'three-tiers-feature' === get_field( 'with_toggle_type' ) ) : ?>
	<div class="isolate overflow-hidden">
		<div class="flow-root bg-gray-900 pb-16 pt-24 sm:pt-32 lg:pb-0">
			<div class="mx-auto max-w-7xl px-6 lg:px-8">
				<div class="relative z-10">
					<h2 class="mx-auto max-w-4xl text-center text-5xl font-bold tracking-tight text-white"><?php echo esc_html( $main_title ); ?></h2>
					<p class="mx-auto mt-4 max-w-2xl text-center text-lg leading-8 text-white/60"><?php echo esc_html( $main_description ); ?></p>
					<div class="mt-16 flex justify-center">
						<?php
						if ( have_rows( 'pricing_structure_list' ) ) :
							$total_buttons = count( get_field( 'pricing_structure_list' ) );
							?>
							<div class="mt-16 flex justify-center">
								<fieldset class="grid grid-cols-<?php echo esc_attr( $total_buttons ); ?> gap-x-1 rounded-full bg-white/5 p-1 text-center text-xs font-semibold leading-5 text-white <?php echo esc_attr( $ring_color ); ?>">
									<legend class="sr-only">Payment frequency</legend>
									<?php
									while ( have_rows( 'pricing_structure_list' ) ) :
										the_row();
										$subscription = get_sub_field( 'pricing_subscription' ) ?: 'Monthly';

										?>
										<label class="cursor-pointer rounded-full px-2.5 py-1 <?php echo esc_attr( get_row_index() === 1 ? 'bg-indigo-600 text-white' : 'text-gray-500' ); ?>" id="button<?php echo esc_attr( $total_buttons ); ?>">
											<input type="radio" name="frequency" value="<?php echo esc_html( $subscription ); ?>" class="sr-only subscription-input">
											<span><?php echo esc_html( $subscription ); ?></span>
										</label>
									<?php endwhile; ?>
								</fieldset>
							</div>
						<?php else : ?>
						<?php endif; ?>
					</div>
				</div>
				<?php if ( have_rows( 'pricing_structure_list' ) ) : ?>
					<?php
					while ( have_rows( 'pricing_structure_list' ) ) :
						the_row();
						$subscription = get_sub_field( 'pricing_subscription' ) ?: 'monthly';
						?>
						<?php $with_toggle_repeater = get_sub_field( 'with_toggle_repeater' ); ?>
						<?php
						if ( $with_toggle_repeater ) :
							$total_cards = count( $with_toggle_repeater );

							if ( 3 === $total_cards ) {
								$hidden = 'lg:block';
							}
							?>
							<div class="cards card-<?php echo esc_attr( get_row_index() ); ?> relative mx-auto mt-10 grid max-w-md grid-cols-1 gap-y-8 lg:mx-0 lg:-mb-14 lg:max-w-none lg:grid-cols-<?php echo esc_html( $total_cards ); ?> hidden" id="<?php echo esc_attr( $subscription ); ?>">

								<div class="hidden lg:absolute lg:inset-x-px lg:bottom-0 lg:top-4 <?php echo esc_attr( $hidden ); ?> lg:rounded-t-2xl lg:bg-gray-800/80 lg:ring-1 lg:ring-white/10 mb-14" aria-hidden="true"></div>

								<?php
								while ( have_rows( 'with_toggle_repeater' ) ) :
									the_row();
									$tier_price_title       = get_sub_field( 'tier_price_title' ) ?: 'Freelancer';
									$tier_price_label       = get_sub_field( 'tier_price_label' ) ?: 'Most popular';
									$tier_price_description = get_sub_field( 'tier_price_description' ) ?: 'The essentials to provide your best work for clients.';
									$tier_price             = get_sub_field( 'tier_price' ) ?: '$2';
									$tier_price_date        = get_sub_field( 'tier_price_subscription' ) ?: '/month';
									$tier_price_button      = get_sub_field( 'price_button_text' ) ?: 'Buy plan';
									$card_ring              = 'ring-1 ring-gray-200';

									$text_color_primary   = 'text-white';
									$text_color_secondary = 'text-gray-300';
									$text_color_label     = 'text-gray-500';
									$button_color         = 'text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 bg-white/10 hover:bg-white/20 focus-visible:outline-white';
									$label_bg_color       = 'bg-indigo-600 text-white';
									$card_color           = ' ring-1 ring-white/10 lg:ring-0 bg-gray-800/80';

									if ( 3 === $total_cards ) {
										$card_color = 'lg:ring-0 bg-gray-800/80 lg:bg-transparent';
									}



									if ( get_sub_field( 'checkbox_highlight' ) ) {
										$card_ring            = 'ring-1 ring-gray-200';
										$text_color_primary   = 'text-gray-900';
										$text_color_secondary = 'text-gray-600';
										$text_color_label     = 'text-indigo-600';
										$button_color         = 'text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 bg-indigo-600 shadow-sm hover:bg-indigo-500 focus-visible:outline-indigo-600';
										$label_bg_color       = 'bg-indigo-600 text-white';
										$card_color           = 'z-10 bg-white shadow-xl ring-1 ring-gray-900/10';
									}

									if ( 'is-style-dark' === $style ) {
										$card_ring            = 'ring-1 ring-white/10';
										$text_color_primary   = 'text-gray-900';
										$text_color_secondary = 'text-gray-600';
										$text_color_label     = 'text-indigo-500';
										$button_color         = 'bg-white/10 text-white hover:bg-white/20 focus-visible:outline-white';
										$label_bg_color       = 'bg-indigo-500 text-white';
										$card_color           = ' ring-1 ring-gray-900/10 lg:ring-0 bg-white/60';

										if ( 3 === $total_cards ) {
											$card_color = 'lg:ring-0 bg-gray-800/80 lg:bg-transparent';
										}

										if ( get_sub_field( 'checkbox_highlight' ) ) {
											$card_ring            = 'bg-white/5 ring-2 ring-indigo-400';
											$text_color_primary   = 'text-white';
											$text_color_secondary = 'text-gray-300';
											$text_color_label     = 'text-white';
											$button_color         = 'bg-indigo-500 text-white shadow-sm hover:bg-indigo-400 focus-visible:outline-indigo-500';
											$label_bg_color       = 'bg-indigo-500 text-white';
											$card_color           = ' ring-1 ring-gray-900/10 lg:ring-0 bg-gray-800 z-10';
										}
									}

									?>


									<div class="relative rounded-2xl lg:pb-14 <?php echo esc_attr( $card_color ); ?>">
										<div class="p-8 lg:pt-12 xl:p-10 xl:pt-14">
											<h3 id="tier-starter" class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $tier_price_title ); ?></h3>
											<div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between lg:flex-col lg:items-stretch">
												<div class="mt-2 flex items-center gap-x-4">
													<p class="text-4xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $tier_price ); ?></p>
													<div class="text-sm leading-5">
														<p class="<?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $tier_price_label ); ?></p>
														<p class="text-gray-400"><?php echo esc_html( $tier_price_description ); ?></p>
													</div>
												</div>
												<a href="#" aria-describedby="tier-starter" class="rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 <?php echo esc_attr( $button_color ); ?>">Buy this plan</a>
											</div>

											<div class="mt-8 flow-root sm:mt-10">
												<ul role="list" class="-my-2 divide-y border-t text-sm leading-6 lg:border-t-0 divide-gray-900/5 border-gray-900/5 <?php echo esc_attr( $text_color_secondary ); ?>">
													<?php if ( have_rows( 'tier_feature_list' ) ) : ?>
														<?php
														while ( have_rows( 'tier_feature_list' ) ) :
															the_row();
															$tier_features = get_sub_field( 'tier_features' ) ?: '25 products';
															?>
															<li class="flex gap-x-3 py-2">
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
										</div>
									</div>
								<?php endwhile; ?>
							</div>
						<?php else : ?>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="relative <?php echo esc_attr( $bg_color_2 ); ?> lg:pt-14">
			<div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
				<!-- Feature comparison (up to lg) -->
				<?php if ( have_rows( 'toggle_comparison_mb_repeater' ) ) : ?>
					<?php
					while ( have_rows( 'toggle_comparison_mb_repeater' ) ) :
						the_row();
						$bg_color               = 'bg-white';
						$feature_title          = get_sub_field( 'title' ) ?: 'Freelancer';
						$feature_description    = get_sub_field( 'description' ) ?: 'Most popular';
						$bg_color_2             = 'bg-gray-50';
						$text_color_label       = 'text-indigo-600';
						$divide_color           = 'divide-gray-200';
						$text_highlight_primary = 'text-gray-900';
						$border_color           = 'border-transparent';
						$border_color_2         = 'border-gray-900/10';
						$ring_color             = ' ring-1 ring-gray-900/10';
						$text_color_primary     = 'text-gray-900';
						$text_color_secondary   = 'text-gray-600';

						if ( get_sub_field( 'checkbox_highlight' ) ) {
							$card_ring              = 'ring-2 ring-indigo-600';
							$text_highlight_primary = 'font-semibold text-indigo-600';
							$text_color_secondary   = 'text-gray-600';
							$text_color_label       = 'text-indigo-600';
							$label_bg_color         = 'bg-indigo-600 text-white';
							$border_color           = 'border-indigo-600';
							$ring_color             = ' ring-2 ring-indigo-600';
						}


						if ( 'is-style-dark' === $style ) {
							$bg_color_2             = 'bg-gray-800';
							$text_color_label       = 'text-indigo-500';
							$border_color_2         = 'border-white/10';
							$divide_color           = 'divide-white/10';
							$text_highlight_primary = 'text-white';
							$border_color           = 'border-transparent';
							$ring_color             = ' ring-2 ring-white/10';
							$text_color_primary     = 'text-gray-900';

							if ( get_sub_field( 'checkbox_highlight' ) ) {
								$card_ring              = 'ring-2 ring-indigo-400';
								$text_highlight_primary = 'font-semibold text-indigo-400';
								$text_color_primary     = 'text-white';
								$text_color_secondary   = 'text-gray-300';
								$text_color_label       = 'text-indigo-400';
								$label_bg_color         = 'bg-indigo-400 text-white';
								$border_color           = 'border-indigo-400';
								$ring_color             = ' ring-2 ring-indigo-400';
							}
						}
						?>
						<section aria-labelledby="mobile-comparison-heading" class="lg:hidden">
							<h2 id="mobile-comparison-heading" class="sr-only">Feature comparison</h2>

							<div class="mx-auto max-w-2xl space-y-16">
								<div class="border-t <?php echo esc_attr( $border_color_2 ); ?> mt-10">
									<div class="-mt-px w-72 border-t-2 pt-10 md:w-80 <?php echo esc_attr( $border_color ); ?>">
										<h3 class="text-sm leading-6 <?php echo esc_attr( $text_highlight_primary ); ?>"><?php echo esc_html( $feature_title ); ?></h3>
										<p class="mt-1 text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $feature_description ); ?></p>
									</div>

									<div class="mt-10 space-y-10">
										<?php if ( have_rows( 'cards_list' ) ) : ?>
											<?php
											while ( have_rows( 'cards_list' ) ) :
												the_row();

												$main_feature = get_sub_field( 'card_title' ) ?: 'Main Feature';
												?>
												<div>
													<h4 class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $main_feature ); ?></h4>
													<div class="relative mt-6">
														<div aria-hidden="true" class="absolute inset-y-0 right-0 hidden w-1/2 rounded-lg <?php echo esc_attr( $bg_color ); ?> shadow-sm sm:block"></div>

														<div class="relative rounded-lg <?php echo esc_attr( $bg_color ); ?> shadow-sm sm:rounded-none sm:bg-transparent sm:shadow-none sm:ring-0 <?php echo esc_attr( $ring_color ); ?>">
															<dl class="divide-y <?php echo esc_attr( $divide_color ); ?> text-sm leading-6">
																<?php if ( have_rows( 'features' ) ) : ?>
																	<?php
																	while ( have_rows( 'features' ) ) :
																		the_row();

																		$feature = get_sub_field( 'feature' ) ?: 'Freelancer';
																		$custom  = get_sub_field( 'custom_text' ) ?: '25 Products';
																		?>


																		<div class="flex items-center justify-between px-4 py-3 sm:grid sm:grid-cols-2 sm:px-0">
																			<dt class="pr-4 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $feature ); ?></dt>
																			<dd class="flex items-center justify-end sm:justify-center sm:px-4">
																				<?php if ( get_sub_field( 'checkmark' ) ) : ?>
																					<?php if ( get_sub_field( 'enabled' ) ) : ?>
																						<svg class="mx-auto h-5 w-5 <?php echo esc_attr( $text_color_label ); ?>" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																							<path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
																						</svg>
																						<span class="sr-only">Yes</span>
																					<?php else : ?>
																						<svg class="mx-auto h-5 w-5 text-gray-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																							<path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
																						</svg>
																						<span class="sr-only">No</span>
																					<?php endif; ?>

																				<?php else : ?>
																					<span class="<?php echo esc_attr( $text_highlight_primary ); ?>"><?php echo esc_html( $custom ); ?></span>
																				<?php endif; ?>
																			</dd>
																		</div>

																	<?php endwhile; ?>
																<?php else : ?>
																<?php endif; ?>
															</dl>
														</div>
														<div aria-hidden="true" class="pointer-events-none absolute inset-y-0 right-0 hidden w-1/2 rounded-lg sm:block <?php echo esc_attr( $ring_color ); ?>"></div>
													</div>
												</div>
											<?php endwhile; ?>
										<?php else : ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</section>
					<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>


				<?php if ( have_rows( 'toggle_comparison_repeater' ) ) : ?>
					<?php
					while ( have_rows( 'toggle_comparison_repeater' ) ) :
						the_row();
						$ring_color = 'ring-1 ring-gray-900/10';
						$header     = get_sub_field( 'header' );
						if ( $header ) {
							$total_col = count( $header );
						}
						$bg_color               = 'bg-white';
						$feature_title          = get_sub_field( 'title' ) ?: 'Freelancer';
						$feature_description    = get_sub_field( 'description' ) ?: 'Most popular';
						$bg_color_2             = 'bg-gray-50';
						$text_color_label       = 'text-indigo-600';
						$divide_color           = 'divide-gray-200';
						$text_highlight_primary = 'text-gray-900';
						$border_color           = 'border-transparent';
						$border_color_2         = 'border-gray-900/10';
						$ring_color             = ' ring-1 ring-gray-900/10';
						$text_color_primary     = 'text-gray-900';
						$text_color_secondary   = 'text-gray-600';

						?>
						<section aria-labelledby="comparison-heading" class="hidden lg:block">
							<h2 id="comparison-heading" class="sr-only">Feature comparison</h2>
							<?php $header = get_sub_field( 'header' ); ?>
							<?php
							if ( $header ) :
								$total_col = count( $header );
								?>
								<div class="grid grid-cols-<?php echo esc_attr( $total_col + 1 ); ?> gap-x-8 border-t <?php echo esc_attr( $border_color_2 ); ?> before:block"> <!-- Dynamic grid cols -->
									<?php
									while ( have_rows( 'header' ) ) :
										the_row();

										$product_title          = get_sub_field( 'title' ) ?: 'Product Title';
										$product_description    = get_sub_field( 'description' ) ?: 'Product Description';
										$text_highlight_primary = 'text-gray-900';
										$border_header          = 'border-transparent';
										$bg_divider             = 'bg-gray-200';
										$border_class           = 'light';

										if ( get_sub_field( 'checkbox_highlight' ) ) {

											$text_highlight_primary = 'text-indigo-600 font-semibold';
											$border_header          = 'border-indigo-600';
											
										}

										if ( 'is-style-dark' === $style ) {
											$text_highlight_primary = 'text-white';
											$border_header          = 'border-transparent';
											$bg_divider             = 'bg-white/5';
											$border_class           = 'dark';

											if ( get_sub_field( 'checkbox_highlight' ) ) {

												$text_highlight_primary = 'text-indigo-500 font-semibold';
												$border_header          = 'border-indigo-500';
											}
										}
										?>
										<div aria-hidden="true" class="-mt-px">
											<div class="header-border  border-t-2 pt-10 <?php echo esc_attr( $border_header ); ?> <?php echo esc_attr( $border_class ); ?> ">
												<p class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_highlight_primary ); ?>"><?php echo esc_html( $product_title ); ?></p>
												<p class="mt-1 text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $product_description ); ?></p>
											</div>
										</div>
									<?php endwhile; ?>
								<?php else : ?>
								<?php endif; ?>
								</div>

								<div class="-mt-6 space-y-16">
									<?php if ( have_rows( 'main_feature' ) ) : ?>
										<?php
										while ( have_rows( 'main_feature' ) ) :
											the_row();
											$main_feature = get_sub_field( 'title' ) ?: 'Main Feature';
											?>

											<div class="main-feature">
												<h3 class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $main_feature ); ?></h3>
												<div class="relative -mx-8 mt-10">
													<div class="absolute inset-x-8 inset-y-0 grid grid-cols-<?php echo esc_attr( $total_col + 1 ); ?> gap-x-8 before:block" aria-hidden="true"> <!-- Dynamic grid cols, repeater fake background -->
														<?php
														for ( $i = 0; $i < $total_col; $i++ ) :
															?>
															<div class="h-full w-full rounded-lg <?php echo esc_attr( $bg_color ); ?> shadow-sm"></div>
														<?php endfor; ?>
													</div>

													<table class="relative w-full border-separate border-spacing-x-8">
														<thead>
															<tr class="text-left">
																<?php
																for ( $i = 0; $i < $total_col + 1; $i++ ) :
																	?>
																	<th scope="col">
																	</th>
																<?php endfor; ?>
															</tr>
														</thead>
														<tbody>
															<?php if ( have_rows( 'feature' ) ) : ?>
																<?php
																while ( have_rows( 'feature' ) ) :
																	the_row();

																	$main_feature = get_sub_field( 'features' ) ?: 'Main Feature';
																	?>
																	<tr>
																		<th scope="row" class="w-1/<?php echo esc_attr( $total_col + 1 ); ?> py-3 pr-4 text-left text-sm font-normal leading-6 <?php echo esc_attr( $text_color_primary ); ?>"> <!-- Dynamic grid cols -->
																			<?php echo esc_html( $main_feature ); ?>
																			<div class="bd-separate absolute inset-x-8 mt-3 h-px <?php echo esc_attr( $bg_divider ); ?>"></div>
																		</th>
																		<?php if ( have_rows( 'checkmark_list' ) ) : ?>
																			<?php
																			while ( have_rows( 'checkmark_list' ) ) :
																				the_row();

																				$main_feature = get_sub_field( 'title' ) ?: 'Main Feature';
																				$custom       = get_sub_field( 'custom_text' ) ?: '25 Products';
																				?>
																				<td class="relative w-1/<?php echo esc_attr( $total_col + 1 ); ?> px-4 py-0 text-center"> 
																					<span class="relative h-full w-full py-3">
																						<?php if ( get_sub_field( 'checkmark' ) ) : ?>
																							<?php if ( get_sub_field( 'enabled' ) ) : ?>
																								<svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																									<path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
																								</svg>
																								<span class="sr-only">Yes</span>
																							<?php else : ?>
																								<svg class="mx-auto h-5 w-5 text-gray-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																									<path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
																								</svg>
																								<span class="sr-only">No</span>
																							<?php endif; ?>
																						<?php else : ?>
																							<span class="text-sm leading-6 li-text-<?php echo esc_attr( get_row_index() ); ?>"><?php echo esc_html( $custom ); ?></span>
																						<?php endif; ?>
																					</span>
																				</td>
																			<?php endwhile; ?>
																		<?php else : ?>
																		<?php endif; ?>
																	</tr>
																<?php endwhile; ?>
															<?php else : ?>
															<?php endif; ?>
														</tbody>
													</table>
													<div class="pointer-events-none absolute inset-x-8 inset-y-0 grid grid-cols-<?php echo esc_attr( $total_col + 1 ); ?> gap-x-8 before:block" aria-hidden="true"> <!-- Dynamic grid cols -->
														<?php
														for ( $i = 0; $i < $total_col; $i++ ) :
															?>
															<div class="body-border-<?php echo esc_attr( $i ); ?> rounded-lg"></div>
														<?php endfor; ?>
													</div>
												</div>
											</div>
										<?php endwhile; ?>
									<?php else : ?>
									<?php endif; ?>
								</div>
						</section>
					<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php endif; ?>

