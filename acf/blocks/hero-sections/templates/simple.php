<?php
/**
 * Simple Hero Template.
 *
 * @package circles_x
 */

?>

<?php
$bg_color             = '';
$style_mode           = 'light';
$outer_container      = 'relative isolate px-6 pt-14 lg:px-8';
$inner_container      = 'mx-auto max-w-2xl py-32 sm:py-48 lg:py-56';
$backgrond_drop_color = 'from-[#ff80b5] to-[#9089fc] from-[#80caff] to-[#4f46e5]';
$eyebrow_link_ring    = 'ring-1 ring-gray-900/10 hover:ring-gray-900/20';
$text_color_primary   = 'text-gray-900';
$text_color_secondary = 'text-gray-600';
$primary_button_color = 'bg-indigo-600 hover:bg-indigo-500 focus-visible:outline-indigo-600 ';
$main_title           = get_field( 'title' ) ?: 'Data to enrich your online business';
$main_description     = get_field( 'description' ) ?: 'Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.';
$primary_button       = get_field( 'primary_button_text' ) ?: 'Get Started';
$secondary_button     = get_field( 'secondary_button_text' ) ?: 'Learn More';


if ( 'is-style-dark' === $style ) {
	$backgrond_drop_color = 'from-[#80caff] to-[#4f46e5]';
	$eyebrow_link_ring    = 'ring-1 ring-white/10 hover:ring-white/20';
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$text_color_label     = 'text-indigo-400';
	$border_color         = 'border-indigo-400';
	$style_mode           = 'dark';
	$container_color      = 'bg-white/5';
	$bg_color             = 'bg-gray-900';
	$image_icon_bg        = 'bg-indigo-400';
	$primary_button_color = 'bg-indigo-500 hover:bg-indigo-400 focus-visible:outline-indigo-500 ';
}
?>

<div class="<?php echo esc_attr( $bg_color ); ?> <?php echo esc_attr( $style_mode ); ?>">
	<div class="<?php echo esc_attr( $outer_container ); ?>">
		<?php echo wp_get_attachment_image( get_field( 'background_image' ), 'full', '', array( 'class' => 'absolute inset-0 -z-10 h-full w-full object-cover' ) ); ?>
		<div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
			<div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr <?php echo esc_attr( $backgrond_drop_color ); ?> opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
		</div>
		<?php if ( get_field( 'featured_image' ) ) : ?>
			<div class="py-24 sm:py-32 lg:pb-40">
				<div class="mx-auto max-w-7xl px-6 lg:px-8">
					<div class="mx-auto max-w-2xl text-center">
						<h1 class="text-4xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-6xl"><?php echo esc_html( $main_title ); ?></h1>
						<p class="mt-6 text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $main_description ); ?></p>
						<div class="mt-10 flex items-center justify-center gap-x-6">
							<a href="<?php the_field( 'primary_button_link' ); ?>" class="rounded-md px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 <?php echo esc_attr( $primary_button_color ); ?>"><?php echo esc_html( $primary_button ); ?></a>
							<a href="<?php the_field( 'secondary_button_link' ); ?>" class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $secondary_button ); ?> <span aria-hidden="true">→</span></a>
						</div>
					</div>
					<?php if ( 'is-style-light' === $style ) : ?>
						<div class="mt-16 flow-root sm:mt-24">
							<div class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-inset ring-gray-900/10 lg:-m-4 lg:rounded-2xl lg:p-4">
								<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'full', '', array( 'class' => 'rounded-md shadow-2xl ring-1 ring-gray-900/10' ) ); ?>
							</div>
						</div>
					<?php endif; ?>
					<?php if ( 'is-style-dark' === $style ) : ?>
						<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'full', '', array( 'class' => 'mt-16 rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10 sm:mt-24' ) ); ?>
					<?php endif; ?>
				</div>
			</div>
		<?php else : ?>
			<div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
				<div class="hidden sm:mb-8 sm:flex sm:justify-center">
					<div class="relative rounded-full px-3 py-1 text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?> <?php echo esc_attr( $eyebrow_link_ring ); ?> ">
						<div><?php echo wp_kses_post( get_field( 'eyebrow_link' ) ); ?></div>
					</div>
				</div>
				<div class="text-center">
					<h1 class="text-4xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-6xl"><?php echo esc_html( $main_title ); ?></h1>
					<p class="mt-6 text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $main_description ); ?></p>
					<div class="mt-10 flex items-center justify-center gap-x-6">
						<a href="<?php the_field( 'primary_button_link' ); ?>" class="rounded-md px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 <?php echo esc_attr( $primary_button_color ); ?>"><?php echo esc_html( $primary_button ); ?></a>
						<a href="<?php the_field( 'secondary_button_link' ); ?>" class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $secondary_button ); ?> <span aria-hidden="true">→</span></a>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="absolute inset-x-0 bottom-0 -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
			<div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr <?php echo esc_attr( $backgrond_drop_color ); ?> opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
		</div>
	</div>
</div>
