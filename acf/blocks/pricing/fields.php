<?php
/**
 * ACF pricing Section.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$pricing = new StoutLogic\AcfBuilder\FieldsBuilder( 'pricing' );
$pricing
	->addSelect(
		'pricing_style',
		array(
			'default_value' => 'simple',
		)
	)

	->addChoices(
		array( 'simple' => 'Simple' ),
		array( 'with-image' => 'With Images' ),
		array( 'stepped' => 'Stepped' )
	)

	->addSelect(
		'simple_type',
		array(
			'default_value' => 'default',
		)
	)
	->conditional( 'pricing_style', '==', 'simple' )
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
	->conditional( 'pricing_style', '==', 'with-image' )
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
	->conditional( 'pricing_style', '==', 'with-image' )
	->addText( 'label' )
	->conditional( 'simple_type', '==', 'two-column' )
	->or( 'pricing_style', '==', 'with-image' )
	->addText( 'title' )
	->conditional( 'simple_type', '==', 'grid' )
	->or( 'simple_type', '==', 'description' )
	->or( 'simple_type', '==', 'two-column' )
	->or( 'pricing_style', '==', 'with-image' )
	->or( 'pricing_style', '==', 'stepped' )

	->addTextarea( 'description' )
	->conditional( 'simple_type', '==', 'grid' )
	->or( 'pricing_style', '==', 'with-image' )
	->or( 'pricing_style', '==', 'stepped' )

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
			'max'   => '4',
			'label' => 'Stat',
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
	->addTextarea( 'stat_description' )
	->conditional( 'pricing_style', '==', 'stepped' )
	->endRepeater()
	->addRepeater(
		'stepped_pricing_1',
		array(
			'max'   => '1',
			'label' => 'Stat',
		)
	)

	->setLocation( 'block', '==', 'acf/pricing' );

return $pricing;
