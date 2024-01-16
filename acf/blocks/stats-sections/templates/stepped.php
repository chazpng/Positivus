<?php
/**
 * Stepped Template.
 *
 * @package circles_x
 */

?>

<?php
$bg_color               = 'bg-white';
$text_color_primary     = 'text-gray-900';
$text_color_secondary   = 'text-gray-600';
$middle_bg_color        = 'bg-gray-900';
$description            = get_field( 'description' ) ?: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.';
$main_title             = get_field( 'title' ) ?: 'Trusted by creators worldwide';


if ( 'is-style-dark' === $style ) {
	$text_color_primary     = 'text-white';
	$text_color_secondary   = 'text-gray-300';
	$text_color_label       = 'text-indigo-400';
    $middle_bg_color        = 'bg-gray-800';
	$bg_color               = 'bg-gray-900';
}
?>

<div class="<?php echo esc_attr($bg_color); ?> py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-3xl font-bold tracking-tight <?php echo esc_attr($text_color_primary); ?> sm:text-4xl">We approach the workplace as something that adds to our lives and adds value to world.</h2>
      <p class="mt-6 text-base leading-7 <?php echo esc_attr($text_color_secondary); ?>">Diam nunc lacus lacus aliquam turpis enim. Eget hac velit est euismod lacus. Est non placerat nam arcu. Cras purus nibh cursus sit eu in id. Integer vel nibh.</p>
    </div>
    <div class="mx-auto mt-16 flex max-w-2xl flex-col gap-8 lg:mx-0 lg:mt-20 lg:max-w-none lg:flex-row lg:items-end [&>div:first-child]:bg-gray-900">
      <div class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl bg-gray-50 p-8 sm:w-3/4 sm:max-w-md sm:flex-row-reverse sm:items-end lg:w-72 lg:max-w-none lg:flex-none lg:flex-col lg:items-start">
        <p class="flex-none text-3xl font-bold tracking-tight text-gray-900">250k</p>
        <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
          <p class="text-lg font-semibold tracking-tight text-gray-900">Users on the platform</p>
          <p class="mt-2 text-base leading-7 text-gray-600">Vel labore deleniti veniam consequuntur sunt nobis.</p>
        </div>
      </div>
      <div class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl <?php echo esc_attr($middle_bg_color); ?> p-8 sm:flex-row-reverse sm:items-end lg:w-full lg:max-w-sm lg:flex-auto lg:flex-col lg:items-start lg:gap-y-44">
        <p class="flex-none text-3xl font-bold tracking-tight text-white">$8.9 billion</p>
        <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
          <p class="text-lg font-semibold tracking-tight text-white">We’re proud that our customers have made over $8 billion in total revenue.</p>
          <p class="mt-2 text-base leading-7 text-gray-400">Eu duis porta aliquam ornare. Elementum eget magna egestas.</p>
        </div>
      </div>
      <div class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl bg-indigo-600 p-8 sm:w-11/12 sm:max-w-xl sm:flex-row-reverse sm:items-end lg:w-full lg:max-w-none lg:flex-auto lg:flex-col lg:items-start lg:gap-y-28">
        <p class="flex-none text-3xl font-bold tracking-tight text-white">401,093</p>
        <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
          <p class="text-lg font-semibold tracking-tight text-white">Transactions this year</p>
          <p class="mt-2 text-base leading-7 text-indigo-200">Eu duis porta aliquam ornare. Elementum eget magna egestas. Eu duis porta aliquam ornare.</p>
        </div>
      </div>
    </div>
  </div>
</div>