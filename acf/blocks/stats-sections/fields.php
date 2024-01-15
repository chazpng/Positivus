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

	->addSelect(
		'with_image_type',
		array(
			'default_value' => 'split-image',
		)
	)
	->conditional( 'stats_style', '==', 'with-image' )
	->addChoices(
		array( 'split-image' => 'Split with Image' ),
		array( 'background' => 'with Background Image' )
	)
	->addImage(
		'featured_image',
		array(
			'preview_size'  => 'medium',
			'return_format' => 'id',
		)
	)
	->conditional( 'stats_style', '==', 'with-image' )
	->addText( 'label' )
	->conditional( 'simple_type', '==', 'two-column' )
	->or( 'stats_style', '==', 'with-image' )
	->addText( 'title' )
	->conditional( 'simple_type', '==', 'grid' )
	->or( 'simple_type', '==', 'description' )
	->or( 'simple_type', '==', 'two-column' )
	->or( 'stats_style', '==', 'with-image' )

	->addTextarea( 'description' )
	->conditional( 'simple_type', '==', 'grid' )
	->or( 'stats_style', '==', 'with-image' )

	->addWysiwyg(
		'paragraph',
		array(
			'media_upload' => 0,
		)
	)
	->conditional( 'simple_type', '==', 'description' )
	->addWysiwyg(
		'first_column_paragraph',
		array(
			'media_upload' => 0,
		)
	)
	->conditional( 'simple_type', '==', 'two-column' )
	->addWysiwyg(
		'second_column_paragraph',
		array(
			'media_upload' => 0,
		)
	)
	->conditional( 'simple_type', '==', 'two-column' )
	->addRepeater(
		'stat',
		array(
			'max'   => '8',
			'label' => 'Add Stat',
		)
	)
	->addDatePicker(
		'event_date',
		array(
			'label' => 'Event Date',
		)
	)
		->conditional( 'simple_type', '==', 'timeline' )
	->addText( 'stat_heading' )
	->addText( 'stat_label' )
	->endRepeater()

	->setLocation( 'block', '==', 'acf/stats' );

return $stats;
