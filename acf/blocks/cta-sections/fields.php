<?php
/**
 * CTA Section.
 *
 * ACF CTA Section.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$cta = new StoutLogic\AcfBuilder\FieldsBuilder( 'cta' );
$cta->addSelect(
	'cta_style',
	array(
		'default_value' => 'simple',
	)
)

<<<<<<< HEAD


->addChoices(
	array( 'simple' => 'Simple' ),
	array( 'two-columns' => 'Two Columns with Photo on dark' ),
	array( 'with-panel' => 'With Panel on dark' ),
	array( 'split-with-image' => 'Split with Image' ),
	array( 'with-image-tiles' => 'With Image Tiles' )
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
->conditional( 'cta_style', '==', 'simple' )
->addColorPicker( 'background_color' )
->conditional( 'checkbox_field', '==', 'is Background on brand?' )
	->addImage(
		'featured_image',
=======
	->addChoices(
		array( 'simple' => 'Simple' ),
		array( 'two-columns' => 'Two Columns with Photo on dark' ),
		array( 'with-panel' => 'With Panel on dark' ),
		array( 'split-with-image' => 'Split with Image' )
	)

	->addCheckbox(
		'checkbox_field',
>>>>>>> fb573ce0fb45efa5e251f6ef1c9a8bcfe10c5401
		array(
			'label'         => 'On Brand',
			'choices'       => array( 'is Background on brand?' ),
			'default_value' => array( 0 ),
			'return_format' => 'value',
		)
	)
<<<<<<< HEAD
	->addText( 'subtitle' )
	->addText( 'title' )
	->addTextarea( 'description' )
	->conditional( 'cta_style', '!==', 'with-image-tiles' )
	->addWysiwyg(
		'paragraph',
		array(
			'media_upload' => 0,
		)
	)
	->conditional( 'cta_style', '==', 'with-image-tiles' )
	->addRepeater(
		'list',
		array(
			'max'  => '8',
=======

	->conditional( 'cta_style', '==', 'simple' )
		->addColorPicker( 'background_color' )
			->conditional( 'checkbox_field', '==', 'is Background on brand?' )

		->addImage(
			'featured_image',
			array(
				'preview_size'  => 'medium',
				'return_format' => 'id',
			)
>>>>>>> fb573ce0fb45efa5e251f6ef1c9a8bcfe10c5401
		)
		->addText( 'subtitle' )
		->addText( 'title' )
		->addTextarea( 'description' )
			->addRepeater(
				'list',
				array(
					'max'  => '8',
				)
			)
			->conditional( 'cta_style', '==', 'two-columns' )
				->addText( 'list_title' )
		->endRepeater()

	->addText( 'link_text' )
	->addPageLink( 'page_link' )
	->addText( 'link_text_2' )
<<<<<<< HEAD
	->conditional( 'cta_style', '==', 'simple' )
	->addPageLink( 'page_link_2' )
	->conditional( 'cta_style', '==', 'simple' )
=======
		->conditional( 'cta_style', '==', 'simple' )

	->addPageLink( 'page_link_2' )
		->conditional( 'cta_style', '==', 'simple' )
>>>>>>> fb573ce0fb45efa5e251f6ef1c9a8bcfe10c5401

->setLocation( 'block', '==', 'acf/cta' );

return $cta;
