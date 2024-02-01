<?php
/**
 * ACF Dividers.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$dividers = new StoutLogic\AcfBuilder\FieldsBuilder( 'dividers' );
$dividers->addSelect(
	'type',
	array(
		'default_value' => 'label',
	)
)
	->addChoices(
		array( 'label' => 'With Label' ),
		array( 'icon' => 'With Icon' ),
		array( 'title' => 'With Title' ),
		array( 'button' => 'With Button' ),
		array( 'toolbar' => 'With Toolbar' )
	)

	->addText( 'label' )
		->conditional( 'type', '==', 'label' )

	->addImage(
		'icon',
		[
			'return_format' => 'ID',
		]
	)
	->conditional( 'type', '==', 'icon' )

	->addText( 'title' )
		->conditional( 'type', '==', 'title' )
			->or( 'type', '==', 'button' )

	->addSelect(
		'position',
		array(
			'default_value' => 'center',
		)
	)
	->conditional( 'type', '==', 'label' )
		->or( 'type', '==', 'title' )
	->addChoices(
		array( 'center' => 'Center' ),
		array( 'left' => 'Left' )
	)

	->addText( 'button_label' )
		->conditional( 'type', '==', 'button' )

	->addImage(
		'button_icon',
		[
			'return_format' => 'ID',
		]
	)
	->conditional( 'type', '==', 'button' )

	->addRepeater( 'toolbar' )
		->conditional( 'type', '==', 'toolbar' )
		->addImage(
			'icon',
			[
				'return_format' => 'ID',
			]
		)

->setLocation( 'block', '==', 'acf/dividers' );

return $dividers;
