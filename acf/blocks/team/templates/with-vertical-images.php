<?php
/**
 * With Vertical Images Template.
 * 
 * @package circles_x
 */

?>
<?php
$main_title       = empty( get_field( 'title' ) ) ? 'Your Title Here' : get_field( 'title' );
$main_description = empty( get_field( 'description' ) ) ? 'Your Description Here' : get_field( 'description' );
?>

<div class="bg-white py-24 md:py-32">
	<div class="mx-auto grid max-w-7xl grid-cols-1 gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-5">
		<div class="max-w-2xl xl:col-span-2">
			<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
			<p class="mt-6 text-lg leading-8 text-gray-600"><?php echo esc_html( $main_description ); ?></p>
		</div>
		<?php if ( have_rows( 'team_list' ) ) : ?>
			<ul role="list" class="-mt-12 space-y-12 divide-y divide-gray-200 xl:col-span-3">
				<?php
				while ( have_rows( 'team_list' ) ) :
					the_row();
					$name        = empty( get_sub_field( 'avatar_name' ) ) ? 'Avatar Name' : get_sub_field( 'avatar_name' );
					$position    = empty( get_sub_field( 'position' ) ) ? 'Avatar Position' : get_sub_field( 'position' );
					$description = empty( get_sub_field( 'avatar_description' ) ) ? 'Avatar Description' : get_sub_field( 'avatar_description' );
					?>
					<li class="flex flex-col gap-10 pt-12 sm:flex-row">
						<?php echo wp_get_attachment_image( get_sub_field( 'avatar_image' ), 'full', '', array( 'class' => 'aspect-[4/5] w-52 flex-none rounded-2xl object-cover' ) ); ?>
						<div class="max-w-xl flex-auto">
							<h3 class="text-lg font-semibold leading-8 tracking-tight text-gray-900"><?php echo esc_html( $name ); ?></h3>
							<p class="text-base leading-7 text-gray-600"><?php echo esc_html( $position ); ?></p>
							<p class="mt-6 text-base leading-7 text-gray-600"><?php echo esc_html( $description ); ?></p>

							<?php if ( have_rows( 'social_links' ) ) : ?>

								<ul role="list" class="mt-6 flex gap-x-6">
									<?php
									while ( have_rows( 'social_links' ) ) :
										the_row();
										$social_name = empty( get_sub_field( 'social_name' ) ) ? 'Social Name' : get_sub_field( 'social_name' );
										?>
										<li>
											<a href="<?php echo esc_html( get_sub_field( 'social_link' ) ); ?>" class="text-gray-400 hover:text-gray-500">
												<span class="sr-only"><?php echo esc_html( $social_name ); ?></span>
												<?php echo wp_get_attachment_image( get_sub_field( 'social_icon' ), 'full', '', array( 'class' => 'h-5 w-5' ) ); ?>
											</a>
										</li>
									<?php endwhile; ?>
								<?php else : ?>
									<ul role="list" class="mt-6 flex gap-x-6">
										<li>
											<a href="#" class="text-gray-400 hover:text-gray-500">
												<span class="sr-only">LinkedIn</span>
												<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
													<path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
												</svg>
											</a>
										</li>
									<?php endif; ?>
									</ul>
						</div>
					</li>
				<?php endwhile; ?>
			<?php else : ?>
				<ul>
				<?php endif; ?>

				<!-- More people... -->
				</ul>
	</div>
</div>
