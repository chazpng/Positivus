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
			'default_value' => 'without-tiers',
		)
	)

	->addChoices(
		array( 'without-tiers' => 'Without Tiers' ),
		array( 'with-tiers' => 'With Tiers' ),
		array( 'with-toggle' => 'With Toggle' )
	)

	->addSelect(
		'without_tiers_type',
		array(
			'default_value' => 'simple',
		)
	)
	->conditional( 'pricing_style', '==', 'without-tiers' )
	->addChoices(
		array( 'simple' => 'Simple' ),
		array( 'comparison' => 'With Comparison' )
	)

	->addSelect(
		'with_tiers_type',
		array(
			'default_value' => 'two-tiers',
		)
	)
	->conditional( 'pricing_style', '==', 'with-tiers' )
	->addChoices(
		array( 'two-tiers' => 'Two tiers' ),
		array( 'two-tiers-emp' => 'Two tiers with emphasized tier' ),
		array( 'two-tiers-extra' => 'Two tiers with extra tier' ),
		array( 'three-tiers' => 'Three tiers' ),
		array( 'three-tiers-divider' => 'Three tiers with divider' )
	)

	->addSelect(
		'with_toggle_type',
		array(
			'default_value' => 'three-tiers-with-toggle',
		)
	)
	->conditional( 'pricing_style', '==', 'with-toggle' )
	->addChoices(
		array( 'three-tiers-toggle' => 'Three tiers with toggle' ),
		array( 'three-tiers-emp' => 'Three tiers with emphasized tier' ),
		array( 'three-tiers-feature' => 'Three tiers with feature comparison' ),
		array( 'four-tiers' => 'Four tiers with toggle' )
	)

	->addText( 'eyebrow_label' )
	->addText( 'title' )
	->addTextArea( 'description' )

	->addText( 'price_title' )
	->addText( 'price_description' )
	->addText( 'price_list_title' )
	->addRepeater(
		'price_features_list',
		array(
			'label' => 'Features',
			'max'   => '4',
		)
	)
	->addText( 'price_features' )
	->endRepeater()

	->addRepeater(
		'price_list',
		array(
			'label' => 'Price',
			'max'   => '1',
		)
	)
	->addText( 'price_label' )
	->addText( 'price' )
	->addText( 'price_button_text' )
	->addUrl( 'price_link' )
	->addText( 'price_footer' )
	->endRepeater()

	->addRepeater(
		'tier_price_list',
		array(
			'label' => 'Tier',
			'max'   => '3',
		)
	)
	->addText( 'tier_price_title' )
	->addText( 'tier_price_label' )
	->addTextArea( 'tier_price_description' )
	->addText( 'tier_price' )
	->addText( 'tier_price_date' )
	->addRepeater(
		'tier_feature_list',
		array(
			'label' => 'Tier',
		)
	)
	->addText( 'tier_features' )
	->endRepeater()
	->addText( 'price_button_text' )
	->addUrl( 'price_link' )
	->endRepeater()

	->addRepeater(
		'two_tier_price_list',
		array(
			'label' => 'Tier',
			'max'   => '2',
		)
	)
	->addText( 'tier_price_title' )
	->addTextArea( 'tier_price_description' )
	->addText( 'tier_price' )
	->addText( 'tier_price_date' )
	->addRepeater(
		'tier_feature_list',
		array(
			'label' => 'Tier',
		)
	)
	->addText( 'tier_features' )
	->endRepeater()
	->addText( 'price_button_text' )
	->addUrl( 'price_link' )
	->endRepeater()

	->addCheckbox(
		'checkbox_field',
		array(
			'label'         => 'Emphasized Tier',
			'choices'       => array( 'emphasized tier?' ),
			'default_value' => array( 0 ),
			'return_format' => 'value',
		)
	)
	->conditional( 'with_tiers_type', '==', 'two-tiers' )


	->setLocation( 'block', '==', 'acf/pricing' );

return $pricing;
