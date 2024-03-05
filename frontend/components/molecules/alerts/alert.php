<?php
/**
 * Alert.
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::molecule( 'alerts/alert', array('key' => 'value') );
 *
 * @package greydientlab
 */

$gl_bg_color          = $args['gl_bg_color'] ?? 'bg-yellow-50'; // Use Tailwind config for the background color.
$gl_shape             = $args['gl_shape'] ?? 'rounded-md';
$gl_title             = $args['gl_title'] ?? false;
$gl_title_class       = $args['gl_title_class'] ?? '';
$gl_title_color       = $args['gl_title_color'] ?? 'text-yellow-800';
$gl_description       = $args['gl_description'] ?? false;
$gl_description_color = $args['gl_description_color'] ?? 'text-yellow-700';
$gl_html_title        = $args['gl_html_title'] ?? false;
$gl_icon              = $args['gl_icon'] ?? false;
$gl_list              = $args['gl_list'] ?? false;
$gl_list_color        = $args['gl_list_color'] ?? 'text-red-700';
$gl_action_buttons    = $args['gl_action_buttons'] ?? false;
$gl_right_link        = $args['gl_right_link'] ?? false;
$gl_right_link_class  = $args['gl_right_link_class'] ?? '';
$gl_right_link_text   = $args['gl_right_link_text'] ?? 'Details';
$gl_has_border        = $args['gl_has_border'] ?? false;
$gl_border_color      = $args['gl_border_color'] ?? false;
$gl_has_dismiss       = $args['gl_has_dismiss'] ?? false;
$gl_dismiss_class     = $args['gl_dismiss_class'] ?? 'bg-green-50 text-green-500 hover:bg-green-100 focus:outline-none focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50';

$title_class = sprintf( '%s %s', $gl_title_color, $gl_title_class );

$gl_link_right_class = '';

if ( $gl_right_link ) {
	$gl_link_right_class = 'flex-1 md:flex md:justify-between';
}

$container_class = sprintf( '%s %s', $gl_bg_color, $gl_shape );

if ( $gl_border_color ) {
	$container_class .= ' border-l-4 ' . $gl_border_color;
}
?>

<div class="mx-auto max-w-4xl py-8">
	<div class="p-4 <?php echo esc_attr( $container_class ); ?>">
		<div class="flex">
			<?php if ( $gl_icon ) : ?>
				<div class="flex-shrink-0">
					<?php if ( preg_match( '/http/i', $gl_icon ) ) : ?>
						<img src="<?php echo esc_url( $gl_icon ); ?>" class="h-5 w-5" alt="Icon">
					<?php endif; ?>

					<?php if ( preg_match( '/svg/i', $gl_icon ) ) : ?>
						<?php echo $gl_icon; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<div class="ml-3 <?php echo esc_attr( $gl_link_right_class ); ?>">
				<?php if ( $gl_title ) : ?>
					<h3 class="text-sm font-medium <?php echo esc_attr( $title_class ); ?>">
						<?php echo esc_html( $gl_title ); ?>
					</h3>
				<?php endif; ?>

				<?php if ( $gl_html_title ) : ?>
					<div class="text-sm <?php echo esc_attr( $title_class ); ?>">
						<?php echo $gl_html_title; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</div>
				<?php endif; ?>

				<?php if ( $gl_description ) : ?>
					<div class="mt-2 text-sm <?php echo esc_attr( $gl_description_color ); ?>">
						<?php echo esc_html( $gl_description ); ?>
					</div>
				<?php endif; ?>

				<?php if ( $gl_list ) : ?>
					<div class="mt-2 text-sm <?php echo esc_attr( $gl_list_color ); ?>">
						<ul role="list" class="list-disc space-y-1 pl-5">
							<?php foreach ( $gl_list as $list ) : ?>
								<li><?php echo esc_html( $list ); ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>

				<?php if ( $gl_action_buttons ) : ?>
					<div class="mt-4">
						<div class="-mx-2 -my-1.5 flex">
							<?php foreach ( $gl_action_buttons as $key => $button ) : ?>
								<?php
								$margin       = 0 !== $key ? 'ml-3' : '';
								$custom_class = array_key_exists( 'class', $button ) ? $button['class'] : '';
								$btn_class    = sprintf( '%s %s %s %s', $margin, $gl_shape, $custom_class, 'rounded-md px-2 py-1.5 text-sm font-medium focus:outline-none' );
								?>
								<button type="button" class="<?php echo esc_attr( $btn_class ); ?>">
									<?php if ( array_key_exists( 'link', $button ) ) : ?>
										<a href="<?php echo esc_html( $button['link'] ); ?>">
											<?php echo esc_html( $button['text'] ); ?>
										</a>
									<?php else : ?>
										<?php echo esc_html( $button['text'] ); ?>
									<?php endif; ?>
								</button>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif; ?>

				<?php if ( $gl_right_link ) : ?>
					<p class="mt-3 text-sm md:ml-6 md:mt-0">
						<a href="<?php echo esc_url( $gl_right_link ); ?>" class="whitespace-nowrap font-medium <?php echo esc_attr( $gl_right_link_class ); ?>">
							<?php echo esc_html( $gl_right_link_text ); ?>
							<span aria-hidden="true"> &rarr;</span>
						</a>
					</p>
				<?php endif; ?>
			</div>

			<?php if ( $gl_has_dismiss ) : ?>
				<div class="ml-auto pl-3">
					<div class="-mx-1.5 -my-1.5">
						<button type="button" class="inline-flex rounded-md p-1.5 <?php echo esc_attr( $gl_dismiss_class ); ?>">
							<span class="sr-only">Dismiss</span>
							<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
							</svg>
						</button>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
