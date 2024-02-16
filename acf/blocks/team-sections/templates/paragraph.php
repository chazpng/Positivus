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
$outer_container      = 'mx-auto grid max-w-7xl grid-cols-1 gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3';
$inner_container      = 'mx-auto max-w-2xl lg:mx-0';
$list_container       = 'mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-20 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:gap-x-8 xl:col-span-2';
$image_class          = 'aspect-[3/2] w-full rounded-2xl object-cove';
$avatar_name_class    = 'mt-6 text-lg font-semibold leading-8';
$job_position_class   = 'text-base leading-7';
$paragraph_class      = 'mt-4 text-base leading-7 ';
$social_icon_class    = 'mt-6 flex gap-x-6';
$list_class           = '';
$divider_class        = 'max-w-xl flex-auto';

if ( 'vertical-image' === get_field( 'paragraph_type' ) ) {
	$outer_container    = 'mx-auto grid max-w-7xl grid-cols-1 gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-5';
	$inner_container    = 'max-w-2xl xl:col-span-2';
	$list_container     = '-mt-12 space-y-12 divide-y divide-gray-200 xl:col-span-3';
	$image_class        = 'aspect-[4/5] w-52 flex-none rounded-2xl object-cover';
	$avatar_name_class  = 'text-lg font-semibold leading-8 tracking-tight';
	$job_position_class = 'text-base leading-7';
	$paragraph_class    = 'mt-6 text-base leading-7';
	$social_icon_class  = 'mt-6 flex gap-x-6';
	$list_class         = 'flex flex-col gap-10 pt-12 sm:flex-row';
}

if ( 'full-vertical' === get_field( 'paragraph_type' ) ) {
	$outer_container    = 'mx-auto max-w-7xl px-6 lg:px-8';
	$inner_container    = 'mx-auto max-w-2xl sm:text-center';
	$list_container     = 'mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-6 gap-y-20 sm:grid-cols-2 lg:max-w-4xl lg:gap-x-8 xl:max-w-none';
	$image_class        = 'aspect-[4/5] w-52 flex-none rounded-2xl object-cover';
	$avatar_name_class  = 'text-base leading-7';
	$job_position_class = 'mt-6 text-base leading-7';
	$paragraph_class    = 'mt-6 text-base leading-7';
	$list_class         = 'flex flex-col gap-6 xl:flex-row';
}

if ( 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$text_color_label     = 'text-indigo-400';
	$bg_color             = 'bg-gray-900';
}
?>

<div class="<?php echo esc_attr( $bg_color ); ?> py-24 md:py-32 lg:py-40">
	<div class="<?php echo esc_attr( $outer_container ); ?>">
		<div class="<?php echo esc_attr( $inner_container ); ?>">
			<h2 class="text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
			<p class="mt-6 text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $main_description ); ?></p>
		</div>
		<?php if ( have_rows( 'team_list' ) ) : ?>
			<ul role="list" class="<?php echo esc_attr( $list_container ); ?>">
				<?php
				while ( have_rows( 'team_list' ) ) :
					the_row();
					$avatar_name  = get_sub_field( 'avatar_name' ) ?: 'Avatar Name';
					$job_position = get_sub_field( 'job_position' ) ?: 'Job Position';
					$paragraph    = get_sub_field( 'paragraph' ) ?: 'Praesentium iure error aliquam voluptas ut libero. Commodi placeat sit iure nulla officiis. Ut ex sit repellat tempora. Qui est accusamus exercitationem natus ut voluptas. Officiis velit eos ducimus.' 
					?>
					<li class="<?php echo esc_attr( $list_class ); ?>">
						<?php echo wp_get_attachment_image( get_sub_field( 'avatar_image' ), 'full', '', array( 'class' => $image_class ) ); ?>
						<?php if ( 'vertical-image' === get_field( 'paragraph_type' ) || 'full-vertical' === get_field( 'paragraph_type' ) ) : ?>
							<div class="<?php echo esc_attr( $divider_class ); ?>">
							<?php endif; ?>
							<h3 class="<?php echo esc_attr( $avatar_name_class ); ?> <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $avatar_name ); ?></h3>
							<p class="<?php echo esc_attr( $job_position_class ); ?> <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $job_position ); ?></p>
							<p class="<?php echo esc_attr( $paragraph_class ); ?> <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $paragraph ); ?></p>
							<?php if ( 'vertical-image' === get_field( 'paragraph_type' ) || 'with-para' === get_field( 'paragraph_type' ) ) : ?>
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
							<?php if ( 'vertical-image' === get_field( 'paragraph_type' ) ) : ?>
							</div>
						<?php endif; ?>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
</div>
