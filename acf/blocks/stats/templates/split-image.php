<?php
/**
 * Split Image Stats Template.
 *
 * @package greydientlab
 */

?>
<?php
$main_description = empty( get_field( 'description' ) ) ? 'Your Description Here' : get_field( 'description' );
$main_title       = empty( get_field( 'title' ) ) ? 'Your Title Here' : get_field( 'title' );
$main_label       = empty( get_field( 'label' ) ) ? 'Your Label Here' : get_field( 'label' );
?>

<div class="relative bg-white">
	<?php echo wp_get_attachment_image( get_field( 'background_image' ), 'full', '', array( 'class' => 'h-56 w-full bg-gray-50 object-cover lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-1/2' ) ); ?>
	<div class="mx-auto grid max-w-7xl lg:grid-cols-2">
		<div class="px-6 pb-24 pt-16 sm:pb-32 sm:pt-20 lg:col-start-2 lg:px-8 lg:pt-32">
			<div class="mx-auto max-w-2xl lg:mr-0 lg:max-w-lg">
				<h2 class="text-base font-semibold leading-8 text-indigo-600"><?php echo esc_html( $main_label ); ?></h2>
				<p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php echo esc_html( $main_title ); ?></p>
				<p class="mt-6 text-lg leading-8 text-gray-600"><?php echo esc_html( $main_description ); ?></p>
				<?php if ( have_rows( 'list' ) ) : ?>
					<dl class="mt-16 grid max-w-xl grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 xl:mt-16">
						<?php
						while ( have_rows( 'list' ) ) :
							the_row();
							$list_title  = empty( get_sub_field( 'title' ) ) ? 'Your Title Here ' : get_sub_field( 'title' );
							$description = empty( get_sub_field( 'description' ) ) ? 'Your Description Here' : get_sub_field( 'description' );
							?>

							<div class="flex flex-col gap-y-3 border-l border-gray-900/10 pl-6">
								<dt class="text-sm leading-6 text-gray-600"><?php echo esc_html( $list_title ); ?></dt>
								<dd class="order-first text-3xl font-semibold tracking-tight text-gray-900"><?php echo esc_html( $description ); ?></dd>
							</div>
						<?php endwhile; ?>
					<?php else : ?>
						<dl class="mt-16 grid max-w-xl grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 xl:mt-16">
							<div class="flex flex-col gap-y-3 border-l border-gray-900/10 pl-6">
								<dt class="text-sm leading-6 text-gray-600">Your Title Here</dt>
								<dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">Your Description Here</dd>
							</div>
							<div class="flex flex-col gap-y-3 border-l border-gray-900/10 pl-6">
								<dt class="text-sm leading-6 text-gray-600">Your Title Here</dt>
								<dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">Your Description Here</dd>
							</div>
							<div class="flex flex-col gap-y-3 border-l border-gray-900/10 pl-6">
								<dt class="text-sm leading-6 text-gray-600">Your Title Here</dt>
								<dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">Your Description Here</dd>
							</div>
							<div class="flex flex-col gap-y-3 border-l border-gray-900/10 pl-6">
								<dt class="text-sm leading-6 text-gray-600">Your Title Here</dt>
								<dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">Your Description Here</dd>
							</div>
						</dl>
					<?php endif; ?>
			</div>
		</div>
	</div>
</div>
