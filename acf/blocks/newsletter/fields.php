<?php
/**
 * ACF Newsletter Section.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$newsletter = new StoutLogic\AcfBuilder\FieldsBuilder( 'newsletter' );
$newsletter
	->addSelect(
		'news_style',
		array(
			'default_value' => 'simple',
		)
	)

	->addChoices(
		array( 'simple' => 'Simple' ),
		array( 'card' => 'On Card' )
	)

	->addSelect(
		'simple_type',
		array(
			'default_value' => 'default',
		)
	)
	->conditional( 'news_style', '==', 'simple' )
	->addChoices(
		array( 'default' => 'Stacked' ),
		array( 'icon' => 'With Icon List' )
	)
	->addCheckbox(
		'checkbox_field',
		array(
			'label'         => 'On Brand',
			'choices'       => array( 'is Background on brand?' ),
			'default_value' => array( 0 ),
			'return_format' => 'value',
		)
	)
	->conditional( 'simple_type', '==', 'default' )

	->addColorPicker( 'background_color' )
	->conditional( 'checkbox_field', '==', 'is Background on brand?' )

	->addText( 'title' )
	->addTextArea( 'description' )
	->addWysiwyg(
		'label',
		array(
			'media_upload' => 0,
		)
	)
	->conditional( 'simple_type', '!=', 'icon' )
	->addRepeater(
		'list',
		array(
			'max'   => '2',
			'label' => 'List',
		)
	)
	->conditional( 'simple_type', '==', 'icon' )
	->addImage(
		'list_icon',
		array(
			'preview_size'  => 'medium',
			'return_format' => 'id',
		)
	)
	->addText( 'list_label' )
	->addText( 'list_description' )
	->endRepeater()

	->addTextArea( 'shortcode' )

	->setLocation( 'block', '==', 'acf/newsletter' );

return $newsletter;
