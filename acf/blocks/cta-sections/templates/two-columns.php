<?php
/**
 * Two columns with photo on dark Feature Template.
 *
 * @package greydientlab
 */

?>

<?php
$label       = get_field( 'subtitle' ) ?: 'Award winning support';
$main_title  = get_field( 'title' ) ?: 'Join our Team';
$description = get_field( 'description' ) ?: 'Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.';
$link_text   = get_field( 'link_text' ) ?: 'See our job postings';
$page_link_1 = get_field( 'page_link' ) ?: '#';


$bg_color             = '';
$text_color_primary   = 'text-gray-900';
$text_color_secondary = 'text-gray-600';
$button_text_color    = 'text-indigo-600';

$content_container = 'mx-auto max-w-7xl sm:px-6 lg:px-8';

if ( 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$button_text_color    = 'text-indigo-400';
	$bg_color             = 'bg-gray-900';
}
?>

<div class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
	<div class="relative isolate">
		<div class="<?php echo esc_attr( $content_container ); ?>">
			<div class="mx-auto flex max-w-2xl flex-col gap-16 bg-white/10 px-6 py-16 ring-1 ring-white/10 sm:rounded-3xl sm:p-8 lg:mx-0 lg:max-w-none lg:flex-row lg:items-center lg:py-20 xl:gap-x-20 xl:px-20">
				<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'full', '', array( 'class' => 'h-96 w-full flex-none rounded-2xl object-cover shadow-xl lg:aspect-square lg:h-auto lg:max-w-sm' ) ); ?>
				<div class="w-full flex-auto">
					<h2 class="text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
					<p class="mt-6 text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $description ); ?></p>
					<?php if ( have_rows( 'list' ) ) : ?>
						<ul role="list" class="mt-10 grid grid-cols-1 gap-x-8 gap-y-3 text-base leading-7 <?php echo esc_attr( $text_color_primary ); ?> sm:grid-cols-2">
							<?php
							while ( have_rows( 'list' ) ) :
								the_row();
								$list_title = get_sub_field( 'list_title' ) ?: 'Your Title Here';
								?>
								<li class="flex gap-x-3">
									<svg class="h-7 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
									</svg>
									<?php echo esc_html( $list_title ); ?>
								</li>
							<?php endwhile; ?>
						<?php else : ?>
							<ul role="list" class="mt-10 grid grid-cols-1 gap-x-8 gap-y-3 text-base leading-7 <?php echo esc_attr( $text_color_primary ); ?> sm:grid-cols-2">
								<li class="flex gap-x-3">
									<svg class="h-7 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
									</svg>
									Competitive salaries
								</li>
								<li class="flex gap-x-3">
									<svg class="h-7 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
									</svg>
									Flexible work hours
								</li>
								<li class="flex gap-x-3">
									<svg class="h-7 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
									</svg>
									30 days of paid vacation
								</li>
								<li class="flex gap-x-3">
									<svg class="h-7 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
									</svg>
									Annual team retreats
								</li>
								<li class="flex gap-x-3">
									<svg class="h-7 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
									</svg>
									Benefits for you and your family
								</li>
								<li class="flex gap-x-3">
									<svg class="h-7 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
									</svg>
									A great work environment
								</li>
							</ul>
						<?php endif; ?>
						<div class="mt-10 flex">
							<a href="<?php echo esc_url( $page_link_1 ); ?>" class="text-sm font-semibold leading-6 <?php echo esc_attr( $button_text_color ); ?>"><?php echo esc_html( $link_text ); ?> <span aria-hidden="true">&rarr;</span></a>
						</div>
				</div>
			</div>
		</div>
		<div class="absolute inset-x-0 -top-16 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl" aria-hidden="true">
			<div class="aspect-[1318/752] w-[82.375rem] flex-none bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-25" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"></div>
		</div>
	</div>
</div>
