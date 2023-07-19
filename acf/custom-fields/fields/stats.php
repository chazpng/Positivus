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

$stats = new StoutLogic\AcfBuilder\FieldsBuilder( 'stats' );
$stats
	->addSelect(
		'stats_style',
		array(
			'default_value' => 'simple',
		)
	)
	->addChoices(
		array( 'simple' => 'Simple' ),
		array( 'simple-grid' => 'Simple Grid' ),
		array( 'split-image' => 'Split Image' ),
		array( 'stepped' => 'Stepped' ),
		array( 'timeline' => 'Timeline' ),
		array( 'with-background-image' => 'With Background Image' ),
		array( 'with-description' => 'With Description' ),
		array( 'with-two-column-description' => 'With Two Column Description' )
	)
	->addText( 'title' )
	->addTextarea( 'description' )
	->addTextarea( 'description_two' )
		->conditional( 'stats_style', '==', 'with-description' )
	->addText( 'label' )
	->conditional( 'stats_style', '==', 'split-image' )

	->addImage(
		'background_image',
		array(
			'preview_size'  => 'medium',
			'label'         => __( 'Background Image', 'greydientlab' ),
			'return_format' => 'id',
		)
	)
	->conditional( 'stats_style', '==', 'split-image' )
			->or( 'stats_style', '==', 'with-background-image' )
	->addRepeater( 'list' )
		->addText( 'title' )
		->addTextarea( 'description' )

	->setLocation( 'block', '==', 'acf/stats' );

	return $stats;
