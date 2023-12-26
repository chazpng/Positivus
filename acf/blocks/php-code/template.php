<?php
/**
 * PHP Code Template.
 *
 * @package circles_x
 */

?>

<div class="gl-b-php-code min-h-64">
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
