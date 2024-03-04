<?php
/**
 * Grid Template.
 *
 * @package greydientlab
 */

?>
<?php
$style                = $block['className'] ?? '';
$bg_color             = '';
$container_color      = 'bg-gray-50';
$text_color_primary   = 'text-gray-900';
$text_color_secondary = 'text-gray-500';
$text_color_label     = 'text-indigo-600';
$color_1              = 'from-[#ff80b5] to-[#9089fc]';
$ring_1               = 'ring-gray-900/5';
$border_1             = 'border-gray-900/10';


if ( 'is-style-dark' === $style ) {
	$color_1              = 'from-[#80caff] to-[#4f46e5]';
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-400';
	$text_color_label     = 'text-indigo-400';
	$container_color      = 'bg-white/5';
	$bg_color             = 'bg-gray-900 dark';
	$ring_1               = 'ring-white/10';
	$border_1             = 'border-white/10';
}
$main_label   = get_field( 'eyebrow_text' ) ?: 'Testimonials';
$main_title   = get_field( 'title' ) ?: 'We have worked with thousands of amazing people';
$quote        = get_field( 'quote' ) ? get_field( 'quote' ) : 'Qui dolor enim consectetur do et non ex amet culpa sint in ea non dolore. Enim minim magna anim id minim eu cillum sunt dolore aliquip. Amet elit laborum culpa irure incididunt adipisicing culpa amet officia exercitation. Eu non aute velit id velit Lorem elit anim pariatur.';
$quotee       = get_field( 'quotee' ) ? get_field( 'quotee' ) : 'Judith Black';
$social_name  = get_field( 'social_name' ) ? get_field( 'social_name' ) : '';
$avatar       = get_field( 'avatar' ) ? get_field( 'avatar' ) : '';
$company_logo = get_field( 'company_logo' ) ? get_field( 'company_logo' ) : '';
?>

<div class="relative isolate <?php echo esc_attr( $bg_color ); ?> pb-32 pt-24 sm:pt-32">
	<div class="absolute inset-x-0 top-1/2 -z-10 -translate-y-1/2 transform-gpu overflow-hidden opacity-30 blur-3xl" aria-hidden="true">
		<div class="ml-[max(50%,38rem)] aspect-[1313/771] w-[82.0625rem] bg-gradient-to-tr <?php echo esc_attr( $color_1 ); ?> " style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
	</div>
	<div class="absolute inset-x-0 top-0 -z-10 flex transform-gpu overflow-hidden pt-32 opacity-25 blur-3xl sm:pt-40 xl:justify-end" aria-hidden="true">
		<div class="ml-[-22rem] aspect-[1313/771] w-[82.0625rem] flex-none origin-top-right rotate-[30deg] bg-gradient-to-tr <?php echo esc_attr( $color_1 ); ?> xl:ml-0 xl:mr-[calc(50%-12rem)]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
	</div>
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto max-w-xl text-center">
			<h2 class="text-lg font-semibold leading-8 tracking-tight <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $main_label ); ?></h2>
			<p class="mt-2 text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></p>
		</div>
		<div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 grid-rows-1 gap-8 text-sm leading-6 <?php echo esc_attr( $text_color_primary ); ?> sm:mt-20 sm:grid-cols-2 xl:mx-0 xl:max-w-none xl:grid-flow-col xl:grid-cols-4">
			<figure class="rounded-2xl <?php echo esc_attr( $bg_color ); ?> shadow-lg ring-1 <?php echo esc_attr( $ring_1 ); ?> sm:col-span-2 xl:col-start-2 xl:row-end-1">
				<blockquote class="p-6 text-lg font-semibold leading-7 tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:p-12 sm:text-xl sm:leading-8">
					<p>“<?php echo esc_html( $quote ); ?>”</p>
				</blockquote>
				<figcaption class="flex flex-wrap items-center gap-x-4 gap-y-4 border-t <?php echo esc_attr( $border_1 ); ?> px-6 py-4 sm:flex-nowrap">
					<img class="h-10 w-10 flex-none rounded-full <?php echo esc_attr( $container_color ); ?>" src="<?php echo esc_url( $avatar['url'] ); ?>" alt="<?php echo esc_attr( $avatar['alt'] ? $avatar['alt'] : 'Avatar' ); ?>">
					<div class="flex-auto">
						<div class="font-semibold"><?php echo esc_html( $quotee ); ?></div>
						<div class="<?php echo esc_attr( $text_color_secondary ); ?>">@<?php echo esc_html( $social_name ); ?></div>
					</div>
					<img class="h-10 w-auto flex-none" src="<?php echo esc_url( $company_logo['url'] ); ?>" alt="<?php echo esc_attr( $company_logo['alt'] ? $company_logo['alt'] : 'Company Logo' ); ?>">
				</figcaption>
			</figure>

			<div class="space-y-8 xl:contents xl:space-y-0">
				<div class="space-y-8 xl:row-span-2">
					<?php if ( have_rows( 'testimonial_left_repeater' ) ) : ?>
						<?php 
						while ( have_rows( 'testimonial_left_repeater' ) ) :
							the_row();
							$quote       = get_sub_field( 'quote' ) ? get_sub_field( 'quote' ) : '';
							$quotee      = get_sub_field( 'quotee' ) ? get_sub_field( 'quotee' ) : '';
							$social_name = get_sub_field( 'social_name' ) ? get_sub_field( 'social_name' ) : '';
							?>
							<figure class="rounded-2xl <?php echo esc_attr( $bg_color ); ?> p-6 shadow-lg ring-1 <?php echo esc_attr( $ring_1 ); ?>">
								<blockquote class="<?php echo esc_attr( $text_color_primary ); ?>">
									<p>“<?php echo esc_html( $quote ); ?>”</p>
								</blockquote>
								<figcaption class="mt-6 flex items-center gap-x-4">
									<?php echo wp_get_attachment_image( get_sub_field( 'avatar' ), 'full', '', array( 'class' => 'h-10 w-10 rounded-full' ) ); ?>
									<div>
										<div class="font-semibold"><?php echo esc_html( $quotee ); ?></div>
										<div class="<?php echo esc_attr( $text_color_secondary ); ?>">@<?php echo esc_html( $social_name ); ?></div>
									</div>
								</figcaption>
							</figure>
						<?php endwhile; ?>
					<?php else : ?>
						<figure class="rounded-2xl <?php echo esc_attr( $bg_color ); ?> p-6 shadow-lg ring-1 <?php echo esc_attr( $ring_1 ); ?>">
							<blockquote class="<?php echo esc_attr( $text_color_primary ); ?>">
								<p>“Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus nihil. Aut enim doloremque et ipsam.”</p>
							</blockquote>
							<figcaption class="mt-6 flex items-center gap-x-4">
								<img class="h-10 w-10 rounded-full <?php echo esc_attr( $container_color ); ?>" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
								<div>
									<div class="font-semibold">Leslie Alexander</div>
									<div class="<?php echo esc_attr( $text_color_secondary ); ?>">@lesliealexander</div>
								</div>
							</figcaption>
						</figure>
					<?php endif; ?>
				</div>
				<div class="space-y-8 xl:row-start-1">

					<?php if ( have_rows( 'testimonial_middle_left_repeater' ) ) : ?>
						<?php 
						while ( have_rows( 'testimonial_middle_left_repeater' ) ) :
							the_row();
							$quote       = get_sub_field( 'quote' ) ? get_sub_field( 'quote' ) : '';
							$quotee      = get_sub_field( 'quotee' ) ? get_sub_field( 'quotee' ) : '';
							$social_name = get_sub_field( 'social_name' ) ? get_sub_field( 'social_name' ) : '';
							?>
							<figure class="rounded-2xl <?php echo esc_attr( $bg_color ); ?> p-6 shadow-lg ring-1 <?php echo esc_attr( $ring_1 ); ?>">
								<blockquote class="<?php echo esc_attr( $text_color_primary ); ?>">
									<p>“<?php echo esc_html( $quote ); ?>”</p>
								</blockquote>
								<figcaption class="mt-6 flex items-center gap-x-4">
									<?php echo wp_get_attachment_image( get_sub_field( 'avatar' ), 'full', '', array( 'class' => 'h-10 w-10 rounded-full' ) ); ?>
									<div>
										<div class="font-semibold"><?php echo esc_html( $quotee ); ?></div>
										<div class="<?php echo esc_attr( $text_color_secondary ); ?>">@<?php echo esc_html( $social_name ); ?></div>
									</div>
								</figcaption>
							</figure>
						<?php endwhile; ?>
					<?php else : ?>
						<figure class="rounded-2xl <?php echo esc_attr( $bg_color ); ?> p-6 shadow-lg ring-1 <?php echo esc_attr( $ring_1 ); ?>">
							<blockquote class="<?php echo esc_attr( $text_color_primary ); ?>">
								<p>“Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus nihil. Aut enim doloremque et ipsam.”</p>
							</blockquote>
							<figcaption class="mt-6 flex items-center gap-x-4">
								<img class="h-10 w-10 rounded-full <?php echo esc_attr( $container_color ); ?>" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
								<div>
									<div class="font-semibold">Leslie Alexander</div>
									<div class="<?php echo esc_attr( $text_color_secondary ); ?>">@lesliealexander</div>
								</div>
							</figcaption>
						</figure>
					<?php endif; ?>
				</div>
			</div>
			<div class="space-y-8 xl:contents xl:space-y-0">
				<div class="space-y-8 xl:row-start-1">
					<?php if ( have_rows( 'testimonial_middle_right_repeater' ) ) : ?>
						<?php 
						while ( have_rows( 'testimonial_middle_right_repeater' ) ) :
							the_row();
							$quote       = get_sub_field( 'quote' ) ? get_sub_field( 'quote' ) : '';
							$quotee      = get_sub_field( 'quotee' ) ? get_sub_field( 'quotee' ) : '';
							$social_name = get_sub_field( 'social_name' ) ? get_sub_field( 'social_name' ) : '';
							?>
							<figure class="rounded-2xl <?php echo esc_attr( $bg_color ); ?> p-6 shadow-lg ring-1 <?php echo esc_attr( $ring_1 ); ?>">
								<blockquote class="<?php echo esc_attr( $text_color_primary ); ?>">
									<p>“<?php echo esc_html( $quote ); ?>”</p>
								</blockquote>
								<figcaption class="mt-6 flex items-center gap-x-4">
									<?php echo wp_get_attachment_image( get_sub_field( 'avatar' ), 'full', '', array( 'class' => 'h-10 w-10 rounded-full' ) ); ?>
									<div>
										<div class="font-semibold"><?php echo esc_html( $quotee ); ?></div>
										<div class="<?php echo esc_attr( $text_color_secondary ); ?>">@<?php echo esc_html( $social_name ); ?></div>
									</div>
								</figcaption>
							</figure>
						<?php endwhile; ?>
					<?php else : ?>
						<figure class="rounded-2xl <?php echo esc_attr( $bg_color ); ?> p-6 shadow-lg ring-1 <?php echo esc_attr( $ring_1 ); ?>">
							<blockquote class="<?php echo esc_attr( $text_color_primary ); ?>">
								<p>“Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus nihil. Aut enim doloremque et ipsam.”</p>
							</blockquote>
							<figcaption class="mt-6 flex items-center gap-x-4">
								<img class="h-10 w-10 rounded-full <?php echo esc_attr( $container_color ); ?>" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
								<div>
									<div class="font-semibold">Leslie Alexander</div>
									<div class="<?php echo esc_attr( $text_color_secondary ); ?>">@lesliealexander</div>
								</div>
							</figcaption>
						</figure>
					<?php endif; ?>
				</div>
				<div class="space-y-8 xl:row-span-2">
					<?php if ( have_rows( 'testimonial_right_repeater' ) ) : ?>
						<?php 
						while ( have_rows( 'testimonial_right_repeater' ) ) :
							the_row();
							$quote       = get_sub_field( 'quote' ) ? get_sub_field( 'quote' ) : '';
							$quotee      = get_sub_field( 'quotee' ) ? get_sub_field( 'quotee' ) : '';
							$social_name = get_sub_field( 'social_name' ) ? get_sub_field( 'social_name' ) : '';
							?>
							<figure class="rounded-2xl <?php echo esc_attr( $bg_color ); ?> p-6 shadow-lg ring-1 <?php echo esc_attr( $ring_1 ); ?>">
								<blockquote class="<?php echo esc_attr( $text_color_primary ); ?>">
									<p>“<?php echo esc_html( $quote ); ?>”</p>
								</blockquote>
								<figcaption class="mt-6 flex items-center gap-x-4">
									<?php echo wp_get_attachment_image( get_sub_field( 'avatar' ), 'full', '', array( 'class' => 'h-10 w-10 rounded-full' ) ); ?>
									<div>
										<div class="font-semibold"><?php echo esc_html( $quotee ); ?></div>
										<div class="<?php echo esc_attr( $text_color_secondary ); ?>">@<?php echo esc_html( $social_name ); ?></div>
									</div>
								</figcaption>
							</figure>
						<?php endwhile; ?>
					<?php else : ?>
						<figure class="rounded-2xl <?php echo esc_attr( $bg_color ); ?> p-6 shadow-lg ring-1 <?php echo esc_attr( $ring_1 ); ?>">
							<blockquote class="<?php echo esc_attr( $text_color_primary ); ?>">
								<p>“Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus nihil. Aut enim doloremque et ipsam.”</p>
							</blockquote>
							<figcaption class="mt-6 flex items-center gap-x-4">
								<img class="h-10 w-10 rounded-full <?php echo esc_attr( $container_color ); ?>" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
								<div>
									<div class="font-semibold">Leslie Alexander</div>
									<div class="<?php echo esc_attr( $text_color_secondary ); ?>">@lesliealexander</div>
								</div>
							</figcaption>
						</figure>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
