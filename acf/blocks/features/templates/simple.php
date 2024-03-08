<?php
/**
 * Simple Feature Template.
 *
 * @package greydientlab
 */

?>

<?php
$label       = get_field( 'label' ) ?: 'Your Label';
$main_title  = get_field( 'title' ) ?: 'Your Title Here';
$description = get_field( 'description' ) ?: 'Your Description Here';

$bg_color             = '';
$text_color_primary   = 'text-gray-900';
$text_color_secondary = 'text-gray-600';
$text_color_label     = 'text-indigo-600';
$list_icon_class      = 'absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg';
$img_gradient_class   = 'absolute -inset-x-20 bottom-0 bg-gradient-to-t from-white pt-[7%]';

$header_container = 'mx-auto max-w-2xl lg:mx-0';

$list_class           = 'grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16';
$list_container_class = 'mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl';
$list_dt_class        = 'text-base font-semibold leading-7 text-gray-900';
$list_dd_class        = 'mt-2 text-base leading-7 text-gray-600';
$list_item_class      = 'relative pl-16';

$max_width = 'max-w-7xl';

if ( 'is-style-dark' === $style ) {
	$bg_color             = 'bg-gray-900';
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$img_gradient_class   = 'absolute -inset-x-20 bottom-0 bg-gradient-to-t from-gray-900 pt-[7%]';
	$list_dt_class        = $text_color_primary;
	$text_color_label     = 'text-indigo-400';
}

if ( 'three-block' === get_field( 'list_column_style' ) ) {
	$list_class           = 'mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-10 text-base leading-7 text-gray-300 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-x-8 lg:gap-y-16';
	$list_container_class = 'mx-auto mt-16 max-w-full px-6 sm:mt-20 md:mt-24 lg:px-8';
	$list_icon_class      = 'inline-block left-1 top-1 h-5 w-5 text-indigo-500';
	$list_item_class      = 'relative pl-9';
	$max_width            = 'max-w-full';
}

if ( 'two-inline' === get_field( 'list_column_style' ) || 'three-inline' === get_field( 'list_column_style' ) ) {
	$list_dt_class .= ' inline font-semibold ';
	$list_dd_class  = 'inline';
}

if ( 'three-inline' === get_field( 'list_column_style' ) ) {
	$list_container_class = 'mx-auto mt-16 max-w-full px-6 sm:mt-20 md:mt-24 lg:px-8';
	$list_class           = 'mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-10 text-base leading-7 text-gray-300 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-x-8 lg:gap-y-16';
	$max_width            = 'max-w-full';
}

if ( 'two-block' === get_field( 'list_column_style' ) || 'three-block' === get_field( 'list_column_style' ) ) {
	$list_dd_class   = 'mt-4 flex flex-auto flex-col text-base leading-7';
	$list_icon_class = 'inline-block left-1 top-1 h-5 w-5 text-indigo-500';
	$list_item_class = 'flex flex-col';
	$list_dt_class  .= ' flex items-center gap-x-3 text-base font-semibold leading-7';
}

if ( 'three-icon-block' === get_field( 'list_column_style' ) ) {
	$list_icon_class      = 'mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-500';
	$list_class           = 'mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-10 text-base leading-7 text-gray-300 lg:mx-0 lg:max-w-none md:grid-cols-1 lg:grid-cols-3 lg:gap-x-8 lg:gap-y-16';
	$list_container_class = 'mx-auto mt-16 max-w-full sm:mt-20 md:mt-24';
	$list_item_class      = 'flex flex-col';
	$list_dd_class        = 'mt-4 flex flex-auto flex-col text-base leading-7';
	$max_width            = 'max-w-full';
}

if ( 'six-block' === get_field( 'list_column_style' ) ) {
	$max_width            = 'mx-auto max-w-7xl px-6 lg:px-8';
	$header_container     = 'mx-auto max-w-2xl lg:mx-0';
	$list_container_class = '';
	$list_class           = 'mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-base leading-7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3';
	$list_item_class      = '';
}

if ( 'six-icon-block' === get_field( 'list_column_style' ) ) {
	$max_width            = 'mx-auto max-w-7xl px-6 lg:px-8';
	$header_container     = 'mx-auto max-w-2xl lg:mx-0';
	$list_container_class = '';
	$list_class           = 'mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 text-base leading-7 text-gray-300 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:gap-x-16';
	$list_item_class      = 'relative pl-9';
	$list_dt_class        = 'inline font-semibold ' . $text_color_primary;
	$list_dd_class        = 'inline';
	$list_icon_class      = 'absolute left-1 top-1 h-5 w-5';
}

if ( 'offset-inline' === get_field( 'list_column_style' ) ) {
	$max_width            = 'mx-auto max-w-7xl px-6 lg:px-8';
	$offset_container     = 'mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3';
	$header_container     = '';
	$list_container_class = '';
	$list_class           = 'col-span-2 grid grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2';
	$list_item_class      = 'relative pl-9';
	$list_dt_class        = 'text-base font-semibold leading-7 ' . $text_color_primary;
	$list_dd_class        = 'mt-1 text-base leading-7 ' . $text_color_secondary;
	$list_icon_class      = 'h-6 w-6';
}

if ( 'offset-block' === get_field( 'list_column_style' ) ) {
	$max_width            = 'mx-auto max-w-7xl px-6 lg:px-8';
	$offset_container     = 'mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3';
	$header_container     = '';
	$list_container_class = '';
	$list_class           = 'col-span-2 grid grid-cols-1 gap-x-8 gap-y-10 text-base leading-7 sm:grid-cols-2 lg:gap-y-16' . $text_color_secondary;
	$list_item_class      = 'relative pl-9';
	$list_dt_class        = 'text-base font-semibold leading-7 ' . $text_color_primary;
	$list_dd_class        = 'mt-2 ' . $text_color_secondary;
	$list_icon_class      = 'absolute left-0 top-1 h-5 w-5';
}

switch ( $align ) {
	case 'center':
		$header_container = 'mx-auto max-w-2xl lg:text-center';
		break;

	case 'right':
		$header_container = 'ml-auto max-w-2xl text-right';
		$list_item_class .= ' flex flex-col text-right';
		$list_dt_class   .= ' justify-end';

	default:
		break;
}
?>

<div class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
	<div class="<?php echo esc_attr( $max_width ); ?> mx-auto px-6 lg:px-8">
		<?php if ( 'offset-inline' === get_field( 'list_column_style' ) || 'offset-block' === get_field( 'list_column_style' ) ) : ?>
			<div class="<?php echo esc_attr( $offset_container ); ?>">
			<?php endif; ?>
			<div class="<?php echo esc_attr( $header_container ); ?>">
				<?php if ( get_field( 'label' ) ) : ?>
					<h2 class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $label ); ?></h2>
				<?php endif; ?>
				<p class="<?php echo esc_attr( $text_color_primary ); ?> mt-2 text-3xl font-bold tracking-tight sm:text-4xl"><?php echo esc_html( $main_title ); ?></p>
				<p class="<?php echo esc_attr( $text_color_secondary ); ?> mt-6 text-lg leading-8"><?php echo esc_html( $description ); ?></p>
			</div>

			<?php if ( get_field( 'featured_image' ) ) : ?>
				<div class="relative overflow-hidden pt-16">
					<div class="<?php echo esc_attr( $max_width ); ?> mx-auto px-6 lg:px-8">
						<?php
						echo wp_get_attachment_image(
							get_field( 'featured_image' ),
							'full',
							'',
							array(
								'class' => 'mb-[-12%] rounded-xl shadow-2xl ring-1 ring-white/10',
								'alt'   => 'Icon',
							)
						);
						?>
						<div class="relative" aria-hidden="true">
							<div class="<?php echo esc_attr( $img_gradient_class ); ?>"></div>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<?php if ( have_rows( 'list' ) ) : ?>
				<?php if ( 'two-inline' === get_field( 'list_column_style' ) || 'two-block' === get_field( 'list_column_style' ) || 'three-inline' === get_field( 'list_column_style' ) || 'three-icon-block' === get_field( 'list_column_style' ) || 'three-block' === get_field( 'list_column_style' ) || 'six-block' === get_field( 'list_column_style' ) || 'six-icon-block' === get_field( 'list_column_style' ) ) : ?>
					<div class="<?php echo esc_attr( $list_container_class ); ?>">
					<?php endif; ?>
					<dl class="<?php echo esc_attr( $list_class ); ?>">
						<?php
						while ( have_rows( 'list' ) ) :
							the_row();
							$list_title       = get_sub_field( 'list_title' ) ?: 'Your Title Here';
							$list_description = get_sub_field( 'list_description' ) ?: 'Your Description Here';
							?>
							<div class="<?php echo esc_attr( $list_item_class ); ?>">
								<dt class="<?php echo esc_attr( $list_dt_class ); ?>">
									<?php if ( 'offset-inline' === get_field( 'list_column_style' ) ) : ?>
										<div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg  bg-indigo-600">
										<?php endif; ?>
										<?php if ( get_sub_field( 'list_icon' ) ) : ?>
											<?php
											echo wp_get_attachment_image(
												get_sub_field( 'list_icon' ),
												'full',
												'',
												array(
													'class' => $list_icon_class,
													'alt' => 'Icon',
												)
											);
											?>
										<?php endif; ?>
										<?php if ( 'offset-inline' === get_field( 'list_column_style' ) ) : ?>
										</div>
									<?php endif; ?>
									<?php echo esc_html( $list_title ); ?>
								</dt>

								<dd class="<?php echo esc_attr( $list_dd_class ); ?>">
									<?php if ( 'two-block' === get_field( 'list_column_style' ) || 'three-block' === get_field( 'list_column_style' ) || 'six-block' === get_field( 'list_column_style' ) ) : ?>
										<p class="flex-auto <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $list_description ); ?></p>
									<?php else : ?>
										<span class="<?php echo esc_attr( $text_color_secondary ); ?> inline"> <?php echo esc_html( $list_description ); ?> </span>
									<?php endif; ?>
								</dd>

								<?php if ( get_sub_field( 'link_text' ) ) : ?>
									<?php $page_link = get_sub_field( 'page_link' ) ?: get_sub_field( 'url' ); ?>
									<p class="mt-6">
										<a href="<?php echo esc_url( $page_link ); ?>" class="text-sm font-semibold leading-6 text-indigo-400" target="_blank"><?php the_sub_field( 'link_text' ); ?> <span aria-hidden="true">→</span></a>
									</p>
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					</dl>
					<?php if ( 'two-inline' === get_field( 'list_column_style' ) || 'two-block' === get_field( 'list_column_style' ) || 'three-inline' === get_field( 'list_column_style' ) || 'three-icon-block' === get_field( 'list_column_style' ) || 'three-block' === get_field( 'list_column_style' ) || 'six-block' === get_field( 'list_column_style' ) || 'six-icon-block' === get_field( 'list_column_style' ) ) : ?>
					</div>
					<?php endif; ?>
				<?php endif; ?>
				<?php if ( 'offset-inline' === get_field( 'list_column_style' ) || 'offset-block' === get_field( 'list_column_style' ) ) : ?>
			</div>
		<?php endif; ?>
	</div>
</div>
