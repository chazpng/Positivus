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
	<div class="container m-auto flex">
		<div class="w-64">
			<?php the_field( 'label' ); ?>
		</div>

		<div class="grow grid grid-cols-3 gap-4">
			<?php $acf_pages = get_field( 'pages' ); ?>
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
					$count_text    = $subpage_count > 1 ? 'Components' : 'Component';
					?>
					<a href="<?php echo esc_url( $permalink ); ?>">
						<?php
						echo get_the_post_thumbnail(
							$acf_page->ID,
							'full',
							'',
							array(
								'class' => 'featured-image',
								'alt'   => 'Featured',
							)
						);
						?>
						<p class="title"><?php echo esc_html( $post_title ); ?></p>
						<p class="count"><?php echo esc_html( $subpage_count . ' ' . $count_text ); ?></p>
					</a>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
