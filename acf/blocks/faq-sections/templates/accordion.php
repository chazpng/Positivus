<?php
/**
 * Accordion FAQ Template.
 *
 * @package circles_x
 */

?>

<?php
$bg_color                     = '';
$text_color_primary           = 'text-gray-900';
$text_color_secondary         = 'text-gray-600';
$divider_color                = 'divide-gray-900/10';
$description                  = get_field( 'description' ) ?: 'Lorem ipsum dolor sit amet consect adipisicing possimus.';
$main_title                   = get_field( 'title' ) ?: 'Frequently asked questions';
$intro_container_two_column   = 'max-w-2xl';
$intro_container_three_column = 'max-w-2xl';



if ( 'is-style-dark' === $style ) {
	$text_color_primary     = 'text-white';
	$text_color_secondary   = 'text-gray-300';
	$text_color_label       = 'text-indigo-400';
	$bg_color               = 'bg-gray-900';
	$stats_background_color = 'bg-white/5';
	$divider_color          = 'divide-white/20';
	$button_style           = 'rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold <?php echo esc_attr($text_color_primary); ?> shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white';
}

switch ( $align ) {
	case 'center':
		$intro_container_three_column = 'mx-auto max-w-2xl text-center';
		$intro_container_two_column   = 'mx-auto max-w-2xl text-center';
		break;

	case 'right':
		$intro_container_three_column = 'ml-auto max-w-2xl text-right';
		$intro_container_two_column   = 'ml-auto max-w-2xl text-right';

	default:
		break;
}
?>
<div class="<?php echo esc_attr( $bg_color ); ?>">
	<div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8 lg:py-40">
		<div class="mx-auto max-w-4xl divide-y <?php echo esc_attr( $divider_color ); ?>">
			<h2 class="text-2xl font-bold leading-10 tracking-tight <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $main_title ); ?></h2>
			<?php if ( have_rows( 'questions' ) ) : ?>

				<dl class="mt-10 space-y-6 divide-y <?php echo esc_attr( $divider_color ); ?>">
					<?php 
					while ( have_rows( 'questions' ) ) :
						the_row();
						$question   = get_sub_field( 'question' ) ?: 'Question';
						$answer     = get_sub_field( 'answer' ) ?: 'Answer';
						$svg_first  = get_row_index() === 1 ? 'hidden' : '';
						$svg_second = get_row_index() === 1 ? '' : 'hidden';
						?>
						<div class="pt-6">
							<dt>
								<button type="button" class="flex w-full items-start justify-between text-left <?php echo esc_attr( $text_color_primary ); ?> faq-button" aria-controls="faq-0" aria-expanded="false" id="accordion-<?php echo esc_attr( get_row_index() ); ?>">
									<span class="text-base font-semibold leading-7"><?php echo esc_html( $question ); ?></span>
									<span class="ml-6 flex h-7 items-center">
										<svg class="<?php echo esc_attr( $svg_first ); ?> h-6 w-6 plus" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
											<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
										</svg>
										<svg class="<?php echo esc_attr( $svg_second ); ?> h-6 w-6 minus" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
											<path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
										</svg>
									</span>
								</button>
							</dt>
							<dd class="mt-2 pr-12 faq hidden" id="faq-<?php echo esc_attr( get_row_index() ); ?>">
								<p class="text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $answer ); ?></p>
							</dd>
						</div>

					<?php endwhile; ?>
				</dl>
			<?php else : ?>
				<dl class="mt-10 space-y-6 divide-y <?php echo esc_attr( $divider_color ); ?>">
					<div class="pt-6">
						<dt>
							<button type="button" class="flex w-full items-start justify-between text-left <?php echo esc_attr( $text_color_primary ); ?> faq-button" aria-controls="faq-0" aria-expanded="false" >
								<span class="text-base font-semibold leading-7">What&#039;s the best thing about Switzerland?</span>
								<span class="ml-6 flex h-7 items-center">
									<svg class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
									</svg>

									<svg class=" h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
									</svg>
								</span>
							</button>
						</dt>
						<dd class="mt-2 pr-12 faq" id="faq-1">
							<p class="text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">I don&#039;t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</p>
						</dd>
					</div>
					<div class="pt-6">
						<dt>
							<button type="button" class="flex w-full items-start justify-between text-left <?php echo esc_attr( $text_color_primary ); ?> faq-button" aria-controls="faq-0" aria-expanded="false" >
								<span class="text-base font-semibold leading-7">Why do you never see elephants hiding in trees?</span>
								<span class="ml-6 flex h-7 items-center">
									<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
									</svg>

									<svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
									</svg>
								</span>
							</button>
						</dt>
						<dd class="mt-2 pr-12 faq">
							<p class="text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">Because they&#039;re so good at it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</p>
						</dd>
					</div>
					<div class="pt-6">
						<dt>
							<button type="button" class="flex w-full items-start justify-between text-left <?php echo esc_attr( $text_color_primary ); ?> faq-button" aria-controls="faq-0" aria-expanded="false" >
								<span class="text-base font-semibold leading-7">What do you call someone with no body and no nose?</span>
								<span class="ml-6 flex h-7 items-center">
									<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
									</svg>

									<svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
									</svg>
								</span>
							</button>
						</dt>
						<dd class="mt-2 pr-12 faq">
							<p class="text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">Nobody knows. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</p>
						</dd>
					</div>
					<div class="pt-6">
						<dt>
							<button type="button" class="flex w-full items-start justify-between text-left <?php echo esc_attr( $text_color_primary ); ?> faq-button" aria-controls="faq-0" aria-expanded="false" >
								<span class="text-base font-semibold leading-7">How do you make holy water?</span>
								<span class="ml-6 flex h-7 items-center">
									<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
									</svg>

									<svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
									</svg>
								</span>
							</button>
						</dt>
						<dd class="mt-2 pr-12 faq">
							<p class="text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</p>
						</dd>
					</div>
					<div class="pt-6">
						<dt>
							<button type="button" class="flex w-full items-start justify-between text-left <?php echo esc_attr( $text_color_primary ); ?> faq-button" aria-controls="faq-0" aria-expanded="false" >
								<span class="text-base font-semibold leading-7">Why can&#039;t you hear a pterodactyl go to the bathroom?</span>
								<span class="ml-6 flex h-7 items-center">
									<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
									</svg>

									<svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
									</svg>
								</span>
							</button>
						</dt>
						<dd class="mt-2 pr-12 faq">
							<p class="text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">Because the pee is silent. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</p>
						</dd>
					</div>
				</dl>
			<?php endif; ?>
		</div>
	</div>
</div>
