<?php
/**
 * Header Template.
 *
 * @package circles_x
 */

$uniqid = uniqid();
?>
<div class="gl-b-resizable" id="<?php echo esc_attr( $uniqid ); ?>">
	<div class="items-center justify-center max-w-screen-2xl m-auto">
		<div class="max-w-full resize-x overflow-auto m-auto" data-id="<?php echo esc_attr( $uniqid ); ?>">
			<p class="screen-size"></p>
			<iframe src="http://localhost:8888/lean/headers/" frameborder="0" data-id="<?php echo esc_attr( $uniqid ); ?>"></iframe>
		</div>
	</div>
</div>
