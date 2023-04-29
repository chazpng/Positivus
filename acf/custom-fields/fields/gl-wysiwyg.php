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

$gl_wysiwyg = new StoutLogic\AcfBuilder\FieldsBuilder( 'gl_wysiwyg' );
$gl_wysiwyg
	->addWysiwyg(
		'paragraph',
		array(
			'media_upload' => 0,
		)
	)
	->setLocation( 'block', '==', 'gl/wysiwyg' );

return $gl_wysiwyg;
