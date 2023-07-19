<?php
/**
 * Features Section.
 *
 * ACF Features.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$headers = new StoutLogic\AcfBuilder\FieldsBuilder( 'features' );
$headers
	->addSelect(
		'features_style',
		array(
			'default_value' => 'simple',
		)
	)
	->addChoices(
		array( 'product-screenshot' => 'With Product Screenshot' ),
		array( '2x2-grid' => 'Centered 2x2 Grid' ),
		array( 'large-screenshot' => 'With Large Screenshot' ),
		array( 'offset-feature' => 'Offset with Feature List' ),
		array( 'offset-2x2' => 'Offset 2x2 Grid' ),
		array( 'simple' => 'Simple' ),
		array( 'three-column' => 'Simple Three Column with Small Icons' ),
		array( 'three-column-large-icons' => 'Simple Three Column with Large Icons' ),
		array( 'with-testimonial' => 'With Testimonial' ),
		array( 'two-column-with-icons' => 'Simple Two Columns with Small Icons' ),
		array( 'code-panel' => 'With Code Panel' ),
		array( 'product-screenshot-panel' => 'With Product Screenshot Panel' ),
		array( 'contained-in-panel' => 'Contained in Panel' )
	)
->addImage(
	'featured_image',
	array(
		'preview_size'  => 'medium',
		'label'         => __( 'Featured Image', 'greydientlab' ),
		'return_format' => 'id',
	)
)
->conditional( 'features_style', '==', 'product-screenshot' )
->or( 'features_style', '==', '2x2-grid' )
->or( 'features_style', '==', 'large-screenshot' )
->or( 'features_style', '==', 'with-testimonial' )

->addTrueFalse(
	'align_image_to_the_left?',
	array(
		'default_value' => 0,
	)
)
->conditional( 'features_style', '==', 'product-screenshot' )

->addTrueFalse(
	'dark_mode?',
	array(
		'default_value' => 0,
	)
)
->conditional( 'features_style', '==', 'two-column-with-icons' )

	->addText( 'label' )
	->addText( 'title' )
	->addTextarea( 'description' )

	->addRepeater( 'list' )
	->conditional( 'features_style', '==', 'product-screenshot' )
		->or( 'features_style', '==', '2x2-grid' )
		->or( 'features_style', '==', 'large-screenshot' )
		->or( 'features_style', '==', 'offset-2x2' )
		->or( 'features_style', '==', 'offset-feature' )
		->or( 'features_style', '==', 'simple' )
		->or( 'features_style', '==', 'three-column' )
		->or( 'features_style', '==', 'three-column-large-icons' )
		->or( 'features_style', '==', 'two-column-with-icons' )
		->or( 'features_style', '==', 'product-screenshot-panel' )

	->addImage(
		'list_icon',
		array(
			'preview_size'  => 'medium',
			'label'         => __( 'List Icon', 'greydientlab' ),
			'return_format' => 'id',
		)
	)
	->addText( 'list_title' )
	->addText( 'list_description' )
	->addUrl( 'button_link' )
	->conditional( 'features_style', '==', 'three-column-large-icons' )
	->addText( 'button_name' )
	->conditional( 'features_style', '==', 'three-column-large-icons' )

	->endRepeater()

	->addUrl( 'button_link' )
	->conditional( 'features_style', '==', 'with-testimonial' )
	->addText( 'button_name' )
	->conditional( 'features_style', '==', 'with-testimonial' )

	->addRepeater(
		'testimonials',
		array(
			'max'  => 1,
		)
	)
		->conditional( 'features_style', '==', 'with-testimonial' )
	->addTextarea( 'qoute' )
	->addText( 'name' )
	->addText( 'position' )
	->addImage(
		'avatar',
		array(
			'preview_size'  => 'medium',
			'label'         => __( 'Avatar Image', 'greydientlab' ),
			'return_format' => 'url',
		)
	)
		
	->setLocation( 'block', '==', 'acf/features' );

return $headers;
