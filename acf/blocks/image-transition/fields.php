<?php
/**
 * Logo Section.
 *
 * ACF Logos Section.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$image_transition = new StoutLogic\AcfBuilder\FieldsBuilder( 'image_transition' );
$image_transition
->addSelect(
	'image_style',
	[
		'default' => 'with-background',
	]
)
->addChoices(
	[
		'with-background'       => 'With Background Transition',
		'scroll-image-scale'    => 'Scroll Image Scale',
		'parallax-effect'       => 'Parallax Effect',
		'image-reveal-parallax' => 'Image Reveal with Parallax',
		'full-parallax'         => 'Full Parallax',
		'with-background-two'   => 'With Background Transition Two',
		'reverse-auto-scroll'   => 'Reverse / Auto Scroll',
		'image-comparison'      => 'Image Comparison',
		'pixelated'             => 'Pixelated',
		'tiled'                 => 'Tiled',
	]
)
->addRepeater(
	'image_repeater',
	[
		'layout' => 'block',
	] 
)
->conditional( 'image_style', '!=', 'full-parallax' )
->addImage(
	'image',
	array(
		'preview_size'  => 'medium',
		'return_format' => 'id',
	)
)
->endRepeater()
->addRepeater(
	'image_repeater_two',
	[
		'layout' => 'block',
	] 
)
->conditional( 'image_style', '==', 'reverse-auto-scroll' )
->addImage(
	'image',
	array(
		'preview_size'  => 'medium',
		'return_format' => 'id',
	)
)
->endRepeater()
->addRepeater(
	'image_repeater_url',
	[
		'layout' => 'block',
	] 
)
->conditional( 'image_style', '==', 'full-parallax' )
->addImage(
	'image_url',
	array(
		'preview_size'  => 'medium',
		'return_format' => 'url',
	)
)
->endRepeater()

->addRepeater(
	'image_repeater_pixelated',
	[
		'layout' => 'block',
	] 
)
->conditional( 'image_style', '==', 'pixelated' )
->addImage(
	'image_hd',
	array(
		'preview_size'  => 'medium',
		'return_format' => 'id',
	)
)
->addImage(
	'image_pixelated',
	array(
		'preview_size'  => 'medium',
		'return_format' => 'id',
	)
)
->endRepeater()
->setLocation( 'block', '==', 'acf/image-transition' );

return $image_transition;
