<?php
/**
 * GL Tailwind Alert Template.
 *
 * @package circles_x
 */

$style            = '';
$bg_image         = '';
$dismissible_attr = '';
$class_name       = 'm-0 rounded-lg bg-primary-100 px-6 py-5 text-base overflow-hidden';
$array_style      = $block['style'] ?? null;
$font_size        = $block['fontSize'] ?? null;
$additional_class = $block['className'] ?? '';
$background_color = $block['backgroundColor'] ?? null;

if ( $background_color ) {
	$style = 'background-color: var(--wp--preset--color--' . $background_color . ');';
}

if ( $array_style ) {
	$array_style = wp_style_engine_get_styles( $array_style );
	$style      .= ' ' . $array_style['css'];
}

if ( $font_size ) {
	$style .= ' font-size: var(--wp--preset--font-size--' . $font_size . ');';
}

if ( get_field( 'icon' ) || get_field( 'is_dismissible' ) ) {
	$class_name .= ' inline-flex w-full items-center';
}

if ( get_field( 'is_dismissible' ) ) {
	$dismissible_attr = 'data-te-alert-init data-te-alert-show';
}

$paragraph = empty( get_field( 'paragraph' ) ) ? 'Your Paragraph Here...' : get_field( 'paragraph' );
?>
<div
	class="gl-b-alert <?php echo esc_attr( $additional_class . ' ' . $class_name ); ?>"
	role="alert"
	style="<?php echo esc_attr( $style ); ?>"
	<?php echo esc_attr( $dismissible_attr ); ?>
>
	<?php if ( get_field( 'icon' ) ) : ?>
		<span class="mr-2">
			<img src="<?php the_field( 'icon' ); ?>" alt="Icon">
		</span>
	<?php endif; ?>

	<?php echo wp_kses_post( $paragraph ); ?>

	<?php if ( get_field( 'is_dismissible' ) ) : ?>
		<button
			type="button"
			class="ml-auto box-content rounded-none border-none p-1 text-warning-900 opacity-50 hover:text-warning-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
			data-te-alert-dismiss
			aria-label="Close">
			<span
				class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
				<svg
					xmlns="http://www.w3.org/2000/svg"
					viewBox="0 0 24 24"
					fill="currentColor"
					class="h-6 w-6">
					<path
						fill-rule="evenodd"
						d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
						clip-rule="evenodd" />
				</svg>
			</span>
		</button>
	<?php endif; ?>
</div>
