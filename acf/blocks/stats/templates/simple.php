<?php
/**
 * Simple Stats Template.
 *
 * @package greydientlab
 */

?>
<div class="bg-white py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<?php if ( have_rows( 'list' ) ) : ?>
			<dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
				<?php
				while ( have_rows( 'list' ) ) :
					the_row();
					$list_title  = empty( get_sub_field( 'title' ) ) ? 'Your Title Here ' : get_sub_field( 'title' );
					$description = empty( get_sub_field( 'description' ) ) ? 'Your Description Here' : get_sub_field( 'description' );
					?>
					<div class="mx-auto flex max-w-xs flex-col gap-y-4">
						<dt class="text-base leading-7 text-gray-600"><?php echo esc_html( $list_title ); ?></dt>
						<dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl"><?php echo esc_html( $description ); ?></dd>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
					<div class="mx-auto flex max-w-xs flex-col gap-y-4">
						<dt class="text-base leading-7 text-gray-600">Your Title Here</dt>
						<dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Your Description Here</dd>
					</div>
					<div class="mx-auto flex max-w-xs flex-col gap-y-4">
						<dt class="text-base leading-7 text-gray-600">Your Title Here</dt>
						<dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Your Description Here</dd>
					</div>
					<div class="mx-auto flex max-w-xs flex-col gap-y-4">
						<dt class="text-base leading-7 text-gray-600">Your Title Here</dt>
						<dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Your Description Here</dd>
					</div>
				<?php endif; ?>
				</dl>
	</div>
</div>
