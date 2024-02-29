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
		array( 'with-tiers' => 'Without Toggle' ),
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
	->and( 'without_tiers_type', '==', 'simple' )
	->addText( 'price_description' )
	->conditional( 'pricing_style', '==', 'without-tiers' )
	->and( 'without_tiers_type', '==', 'simple' )
	->addText( 'price_list_title' )
	->conditional( 'pricing_style', '==', 'without-tiers' )
	->and( 'without_tiers_type', '==', 'simple' )
	->addRepeater(
		'price_features_list',
		array(
			'label' => 'Features',
			'max'   => '4',
		)
	)
	->conditional( 'pricing_style', '==', 'without-tiers' )
	->and( 'without_tiers_type', '==', 'simple' )
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
	->and( 'without_tiers_type', '==', 'simple' )
	->addText( 'price_label' )
	->addText( 'price' )
	->addText( 'price_button_text' )
	->addUrl( 'price_link' )
	->addText( 'price_footer' )
	->endRepeater()

	->addRepeater(
		'two_tier_repeater',
		array(
			'label' => 'Tier',
			'max'   => '2',
		)
	)
	->conditional( 'pricing_style', '==', 'with-tiers' )
	->conditional( 'with_tiers_type', '==', 'two-tiers' )
	->or( 'with_tiers_type', '==', 'two-tiers-emp' )
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
		'three_tier_repeater',
		array(
			'label' => 'Tier',
			'max'   => '3',
		)
	)
	->conditional( 'with_tiers_type', '==', 'three-tiers' )
	->addCheckbox(
		'checkbox_highlight',
		array(
			'label'         => 'Highlight Card',
			'choices'       => array( 'Highlight Card?' ),
			'default_value' => array( 0 ),
			'return_format' => 'value',
		)
	)
	->addText( 'tier_price_label' )
	->conditional( 'checkbox_highlight', '!=', 0 )
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
		'without_toggle_repeater',
		array(
			'label' => 'Card',
			'max'   => '6',
		)
	)
	->conditional( 'pricing_style', '==', 'with-tiers' )
	->conditional( 'with_tiers_type', '==', 'three-tiers-divider' )
	->or( 'with_tiers_type', '==', 'two-tiers-extra' )
	->addText( 'tier_price_title' )
	->addTextArea( 'tier_price_description' )
	->addText( 'tier_price' )
	->addText( 'tier_label' )
	->conditional( 'with_tiers_type', '==', 'three-tiers-divider' )
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
	->and( 'with_tiers_type', '==', 'two-tiers-extra' )
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
	->conditional( 'pricing_style', '==', 'with-toggle' )
	->and( 'with_toggle_type', '==', 'four-tiers-toggle' )
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

	->addRepeater(
		'main_container',
		array(
			'layout' => 'block',
			'min'    => '1',
			'max'    => '1',
		)
	)
	->conditional( 'pricing_style', '==', 'without-tiers' )
	->and( 'without_tiers_type', '==', 'comparison' )

	->addRepeater(
		'price_list_repeater',
		array(
			'layout' => 'block',
		)
	)
	->addText( 'tier_price_title' )
	->addText( 'tier_price' )
	->addText( 'tier_price_subscription' )
	->addText( 'price_button_text' )
	->addUrl( 'price_link' )
	->endRepeater()

	->addRepeater(
		'feature_list',
		array(
			'layout' => 'block',
		)
	)
	->addText( 'feature_title' )
	->addRepeater(
		'specs',
		array(
			'layout' => 'block',
		)
	)
	->addText( 'spec_name' )
	->addRepeater(
		'tier_specs',
		array(
			'layout' => 'block',
		)
	)
	->addFlexibleContent(
		'content',
		array(
			'max' => 1,
		)
	)
	->addLayout( 'text' )
	->addText( 'spec' )
	->addLayout( 'checkmark' )
	->addTrueFalse( 'enable' )
	->addLayout( 'bullets' )
	->addRepeater( 'bullet' )
	->addText( 'value' )
	->endRepeater()
	->addLayout( 'textarea' )
	->addTextArea(
		'content',
		array(
			'new_lines' => 'br',
		)
	)
	->addLayout( 'icons' )
	->addRepeater(
		'icon',
		array(
			'layout' => 'block',
		)
	)
	->addImage(
		'icon_image',
		array(
			'return_format' => 'url',
		)
	)
	->endRepeater()
	->endRepeater()
	->endRepeater()
	->endRepeater()
	->endRepeater()

	->addRepeater(
		'mobile_repeater',
		array(
			'layout' => 'block',
		)
	)
	->conditional( 'pricing_style', '==', 'without-tiers' )
	->and( 'without_tiers_type', '==', 'comparison' )
	->addCheckbox(
		'checkbox_highlight',
		array(
			'label'         => 'Highlight Header',
			'choices'       => array( 'Highlight Header?' ),
			'default_value' => array( 0 ),
			'return_format' => 'value',
		)
	)
	->addText( 'tier_title' )
	->addText( 'tier_price' )
	->addText( 'tier_subscription' )
	->addText( 'tier_button' )
	->addUrl( 'tier_link' )
	->addRepeater(
		'featured_list_repeater',
		array(
			'layout' => 'block',
		)
	)
	->addText( 'features' )
	->addText( 'features_label' )
	->endRepeater()
	->endRepeater()
	

	->addRepeater(
		'toggle_comparison_repeater',
		array(
			'layout' => 'block',
			'label'  => 'Toggle Comparison Repeater',
			'min'    => '1',
			'max'    => '1',
		)
	)
	->conditional( 'pricing_style', '==', 'with-toggle' )
	->and( 'with_toggle_type', '==', 'three-tiers-feature' )

	->addRepeater(
		'header',
		array(
			'layout' => 'block',
			'label'  => 'Head',
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
	->addText( 'title' )
	->addTextArea( 'description' )
	->endRepeater()
	->addRepeater(
		'main_feature',
		array(
			'layout' => 'block',
			'label'  => 'Feature',
		)
	)
	->addText( 'title' )

	->addRepeater(
		'feature',
		array(
			'layout' => 'block',
			'label'  => 'Content',
		)
	)
	->addText( 'features' )
	->addRepeater(
		'checkmark_list',
		array(
			'layout' => 'block',
		)
	)
	->addCheckbox(
		'checkmark',
		array(
			'label'         => 'Use Checkmark?',
			'choices'       => array( 'Use Checkmark?' ),
			'default_value' => array( 0 ),
			'return_format' => 'value',
		)
	)
	->addCheckbox(
		'enabled',
		array(
			'label'         => 'Enable Check',
			'choices'       => array( 'Enable Check?' ),
			'default_value' => array( 0 ),
			'return_format' => 'value',
		)
	)
	->conditional( 'checkmark', '!=', 0 )
	->addText( 'custom_text' )
	->conditional( 'checkmark', '==', 0 )
	->endRepeater()
	->endRepeater()
	->endRepeater()

	->endRepeater()
	->addRepeater(
		'toggle_comparison_mb_repeater',
		array(
			'layout' => 'block',
		)
	)
	->conditional( 'pricing_style', '==', 'with-toggle' )
	->and( 'with_toggle_type', '==', 'three-tiers-feature' )
	->addCheckbox(
		'checkbox_highlight',
		array(
			'label'         => 'Highlight Card',
			'choices'       => array( 'Highlight Card?' ),
			'default_value' => array( 0 ),
			'return_format' => 'value',
		)
	)
	->addText( 'title' )
	->addTextArea( 'description' )
	->addRepeater(
		'cards_list',
		array(
			'layout' => 'block',
		)
	)
	->addText( 'card_title' )
	->addRepeater(
		'features',
		array(
			'layout' => 'block',
		)
	)
	->addText( 'feature' )
	->addCheckbox(
		'checkmark',
		array(
			'label'         => 'Use Checkmark?',
			'choices'       => array( 'Use Checkmark?' ),
			'default_value' => array( 0 ),
			'return_format' => 'value',
		)
	)
	->addCheckbox(
		'enabled',
		array(
			'label'         => 'Enable Check',
			'choices'       => array( 'Enable Check?' ),
			'default_value' => array( 0 ),
			'return_format' => 'value',
		)
	)
	->conditional( 'checkmark', '!=', 0 )
	->addText( 'custom_text' )
	->conditional( 'checkmark', '==', 0 )
	->endRepeater()
	->endRepeater()
	->endRepeater()




	->setLocation( 'block', '==', 'acf/pricing' );

return $pricing;
