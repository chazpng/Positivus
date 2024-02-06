<?php
/**
 * Contact Section Template.
 *
 * @package circles_x
 */

$style         = $block['className'] ?? '';
$contact_style = get_field( 'contact_style' );
$align         = $block['align'];
?>


<div class="gl-b-contact-section">
	<?php if ( 'without-form' === $contact_style ) : ?>
		<?php require gl_get_custom_block_template( 'contact', 'without-form.php' ); ?>
	<?php endif; ?>
	<?php if ( 'with-form' === $contact_style ) : ?>
		<?php require gl_get_custom_block_template( 'contact', 'with-form.php' ); ?>
	<?php endif; ?>
</div>
