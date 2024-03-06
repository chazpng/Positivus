<?php
/**
 * Featured Blocks Template.
 *
 * @package greydientlab
 */

$style          = $block['className'] ?? '';
$features_style = get_field( 'features_style' );
?>
<div class="gl-b-featured-block">
	<div class="container m-auto flex py-12 flex-col lg:flex-row">
		<div class="grow grid grid-cols-1 lg:grid-cols-3 gap-x-8 gap-y-12">
			<div class="w-full">
				<h2 class="text-black text-xl font-semibold"><?php the_field( 'label' ); ?></h2>
			</div>
			<?php $acf_pages = get_field( 'pages' ); ?>
			<ul class="col-span-3 lg:col-span-2 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-2 sm:gap-y-10 md:grid-cols-3 xl:gap-x-3">

				<?php if ( $acf_pages ) : ?>
					<?php foreach ( $acf_pages as $acf_page ) : ?>
						<?php
						$permalink     = get_permalink( $acf_page->ID );
						$post_title    = $acf_page->post_title;
						$subpages      = get_pages(
							array(
								'child_of' => $acf_page->ID,
							)
						);
						$subpage_count = count( $subpages );
						$count_text    = $subpage_count > 1 ? 'components' : 'component';
						?>
						<li class="p-2 group hover:bg-gray-200/20 rounded-lg">
							<a href="<?php echo esc_url( $permalink ); ?>" class="features-block-img">
								<?php
								echo get_the_post_thumbnail(
									$acf_page->ID,
									'full',
									'',
									array(
										'class' => 'featured-image w-full object-cover',
										'alt'   => 'Featured',
									)
								);
								?>
								<p class="title pt-2 font-medium leading-5 text-sm  group-hover:text-indigo-600"><?php echo esc_html( $post_title ); ?></p>
								<p class="count relative mt-1.5 text-xs font-medium text-slate-500 "><?php echo esc_html( $subpage_count . ' ' . $count_text ); ?></p>
							</a>
						</li>
					<?php endforeach; ?>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</div>
