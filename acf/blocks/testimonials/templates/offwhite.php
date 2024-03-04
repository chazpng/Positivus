<?php
/**
 * With Offwhite Template.
 *
 * @package greydientlab
 */

?>

<?php
$style                = $block['className'] ?? '';
$bg_color             = '';
$container_color      = 'bg-gray-50';
$text_color_primary   = 'text-gray-900';
$text_color_secondary = 'text-gray-600';
$text_color_label     = 'text-indigo-600';
$main_label           = get_field( 'eyebrow_text' ) ?: 'Testimonials';
$main_title           = get_field( 'title' ) ?: 'We have worked with thousands of amazing people';

if ( 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$text_color_label     = 'text-indigo-400';
	$container_color      = 'bg-white/5';
	$bg_color             = 'bg-gray-900 dark';
}
?>


<div class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto max-w-xl text-center">
			<h2 class="text-lg font-semibold leading-8 tracking-tight <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $main_label ); ?></h2>
			<p class="mt-2 text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></p>
		</div>
		<div class="mx-auto mt-16 flow-root max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
			<div class="-mt-8 sm:-mx-4 sm:columns-2 sm:text-[0] lg:columns-3">
				<?php if ( have_rows( 'testimonial_repeater' ) ) : ?>
					<?php 
					while ( have_rows( 'testimonial_repeater' ) ) :
						the_row();
						$quote    = get_sub_field( 'quote' ) ? get_sub_field( 'quote' ) : '';
						$quotee   = get_sub_field( 'quotee' ) ? get_sub_field( 'quotee' ) : '';
						$position = get_sub_field( 'social_name' ) ? get_sub_field( 'social_name' ) : '';
						?>
						<div class="pt-8 sm:inline-block sm:w-full sm:px-4">
							<figure class="rounded-2xl <?php echo esc_attr( $container_color ); ?> p-8 text-sm leading-6">
								<blockquote class="<?php echo esc_attr( $text_color_primary ); ?>">
									<p>“<?php echo esc_html( $quote ); ?>”</p>
								</blockquote>
								<figcaption class="mt-6 flex items-center gap-x-4">
									<?php echo wp_get_attachment_image( get_sub_field( 'avatar' ), 'full', '', array( 'class' => 'h-10 w-10 rounded-full bg-gray-50' ) ); ?>
									<div>
										<div class="font-semibold <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $quotee ); ?></div>
										<div class="<?php echo esc_attr( $text_color_secondary ); ?>">@<?php echo esc_html( $position ); ?></div>
									</div>
								</figcaption>
							</figure>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
					<div class="pt-8 sm:inline-block sm:w-full sm:px-4">
						<figure class="rounded-2xl <?php echo esc_attr( $container_color ); ?> p-8 text-sm leading-6">
							<blockquote class="<?php echo esc_attr( $text_color_primary ); ?>">
								<p>“Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus nihil. Aut enim doloremque et ipsam.”</p>
							</blockquote>
							<figcaption class="mt-6 flex items-center gap-x-4">
								<img class="h-10 w-10 rounded-full <?php echo esc_attr( $container_color ); ?>" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
								<div>
									<div class="font-semibold <?php echo esc_attr( $text_color_primary ); ?>">Leslie Alexander</div>
									<div class="<?php echo esc_attr( $text_color_secondary ); ?>">@lesliealexander</div>
								</div>
							</figcaption>
						</figure>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
