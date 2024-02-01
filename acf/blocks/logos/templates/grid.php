<?php
/**
 * Logo Grid Template.
 *
 * @package greydientlab
 */

$images   = get_field( 'images' ) ? get_field( 'images' ) : '';
$bg_color = 'is-style-dark' === $style ? 'bg-gray-900 ' : 'bg-white ';
?>

<div class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="-mx-6 grid grid-cols-2 gap-0.5 overflow-hidden sm:mx-0 sm:rounded-2xl lg:grid-cols-3">
			<?php if ( $images ) : ?>
				<?php
				foreach ( $images as $image ) :
					$img     = $image['image']['url'];
					$img_alt = $image['image']['alt'] ? $image['image']['alt'] : 'Logo';
					?>
					<div class="bg-gray-400/5 p-8 sm:p-10">
						<img class="max-h-12 w-full object-contain" src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>" width="158" height="48">
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
