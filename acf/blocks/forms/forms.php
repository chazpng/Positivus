<?php
/**
 * Form Template.
 *
 * @package circles_x
 */

$form_style = get_field( 'form_type' ) ?: 'simple';
?>
<div class="gl-b-form">
	<?php if ( 'simple' === $form_style ) : ?>
		<div class="space-y-12 max-w-2xl mx-auto">
			<?php if ( have_rows( 'form_repeater' ) ) : ?>
				<?php
				while ( have_rows( 'form_repeater' ) ) :
					the_row();
					?>
					<div class="border-b border-gray-900/10 pb-6">
						<h2 class="text-base font-semibold leading-7 text-gray-900"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h2>
						<p class="mt-1 text-sm leading-6 text-gray-600"><?php echo esc_html( get_sub_field( 'description' ) ); ?></p>
						<?php echo do_shortcode( get_sub_field( 'forms' ) ); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	<?php endif; ?>
</div>

