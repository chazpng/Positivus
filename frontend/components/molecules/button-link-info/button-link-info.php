<?php
/**
 * Button Link Info.
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::molecule( 'button-link-info/button-link-info', array('key' => 'value') );
 *
 * @package greydientlab
 */

use Lean\Load;

$class       = $args['class'] ?? '';
$img         = $args['image_url'] ?? get_template_directory_uri() . '/frontend/components/molecules/cards/img/image-placeholder.jpg';
$bli_title   = $args['title'] ?? 'Your Title Here';
$description = $args['description'] ?? 'Your Description Here';
$bli_link    = $args['link'] ?? false;
?>

<div class="gl-m-button-link-info">

	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h3 class="title"><?php echo esc_html( $bli_title ); ?></h3>
				<p class="description"><?php echo esc_html( $description ); ?></p>
			</div>

			<div class="col-lg-6">
				<div class="btn-container">
					<?php
					Load::atom(
						'buttons/button',
						array(
							'url'   => 'http://test.com',
							'title' => 'Test',
							'class' => 'primary-button',
						)
					);
					?>
				</div>
			</div>
		</div>
	</div>
</div>
