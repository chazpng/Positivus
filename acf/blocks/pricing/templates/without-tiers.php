<?php
/**
 * With Stats Template.
 *
 * @package greydientlab
 */

?>

<?php
$bg_color              = '';
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
$divider_color         = 'bg-gray-100';
$price_button_color    = 'bg-indigo-600 hover:bg-indigo-500 focus-visible:outline-indigo-600';
$divider_comparison_1  = 'gray-900/10';

if ( 'is-style-dark' === $style ) {
	$text_color_primary    = 'text-white';
	$text_color_secondary  = 'text-gray-300';
	$text_color_label      = 'text-indigo-400';
	$bg_color              = 'bg-gray-900';
	$price_container_color = 'bg-white/5';
	$ring_color            = 'ring-white/10';
	$divider_color         = 'bg-white/10';
	$price_button_color    = 'bg-indigo-500 hover:bg-indigo-400 focus-visible:outline-indigo-500';
	$divider_comparison_1  = 'white/5';
}

?>
<?php if ( 'simple' === get_field( 'without_tiers_type' ) ) : ?>
	<div class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
		<div class="mx-auto max-w-7xl px-6 lg:px-8">
			<div class="mx-auto max-w-2xl sm:text-center">
				<h2 class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $main_label ); ?></h2>
				<h2 class="text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
				<p class="mt-6 text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $main_description ); ?></p>
			</div>
			<div class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 <?php echo esc_attr( $ring_color ); ?> sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
				<div class="p-8 sm:p-10 lg:flex-auto">
					<h3 class="text-2xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $price_title ); ?></h3>
					<p class="mt-6 text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $price_description ); ?></p>
					<div class="mt-10 flex items-center gap-x-4">
						<h4 class="flex-none text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $price_list_title ); ?></h4>
						<div class="h-px flex-auto <?php echo esc_attr( $divider_color ); ?>"></div>
					</div>
					<ul role="list" class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?> sm:grid-cols-2 sm:gap-6">
						<?php if ( have_rows( 'price_features_list' ) ) : ?>
							<?php
							while ( have_rows( 'price_features_list' ) ) :
								the_row();
								$features_list = get_sub_field( 'price_features' ) ?: 'Your Features Here';
								?>
								<li class="flex gap-x-3">
									<svg class="h-6 w-5 flex-none <?php echo esc_attr( $text_color_label ); ?>" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
									</svg>
									<?php echo esc_html( $features_list ); ?>
								</li>
							<?php endwhile; ?>
						<?php else : ?>
							<li class="flex gap-x-3">
								<svg class="h-6 w-5 flex-none <?php echo esc_attr( $text_color_label ); ?>" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
									<path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
								</svg>
								Private forum access
							</li>
						<?php endif; ?>
					</ul>
				</div>
				<div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
					<div class="rounded-2xl <?php echo esc_attr( $price_container_color ); ?> py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
						<?php if ( have_rows( 'price_list' ) ) : ?>
							<?php
							while ( have_rows( 'price_list' ) ) :
								the_row();
								$price_label       = get_sub_field( 'price_label' ) ?: 'Pay once, own it forever';
								$price             = get_sub_field( 'price' ) ?: '$349';
								$price_button_text = get_sub_field( 'price_button_text' ) ?: 'Get access';
								$price_footer      = get_sub_field( 'price_footer' ) ?: 'Invoices and receipts available for easy company reimbursement';
								?>
								<div class="mx-auto max-w-xs px-8">
									<p class="text-base font-semibold <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $price_label ); ?></p>
									<p class="mt-6 flex items-baseline justify-center gap-x-2">
										<span class="text-5xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $price ); ?></span>
										<span class="text-sm font-semibold leading-6 tracking-wide <?php echo esc_attr( $text_color_secondary ); ?>">USD</span>
									</p>
									<a href="<?php the_sub_field( 'price_link' ); ?>" class="mt-10 block w-full rounded-md <?php echo esc_attr( $price_button_color ); ?>  px-3 py-2 text-center text-sm font-semibold text-white shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 "><?php echo esc_html( $price_button_text ); ?></a>
									<p class="mt-6 text-xs leading-5 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $price_footer ); ?></p>
								</div>
							<?php endwhile; ?>
						<?php else : ?>
							<div class="mx-auto max-w-xs px-8">
								<p class="text-base font-semibold <?php echo esc_attr( $text_color_secondary ); ?>">Pay once, own it forever</p>
								<p class="mt-6 flex items-baseline justify-center gap-x-2">
									<span class="text-5xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">$349</span>
									<span class="text-sm font-semibold leading-6 tracking-wide <?php echo esc_attr( $text_color_secondary ); ?>">USD</span>
								</p>
								<a href="#" class="mt-10 block w-full rounded-md <?php echo esc_attr( $price_button_color ); ?>  px-3 py-2 text-center text-sm font-semibold text-white shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 ">Get access</a>
								<p class="mt-6 text-xs leading-5 <?php echo esc_attr( $text_color_secondary ); ?>">Invoices and receipts available for easy company reimbursement</p>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php if ( 'comparison' === get_field( 'without_tiers_type' ) ) : ?>
	<div class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
		<div class="mx-auto max-w-7xl px-6 lg:px-8">
			<div class="mx-auto max-w-4xl text-center">
				<h2 class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_label ); ?>">Pricing</h2>
				<p class="mt-2 text-4xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-5xl">Plans for teams of&nbsp;all&nbsp;sizes</p>
			</div>
			<p class="mx-auto mt-6 max-w-2xl text-center text-lg leading-8 text-gray-600">Distinctio et nulla eum soluta et neque labore quibusdam. Saepe et quasi iusto modi velit ut non voluptas in. Explicabo id ut laborum.</p>

			<!-- lg+ -->
			<div class="isolate mt-20 hidden lg:block">
				<div class="relative -mx-8">
					<table class="w-full table-fixed border-separate border-spacing-x-8 text-left">
						<caption class="sr-only">
							Pricing plan comparison
						</caption>
						<colgroup>
							<?php if ( have_rows( 'main_container' ) ) : ?>
								<?php
								while ( have_rows( 'main_container' ) ) :
									the_row();
									?>
									<?php
									if ( have_rows( 'price_list_repeater' ) ) :
										$grid_col = get_sub_field( 'price_list_repeater' ) ? count( get_sub_field( 'price_list_repeater' ) ) : 1;
										?>
										<col class="w-1/<?php echo esc_attr( $grid_col + 1 ); ?>">
										<?php
										while ( have_rows( 'price_list_repeater' ) ) :
											the_row();
											?>
											<col class="w-1/<?php echo esc_attr( $grid_col + 1 ); ?>">
										<?php endwhile; ?>
									<?php endif; ?>
								<?php endwhile; ?>
							<?php else : ?>
							<?php endif; ?>
						</colgroup>
						<thead>
							<tr>
								<td></td>
								<!-- REPEATER  -->
								<?php if ( have_rows( 'main_container' ) ) : ?>
									<?php
									while ( have_rows( 'main_container' ) ) :
										the_row();
										?>
										<?php if ( have_rows( 'price_list_repeater' ) ) : ?>
											<?php
											while ( have_rows( 'price_list_repeater' ) ) :
												the_row();
												$product_title = get_sub_field( 'tier_price_title' ) ?: 'Basic';
												?>
												<th scope="col" class="px-6 pt-6 xl:px-8 xl:pt-8">
													<div class="text-sm font-semibold leading-7 <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $product_title ); ?></div><!-- REPEATER TITLE -->
												</th>
											<?php endwhile; ?>
										<?php else : ?>
										<?php endif; ?>
									<?php endwhile; ?>
								<?php else : ?>
								<?php endif; ?>
								<!-- REPEATER  -->
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row"><span class="sr-only">Price</span></th>
								<?php if ( have_rows( 'main_container' ) ) : ?>
									<?php
									while ( have_rows( 'main_container' ) ) :
										the_row();
										?>
										<?php if ( have_rows( 'price_list_repeater' ) ) : ?>
											<?php
											while ( have_rows( 'price_list_repeater' ) ) :
												the_row();
												$product_price  = get_sub_field( 'tier_price' ) ?: '$9';
												$product_date   = get_sub_field( 'tier_price_subscription' ) ?: '/month';
												$product_button = get_sub_field( 'price_button_text' ) ?: 'hello';
												?>
												<td class="px-6 pt-2 xl:px-8">
													<div class="flex items-baseline gap-x-1 <?php echo esc_attr( $text_color_primary ); ?>">
														<span class="text-4xl font-bold"><?php echo esc_html( $product_price ); ?></span>
														<span class="text-sm font-semibold leading-6"><?php echo esc_html( $product_date ); ?></span>
													</div>
													<a href="#" class="mt-8 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 <?php echo esc_attr( $text_color_label ); ?> ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300"><?php echo esc_html( $product_button ); ?></a>
												</td>
											<?php endwhile; ?>
										<?php else : ?>
										<?php endif; ?>
									<?php endwhile; ?>
								<?php else : ?>
								<?php endif; ?>
							</tr>
							<?php if ( have_rows( 'main_container' ) ) : ?>
								<?php
								while ( have_rows( 'main_container' ) ) :
									the_row();
									?>
									<?php if ( have_rows( 'feature_list' ) ) : ?>
										<?php
										while ( have_rows( 'feature_list' ) ) :
											the_row();

											$features_list = get_sub_field( 'feature_title' ) ?: 'Feature Title';
											?>

											<tr>
												<th scope="colgroup" colspan="3" class="pb-4 text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_primary ); ?> pt-8">
													<?php echo esc_html( $features_list ); ?>
													<div class="absolute inset-x-8 mt-4 h-px bg-<?php echo esc_attr( $divider_comparison_1 ); ?>"></div>
												</th>
											</tr>

											<?php if ( have_rows( 'specs' ) ) : ?>
												<?php
												while ( have_rows( 'specs' ) ) :
													the_row();

													$specs_name = get_sub_field( 'spec_name' ) ?: 'Feature Title';
													?>
													<tr>
														<th scope="row" class="py-4 text-sm font-normal leading-6 <?php echo esc_attr( $text_color_primary ); ?> border-b-<?php echo esc_html( $divider_comparison_1 ); ?> border-b">
															<?php echo esc_html( $specs_name ); ?>
														<?php if ( have_rows( 'tier_specs' ) ) : ?>
															<?php
															while ( have_rows( 'tier_specs' ) ) :
																the_row();

																?>
																<?php if ( have_rows( 'content' ) ) : ?>
																	<?php
																	while ( have_rows( 'content' ) ) :
																		the_row();
																		$layout = get_row_layout( 'content' );
																		?>
																		<td class="px-6 py-4 xl:px-8 text-center mx-auto <?php echo esc_attr( $text_color_primary ); ?> border-b-<?php echo esc_html( $divider_comparison_1 ); ?> border-b">
																			<?php if ( 'text' === $layout ) : ?>
																				<?php echo esc_html( get_sub_field( 'spec' ) ); ?>
																			<?php endif; ?>
																			<?php if ( 'checkmark' === $layout ) : ?>
																				<?php if ( get_sub_field( 'enable' ) ) : ?>
																					<svg class="h-6 w-5 mx-auto flex-none <?php echo esc_attr( $text_color_label ); ?>" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																						<path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
																					</svg>
																				<?php else : ?>
																					<svg class="mx-auto h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																						<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
																					</svg>
																				<?php endif; ?>
																			<?php endif; ?>
																			<?php if ( 'textarea' === $layout ) : ?>
																				<?php echo esc_html( get_sub_field( 'content' ) ); ?>
																			<?php endif; ?>
																			<?php if ( 'bullets' === $layout ) : ?>
																				<?php if ( have_rows( 'bullet' ) ) : ?>
																					<ul>
																						<?php
																						while ( have_rows( 'bullet' ) ) :
																							the_row();
																							?>
																							<li><?php echo esc_html( get_sub_field( 'value' ) ); ?></li>

																						<?php endwhile; ?>
																					</ul>
																				<?php else : ?>
																				<?php endif; ?>
																			<?php endif; ?>
																			<?php if ( 'icons' === $layout ) : ?>
																				<?php if ( have_rows( 'icon' ) ) : ?>
																					<ul class="flex gap-x-4">
																						<?php
																						while ( have_rows( 'icon' ) ) :
																							the_row();
																							?>

																							<li><img src="<?php echo esc_url( get_sub_field( 'icon_image' ) ); ?>" class="h-8 w-8"></li>

																						<?php endwhile; ?>
																					</ul>
																				<?php else : ?>
																				<?php endif; ?>
																			<?php endif; ?>
																		<?php endwhile; ?>
																	<?php else : ?>
																	<?php endif; ?>
																		</td>
																	<?php endwhile; ?>
																<?php else : ?>
																<?php endif; ?>
													</tr>
												<?php endwhile; ?>
											<?php else : ?>
											<?php endif; ?>
										<?php endwhile; ?>
									<?php else : ?>
									<?php endif; ?>
								<?php endwhile; ?>
							<?php else : ?>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


<?php endif; ?>
