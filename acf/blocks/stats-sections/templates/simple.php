<?php
/**
 * Simple Stat Template.
 *
 * @package circles_x
 */

?>

<?php
$bg_color               = '';
$text_color_primary     = 'text-gray-900';
$text_color_secondary   = 'text-gray-600';
$text_color_label       = 'text-indigo-600';
$line_color             = 'bg-gray-900/10';
$border_color           = 'border-gray-900/20';
$description            = get_field( 'description' ) ?: 'Lorem ipsum dolor sit amet consect adipisicing possimus.';
$main_title             = get_field( 'title' ) ?: 'Trusted by creators worldwide';
$label                  = get_field( 'label' ) ?: 'Deploy Faster';
$paragraph              = get_field( 'paragraph' ) ?: 'Aliquet nec orci mattis amet quisque ullamcorper neque, nibh sem. At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at vitae feugiat egestas ac. Diam nulla orci at in viverra scelerisque eget. Eleifend egestas fringilla sapien. Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper sed amet vitae sed turpis id. Id dolor praesent donec est. Odio penatibus risus viverra tellus varius sit neque erat velit. Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper sed amet vitae sed turpis id.';
$stats_background_color = 'bg-gray-400/5';


if ( 'is-style-dark' === $style ) {
	$text_color_primary     = 'text-white';
	$text_color_secondary   = 'text-gray-300';
	$text_color_label       = 'text-indigo-400';
	$border_color           = 'border-white/20';
	$line_color             = 'bg-gray-600';
	$gradient_background    = 'from-[#ff4694] to-[#776fff]';
	$bg_color               = 'bg-gray-900';
	$stats_background_color = 'bg-white/5';
	$button_style           = 'rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold <?php echo esc_attr($text_color_primary); ?> shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white';
}
?>


<div class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<?php if ( 'default' === get_field( 'simple_type' ) ) : ?>
			<?php if ( have_rows( 'stat' ) ) : ?>
				<dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
					<?php
					while ( have_rows( 'stat' ) ) :
						the_row();
						$stat_heading = get_sub_field( 'stat_heading' ) ?: 'Value';
						$stat_label   = get_sub_field( 'stat_label' ) ?: 'label';
						?>
						<div class="mx-auto flex max-w-xs flex-col gap-y-4">
							<dd class="order-first text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-5xl"><?php echo esc_html( $stat_heading ); ?></dd>
							<dt class="text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?> "><?php echo esc_html( $stat_label ); ?></dt>
						</div>
					<?php endwhile; ?>
				</dl>
			<?php else : ?>
				<dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
					<div class="mx-auto flex max-w-xs flex-col gap-y-4">
						<dt class="text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">Transactions every 24 hours</dt>
						<dd class="order-first text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-5xl">44 million</dd>
					</div>
					<div class="mx-auto flex max-w-xs flex-col gap-y-4">
						<dt class="text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">Assets under holding</dt>
						<dd class="order-first text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-5xl">$119 trillion</dd>
					</div>
					<div class="mx-auto flex max-w-xs flex-col gap-y-4">
						<dt class="text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">New users annually</dt>
						<dd class="order-first text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-5xl">46,000</dd>
					</div>
				</dl>
			<?php endif; ?>
		<?php endif; ?>
		<?php if ( 'grid' === get_field( 'simple_type' ) ) : ?>
			<div class="mx-auto max-w-2xl lg:max-w-none">
				<div class="text-center">
					<h2 class="text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
					<p class="mt-4 text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $description ); ?></p>
				</div>
				<?php if ( have_rows( 'stat' ) ) : ?>
					<dl class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-4">
						<?php
						while ( have_rows( 'stat' ) ) :
							the_row();
							$stat_heading = get_sub_field( 'stat_heading' ) ?: 'Value';
							$stat_label   = get_sub_field( 'stat_label' ) ?: 'label';
							?>
							<div class="flex flex-col <?php echo esc_attr( $stats_background_color ); ?> p-8">
								<dt class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $stat_label ); ?></dt>
								<dd class="order-first text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $stat_heading ); ?></dd>
							</div>
						<?php endwhile; ?>
					</dl>
				<?php else : ?>
					<dl class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-4">
						<div class="flex flex-col <?php echo esc_attr( $stats_background_color ); ?> p-8">
							<dt class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_secondary ); ?>">Creators on the platform</dt>
							<dd class="order-first text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">8,000+</dd>
						</div>
						<div class="flex flex-col <?php echo esc_attr( $stats_background_color ); ?> p-8">
							<dt class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_secondary ); ?>">Flat platform fee</dt>
							<dd class="order-first text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">3%</dd>
						</div>
						<div class="flex flex-col <?php echo esc_attr( $stats_background_color ); ?> p-8">
							<dt class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_secondary ); ?>">Uptime guarantee</dt>
							<dd class="order-first text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">99.9%</dd>
						</div>
						<div class="flex flex-col <?php echo esc_attr( $stats_background_color ); ?> p-8">
							<dt class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_secondary ); ?>">Paid out to creators</dt>
							<dd class="order-first text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">$70M</dd>
						</div>
					</dl>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<?php if ( 'description' === get_field( 'simple_type' ) ) : ?>
			<div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
				<h2 class="text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
				<div class="mt-6 flex flex-col gap-x-8 gap-y-20 lg:flex-row">
					<div class="lg:w-full lg:max-w-2xl lg:flex-auto">
						<div><?php echo wp_kses_post( $paragraph ); ?></div>
					</div>
					<div class="lg:flex lg:flex-auto lg:justify-center">
						<?php if ( have_rows( 'stat' ) ) : ?>
							<dl class="w-64 space-y-8 xl:w-80">
								<?php
								while ( have_rows( 'stat' ) ) :
									the_row();
									$stat_heading         = get_sub_field( 'stat_heading' ) ?: 'Value';
									$stat_label           = get_sub_field( 'stat_label' ) ?: 'label';
									$text_color_primary   = 'text-gray-900';
									$text_color_secondary = 'text-gray-600';
									?>
									<div class="flex flex-col-reverse gap-y-4">
										<dt class="text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $stat_label ); ?></dt>
										<dd class="text-5xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $stat_heading ); ?></dd>
									</div>
								<?php endwhile; ?>
							</dl>
						<?php else : ?>
							<dl class="w-64 space-y-8 xl:w-80">
								<div class="flex flex-col-reverse gap-y-4">
									<dt class="text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">Transactions every 24 hours</dt>
									<dd class="text-5xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">44 million</dd>
								</div>
								<div class="flex flex-col-reverse gap-y-4">
									<dt class="text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">Assets under holding</dt>
									<dd class="text-5xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">$119 trillion</dd>
								</div>
								<div class="flex flex-col-reverse gap-y-4">
									<dt class="text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">New users annually</dt>
									<dd class="text-5xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">46,000</dd>
								</div>
							</dl>
						<?php endif; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php if ( 'timeline' === get_field( 'simple_type' ) ) : ?>
			<div class="mx-auto grid max-w-2xl grid-cols-1 gap-8 overflow-hidden lg:mx-0 lg:max-w-none lg:grid-cols-4">
				<?php if ( have_rows( 'stat' ) ) : ?>
					<?php
					while ( have_rows( 'stat' ) ) :
						the_row();
						$stat_heading = get_sub_field( 'stat_heading' ) ?: 'Value';
						$stat_label   = get_sub_field( 'stat_label' ) ?: 'label';
						$date_string  = get_sub_field( 'event_date' );
						?>
						<div>
							<time datetime="2021-08" class="flex items-center text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_label ); ?>">
								<svg viewBox="0 0 4 4" class="mr-4 h-1 w-1 flex-none" aria-hidden="true">
									<circle cx="2" cy="2" r="2" fill="currentColor" />
								</svg>
								<?php echo esc_html( $date_string ); ?>
								<div class="absolute -ml-2 h-px w-screen -translate-x-full <?php echo esc_attr( $line_color ); ?> sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0" aria-hidden="true"></div>
							</time>
							<p class="mt-6 text-lg font-semibold leading-8 tracking-tight <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $stat_heading ); ?></p>
							<p class="mt-1 text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $stat_label ); ?></p>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
					<div>
						<time datetime="2021-08" class="flex items-center text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_label ); ?>">
							<svg viewBox="0 0 4 4" class="mr-4 h-1 w-1 flex-none" aria-hidden="true">
								<circle cx="2" cy="2" r="2" fill="currentColor" />
							</svg>
							Aug 2021
							<div class="absolute -ml-2 h-px w-screen -translate-x-full <?php echo esc_attr( $line_color ); ?> sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0" aria-hidden="true"></div>
						</time>
						<p class="mt-6 text-lg font-semibold leading-8 tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">Founded company</p>
						<p class="mt-1 text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">Nihil aut nam. Dignissimos a pariatur et quos omnis. Aspernatur asperiores et dolorem dolorem optio voluptate repudiandae.</p>
					</div>
					<div>
						<time datetime="2021-12" class="flex items-center text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_label ); ?>">
							<svg viewBox="0 0 4 4" class="mr-4 h-1 w-1 flex-none" aria-hidden="true">
								<circle cx="2" cy="2" r="2" fill="currentColor" />
							</svg>
							Dec 2021
							<div class="absolute -ml-2 h-px w-screen -translate-x-full <?php echo esc_attr( $line_color ); ?> sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0" aria-hidden="true"></div>
						</time>
						<p class="mt-6 text-lg font-semibold leading-8 tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">Secured $65m in funding</p>
						<p class="mt-1 text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">Provident quia ut esse. Vero vel eos repudiandae aspernatur. Cumque minima impedit sapiente a architecto nihil.</p>
					</div>
					<div>
						<time datetime="2022-02" class="flex items-center text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_label ); ?>">
							<svg viewBox="0 0 4 4" class="mr-4 h-1 w-1 flex-none" aria-hidden="true">
								<circle cx="2" cy="2" r="2" fill="currentColor" />
							</svg>
							Feb 2022
							<div class="absolute -ml-2 h-px w-screen -translate-x-full <?php echo esc_attr( $line_color ); ?> sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0" aria-hidden="true"></div>
						</time>
						<p class="mt-6 text-lg font-semibold leading-8 tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">Released beta</p>
						<p class="mt-1 text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">Sunt perspiciatis incidunt. Non necessitatibus aliquid. Consequatur ut officiis earum eum quia facilis. Hic deleniti dolorem quia et.</p>
					</div>
					<div>
						<time datetime="2022-12" class="flex items-center text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_label ); ?>">
							<svg viewBox="0 0 4 4" class="mr-4 h-1 w-1 flex-none" aria-hidden="true">
								<circle cx="2" cy="2" r="2" fill="currentColor" />
							</svg>
							Dec 2022
							<div class="absolute -ml-2 h-px w-screen -translate-x-full <?php echo esc_attr( $line_color ); ?> sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0" aria-hidden="true"></div>
						</time>
						<p class="mt-6 text-lg font-semibold leading-8 tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">Global launch of product</p>
						<p class="mt-1 text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">Ut ipsa sint distinctio quod itaque nam qui. Possimus aut unde id architecto voluptatem hic aut pariatur velit.</p>
					</div>

				<?php endif; ?>
			</div>
		<?php endif; ?>
		<?php if ( 'two-column' === get_field( 'simple_type' ) ) : ?>
			<div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
				<p class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $label ); ?></p>
				<h1 class="mt-2 text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></h1>
				<div class="mt-10 grid max-w-xl grid-cols-1 gap-8 text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?> lg:max-w-none lg:grid-cols-2">
					<div>
						<?php echo wp_kses_post( get_field( 'first_column_paragraph' ) ); ?>
					</div>
					<div>
						<?php echo wp_kses_post( get_field( 'second_column_paragraph' ) ); ?>
					</div>
				</div>
				<?php if ( have_rows( 'stat' ) ) : ?>
					<dl class="mt-16 grid grid-cols-1 gap-x-8 gap-y-12 sm:mt-20 sm:grid-cols-2 sm:gap-y-16 lg:mt-28 lg:grid-cols-4">
						<?php
						while ( have_rows( 'stat' ) ) :
							the_row();
							$stat_heading = get_sub_field( 'stat_heading' ) ?: 'Value';
							$stat_label   = get_sub_field( 'stat_label' ) ?: 'label';
							$date_string  = get_sub_field( 'event_date' );
							?>
							<div class="flex flex-col-reverse gap-y-3 border-l <?php echo esc_attr( $border_color ); ?> pl-6">
								<dt class="text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $stat_label ); ?></dt>
								<dd class="text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $stat_heading ); ?></dd>
							</div>
						<?php endwhile; ?>
					</dl>
				<?php else : ?>
					<dl class="mt-16 grid grid-cols-1 gap-x-8 gap-y-12 sm:mt-20 sm:grid-cols-2 sm:gap-y-16 lg:mt-28 lg:grid-cols-4">
						<div class="flex flex-col-reverse gap-y-3 border-l  <?php echo esc_attr( $border_color ); ?> pl-6">
							<dt class="text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">Founded</dt>
							<dd class="text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">2021</dd>
						</div>
						<div class="flex flex-col-reverse gap-y-3 border-l  <?php echo esc_attr( $border_color ); ?> pl-6">
							<dt class="text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">Employees</dt>
							<dd class="text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">37</dd>
						</div>
						<div class="flex flex-col-reverse gap-y-3 border-l  <?php echo esc_attr( $border_color ); ?> pl-6">
							<dt class="text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">Countries</dt>
							<dd class="text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">12</dd>
						</div>
						<div class="flex flex-col-reverse gap-y-3 border-l  <?php echo esc_attr( $border_color ); ?> pl-6">
							<dt class="text-base leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">Raised</dt>
							<dd class="text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">$25M</dd>
						</div>
					</dl>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
</div>
