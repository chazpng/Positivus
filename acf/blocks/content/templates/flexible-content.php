<?php
/**
 * Flexible Template.
 *
 * @package greydientlab
 */

?>

<?php
$style                = $block['className'] ?? '';
$bg_color             = '';
$container_color      = 'bg-gray-50';
$text_color_primary   = 'text-gray-900';
$text_color_secondary = 'text-gray-600';
$text_color_caption   = 'text-gray-500';
$text_color_label     = 'text-indigo-600';
$border_color_1       = 'border-gray-900/10';
$border_color_2       = 'border-indigo-600';
$button_color         = 'rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600';


if ( 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$text_color_label     = 'text-indigo-400';
	$container_color      = 'bg-white/5';
	$text_color_caption   = 'text-gray-400';
	$bg_color             = 'bg-gray-900 dark';
	$border_color_1       = 'border-white/5';
	$border_color_2       = 'border-indigo-500';
	$button_color         = 'rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500';
}


?>

<?php if ( have_rows( 'content' ) ) : ?>
	<?php
	while ( have_rows( 'content' ) ) :
		the_row();
		$layout = get_row_layout( 'content' );
		?>
		<?php if ( 'paragraph' === $layout ) : ?>
			<?php if ( get_sub_field( 'content_title' ) ) : ?>
				<h2 class="mt-16 text-2xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( get_sub_field( 'content_title' ) ); ?></h2>
				<p class="mt-6"><?php echo wp_kses_post( get_sub_field( 'content_paragraph' ) ); ?></p>
			<?php else : ?>
				<p class="mt-8"><?php echo wp_kses_post( get_sub_field( 'content_paragraph' ) ); ?></p>
			<?php endif; ?>
		<?php endif; ?>
		<?php if ( 'bullets_list_with_icon' === $layout ) : ?>
			<?php if ( have_rows( 'content_bullets' ) ) : ?>
				<ul role="list" class="mt-8 max-w-xl space-y-8 <?php echo esc_attr( $text_color_secondary ); ?>">
					<?php
					while ( have_rows( 'content_bullets' ) ) :
						the_row();
						$list_title       = get_sub_field( 'bullet_title' ) ?: 'Your Title Here';
						$list_description = get_sub_field( 'bullet_description' ) ?: 'Your Description Here';
						?>
						<li class="flex gap-x-3">
							<?php echo wp_get_attachment_image( get_sub_field( 'icon_image' ), 'full', '', array( 'class' => 'mt-1 h-5 w-5 flex-none' ) ); ?>
							<span><strong class="font-semibold <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $list_title ); ?></strong> <?php echo esc_html( $list_description ); ?></span>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php else : ?>
			<?php endif; ?>
		<?php endif; ?>
		<?php 
		if ( 'testimonial' === $layout ) :
			$quote    = get_sub_field( 'quote' ) ?: 'Your Quote Here';
			$name     = get_sub_field( 'avatar_name' ) ?: 'Avatar Name';
			$position = get_sub_field( 'position' ) ?: 'Position';
			?>
			<figure class="mt-10 border-l <?php echo esc_attr( $border_color_2 ); ?> pl-9">
				<blockquote class="font-semibold <?php echo esc_attr( $text_color_primary ); ?>">
					<p>“<?php echo esc_html( $quote ); ?>”</p>
				</blockquote>
				<figcaption class="mt-6 flex gap-x-4">
					<?php echo wp_get_attachment_image( get_sub_field( 'avatar' ), 'full', '', array( 'class' => 'h-6 w-6 flex-none rounded-full bg-gray-50' ) ); ?>
					<div class="text-sm leading-6"><strong class="font-semibold <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $name ); ?></strong> - <?php echo esc_html( $position ); ?></div>
				</figcaption>
			</figure>
		<?php endif; ?>
		<?php if ( 'image' === $layout ) : ?>
			<figure class="mt-16">
				<?php echo wp_get_attachment_image( get_sub_field( 'featured_image' ), 'full', '', array( 'class' => 'aspect-video rounded-xl bg-gray-50 object-cover' ) ); ?>
				<figcaption class="mt-4 flex gap-x-2 text-sm leading-6 <?php echo esc_attr( $text_color_caption ); ?>">
					<?php echo wp_get_attachment_image( get_sub_field( 'description_icon' ), 'full', '', array( 'class' => 'mt-0.5 h-5 w-5 flex-none' ) ); ?>
					<?php echo esc_html( get_sub_field( 'image_description' ) ); ?>
				</figcaption>
			</figure>
		<?php endif; ?>
		<?php if ( 'stats' === $layout ) : ?>
			<dl class="mt-10 grid grid-cols-2 gap-8 border-t <?php echo esc_attr( $border_color_1 ); ?> pt-10 sm:grid-cols-4">
				<?php if ( have_rows( 'stats_repeater' ) ) : ?>
					<?php
					while ( have_rows( 'stats_repeater' ) ) :
						the_row();
						$stat_title = get_sub_field( 'title' ) ?: 'Your Title Here';
						$stat_value = get_sub_field( 'value' ) ?: 'Value';
						?>
						<div>
							<dt class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $stat_title ); ?></dt>
							<dd class="mt-2 text-3xl font-bold leading-10 tracking-tight <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $stat_value ); ?></dd>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>
			</dl>
		<?php endif; ?>
		<?php if ( 'url_link' === $layout ) : ?>
			<div class="mt-10 flex">
				<?php if ( 'simple' === get_sub_field( 'button_style' ) ) : ?>
					<a href="<?php echo esc_url( the_sub_field( 'url' ) ); ?>" class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( get_sub_field( 'link_title' ) ); ?><span aria-hidden="true">&rarr;</span></a>
				<?php endif; ?>
				<?php if ( 'background' === get_sub_field( 'button_style' ) ) : ?>
					<a href="<?php echo esc_url( the_sub_field( 'url' ) ); ?>" class="h-10 <?php echo esc_attr( $button_color ); ?>"><?php echo esc_html( get_sub_field( 'link_title' ) ); ?></a>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
