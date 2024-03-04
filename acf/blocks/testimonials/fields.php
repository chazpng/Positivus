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
			array( 'overlapping_image' => 'Overlapping' ),
			array( 'background_image' => 'With Background Image' ),
			array( 'side' => 'Side-by-side' ),
			array( 'offwhite' => 'Off-white grid' ),
			array( 'stars' => 'With star rating' ),
			array( 'grid' => 'Grid' )
		)

		->addNumber(
			'stars', 
			array(
				'label'         => 'How many stars?',
				'default_value' => '1',
				'max'           => '5',
			)
		)
			->conditional( 'testimonial_style', '==', 'stars' )
		->addImage(
			'star_image',
			array(
				'preview_size'  => 'medium',
				'return_format' => 'id',
			)
		)
		->conditional( 'testimonial_style', '==', 'stars' )
		
		->addText( 'eyebrow_text' )
			->conditional( 'testimonial_style', '==', 'offwhite' )
		->or( 'testimonial_style', '==', 'grid' )

		->addText( 'title' )
			->conditional( 'testimonial_style', '==', 'offwhite' )
		->or( 'testimonial_style', '==', 'grid' )

		->addImage( 'background_image' )
			->conditional( 'testimonial_style', '==', 'background_image' )

		->addImage( 'company_logo' )
			->conditional( 'testimonial_style', '!=', 'side' )
			->and( 'testimonial_style', '!=', 'offwhite' )
			->and( 'testimonial_style', '!=', 'stars' )
	
		->addText( 'quote' )
			->conditional( 'testimonial_style', '!=', 'side' )
			->and( 'testimonial_style', '!=', 'offwhite' )
	
		->addText( 'quotee' )
			->conditional( 'testimonial_style', '!=', 'side' )
			->and( 'testimonial_style', '!=', 'offwhite' )
	
		->addImage( 'avatar' )
			->conditional( 'testimonial_style', '!=', 'side' )
			->and( 'testimonial_style', '!=', 'offwhite' )
	
		->addText( 'position' )
		->conditional( 'testimonial_style', '!=', 'side' )
			->and( 'testimonial_style', '!=', 'offwhite' )
			->and( 'testimonial_style', '!=', 'grid' )

		->addText( 'social_name' )
			->conditional( 'testimonial_style', '==', 'grid' )



		->addRepeater(
			'testimonial_repeater',
			array(
				'label' => 'Qoute',
			)
		)
			->conditional( 'testimonial_style', '==', 'side' )
			->or( 'testimonial_style', '==', 'offwhite' )
		->addImage(
			'company_logo',
			array(
				'preview_size'  => 'medium',
				'return_format' => 'id',
			)
		)
			->conditional( 'testimonial_style', '==', 'side' )
		->addText( 'quote' )
		->addText( 'quotee' )
		->addImage(
			'avatar',
			array(
				'preview_size'  => 'medium',
				'return_format' => 'id',
			)
		)
		->addText( 'position' )
			->conditional( 'testimonial_style', '==', 'side' )
		->addText( 'social_name' )
			->conditional( 'testimonial_style', '!=', 'side' )
		->endRepeater()

		->addRepeater(
			'testimonial_left_repeater',
			array(
				'label' => 'Left Repeater',
			)
		)
			->conditional( 'testimonial_style', '==', 'grid' )
		->addText( 'quote' )
		->addText( 'quotee' )
		->addImage(
			'avatar',
			array(
				'preview_size'  => 'medium',
				'return_format' => 'id',
			)
		)
		->addText( 'social_name' )
		->endRepeater()

		->addRepeater(
			'testimonial_right_repeater',
			array(
				'label' => 'Right Repeater',
			)
		)
			->conditional( 'testimonial_style', '==', 'grid' )
		->addText( 'quote' )
		->addText( 'quotee' )
		->addImage(
			'avatar',
			array(
				'preview_size'  => 'medium',
				'return_format' => 'id',
			)
		)
		->addText( 'social_name' )
		->endRepeater()

		->addRepeater(
			'testimonial_middle_right_repeater',
			array(
				'label' => 'Middle Right Repeater',
			)
		)
			->conditional( 'testimonial_style', '==', 'grid' )
		->addText( 'quote' )
		->addText( 'quotee' )
		->addImage(
			'avatar',
			array(
				'preview_size'  => 'medium',
				'return_format' => 'id',
			)
		)
		->addText( 'social_name' )
		->endRepeater()

		->addRepeater(
			'testimonial_middle_left_repeater',
			array(
				'label' => 'Middle Left Repeater',
			)
		)
			->conditional( 'testimonial_style', '==', 'grid' )
		->addText( 'quote' )
		->addText( 'quotee' )
		->addImage(
			'avatar',
			array(
				'preview_size'  => 'medium',
				'return_format' => 'id',
			)
		)
		->addText( 'social_name' )
		->endRepeater()



	->setLocation( 'block', '==', 'acf/testimonials' );

	return $testimonial;
