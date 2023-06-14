<?php
/**
 * Headers.
 *
 * ACF Headers.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$headers = new StoutLogic\AcfBuilder\FieldsBuilder( 'headers' );
$headers
	->addSelect(
		'header_type',
		array(
			'default_value' => 'stacked-flyout-menu',
		)
	)
	->addChoices(
		array( 'stacked-flyout-menu' => 'Stacked Flyout Menu' )
	)
	->setLocation( 'block', '==', 'acf/header' );

return $headers;
