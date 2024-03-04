<?php
/**
 * With Testimonial Template.
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
$stroke_color_2       = 'stroke-gray-900/10';
$bg_fill              = 'fill-gray-50';
$gradient_color       = 'from-[#ff80b5] to-[#9089fc]';
$border_color         = 'border-indigo-600';

if ( 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$text_color_label     = 'text-indigo-400';
	$container_color      = 'bg-white/5';
	$bg_color             = 'bg-gray-900 dark';
	$text_color_caption   = 'text-gray-400';
	$stroke_color         = 'stroke-white/10';
	$bg_fill              = 'fill-gray-800/20';
	$gradient_color       = 'from-[#80caff] to-[#4f46e5]';
	$stroke_color_2       = 'stroke-white/5';
	$border_color         = 'border-indigo-500';
}
?>

<div class="relative isolate overflow-hidden <?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
	<div class="absolute -top-80 left-[max(6rem,33%)] -z-10 transform-gpu blur-3xl sm:left-1/2 md:top-20 lg:ml-20 xl:top-3 xl:ml-56" aria-hidden="true">
		<div class="aspect-[801/1036] w-[50.0625rem] bg-gradient-to-tr <?php echo esc_attr( $gradient_color ); ?>  opacity-30" style="clip-path: polygon(63.1% 29.6%, 100% 17.2%, 76.7% 3.1%, 48.4% 0.1%, 44.6% 4.8%, 54.5% 25.4%, 59.8% 49.1%, 55.3% 57.9%, 44.5% 57.3%, 27.8% 48%, 35.1% 81.6%, 0% 97.8%, 39.3% 100%, 35.3% 81.5%, 97.2% 52.8%, 63.1% 29.6%)"></div>
	</div>
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto max-w-2xl lg:mx-0">
			<p class="text-lg font-semibold leading-8 tracking-tight <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $main_label ); ?></p>
			<h1 class="mt-2 text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></h1>
			<p class="mt-6 text-xl leading-8 <?php echo esc_attr( $text_color_caption ); ?>"><?php echo esc_html( $main_description ); ?></p>
		</div>
		<div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:mt-10 lg:max-w-none lg:grid-cols-12">
			<div class="relative lg:order-last lg:col-span-5">
				<svg class="absolute -top-[40rem] left-1 -z-10 h-[64rem] w-[175.5rem] -translate-x-1/2 <?php echo esc_attr( $stroke_color_2 ); ?> [mask-image:radial-gradient(64rem_64rem_at_111.5rem_0%,white,transparent)]" aria-hidden="true">
					<defs>
						<pattern id="e87443c8-56e4-4c20-9111-55b82fa704e3" width="200" height="200" patternUnits="userSpaceOnUse">
							<path d="M0.5 0V200M200 0.5L0 0.499983" />
						</pattern>
					</defs>
					<rect width="100%" height="100%" stroke-width="0" fill="url(#e87443c8-56e4-4c20-9111-55b82fa704e3)" />
				</svg>
				<figure class="border-l <?php echo esc_attr( $border_color ); ?> pl-8">
					<blockquote class="text-xl font-semibold leading-8 tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">
						<p>“<?php echo esc_html( get_field( 'quote' ) ); ?>”</p>
					</blockquote>
					<figcaption class="mt-8 flex gap-x-4">
						<?php echo wp_get_attachment_image( get_field( 'avatar' ), 'full', '', array( 'class' => 'mt-1 h-10 w-10 flex-none rounded-full bg-gray-50' ) ); ?>
						<div class="text-sm leading-6">
							<div class="font-semibold <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( get_field( 'quotee' ) ); ?></div>
							<div class="<?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( get_field( 'social_username' ) ); ?></div>
						</div>
					</figcaption>
				</figure>
			</div>
			<div class="max-w-xl text-base leading-7 <?php echo esc_attr( $text_color_caption ); ?> lg:col-span-7">
				<?php require gl_get_custom_block_template( 'content', 'flexible-content.php' ); ?>
			</div>
		</div>
	</div>
</div>
