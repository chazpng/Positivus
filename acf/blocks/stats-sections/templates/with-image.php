<?php
/**
 * With Images Stat Template.
 *
 * @package circles_x
 */

?>

<?php
$bg_color               = 'bg-white';
$text_color_primary     = 'text-gray-900';
$text_color_secondary   = 'text-gray-600';
$text_color_label       = 'text-indigo-600';
$line_color             = 'bg-gray-900/10';
$border_color           = 'border-gray-900/20';
$description            = get_field( 'description' ) ?: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.';
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
}
?>
<?php if ( 'split-image' === get_field( 'with_image_type' ) ) : ?>
	<div class="relative <?php echo esc_attr( $bg_color ); ?>">
		<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'full', '', array( 'class' => 'h-56 w-full bg-gray-50 object-cover lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-1/2' ) ); ?>
		<div class="mx-auto grid max-w-7xl lg:grid-cols-2">
			<div class="px-6 pb-24 pt-16 sm:pb-32 sm:pt-20 lg:col-start-2 lg:px-8 lg:pt-32">
				<div class="mx-auto max-w-2xl lg:mr-0 lg:max-w-lg">
					<h2 class="text-base font-semibold leading-8 <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $label ); ?></h2>
					<p class="mt-2 text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></p>
					<p class="mt-6 text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $description ); ?></p>
					<?php if ( have_rows( 'stat' ) ) : ?>
						<dl class="mt-16 grid max-w-xl grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 xl:mt-16">
							<?php
							while ( have_rows( 'stat' ) ) :
								the_row();
								$stat_heading = get_sub_field( 'stat_heading' ) ?: 'Value';
								$stat_label   = get_sub_field( 'stat_label' ) ?: 'label';
								?>
								<div class="flex flex-col gap-y-3 border-l <?php echo esc_attr( $border_color ); ?> pl-6">
									<dt class="text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $stat_label ); ?></dt>
									<dd class="order-first text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>"> <?php echo esc_html( $stat_heading ); ?></dd>
								</div>
							<?php endwhile; ?>
						</dl>
					<?php else : ?>
						<dl class="mt-16 grid max-w-xl grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 xl:mt-16">
							<div class="flex flex-col gap-y-3 border-l <?php echo esc_attr( $border_color ); ?> pl-6">
								<dt class="text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>">Creators on the platform </dt>
								<dd class="order-first text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>"> 8,000+</dd>
							</div>
							<div class="flex flex-col gap-y-3 border-l <?php echo esc_attr( $border_color ); ?> pl-6">
								<dt class="text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>">Flat platform fee</dt>
								<dd class="order-first text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">3%</dd>
							</div>
							<div class="flex flex-col gap-y-3 border-l <?php echo esc_attr( $border_color ); ?> pl-6">
								<dt class="text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>">Uptime guarantee</dt>
								<dd class="order-first text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">99.9%</dd>
							</div>
							<div class="flex flex-col gap-y-3 border-l <?php echo esc_attr( $border_color ); ?> pl-6">
								<dt class="text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>">Paid out to creators</dt>
								<dd class="order-first text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">$70M</dd>
							</div>
						</dl>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php if ( 'background' === get_field( 'with_image_type' ) ) : ?>
	<div class="relative isolate overflow-hidden py-24 sm:py-32 <?php echo esc_attr( $bg_color ); ?>">
		<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'full', '', array( 'class' => 'absolute inset-0 -z-10 h-full w-full object-cover' ) ); ?>
		<div class="relative mx-auto max-w-7xl px-6 lg:px-8">
			<div class="absolute -bottom-8 -left-96 -z-10 transform-gpu blur-3xl sm:-bottom-64 sm:-left-40 lg:-bottom-32 lg:left-8 xl:-left-10" aria-hidden="true">
				<div class="aspect-[1266/975] w-[79.125rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
			</div>
			<div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
				<h2 class="text-base font-semibold leading-8 <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $label ); ?></h2>
				<p class="mt-2 text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></p>
				<p class="mt-6 text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $description ); ?></p>
			</div>
			<?php if ( have_rows( 'stat' ) ) : ?>
				<dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-10 <?php echo esc_attr( $text_color_primary ); ?> sm:mt-20 sm:grid-cols-2 sm:gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">
					<?php
					while ( have_rows( 'stat' ) ) :
						the_row();
						$stat_heading = get_sub_field( 'stat_heading' ) ?: 'Value';
						$stat_label   = get_sub_field( 'stat_label' ) ?: 'label';
						?>
						<div class="flex flex-col gap-y-3 border-l <?php echo esc_attr( $border_color ); ?> pl-6">
							<dt class="text-sm leading-6"><?php echo esc_html( $stat_label ); ?></dt>
							<dd class="order-first text-3xl font-semibold tracking-tight"><?php echo esc_html( $stat_heading ); ?></dd>
						</div>
					<?php endwhile; ?>
				</dl>
			<?php else : ?>
				<dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-10 <?php echo esc_attr( $text_color_primary ); ?> sm:mt-20 sm:grid-cols-2 sm:gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">
					<div class="flex flex-col gap-y-3 border-l <?php echo esc_attr( $border_color ); ?> pl-6">
						<dt class="text-sm leading-6">Creators on the platform</dt>
						<dd class="order-first text-3xl font-semibold tracking-tight">8,000+</dd>
					</div>
					<div class="flex flex-col gap-y-3 border-l <?php echo esc_attr( $border_color ); ?> pl-6">
						<dt class="text-sm leading-6">Flat platform fee</dt>
						<dd class="order-first text-3xl font-semibold tracking-tight">3%</dd>
					</div>
					<div class="flex flex-col gap-y-3 border-l <?php echo esc_attr( $border_color ); ?> pl-6">
						<dt class="text-sm leading-6">Uptime guarantee</dt>
						<dd class="order-first text-3xl font-semibold tracking-tight">99.9%</dd>
					</div>
					<div class="flex flex-col gap-y-3 border-l <?php echo esc_attr( $border_color ); ?> pl-6">
						<dt class="text-sm leading-6">Paid out to creators</dt>
						<dd class="order-first text-3xl font-semibold tracking-tight">$70M</dd>
					</div>
				</dl>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>
