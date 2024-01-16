<?php
/**
 * ACF stats Section.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$faq = new StoutLogic\AcfBuilder\FieldsBuilder( 'faq' );
$faq->addSelect(
	'faq_style',
	array(
		'default_value' => 'simple',
	)
)

->addChoices(
	array( 'simple' => 'Simple' ),
	array( 'accordion' => 'Accordion' )
)

->addSelect(
	'simple_type',
	array(
		'default_value' => 'offset',
	)
)
->conditional( 'faq_style', '==', 'simple' )
->addChoices(
	array( 'offset' => 'Offset with supporting text' ),
	array( 'side' => 'Side-by-side' ),
	array( 'two-column' => 'Two Columns' ),
	array( 'three-column' => 'Three Columns' )
)

->addText( 'title' )
->addWysiwyg(
	'description',
	array(
		'media_upload' => 0,
	)
)
->addRepeater(
	'questions',
	array(
		'label' => '
        Question',
	)
)
->addText( 'question' )
->addTextarea( 'answer' )
->endRepeater()


	->setLocation( 'block', '==', 'acf/faq' );

return $faq;
