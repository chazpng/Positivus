<?php
/**
 * Resizable Fields.
 *
 * ACF GL Text.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$resizable = new StoutLogic\AcfBuilder\FieldsBuilder( 'resizable' );
$resizable
	->addPageLink( 'page' )
	->addText( 'label' )
	->addText( 'number_id' )
	->addTrueFalse(
		'disable_resize',
		[
			'label' => 'Disable Resize?',
		] 
	)
	->addTrueFalse(
		'hide_code',
		[
			'label' => 'Hide Dev Code?',
		] 
	)
	->setLocation( 'block', '==', 'acf/resizable' );

return $resizable;
