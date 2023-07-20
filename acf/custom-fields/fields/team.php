<?php
/**
 * Stats Section.
 *
 * ACF Stats.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$team = new StoutLogic\AcfBuilder\FieldsBuilder( 'team' );
$team
	->addSelect(
		'team_style',
		array(
			'default_value' => 'with-small-images',
		)
	)
	->addChoices(
		array( 'full-width-with-vertical-images' => 'Full Width with Vertical Images' ),
		array( 'grid-with-large-rounded-images' => 'Grid with Large ROunded Images' ),
		array( 'grid-with-round-images' => 'Grid with Rounded Images' ),
		array( 'with-images-and-paragraph' => 'With Images and Paragraph' ),
		array( 'with-large-images' => 'With Large Images' ),
		array( 'with-medium-images' => 'With Medium Images' ),
		array( 'with-small-images' => 'With Small Images' ),
		array( 'with-vertical-images' => 'With Vertical Images' )
	)
	->addText( 'title' )
	->addTextarea( 'description' )
	->addRepeater( 'team_list' )
		->addImage(
			'avatar_image',
			array(
				'preview_size'  => 'medium',
				'label'         => __( 'Avatar Image', 'greydientlab' ),
				'return_format' => 'id',
			)
		)
		->addText( 'avatar_name' )
		->addText( 'position' )
		->addTextarea( 'avatar_description' )
		->conditional( 'team_style', '==', 'with-vertical-images' )
			->or( 'team_style', '==', 'with-large-images' )
			->or( 'team_style', '==', 'with-images-and-paragraph' )
			->or( 'team_style', '==', 'full-width-with-vertical-images' )

		->addText( 'avatar_address' )
		->conditional( 'team_style', '==', 'with-medium-images' )

		->addRepeater( 'social_links' )
		->conditional( 'team_style', '==', 'with-vertical-images' )
			->or( 'team_style', '==', 'with-large-images' )
			->or( 'team_style', '==', 'with-images-and-paragraph' )
			->or( 'team_style', '==', 'grid-with-large-rounded-images' )

		->addImage(
			'social_icon',
			array(
				'preview_size'  => 'medium',
				'label'         => __( 'Social Icon', 'greydientlab' ),
				'return_format' => 'id',
			)
		)
		->addText( 'social_name' )
		->addUrl( 'social_link' )
		->endRepeater()
	
	->endRepeater()

	->setLocation( 'block', '==', 'acf/team' );

	return $team;
