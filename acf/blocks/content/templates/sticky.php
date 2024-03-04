<?php
/**
 * With Sticky Product Screenshot Template.
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
$stroke_color         = 'stroke-gray-200';
$bg_fill              = 'fill-gray-50';

if ( 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$text_color_label     = 'text-indigo-400';
	$container_color      = 'bg-white/5';
	$bg_color             = 'bg-gray-900 dark';
	$text_color_caption   = 'text-gray-400';
	$stroke_color         = 'stroke-white/10';
	$bg_fill              = 'fill-gray-800/20';
}
?>

<div class="relative isolate overflow-hidden <?php echo esc_attr( $bg_color ); ?> px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
	<div class="absolute inset-0 -z-10 overflow-hidden">
		<svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 <?php echo esc_attr( $stroke_color ); ?> [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
			<defs>
				<pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
					<path d="M100 200V.5M.5 .5H200" fill="none" />
				</pattern>
			</defs>
			<svg x="50%" y="-1" class="overflow-visible <?php echo esc_attr( $bg_fill ); ?>">
				<path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
			</svg>
			<rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
		</svg>
	</div>
	<div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
		<div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
			<div class="lg:pr-4">
				<div class="lg:max-w-lg">
					<p class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $main_label ); ?></p>
					<h1 class="mt-2 text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></h1>
					<p class="mt-6 text-xl leading-8 <?php echo esc_attr( $text_color_caption ); ?>"><?php echo esc_html( $main_description ); ?></p>
				</div>
			</div>
		</div>
		<div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
			<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'full', '', array( 'class' => 'w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]' ) ); ?>
		</div>
		<div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
			<div class="lg:pr-4">
				<div class="max-w-xl text-base leading-7 <?php echo esc_attr( $text_color_caption ); ?> lg:max-w-lg">
				<?php require gl_get_custom_block_template( 'content', 'flexible-content.php' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
