<?php
/**
 * Simple Feature Template.
 *
 * @package greydientlab
 */

?>

<?php
$style    = $block['className'] ?? '';
$icon     = get_field( 'company_logo' ) ? get_field( 'company_logo' ) : '';
$quote    = get_field( 'quote' ) ? get_field( 'quote' ) : '';
$quotee   = get_field( 'quotee' ) ? get_field( 'quotee' ) : '';
$avatar   = get_field( 'avatar' ) ? get_field( 'avatar' ) : '';
$position = get_field( 'position' ) ? get_field( 'position' ) : '';
?>

<section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
	<div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20"></div>
	<div class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center"></div>
	<div class="mx-auto max-w-2xl lg:max-w-4xl">
	<?php if ( ! empty( $icon ) ) : ?>
		<img class="mx-auto h-12" src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ? $icon['alt'] : 'Logo' ); ?>">
	<?php endif; ?>
		<figure class="mt-10">
			<blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
				<?php if ( ! empty( $quote ) ) : ?>
					<p><?php echo wp_kses_post( $quote ); ?></p>
				<?php endif; ?>
			</blockquote>
			<figcaption class="mt-10">
				<?php if ( ! empty( $avatar ) ) : ?>
					<img class="mx-auto h-10 w-10 rounded-full" src="<?php echo esc_url( $avatar['url'] ); ?>" alt="<?php echo esc_attr( $avatar['alt'] ? $avatar['alt'] : '' ); ?>">
				<?php endif; ?>
				<div class="mt-4 flex items-center justify-center space-x-3 text-base">
				<div class="font-semibold text-gray-900"><?php echo esc_html( $quotee ); ?></div>
				<svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
					<circle cx="1" cy="1" r="1" />
				</svg>
				<div class="text-gray-600"><?php echo esc_html( $position ); ?></div>
				</div>
			</figcaption>
		</figure>
	</div>
</section>
