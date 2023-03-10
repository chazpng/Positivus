<?php
/**
 * GL Container.
 *
 * ACF GL Container.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$gl_container = new StoutLogic\AcfBuilder\FieldsBuilder( 'gl_container' );
$gl_container
	->addRange(
		'desktop_top_spacing',
		array(
			'min' => 0,
			'max' => 1000,
		)
	)
	->addRange(
		'tablet_top_spacing',
		array(
			'min' => 0,
			'max' => 1000,
		)
	)
	->addRange(
		'mobile_top_spacing',
		array(
			'min' => 0,
			'max' => 1000,
		)
	)
	->addRange(
		'desktop_bottom_spacing',
		array(
			'min' => 0,
			'max' => 1000,
		)
	)
	->addRange(
		'tablet_bottom_spacing',
		array(
			'min' => 0,
			'max' => 1000,
		)
	)
	->addRange(
		'mobile_bottom_spacing',
		array(
			'min' => 0,
			'max' => 1000,
		)
	)
	->setLocation( 'block', '==', 'acf/gl-container' );

return $gl_container;
