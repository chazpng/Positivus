<?php
/**
 * PHP Code Template.
 *
 * @package circles_x
 */

$class_name = $block['className'] ?? 'min-h-64';
?>

<div class="gl-b-php-code <?php echo esc_attr( $class_name ); ?>">
	<?php
	$php_code = get_field( 'php_code' );

	if ( $php_code ) {
		ob_start();
		eval( '?>' . $php_code ); // phpcs:ignore Squiz.PHP.Eval.Discouraged
		$output = ob_get_clean();
		echo $output; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
	?>
</div>
