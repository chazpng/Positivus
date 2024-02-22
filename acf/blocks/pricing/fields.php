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
		array( 'four-tiers-toggle' => 'Four tiers with toggle' ),
		array( 'three-tiers-feature' => 'Three tiers with feature comparison' )
	)

	->addText( 'eyebrow_label' )
	->addText( 'title' )
	->addTextArea( 'description' )
	->addText( 'price_title' )
	->conditional( 'pricing_style', '==', 'without-tiers' )
	->addText( 'price_description' )
	->conditional( 'pricing_style', '==', 'without-tiers' )
	->addText( 'price_list_title' )
	->conditional( 'pricing_style', '==', 'without-tiers' )
	->addRepeater(
		'price_features_list',
		array(
			'label' => 'Features',
			'max'   => '4',
		)
	)
	->conditional( 'pricing_style', '==', 'without-tiers' )
	->addText( 'price_features' )
	->endRepeater()

	->addRepeater(
		'price_list',
		array(
			'label' => 'Price',
			'max'   => '1',
		)
	)
	->conditional( 'pricing_style', '==', 'without-tiers' )
	->addText( 'price_label' )
	->addText( 'price' )
	->addText( 'price_button_text' )
	->addUrl( 'price_link' )
	->addText( 'price_footer' )
	->endRepeater()

	->addRepeater(
		'without_toggle_repeater',
		array(
			'label' => 'Card',
			'max'   => '4',
		)
	)
	->conditional( 'pricing_style', '==', 'with-tiers' )
	->addText( 'tier_price_title' )
	->addTextArea( 'tier_price_description' )
	->addText( 'tier_price' )
	->addText( 'tier_price_subscription' )
	->addRepeater(
		'tier_feature_list',
		array(
			'label' => 'Features',
		)
	)
	->addText( 'tier_features' )
	->endRepeater()
	->addText( 'price_button_text' )
	->addUrl( 'price_link' )
	->endRepeater()



	->addRepeater(
		'extra_tier_repeater',
		array(
			'label' => 'Extra Tier',
			'max'   => '4',
		)
	)
	->conditional( 'pricing_style', '==', 'with-tiers' )
	->addText( 'tier_price_title' )
	->addTextArea( 'tier_price_description' )
	->addText( 'price_button_text' )
	->addUrl( 'price_link' )
	->endRepeater()
	
	->addRepeater(
		'pricing_structure_list',
		array(
			'label' => 'Subscription',
		)
	)
	->addText( 'pricing_subscription' )
	->addRepeater(
		'with_toggle_repeater',
		array(
			'label' => 'Tier',
			'max'   => '4',
		)
	)
	->addCheckbox(
		'checkbox_highlight',
		array(
			'label'         => 'Highlight Card',
			'choices'       => array( 'Highlight Card?' ),
			'default_value' => array( 0 ),
			'return_format' => 'value',
		)
	)
	->addSelect(
		'highlight_type',
		array(
			'default_value' => 'bordered',
		)
	)
	->conditional( 'checkbox_highlight', '!=', 0 )
	->addChoices(
		array( 'bordered' => 'Border' ),
		array( 'emphasized' => 'Emphasized' )
	)

	->addText( 'tier_price_title' )
	->addText( 'tier_price_label' )
	->addTextArea( 'tier_price_description' )
	->addText( 'tier_price' )
	->addText( 'tier_price_subscription' )
	->addRepeater(
		'tier_feature_list',
		array(
			'label' => 'Features',
		)
	)
	->addText( 'tier_features' )
	->endRepeater()
	->addText( 'price_button_text' )
	->addUrl( 'price_link' )
	->endRepeater()
	->endRepeater()
	->setLocation( 'block', '==', 'acf/pricing' );

return $pricing;
