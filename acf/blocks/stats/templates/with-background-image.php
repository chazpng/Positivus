<?php
/**
 * With Background Image Stats Template.
 *
 * @package greydientlab
 */

?>
<?php
$main_description = empty( get_field( 'description' ) ) ? 'Your Description Here' : get_field( 'description' );
$main_title       = empty( get_field( 'title' ) ) ? 'Your Title Here' : get_field( 'title' );
$main_label       = empty( get_field( 'label' ) ) ? 'Your Label Here' : get_field( 'label' );
?>

<div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
	<?php echo wp_get_attachment_image( get_field( 'background_image' ), 'full', '', array( 'class' => 'absolute inset-0 -z-10 h-full w-full object-cover' ) ); ?>
	<div class="relative mx-auto max-w-7xl px-6 lg:px-8">
		<div class="absolute -bottom-8 -left-96 -z-10 transform-gpu blur-3xl sm:-bottom-64 sm:-left-40 lg:-bottom-32 lg:left-8 xl:-left-10" aria-hidden="true">
			<div class="aspect-[1266/975] w-[79.125rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
		</div>
		<div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
			<h2 class="text-base font-semibold leading-8 text-indigo-400"><?php echo esc_html( $main_label ); ?></h2>
			<p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl"><?php echo esc_html( $main_title ); ?></p>
			<p class="mt-6 text-lg leading-8 text-gray-300"><?php echo esc_html( $main_description ); ?></p>
		</div>
		<?php if ( have_rows( 'list' ) ) : ?>
			<dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-10 text-white sm:mt-20 sm:grid-cols-2 sm:gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">
				<?php
				while ( have_rows( 'list' ) ) :
					the_row();
					$list_title  = empty( get_sub_field( 'title' ) ) ? 'Your Title Here ' : get_sub_field( 'title' );
					$description = empty( get_sub_field( 'description' ) ) ? 'Your Description Here' : get_sub_field( 'description' );
					?>
					<div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
						<dt class="text-sm leading-6"><?php echo esc_html( $list_title ); ?></dt>
						<dd class="order-first text-3xl font-semibold tracking-tight"><?php echo esc_html( $description ); ?></dd>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-10 text-white sm:mt-20 sm:grid-cols-2 sm:gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">
					<div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
						<dt class="text-sm leading-6">Your Title Here</dt>
						<dd class="order-first text-3xl font-semibold tracking-tight">Your Description Here</dd>
					</div>
					<div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
						<dt class="text-sm leading-6">Your Title Here</dt>
						<dd class="order-first text-3xl font-semibold tracking-tight">Your Description Here</dd>
					</div>
					<div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
						<dt class="text-sm leading-6">Your Title Here</dt>
						<dd class="order-first text-3xl font-semibold tracking-tight">Your Description Here</dd>
					</div>
					<div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
						<dt class="text-sm leading-6">Your Title Here</dt>
						<dd class="order-first text-3xl font-semibold tracking-tight">Your Description Here</dd>
					</div>
				</dl>
			<?php endif; ?>
	</div>
</div>
