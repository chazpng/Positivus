<?php
/**
 * Action Panels
 *
 * Usage:
 * add use Lean\Load; at the start of the php file then
 * Load::molecule( 'action-panels/action-panel', array('key' => 'value') );
 *
 * @package greydientlab
 */

$gl_text_title             = $args['gl_text_title'] ?? false;
$gl_text_description       = $args['gl_text_description'] ?? false;
$gl_text_container_class   = $args['gl_text_container_class'] ?? '';
$gl_text_type              = $args['gl_text_type'] ?? 'simple';
$gl_text_title_class       = $args['gl_text_title_class'] ?? 'text-lg font-bold';
$gl_text_description_class = $args['gl_text_description_class'] ?? 'mt-1';
$gl_btn_type               = $args['gl_btn_type'] ?? false;
$gl_btn_size               = $args['gl_btn_size'] ?? false;
$gl_btn_text               = $args['gl_btn_text'] ?? '';
$gl_action_panel_container = $args['gl_action_panel_container'] ?? '';
$gl_action_outer_container = $args['gl_action_outer_container'] ?? '';
$gl_action_panel_button    = $args['gl_action_panel_button'] ?? '';
$gl_action_panel_type      = $args['gl_action_panel_type'] ?? '';
$gl_link                   = $args['gl_link'] ?? '#';
$gl_link_label             = $args['gl_link_label'] ?? 'Link Text';
$gl_toggle_type            = $args['gl_toggle_type'] ?? '';
$gl_toggle_code            = $args['gl_toggle_code'] ?? '';
?>
<div class="<?php echo esc_attr( $gl_action_outer_container ); ?>">
	<div class="<?php echo esc_attr( $gl_action_panel_container ); ?>">
		<?php

		use Lean\Load;

		Load::atom(
			'title-with-description/title-with-description',
			[
				'gl_title'             => $gl_text_title,
				'gl_field_type'        => $gl_text_type,
				'gl_description'       => $gl_text_description,
				'gl_title_class'       => $gl_text_title_class,
				'gl_description_class' => $gl_text_description_class,
				'gl_class'             => $gl_text_container_class,
			]
		);
		?>
		<div class="<?php echo esc_attr( $gl_action_panel_button ); ?>">
			<?php if ( 'link' === $gl_action_panel_type ) : ?>
				<a href="<?php echo esc_url( $gl_link ); ?>" class="font-semibold text-indigo-600 hover:text-indigo-500">
					<?php echo esc_html( $gl_link_label ); ?>
					<span aria-hidden="true"> &rarr;</span>
				</a>
			<?php elseif ( 'toggle' === $gl_action_panel_type ) : ?>
				<?php
				Load::atom(
					'toggles/toggles',
					[
						'gl_toggle_type' => $gl_toggle_type,
						'gl_toggle_code' => $gl_toggle_code,
					]
				); 
				?>
			<?php else : ?>
				<?php
				Load::atom(
					'buttons/button',
					[
						'gl_btn_type' => $gl_btn_type,
						'gl_btn_size' => $gl_btn_size,
						'gl_btn_text' => $gl_btn_text,
					]
				);
				?>
			<?php endif; ?>
		</div>
	</div>
</div>
