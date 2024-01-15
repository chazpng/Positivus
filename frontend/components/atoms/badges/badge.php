<?php
/**
 * Badge
 *
 * This is an example of how to add badge element.
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::atom( 'badges/badge', array('key' => 'value') );
 *
 * @package greydientlab
 */

$gl_text       = $args['gl_text'] ?? 'Badge';
$gl_bg_color   = $args['gl_bg_color'] ?? 'bg-gray-50';
$gl_text_color = $args['gl_text_color'] ?? 'text-gray-600';
$gl_ring_color = $args['gl_ring_color'] ?? 'ring-gray-500/10';
$gl_size       = $args['gl_size'] ?? 'px-2 py-1';

$gl_has_dot   = $args['gl_has_dot'] ?? false;
$gl_dot_color = $args['gl_dot_color'] ?? 'fill-red-500';

$gl_has_remove       = $args['gl_has_remove'] ?? false;
$gl_remove_btn_class = $args['gl_remove_btn_class'] ?? 'hover:bg-gray-500/20';
$gl_remove_svg_class = $args['gl_remove_svg_class'] ?? 'stroke-gray-600/50 group-hover:stroke-gray-600/75';

$gl_is_flat = $args['gl_is_flat'] ?? false;

$gl_shape   = $args['gl_shape'] ?? 'rounded-md';
$class_name = '';

if ( $gl_has_dot ) {
	$class_name .= ' gap-x-1.5';
}

if ( ! $gl_is_flat ) {
	$class_name .= ' ring-1 ring-inset';
}

if ( $gl_has_remove ) {
	$class_name .= '  gap-x-0.5';
}

switch ( $gl_size ) {
	case 'small':
		$gl_size = 'px-1.5 py-0.5';
		break;

	case 'medium':
		$gl_size = 'px-2 py-1';
		break;

	default:
		break;
}


$gl_class = sprintf( '%s %s %s %s %s %s', $gl_bg_color, $gl_text_color, $gl_ring_color, $gl_size, $gl_shape, $class_name );
?>
<span class="<?php echo esc_attr( $gl_class ); ?> inline-flex items-center text-xs font-medium">
	<?php if ( $gl_has_dot ) : ?>
		<svg class="<?php echo esc_attr( $gl_dot_color ); ?> h-1.5 w-1.5" viewBox="0 0 6 6" aria-hidden="true">
			<circle cx="3" cy="3" r="3" />
		</svg>
	<?php endif; ?>

	<?php echo esc_html( $gl_text ); ?>

	<?php if ( $gl_has_remove ) : ?>
		<button type="button" class="<?php echo esc_attr( $gl_remove_btn_class ); ?> group relative -mr-1 h-3.5 w-3.5 rounded-sm">
			<span class="sr-only">Remove</span>
			<svg viewBox="0 0 14 14" class="<?php echo esc_attr( $gl_remove_svg_class ); ?> h-3.5 w-3.5">
				<path d="M4 4l6 6m0-6l-6 6" />
			</svg>
			<span class="absolute -inset-1"></span>
		</button>
	<?php endif; ?>
</span>
