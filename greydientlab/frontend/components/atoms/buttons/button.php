<?php
/**
 * Button
 *
 * This is an example of how to a button element.
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::atom( 'buttons/button', array('key' => 'value') );
 *
 * @package greydientlab
 */

$class         = $args['class'] ?? '';
$button_style  = $args['button_style'] ?? 'default';
$button_height = $args['button_height'] ?? 'default';
$link_url      = $args['url'] ?? false;
$link_title    = $args['title'] ?? '';
$link_target   = $args['target'] ?? '_self';
$icon          = $args['icon'] ?? '';

$icon      = 'arrow' === $button_style ? 'arrow-right' : $icon;
$file_name = $icon ? get_stylesheet_directory() . '/frontend/static/icons/' . $icon . '.svg' : '';

$link_base   = ' inline-flex items-center justify-center leading-1.125 inline-block';
$button_base = ' text-center transition-settings-default text-white cursor-pointer';
$icon_class  = 'link' === $button_style || 'arrow' === $button_style ? 'ml-.5 mt-1px w-1 h-1 transition-settings-default hover-target' : 'mr-1 opacity-50';

?>

<?php if ( $link_url ) : ?>

	<a
		class="<?php echo esc_attr( $class ); ?>"
		href="<?php echo esc_url( $link_url ); ?>"
		target="<?php echo esc_attr( $link_target ); ?>"
	>

<?php else : ?>

	<button
		class="<?php echo esc_attr( $class ); ?>"
		type="button"
	>

<?php endif; ?>

		<?php if ( $icon ) : ?>

			<span class="<?php echo esc_attr( $icon_class ); ?>">

				<?php
				// @codingStandardsIgnoreLine
				$file_content = file_get_contents( $file_name ) ?? '';
				// @codingStandardsIgnoreLine - we are using a fixed set of known SVGs so there is no risk here.
				echo $file_content;
				?>

		</span>

		<?php endif; ?>

		<?php echo esc_html( $link_title ); ?>


<?php if ( $link_url ) : ?>

	</a>

<?php else : ?>

	</button>

<?php endif; ?>
