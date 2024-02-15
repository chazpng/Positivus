<?php
/**
 * ACF team Section.
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
			'default_value' => 'simple',
		)
	)

	->addChoices(
		array( 'simple' => 'Simple' ),
		array( 'paragraph' => 'With short paragraph' )
	)

	->addSelect(
		'simple_type',
		array(
			'default_value' => 'simple',
		)
	)
	->conditional( 'team_style', '==', 'simple' )

	->addChoices(
		array( 'simple' => 'With small images' ),
		array( 'large-image' => 'With large images' ),
		array( 'round-image' => 'Grid with round images' ),
		array( 'dark-large' => 'Dark version with large images' ),
		array( 'large-round' => 'Grid with large round images' ),
		array( 'medium-dark' => 'With medium images on dark' )
	)

	->addSelect(
		'paragraph_type',
		array(
			'default_value' => 'with-para',
		)
	)
	->conditional( 'team_style', '==', 'paragraph' )

	->addChoices(
		array( 'with-para' => 'With image and short paragraph' ),
		array( 'verical-image' => 'With vertical images' ),
		array( 'full-vertical' => 'Full width with vertical images' )
	)

	->addText( 'title' )
	->addTextArea( 'description' )

	->addRepeater(
		'team_list',
		array(
			'label' => 'Team Member',
		)
	)
	->addImage(
		'avatar_image',
		array(
			'preview_size'  => 'medium',
			'return_format' => 'id',
		)
	)
	->addText( 'avatar_name' )
	->addText( 'job_position' )
	->addTextArea( 'paragraph' )
	->conditional( 'team_style', '==', 'paragraph' )

	->addRepeater(
		'socials_list',
		array(
			'label' => 'Social Link',
		)
	)
	->addImage(
		'social_icon',
		array(
			'preview_size'  => 'medium',
			'return_format' => 'id',
		)
	)
	->addUrl( 'social_link' )
	->endRepeater()

	->setLocation( 'block', '==', 'acf/team' );

return $team;
