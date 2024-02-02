<?php
/**
 * Newsletter on Card Template.
 *
 * @package circles_x
 */

$style      = $block['className'] ?? '';
$news_style = get_field( 'news_style' );
$align      = $block['align'];
?>

<?php
$bg_color         = '';
$text_color_label = 'text-indigo-600';
$newsletter_style = 'default';
$outer_container  = 'mx-auto max-w-7xl sm:px-6 lg:px-8';
$text_container   = 'max-w-2xl text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl';
$form_container   = 'mx-auto mt-10 flex flex-col max-w-md gap-x-4';
$inner_container  = 'relative isolate overflow-hidden bg-gray-900 px-6 py-24 shadow-2xl sm:rounded-3xl sm:px-24 xl:py-32';

if ( 'is-style-dark' === $style ) {
	$outer_container      = 'mx-auto max-w-7xl sm:px-6 lg:px-8';
	$inner_container      = 'relative isolate overflow-hidden bg-gray-900 px-6 py-24 shadow-2xl sm:rounded-3xl sm:px-24 xl:py-32';
	$text_container       = 'max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl';
	$newsletter_style     = 'dark';
	$bg_color             = '';
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-white';
}
if ( 'is-style-side' === $style ) {
	$outer_container  = 'mx-auto max-w-7xl sm:px-6 lg:px-8';
	$inner_container  = 'relative isolate flex flex-col gap-10 overflow-hidden bg-gray-900 px-6 py-24 shadow-2xl sm:rounded-3xl sm:px-24 xl:flex-row xl:items-center xl:py-32';
	$text_container   = 'max-w-xl text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl lg:col-span-7';
	$form_container   = 'w-full max-w-md';
	$newsletter_style = 'default';
}

if ( 'is-style-darkside' === $style ) {
	$outer_container  = 'mx-auto max-w-7xl sm:px-6 lg:px-8';
	$inner_container  = 'relative isolate flex flex-col gap-10 overflow-hidden bg-gray-900 px-6 py-24 shadow-2xl sm:rounded-3xl sm:px-24 xl:flex-row xl:items-center xl:py-32';
	$text_container   = 'max-w-xl text-3xl font-bold tracking-tight sm:text-4xl text-white lg:col-span-7';
	$form_container   = 'w-full max-w-md';
	$newsletter_style = 'dark';
	$bg_color         = '';
}
?>
<?php
$main_title  = get_field( 'title' ) ?: 'Get notified when we are launching.';
$description = get_field( 'description' ) ?: 'Reprehenderit ad esse et non officia in nulla. Id proident tempor incididunt nostrud nulla et culpa.';
?>

<div class="<?php echo esc_attr( $bg_color ); ?> py-16 sm:py-24">
	<div class="<?php echo esc_attr( $outer_container ); ?>">
	<div class="<?php echo esc_attr( $inner_container ); ?>">
		<h2 class="mx-auto max-w-2xl text-center text-3xl font-bold tracking-tight text-white sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
		<?php if ( get_field( 'description' ) ) : ?>
		<p class="mx-auto mt-2 max-w-xl text-center text-lg leading-8 text-gray-300"><?php echo esc_html( $description ); ?></p>
		<?php endif; ?>
		<div class="<?php echo esc_attr( $form_container ); ?> <?php echo esc_attr( $newsletter_style ); ?>">
			<?php echo do_shortcode( get_field( 'shortcode' ) ); ?>
			<div><?php echo wp_kses_post( get_field( 'label' ) ); ?></div>
		</div>
		<svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2" aria-hidden="true">
		<circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
		<defs>
			<radialGradient id="759c1415-0410-454c-8f7c-9a820de03641" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(512 512) rotate(90) scale(512)">
			<stop stop-color="#7775D6" />
			<stop offset="1" stop-color="#E935C1" stop-opacity="0" />
			</radialGradient>
		</defs>
		</svg>
	</div>
	</div>
</div>
