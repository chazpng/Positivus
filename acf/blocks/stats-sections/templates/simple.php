<?php
/**
 * Simple Stat Template.
 *
 * @package circles_x
 */

?>

<?php
$bg_color           = '';
$text_color_primary = 'text-gray-900';
$text_color_primary = 'text-gray-600';
$description        = get_field( 'description' ) ?: 'Lorem ipsum dolor sit amet consect adipisicing possimus.';
$main_title         = get_field( 'title' ) ?: 'Trusted by creators worldwide';


if ( 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$gradient_background  = 'from-[#ff4694] to-[#776fff]';
	$bg_color             = 'bg-gray-900';
	$button_style         = 'rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white';
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
							<div class="flex flex-col bg-gray-400/5 p-8">
								<dt class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $stat_label ); ?></dt>
								<dd class="order-first text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $stat_heading ); ?></dd>
							</div>
						<?php endwhile; ?>
					</dl>
				<?php else : ?>
					<dl class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-4">
						<div class="flex flex-col bg-gray-400/5 p-8">
							<dt class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_secondary ); ?>">Creators on the platform</dt>
							<dd class="order-first text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">8,000+</dd>
						</div>
						<div class="flex flex-col bg-gray-400/5 p-8">
							<dt class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_secondary ); ?>">Flat platform fee</dt>
							<dd class="order-first text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">3%</dd>
						</div>
						<div class="flex flex-col bg-gray-400/5 p-8">
							<dt class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_secondary ); ?>">Uptime guarantee</dt>
							<dd class="order-first text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">99.9%</dd>
						</div>
						<div class="flex flex-col bg-gray-400/5 p-8">
							<dt class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_secondary ); ?>">Paid out to creators</dt>
							<dd class="order-first text-3xl font-semibold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">$70M</dd>
						</div>
					</dl>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
</div>
