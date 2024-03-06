<?php
/**
 * ACF Article Image Block.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$article_image_block = new StoutLogic\AcfBuilder\FieldsBuilder( 'article_image_block' );
$article_image_block
->addImage(
	'image',
	array(
		'preview_size'  => 'medium',
		'return_format' => 'id',
	)
)
->addText( 'description' )
->addText( 'credentials_name' )
->addUrl( 'credentials_url' )
->setLocation( 'block', '==', 'acf/article-image-block' );

return $article_image_block;
