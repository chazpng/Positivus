<?php
/**
 * Featured Post Template.
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
$text_color_label     = 'text-indigo-600';
$text_color_caption   = 'text-gray-700';
$button_title         = get_field( 'button_name' ) ?: 'Continue reading';
$post_number          = get_field( 'post' ) ?: 1;

$simple_style   = get_field( 'single_style' );
$border_color_2 = 'border-gray-900/10';
$divide_color   = 'divide-gray-900/10';


if ( 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$text_color_label     = 'text-indigo-400';
	$bg_color             = 'bg-gray-900 dark';
	$text_color_badge     = 'text-gray-400';
	$text_color_caption   = 'text-gray-400';
	$border_color_2       = 'border-white/10';
	$divide_color         = 'divide-white/10';
}
?>

<?php
$article_id = 'post' === get_post_type() ? array( $post->ID ) : '';
$query      = new WP_Query(
	array(
		'post__not_in'   => $article_id,
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => $post_number,
		'paged'          => 1,
		'orderby'        => 'date',
		'order'          => 'DESC',
	)
);
?>

<div class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
	<div class="mx-auto grid max-w-7xl grid-cols-1 gap-x-8 gap-y-12 px-6 sm:gap-y-16 lg:grid-cols-2 lg:px-8">
		<?php
		if ( get_field( 'select_post' ) ) {
			$featured_posts = get_field( 'select_post' );

			if ( $featured_posts ) {
				foreach ( $featured_posts as $article_post ) {
					setup_postdata( $article_post );
					$article_featured_id = $article_post->ID;
					$article_link        = get_the_permalink( $article_featured_id );
					$article_title       = get_the_title( $article_featured_id );
					$article_excerpt     = get_the_excerpt( $article_featured_id );
					$article_date        = get_the_date( 'M j, Y' );
					$author_name         = get_the_author_meta( 'display_name' );
					$author_image        = get_avatar_url( get_the_author_meta( 'ID' ) );
				}
			}
			wp_reset_postdata();
		} else {
			$recent_posts = wp_get_recent_posts(
				array(
					'numberposts' => 1,
					'post_status' => 'publish',
				)
			);
			foreach ( $recent_posts as $post_item ) {
				$article_link    = get_permalink( $post_item['ID'] );
				$article_title   = $post_item['post_title'];
				$article_excerpt = $post_item['post_excerpt'];
				$article_date    = get_the_date( 'M j, Y' );
				$author_name     = get_the_author_meta( 'display_name' );
				$author_image    = get_avatar_url( get_the_author_meta( 'ID' ) );
			}
			wp_reset_postdata();
		}
		?>
		<article class="mx-auto w-full max-w-2xl lg:mx-0 lg:max-w-lg">
			<time datetime="2020-03-16" class="block text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $article_date ); ?></time>
			<h2 id="featured-post" class="mt-4 text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $article_title ); ?></h2>
			<p class="mt-4 text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $article_excerpt ); ?></p>
			<div class="mt-4 flex flex-col justify-between gap-6 sm:mt-8 sm:flex-row-reverse sm:gap-8 lg:mt-4 lg:flex-col">
				<div class="flex">
					<a href="<?php echo esc_url( $article_link ); ?>" class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_label ); ?>" aria-describedby="featured-post"><?php echo esc_html( $button_title ); ?> <span aria-hidden="true">&rarr;</span></a>
				</div>
				<div class="flex lg:border-t lg:<?php echo esc_attr( $border_color_2 ); ?> lg:pt-8">
					<a href="#" class="flex gap-x-2.5 text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_primary ); ?>">
						<img src="<?php echo esc_url( $author_image ); ?>" alt="" class="h-6 w-6 flex-none rounded-full bg-gray-50">
						<?php echo esc_html( $author_name ); ?>
					</a>
				</div>
			</div>
		</article>
		<div class="mx-auto w-full max-w-2xl border-t <?php echo esc_attr( $border_color_2 ); ?> pt-12 sm:pt-16 lg:mx-0 lg:max-w-none lg:border-t-0 lg:pt-0">
			<div class="-my-12 divide-y <?php echo esc_attr( $divide_color ); ?>">
				<?php
				while ( $query->have_posts() ) :
					$query->the_post();
					$permalink       = get_permalink( $query->ID );
					$article_link    = get_the_permalink( $article_id );
					$article_title   = get_the_title( $article_id );
					$article_excerpt = get_the_excerpt( $article_id );
					$article_date    = get_the_date( 'M j, Y' );
					$author_name     = get_the_author_meta( 'display_name' );
					$author_image    = get_avatar_url( get_the_author_meta( 'ID' ) );

					?>
					<article class="py-12">
						<div class="group relative max-w-xl">
							<time datetime="2020-03-16" class="block text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $article_date ); ?></time>
							<h2 class="mt-2 text-lg font-semibold <?php echo esc_attr( $text_color_primary ); ?> group-hover:<?php echo esc_attr( $text_color_secondary ); ?>">
								<a href="#">
									<span class="absolute inset-0"></span>
									<?php echo esc_html( $article_title ); ?>
								</a>
							</h2>
							<p class="mt-4 text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $article_excerpt ); ?></p>
						</div>
						<div class="mt-4 flex">
							<a href="#" class="relative flex gap-x-2.5 text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_primary ); ?>">
								<img src="<?php echo esc_url( $author_image ); ?>" alt="" class="h-6 w-6 flex-none rounded-full bg-gray-50">
								<?php echo esc_html( $author_name ); ?>
							</a>
						</div>
					</article>
					<?php 
				endwhile;
				wp_reset_postdata(); 
				?>
			</div>
		</div>
	</div>
</div>
