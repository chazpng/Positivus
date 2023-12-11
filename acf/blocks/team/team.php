<?php
/**
 * Team Section.
 *
 * @package circles_x
 */

$style      = $block['className'] ?? '';
$team_style = get_field( 'team_style' );
?>
<div class="gl-b-stats-section">
	<?php if ( 'full-width-with-vertical-images' === $team_style ) : ?>
		<?php require gl_get_custom_block_template( 'team', 'full-width-with-vertical-images.php' ); ?>
	<?php endif; ?>
	<?php if ( 'grid-with-large-rounded-images' === $team_style ) : ?>
		<?php require gl_get_custom_block_template( 'team', 'grid-with-large-rounded-images.php' ); ?>
	<?php endif; ?>
	<?php if ( 'grid-with-round-images' === $team_style ) : ?>
		<?php require gl_get_custom_block_template( 'team', 'grid-with-round-images.php' ); ?>
	<?php endif; ?>
	<?php if ( 'with-images-and-paragraph' === $team_style ) : ?>
		<?php require gl_get_custom_block_template( 'team', 'with-images-and-paragraph.php' ); ?>
	<?php endif; ?>
	<?php if ( 'with-large-images' === $team_style ) : ?>
		<?php require gl_get_custom_block_template( 'team', 'with-large-images.php' ); ?>
	<?php endif; ?>
	<?php if ( 'with-medium-images' === $team_style ) : ?>
		<?php require gl_get_custom_block_template( 'team', 'with-medium-images.php' ); ?>
	<?php endif; ?>
	<?php if ( 'with-small-images' === $team_style ) : ?>
		<?php require gl_get_custom_block_template( 'team', 'with-small-images.php' ); ?>
	<?php endif; ?>
	<?php if ( 'with-vertical-images' === $team_style ) : ?>
		<?php require gl_get_custom_block_template( 'team', 'with-vertical-images.php' ); ?>
	<?php endif; ?>
</div>
