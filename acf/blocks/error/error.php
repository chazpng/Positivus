<?php
/**
 * 404 Section Template.
 *
 * @package circles_x
 */

$style       = $block['className'] ?? '';
$error_style = get_field( 'error_style' );
$align       = $block['align'];
?>
<?php
$main_title           = get_field( 'title' ) ?: 'Page not found';
$main_description     = get_field( 'description' ) ?: 'Sorry, we couldnt find the page youre looking for.';
$main_label           = get_field( 'eyebrow_label' ) ?: '404';
$link_text            = get_field( 'link_text' ) ?: 'Go Back Home';
$link_url             = get_field( 'link_url' ) ?: '#';
$divide_border_color  = 'divide-gray-900/5 border-gray-900/5';
$button_color         = 'bg-indigo-600 hover:bg-indigo-500';
$text_color_label     = 'text-indigo-600';
$image_border         = 'ring-gray-900/10';
$text_color_primary   = 'text-gray-900';
$text_color_secondary = 'text-gray-600';
$bg_color             = '';
$align_text           = '';
$button_container     = 'justify-start';
$main_container       = 'grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8';
$text_container       = '';

if ( 'is-style-dark' === $style ) {
	$bg_color             = 'bg-gray-900';
	$text_color_label     = 'text-indigo-500';
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$image_border         = 'ring-white/10';
	$divide_border_color  = 'divide-white/10 border-white/10';
	$button_color         = 'bg-indigo-500 hover:bg-indigo-400';
}

switch ( $align ) {
	case 'center':
		$align_text       = 'text-center';
		$button_container = 'justify-center';
		break;

	case 'right':
		$align_text       = 'text-end';
		$button_container = 'justify-end';

	default:
		break;
}

if ( have_rows( 'list' ) ) {
	$main_container = 'mx-auto w-full max-w-7xl px-6 pb-16 pt-10 sm:pb-24 lg:px-8';
	$text_container = 'mx-auto mt-20 max-w-2xl text-center sm:mt-24';
}

?>
<?php if ( 'default' === $error_style ) : ?>
	<div class="gl-b-404-error <?php echo esc_attr( $bg_color ); ?>">
		<main class="<?php echo esc_attr( $main_container ); ?>">
			<div class="<?php echo esc_attr( $align_text ); ?> <?php echo esc_attr( $text_container ); ?>">
				<p class="text-base font-semibold <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $main_label ); ?></p>
				<h1 class="mt-4 text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-5xl"><?php echo esc_html( $main_title ); ?></h1>
				<p class="mt-6 text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $main_description ); ?></p>
				<?php if ( have_rows( 'list' ) ) : ?>
				<?php else : ?>
					<div class="mt-10 flex items-center <?php echo esc_attr( $button_container ); ?> gap-x-6">
						<a href="" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go back home</a>
						<a href="#" class="text-sm font-semibold <?php echo esc_attr( $text_color_primary ); ?>">Contact support <span aria-hidden="true">&rarr;</span></a>
					</div>
				<?php endif; ?>
			</div>
			<?php if ( have_rows( 'list' ) ) : ?>
				<div class="mx-auto mt-16 flow-root max-w-lg sm:mt-20">
					<ul role="list" class="-mt-6 divide-y border-b <?php echo esc_attr( $divide_border_color ); ?>">
						<?php
						while ( have_rows( 'list' ) ) :
							the_row();
							$list_title       = get_sub_field( 'title' ) ?: 'Your Label Here';
							$list_description = get_sub_field( 'description' ) ?: 'Your Description Here';
							$list_link        = get_sub_field( 'link' ) ?: '#';
							?>
							<li class="relative flex gap-x-6 py-6">
								<div class="flex h-10 w-10 flex-none items-center justify-center rounded-lg shadow-sm ring-1 <?php echo esc_attr( $image_border ); ?>">
									<?php
									echo wp_get_attachment_image(
										get_sub_field( 'list_icon' ),
										'full',
										'',
										array(
											'class' => 'h-6 w-6',
											'alt'   => 'Icon',
										)
									);
									?>
								</div>
								<div class="flex-auto">
									<h3 class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_primary ); ?>">
										<a href="<?php echo esc_attr( $list_link ); ?>">
											<span class="absolute inset-0" aria-hidden="true"></span>
											<?php echo esc_html( $list_title ); ?>
										</a>
									</h3>
									<p class="mt-2 text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $list_description ); ?></p>
								</div>
								<div class="flex-none self-center">
									<svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
									</svg>
								</div>
							</li>
						<?php endwhile; ?>
					</ul>
					<div class="mt-10 flex justify-center gap-x-6 items-center">
						<a href="<?php echo esc_attr( $link_url ); ?>" class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_label ); ?>">
							<span aria-hidden="true">&larr;</span>
							<?php echo esc_html( $link_text ); ?>
						</a>
						<?php if ( get_field( 'button_text' ) && get_field( 'button_link' ) ) : ?>
							<a href="<?php echo esc_attr( get_field( 'button_link' ) ); ?>" class="<?php echo esc_attr( $button_color ); ?> rounded-md px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><?php echo esc_html( get_field( 'button_text' ) ); ?></a>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>
		</main>
	</div>
<?php endif; ?>

<?php if ( 'image' === $error_style ) : ?>
	<main class="gl-b-404-error <?php echo esc_attr( $bg_color ); ?> relative isolate min-h-full">
		<?php echo wp_get_attachment_image( get_field( 'background_image' ), 'full', '', array( 'class' => 'absolute inset-0 -z-10 h-full w-full object-cover object-top' ) ); ?>
		<div class="mx-auto max-w-7xl px-6 py-32 text-center sm:py-40 lg:px-8">
			<p class="text-base font-semibold leading-8 <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $main_label ); ?></p>
			<h1 class="mt-4 text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-5xl <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $main_title ); ?></h1>
			<p class="mt-4 text-base <?php echo esc_attr( $text_color_secondary ); ?> sm:mt-6"><?php echo esc_html( $main_description ); ?></p>
			<div class="mt-10 flex justify-center">
				<a href="<?php echo esc_attr( $link_url ); ?>" class="text-sm font-semibold leading-7 <?php echo esc_attr( $text_color_primary ); ?>"><span aria-hidden="true">&larr;</span> <?php echo esc_html( $link_text ); ?></a>
			</div>
		</div>
	</main>
<?php endif; ?>

<?php if ( 'split' === $error_style ) : ?>
	<div class="grid min-h-full grid-cols-1 grid-rows-[1fr,auto,1fr] <?php echo esc_attr( $bg_color ); ?> lg:grid-cols-[max(50%,36rem),1fr]">
		<main class="mx-auto w-full max-w-7xl px-6 py-24 sm:py-32 lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:px-8">
			<div class="max-w-lg">
				<p class="text-base font-semibold leading-8 <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $main_label ); ?></p>
				<h1 class="mt-4 text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-5xl"><?php echo esc_html( $main_title ); ?></h1>
				<p class="mt-6 text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $main_description ); ?></p>
				<div class="mt-10">
					<a href="<?php echo esc_attr( $link_url ); ?>" class="text-sm font-semibold leading-7 <?php echo esc_attr( $text_color_label ); ?>"><span aria-hidden="true">&larr;</span> <?php echo esc_html( $link_text ); ?></a>
				</div>
			</div>
		</main>

		<div class="hidden lg:relative lg:col-start-2 lg:row-start-1 lg:row-end-4 lg:block">
			<?php echo wp_get_attachment_image( get_field( 'background_image' ), 'full', '', array( 'class' => 'absolute inset-0 h-full w-full object-cover' ) ); ?>
		</div>
	</div>

<?php endif; ?>
