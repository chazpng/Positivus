<?php
/**
 * Logo Section.
 *
 * ACF Logos Section.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$logos = new StoutLogic\AcfBuilder\FieldsBuilder( 'logos' );
$logos->addSelect(
	'logos_style',
	array(
		'default_value' => 'simple',
	)
)

	->addChoices(
		array( 'simple' => 'Simple' ),
		array( 'split' => 'Two Column' ),
		array( 'grid' => 'Grid Layout' )
	)
	->addText( 'heading' )
		->conditional( 'logos_style', '!=', 'grid' )

	->addTextArea( 'description' )
		->conditional( 'logos_style', '==', 'split' )
	
	->addText( 'cta_text' )
		->conditional( 'logos_style', '==', 'simple' )
	->addLink( 'cta_link' )
		->conditional( 'logos_style', '==', 'simple' )
	->addLink( 'cta_button_link' )
		->conditional( 'logos_style', '==', 'split' )
	->addLink( 'cta_button_link_secondary' )
		->conditional( 'logos_style', '==', 'split' )
			

	->addSelect(
		'heading_alignment',
		array(
			'default_value' => 'left',
		)
	)
		->addChoices(
			array( 'left' => 'Left' ),
			array( 'center' => 'Center' )
		)


	->conditional( 'logos_style', '==', 'simple' )
		->addRepeater( 'images' )
			->addImage( 'image' )

->setLocation( 'block', '==', 'acf/logos' );

return $logos;
