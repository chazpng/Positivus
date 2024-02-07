<?php
/**
 * ACF Contact Section.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$contact = new StoutLogic\AcfBuilder\FieldsBuilder( 'contact' );
$contact
	->addSelect(
		'contact_style',
		array(
			'default_value' => 'without-form',
		)
	)

	->addChoices(
		array( 'without-form' => 'Without Form' ),
		array( 'with-form' => 'With Form' )
	)

	->addSelect(
		'without_form_type',
		array(
			'default_value' => 'simple',
		)
	)
	->conditional( 'contact_style', '==', 'without-form' )
	->addChoices(
		array( 'simple' => 'Simple Centered' ),
		array( 'side' => 'Side-by-side Grid' ),
		array( 'column' => 'Simple four-column' )
	)

	->addSelect(
		'with_form_type',
		array(
			'default_value' => 'simple',
		)
	)
	->conditional( 'contact_style', '==', 'with-form' )
	->addChoices(
		array( 'simple' => 'Centered' ),
		array( 'split-pattern' => 'Split with Pattern' ),
		array( 'split-image' => 'Split Image' ),
		array( 'testimonial' => 'with Testimonial' )
	)

	->addText( 'title' )
	->addTextArea( 'description' )

	->addRepeater(
		'contact_list',
		array(
			'max'   => '4',
			'label' => 'Contact List',
		)
	)
	->conditional( 'without_form_type', '==', 'simple' )
	->or( 'without_form_type', '==', 'column' )
	->addText( 'country' )
	->conditional( 'without_form_type', '==', 'column' )
	->addText( 'address_1' )
	->conditional( 'without_form_type', '==', 'column' )
	->addText( 'address_2' )
	->conditional( 'without_form_type', '==', 'column' )

	->addText( 'label' )
	->conditional( 'without_form_type', '==', 'simple' )
	->addText( 'description' )
	->conditional( 'without_form_type', '==', 'simple' )
	->addText( 'button_name' )
	->conditional( 'without_form_type', '==', 'simple' )
	->addUrl( 'link' )
	->conditional( 'without_form_type', '==', 'simple' )
	->addImage(
		'contact_icon',
		array(
			'preview_size'  => 'medium',
			'return_format' => 'id',
		)
	)
	->conditional( 'without_form_type', '!=', 'column' )
	->endRepeater()

	->addRepeater(
		'container',
		array(
			'max'   => '2',
			'label' => 'Container',
		)
	)
	->conditional( 'without_form_type', '==', 'side' )


	->addText( 'title' )
	->addTextArea( 'description' )
	->addRepeater(
		'contact_list',
		array(
			'max'   => '4',
			'label' => 'Contact List',
		)
	)
	->addText( 'contact_list_label' )
	->addEmail( 'contact_list_email' )
	->addText( 'contact_list_tel' )
	->endRepeater()
	->endRepeater()

	->addRepeater(
		'address_list',
		array(
			'max'   => '3',
			'label' => 'Address List',
		)
	)
	->conditional( 'with_form_type', '==', 'split-pattern' )
	->addImage(
		'contact_icon',
		array(
			'preview_size'  => 'medium',
			'return_format' => 'id',
		)
	)
	->addWysiwyg(
		'address',
		array(
			'new_lines' => 'br',
		)
	)
	->endRepeater()

	->addImage(
		'featured_image',
		array(
			'preview_size'  => 'medium',
			'return_format' => 'id',
		)
	)
	->conditional( 'with_form_type', '==', 'split-image' )

	->addImage(
		'company_logo',
		array(
			'preview_size'  => 'medium',
			'return_format' => 'id',
		)
	)
	->conditional( 'with_form_type', '==', 'testimonial' )
	->addTextArea(
		'qoute',
		array(
			'new_lines' => 'br',
		)
	)
	->conditional( 'with_form_type', '==', 'testimonial' )
	->addText( 'avatar_name' )
	->conditional( 'with_form_type', '==', 'testimonial' )
	->addText( 'avatar_job' )
	->conditional( 'with_form_type', '==', 'testimonial' )
	->addImage(
		'avatar_icon',
		array(
			'preview_size'  => 'medium',
			'return_format' => 'id',
		)
	)
	->conditional( 'with_form_type', '==', 'testimonial' )


	->addTextArea( 'shortcode' )
	->setLocation( 'block', '==', 'acf/contact' );

return $contact;
