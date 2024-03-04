<?php
/**
 * Two Columns With Product Screenshot Template.
 *
 * @package greydientlab
 */

?>

<?php
$style                = $block['className'] ?? '';
$bg_color             = '';
$text_color_primary   = 'text-gray-900';
$text_color_secondary = 'text-gray-600';
$text_color_label     = 'text-indigo-600';
$text_color_caption   = 'text-gray-700';
$main_label           = get_field( 'eyebrow_text' ) ?: 'Testimonials';
$main_title           = get_field( 'title' ) ?: 'We have worked with thousands of amazing people';
$main_description     = get_field( 'description' ) ?: 'We have worked with thousands of amazing people';
$gradient_color       = 'from-white';

if ( 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$text_color_label     = 'text-indigo-400';
	$bg_color             = 'bg-gray-900 dark';
	$text_color_caption   = 'text-gray-400';
	$gradient_color       = 'from-gray-900';
}
?>

<div class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
			<p class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $main_label ); ?></p>
			<h1 class="mt-2 text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></h1>
			<div class="mt-10 grid max-w-xl grid-cols-1 gap-8 text-base leading-7 <?php echo esc_attr( $text_color_caption ); ?> lg:max-w-none lg:grid-cols-2">
				<?php require gl_get_custom_block_template( 'content', 'flexible-content.php' ); ?>
			</div>
		</div>
	</div>
	<div class="relative overflow-hidden pt-16 lg:pt-20">
		<div class="mx-auto max-w-7xl px-6 lg:px-8">
			<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'full', '', array( 'class' => 'mb-[-12%] rounded-xl shadow-2xl ring-1 ring-gray-900/10' ) ); ?>
			<div class="relative" aria-hidden="true">
				<div class="absolute -inset-x-20 bottom-0 bg-gradient-to-t <?php echo esc_attr( $gradient_color ); ?> pt-[7%]"></div>
			</div>
		</div>
	</div>
</div>
