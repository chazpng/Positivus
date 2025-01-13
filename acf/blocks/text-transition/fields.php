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
	->addSelect(
		'field_style',
		array(
			'default_value' => 'textarea',
		)
	)
	->addChoices(
		array( 'textarea' => 'Textarea' ),
		array( 'list-items' => 'List' )
	)
	->addText( 'custom_class' )
	->addTextarea( 'body' )
	->conditional( 'field_style', '==', 'textarea' )
	->addRepeater(
		'items_list',
		array(
			'label' => 'List Items',
		)
	)
	->conditional( 'field_style', '==', 'list-items' )
	->addText( 'text' )
	->endRepeater()
	->setLocation( 'block', '==', 'acf/text-transition' );

	return $text_transition;
