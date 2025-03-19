<?php
/**
 * Text Transition Section.
 *
 * ACF Text Transition Section.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$text_transition_generator = new StoutLogic\AcfBuilder\FieldsBuilder( 'text_transition_generator' );
	$text_transition_generator
	->addNumber( 'duration_value' )
	->addNumber( 'opacity_value' )
	->addNumber( 'scale_value' )
	->addTrueFalse(
		'custom_ease', 
		[
			'default_value' => 0,
			'label'         => 'Use Custom Ease?',
		]
	)
	->addSelect(
		'ease_style',
		array(
			'default_value' => 'Power0',
		)
	)
	->conditional( 'custom_ease', '==', 0 )
	->addChoices(
		[
			'power0'  => 'Power 0',
			'power1'  => 'Power 1',
			'power2'  => 'Power 2',
			'power3'  => 'Power 3',
			'power4'  => 'Power 4',
			'back'    => 'Back',
			'bounce'  => 'Bounce',
			'circ'    => 'Circ',
			'elastic' => 'Elastic',
			'expo'    => 'Expo',
			'sine'    => 'Sine',
		]
	)
	->addSelect(
		'ease_timing',
		array(
			'default_value' => 'in',
		)
	)
	->conditional( 'custom_ease', '==', 0 )
	->addChoices(
		[
			'in'    => 'in',
			'inOut' => 'inOut',
			'out'   => 'out',
		]
	)
	->addText( 'custom_ease_text' )
	->conditional( 'custom_ease', '==', 1 )
	->addNumber( 'x_value' )
	->addNumber( 'y_value' )
	->addNumber( 'rotate_x_value' )
	->addNumber( 'rotate_y_value' )
	->addNumber( 'skew_x_value' )
	->addNumber( 'skew_y_value' )
	->addSelect(
		'split_text',
		array(
			'default_value' => 'none',
		)
	)
	->addChoices(
		[
			'none' => 'None',
			'line' => 'Line',
			'word' => 'Word',
			'char' => 'Char',
		]
	)
	->addNumber( 'stagger' )
	->addTrueFalse(
		'hide_overflow', 
		[
			'default_value' => 0,
			'label'         => 'Hide Overflow Text?',
		]
	)
	->conditional( 'split_text', '==', 'word' )
	->or( 'split_text', '==', 'char' )
	->setLocation( 'block', '==', 'acf/text-transition-generator' );

	return $text_transition_generator;
