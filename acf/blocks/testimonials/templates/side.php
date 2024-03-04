<?php
/**
 * Side-by-side Template.
 *
 * @package greydientlab
 */

?>
<?php
$style                = $block['className'] ?? '';
$bg_color             = '';
$container_color      = 'bg-gray-50';
$text_color_primary   = 'text-gray-900';
$text_color_secondary = 'text-gray-500';
$text_color_label     = 'text-indigo-600';


if ( 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-400';
	$text_color_label     = 'text-indigo-400';
	$container_color      = 'bg-white/5';
	$bg_color             = 'bg-gray-900 dark';
}
?>

<section class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto grid max-w-2xl grid-cols-1 lg:mx-0 lg:max-w-none lg:grid-cols-2 ">
			<?php if ( have_rows( 'testimonial_repeater' ) ) : ?>
				<?php 
				while ( have_rows( 'testimonial_repeater' ) ) :
					the_row();
					$quote_repeater    = get_sub_field( 'quote' ) ? get_sub_field( 'quote' ) : '';
					$quotee_repeater   = get_sub_field( 'quotee' ) ? get_sub_field( 'quotee' ) : '';
					$position_repeater = get_sub_field( 'position' ) ? get_sub_field( 'position' ) : '';
					?>
					<div class="testimonial-class">
					<?php echo wp_get_attachment_image( get_sub_field( 'company_logo' ), 'full', '', array( 'class' => 'h-14 w-14' ) ); ?>
						<figure class="mt-10 flex flex-auto flex-col justify-between">
							<blockquote class="text-lg leading-8 <?php echo esc_attr( $text_color_primary ); ?>">
								<p>“<?php echo esc_html( $quote_repeater ); ?>”</p>
							</blockquote>
							<figcaption class="mt-10 flex items-center gap-x-6">
								<?php echo wp_get_attachment_image( get_sub_field( 'avatar' ), 'full', '', array( 'class' => 'h-14 w-14 rounded-full bg-gray-50' ) ); ?>
								<div class="text-base">
									<div class="font-semibold <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $quotee_repeater ); ?></div>
									<div class="mt-1 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $position_repeater ); ?></div>
								</div>
							</figcaption>
						</figure>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<div class="flex flex-col pb-10 sm:pb-16 lg:pb-0 lg:pr-8 xl:pr-20">
						<img class="h-12 self-start" src="https://tailwindui.com/img/logos/tuple-logo-gray-900.svg" alt="">
						<figure class="mt-10 flex flex-auto flex-col justify-between">
							<blockquote class="text-lg leading-8 <?php echo esc_attr( $text_color_primary ); ?>">
								<p>“Amet amet eget scelerisque tellus sit neque faucibus non eleifend. Integer eu praesent at a. Ornare arcu gravida natoque erat et cursus tortor consequat at. Vulputate gravida sociis enim nullam ultricies habitant malesuada lorem ac. Tincidunt urna dui pellentesque sagittis.”</p>
							</blockquote>
							<figcaption class="mt-10 flex items-center gap-x-6">
								<img class="h-14 w-14 rounded-full <?php echo esc_attr( $container_color ); ?>" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
								<div class="text-base">
									<div class="font-semibold <?php echo esc_attr( $text_color_primary ); ?>">Judith Black</div>
									<div class="mt-1 <?php echo esc_attr( $text_color_secondary ); ?>">CEO of Tuple</div>
								</div>
							</figcaption>
						</figure>
					</div>
			<?php endif; ?>
		</div>
	</div>
</section>
