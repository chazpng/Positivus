<?php
/**
 * With Star rating Template.
 *
 * @package greydientlab
 */

?>
<?php
$style                = $block['className'] ?? '';
$bg_color             = '';
$container_color      = 'bg-gray-50';
$text_color_primary   = 'text-gray-900';
$text_color_secondary = 'text-gray-500';
$text_color_label     = 'text-indigo-600';

if ( 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-400';
	$text_color_label     = 'text-indigo-400';
	$container_color      = 'bg-white/5';
	$bg_color             = 'bg-gray-900 dark';
}

$quote    = get_field( 'quote' ) ? get_field( 'quote' ) : 'Qui dolor enim consectetur do et non ex amet culpa sint in ea non dolore. Enim minim magna anim id minim eu cillum sunt dolore aliquip. Amet elit laborum culpa irure incididunt adipisicing culpa amet officia exercitation. Eu non aute velit id velit Lorem elit anim pariatur.';
$quotee   = get_field( 'quotee' ) ? get_field( 'quotee' ) : 'Judith Black';
$position = get_field( 'position' ) ? get_field( 'position' ) : 'CEO of Workcation';
$number   = get_field( 'stars' );
$avatar   = get_field( 'avatar' ) ? get_field( 'avatar' ) : '';
?>

<section class="<?php echo esc_attr( $bg_color ); ?> px-6 py-24 sm:py-32 lg:px-8">
	<figure class="mx-auto max-w-2xl">
		<p class="sr-only"><?php echo esc_html( $number ); ?> out of 5 stars</p>
		<div class="flex gap-x-1">
			<?php for ( $i = 0; $i < $number; $i++ ) : ?>
				<?php echo wp_get_attachment_image( get_field( 'star_image' ), 'full', '', array( 'class' => 'h-5 w-5 flex-none' ) ); ?>
			<?php endfor; ?>
		</div>
		<blockquote class="mt-10 text-xl font-semibold leading-8 tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-2xl sm:leading-9">
			<p>“<?php echo esc_html( $quote ); ?>”</p>
		</blockquote>
		<figcaption class="mt-10 flex items-center gap-x-6">
			<img class="h-12 w-12 rounded-full <?php echo esc_attr( $container_color ); ?>" src="<?php echo esc_url( $avatar['url'] ); ?>" alt="<?php echo esc_attr( $avatar['alt'] ? $avatar['alt'] : 'Avatar' ); ?>">
			<div class="text-sm leading-6">
				<div class="font-semibold <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $quotee ); ?></div>
				<div class="mt-0.5 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $position ); ?></div>
			</div>
		</figcaption>
	</figure>
</section>
