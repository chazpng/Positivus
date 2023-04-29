<?php
/**
 * ACF GL Tailwind Alert Fields.
 *
 * This is an example of how to create an ACF Banner Block.
 * Make sure that the location (setLocation) exists in the
 * acf/blocks and should match the name in block.json file
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$gl_alert = new StoutLogic\AcfBuilder\FieldsBuilder( 'gl_alert' );
$gl_alert
	->addImage(
		'icon',
		array(
			'preview_size'  => 'small',
			'return_format' => 'url',
		)
	)
	->addWysiwyg(
		'paragraph',
		array(
			'media_upload' => 0,
		)
	)
	->addTrueFalse(
		'is_dismissible',
		array(
			'instructions'  => 'Enable it if the alert can be dismissed.',
			'default_value' => 0,
		)
	)
	->setLocation( 'block', '==', 'gl/alert' );

return $gl_alert;
