<?php
/**
 * Newsletter Section Template.
 *
 * @package circles_x
 */

$style      = $block['className'] ?? '';
$news_style = get_field( 'news_style' );
$align      = $block['align'];
?>


<div class="gl-b-newsletter-section">
	<?php if ( 'simple' === $news_style ) : ?>
		<?php require gl_get_custom_block_template( 'newsletter', 'simple.php' ); ?>
	<?php endif; ?>
	<?php if ( 'card' === $news_style ) : ?>
		<?php require gl_get_custom_block_template( 'newsletter', 'card.php' ); ?>
	<?php endif; ?>
</div>
