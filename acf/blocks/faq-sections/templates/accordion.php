<?php
/**
 * Accordion FAQ Template.
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