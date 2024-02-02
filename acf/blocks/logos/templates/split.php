<?php
/**
 * Logo Split Template.
 *
 * @package greydientlab
 */

$heading                   = get_field( 'heading' ) ? get_field( 'heading' ) : 'Heading goes here...';
$description               = get_field( 'description' ) ? get_field( 'description' ) : 'Description goes here...';
$cta_button_link           = get_field( 'cta_button_link' ) ? get_field( 'cta_button_link' ) : '';
$cta_button_link_secondary = get_field( 'cta_button_link_secondary' ) ? get_field( 'cta_button_link_secondary' ) : '';
$images                    = get_field( 'images' ) ? get_field( 'images' ) : '';
$bg_color                  = 'is-style-dark' === $style ? 'bg-gray-900 ' : 'bg-white ';
?>

<div class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="grid grid-cols-1 items-center gap-x-8 gap-y-16 lg:grid-cols-2">
			<div class="mx-auto w-full max-w-xl lg:mx-0">
			<h2 class="text-3xl font-bold tracking-tight text-gray-900"><?php echo esc_html( $heading ); ?></h2>
			<p class="mt-6 text-lg leading-8 text-gray-600"><?php echo wp_kses_post( $description ); ?></p>
			<div class="mt-8 flex items-center gap-x-6">
			<?php if ( $cta_button_link ) : ?>
				<a href="<?php echo esc_url( $cta_button_link['url'] ); ?>" <?php echo $cta_button_link['target'] ? 'target="_blank"' : ''; ?> class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
					<?php echo esc_html( $cta_button_link['title'] ); ?>
				</a>
			<?php endif; ?>

			<?php if ( $cta_button_link_secondary ) : ?>
				<a href="<?php echo esc_url( $cta_button_link_secondary['url'] ); ?>" <?php echo $cta_button_link['target'] ? 'target="_blank"' : ''; ?> class="text-sm font-semibold text-gray-900">
				<?php echo esc_html( $cta_button_link_secondary['title'] ); ?> <span aria-hidden="true">&rarr;</span>
				</a>
			<?php endif; ?>
			</div>
			</div>
			<div class="mx-auto grid w-full max-w-xl grid-cols-2 items-center gap-y-12 sm:gap-y-14 lg:mx-0 lg:max-w-none lg:pl-8">
			<?php if ( $images ) : ?>
				<?php
				foreach ( $images as $image ) :
					$img     = $image['image']['url'];
					$img_alt = $image['image']['alt'] ? $image['image']['alt'] : 'Logo';
					?>
					<img class="max-h-12 w-full object-contain object-left" src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>" width="105" height="48">
				<?php endforeach; ?>
			<?php endif; ?>
			</div>
		</div>
	</div>
</div>
