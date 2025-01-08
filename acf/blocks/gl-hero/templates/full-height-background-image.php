<?php
	/**
	 * With Full height Backgorund Image.
	 *
	 * @package greydientlab
	 */

?>
	<?php 
		$hero_background_image   = get_field( 'hero_background_image' );
		$mobile_background_image = get_field( 'mobile_background_image' );
		$hero_caption            = get_field( 'hero_caption' );
		$hero_button_text        = get_field( 'hero_button_text' );
		$hero_button_url         = get_field( 'hero_button_url' );
		$hero_button_image       = get_field( 'hero_button_image' );

	?>
	<!-- change h-[800px] to h-[ *specified height ex: full/ 100vh ] -->
	<div class="relative h-[800px] px-6 py-6">
		<div class="mx-auto h-full p-6 lg:p-0">
			<div class="hidden md:block">
				<!-- Specify the height here -->
				<!-- <div class="relative flex h-[100vh] flex-col flex-wrap justify-end rounded-[6px] bg-cover bg-center pb-[59px]" style="background-image: url( <?php echo esc_url( $hero_background_image ); ?>  )"> -->
				<div class="relative flex h-[752px] max-h-[752px] flex-col flex-wrap justify-end rounded-[6px] bg-cover bg-center pb-[59px]" style="background-image: url( <?php echo esc_url( $hero_background_image ); ?>  )">
					<div class="mx-auto flex w-full justify-between px-20">
						<div class="text-[32px] font-medium leading-[38.4px] tracking-[-1px] text-white">
							<?php echo wp_kses_post( $hero_caption ); ?>
						</div>
						<?php if ( $hero_button_text && $hero_button_url ) : ?>
							<div class="flex grid-cols-12 flex-col flex-wrap p-0 md:grid-cols-12 lg:grid-cols-4">
								<div class="mt-auto">
									<a href="<?php echo esc_url( $hero_button_url ); ?>" class="font-[MonumentGroteskMono, sans-serif] ml-auto flex w-fit flex-wrap items-center rounded-[4px] border border-white bg-transparent px-[16px] py-[12px] text-[16px] font-normal uppercase leading-[20px] text-white no-underline transition-all duration-200 ease-linear">
										<?php echo esc_html( $hero_button_text ); ?>
									</a>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<div class="block md:hidden">
				<div class="relative flex h-[calc(100dvh-94px)] flex-col flex-wrap justify-end rounded-[6px] bg-cover bg-center bg-no-repeat pb-[59px]" style="background-image: url( <?php echo esc_url( $mobile_background_image ); ?>  )">
					<div class="mx-auto flex w-full flex-col gap-[20px] px-20 lg:gap-0">
						<div class="text-[24px] font-medium leading-[28.8px] tracking-[-0.75px] text-white">
							<?php echo wp_kses_post( $hero_caption ); ?>
						</div>
						<?php if ( $hero_button_text ) : ?>
							<div class="p-0">
								<div class="mt-auto">
									<a href="<?php echo esc_url( $hero_button_url ); ?>" class="flex w-fit flex-wrap items-center rounded-[4px] border border-white bg-transparent px-[16px] py-[12px] text-[16px] font-normal uppercase leading-[20px] text-white no-underline transition-all duration-200 ease-linear md:ml-auto">
										<?php echo esc_html( $hero_button_text ); ?>
									</a>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
