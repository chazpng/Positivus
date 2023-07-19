<?php
/**
 * Simple Grid Stats Template.
 *
 * @package greydientlab
 */

?>
<?php
$main_description = empty( get_field( 'description' ) ) ? 'Your Description Here' : get_field( 'description' );
$main_title       = empty( get_field( 'title' ) ) ? 'Your Title Here' : get_field( 'title' );
?>

<div class="bg-white py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto max-w-2xl lg:max-w-none">
			<div class="text-center">
				<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
				<p class="mt-4 text-lg leading-8 text-gray-600"><?php echo esc_html( $main_description ); ?></p>
			</div>
			<?php if ( have_rows( 'list' ) ) : ?>
				<dl class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-4">
					<?php
					while ( have_rows( 'list' ) ) :
						the_row();
						$list_title  = empty( get_sub_field( 'title' ) ) ? 'Your Title Here ' : get_sub_field( 'title' );
						$description = empty( get_sub_field( 'description' ) ) ? 'Your Description Here' : get_sub_field( 'description' );
						?>
						<div class="flex flex-col bg-gray-400/5 p-8">
							<dt class="text-sm font-semibold leading-6 text-gray-600"><?php echo esc_html( $list_title ); ?></dt>
							<dd class="order-first text-3xl font-semibold tracking-tight text-gray-900"><?php echo esc_html( $description ); ?></dd>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
					<dl class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-4">
						<div class="flex flex-col bg-gray-400/5 p-8">
							<dt class="text-sm font-semibold leading-6 text-gray-600">Your Title Here</dt>
							<dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">Your Description Here </dd>
						</div>
						<div class="flex flex-col bg-gray-400/5 p-8">
							<dt class="text-sm font-semibold leading-6 text-gray-600">Your Description Here</dt>
							<dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">Your Description Here </dd>
						</div>
						<div class="flex flex-col bg-gray-400/5 p-8">
							<dt class="text-sm font-semibold leading-6 text-gray-600">Your Description Here</dt>
							<dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">Your Description Here </dd>
						</div>
						<div class="flex flex-col bg-gray-400/5 p-8">
							<dt class="text-sm font-semibold leading-6 text-gray-600">Your Description Here</dt>
							<dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">Your Description Here </dd>
						</div>
					<?php endif; ?>
					</dl>
		</div>
	</div>
</div>
