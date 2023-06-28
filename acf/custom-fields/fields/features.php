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
		array( 'simple' => 'Simple' )
	)
->addImage(
	'featured_image',
	array(
		'preview_size'  => 'medium',
		'label'         => __( 'Featured Image', 'greydientlab' ),
		'return_format' => 'url',
	)
)
->addTrueFalse(
	'align_image_to_the_left?',
	array(
		'default_value' => 0,
	)
)
->conditional( 'features_style', '==', 'product-screenshot' )
	->addText( 'label' )
	->addText( 'title' )
	->addTextarea( 'description' )

	->addRepeater( 'list' )
	->addImage(
		'list_icon',
		array(
			'preview_size'  => 'medium',
			'label'         => __( 'List Icon', 'greydientlab' ),
			'return_format' => 'url',
		)
	)
	->addText( 'list_title' )
	->addText( 'list_description' )
	->endRepeater()
		
	->setLocation( 'block', '==', 'acf/features' );

return $headers;
