<?php
/**
 * Label with Description
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::atom( 'label-with-description/label-with-description', array('key' => 'value') );
 *
 * @package greydientlab
 */

$gl_label_class       = $args['gl_label_class'] ?? '';
$gl_description_class = $args['gl_description_class'] ?? '';
$gl_label             = $args['gl_label'] ?? 'Your Label Here';
$gl_description       = $args['gl_description'] ?? 'Your Description Here';
?>

<span class="<?php echo esc_attr( $gl_label_class ); ?>">
	<?php echo esc_html( $gl_label ); ?>
</span>

<svg viewBox="0 0 2 2" class="mx-2 inline h-0.5 w-0.5 fill-current" fill="currentColor" aria-hidden="true"><circle cx="1" cy="1" r="1" /></svg>

<span class="<?php echo esc_attr( $gl_description_class ); ?>">
	<?php echo esc_html( $gl_description ); ?>
</span>
