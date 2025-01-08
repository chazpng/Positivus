<?php
/**
 * ACF Greydient Lab Hero Section.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$gl_hero = new StoutLogic\AcfBuilder\FieldsBuilder( 'gl_hero' );
$gl_hero
	->addSelect(
		'hero_style',
		array(
			'default_value' => 'full',
		)
	)
	->addChoices(
		[
			'full'   => 'Full',
			'simple' => 'Simple',
			
		]
	)

	->addImage(
		'hero_background_image',
		[
			'preview_size'  => 'medium',
			'label'         => __( 'Background Image', 'greydientlab' ),
			'return_format' => 'url',
			'instructions'  => 'Recommended Dimension : ',
		] 
	)
	->conditional( 'hero_style', '==', 'full' )

	->addImage(
		'mobile_background_image',
		[
			'preview_size'  => 'medium',
			'label'         => __( 'Mobile Background Image', 'greydientlab' ),
			'return_format' => 'url',
			'instructions'  => 'Recommended Dimension : ',
		] 
	)
	->conditional( 'hero_style', '==', 'full' )

	->addTextarea(
		'hero_caption',
		[
			'label' => 'Caption',
		] 
	)
	->conditional( 'hero_style', '==', 'full' )

	->addText(
		'hero_button_text',
		[
			'label'     => 'Button Text',
		] 
	)
	->conditional( 'hero_style', '==', 'full' )

	->addPageLink(
		'hero_button_url',
		[
			'label'        => 'Button Url',
			'instructions' => 'Select a page for the button to link to.',
			'post_type'    => [ 'page' ], // Restrict to specific post types (optional).
			'allow_null'   => 0,       // Allow null value.
			'multiple'     => 0,         // Allow selecting multiple links.
		]
	)
	->conditional( 'hero_style', '==', 'full' )

	->setLocation( 'block', '==', 'acf/gl-hero' );

return $gl_hero;
