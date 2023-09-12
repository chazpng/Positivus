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

$features = new StoutLogic\AcfBuilder\FieldsBuilder( 'features' );
$features
	->addSelect(
		'features_style',
		array(
			'default_value' => 'simple',
		)
	)
	->addChoices(
		array( 'product' => 'Product' ),
		array( 'simple' => 'Simple' )
	)

	->addSelect(
		'panel_type',
		array(
			'default_value' => 'none',
		)
	)
		->conditional( 'features_style', '==', 'product' )
		->addChoices(
			array( 'none' => 'None' ),
			array( 'contained-panel' => 'Contained in Panel' ),
			array( 'featured-panel' => 'Featured in Panel' )
		)

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

	->addImage(
		'featured_image',
		array(
			'preview_size'  => 'medium',
			'label'         => __( 'Featured Image', 'greydientlab' ),
			'return_format' => 'id',
		)
	)
		->conditional( 'features_style', '==', 'product' )
			->and( 'use_wysiwyg', '==', 0 )
		->or( 'features_style', '==', 'simple' )
		->or( 'features_style', '==', 'large-screenshot' )
		->or( 'features_style', '==', 'with-testimonial' )

	->addSelect(
		'list_column_style',
		array(
			'default_value' => '2',
		)
	)
		->conditional( 'features_style', '!=', 'product' )
		->addChoices(
			array( 'two-inline' => 'Two (Inline Layout)' ),
			array( 'two-block' => 'Two (Block Layout)' ),
			array( 'three-inline' => 'Three (Inline Layout)' ),
			array( 'three-block' => 'Three (Block Layout)' ),
			array( 'three-icon-block' => 'Three (Icon Block)' )
		)

	->addRepeater( 'list' )
		->conditional( 'features_style', '==', 'product' )
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
		->addTextArea( 'list_description' )

		->addTrueFalse(
			'is_external_link',
			array(
				'default_value' => 0,
			)
		)
		->addText( 'link_text' )
		->addUrl( 'url' )
			->conditional( 'is_external_link', '==', 1 )
		->addPageLink( 'page_link' )
			->conditional( 'is_external_link', '==', 0 )

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
	->endRepeater()

	->addTrueFalse(
		'use_wysiwyg',
		array(
			'default_value' => 0,
		)
	)
		->conditional( 'features_style', '!=', 'simple' )

	->addWysiwyg(
		'html_code',
		array(
			'media_upload' => 0,
			'tabs'         => 'text',
			'toolbar'      => 'basic',
		)
	)
		->conditional( 'use_wysiwyg', '==', 1 )

	->addTrueFalse(
		'align_image_to_the_left',
		array(
			'default_value' => 0,
		)
	)
		->conditional( 'features_style', '==', 'product' )

	->setLocation( 'block', '==', 'acf/features' );

return $features;
