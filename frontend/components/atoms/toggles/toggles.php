<?php
/**
 * Toggles
 *
 * This is an example of how to a toggles element.
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::atom( 'toggles/toggles', array('key' => 'value') );
 * 
 * Types: toggle-simple, toggle-icon, toggle-short, toggle-description, toggle-right
 *
 * @package greydientlab
 */

$gl_toggle_type        = $args['gl_toggle_type'] ?? '';
$gl_toggle_label       = $args['gl_toggle_label'] ?? '';
$gl_toggle_description = $args['gl_toggle_description'] ?? '';


?>
<?php if ( 'toggle-description' === $gl_toggle_type ) : ?>
	<div class="flex items-center justify-between">
		<span class="flex flex-grow flex-col">
			<span class="text-sm font-medium leading-6 text-gray-900" id="availability-label"><?php echo esc_html( $gl_toggle_label ); ?></span>
			<span class="text-sm text-gray-500" id="availability-description"><?php echo esc_html( $gl_toggle_description ); ?></span>
		</span>
		<div class="<?php echo esc_attr( $gl_toggle_type ); ?>">
			<?php echo do_shortcode( '[contact-form-7 id="8ebab60" title="Toggle"]' ); ?>
		</div>
	</div>
<?php elseif ( 'toggle-right' === $gl_toggle_type ) : ?>
	<div class="flex items-center">
		<div class="<?php echo esc_attr( $gl_toggle_type ); ?>">
			<?php echo do_shortcode( '[contact-form-7 id="8ebab60" title="Toggle"]' ); ?>
		</div>
		<span class="ml-3 text-sm mb-1" id="annual-billing-label">
			<span class="font-medium text-gray-900"><?php echo esc_html( $gl_toggle_label ); ?></span>
			<span class="text-gray-500"><?php echo esc_html( $gl_toggle_description ); ?></span>
		</span>
	</div>
<?php else : ?>
	<div class="<?php echo esc_attr( $gl_toggle_type ); ?>">
		<?php echo do_shortcode( '[contact-form-7 id="8ebab60" title="Toggle"]' ); ?>
	</div>
<?php endif; ?>
