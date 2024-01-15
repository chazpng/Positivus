<?php
/**
 * ACF stats Section.
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
		array( 'with-image' => 'With Images' )
	)

	->addSelect(
		'simple_type',
		array(
			'default_value' => 'default',
		)
	)
	->conditional( 'stats_style', '==', 'simple' )
	->addChoices(
		array( 'default' => 'Default' ),
		array( 'grid' => 'Grid' ),
		array( 'timeline' => 'Timeline' ),
		array( 'description' => 'With Description' ),
		array( 'two-column' => 'Two Column with Description' )
	)

	->addText( 'title' )
		->conditional( 'simple_type', '==', 'grid' )
		->or( 'simple_type', '==', 'description' ) 
		->or( 'simple_type', '==', 'two-column' ) 

	->addTextarea( 'description' )
		->conditional( 'simple_type', '==', 'grid' )
		->or( 'simple_type', '==', 'description' ) 
		->or( 'simple_type', '==', 'two-column' ) 


	->addRepeater(
		'stat',
		array(
			'max'   => '8',
			'label' => 'Add Stat',
		)
	)
	->conditional( 'stats_style', '==', 'simple' )
	->addText( 'stat_heading' )
	->addText( 'stat_label' )
	->endRepeater()

	->setLocation( 'block', '==', 'acf/stats' );

return $stats;
