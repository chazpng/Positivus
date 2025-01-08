<?php
/**
 * Text Transition Section.
 *
 * ACF Text Transition Section.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$text_transition = new StoutLogic\AcfBuilder\FieldsBuilder( 'text_transition' );

	$text_transition
	
	->addTextarea( 'body' )
	->addText( 'custom_class' )
	->setLocation( 'block', '==', 'acf/text-transition' );

	return $text_transition;
