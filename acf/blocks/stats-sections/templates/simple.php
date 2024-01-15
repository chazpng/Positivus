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
	</div>
</div>
