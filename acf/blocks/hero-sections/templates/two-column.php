<?php
/**
 * Simple Hero Template.
 *
 * @package circles_x
 */

?>

<?php
$bg_color                = '';
$style_mode              = 'light';
$outer_container         = 'relative isolate px-6 pt-14 lg:px-8';
$inner_container         = 'mx-auto max-w-2xl py-32 sm:py-48 lg:py-56';
$backgrond_drop_color    = 'from-[#ff80b5] to-[#9089fc] from-[#80caff] to-[#4f46e5]';
$eyebrow_link_ring       = 'ring-1 ring-gray-900/10 hover:ring-gray-900/20';
$text_color_primary      = 'text-gray-900';
$text_color_secondary    = 'text-gray-600';
$primary_button_color    = 'bg-indigo-600 hover:bg-indigo-500 focus-visible:outline-indigo-600 ';
$main_title              = get_field( 'title' ) ?: 'Data to enrich your online business';
$main_description        = get_field( 'description' ) ?: 'Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.';
$primary_button          = get_field( 'primary_button_text' ) ?: 'Get Started';
$secondary_button        = get_field( 'secondary_button_text' ) ?: 'Learn More';
$primary_eyebrow_label   = get_field( 'eyebrow_primary_label' ) ?: 'Whats New';
$secondary_eyebrow_label = get_field( 'eyebrow_secondary_label' ) ?: 'Just shipped v1.0';
$main_container          = 'relative isolate overflow-hidden';
$outer_container         = 'mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40';
$inner_container         = 'mx-auto max-w-2xl lg:mx-0 lg:max-w-xl lg:flex-shrink-0 lg:pt-8';

$code     = get_field( 'code' ) ?: 'Your Code Here';
$language = get_field( 'language' );
$geshi    = new GeSHi( $code, $language );
$geshi->enable_classes( true );
$geshi->set_overall_class( 'geshi' );
$geshi->enable_line_numbers( GESHI_FANCY_LINE_NUMBERS );


if ( 'is-style-dark' === $style ) {
	$backgrond_drop_color = 'from-[#80caff] to-[#4f46e5]';
	$eyebrow_link_ring    = 'ring-1 ring-white/10 hover:ring-white/20';
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$text_color_label     = 'text-indigo-400';
	$border_color         = 'border-indigo-400';
	$style_mode           = 'dark';
	$container_color      = 'bg-white/5';
	$bg_color             = 'bg-gray-900';
	$image_icon_bg        = 'bg-indigo-400';
	$primary_button_color = 'bg-indigo-500 hover:bg-indigo-400 focus-visible:outline-indigo-500 ';
}

if ( 'phone' === get_field( 'two_column_type' ) ) {
	$main_container  = 'relative isolate pt-14';
	$outer_container = 'mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:flex lg:items-center lg:gap-x-10 lg:px-8 lg:py-40';
	$inner_container = 'mx-auto max-w-2xl lg:mx-0 lg:flex-auto';
}

if ( 'image' === get_field( 'two_column_type' ) ) {
	$main_container  = 'relative';
	$outer_container = 'mx-auto max-w-7xl lg:grid lg:grid-cols-12 lg:gap-x-8 lg:px-8';
	$inner_container = 'mx-auto max-w-7xl lg:grid lg:grid-cols-12 lg:gap-x-8 lg:px-8';
}
?>
<?php if ( 'default' === get_field( 'two_column_type' ) || 'phone' === get_field( 'two_column_type' ) ) : ?>
	<div class="<?php echo esc_attr( $main_container ); ?> <?php echo esc_attr( $bg_color ); ?> <?php echo esc_attr( $style_mode ); ?>">
		<?php if ( 'default' === get_field( 'two_column_type' ) || 'phone' === get_field( 'two_column_type' ) || 'tiles' === get_field( 'two_column_type' ) ) : ?>
			<?php if ( 'is-style-light' === $style ) : ?>
				<svg class="absolute inset-0 -z-10 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
					<defs>
						<pattern id="0787a7c5-978c-4f66-83c7-11c213f99cb7" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
							<path d="M.5 200V.5H200" fill="none" />
						</pattern>
					</defs>
					<rect width="100%" height="100%" stroke-width="0" fill="url(#0787a7c5-978c-4f66-83c7-11c213f99cb7)" />
				</svg>
			<?php endif; ?>
			<?php if ( 'is-style-dark' === $style ) : ?>
				<svg class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
					<defs>
						<pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
							<path d="M.5 200V.5H200" fill="none" />
						</pattern>
					</defs>
					<svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
						<path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z" stroke-width="0" />
					</svg>
					<rect width="100%" height="100%" stroke-width="0" fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)" />
				</svg>
				<div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]" aria-hidden="true">
					<div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"></div>
				</div>
			<?php endif; ?>
		<?php endif; ?>
		<div class="<?php echo esc_attr( $outer_container ); ?>">
			<div class="<?php echo esc_attr( $inner_container ); ?>">
				<?php if ( 'default' === get_field( 'two_column_type' ) ) : ?>
					<div class="mt-24 sm:mt-32 lg:mt-16">
						<a href="<?php the_field( 'primary_eyebrow_link' ); ?>" class="inline-flex space-x-6">
							<span class="rounded-full bg-indigo-500/10 px-3 py-1 text-sm font-semibold leading-6 text-indigo-400 ring-1 ring-inset ring-indigo-500/20"><?php echo esc_html( $primary_eyebrow_label ); ?></span>
							<span class="inline-flex items-center space-x-2 text-sm font-medium leading-6 <?php echo esc_attr( $text_color_secondary ); ?>">
								<span><?php echo esc_html( $secondary_eyebrow_label ); ?></span>
								<svg class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
									<path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
								</svg>
							</span>
						</a>
					</div>
				<?php endif; ?>
				<?php if ( 'phone' === get_field( 'two_column_type' ) ) : ?>
					<div class="flex">
						<div class="relative flex items-center gap-x-4 rounded-full px-4 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
							<span class="font-semibold text-indigo-600"><?php echo esc_html( $primary_eyebrow_label ); ?></span>
							<span class="h-4 w-px bg-gray-900/10" aria-hidden="true"></span>
							<a href="<?php the_field( 'primary_eyebrow_link' ); ?>" class="flex items-center gap-x-1">
								<span class="absolute inset-0" aria-hidden="true"></span>
								<?php echo esc_html( $primary_secondary_label ); ?>
								<svg class="-mr-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
									<path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
								</svg>
							</a>
						</div>
					</div>
				<?php endif; ?>

				<h1 class="mt-10 text-4xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-6xl"><?php echo esc_html( $main_title ); ?></h1>
				<p class="mt-6 text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $main_description ); ?></p>
				<div class="mt-10 flex items-center gap-x-6">
					<a href="<?php the_field( 'primary_button_link' ); ?>" class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white <?php echo esc_attr( $primary_button_color ); ?> shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 "><?php echo esc_html( $primary_button ); ?></a>
					<a href="<?php the_field( 'secondary_button_link' ); ?>" class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_attr( $secondary_button ); ?> <span aria-hidden="true">→</span></a>
				</div>
			</div>
			<?php if ( 'default' === get_field( 'two_column_type' ) ) : ?>
				<div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
					<div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
						<div class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-inset ring-gray-900/10 lg:-m-4 lg:rounded-2xl lg:p-4">
							<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'full', '', array( 'class' => 'w-[76rem] rounded-md shadow-2xl ring-1 ring-gray-900/10' ) ); ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<?php if ( 'phone' === get_field( 'two_column_type' ) ) : ?>
				<div class="mt-16 sm:mt-24 lg:mt-0 lg:flex-shrink-0 lg:flex-grow">
					<svg viewBox="0 0 366 729" role="img" class="mx-auto w-[22.875rem] max-w-full drop-shadow-xl">
						<title>App screenshot</title>
						<defs>
							<clipPath id="2ade4387-9c63-4fc4-b754-10e687a0d332">
								<rect width="316" height="684" rx="36" />
							</clipPath>
						</defs>
						<path fill="#4B5563" d="M363.315 64.213C363.315 22.99 341.312 1 300.092 1H66.751C25.53 1 3.528 22.99 3.528 64.213v44.68l-.857.143A2 2 0 0 0 1 111.009v24.611a2 2 0 0 0 1.671 1.973l.95.158a2.26 2.26 0 0 1-.093.236v26.173c.212.1.398.296.541.643l-1.398.233A2 2 0 0 0 1 167.009v47.611a2 2 0 0 0 1.671 1.973l1.368.228c-.139.319-.314.533-.511.653v16.637c.221.104.414.313.56.689l-1.417.236A2 2 0 0 0 1 237.009v47.611a2 2 0 0 0 1.671 1.973l1.347.225c-.135.294-.302.493-.49.607v377.681c0 41.213 22 63.208 63.223 63.208h95.074c.947-.504 2.717-.843 4.745-.843l.141.001h.194l.086-.001 33.704.005c1.849.043 3.442.37 4.323.838h95.074c41.222 0 63.223-21.999 63.223-63.212v-394.63c-.259-.275-.48-.796-.63-1.47l-.011-.133 1.655-.276A2 2 0 0 0 366 266.62v-77.611a2 2 0 0 0-1.671-1.973l-1.712-.285c.148-.839.396-1.491.698-1.811V64.213Z" />
						<path fill="#343E4E" d="M16 59c0-23.748 19.252-43 43-43h246c23.748 0 43 19.252 43 43v615c0 23.196-18.804 42-42 42H58c-23.196 0-42-18.804-42-42V59Z" />
						<foreignObject width="316" height="684" transform="translate(24 24)" clip-path="url(#2ade4387-9c63-4fc4-b754-10e687a0d332)">
							<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'full', '', array( 'class' => '' ) ); ?>
						</foreignObject>
					</svg>
				</div>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>

<?php if ( 'code' === get_field( 'two_column_type' ) ) : ?>
	<div class="<?php echo esc_attr( $bg_color ); ?>">
		<div class="relative isolate overflow-hidden bg-gradient-to-b from-indigo-100/20">
			<div class="mx-auto max-w-7xl pb-24 pt-10 sm:pb-32 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:px-8 lg:py-40">
				<div class="px-6 lg:px-0 lg:pt-4">
					<div class="mx-auto max-w-2xl">
						<div class="max-w-lg">
							<div class="mt-24 sm:mt-32 lg:mt-16">
								<a href="<?php the_field( 'primary_eyebrow_link' ); ?>" class="inline-flex space-x-6">
									<span class="rounded-full bg-indigo-500/10 px-3 py-1 text-sm font-semibold leading-6 text-indigo-400 ring-1 ring-inset ring-indigo-500/20"><?php echo esc_html( $primary_eyebrow_label ); ?></span>
									<span class="inline-flex items-center space-x-2 text-sm font-medium leading-6 <?php echo esc_attr( $text_color_secondary ); ?>">
										<span><?php echo esc_html( $secondary_eyebrow_label ); ?></span>
										<svg class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
											<path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
										</svg>
									</span>
								</a>
							</div>
							<h1 class="mt-10 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl"><?php echo esc_html( $main_title ); ?></h1>
							<p class="mt-6 text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $main_description ); ?></p>
							<div class="mt-10 flex items-center gap-x-6">
								<a href="<?php the_field( 'primary_button_link' ); ?>" class="rounded-md px-3.5 py-2.5 text-sm font-semibold text-white <?php echo esc_attr( $primary_button_color ); ?> shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 "><?php echo esc_html( $primary_button ); ?></a>
								<a href="<?php the_field( 'secondary_button_link' ); ?>" class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_attr( $secondary_button ); ?> <span aria-hidden="true">→</span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-20 sm:mt-24 md:mx-auto md:max-w-2xl lg:mx-0 lg:mt-0 lg:w-screen">
					<div class="absolute inset-y-0 right-1/2 -z-10 -mr-10 w-[200%] skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 md:-mr-20 lg:-mr-36" aria-hidden="true"></div>
					<div class="shadow-lg md:rounded-3xl">
						<div class="bg-indigo-500 [clip-path:inset(0)] md:[clip-path:inset(0_round_theme(borderRadius.3xl))]">
							<div class="absolute -inset-y-px left-1/2 -z-10 ml-10 w-[200%] skew-x-[-30deg] bg-indigo-100 opacity-20 ring-1 ring-inset ring-white md:ml-20 lg:ml-36" aria-hidden="true"></div>
							<div class="relative px-6 pt-8 sm:pt-16 md:pl-16 md:pr-0">
								<div class="mx-auto max-w-2xl md:mx-0 md:max-w-none">
									<div class="w-screen overflow-hidden rounded-tl-xl bg-gray-900">
										<div class="flex bg-gray-800/40 ring-1 ring-white/5">
											<div class="-mb-px flex text-sm font-medium leading-6 text-gray-400">
												<div class="border-b border-r border-b-white/20 border-r-white/10 bg-white/5 px-4 py-2 text-white">NotificationSetting.jsx</div>
												<div class="border-r border-gray-600/10 px-4 py-2">App.jsx</div>
											</div>
										</div>
										<div class="px-6 pb-14 pt-6 text-white">
											<?php echo wp_kses_post( $geshi->parse_code() ); ?>
										</div>
									</div>
								</div>
								<div class="pointer-events-none absolute inset-0 ring-1 ring-inset ring-black/10 md:rounded-3xl" aria-hidden="true"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="absolute inset-x-0 bottom-0 -z-10 h-24 bg-gradient-to-t from-white sm:h-32"></div>
		</div>
	</div>
<?php endif; ?>

<?php if ( 'image' === get_field( 'two_column_type' ) ) : ?>
	<div class="relative <?php echo esc_attr( $bg_color ); ?>">
		<div class="mx-auto max-w-7xl lg:grid lg:grid-cols-12 lg:gap-x-8 lg:px-8">
			<div class="px-6 pb-24 pt-10 sm:pb-32 lg:col-span-7 lg:px-0 lg:pb-56 lg:pt-48 xl:col-span-6">
				<div class="mx-auto max-w-2xl lg:mx-0">
					<div class="hidden sm:mt-32 sm:flex lg:mt-16">
						<div class="relative rounded-full px-3 py-1 text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?> <?php echo esc_attr( $eyebrow_link_ring ); ?> ">
							<div><?php echo wp_kses_post( get_field( 'eyebrow_link' ) ); ?></div>
						</div>
					</div>
					<h1 class="mt-24 text-4xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:mt-10 sm:text-6xl"><?php echo esc_html( $main_title ); ?></h1>
					<p class="mt-6 text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $main_description ); ?></p>
					<div class="mt-10 flex items-center gap-x-6">
						<a href="<?php the_field( 'primary_button_link' ); ?>" class="rounded-md px-3.5 py-2.5 text-sm font-semibold text-white <?php echo esc_attr( $primary_button_color ); ?> shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 "><?php echo esc_html( $primary_button ); ?></a>
						<a href="<?php the_field( 'secondary_button_link' ); ?>" class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_attr( $secondary_button ); ?> <span aria-hidden="true">→</span></a>
					</div>
				</div>
			</div>
			<div class="relative lg:col-span-5 lg:-mr-8 xl:absolute xl:inset-0 xl:left-1/2 xl:mr-0">
				<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'full', '', array( 'class' => 'aspect-[3/2] w-full bg-gray-50 object-cover lg:absolute lg:inset-0 lg:aspect-auto lg:h-full' ) ); ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if ( 'angled' === get_field( 'two_column_type' ) ) : ?>
	<div class="relative">
		<div class="mx-auto max-w-7xl">
			<div class="relative z-10 pt-14 lg:w-full lg:max-w-2xl">
				<svg class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-white lg:block" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
					<polygon points="0,0 90,0 50,100 0,100" />
				</svg>

				<div class="relative px-6 py-32 sm:py-40 lg:px-8 lg:py-56 lg:pr-0">
					<div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
						<div class="hidden sm:mb-10 sm:flex">
							<div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-500 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
								Anim aute id magna aliqua ad ad non deserunt sunt. <a href="#" class="whitespace-nowrap font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
							</div>
						</div>
						<h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Data to enrich your online business</h1>
						<p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
						<div class="mt-10 flex items-center gap-x-6">
							<a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
							<a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
			<img class="aspect-[3/2] object-cover lg:aspect-auto lg:h-full lg:w-full" src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1587&q=80" alt="">
		</div>
	</div>
	</div>
<?php endif; ?>
