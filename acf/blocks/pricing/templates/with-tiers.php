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
$divider_color         = 'bg-gray-100';
$price_button_color    = 'bg-indigo-600 hover:bg-indigo-500 focus-visible:outline-indigo-600';

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
}

?>


<div class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32 with-tier-list ">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
	<div class="mx-auto max-w-4xl text-center">
		<h2 class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $main_label ); ?></h2>
		<p class="mt-2 text-4xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-5xl"><?php echo esc_html( $main_title ); ?></p>
	</div>
	<p class="mx-auto mt-6 max-w-2xl text-center text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $main_description ); ?></p>
	<div class="isolate mx-auto mt-16 grid max-w-md grid-cols-1 gap-y-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3 tier-list-class">
		<?php if ( have_rows( 'tier_price_list' ) ) : ?>
			<?php 
			while ( have_rows( 'tier_price_list' ) ) :
				the_row();
				$tier_price_title       = get_field( 'tier_price_title' ) ?: 'Freelancer';
				$tier_price_label       = get_field( 'tier_price_label' ) ?: 'Most popular';
				$tier_price_description = get_field( 'tier_price_description' ) ?: 'The essentials to provide your best work for clients.';
				$tier_price             = get_field( 'tier_price' ) ?: '$2';
				$tier_price_date        = get_field( 'tier_price_date' ) ?: '/month';

				?>
			<div class="<?php echo esc_attr( $bg_color ); ?> <?php echo esc_attr( $ring_color ); ?> tier-list rounded-3xl p-8 ring-1 flex flex-col justify-between  xl:p-10 ">
			<div>
				<div class="flex items-center justify-between gap-x-4">
				<h3 id="tier-freelancer" class="text-lg font-semibold leading-8 <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $tier_price_title ); ?></h3>
				<p class="rounded-full <?php echo esc_attr( $label_bg_color ); ?> px-2.5 py-1 text-xs font-semibold leading-5 <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $tier_price_label ); ?></p>
				</div>
				<p class="mt-4 text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $tier_price_description ); ?></p>
				<p class="mt-6 flex items-baseline gap-x-1">
				<span class="text-4xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $tier_price ); ?></span>
				<span class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $tier_price_date ); ?></span>
				</p>
				<ul role="list" class="mt-8 space-y-3 text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>">
				<?php if ( have_rows( 'tier_feature_list' ) ) : ?>
					<?php 
					while ( have_rows( 'tier_feature_list' ) ) :
						the_row();
						$tier_features = get_field( 'tier_features' ) ?: '25 products';
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
			<a href="#" aria-describedby="tier-freelancer" class="
				<?php 
				if ( 'is-style-dark' === $style ) :
					?>
	dark <?php endif; ?> mt-8 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2  button-class">Buy plan</a>
			</div>
		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
	</div>
	</div>
</div>
