<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package greydientlab
 */

get_header();
?>

<main id="primary" class="site-main ">

	<div class="single-article-container">
		<div class="entry-content">
			<?php
			$blocks       = parse_blocks( $post->post_content );
			$block_length = count( $blocks );
			$count        = 1;
			$loop_count   = 1;
			?>

			<?php foreach ( $blocks as $block ) : ?>
				<?php if ( 2 === $count ) : ?>
					<div class="container mx-auto py-16">
						<div class="grid lg:grid-cols-12 mx-auto lg:gap-x-8 ">
							<div class="hidden lg:block lg:col-span-3  relative">
								<div class="table-wrapper sticky top-10 px-4 py-6 bg-gray-100/50 rounded-md text-lg">
								<p class="label text-lg font-semibold">Table of contents</p>
								<ul class="text-gray-600 gap-y-2 flex flex-col text-base mt-6">
									<li><a href="#">Animation easing</a></li>
									<li><a href="#">Colour guidelines</a></li>
									<li><a href="#">Fluid typography</a></li>
									<li><a href="#">Other resources</a></li>
									<li><a href="#">Other resources</a></li>
									<li><a href="#">Conclusion</a></li>
								</ul>
								</div>
							</div>
							<div class="lg:col-span-9 post-content">
							<?php endif ?>

							<?php echo wp_kses_post( render_block( $block ) ); ?>

							<?php if ( $count >= $block_length ) : ?>
							</div>
						</div>
					</div>
				<?php endif ?>

				<?php $count++; ?>
			<?php endforeach; ?>
		</div>
	</div>
</main><!-- #main -->
</div>
<?php
get_sidebar();
get_footer();
