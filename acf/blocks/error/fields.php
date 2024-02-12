<?php
/**
 * ACF Error Section.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$error_page = new StoutLogic\AcfBuilder\FieldsBuilder( 'error' );
$error_page

	->addSelect(
		'error_style',
		array(
			'default_value' => 'default',
		)
	)
	->addChoices(
		array( 'default' => 'Simple' ),
		array( 'image' => 'With Background Image' ),
		array( 'split' => 'with Split Image' )
	)

	->addText( 'eyebrow_label' )
	->addText( 'title' )
	->addTextArea( 'description' )
	->addImage(
		'background_image',
		array(
			'preview_size'  => 'medium',
			'return_format' => 'id',
		)
	)
	->conditional( 'error_style', '!=', 'default' )

	->addRepeater(
		'list',
		array(
			'max'   => '4',
			'label' => 'List',
		)
	)
	->addImage(
		'list_icon',
		array(
			'preview_size'  => 'medium',
			'return_format' => 'id',
		)
	)
	->addText( 'title' )
	->addTextArea( 'description' )
	->addUrl( 'link' )
	->endRepeater()

	->addText( 'button_text' )
	->conditional( 'error_style', '==', 'default' )
	->addUrl( 'button_link' )
	->conditional( 'error_style', '==', 'default' )
	->addText( 'link_text' )
	->addUrl( 'link_url' )

	->setLocation( 'block', '==', 'acf/error' );

return $error_page;
