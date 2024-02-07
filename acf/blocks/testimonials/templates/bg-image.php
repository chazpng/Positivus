<?php
/**
 * With Background Image Template.
 *
 * @package greydientlab
 */

?>

<?php
$style    = $block['className'] ?? '';
$bg_image = get_field( 'background_image' ) ? get_field( 'background_image' ) : '';
$icon     = get_field( 'company_logo' ) ? get_field( 'company_logo' ) : '';
$quote    = get_field( 'quote' ) ? get_field( 'quote' ) : '';
$quotee   = get_field( 'quotee' ) ? get_field( 'quotee' ) : '';
$position = get_field( 'position' ) ? get_field( 'position' ) : '';
?>

<div class="bg-white py-16 sm:py-24">
	<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
		<div class="relative overflow-hidden bg-gray-900 px-6 py-20 shadow-xl sm:rounded-3xl sm:px-10 sm:py-24 md:px-12 lg:px-20">
			<?php if ( ! empty( $bg_image ) ) : ?>
				<img class="absolute inset-0 h-full w-full object-cover brightness-150 saturate-0" src="<?php echo esc_url( $bg_image['url'] ); ?>" alt="<?php echo esc_attr( $bg_image['alt'] ? $bg_image['alt'] : 'Background' ); ?>">
			<?php endif; ?>
			<div class="absolute inset-0 bg-gray-900/90 mix-blend-multiply"></div>
			<div class="absolute -left-80 -top-56 transform-gpu blur-3xl" aria-hidden="true">
				<div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-r from-[#ff4694] to-[#776fff] opacity-[0.45]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
			</div>
			<div class="hidden md:absolute md:bottom-16 md:left-[50rem] md:block md:transform-gpu md:blur-3xl" aria-hidden="true">
				<div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-r from-[#ff4694] to-[#776fff] opacity-25" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
			</div>
			<div class="relative mx-auto max-w-2xl lg:mx-0">
				<?php if ( ! empty( $icon ) ) : ?>
					<img class="h-12 w-auto" src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ? $icon['alt'] : 'Icon' ); ?>">
				<?php endif; ?>
				<figure>
					<blockquote class="mt-6 text-lg font-semibold text-white sm:text-xl sm:leading-8">
						<?php if ( ! empty( $quote ) ) : ?>
							<p><?php echo wp_kses_post( $quote ); ?></p>
						<?php endif; ?>
					</blockquote>
					<figcaption class="mt-6 text-base text-white">
						<?php if ( ! empty( $quotee ) ) : ?>
							<div class="font-semibold"><?php echo esc_html( $quotee ); ?></div>
						<?php endif; ?>

						<?php if ( ! empty( $position ) ) : ?>
							<div class="mt-1"><?php echo esc_html( $position ); ?></div>
						<?php endif; ?>
					</figcaption>
				</figure>
			</div>
		</div>
	</div>
</div>
