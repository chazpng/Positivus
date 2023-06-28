<?php
/**
 * Simple Feature Template.
 *
 * @package greydientlab
 */

?>

<?php
$main_title  = empty( get_field( 'title' ) ) ? 'Your Title Here' : get_field( 'title' );
$description = empty( get_field( 'description' ) ) ? 'Your Description Here' : get_field( 'description' );
?>
<div class="bg-white py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto max-w-2xl lg:mx-0">
			<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
			<p class="mt-6 text-lg leading-8 text-gray-600"><?php echo esc_html( $description ); ?></p>
		</div>
		<?php if ( have_rows( 'list' ) ) : ?>
			<dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-base leading-7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
				<?php
				while ( have_rows( 'list' ) ) :
					the_row();
					$list_title       = empty( get_sub_field( 'list_title' ) ) ? 'Your Title Here' : get_sub_field( 'list_title' );
					$list_description = empty( get_sub_field( 'list_description' ) ) ? 'Your Description Here' : get_sub_field( 'list_description' );
					?>
					<div>
						<dt class="font-semibold text-gray-900"><?php echo esc_html( $list_title ); ?></dt>
						<dd class="mt-1 text-gray-600"><?php echo esc_html( $list_description ); ?></dd>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-base leading-7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
				<div>
					<dt class="font-semibold text-gray-900">Your Title Here</dt>
					<dd class="mt-1 text-gray-600">Your Description Here</dd>
				</div>
				<div>
					<dt class="font-semibold text-gray-900">Your Title Here</dt>
					<dd class="mt-1 text-gray-600">Your Description Here</dd>
				</div>
				<div>
					<dt class="font-semibold text-gray-900">Your Title Here</dt>
					<dd class="mt-1 text-gray-600">Your Description Here</dd>
				</div>
				<div>
					<dt class="font-semibold text-gray-900">Your Title Here</dt>
					<dd class="mt-1 text-gray-600">Your Description Here</dd>
				</div>
				<div>
					<dt class="font-semibold text-gray-900">Your Title Here</dt>
					<dd class="mt-1 text-gray-600">Your Description Here</dd>
				</div>
				<div>
					<dt class="font-semibold text-gray-900">Your Title Here</dt>
					<dd class="mt-1 text-gray-600">Your Description Here</dd>
				</div>
			</dl>
		<?php endif; ?>
	</div>
</div>
