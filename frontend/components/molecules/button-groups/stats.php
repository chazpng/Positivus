<?php
/**
 * Stats Button Groups
 *
 * This is an example of how to a stats button groups element.
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::molecule( 'button-groups/stats', array('key' => 'value') );
 *
 * @package greydientlab
 */

$gl_bg_color   = $args['gl_bg_color'] ?? 'bg-white';
$gl_text_color = $args['gl_text_color'] ?? 'text-gray-900';

$gl_label = $args['gl_label'] ?? 'Bookmark';
$gl_stats = $args['gl_stats'] ?? '12k';

$gl_svg_icon = $args['gl_svg_icon'] ?? '<svg class="-ml-0.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path fill-rule="evenodd" d="M10 2c-1.716 0-3.408.106-5.07.31C3.806 2.45 3 3.414 3 4.517V17.25a.75.75 0 001.075.676L10 15.082l5.925 2.844A.75.75 0 0017 17.25V4.517c0-1.103-.806-2.068-1.93-2.207A41.403 41.403 0 0010 2z" clip-rule="evenodd"></path>
</svg>';

$first_default_classes = 'relative inline-flex items-center gap-x-1.5 rounded-l-md px-3 py-2 text-sm font-semibold ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10';
$first_btn_classes     = sprintf( '%s %s %s', $gl_bg_color, $gl_text_color, $first_default_classes );

$second_default_class = 'relative -ml-px inline-flex items-center rounded-r-md px-3 py-2 text-sm font-semibold ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10';
$second_btn_classes   = sprintf( '%s %s %s', $gl_bg_color, $gl_text_color, $second_default_class );
?>
<span class="isolate inline-flex rounded-md shadow-sm">
	<button type="button" class="<?php echo esc_attr( $first_btn_classes ); ?>">
		<?php
			echo $gl_svg_icon; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			echo esc_html( $gl_label );
		?>
	</button>

	<button type="button" class="<?php echo esc_attr( $second_btn_classes ); ?>">
		<?php echo esc_html( $gl_stats ); ?>
	</button>
</span>
