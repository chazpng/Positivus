<?php
/**
 * Avatar
 *
 * This is an example of how to add avatar element.
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::atom( 'avatars/avatar', array('key' => 'value') );
 *
 * @package greydientlab
 */

$gl_avatar_size  = $args['gl_avatar_size'] ?? 'avatar-sm';
$gl_avatar_shape = $args['gl_avatar_shape'] ?? 'rounded-full';
$gl_avatar_url   = $args['gl_avatar_url'] ?? get_template_directory_uri() . '/frontend/components/atoms/avatars/images/placeholder.png';

$gl_stacked_order = $args['gl_stacked_order'] ?? 'top';

$gl_title = $args['gl_title'] ?? false;
$gl_label = $args['gl_label'] ?? false;
$gl_link  = $args['gl_link'] ?? '#';

$gl_avatar_intials      = $args['gl_avatar_intials'] ?? false;
$gl_avatar_intials_size = 'text-sm';

$gl_has_notification      = $args['gl_has_notification'] ?? false;
$gl_notification_color    = $args['gl_notification_color'] ?? 'bg-green-400'; // Use Tailwind config for the background color.
$gl_notification_size     = $args['gl_notification_size'] ?? 'h-2 w-2';
$gl_notification_position = $args['gl_notification_position'] ?? 'top';
$gl_notification_class    = $gl_notification_color;

$gl_avatar_class = $gl_avatar_shape;

switch ( $gl_avatar_size ) {
	case 'avatar-xs':
		$gl_avatar_class       .= ' h-6 w-6';
		$gl_notification_class .= ' h-1.5 w-1.5';
		$gl_avatar_intials_size = 'text-xs';
		break;

	case 'avatar-sm':
		$gl_avatar_class       .= ' h-8 w-8';
		$gl_notification_class .= ' h-2 w-2';
		$gl_avatar_intials_size = 'text-sm';
		break;

	case 'avatar-md':
		$gl_avatar_class       .= ' h-10 w-10';
		$gl_notification_class .= ' h-2.5 w-2.5';
		$gl_avatar_intials_size = '';
		break;

	case 'avatar-lg':
		$gl_avatar_class       .= ' h-12 w-12';
		$gl_notification_class .= ' h-3 w-3';
		$gl_avatar_intials_size = 'text-lg';
		break;

	case 'avatar-xl':
		$gl_avatar_class       .= ' h-14 w-14';
		$gl_notification_class .= ' h-3.5 w-3.5';
		$gl_avatar_intials_size = 'text-xl';
		break;

	default:
		break;
}

switch ( $gl_notification_position ) {
	case 'top':
		$gl_notification_class .= ' right-0 top-0';
		$gl_notification_class .= 'rounded-md' === $gl_avatar_shape ? ' -translate-y-1/2 translate-x-1/2 transform' : '';
		break;

	case 'bottom':
		$gl_notification_class .= ' bottom-0 right-0';
		$gl_notification_class .= 'rounded-md' === $gl_avatar_shape ? ' translate-x-1/2 translate-y-1/2' : '';
		break;

	default:
		break;
}

$container_class = '';
if ( $gl_avatar_intials ) {
	$container_class .= $gl_avatar_class . ' bg-gray-500';
}
?>

<?php if ( $gl_title || $gl_label ) : ?>
	<a href="<?php echo esc_url( $gl_link ); ?>" class="group inline-block">
		<div class="flex items-center">
			<div>
				<img
					class="inline-block <?php echo esc_attr( $gl_avatar_class ); ?>"
					src="<?php echo esc_url( $gl_avatar_url ); ?>"
					alt="Avatar"
				>
			</div>
			<div class="ml-3">
				<?php if ( $gl_title ) : ?>
					<p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">
						<?php echo esc_html( $gl_title ); ?>
					</p>
				<?php endif; ?>

				<?php if ( $gl_label ) : ?>
					<p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">
						<?php echo esc_html( $gl_label ); ?>
					</p>
				<?php endif; ?>
			</div>
		</div>
	</a>
<?php else : ?>
	<!-- Stacked Avatars -->
	<?php if ( is_array( $gl_avatar_url ) ) : ?>
		<div class="isolate flex -space-x-1 overflow-hidden">
			<?php
			$total = count( $gl_avatar_url );
			foreach ( $gl_avatar_url as $url ) :
				$gl_index = '';
				if ( 'bottom' === $gl_stacked_order ) {
					$gl_index = ' z-' . ( $total * 10 );
				}
				?>
				<img
					class="relative z-<?php echo esc_attr( $gl_avatar_class . ' ' . $gl_index ); ?> inline-block rounded-full ring-2 ring-white"
					src="<?php echo esc_url( $url ); ?>"
					alt="Avatar"
				>
				<?php
				$total--;
			endforeach;
			?>
		</div>
	<?php else : ?>
		<span class="relative inline-flex items-center justify-center <?php echo esc_attr( $container_class ); ?>">
			<?php if ( $gl_avatar_intials ) : ?>
				<span class="<?php echo esc_attr( $gl_avatar_intials_size ); ?> font-medium leading-none text-white">
					<?php echo esc_html( $gl_avatar_intials ); ?>
				</span>
			<?php else : ?>
				<img
					class="<?php echo esc_attr( $gl_avatar_class ); ?>"
					src="<?php echo esc_url( $gl_avatar_url ); ?>"
					alt="Avatar"
				>
			<?php endif; ?>

			<?php if ( $gl_has_notification ) : ?>
				<span class="<?php echo esc_attr( $gl_notification_class ); ?> absolute rounded-full ring-2 ring-white"></span>
			<?php endif; ?>
		</span>
	<?php endif; ?>
<?php endif; ?>
