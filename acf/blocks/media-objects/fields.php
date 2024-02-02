<?php
/**
 * ACF Media Objects.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$media_objects = new StoutLogic\AcfBuilder\FieldsBuilder( 'media_objects' );
$media_objects->addSelect(
	'type',
	array(
		'default_value' => 'basic',
	)
)
	->addChoices(
		array( 'basic' => 'Basic' ),
		array( 'center' => 'Aligned to center' ),
		array( 'bottom' => 'Aligned to bottom' ),
		array( 'stretched' => 'Stretched to fit' ),
		array( 'right' => 'Media on right' ),
		array( 'basic-responsive' => 'Basic responsive' ),
		array( 'wide-responsive' => 'Wide responsive' ),
		array( 'nested' => 'Nested' )
	)
	->addImage(
		'featured_image',
		[
			'return_format' => 'ID',
		]
	)
	->addText( 'title' )
	->addWysiwyg(
		'description',
		array(
			'media_upload' => 0,
		)
	)
	->addRepeater( 'media_objects' )
		->conditional( 'type', '==', 'nested' )
		->addImage(
			'featured_image',
			[
				'return_format' => 'ID',
			]
		)
		->addText( 'title' )
		->addWysiwyg(
			'description',
			array(
				'media_upload' => 0,
			)
		)

->setLocation( 'block', '==', 'acf/media-objects' );

return $media_objects;
