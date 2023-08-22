<?php
/**
 * Headers.
 *
 * ACF Headers.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$headers = new StoutLogic\AcfBuilder\FieldsBuilder( 'headers' );
$headers
	->addImage(
		'background_image',
		array(
			'preview_size'  => 'medium',
			'return_format' => 'id',
		)
	)
	->addText( 'subtitle' )
	->addText( 'title' )
	->addTextarea( 'info' )
	->addRepeater( 'links' )
		->addText( 'link_text' )
		->addPageLink( 'page_link' )
	->endRepeater()

	->addRepeater( 'stats' )
		->addText( 'count' )
		->addTextarea( 'info' )
	->endRepeater()

	->addRepeater( 'cards' )
		->addImage(
			'icon',
			array(
				'preview_size'  => 'medium',
				'return_format' => 'id',
			)
		)
		->addText( 'label' )
		->addTextarea( 'info' )
	->endRepeater()
	->setLocation( 'block', '==', 'acf/header' );

return $headers;
