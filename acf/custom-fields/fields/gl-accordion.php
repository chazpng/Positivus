<?php
/**
 * ACF Acoordion Block Fields.
 *
 * This is an example of how to create an ACF Banner Block.
 * Make sure that the location (setLocation) exists in the
 * acf/blocks and should match the name in block.json file
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$accordion = new StoutLogic\AcfBuilder\FieldsBuilder( 'accordion' );
$accordion
	->addRepeater( 'accordion' )
		->addText( 'label' )
		->addWysiwyg( 'content' )
	->setLocation( 'block', '==', 'gl/accordion' );

return $accordion;
