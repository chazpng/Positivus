<?php
/**
 * With Small Images Template.
 * 
 * @package circles_x
 */

?>
<?php
$main_title       = empty( get_field( 'title' ) ) ? 'Your Title Here' : get_field( 'title' );
$main_description = empty( get_field( 'description' ) ) ? 'Your Description Here' : get_field( 'description' );
?>
<div class="bg-white py-24 sm:py-32">
	<div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
		<div class="max-w-2xl">
			<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
			<p class="mt-6 text-lg leading-8 text-gray-600"><?php echo esc_html( $main_description ); ?></p>
		</div>
		<?php if ( have_rows( 'team_list' ) ) : ?>
			<ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
				<?php
				while ( have_rows( 'team_list' ) ) :
					the_row();
					$name     = empty( get_sub_field( 'avatar_name' ) ) ? 'Avatar Name' : get_sub_field( 'avatar_name' );
					$position = empty( get_sub_field( 'position' ) ) ? 'Avatar Position' : get_sub_field( 'position' );
					?>

					<li>
						<div class="flex items-center gap-x-6">
							<?php echo wp_get_attachment_image( get_sub_field( 'avatar_image' ), 'full', '', array( 'class' => 'h-16 w-16 rounded-full' ) ); ?>
							<div>
								<h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900"><?php echo esc_html( $name ); ?></h3>
								<p class="text-sm font-semibold leading-6 text-indigo-600"><?php echo esc_html( $position ); ?></p>
							</div>
						</div>
					</li>
				<?php endwhile; ?>
			<?php else : ?>
				<ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
					<li>
						<div class="flex items-center gap-x-6">
							<img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
							<div>
								<h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Leslie Alexander</h3>
								<p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
							</div>
						</div>
					</li>
					<li>
						<div class="flex items-center gap-x-6">
							<img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
							<div>
								<h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Leslie Alexander</h3>
								<p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
							</div>
						</div>
					</li>
					<li>
						<div class="flex items-center gap-x-6">
							<img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
							<div>
								<h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Leslie Alexander</h3>
								<p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
							</div>
						</div>
					</li>
					<li>
						<div class="flex items-center gap-x-6">
							<img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
							<div>
								<h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Leslie Alexander</h3>
								<p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
							</div>
						</div>
					</li>
					<li>
						<div class="flex items-center gap-x-6">
							<img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
							<div>
								<h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Leslie Alexander</h3>
								<p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
							</div>
						</div>
					</li>
					<li>
						<div class="flex items-center gap-x-6">
							<img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
							<div>
								<h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Leslie Alexander</h3>
								<p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
							</div>
						</div>
					</li>
				<?php endif; ?>
				</ul>
	</div>
</div>
