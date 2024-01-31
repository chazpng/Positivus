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
		array( 'grid' => 'Grid Layout' ),
	)
    ->addText( 'heading' )
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
		->addColorPicker( 'background_color' )
        ->addRepeater( 'images' )
            ->addImage( 'image' )

->setLocation( 'block', '==', 'acf/logos' );

return $logos;
