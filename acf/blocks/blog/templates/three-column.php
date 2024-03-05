<?php
/**
 * Three Column Template.
 *
 * @package circles_x
 */

?>

<?php
$article_id = 'post' === get_post_type() ? array( $post->ID ) : '';
$query      = new WP_Query(
	array(
		'post__not_in'   => $article_id,
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => 3,
		'paged'          => 1,
		'orderby'        => 'title',
		'order'          => 'DESC',
	)
);
?>

<?php
$style                = $block['className'] ?? '';
$bg_color             = '';
$text_color_primary   = 'text-gray-900';
$text_color_secondary = 'text-gray-600';
$text_color_badge     = 'text-gray-500';
$text_color_label     = 'text-indigo-600';
$text_color_caption   = 'text-gray-700';
$main_title           = get_field( 'title' ) ?: 'From the blog';
$main_description     = get_field( 'description' ) ?: 'Learn how to grow your business with our expert advice.';
$container_color      = 'bg-gray-50 hover:bg-gray-100';
$border_color         = 'border-gray-200';

if ( 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$text_color_label     = 'text-indigo-400';
	$bg_color             = 'bg-gray-900 dark';
	$text_color_badge     = 'text-gray-400';
	$text_color_caption   = 'text-gray-400';
	$container_color      = 'bg-white/10 hover:bg-white/5';
	$border_color         = 'border-white/10';
}
?>
<?php if ( 'simple' === get_field( 'three_column_style' ) ) : ?>
	<div class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
		<div class="mx-auto max-w-7xl px-6 lg:px-8">
			<div class="mx-auto max-w-2xl lg:mx-0">
				<h2 class="text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
				<p class="mt-2 text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $main_description ); ?></p>
			</div>
			<div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t <?php echo esc_attr( $border_color ); ?> pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
				<?php
				while ( $query->have_posts() ) :
					$query->the_post();
					$author_name  = get_the_author_meta( 'display_name' );
					$categories   = get_the_category();
					$author_id    = get_the_author_meta( 'ID' );
					$author_role  = implode( ', ', get_userdata( $author_id )->roles );
					$author_image = get_avatar_url( get_the_author_meta( 'ID' ) );
					$permalink    = get_permalink( $query->ID );
					if ( ! empty( $categories ) ) {
						$first_category      = $categories[0];
						$first_category_name = $first_category->name;
					}
					?>
					<article class="flex max-w-xl flex-col items-start justify-between">
						<div class="flex items-center gap-x-4 text-xs">
							<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" class="<?php echo esc_attr( $text_color_badge ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
							<a href="#" class="relative z-10 rounded-full <?php echo esc_attr( $container_color ); ?> px-3 py-1.5 font-medium <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $first_category_name ); ?></a>
						</div>
						<div class="group relative">
							<h3 class="mt-3 text-lg font-semibold leading-6 <?php echo esc_attr( $text_color_primary ); ?> group-hover:<?php echo esc_attr( $text_color_secondary ); ?>">
								<a href="<?php echo esc_url( $permalink ); ?>">
									<span class="absolute inset-0"></span>
									<?php echo esc_html( get_the_title() ); ?>
								</a>
							</h3>
							<p class="mt-5 line-clamp-3 text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( get_the_excerpt() ); ?></p>
						</div>
						<div class="relative mt-8 flex items-center gap-x-4">
							<img src="<?php echo esc_url( $author_image ); ?>" alt="" class="h-10 w-10 rounded-full <?php echo esc_attr( $container_color ); ?>">
							<div class="text-sm leading-6">
								<p class="font-semibold <?php echo esc_attr( $text_color_primary ); ?>">
									<a href="#">
										<span class="absolute inset-0"></span>
										<?php echo esc_html( $author_name ); ?>
									</a>
								</p>
								<p class="<?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $author_role ); ?></p>
							</div>
						</div>
					</article>
					<?php 
				endwhile;
				wp_reset_postdata(); 
				?>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php if ( 'image' === get_field( 'three_column_style' ) ) : ?>
	<div class="<?php echo esc_html( $bg_color ); ?> py-24 sm:py-32">
		<div class="mx-auto max-w-7xl px-6 lg:px-8">
			<div class="mx-auto max-w-2xl text-center">
				<h2 class="text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
				<p class="mt-2 text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $main_description ); ?></p>
			</div>
			<div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
				<?php
				while ( $query->have_posts() ) :
					$query->the_post();
					$author_name   = get_the_author_meta( 'display_name' );
					$categories    = get_the_category();
					$author_id     = get_the_author_meta( 'ID' );
					$author_role   = implode( ', ', get_userdata( $author_id )->roles );
					$author_image  = get_avatar_url( get_the_author_meta( 'ID' ) );
					$permalink     = get_permalink( $query->ID );
					$thumbnail_id  = get_post_thumbnail_id();
					$thumbnail_url = wp_get_attachment_url( $thumbnail_id );
					if ( ! empty( $categories ) ) {
						$first_category      = $categories[0];
						$first_category_name = $first_category->name;
					}
					?>
					<article class="flex flex-col items-start justify-between">
						<div class="relative w-full">
							<img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
							<div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
						</div>
						<div class="max-w-xl">
							<div class="mt-8 flex items-center gap-x-4 text-xs">
								<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" class="<?php echo esc_attr( $text_color_badge ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
								<a href="#" class="relative z-10 rounded-full <?php echo esc_attr( $container_color ); ?> px-3 py-1.5 font-medium <?php echo esc_attr( $text_color_secondary ); ?> "><?php echo esc_html( $first_category_name ); ?></a>
							</div>
							<div class="group relative">
								<h3 class="mt-3 text-lg font-semibold leading-6 <?php echo esc_attr( $text_color_primary ); ?> group-hover:<?php echo esc_attr( $text_color_secondary ); ?>">
									<a href="<?php echo esc_url( $permalink ); ?>">
										<span class="absolute inset-0"></span>
										<?php echo esc_html( get_the_title() ); ?>
									</a>
								</h3>
								<p class="mt-5 line-clamp-3 text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( get_the_excerpt() ); ?></p>
							</div>
							<div class="relative mt-8 flex items-center gap-x-4">
								<img src="<?php echo esc_url( $author_image ); ?>" alt="" class="h-10 w-10 rounded-full ">
								<div class="text-sm leading-6">
									<p class="font-semibold <?php echo esc_attr( $text_color_primary ); ?>">
										<a href="#">
											<span class="absolute inset-0"></span>
											<?php echo esc_html( $author_name ); ?>
										</a>
									</p>
									<p class="<?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $author_role ); ?></p>
								</div>
							</div>
						</div>
					</article>
					<?php 
				endwhile;
				wp_reset_postdata(); 
				?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if ( 'bg-image' === get_field( 'three_column_style' ) ) : ?>
	<div class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
		<div class="mx-auto max-w-7xl px-6 lg:px-8">
			<div class="mx-auto max-w-2xl text-center">
				<h2 class="text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
				<p class="mt-2 text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $main_description ); ?></p>
			</div>
			<div class="mx-auto mt-16 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
				<?php
				while ( $query->have_posts() ) :
					$query->the_post();
					$author_name   = get_the_author_meta( 'display_name' );
					$categories    = get_the_category();
					$author_id     = get_the_author_meta( 'ID' );
					$author_role   = implode( ', ', get_userdata( $author_id )->roles );
					$author_image  = get_avatar_url( get_the_author_meta( 'ID' ) );
					$permalink     = get_permalink( $query->ID );
					$thumbnail_id  = get_post_thumbnail_id();
					$thumbnail_url = wp_get_attachment_url( $thumbnail_id );
					if ( ! empty( $categories ) ) {
						$first_category      = $categories[0];
						$first_category_name = $first_category->name;
					}
					?>
					<article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
						<img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
						<div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
						<div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>

						<div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
							<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" class="mr-8"><?php echo esc_html( get_the_date() ); ?></time>
							<div class="-ml-4 flex items-center gap-x-4">
								<svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
									<circle cx="1" cy="1" r="1" />
								</svg>
								<div class="flex gap-x-2.5">
									<img src="<?php echo esc_url( $author_image ); ?>" alt="" class="h-6 w-6 flex-none rounded-full bg-white/10 ">
									<?php echo esc_html( $author_name ); ?>
								</div>
							</div>
						</div>
						<h3 class="mt-3 text-lg font-semibold leading-6 text-white">
							<a href="<?php echo esc_url( $permalink ); ?>">
								<span class="absolute inset-0"></span>
								<?php echo esc_html( get_the_title() ); ?>
							</a>
						</h3>
					</article>
					<?php 
				endwhile;
				wp_reset_postdata(); 
				?>
			</div>
		</div>
	</div>
<?php endif; ?>
