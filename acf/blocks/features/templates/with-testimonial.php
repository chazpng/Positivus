<?php
/**
 * With testimonial Template.
 *
 * @package greydientlab
 */

?>

<?php
$label       = empty( get_field( 'label' ) ) ? 'Your Label Here' : get_field( 'label' );
$main_title  = empty( get_field( 'title' ) ) ? 'Your Title Here' : get_field( 'title' );
$description = empty( get_field( 'description' ) ) ? 'Your Description Here' : get_field( 'description' );
$bg_image    = empty( get_field( 'featured_image' ) ) ? get_block_asset_url( 'features', 'img-placeholder.jpg' ) : get_field( 'featured_image' );
$button_name = empty( get_field( 'button_name' ) ) ? 'Button Name' : get_field( 'button_name' );

?>

<div class="overflow-hidden bg-white py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start">
			<div class="lg:pr-4 lg:pt-4">
				<div class="lg:max-w-lg">
					<h2 class="text-base font-semibold leading-7 text-indigo-600"><?php echo esc_html( $label ); ?></h2>
					<p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php echo esc_html( $main_title ); ?></p>
					<p class="mt-6 text-lg leading-8 text-gray-600"><?php echo esc_html( $description ); ?></p>
					<div class="mt-8">
						<a href="<?php echo esc_url( get_field( 'button_link' ) ); ?>" class="inline-flex rounded-md bg-purple px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><?php echo esc_html( $button_name ); ?></a>
					</div>
					<?php if ( have_rows( 'testimonials' ) ) : ?>
						<figure class="mt-16 border-l border-gray-200 pl-8 text-gray-600">
							<?php
							while ( have_rows( 'testimonials' ) ) :
								the_row();
								$avatar   = empty( get_sub_field( 'avatar' ) ) ? get_block_asset_url( 'features', 'icon-placeholder.svg' ) : get_sub_field( 'avatar' );
								$qoute    = empty( get_sub_field( 'qoute' ) ) ? 'Your Qoute Here' : get_sub_field( 'qoute' );
								$name     = empty( get_sub_field( 'name' ) ) ? 'Author Name' : get_sub_field( 'name' );
								$position = empty( get_sub_field( 'position' ) ) ? 'Author Position' : get_sub_field( 'position' );
								?>

								<blockquote class="text-base leading-7">
									<p>"<?php echo esc_html( $qoute ); ?>"</p>
								</blockquote>
								<figcaption class="mt-6 flex gap-x-4 text-sm leading-6">
									<?php echo wp_get_attachment_image( get_sub_field( 'avatar' ), 'full', '', array( 'class' => 'h-6 w-6 flex-none rounded-full' ) ); ?>
									<div><span class="font-semibold text-gray-900"><?php echo esc_html( $name ); ?></span> – <?php echo esc_html( $position ); ?></div>
								<?php endwhile; ?>
							<?php else : ?>
							<figure class="mt-16 border-l border-gray-200 pl-8 text-gray-600">
								<blockquote class="text-base leading-7">
									<p>“Your Qoute Here”</p>
								</blockquote>
								<figcaption class="mt-6 flex gap-x-4 text-sm leading-6">
									<img src="<?php echo esc_url( get_block_asset_url( 'features', 'icon-placeholder.svg' ) ); ?>" alt="" class="h-6 w-6 flex-none rounded-full">
									<div><span class="font-semibold text-gray-900">Author Name</span> – Author Position</div>
								<?php endif; ?>
								</figcaption>
						</figure>
				</div>
			</div>
			<img src="<?php echo esc_url( $bg_image ); ?>" alt="Product screenshot" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:ml-0" width="2432" height="1442">
		</div>
	</div>
</div>
