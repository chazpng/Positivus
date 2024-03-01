<?php
/**
 * Stepped Template.
 *
 * @package circles_x
 */

?>

<?php
$bg_color             = 'bg-white';
$text_color_primary   = 'text-gray-900';
$text_color_secondary = 'text-gray-600';
$middle_bg_color      = 'bg-gray-900';
$description          = get_field( 'description' ) ?: 'Diam nunc lacus lacus aliquam turpis enim. Eget hac velit est euismod lacus. Est non placerat nam arcu. Cras purus nibh cursus sit eu in id. Integer vel nibh.';
$main_title           = get_field( 'title' ) ?: 'We approach the workplace as something that adds to our lives and adds value to world.';


if ( 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$text_color_label     = 'text-indigo-400';
	$middle_bg_color      = 'bg-gray-800';
	$bg_color             = 'bg-gray-900';
}
?>

<div class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto max-w-2xl lg:mx-0">
			<h2 class="text-3xl font-bold tracking-tight sm:text-4xl <?php echo esc_html( $text_color_primary ); ?>"><?php echo esc_html( $main_title ); ?></h2>
			<p class="mt-6 text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $description ); ?></p>
		</div>
		<div class="mx-auto mt-16 flex max-w-2xl flex-col gap-8 lg:mx-0 lg:mt-20 lg:max-w-none lg:flex-row lg:items-end">
			<?php if ( have_rows( 'stepped_stats_1' ) ) : ?>
				<?php 
				while ( have_rows( 'stepped_stats_1' ) ) :
					the_row();
					$stat_value       = get_sub_field( 'stat_value' ) ?: 'Value';
					$stat_heading     = get_sub_field( 'stat_heading' ) ?: 'Heading';
					$stat_description = get_sub_field( 'stat_description' ) ?: 'Description';
					?>
					<div class="stepped-stats">
						<p class="stepped-value "><?php echo esc_html( $stat_value ); ?></p>
						<div class="stepped-details-container sm:w-80 sm:shrink lg:w-auto lg:flex-none">
							<p class="stepped-heading"><?php echo esc_html( $stat_heading ); ?></p>
							<p class="stepped-description "><?php echo esc_html( $stat_description ); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
			<?php endif; ?>
		</div>
	</div>
</div>
