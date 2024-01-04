<?php
/**
 * CTA Section.
 *
 * ACF CTA Section.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$cta = new StoutLogic\AcfBuilder\FieldsBuilder( 'cta' );
$cta

->addSelect(
    'cta_style',
    array(
        'default_value' => 'simple',
    )
)
->addChoices(
    array( 'two-columns' => 'Two Columns with Photo on dark' ),
    array( 'simple' => 'Simple' )
)
	->addImage(
		'background_image',
		array(
			'preview_size'  => 'medium',
			'return_format' => 'id',
		)
	)
    ->addRepeater('list',
        array(
			'max'  => '8',
		))
    ->conditional( 'cta_style', '==', 'two-columns' )
        ->addText('title')
    ->endRepeater()
	->addText( 'subtitle' )
	->addText( 'title' )
	->addTextarea( 'description' )
	->addText( 'link_text' )
	->addPageLink( 'page_link' )
    ->addText( 'link_text_2' )
	->addPageLink( 'page_link_2' )


	->setLocation( 'block', '==', 'acf/cta' );

return $cta;
