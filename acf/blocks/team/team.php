<?php
/**
 * Team Section Template.
 *
 * @package circles_x
 */

$style      = $block['className'] ?? '';
$team_style = get_field( 'team_style' );
$align      = $block['align'];
?>
<div class="gl-b-team-section">
	<?php if ( 'simple' === $team_style ) : ?>
		<?php require gl_get_custom_block_template( 'team', 'simple.php' ); ?>
	<?php endif; ?>
	<?php if ( 'paragraph' === $team_style ) : ?>
		<?php require gl_get_custom_block_template( 'team', 'with-short-paragraph.php' ); ?>
	<?php endif; ?>
</div>
