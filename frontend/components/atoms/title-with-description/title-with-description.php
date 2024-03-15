<?php
/**
 * Title with Description
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::atom( 'title-with-description/title-with-description', array('key' => 'value') );
 *
 * @package greydientlab
 */

$gl_title             = $args['gl_title'] ?? false;
$gl_description       = $args['gl_description'] ?? false;
$gl_class             = $args['gl_class'] ?? '';
$gl_type              = $args['gl_type'] ?? 'simple';
$gl_title_class       = $args['gl_title_class'] ?? 'text-lg font-bold';
$gl_description_class = $args['gl_description_class'] ?? 'mt-1';
?>

<div class="<?php echo esc_attr( $gl_class ); ?>">
	<?php if ( $gl_title ) : ?>
		<h4 class="<?php echo esc_attr( $gl_title_class ); ?>"><?php echo esc_html( $gl_title ); ?></h4>
	<?php endif; ?>

	<?php if ( $gl_description ) : ?>
		<div class="<?php echo esc_attr( $gl_description_class ); ?>"><?php echo wp_kses_post( $gl_description ); ?></div>
	<?php endif; ?>
</div>

