<?php
/**
 * Dividers Template.
 *
 * @package greydientlab
 */

$class_name    = $block['className'] ?? '';
$divider_type  = get_field( 'type' );
$label         = get_field( 'label' ) ?: '';
$divider_title = get_field( 'title' ) ?: '';
$position      = get_field( 'position' );

$position_class = 'justify-center';
$span_class     = 'label' === $divider_type ? 'px-2 text-sm text-gray-500' : 'px-3 text-base font-semibold leading-6 text-gray-900';

switch ( $position ) {
	case 'center':
		$position_class = 'justify-center';
		break;

	case 'left':
		$position_class = 'justify-start';
		break;
}

if ( 'button' === $divider_type && $divider_title ) {
	$position_class = 'items-center justify-between';
}
?>
<div class="gl-b-template <?php echo esc_attr( $class_name ); ?>">
	<div class="relative">
		<div class="absolute inset-0 flex items-center" aria-hidden="true">
			<div class="w-full border-t border-gray-300"></div>
		</div>

		<div class="relative flex <?php echo esc_attr( $position_class ); ?>">
			<?php if ( 'button' === $divider_type ) : ?>
				<?php if ( get_field( 'title' ) ) : ?>
					<span class="bg-white pr-3 text-base font-semibold leading-6 text-gray-900">
						<?php echo esc_html( $divider_title ); ?>
					</span>
				<?php endif; ?>
				<button type="button" class="inline-flex items-center gap-x-1.5 rounded-full bg-white px-3 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
					<?php
					echo wp_get_attachment_image( get_field( 'button_icon' ), 'full', '', array( 'class' => 'h-5 w-5 text-gray-500' ) );
					the_field( 'button_label' );
					?>
				</button>
			<?php elseif ( 'toolbar' === $divider_type ) : ?>
				<?php if ( have_rows( 'toolbar' ) ) : ?>
					<span class="isolate inline-flex -space-x-px rounded-md shadow-sm">
						<?php
						$count = count( get_field( 'toolbar' ) );
						while ( have_rows( 'toolbar' ) ) :
							$index = get_row_index();
							the_row();
							$btn_class = '';
							switch ( $index ) {
								case 0:
									$btn_class = 'rounded-l-md';
									break;

								case $count - 1:
									$btn_class = 'rounded-r-md';
									break;
							}
							?>
							<button type="button" class="relative inline-flex items-center bg-white px-3 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10 <?php echo esc_attr( $btn_class ); ?>">
								<?php echo wp_get_attachment_image( get_sub_field( 'icon' ), 'full', '', array( 'class' => 'h-5 w-5' ) ); ?>
							</button>
						<?php endwhile; ?>
					</span>
				<?php endif; ?>
			<?php else : ?>
				<span class="bg-white <?php echo esc_attr( $span_class ); ?>">
					<?php if ( 'label' === $divider_type ) : ?>
						<?php echo esc_html( $label ); ?>
					<?php endif; ?>

					<?php if ( 'title' === $divider_type ) : ?>
						<?php echo esc_html( $divider_title ); ?>
					<?php endif; ?>

					<?php if ( 'icon' === $divider_type ) : ?>
						<?php echo wp_get_attachment_image( get_field( 'icon' ), 'full', '', array( 'class' => 'h-5 w-5 text-gray-500' ) ); ?>
					<?php endif; ?>
				</span>
			<?php endif; ?>
		</div>
	</div>
</div>
