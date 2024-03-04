<?php
/**
 * Content Fields.
 *
 * ACF GL Text.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$content = new StoutLogic\AcfBuilder\FieldsBuilder( 'content' );
$content
->addSelect(
	'content_style',
	array(
		'default_value' => 'simple',
	)
)

->addChoices(
	array( 'simple' => 'Centered' ),
	array( 'split' => 'Split with image' ),
	array( 'stats' => 'With testimonial and stats' ),
	array( 'screenshot' => 'Two columns with screenshot' ),
	array( 'testimonial' => 'With testimonial' ),
	array( 'sticky' => 'With sticky product screenshot' )
)
->addText( 'eyebrow_text' )
->addText( 'title' )
->addTextArea( 'description' )
->addImage(
	'featured_image',
	array(
		'preview_size'  => 'medium',
		'return_format' => 'id',
	)
)
->conditional( 'content_style', '==', 'split' )
->or( 'content_style', '==', 'sticky' )
->or( 'content_style', '==', 'screenshot' )
->or( 'content_style', '==', 'stats' )
->addTextArea( 'quote' )
	->conditional( 'content_style', '==', 'testimonial' )
	->or( 'content_style', '==', 'stats' )
->addText( 'quotee' )
	->conditional( 'content_style', '==', 'testimonial' )
	->or( 'content_style', '==', 'stats' )
->addText( 'social_username' )
	->conditional( 'content_style', '==', 'testimonial' )
	->addText( 'position' )
	->conditional( 'content_style', '==', 'stats' )
->addImage(
	'avatar',
	array(
		'preview_size'  => 'medium',
		'return_format' => 'id',
	)
)
	->conditional( 'content_style', '==', 'testimonial' )
	->addImage(
		'company_logo',
		array(
			'preview_size'  => 'medium',
			'return_format' => 'id',
		)
	)
		->conditional( 'content_style', '==', 'stats' )
->addFlexibleContent(
	'content'
)
	->addLayout( 'paragraph' )
		->addText( 'content_title' )
		->addTextArea(
			'content_paragraph',
			array(
				'new_lines' => 'br',
			)
		)
	->addLayout( 'image' )
	->addImage(
		'featured_image',
		array(
			'preview_size'  => 'medium',
			'return_format' => 'id',
		)
	)
	->addText( 'image_description' )
	->addImage(
		'description_icon',
		array(
			'preview_size'  => 'medium',
			'return_format' => 'id',
		)
	)
	->addLayout( 'bullets_list_with_icon' )
		->addRepeater(
			'content_bullets',
			array(
				'layout' => 'block',
			)
		)
		->addImage(
			'icon_image',
			array(
				'preview_size'  => 'medium',
				'return_format' => 'id',
			)
		)
		->addText( 'bullet_title' )
		->addText( 'bullet_description' )
		->endRepeater()
	->addLayout( 'stats' )
		->addRepeater( 'stats_repeater' )
			->addText( 'title' )
			->addText( 'value' )
		->endRepeater()
	->addLayout( 'url_link' )
	->addSelect(
		'button_style',
		array(
			'default_value' => 'simple',
		)
	)
	->addChoices(
		array( 'simple' => 'Simple' ),
		array( 'background' => 'With Background Color' )
	)
		->addUrl( 'url' )
		->addText( 'link_title' )
	->addLayout( 'testimonial' )
		->addTextArea(
			'quote',
			array(
				'new_lines' => 'br',
			)
		)
		->addText( 'avatar_name' )
		->addText( 'position' )
		->addImage(
			'avatar',
			array(
				'preview_size'  => 'medium',
				'return_format' => 'id',
			)
		)

	->setLocation( 'block', '==', 'acf/content' );

return $content;
