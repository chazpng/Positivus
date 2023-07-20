<?php
/**
 * Grid With Round Images Template.
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
		<div class="mx-auto max-w-2xl lg:mx-0">
			<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
			<p class="mt-6 text-lg leading-8 text-gray-600"><?php echo esc_html( $main_description ); ?></p>
		</div>
		<?php if ( have_rows( 'team_list' ) ) : ?>
			<ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-2 gap-x-8 gap-y-16 text-center sm:grid-cols-3 md:grid-cols-4 lg:mx-0 lg:max-w-none lg:grid-cols-5 xl:grid-cols-6">
				<?php
				while ( have_rows( 'team_list' ) ) :
					the_row();
					$name     = empty( get_sub_field( 'avatar_name' ) ) ? 'Avatar Name' : get_sub_field( 'avatar_name' );
					$position = empty( get_sub_field( 'position' ) ) ? 'Avatar Position' : get_sub_field( 'position' );
					?>
					<li>
						<?php echo wp_get_attachment_image( get_sub_field( 'avatar_image' ), 'full', '', array( 'class' => 'mx-auto h-24 w-24 rounded-full' ) ); ?>
						<h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900"><?php echo esc_html( $name ); ?></h3>
						<p class="text-sm leading-6 text-gray-600"><?php echo esc_html( $position ); ?></p>
					</li>
				<?php endwhile; ?>
			<?php else : ?>
				<ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-2 gap-x-8 gap-y-16 text-center sm:grid-cols-3 md:grid-cols-4 lg:mx-0 lg:max-w-none lg:grid-cols-5 xl:grid-cols-6">
				<?php endif; ?>

				<!-- More people... -->
				</ul>
	</div>
</div>
