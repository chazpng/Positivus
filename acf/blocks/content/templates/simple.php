<?php
/**
 * Centered Template.
 *
 * @package greydientlab
 */

?>

<?php
$style                = $block['className'] ?? '';
$bg_color             = '';
$container_color      = 'bg-gray-50';
$text_color_primary   = 'text-gray-900';
$text_color_content   = 'text-gray-700';
$text_color_secondary = 'text-gray-600';
$text_color_label     = 'text-indigo-600';
$main_label           = get_field( 'eyebrow_text' ) ?: 'Deploy Faster';
$main_title           = get_field( 'title' ) ?: 'A better workflow';
$main_description     = get_field( 'description' ) ?: 'Aliquet nec orci mattis amet quisque ullamcorper neque, nibh sem. At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at vitae feugiat egestas ac. Diam nulla orci at in viverra scelerisque eget. Eleifend egestas fringilla sapien.';

if ( 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$text_color_label     = 'text-indigo-400';
	$container_color      = 'bg-white/5';
	$bg_color             = 'bg-gray-900 dark';
	$text_color_content   = 'text-gray-300';
}
?>

<div class="<?php echo esc_attr( $bg_color ); ?> px-6 py-32 lg:px-8">
	<div class="mx-auto max-w-3xl text-base leading-7 <?php echo esc_attr( $text_color_content ); ?>">
		<p class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $main_label ); ?></p>
		<h1 class="mt-2 text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></h1>
		<p class="mt-6 text-xl leading-8"><?php echo esc_html( $main_description ); ?></p>
		<div class="mt-2 max-w-2xl">
		<?php require gl_get_custom_block_template( 'content', 'flexible-content.php' ); ?>
		</div>
	</div>
</div>
