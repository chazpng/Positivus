<?php
/**
 * With Medium Images Template.
 * 
 * @package circles_x
 */

?>
<?php
$main_title       = empty( get_field( 'title' ) ) ? 'Your Title Here' : get_field( 'title' );
$main_description = empty( get_field( 'description' ) ) ? 'Your Description Here' : get_field( 'description' );
?>

<div class="bg-gray-900 py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto max-w-2xl lg:mx-0">
			<h2 class="text-3xl font-bold tracking-tight text-black sm:text-4xl"> <?php echo esc_html( $main_title ); ?></h2>
			<p class="mt-6 text-lg leading-8 text-black"><?php echo esc_html( $main_description ); ?></p>
		</div>
		<?php if ( have_rows( 'team_list' ) ) : ?>
			<ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-14 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-4">
				<?php
				while ( have_rows( 'team_list' ) ) :
					the_row();
					$name     = empty( get_sub_field( 'avatar_name' ) ) ? 'Avatar Name' : get_sub_field( 'avatar_name' );
					$position = empty( get_sub_field( 'position' ) ) ? 'Avatar Position' : get_sub_field( 'position' );
					$address  = empty( get_sub_field( 'avatar_address' ) ) ? 'Avatar Address' : get_sub_field( 'avatar_address' );
					?>
					<li>
						<?php echo wp_get_attachment_image( get_sub_field( 'avatar_image' ), 'full', '', array( 'class' => 'aspect-[14/13] w-full rounded-2xl object-cover' ) ); ?>
						<h3 class="mt-6 text-lg font-semibold leading-8 tracking-tight text-black"><?php echo esc_html( $name ); ?></h3>
						<p class="text-base leading-7 text-black"><?php echo esc_html( $position ); ?></p>
						<p class="text-sm leading-6 text-black"><?php echo esc_html( $address ); ?></p>
					</li>
				<?php endwhile; ?>
			<?php else : ?>
				<ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-14 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-4">

				<?php endif; ?>

				<!-- More people... -->
				</ul>
	</div>
</div>
