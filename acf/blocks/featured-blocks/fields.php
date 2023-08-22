<?php
/**
 * Featured Blocks.
 *
 * ACF Featured Blocks.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$featured_blocks = new StoutLogic\AcfBuilder\FieldsBuilder( 'featured_blocks' );
$featured_blocks
	->addText( 'label' )
	->addRelationship(
		'pages',
		array(
			'post_type' => array( 'page' ),
			'label'     => __( 'Pages Containing Blocks', 'greydientlab' ),
		)
	)

	->setLocation( 'block', '==', 'acf/featured-blocks' );

return $featured_blocks;
