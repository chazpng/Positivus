<?php
/**
 * Single Column Template.
 *
 * @package circles_x
 */

?>
<?php
$style                = $block['className'] ?? '';
$bg_color             = '';
$text_color_primary   = 'text-gray-900';
$text_color_secondary = 'text-gray-600';
$text_color_badge     = 'text-gray-500';
$text_color_label     = 'text-indigo-600 hover:text-indigo-500';
$text_color_caption   = 'text-gray-700';
$main_title           = get_field( 'title' ) ?: 'Were always looking for awesome people to join us';
$main_description     = get_field( 'description' ) ?: 'Diam nunc lacus lacus aliquam turpis enim. Eget hac velit est euismod lacus. Est non placerat nam arcu. Cras purus nibh cursus sit eu in id.';
$main_button          = get_field( 'button_text' );
$container_color      = 'bg-gray-50 hover:bg-gray-100';
$border_color         = 'border-gray-100';
$divide_color         = 'divide-gray-100';




if ( 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$text_color_label     = 'text-indigo-400 hover:text-indigo-300';
	$bg_color             = 'bg-gray-900 dark';
	$text_color_badge     = 'text-gray-400';
	$text_color_caption   = 'text-gray-400';
	$container_color      = 'bg-white/10 hover:bg-white/5';
	$border_color         = 'border-white/10';
	$divide_color         = 'divide-white/10';
}
?>

<div class="<?php echo esc_attr( $bg_color ); ?> py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto flex max-w-2xl flex-col items-end justify-between gap-16 lg:mx-0 lg:max-w-none lg:flex-row">
			<div class="w-full lg:max-w-lg lg:flex-auto">
				<h2 class="text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
				<p class="mt-6 text-xl leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $main_description ); ?></p>
				<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'full', '', array( 'class' => 'mt-16 aspect-[6/5] w-full rounded-2xl bg-gray-50 object-cover lg:aspect-auto lg:h-[34.5rem]' ) ); ?>
			</div>
			<div class="w-full lg:max-w-xl lg:flex-auto">
				<h3 class="sr-only">Job openings</h3>
				<ul class="-my-8 divide-y <?php echo esc_attr( $divide_color ); ?>">
					<?php if ( have_rows( 'blog_repeater' ) ) : ?>
						<?php 
						while ( have_rows( 'blog_repeater' ) ) :
							the_row();
							$blog_title_name  = get_sub_field( 'blog_title' ) ?: 'Full-time Designer';
							$blog_description = get_sub_field( 'blog_description' ) ?: 'Quos sunt ad dolore ullam qui. Enim et quisquam dicta molestias. Corrupti quo voluptatum eligendi autem labore.';
							$blog_value       = get_sub_field( 'value' ) ?: '$75,000 USD';
							$blog_address     = get_sub_field( 'address' ) ?: 'San Francisco, CA';
							$blog_url         = get_sub_field( 'blog_url' ) ?: '#';
							?>
							<li class="py-8">
								<dl class="relative flex flex-wrap gap-x-3">
									<dt class="sr-only">Role</dt>
									<dd class="w-full flex-none text-lg font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">
										<a href="<?php echo esc_url( $blog_url ); ?>">
											<?php echo esc_html( $blog_title_name ); ?>
											<span class="absolute inset-0" aria-hidden="true"></span>
										</a>
									</dd>
									<dt class="sr-only">Description</dt>
									<dd class="mt-2 w-full flex-none text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $blog_description ); ?></dd>
									<dt class="sr-only">Salary</dt>
									<dd class="mt-4 text-base font-semibold leading-7 <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $blog_value ); ?></dd>
									<dt class="sr-only">Location</dt>
									<dd class="mt-4 flex items-center gap-x-3 text-base leading-7 <?php echo esc_attr( $text_color_badge ); ?>">
										<svg viewBox="0 0 2 2" class="h-0.5 w-0.5 flex-none fill-gray-300" aria-hidden="true">
											<circle cx="1" cy="1" r="1" />
										</svg>
										<?php echo esc_html( $blog_address ); ?>
									</dd>
								</dl>
							</li>
						<?php endwhile; ?>
					<?php else : ?>
					<?php endif; ?>
				</ul>
				<?php if ( get_field( 'button_text' ) && get_field( 'button_url' ) ) : ?>
				<div class="mt-8 flex border-t <?php echo esc_attr( $border_color ); ?> pt-8">
					<a href="<?php echo esc_url( the_field( 'button_url' ) ); ?>" class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_label ); ?> "><?php echo esc_html( $main_button ); ?> <span aria-hidden="true">&rarr;</span></a>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
