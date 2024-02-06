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

	->addText( 'title' )
	->addTextArea( 'description' )

	->addRepeater(
		'contact_list',
		array(
			'max'   => '4',
			'label' => 'Contact List',
		)
	)
	->conditional( 'without_form_type', '!=', 'side' )
	->addText( 'country' )
	->conditional( 'without_form_type', '!=', 'simple' )
	->addText( 'address_1' )
	->conditional( 'without_form_type', '!=', 'simple' )
	->addText( 'address_2' )
	->conditional( 'without_form_type', '!=', 'simple' )

	->addText( 'label' )
	->conditional( 'without_form_type', '!=', 'column' )
	->addText( 'description' )
	->conditional( 'without_form_type', '!=', 'column' )
	->addText( 'button_name' )
	->conditional( 'without_form_type', '!=', 'column' )
	->addUrl( 'link' )
	->conditional( 'without_form_type', '!=', 'column' )
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

	->setLocation( 'block', '==', 'acf/contact' );

return $contact;
