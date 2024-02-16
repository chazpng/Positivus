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

<div class="<?php echo esc_attr( $bg_color ); ?> py-24 md:py-32 lg:py-40">
	<div class="mx-auto grid max-w-7xl grid-cols-1 gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
		<div class="mx-auto max-w-2xl lg:mx-0">
			<h2 class="text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
			<p class="mt-6 text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $main_description ); ?></p>
		</div>
		<?php if ( have_rows( 'team_list' ) ) : ?>
			<ul role="list" class="mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-20 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:gap-x-8 xl:col-span-2">
				<?php
				while ( have_rows( 'team_list' ) ) :
					the_row();
					$avatar_name  = get_sub_field( 'avatar_name' ) ?: 'Avatar Name';
					$job_position = get_sub_field( 'job_position' ) ?: 'Job Position';
					$paragraph    = get_sub_field( 'paragraph' ) ?: 'Praesentium iure error aliquam voluptas ut libero. Commodi placeat sit iure nulla officiis. Ut ex sit repellat tempora. Qui est accusamus exercitationem natus ut voluptas. Officiis velit eos ducimus.'
					?>
					<li>
						<?php echo wp_get_attachment_image( get_sub_field( 'avatar_image' ), 'full', '', array( 'class' => 'aspect-[3/2] w-full rounded-2xl object-cover' ) ); ?>
						<h3 class="mt-6 text-lg font-semibold leading-8 <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $avatar_name ); ?></h3>
						<p class="text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $job_position ); ?></p>
						<p class="mt-4 text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $paragraph ); ?></p>
						<?php if ( have_rows( 'socials_list' ) ) : ?>
							<ul role="list" class="mt-6 flex gap-x-6">
								<?php
								while ( have_rows( 'socials_list' ) ) :
									the_row();
									?>
									<li>
										<a href="<?php echo esc_attr( the_sub_field( 'social_link' ) ); ?>" target="_blank" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">X</span>
											<?php echo wp_get_attachment_image( get_sub_field( 'social_icon' ), 'full', '', array( 'class' => 'h-5 w-5s' ) ); ?>
										</a>
									</li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</li>
				<?php endwhile; ?>
				<ul>
				<?php endif; ?>
	</div>
</div>

