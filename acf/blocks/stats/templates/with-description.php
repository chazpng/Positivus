<?php
/**
 * With Description Stats Template.
 *
 * @package greydientlab
 */

?>
<?php
$main_description     = empty( get_field( 'description' ) ) ? 'Your Description Here' : get_field( 'description' );
$main_description_two = empty( get_field( 'description_two' ) ) ? 'Your Description Here' : get_field( 'description_two' );
$main_title           = empty( get_field( 'title' ) ) ? 'Your Title Here' : get_field( 'title' );

?>

<div class="bg-white py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
			<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
			<div class="mt-6 flex flex-col gap-x-8 gap-y-20 lg:flex-row">
				<div class="lg:w-full lg:max-w-2xl lg:flex-auto">
					<p class="text-xl leading-8 text-gray-600"><?php echo esc_html( $main_description ); ?></p>
					<p class="mt-10 max-w-xl text-base leading-7 text-gray-700"> <?php echo esc_html( $main_description_two ); ?></p>
				</div>
				<div class="lg:flex lg:flex-auto lg:justify-center">
					<?php if ( have_rows( 'list' ) ) : ?>
						<dl class="w-64 space-y-8 xl:w-80">
							<?php
							while ( have_rows( 'list' ) ) :
								the_row();
								$list_title  = empty( get_sub_field( 'description' ) ) ? 'Your Description Here ' : get_sub_field( 'description' );
								$description = empty( get_sub_field( 'title' ) ) ? 'Your Title Here' : get_sub_field( 'title' );
								?>

								<div class="flex flex-col-reverse gap-y-4">
									<dt class="text-base leading-7 text-gray-600"><?php echo esc_html( $list_title ); ?></dt>
									<dd class="text-5xl font-semibold tracking-tight text-gray-900"><?php echo esc_html( $description ); ?></dd>
								</div>
							<?php endwhile; ?>
						<?php else : ?>
							<dl class="w-64 space-y-8 xl:w-80">
								<div class="flex flex-col-reverse gap-y-4">
									<dt class="text-base leading-7 text-gray-600">Your Title Here</dt>
									<dd class="text-5xl font-semibold tracking-tight text-gray-900">Your Description Here</dd>
								</div>
								<div class="flex flex-col-reverse gap-y-4">
									<dt class="text-base leading-7 text-gray-600">Your Title Here</dt>
									<dd class="text-5xl font-semibold tracking-tight text-gray-900">Your Description Here</dd>
								</div>
								<div class="flex flex-col-reverse gap-y-4">
									<dt class="text-base leading-7 text-gray-600">Your Title Here</dt>
									<dd class="text-5xl font-semibold tracking-tight text-gray-900">Your Description Here</dd>
								</div>
							</dl>
						<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
