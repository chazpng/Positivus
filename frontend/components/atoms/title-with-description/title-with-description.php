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

$gl_title       = $args['gl_title'] ?? false;
$gl_description = $args['gl_description'] ?? false;
$gl_class       = $args['gl_class'] ?? '';
?>

<div class="<?php echo esc_attr( $gl_class ); ?>">
	<?php if ( $gl_title ) : ?>
		<h4 class="text-lg font-bold"><?php echo esc_html( $gl_title ); ?></h4>
	<?php endif; ?>

	<?php if ( $gl_description ) : ?>
		<div class="mt-1"><?php echo wp_kses_post( $gl_description ); ?></div>
	<?php endif; ?>
</div>
