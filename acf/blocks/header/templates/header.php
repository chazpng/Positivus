<?php
/**
 * With Stats Template.
 *
 * @package greydientlab
 */

$header_title         = get_field( 'title' ) ?: 'Work with us';
$header_info          = get_field( 'info' ) ?: 'Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.';
$container_class      = 'mx-auto max-w-7xl px-6 lg:px-8';
$header_container     = 'mx-auto max-w-2xl lg:mx-0';
$grid_align           = '';
$container_size       = '';
$header_class         = 'text-4xl font-bold tracking-tight text-white sm:text-6xl';
$text_color_primary   = '';
$text_color_label     = 'text-indigo-600';
$text_color_secondary = '';
$gradient_background  = '';
$bg_color             = '';

switch ( $align ) {
	case 'center':
		$container_class  = 'max-w-7xl px-6 mx-auto';
		$header_container = 'max-w-2xl mx-auto text-center';
		$grid_align       = 'justify-center text-center';
		break;

	case 'right':
		$grid_align       = 'justify-end text-right';
		$header_container = 'mx-auto flex flex-col align-end items-end text-right';
		$container_size   = 'max-w-2xl';

	default:
		break;
}

// Config: Colors.
if ( get_field( 'background_image' ) || 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$gradient_background  = 'from-[#ff4694] to-[#776fff]';
	$bg_color             = 'bg-gray-900';
	$text_color_label     = 'text-indigo-500';
}
?>
<div class="<?php echo esc_attr( $bg_color ); ?> relative isolate overflow-hidden py-24 sm:py-32">

	<?php if ( get_field( 'background_image' ) ) : ?>
		<?php
		echo wp_get_attachment_image(
			get_field( 'background_image' ),
			'full',
			'',
			array(
				'class' => 'absolute inset-0 -z-10 !h-full w-full object-cover object-right md:object-center',
				'alt'   => 'Background',
			)
		);
		?>
	<?php endif; ?>

	<?php if ( get_field( 'background_image' ) ) : ?>
		<div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
			<div class="<?php echo esc_attr( $gradient_background ); ?> aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
		</div>

		<div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
			<div class="<?php echo esc_attr( $gradient_background ); ?> aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
		</div>
	<?php endif; ?>

	<div class="<?php echo esc_attr( $container_class ); ?>">
		<div class="<?php echo esc_attr( $header_container ); ?>">

			<?php if ( get_field( 'subtitle' ) ) : ?>
				<p class="<?php echo esc_attr( $text_color_label ); ?> text-base font-semibold leading-7"><?php the_field( 'subtitle' ); ?></p>
			<?php endif; ?>

			<h2 class="<?php echo esc_attr( $text_color_primary ); ?> text-5xl font-bold tracking-tight <?php echo esc_attr( $container_size ); ?>">
				<?php echo esc_html( $header_title ); ?>
			</h2>

			<p class="<?php echo esc_attr( $text_color_primary ); ?> mt-6 text-lg leading-8 <?php echo esc_attr( $container_size ); ?>">
				<?php echo esc_html( $header_info ); ?>
			</p>
		</div>

		<div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">

			<?php if ( have_rows( 'links' ) ) : ?>
				<div class="<?php echo esc_attr( $text_color_primary ); ?> grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 sm:grid-cols-2 md:flex lg:gap-x-10 <?php echo esc_attr( $grid_align ); ?>">
					<?php
					while ( have_rows( 'links' ) ) :
						the_row();
						$page_link = get_sub_field( 'page_link' ) ?: '#';
						$link_text = get_sub_field( 'link_text' ) ?: 'Lorem Ipsum';
						?>
						<a href="<?php echo esc_attr( $page_link ); ?>"><?php echo esc_html( $link_text ); ?> <span aria-hidden="true">&rarr;</span></a>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>

			<?php if ( have_rows( 'stats' ) ) : ?>
				<dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4 <?php echo esc_attr( $grid_align ); ?>">
					<?php
					while ( have_rows( 'stats' ) ) :
						the_row();
						$count = get_sub_field( 'count' ) ?: '#';
						$info  = get_sub_field( 'info' ) ?: 'Lorem Ipsum';
						?>
						<div class="flex flex-col-reverse">
							<dt class="<?php echo esc_attr( $text_color_secondary ); ?> text-base leading-7"><?php echo esc_html( $info ); ?></dt>
							<dd class="<?php echo esc_attr( $text_color_primary ); ?> text-2xl font-bold leading-9 tracking-tight"><?php echo esc_html( $count ); ?></dd>
						</div>
					<?php endwhile; ?>
				</dl>
			<?php endif; ?>

			<?php if ( have_rows( 'cards' ) ) : ?>
				<div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-6 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8">
					<?php
					while ( have_rows( 'cards' ) ) :
						the_row();
						$label = get_sub_field( 'lable' ) ?: 'Lorem Ipsum';
						$info  = get_sub_field( 'info' ) ?: 'Consectetur vel non. Rerum ut consequatur nobis unde. Enim est quo corrupti consequatur.';
						?>
						<div class="flex gap-x-4 rounded-xl bg-white/5 p-6 ring-1 ring-inset ring-white/10">
							<?php if ( get_field( 'icon' ) ) : ?>
								<?php
								echo wp_get_attachment_image(
									get_field( 'icon' ),
									'full',
									'',
									array(
										'class' => 'absolute inset-0 -z-10 !h-full w-full object-cover object-right md:object-center',
										'alt'   => 'Background',
									)
								);
								?>
							<?php endif; ?>
							<div class="text-base leading-7">
								<h3 class="font-semibold text-white"><?php echo esc_html( $label ); ?></h3>
								<p class="mt-2 text-gray-300"><?php echo esc_html( $info ); ?></p>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
