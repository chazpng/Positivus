<?php
/**
 * Simple Feature Template.
 *
 * @package greydientlab
 */

?>

<?php
$label       = get_field( 'with_expanding_image_subtext' ) ?: 'Your Label';
$main_title  = get_field( 'with_expanding_image_title' ) ?: 'Your Title Here';
$description = get_field( 'with_expanding_image_description' ) ?: 'Your Description Here';
$main_link   = get_field( 'with_expanding_image_link' );

$bg_color             = '';
$text_color_primary   = 'text-gray-900';
$text_color_secondary = 'text-gray-600';
$text_color_label     = 'text-indigo-600';
$max_width            = 'max-w-7xl';

if ( 'is-style-dark' === $style ) {
	$bg_color             = 'bg-gray-900';
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$img_gradient_class   = 'absolute -inset-x-20 bottom-0 bg-gradient-to-t from-gray-900 pt-[7%]';
	$list_dt_class        = $text_color_primary;
	$text_color_label     = 'text-indigo-400';
}

?>

<div class="<?php echo esc_attr( $bg_color ); ?> py-12 sm:py-12 with-expanding-images max-w-7xl mx-auto">
	<div class="mx-auto px-6 lg:px-8">
		<div class="header-container grid grid-cols-12 gap-x-5 lg:pb-8">
			<div class="title-container col-span-12 flex flex-col justify-between md:col-span-6 lg:justify-normal">
				<p class="text-base font-semibold leading-7 text-indigo-600"><?php echo esc_html( $label ); ?></p>
				<h2 class="mt-2 text-3xl font-bold tracking-tight lg:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
			</div>
			<div class="description-container col-span-12 md:col-span-6">
				<p class="mt-3 text-lg leading-8 md:mt-7"><?php echo wp_kses_post( $description ); ?></p>
			</div>
		</div>
		<div class="image-container hidden flex-row pt-8 md:flex md:gap-x-4 lg:gap-x-5">
			<?php if ( have_rows( 'with_expanding_image_repeater' ) ) : ?>
				<?php 
				while ( have_rows( 'with_expanding_image_repeater' ) ) :
					the_row();
					$images       = get_sub_field( 'image' );
					$custom_class = 1 === get_row_index() ? 'flex-[50%]' : 'flex-[25%]';
					?>
					<div class="wei-repeater-images transition-all duration-300 md:h-[250px] lg:h-[300px] xl:h-[400px] <?php echo esc_attr( $custom_class ); ?>"><?php echo wp_get_attachment_image( $images, 'full', '', array( 'class' => 'object-cover w-full h-full object-center rounded-md ' ) ); ?></div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="image-container flex flex-col gap-y-4 pt-8 md:hidden">
			<div class="swiper relative">
				<div class="swiper-wrapper">
					<?php if ( have_rows( 'with_expanding_image_repeater' ) ) : ?>
						<?php 
						while ( have_rows( 'with_expanding_image_repeater' ) ) :
							the_row();
							$images = get_sub_field( 'image' );
							?>
							<div class="swiper-slide"><?php echo wp_get_attachment_image( $images, 'full', '', array( 'class' => 'object-cover w-full h-full object-center rounded-md ' ) ); ?></div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
