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
$label_bg_color        = 'bg-indigo-600/10';
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
	$label_bg_color        = 'bg-indigo-500/10';
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

							if ( get_sub_field( 'checkbox_highlight' ) ) {
								$card_ring            = 'ring-2 ring-indigo-600';
								$text_color_primary   = 'text-indigo-600';
								$text_color_secondary = 'text-gray-600';
								$text_color_label     = 'text-indigo-600';
								$button_color         = 'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 bg-indigo-600 text-white shadow-sm hover:bg-indigo-500';

								if ( 'emphasized' === get_sub_field( 'highlight_type' ) ) {
									$card_ring            = 'bg-gray-800 ring-2 ring-gray-200';
									$text_color_primary   = 'text-white';
									$text_color_secondary = 'text-gray-300';
									$text_color_label     = 'text-white';
									$button_color         = 'bg-indigo-500 text-white shadow-sm hover:bg-indigo-400 focus-visible:outline-indigo-500';
								}
							}

							if ( 'is-style-dark' === $style ) {
								$card_ring            = 'ring-1 ring-white/10';
								$text_color_primary   = 'text-white';
								$text_color_secondary = 'text-gray-300';
								$text_color_label     = 'text-white';
								$button_color         = 'bg-white/10 text-white hover:bg-white/20 focus-visible:outline-white';

								if ( get_sub_field( 'checkbox_highlight' ) ) {
									$card_ring            = 'bg-white/5 ring-2 ring-indigo-400';
									$text_color_primary   = 'text-white';
									$text_color_secondary = 'text-gray-300';
									$text_color_label     = 'text-white';
									$button_color         = 'bg-indigo-500 text-white shadow-sm hover:bg-indigo-400 focus-visible:outline-indigo-500';
								}

								if ( 'emphasized' === get_sub_field( 'highlight_type' ) ) {
									$card_ring            = 'ring-1 ring-white/10 bg-white';
									$text_color_primary   = 'text-indigo-600';
									$text_color_secondary = 'text-gray-600';
									$text_color_label     = 'text-indigo-600';
									$button_color         = 'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 bg-indigo-600 text-white shadow-sm hover:bg-indigo-500';
								}
							}
							?>


							<div class="rounded-3xl p-8 xl:p-10  <?php echo esc_attr( $card_ring ); ?>">
								<div class="flex items-center justify-between gap-x-4">
									<h3 id="tier-freelancer" class="text-lg font-semibold leading-8 <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $tier_price_title ); ?></h3>
									<?php if ( 3 >= $total_cards && get_sub_field( 'checkbox_highlight' ) && get_sub_field( 'tier_price_label' ) ) : ?>
										<p class="rounded-full bg-indigo-500 px-2.5 py-1 text-xs font-semibold leading-5 text-white"><?php echo esc_html( $tier_price_label ); ?></p>
									<?php endif; ?>
								</div>
								<p class="mt-4 text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $tier_price_description ); ?>.</p>
								<p class="mt-6 flex items-baseline gap-x-1">
									<span class="text-4xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $tier_price ); ?></span>
									<span class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $tier_price_date ); ?></span>
								</p>
								<a href="#" aria-describedby="tier-freelancer" class="mt-6 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 <?php echo esc_attr( $button_color ); ?>"><?php echo esc_html( $tier_price_button ); ?></a>

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


