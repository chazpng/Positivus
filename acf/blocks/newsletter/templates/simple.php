<?php
/**
 * Newsletter Simple Template.
 *
 * @package circles_x
 */

$style      = $block['className'] ?? '';
$news_style = get_field( 'news_style' );
$align      = $block['align'];
?>

<?php
$bg_color         = '';
$text_color_label = 'text-indigo-600';
$newsletter_style = 'default';
$outer_container  = 'mx-auto max-w-7xl px-6 lg:px-8';
$text_container   = 'max-w-2xl text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl';
$form_container   = 'mt-10 max-w-md';

if ( 'is-style-dark' === $style ) {
	$outer_container      = 'mx-auto max-w-7xl px-6 lg:px-8';
	$text_container       = 'max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl';
	$newsletter_style     = 'dark';
	$bg_color             = 'bg-gray-900';
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-white';
}
if ( 'is-style-side' === $style ) {
	$outer_container  = 'mx-auto grid max-w-7xl grid-cols-1 gap-10 px-6 lg:grid-cols-12 lg:gap-8 lg:px-8';
	$text_container   = 'max-w-xl text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl lg:col-span-7';
	$form_container   = 'w-full max-w-md lg:col-span-5 lg:pt-2';
	$neswletter_style = 'default';
}

if ( 'is-style-darkside' === $style ) {
	$outer_container  = 'mx-auto grid max-w-7xl grid-cols-1 gap-10 px-6 lg:grid-cols-12 lg:gap-8 lg:px-8';
	$text_container   = 'max-w-xl text-3xl font-bold tracking-tight sm:text-4xl text-white lg:col-span-7';
	$form_container   = 'w-full max-w-md lg:col-span-5 lg:pt-2';
	$newsletter_style = 'dark';
	$bg_color         = 'bg-gray-900';
}
?>
<?php
$main_title     = get_field( 'title' ) ?: 'Want product news and updates?';
$description    = get_field( 'description' ) ?: 'Sign up for our newsletter.';
$on_brand_color = empty( get_field( 'background_color' ) ) ? $bg_color : get_field( 'background_color' );
?>
<?php if ( 'default' === get_field( 'simple_type' ) ) : ?>
	<div class="<?php echo esc_attr( $bg_color ); ?> py-16 sm:py-24 lg:py-32" style="background-color: <?php echo esc_attr( $on_brand_color ); ?>">
		<div class="<?php echo esc_attr( $outer_container ); ?>">
			<div class="<?php echo esc_attr( $text_container ); ?>">
				<h2 class="inline sm:block "><?php echo esc_html( $main_title ); ?></h2>
				<p class="inline sm:block "><?php echo esc_html( $description ); ?></p>
			</div>
			<div class="<?php echo esc_attr( $form_container ); ?> <?php echo esc_attr( $newsletter_style ); ?>">
				<?php echo do_shortcode( get_field( 'shortcode' ) ); ?>
				<div><?php echo wp_kses_post( get_field( 'label' ) ); ?></div>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php if ( 'icon' === get_field( 'simple_type' ) ) : ?>
	<div class="relative isolate overflow-hidden bg-gray-900 py-16 sm:py-24 lg:py-32">
		<div class="mx-auto max-w-7xl px-6 lg:px-8 icon-style">
			<div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">

				<div class="max-w-xl lg:max-w-lg">
					<h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
					<p class="mt-4 text-lg leading-8 text-gray-300"><?php echo esc_html( $description ); ?></p>
					<div class="mt-6 flex max-w-md gap-x-4">
						<?php echo do_shortcode( get_field( 'shortcode' ) ); ?>
					</div>
				</div>
				<dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
					<?php if ( have_rows( 'list' ) ) : ?>
						<?php
						while ( have_rows( 'list' ) ) :
							the_row();
							$list_label       = get_sub_field( 'list_label' ) ?: 'List Label';
							$list_description = get_sub_field( 'list_description' ) ?: 'List Description';
							$list_icon        = get_sub_field( 'list_description' ) ?: 'List Description';
							?>
							<div class="flex flex-col items-start">
								<div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
									<?php
									echo wp_get_attachment_image(
										get_sub_field( 'list_icon' ),
										'full',
										'',
										array(
											'class' => 'h-6 w-6 text-white',
											'alt'   => 'Icon',
										)
									);
									?>
								</div>
								<dt class="mt-4 font-semibold text-white"><?php echo esc_html( $list_label ); ?></dt>
								<dd class="mt-2 leading-7 text-gray-400"><?php echo esc_html( $list_description ); ?></dd>
							</div>
						<?php endwhile; ?>
					<?php else : ?>
						<div class="flex flex-col items-start">
							<div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
							</div>
							<dt class="mt-4 font-semibold text-white">Weekly articles</dt>
							<dd class="mt-2 leading-7 text-gray-400">Non laboris consequat cupidatat laborum magna. Eiusmod non irure cupidatat duis commodo amet.</dd>
						</div>
						<div class="flex flex-col items-start">
							<div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
							</div>
							<dt class="mt-4 font-semibold text-white">No spam</dt>
							<dd class="mt-2 leading-7 text-gray-400">Officia excepteur ullamco ut sint duis proident non adipisicing. Voluptate incididunt anim.</dd>
						</div>
					<?php endif; ?>
				</dl>
			</div>
		</div>
		<div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
			<div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
		</div>
	</div>
<?php endif; ?>
