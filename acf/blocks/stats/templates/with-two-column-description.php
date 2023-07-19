<?php
/**
 * Split Image Stats Template.
 *
 * @package greydientlab
 */

?>
<?php
$main_description     = empty( get_field( 'description' ) ) ? 'Your Description Here' : get_field( 'description' );
$main_description_two = empty( get_field( 'description_two' ) ) ? 'Your Description Here' : get_field( 'description_two' );
$main_title           = empty( get_field( 'title' ) ) ? 'Your Title Here' : get_field( 'title' );
$main_label           = empty( get_field( 'label' ) ) ? 'Your Title Here' : get_field( 'label' );
?>

<div class="bg-gray-900 py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
			<p class="text-base font-semibold leading-7 text-purple"><?php echo esc_html( $main_label ); ?></p>
			<h1 class="mt-2 text-3xl font-bold tracking-tight text-black sm:text-4xl"><?php echo esc_html( $main_title ); ?></h1>
			<div class="mt-10 grid max-w-xl grid-cols-1 gap-8 text-base leading-7 text-black lg:max-w-none lg:grid-cols-2">
				<div>
					<?php echo esc_html( $main_description ); ?>
				</div>
				<div>
				<?php echo esc_html( $main_description_two ); ?>
				</div>
			</div>
			<?php if ( have_rows( 'list' ) ) : ?>
			<dl class="mt-16 grid grid-cols-1 gap-x-8 gap-y-12 sm:mt-20 sm:grid-cols-2 sm:gap-y-16 lg:mt-28 lg:grid-cols-4">
				<?php
				while ( have_rows( 'list' ) ) :
					the_row();
					$list_title  = empty( get_sub_field( 'title' ) ) ? 'Your Title Here ' : get_sub_field( 'title' );
					$description = empty( get_sub_field( 'description' ) ) ? 'Your Description Here' : get_sub_field( 'description' );
					?>
				<div class="flex flex-col-reverse gap-y-3 border-l border-white/20 pl-6">
					<dt class="text-base leading-7 text-black"><?php echo esc_html( $list_title ); ?></dt>
					<dd class="text-3xl font-semibold tracking-tight text-black"><?php echo esc_html( $description ); ?></dd>
				</div>
				<?php endwhile; ?>
				<?php else : ?>
					<dl class="mt-16 grid grid-cols-1 gap-x-8 gap-y-12 sm:mt-20 sm:grid-cols-2 sm:gap-y-16 lg:mt-28 lg:grid-cols-4">
					<div class="flex flex-col-reverse gap-y-3 border-l border-white/20 pl-6">
					<dt class="text-base leading-7 text-gray-300">Your Title Here</dt>
					<dd class="text-3xl font-semibold tracking-tight text-black">Your Description Here</dd>
				</div>
				<div class="flex flex-col-reverse gap-y-3 border-l border-white/20 pl-6">
					<dt class="text-base leading-7 text-gray-300">Your Title Here</dt>
					<dd class="text-3xl font-semibold tracking-tight text-black">Your Description Here</dd>
				</div>
				<div class="flex flex-col-reverse gap-y-3 border-l border-white/20 pl-6">
					<dt class="text-base leading-7 text-gray-300">Your Title Here</dt>
					<dd class="text-3xl font-semibold tracking-tight text-black">Your Description Here</dd>
				</div>
				<div class="flex flex-col-reverse gap-y-3 border-l border-white/20 pl-6">
					<dt class="text-base leading-7 text-gray-300">Your Title Here</dt>
					<dd class="text-3xl font-semibold tracking-tight text-black">Your Description Here</dd>
				</div>
			</dl>
			<?php endif; ?>
		</div>
	</div>
</div>
