<?php
/**
 * Split with image Template.
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
$text_color_caption   = 'text-gray-700';
$main_label           = get_field( 'eyebrow_text' ) ?: 'Testimonials';
$main_title           = get_field( 'title' ) ?: 'We have worked with thousands of amazing people';
$main_description     = get_field( 'description' ) ?: 'We have worked with thousands of amazing people';

if ( 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$text_color_label     = 'text-indigo-400';
	$container_color      = 'bg-white/5';
	$bg_color             = 'bg-gray-900 dark';
	$text_color_caption   = 'text-gray-400';
}
?>

<div class="relative <?php echo esc_attr( $bg_color ); ?>">
	<div class="mx-auto max-w-7xl lg:flex lg:justify-between lg:px-8 xl:justify-end">
		<div class="lg:flex lg:w-1/2 lg:shrink lg:grow-0 xl:absolute xl:inset-y-0 xl:right-1/2 xl:w-1/2">
			<div class="relative h-80 lg:-ml-8 lg:h-auto lg:w-full lg:grow xl:ml-0">
				<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'full', '', array( 'class' => 'absolute inset-0 h-full w-full bg-gray-50 object-cover' ) ); ?>
			</div>
		</div>
		<div class="px-6 lg:contents">
			<div class="mx-auto max-w-2xl pb-24 pt-16 sm:pb-32 sm:pt-20 lg:ml-8 lg:mr-0 lg:w-full lg:max-w-lg lg:flex-none lg:pt-32 xl:w-1/2">
				<p class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $main_label ); ?></p>
				<h1 class="mt-2 text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></h1>
				<p class="mt-6 text-xl leading-8 <?php echo esc_attr( $text_color_caption ); ?>"><?php echo esc_html( $main_description ); ?></p>
				<div class="mt-10 max-w-xl text-base leading-7 <?php echo esc_attr( $text_color_caption ); ?> lg:max-w-none">
					<?php require gl_get_custom_block_template( 'content', 'flexible-content.php' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
