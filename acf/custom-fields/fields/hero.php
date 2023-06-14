<?php
/**
 * GL Wysiwyg.
 *
 * ACF GL Text.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$hero = new StoutLogic\AcfBuilder\FieldsBuilder( 'hero' );
$hero
	->addText( 'title' )
	->addWysiwyg(
		'paragraph',
		array(
			'media_upload' => 0,
		)
	)
	->addRepeater( 'links' )
		->addText( 'link_text' )
		->addUrl( 'link' )
	->endRepeater()

	->addRepeater( 'stats' )
		->addText( 'number' )
		->addUrl( 'label' )
	->endRepeater()
	->setLocation( 'block', '==', 'acf/hero' );

return $hero;
