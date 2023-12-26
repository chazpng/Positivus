<?php
/**
 * PHP Code Embed.
 *
 * ACF PHP Code Embed.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$php_code = new StoutLogic\AcfBuilder\FieldsBuilder( 'php-code' );
$php_code
	->addTextArea(
		'php_code'
	)
	->setLocation( 'block', '==', 'acf/php-code' );

return $php_code;
