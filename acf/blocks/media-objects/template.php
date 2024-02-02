<?php
/**
 * Media Objects Template.
 *
 * @package greydientlab
 */

use Lean\Load;

$class_name = $block['className'] ?? '';
$media_type = get_field( 'type' );

$image_container_class   = 'mr-4';
$image_class             = '!h-16 w-16';
$title_description_class = '';
$gl_class                = 'flex';

switch ( $media_type ) {
	case 'center':
		$image_container_class = 'mr-4 self-center';
		break;

	case 'bottom':
		$image_container_class = 'mr-4 self-end';
		break;

	case 'stretched':
		$image_class = '!h-full w-16 object-cover';
		break;

	case 'right':
		$image_container_class   = 'ml-4 order-2';
		$title_description_class = 'order-1';
		break;

	case 'basic-responsive':
		$gl_class              = 'sm:flex';
		$image_container_class = 'mb-4 sm:mb-0 sm:mr-4';
		break;

	case 'wide-responsive':
		$gl_class              = 'sm:flex';
		$image_container_class = 'mb-4 sm:mb-0 sm:mr-4';
		$image_class           = '!h-32 w-full';
		break;
}
?>
<div class="gl-b-media-objects">
	<div class="<?php echo esc_attr( $class_name ); ?>">
		<div class="<?php echo esc_attr( $gl_class ); ?>">
			<div class="flex-shrink-0 <?php echo esc_attr( $image_container_class ); ?>">
				<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'full', '', array( 'class' => $image_class . ' border border-gray-300 bg-white text-gray-300' ) ); ?>
			</div>
			<div>
				<?php
				Load::atom(
					'title-with-description/title-with-description',
					[
						'gl_title'       => get_field( 'title' ),
						'gl_description' => get_field( 'description' ),
						'gl_class'       => $title_description_class,
					]
				);
				?>

				<?php if ( have_rows( 'media_objects' ) ) : ?>
					<?php
					while ( have_rows( 'media_objects' ) ) :
						the_row();
						?>
							<div class="mt-6 flex">
								<div class="mr-4 flex-shrink-0">
									<?php echo wp_get_attachment_image( get_sub_field( 'featured_image' ), 'full', '', array( 'class' => 'h-12 w-12 border border-gray-300 bg-white text-gray-300' ) ); ?>
								</div>
								<?php
								Load::atom(
									'title-with-description/title-with-description',
									[
										'gl_title'       => get_sub_field( 'title' ),
										'gl_description' => get_sub_field( 'description' ),
										'gl_class'       => $title_description_class,
									]
								);
								?>
							</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
