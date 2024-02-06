<?php
/**
 * Testimonials Section.
 *
 * ACF Testimonials Section.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$testimonial = new StoutLogic\AcfBuilder\FieldsBuilder( 'testimonial' );

	$testimonial->addSelect(
		'testimonial_style',
		array(
			'default_value' => 'simple',
		)
	)

		->addChoices(
			array( 'simple' => 'Simple' ),
			array( 'large_avatar' => 'Large Avatar' ),
			array( 'overlapping' => 'Overlapping' )
		)
		
		->addImage( 'company_logo' )
		->addText( 'quote' )
		->addText( 'quotee' )
		->addImage( 'avatar' )
		->addText( 'position' )

	->setLocation( 'block', '==', 'acf/testimonials' );

	return $testimonial;
