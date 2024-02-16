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
$outer_container      = 'mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3';
$inner_container      = 'max-w-2xl';
$list_container       = 'grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2';
$image_class          = 'h-16 w-16 rounded-full';
$avatar_name_class    = 'text-base font-semibold leading-7 tracking-tight';
$job_position_class   = 'text-sm font-semibold leading-6';
$social_icon_class    = 'mt-6 flex gap-x-6';
$list_class           = '';

if ( 'large-image' === get_field( 'simple_type' ) ) {
	$outer_container    = 'mx-auto max-w-7xl px-6 lg:px-8';
	$inner_container    = 'mx-auto max-w-2xl lg:mx-0';
	$list_container     = 'mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3';
	$image_class        = 'aspect-[3/2] w-full rounded-2xl object-cover';
	$avatar_name_class  = 'mt-6 text-lg font-semibold leading-8 tracking-tight';
	$job_position_class = 'text-sm font-semibold leading-6';
}

if ( 'round-image' === get_field( 'simple_type' ) ) {
	$outer_container    = 'mx-auto max-w-7xl px-6 lg:px-8';
	$inner_container    = 'mx-auto max-w-2xl lg:mx-0';
	$list_container     = 'mx-auto mt-20 grid max-w-2xl grid-cols-2 gap-x-8 gap-y-16 text-center sm:grid-cols-3 md:grid-cols-4 lg:mx-0 lg:max-w-none lg:grid-cols-5 xl:grid-cols-6';
	$image_class        = 'mx-auto h-24 w-24 rounded-full';
	$avatar_name_class  = 'mt-6 text-base font-semibold leading-7 tracking-tight';
	$job_position_class = 'text-sm leading-6';
}

if ( 'large-round' === get_field( 'simple_type' ) ) {
	$outer_container    = 'mx-auto max-w-7xl px-6 text-center lg:px-8';
	$inner_container    = 'mx-auto max-w-2xl';
	$list_container     = 'mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3';
	$image_class        = 'mx-auto h-56 w-56 rounded-full';
	$avatar_name_class  = 'mt-6 text-base font-semibold leading-7 tracking-tight';
	$job_position_class = 'text-sm leading-6';
	$social_icon_class  = 'mt-6 flex justify-center gap-x-6';
}

if ( 'medium-dark' === get_field( 'simple_type' ) ) {
	$outer_container    = 'mx-auto max-w-7xl px-6 lg:px-8';
	$inner_container    = 'mx-auto max-w-2xl lg:mx-0';
	$list_container     = 'mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-14 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-4';
	$image_class        = 'aspect-[14/13] w-full rounded-2xl object-cover';
	$avatar_name_class  = 'mt-6 text-lg font-semibold leading-8 tracking-tight';
	$job_position_class = 'text-base leading-7 text-gray-300';
	$social_icon_class  = 'mt-6 flex justify-center gap-x-6';
}

if ( 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$text_color_label     = 'text-indigo-400';
	$bg_color             = 'bg-gray-900';

	if ( 'large-round' === get_field( 'simple_type' ) ) {
		$list_container = 'mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-6 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8';
		$list_class     = 'rounded-2xl bg-gray-800 px-8 py-10';
	}
}


?>

<div class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
	<div class="<?php echo esc_attr( $outer_container ); ?>">
		<div class="<?php echo esc_attr( $inner_container ); ?>">
			<h2 class="text-3xl font-bold tracking-tight sm:text-4xl <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $main_title ); ?></h2>
			<p class="mt-6 text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $main_description ); ?></p>
		</div>
		<?php if ( have_rows( 'team_list' ) ) : ?>
			<ul role="list" class="<?php echo esc_attr( $list_container ); ?>">
				<?php
				while ( have_rows( 'team_list' ) ) :
					the_row();
					$avatar_name    = get_sub_field( 'avatar_name' ) ?: 'Avatar Name';
					$job_position   = get_sub_field( 'job_position' ) ?: 'Job Position';
					$avatar_address = get_sub_field( 'avatar_address' ) ?: 'Avatar Address';
					?>
					<li class="<?php echo esc_attr( $list_class ); ?>">
						<?php if ( 'simple' === get_field( 'simple_type' ) ) : ?>
							<div class="flex items-center gap-x-6">
								<?php echo wp_get_attachment_image( get_sub_field( 'avatar_image' ), 'full', '', array( 'class' => $image_class ) ); ?>
								<div>
									<h3 class="<?php echo esc_attr( $avatar_name_class ); ?> <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $avatar_name ); ?></h3>
									<p class="<?php echo esc_attr( $job_position_class ); ?> <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $job_position ); ?></p>
								</div>
							</div>
						<?php else : ?>
							<?php echo wp_get_attachment_image( get_sub_field( 'avatar_image' ), 'full', '', array( 'class' => $image_class ) ); ?>
							<h3 class="<?php echo esc_attr( $avatar_name_class ); ?> <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $avatar_name ); ?></h3>
							<p class="<?php echo esc_attr( $job_position_class ); ?> <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $job_position ); ?></p>
							<?php if ( 'medium-dark' === get_field( 'simple_type' ) ) : ?>
								<p class="text-sm leading-6 text-gray-500"><?php echo esc_html( $avatar_address ); ?></p>
							<?php endif; ?>
						<?php endif; ?>

						<?php if ( 'large-image' === get_field( 'simple_type' ) || 'large-round' === get_field( 'simple_type' ) ) : ?>
							<?php if ( have_rows( 'socials_list' ) ) : ?>
								<ul role="list" class="<?php echo esc_attr( $social_icon_class ); ?>">
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
						<?php endif; ?>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
</div>
