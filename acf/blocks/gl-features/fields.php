<?php
/**
 * ACF Greydient Lab Features Section.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$gl_features = new StoutLogic\AcfBuilder\FieldsBuilder( 'gl_features' );
$gl_features
	->addSelect(
		'features_style',
		array(
			'default_value' => 'with-expanding-image',
		)
	)
	->addChoices(
		[
			'with-expanding-image' => 'With Expanding Image',
		]
	)
	/* -- With Expanding Image Fields -- */
	->addText(
		'with_expanding_image_subtext',
		[
			'label' => 'Subtext',
		] 
	)
	->conditional( 'features_style', '==', 'with-expanding-image' )
	->addText(
		'with_expanding_image_title',
		[
			'label' => 'Title',
		] 
	)
	->conditional( 'features_style', '==', 'with-expanding-image' )
	->addTextarea(
		'with_expanding_image_description',
		[
			'label'     => 'Description',
			'new_lines' => 'br',
		] 
	)
	->conditional( 'features_style', '==', 'with-expanding-image' )
	->addRepeater(
		'with_expanding_image_repeater',
		[
			'label'        => 'Images',
			'button_label' => 'Add Image',
			'max'          => 3,
			'min'          => 3,
		] 
	)
	->addImage(
		'image',
		[
			'preview_size'  => 'medium',
			'label'         => __( 'Featured Image', 'greydientlab' ),
			'return_format' => 'id',
			'instructions'  => 'Recommended Dimension : ',
		] 
	)
	->conditional( 'features_style', '==', 'with-expanding-image' )
	->endRepeater()
	/* -- With Expanding Image Fields -- */
	
	->setLocation( 'block', '==', 'acf/gl-features' );

return $gl_features;
