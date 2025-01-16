<?php
/**
 * Full Parallax Transition.
 *
 * @package greydientlab
 */

?>
<div class="full-parallax relative mx-auto flex flex-col pb-20">
	<div class="image-wrapper relative h-full">
		<?php if ( have_rows( 'image_repeater_url' ) ) : ?>
			<?php
			while ( have_rows( 'image_repeater_url' ) ) :
				the_row();
				?>
				<div class="top-0 m-auto table h-screen w-full bg-cover bg-fixed bg-center transition-all"  style="background: url('<?php echo esc_url( get_sub_field( 'image_url' ) ); ?>') no-repeat 50% 50%; background-attachment: fixed; background-size: cover;" ></div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
