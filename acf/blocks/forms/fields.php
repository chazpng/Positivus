<?php
/**
 * PHP Code Embed.
 *
 * ACF PHP Code Embed.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$forms = new StoutLogic\AcfBuilder\FieldsBuilder( 'forms' );
$forms
->addSelect(
	'form_type',
	array(
		'default_value' => 'simple',
	)
)
->addChoices(
	array( 'simple' => 'Simple' ),
	array( 'two-column' => 'Two Column' ),
	array( 'two-column-card' => 'Two Columns Card' ),
	array( 'labels' => 'Labels on left' )
)
->addRepeater( 'form_repeater' )
	->addText( 'title' )
	->addTextarea( 'description' )
	->addTextarea( 'forms' )
->endRepeater()
	->setLocation( 'block', '==', 'acf/forms' );

return $forms;
