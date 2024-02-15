<?php
/**
 * Simple Team Section Template.
 *
 * @package circles_x
 */

?>
<?php
$bg_color             = '';
$text_color_primary   = 'text-gray-900';
$text_color_secondary = 'text-gray-600';
$text_color_label     = 'text-indigo-600';
$main_description     = get_field( 'description' ) ?: 'Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse.';
$main_title           = get_field( 'title' ) ?: 'Our Team';

if ( 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$text_color_label     = 'text-indigo-400';
	$bg_color             = 'bg-gray-900';
}
?>

	<div class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
		<div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
			<div class="max-w-2xl">
				<h2 class="text-3xl font-bold tracking-tight sm:text-4xl <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $main_title ); ?></h2>
				<p class="mt-6 text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $main_description ); ?></p>
			</div>
			<?php if ( have_rows( 'team_list' ) ) : ?>
				<ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
					<?php
					while ( have_rows( 'team_list' ) ) :
						the_row();
						$avatar_name  = get_sub_field( 'avatar_name' ) ?: 'Avatar Name';
						$job_position = get_sub_field( 'job_position' ) ?: 'Job Position';
						?>
						<li>
							<div class="flex items-center gap-x-6">
								<?php echo wp_get_attachment_image( get_sub_field( 'avatar_image' ), 'full', '', array( 'class' => 'h-16 w-16 rounded-full' ) ); ?>
								<div>
									<h3 class="text-base font-semibold leading-7 tracking-tight <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $avatar_name ); ?></h3>
									<p class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $job_position ); ?></p>
								</div>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
		</div>
	</div>
