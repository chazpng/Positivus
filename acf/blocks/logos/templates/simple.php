<?php
/**
 * Simple Feature Template.
 *
 * @package greydientlab
 */

?>

<?php
$style  = $block['className'] ?? '';
$images = get_field( 'images' ) ? get_field( 'images' ) : '';
$heading = get_field( 'heading' ) ? get_field( 'heading' ): '';
$heading_alignment = get_field( 'heading_alignment' ) ? get_field( 'heading_alignment') : 'left';
$bg_color = $style === 'is-style-dark' ? 'bg-gray-900 ' : 'bg-white ';
$text_color = $style === 'is-style-dark' ? ' text-white' : ' text-gray-900';
?>

<div class="<?php echo esc_attr( $bg_color ); ?>py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
	<?php if( $heading ): ?>
		<h2 class="text-lg text-<?php echo esc_attr( $heading_alignment ); ?> font-semibold leading-8 mb-10<?php echo esc_attr( $text_color ); ?>"><?php echo esc_html( $heading ); ?></h2>
	<?php endif; ?>
    <div class="mx-auto grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-12 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 sm:gap-y-14 lg:mx-0 lg:max-w-none lg:grid-cols-5">
      <?php if( $images ): ?>
        <?php 
            foreach( $images as $image ):
                $img = $image['image']['url'];
				$img_alt = $image['image']['alt'] ? $image['image']['alt'] : 'Logo';
        ?>
     		<img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>">
        <?php endforeach; ?>
      <?php endif; ?>
      <!-- <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor" width="158" height="48">
      <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform" width="158" height="48">
      <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple" width="158" height="48">
      <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal" width="158" height="48">
      <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic" width="158" height="48"> -->
    </div>
  </div>
</div>
