<?php
/**
 * Banner.
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::molecule( 'banner/banner', array('key' => 'value') );
 *
 * @package greydientlab
 */

use Lean\Load;
$gl_has_bg_glow    = $args['gl_has_bg_glow'] ?? false;
$gl_has_button     = $args['gl_has_button'] ?? false;
$gl_highlight_link = $args['gl_highlight_link'] ?? false;
$gl_label          = $args['gl_label'] ?? 'Your Label Here';
$gl_description    = $args['gl_description'] ?? 'Your Description Here';
$gl_link           = $args['gl_link'] ?? '#';
$gl_button_text    = $args['gl_button_text'] ?? 'Your Button Text Here';
$gl_bg_color       = $args['gl_bg_color'] ?? 'bg-gray-900'; // Use Tailwind config for the background color.
$gl_text_color     = $args['gl_text_color'] ?? 'text-white';
$gl_alignment      = $args['gl_alignment'] ?? '';

$svg_fill_color       = 'text-white'; // Use Tailwind config for the text color.
$gl_label_class       = 'font-semibold';
$gl_description_class = '';
$wrapper_class        = '';

if ( $gl_has_bg_glow ) {
	$gl_bg_color    = 'bg-gray-50';
	$gl_text_color  = 'text-gray-900'; // Use Tailwind config for the text color.
	$svg_fill_color = 'text-gray-900'; // Use Tailwind config for the text color.
}

if ( $gl_has_button ) {
	$gl_button_bg_color = $args['gl_button_bg_color'] ?? 'bg-gray-900'; // Use Tailwind config for the background color.
}

if ( $gl_highlight_link ) {
	$gl_label_class       = '';
	$gl_description_class = 'font-semibold';
}

$gl_alignment_class = $gl_bg_color . ' relative isolate flex items-center gap-x-6 overflow-hidden px-6 py-2.5 sm:px-3.5 sm:before:flex-1';


switch ( $gl_alignment ) {
	case 'left':
		$gl_alignment_class = $gl_bg_color . ' flex items-center justify-between gap-x-6 bg-gray-900 px-6 py-2.5 sm:pr-3.5 lg:pl-8';
		break;

	case 'bottom':
		$gl_alignment_class = $gl_bg_color . ' fixed inset-x-0 bottom-0 flex items-center gap-x-6 bg-gray-900 px-6 py-2.5 sm:px-3.5 sm:before:flex-1';
		break;

	case 'floating-bottom':
		$gl_alignment_class = 'pointer-events-none fixed inset-x-0 bottom-0 sm:px-6 sm:pb-5 lg:px-8';
		$wrapper_class      = $gl_bg_color . 'pointer-events-auto flex items-center justify-between gap-x-6 px-6 py-2.5 sm:rounded-xl sm:py-3 sm:pl-4 sm:pr-3.5';
		break;

	case 'floating-bottom-centered':
		$gl_alignment_class = 'pointer-events-none fixed inset-x-0 bottom-0 sm:flex sm:justify-center sm:px-6 sm:pb-5 lg:px-8';
		$wrapper_class      = $gl_bg_color . 'pointer-events-auto flex items-center justify-between gap-x-6 bg-gray-900 px-6 py-2.5 sm:rounded-xl sm:py-3 sm:pl-4 sm:pr-3.5';
		break;

	default:
		break;
}

?>

<div class="<?php echo esc_attr( $gl_alignment_class ); ?>">
	<?php if ( 'floating-bottom' === $gl_alignment || 'floating-bottom-centered' === $gl_alignment ) : ?>
		<div class="pointer-events-auto flex items-center justify-between gap-x-6 bg-gray-900 px-6 py-2.5 sm:rounded-xl sm:py-3 sm:pl-4 sm:pr-3.5">
	<?php endif; ?>

		<?php if ( $gl_has_bg_glow ) : ?>
			<div class="absolute left-[max(-7rem,calc(50%-52rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
				<div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
			</div>

			<div class="absolute left-[max(45rem,calc(50%+8rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
				<div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
			</div>
		<?php endif; ?>

		<div class="flex flex-wrap items-center gap-x-4 gap-y-2">
			<p class="text-sm leading-6 <?php echo esc_attr( $gl_text_color ); ?>">

				<?php if ( $gl_has_button ) : ?>
					<?php
					Load::atom(
						'label-with-description/label-with-description',
						[
							'gl_label_class'       => $gl_label_class,
							'gl_description_class' => $gl_description_class,
							'gl_label'             => $gl_label,
							'gl_description'       => $gl_description,
						]
					);
					?>
				<?php else : ?>
					<a href="<?php echo esc_url( $gl_link ); ?>">
						<?php
						Load::atom(
							'label-with-description/label-with-description',
							[
								'gl_label_class'       => $gl_label_class,
								'gl_description_class' => $gl_description_class,
								'gl_label'             => $gl_label,
								'gl_description'       => $gl_description,
							]
						);
						?>
						<span aria-hidden="true">&rarr;</span>
					</a>
				<?php endif; ?>
			</p>

			<?php if ( $gl_has_button ) : ?>
				<a href="<?php echo esc_url( $gl_link ); ?>" class="flex-none rounded-full bg-gray-900 px-3.5 py-1 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">
					<?php echo esc_html( $gl_button_text ); ?> <span aria-hidden="true">&rarr;</span>
				</a>
			<?php endif; ?>
		</div>

		<!-- x / close button -->
		<div class="flex flex-1 justify-end">
			<button type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]">
				<span class="sr-only">Dismiss</span>
				<svg class="h-5 w-5 <?php echo esc_attr( $svg_fill_color ); ?>" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					<path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
				</svg>
			</button>
		</div>

	<?php if ( 'floating-bottom' === $gl_alignment || 'floating-bottom-centered' === $gl_alignment ) : ?>
		</div>
	<?php endif; ?>
</div>
