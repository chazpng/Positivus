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
	]
)
->addRepeater(
	'image_repeater',
	[
		'layout' => 'block',
	] 
)
->addImage(
	'image',
	array(
		'preview_size'  => 'medium',
		'return_format' => 'id',
	)
)
->endRepeater()
->setLocation( 'block', '==', 'acf/image-transition' );

return $image_transition;
