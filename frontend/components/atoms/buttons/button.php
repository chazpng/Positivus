<?php
/**
 * Button
 *
 * This is an example of how to a button element.
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::atom( 'buttons/button', array('key' => 'value') );
 *
 * @package greydientlab
 */

$gl_btn_size      = $args['gl_btn_size'] ?? 'btn-sm';
$gl_btn_type      = $args['gl_btn_type'] ?? 'btn-primary';
$gl_btn_text      = $args['gl_btn_text'] ?? 'Button text';
$gl_is_rounded    = $args['gl_is_rounded'] ?? false;
$gl_leading_icon  = $args['gl_leading_icon'] ?? false;
$gl_trailing_icon = $args['gl_trailing_icon'] ?? false;

$btn_class = '';

switch ( $gl_btn_size ) {
	case 'btn-xs':
		$btn_class .= $gl_is_rounded ? 'rounded-full' : 'rounded';
		$btn_class .= $gl_is_rounded ? ' px-2.5 py-1' : ' px-2 py-1';
		$btn_class .= ' text-xs font-semibold shadow-sm';
		break;

	case 'btn-sm':
		$btn_class .= $gl_is_rounded ? 'rounded-full' : 'rounded';
		$btn_class .= $gl_is_rounded ? ' px-2.5 py-1' : ' px-2 py-1';
		$btn_class .= ' text-sm font-semibold shadow-sm';
		break;

	case 'btn-md':
		$btn_class .= $gl_is_rounded ? 'rounded-full' : 'rounded-md';
		$btn_class .= $gl_is_rounded ? ' px-3 py-1.5' : ' px-2.5 py-1.5';
		$btn_class .= ' text-sm font-semibold shadow-sm';
		break;

	case 'btn-lg':
		$btn_class .= $gl_is_rounded ? 'rounded-full' : 'rounded-md';
		$btn_class .= $gl_is_rounded ? ' px-3.5 py-2' : ' px-3 py-2';
		$btn_class .= ' text-sm font-semibold shadow-sm';
		break;

	case 'btn-xl':
		$btn_class .= $gl_is_rounded ? 'rounded-full' : 'rounded-md';
		$btn_class .= $gl_is_rounded ? ' px-4 py-2.5' : ' px-3.5 py-2.5';
		$btn_class .= ' gap-x-2  px-3.5 py-2.5 text-sm';
		break;

	default:
		break;
}

switch ( $gl_btn_type ) {
	case 'btn-primary':
		$btn_class .= ' bg-indigo-600 text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600';
		break;

	case 'btn-secondary':
		$btn_class .= ' bg-white text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50';
		break;

	case 'btn-primary-dark':
		$btn_class .= ' bg-indigo-500 text-white hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500';
		break;

	case 'btn-secondary-dark':
		$btn_class .= ' bg-white/10 text-white hover:bg-white/20';
		break;

	case 'btn-soft':
		$btn_class .= ' bg-indigo-50 text-indigo-600 hover:bg-indigo-100';
		break;

	default:
		break;
}

if ( $gl_leading_icon || $gl_trailing_icon ) {
	$btn_class .= ' inline-flex items-center gap-x-1.5';
}

if ( 'btn-circular' === $gl_btn_type ) {

	switch ( $gl_btn_size ) {
		case 'btn-md':
			$btn_class = 'p-1';
			break;

		case 'btn-lg':
			$btn_class = 'p-1.5';
			break;

		case 'btn-xl':
			$btn_class = 'p-2';
			break;

		default:
			break;
	}
}

?>
<?php if ( 'btn-circular' === $gl_btn_type ) : ?>
	<button type="button" class="rounded-full bg-indigo-600 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 <?php echo esc_attr( $btn_class ); ?>">
		<?php if ( $gl_leading_icon ) : ?>
			<img class="h-5 w-5" src="<?php echo esc_url( $gl_leading_icon ); ?>" alt="icon">
		<?php endif; ?>

		<?php if ( $gl_trailing_icon ) : ?>
			<img class="h-5 w-5" src="<?php echo esc_url( $gl_trailing_icon ); ?>" alt="icon">
		<?php endif; ?>
	</button>
<?php else : ?>
	<button type="button" class="font-semibold shadow-sm mt-0 <?php echo esc_attr( $btn_class ); ?>">
		<?php if ( $gl_leading_icon ) : ?>
			<img class="-ml-0.5 h-5 w-5" width="20" height="20" src="<?php echo esc_url( $gl_leading_icon ); ?>" alt="icon">
		<?php endif; ?>

		<?php echo esc_html( $gl_btn_text ); ?>

		<?php if ( $gl_trailing_icon ) : ?>
			<img class="-mr-0.5 h-5 w-5" width="20" height="20" src="<?php echo esc_url( $gl_trailing_icon ); ?>" alt="icon">
		<?php endif; ?>
	</button>
<?php endif; ?>
