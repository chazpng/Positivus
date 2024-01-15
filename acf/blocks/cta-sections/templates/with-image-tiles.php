<?php
/**
 * With Image Panel Template.
 *
 * @package greydientlab
 */

?>

<?php
$label         = get_field( 'subtitle' ) ?: 'Award winning support';
$main_title    = get_field( 'title' ) ?: 'Our people';
$paragraph     = get_field( 'paragraph' ) ?: 'Quasi est quaerat. Sit molestiae et. Provident ad dolorem occaecati eos iste. Soluta rerum quidem minus ut molestiae velit error quod. Excepturi quidem expedita molestias quas.';
$button        = get_field( 'link_text' ) ?: 'Join our team';
$page_link     = get_field( 'page_link' ) ?: '#';
$bg_color      = '';
$cta_container = 'mx-auto max-w-7xl px-6 lg:flex lg:px-8';
$button_style  = 'rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600';

?>



<div class="overflow-hidden bg-white py-32">
  <div class="<?php echo esc_attr( $cta_container ); ?>">
	<div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-12 gap-y-16 lg:mx-0 lg:min-w-full lg:max-w-none lg:flex-none lg:gap-y-8">
	  <div class="lg:col-end-1 lg:w-full lg:max-w-lg lg:pb-8">
		<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
		<div class="mt-6 text-base text-gray-600"><?php echo wp_kses_post( $paragraph ); ?></div>
		<div class="mt-10 flex">
		  <a href="<?php echo esc_url( $page_link ); ?>" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><?php echo esc_html( $button ); ?> <span aria-hidden="true">&rarr;</span></a>
		</div>
	  </div>
	  <div class="flex flex-wrap items-start justify-end gap-6 sm:gap-8 lg:contents">
		<div class="w-0 flex-auto lg:ml-auto lg:w-auto lg:flex-none lg:self-end">
		  <img src="https://images.unsplash.com/photo-1670272502246-768d249768ca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1152&q=80" alt="" class="">
		  <?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'full', '', array( 'class' => 'aspect-[7/5] w-[37rem] max-w-none rounded-2xl bg-gray-50 object-cover' ) ); ?>
		</div>
		<div class="contents lg:col-span-2 lg:col-end-2 lg:ml-auto lg:flex lg:w-[37rem] lg:items-start lg:justify-end lg:gap-x-8">
		  <div class="order-first flex w-64 flex-none justify-end self-end lg:w-auto">
			<img src="https://images.unsplash.com/photo-1605656816944-971cd5c1407f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=768&h=604&q=80" alt="" class="aspect-[4/3] w-[24rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
		  </div>
		  <div class="flex w-96 flex-auto justify-end lg:w-auto lg:flex-none">
			<img src="https://images.unsplash.com/photo-1568992687947-868a62a9f521?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1152&h=842&q=80" alt="" class="aspect-[7/5] w-[37rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
		  </div>
		  <div class="hidden sm:block sm:w-0 sm:flex-auto lg:w-auto lg:flex-none">
			<img src="https://images.unsplash.com/photo-1612872087720-bb876e2e67d1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=768&h=604&q=80" alt="" class="aspect-[4/3] w-[24rem] max-w-none rounded-2xl bg-gray-50 object-cover">
		  </div>
		</div>
	  </div>
	</div>
  </div>
</div>
