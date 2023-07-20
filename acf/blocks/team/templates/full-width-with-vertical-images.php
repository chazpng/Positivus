<?php
/**
 * Full Width with Vertical Images Template.
 * 
 * @package circles_x
 */

?>
<?php
$main_title       = empty( get_field( 'title' ) ) ? 'Your Title Here' : get_field( 'title' );
$main_description = empty( get_field( 'description' ) ) ? 'Your Description Here' : get_field( 'description' );
?>
<div class="bg-white py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto max-w-2xl sm:text-center">
			<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
			<p class="mt-6 text-lg leading-8 text-gray-600"><?php echo esc_html( $main_description ); ?></p>
		</div>
		<?php if ( have_rows( 'team_list' ) ) : ?>
			<ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-6 gap-y-20 sm:grid-cols-2 lg:max-w-4xl lg:gap-x-8 xl:max-w-none">
				<?php
				while ( have_rows( 'team_list' ) ) :
					the_row();
					$name        = empty( get_sub_field( 'avatar_name' ) ) ? 'Avatar Name' : get_sub_field( 'avatar_name' );
					$position    = empty( get_sub_field( 'position' ) ) ? 'Avatar Position' : get_sub_field( 'position' );
					$description = empty( get_sub_field( 'avatar_description' ) ) ? 'Short Paragraph' : get_sub_field( 'avatar_description' );
					?>
					<li class="flex flex-col gap-6 xl:flex-row">
						<?php echo wp_get_attachment_image( get_sub_field( 'avatar_image' ), 'full', '', array( 'class' => 'aspect-[4/5] w-52 flex-none rounded-2xl object-cover' ) ); ?>
						<div class="flex-auto">
							<h3 class="text-lg font-semibold leading-8 tracking-tight text-gray-900"><?php echo esc_html( $name ); ?></h3>
							<p class="text-base leading-7 text-gray-600"><?php echo esc_html( $position ); ?></p>
							<p class="mt-6 text-base leading-7 text-gray-600"><?php echo esc_html( $description ); ?></p>
						</div>
					</li>
				<?php endwhile; ?>
			<?php else : ?>
				<ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-6 gap-y-20 sm:grid-cols-2 lg:max-w-4xl lg:gap-x-8 xl:max-w-none">
				<?php endif; ?>


				<!-- More people... -->
				</ul>
	</div>
</div>
