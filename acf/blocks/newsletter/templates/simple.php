<?php
/**
 * Newsletter Simple Template.
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
$outer_container  = 'mx-auto max-w-7xl px-6 lg:px-8';
$text_container   = 'max-w-2xl text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl';
$form_container   = 'mt-10 max-w-md';

if ( 'is-style-dark' === $style ) {
	$outer_container      = 'mx-auto max-w-7xl px-6 lg:px-8';
	$text_container       = 'max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl';
	$newsletter_style     = 'dark';
	$bg_color             = 'bg-gray-900';
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-white';
}
if ( 'is-style-side' === $style ) {
	$outer_container  = 'mx-auto grid max-w-7xl grid-cols-1 gap-10 px-6 lg:grid-cols-12 lg:gap-8 lg:px-8';
	$text_container   = 'max-w-xl text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl lg:col-span-7';
	$form_container   = 'w-full max-w-md lg:col-span-5 lg:pt-2';
	$neswletter_style = 'default';
}

if ( 'is-style-darkside' === $style ) {
	$outer_container  = 'mx-auto grid max-w-7xl grid-cols-1 gap-10 px-6 lg:grid-cols-12 lg:gap-8 lg:px-8';
	$text_container   = 'max-w-xl text-3xl font-bold tracking-tight sm:text-4xl text-white lg:col-span-7';
	$form_container   = 'w-full max-w-md lg:col-span-5 lg:pt-2';
	$newsletter_style = 'dark';
	$bg_color         = 'bg-gray-900';
}
?>
<?php
$main_title  = get_field( 'title' ) ?: 'Want product news and updates?';
$description = get_field( 'description' ) ?: 'Sign up for our newsletter.';
?>

<div class="<?php echo esc_attr( $bg_color ); ?> py-16 sm:py-24 lg:py-32">
	<div class="<?php echo esc_attr( $outer_container ); ?>">
		<div class="<?php echo esc_attr( $text_container ); ?>">
			<h2 class="inline sm:block "><?php echo esc_html( $main_title ); ?></h2>
			<p class="inline sm:block "><?php echo esc_html( $description ); ?></p>
		</div>
		<div class="<?php echo esc_attr( $form_container ); ?> <?php echo esc_attr( $newsletter_style ); ?>">
			<?php echo do_shortcode( get_field( 'shortcode' ) ); ?>
			<div><?php echo wp_kses_post( get_field( 'label' ) ); ?></div>
		</div>
	</div>
</div>
