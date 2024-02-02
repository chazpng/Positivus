<?php
/**
 * ACF Newsletter Section.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$newsletter = new StoutLogic\AcfBuilder\FieldsBuilder( 'newsletter' );
$newsletter
	->addSelect(
		'news_style',
		array(
			'default_value' => 'simple',
		)
	)

	->addChoices(
		array( 'simple' => 'Simple' ),
		array( 'card' => 'On Card' )
	)

	->addSelect(
		'simple_type',
		array(
			'default_value' => 'default',
		)
	)
	->conditional( 'news_style', '==', 'simple' )
	->addChoices(
		array( 'default' => 'Stacked' ),
		array( 'icon' => 'With Icon List' )
	)
	->addText( 'title' )
	->addTextArea( 'description' )
	->addWysiwyg(
		'label',
		array(
			'media_upload' => 0,
		)
	)

	->addTextArea( 'shortcode' )

	->setLocation( 'block', '==', 'acf/newsletter' );

return $newsletter;
