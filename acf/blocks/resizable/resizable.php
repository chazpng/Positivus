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
		<div class="flex">
			<div class="grow">
				<p class="screen-size"></p>
				<p class="label">Block Name: <?php the_title(); ?> <?php the_field( 'label' ); ?></p>
			</div>

			<div class="flex items-center">
				<button class="copy-code group relative ml-2 hidden items-center justify-center sm:flex" data-id="<?php echo esc_attr( $uniqid ); ?>">
					Copy Code
					<svg class="h-8 w-8 stroke-gray-300 transition group-hover:rotate-[-4deg] group-hover:stroke-gray-dark" fill="none" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12.9975 10.7499L11.7475 10.7499C10.6429 10.7499 9.74747 11.6453 9.74747 12.7499L9.74747 21.2499C9.74747 22.3544 10.6429 23.2499 11.7475 23.2499L20.2475 23.2499C21.352 23.2499 22.2475 22.3544 22.2475 21.2499L22.2475 12.7499C22.2475 11.6453 21.352 10.7499 20.2475 10.7499L18.9975 10.7499" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17.9975 12.2499L13.9975 12.2499C13.4452 12.2499 12.9975 11.8022 12.9975 11.2499L12.9975 9.74988C12.9975 9.19759 13.4452 8.74988 13.9975 8.74988L17.9975 8.74988C18.5498 8.74988 18.9975 9.19759 18.9975 9.74988L18.9975 11.2499C18.9975 11.8022 18.5498 12.2499 17.9975 12.2499Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.7475 16.2499L18.2475 16.2499" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.7475 19.2499L18.2475 19.2499" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><g class="opacity-0"><path d="M15.9975 5.99988L15.9975 3.99988" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M19.9975 5.99988L20.9975 4.99988" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.9975 5.99988L10.9975 4.99988" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
					<span class="transition-opacity bg-gray-800 px-1 text-sm text-gray-100 rounded-md absolute left-1/2 -translate-x-1/2 translate-y-full opacity-0 m-4 mx-auto">Tooltip</span>
				</button>
			</div>
		</div>

		<div class="max-w-full resize-x overflow-auto m-auto" data-id="<?php echo esc_attr( $uniqid ); ?>">
			<iframe src="<?php the_field( 'page' ); ?>" frameborder="0" data-id="<?php echo esc_attr( $uniqid ); ?>"></iframe>
		</div>
	</div>
</div>
