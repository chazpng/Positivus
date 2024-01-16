<?php
/**
 * Simple FAQ Template.
 *
 * @package circles_x
 */

?>

<?php
$bg_color             = '';
$text_color_primary   = 'text-gray-900';
$text_color_secondary = 'text-gray-600';
$description          = get_field( 'description' ) ?: 'Lorem ipsum dolor sit amet consect adipisicing possimus.';
$main_title           = get_field( 'title' ) ?: 'Frequently asked questions';



if ( 'is-style-dark' === $style ) {
	$text_color_primary     = 'text-white';
	$text_color_secondary   = 'text-gray-300';
	$text_color_label       = 'text-indigo-400';
	$bg_color               = 'bg-gray-900';
	$stats_background_color = 'bg-white/5';
	$button_style           = 'rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold <?php echo esc_attr($text_color_primary); ?> shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white';
}
?>

<div class="<?php echo esc_attr( $bg_color ); ?>">
	<div class="mx-auto max-w-7xl px-6 py-24 sm:pt-32 lg:px-8 lg:py-40">
		<div class="lg:grid lg:grid-cols-12 lg:gap-8">
			<div class="lg:col-span-5">
				<h2 class="text-2xl font-bold leading-10 tracking-tight <?php echo esc_attr( $text_color_primary ); ?> mb-4"><?php echo esc_html( $main_title ); ?></h2>
				<div><?php echo wp_kses_post( get_field( 'description' ) ); ?></div>
			</div>
			<div class="mt-10 lg:col-span-7 lg:mt-0">
				<?php if ( have_rows( 'questions' ) ) : ?>
					<dl class="space-y-10">
						<?php 
						while ( have_rows( 'questions' ) ) :
							the_row();
							$question = get_sub_field( 'question' ) ?: 'Question';
							$answer   = get_sub_field( 'answer' ) ?: 'Answer';
							?>
							<div>
								<dt class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $question ); ?></dt>
								<dd class="mt-2 text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $answer ); ?></dd>
							</div>
						<?php endwhile; ?>
					</dl>
				<?php else : ?>
					<dl class="space-y-10">
						<div>
							<dt class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_primary ); ?>">How do you make holy water?</dt>
							<dd class="mt-2 text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
						</div>
						<div>
							<dt class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_primary ); ?>">What's the best thing about Switzerland?</dt>
							<dd class="mt-2 text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
						</div>
						<div>
							<dt class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_primary ); ?>">What do you call someone with no body and no nose?</dt>
							<dd class="mt-2 text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">Nobody knows. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
						</div>
						<div>
							<dt class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_primary ); ?>">Why do you never see elephants hiding in trees?</dt>
							<dd class="mt-2 text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">Because they're so good at it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</dd>
						</div>
					</dl>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
