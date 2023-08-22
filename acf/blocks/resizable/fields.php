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
	->setLocation( 'block', '==', 'acf/resizable' );

return $resizable;
