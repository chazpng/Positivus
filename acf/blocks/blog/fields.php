<?php
/**
 * ACF Media Objects.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$blog = new StoutLogic\AcfBuilder\FieldsBuilder( 'blog' );
$blog->addSelect(
	'blog_type',
	array(
		'default_value' => 'simple',
	)
)
	->addChoices(
		array( 'simple' => 'Single Column' ),
		array( 'three-column' => 'Three Column' ),
		array( 'featured' => 'With Featured Post' ),
		array( 'photo-list' => 'With Photo List' )
	)

	->addSelect(
		'single_style',
		array(
			'default_value' => 'simple',
		)
	)
		->conditional( 'blog_type', '==', 'simple' )
	->addChoices(
		array( 'simple' => 'Single Column' ),
		array( 'image' => 'Single Column with images' )
	)

	->addSelect(
		'three_column_style',
		array(
			'default_value' => 'simple',
		)
	)
		->conditional( 'blog_type', '==', 'three-column' )
	->addChoices(
		array( 'simple' => 'Three Column' ),
		array( 'image' => 'Three Column with images' ),
		array( 'bg-image' => 'Three Column with background images' )
	)

	->addRelationship(
		'select_post',
		array(
			'post_type' => array( 'post' ),
			'max'       => 1,
		)
	)
	->conditional( 'blog_type', '==', 'featured' )

		->addText( 'title' )
		->conditional( 'blog_type', '!=', 'featured' )
		->addTextArea( 'description' )
		->conditional( 'blog_type', '!=', 'featured' )
		->addText( 'button_name' )
		->conditional( 'blog_type', '==', 'featured' )

		->addNumber(
			'post', 
			array(
				'label'         => 'Number of post per page?',
				'default_value' => '1',
				'max'           => 10,
			)
		)
		->conditional( 'blog_type', '!=', 'photo-list' )
		->addImage(
			'featured_image',
			array(
				'preview_size'  => 'medium',
				'return_format' => 'id',
			)
		)
		->addRepeater(
			'blog_repeater',
			array(
				'label' => 'Blog',
			)
		)
		->conditional( 'blog_type', '==', 'photo-list' )
		->addText( 'blog_title' )
		->addTextArea( 'blog_description' )
		->addText( 'value' )
		->addText( 'address' )
		->addUrl( 'blog_url' )
		->endRepeater()
		->addtext( 'button_text' )
		->conditional( 'blog_type', '==', 'photo-list' )
		->addUrl( 'button_url' )
		->conditional( 'blog_type', '==', 'photo-list' )


->setLocation( 'block', '==', 'acf/blog' );

return $blog;
