<?php
/**
 * Basic Button Groups
 *
 * This is an example of how to a basic button groups element.
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::molecule( 'button-groups/basic', array('key' => 'value') );
 *
 * @package greydientlab
 */

$dummy = [
	[
		'text' => 'Years',
		'link' => '#',
	],
	[
		'text' => 'Months',
		'link' => '#',
	],
	[
		'text' => 'Days',
		'link' => '#',
	],
];

$gl_btn_links  = $args['gl_btn_links'] ?? $dummy;
$gl_bg_color   = $args['gl_bg_color'] ?? 'bg-white';
$gl_text_color = $args['gl_text_color'] ?? 'text-gray-900';

$count = 1;
?>
<span class="isolate inline-flex rounded-md shadow-sm">
	<?php foreach ( $gl_btn_links as $value ) : ?>
		<?php
			$default_classes = 'relative inline-flex items-center px-3 py-2 text-sm font-semibold ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10';
			$class           = sprintf( '%s %s %s', $gl_bg_color, $gl_text_color, $default_classes );
		if ( 1 === $count ) {
			$class .= ' rounded-l-md';
		}

		if ( 1 !== $count && $count < count( $gl_btn_links ) ) {
			$class .= ' -ml-px';
		}

		if ( count( $gl_btn_links ) === $count ) {
			$class .= ' -ml-px rounded-r-md';
		}
		?>
		<button type="button" class="<?php echo esc_attr( $class ); ?>">
			<a href="<?php echo esc_attr( $value['link'] ); ?>">
				<?php echo esc_html( $value['text'] ); ?>
			</a>
		</button>
		<?php
		$count++;
	endforeach;
	?>
</span>
