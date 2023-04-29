<?php
/**
 * GL Text.
 *
 * ACF GL Text.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$gl_text = new StoutLogic\AcfBuilder\FieldsBuilder( 'gl_text' );
$gl_text
	->addTextArea( 'text' )
	->setLocation( 'block', '==', 'gl/text' );

return $gl_text;
