<?php
/**
 * Simple Feature Template.
 *
 * @package greydientlab
 */

?>

<?php
$style             = $block['className'] ?? '';
$images            = get_field( 'images' ) ? get_field( 'images' ) : '';
$heading           = get_field( 'heading' ) ? get_field( 'heading' ) : '';
$heading_alignment = get_field( 'heading_alignment' ) ? get_field( 'heading_alignment' ) : 'left';
$cta_text          = get_field( 'cta_text' ) ? get_field( 'cta_text' ) : '';
$cta_link          = get_field( 'cta_link' ) ? get_field( 'cta_link' ) : '';
$bg_color          = 'is-style-dark' === $style ? 'bg-gray-900 ' : 'bg-white ';
$text_color        = 'is-style-dark' === $style ? ' text-white' : ' text-gray-900';
$cta_color         = 'is-style-dark' === $style ? 'relative rounded-full bg-gray-800 px-4 py-1.5 text-sm leading-6 text-gray-300' : 'relative rounded-full bg-gray-50 px-4 py-1.5 text-sm leading-6 text-gray-600 ring-1 ring-inset ring-gray-900/5';
$cta_link_color    = 'is-style-dark' === $style ? 'font-semibold text-white' : 'font-semibold text-indigo-600';
?>

<div class="<?php echo esc_attr( $bg_color ); ?>py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<?php if ( $heading ) : ?>
			<h2 class="text-lg text-<?php echo esc_attr( $heading_alignment ); ?> font-semibold leading-8 mb-10<?php echo esc_attr( $text_color ); ?>"><?php echo esc_html( $heading ); ?></h2>
		<?php endif; ?>

		<div class="mx-auto grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-12 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 sm:gap-y-14 lg:mx-0 lg:max-w-none lg:grid-cols-5">
			<?php if ( $images ) : ?>
				<?php
				foreach ( $images as $image ) :
					$img     = $image['image']['url'];
					$img_alt = $image['image']['alt'] ? $image['image']['alt'] : 'Logo';
					?>
					<img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>">
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
		<?php if ( $cta_link ) : ?>
			<div class="mt-16 flex justify-center">
				<p class="<?php echo esc_attr( $cta_color ); ?>">
					<span class="hidden md:inline"><?php echo esc_html( $cta_text ); ?></span>
					<a href="<?php echo esc_url( $cta_link['url'] ); ?>" <?php echo $cta_link['target'] ? 'target="_blank"' : ''; ?> class="<?php echo esc_attr( $cta_link_color ); ?>"><span class="absolute inset-0" aria-hidden="true"></span> <?php echo esc_html( $cta_link['title'] ); ?> <span aria-hidden="true">&rarr;</span></a>
				</p>
			</div>
		<?php endif; ?>
	</div>
</div>
