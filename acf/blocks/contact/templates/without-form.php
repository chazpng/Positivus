<?php
/**
 * Simple Contact Template.
 *
 * @package circles_x
 */

?>

<?php
$bg_color             = '';
$container_color      = 'bg-gray-50';
$text_color_primary   = 'text-gray-900';
$text_color_secondary = 'text-gray-600';
$text_color_label     = 'text-indigo-600';
$image_icon_bg        = 'bg-indigo-600';
$border_color         = 'border-indigo-600';
$main_title           = get_field( 'title' ) ?: 'Our offices';
$main_description     = get_field( 'description' ) ?: 'Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.';



if ( 'is-style-dark' === $style ) {
	$text_color_primary   = 'text-white';
	$text_color_secondary = 'text-gray-300';
	$text_color_label     = 'text-indigo-400';
	$border_color         = 'border-indigo-400';
	$container_color      = 'bg-white/5';
	$bg_color             = 'bg-gray-900';
	$image_icon_bg        = 'bg-indigo-400';
}
?>
<?php if ( 'column' === get_field( 'without_form_type' ) ) : ?>
	<div class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto max-w-2xl lg:mx-0">
		<h2 class="text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> "><?php echo esc_html( $main_title ); ?></h2>
		<p class="mt-6 text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $main_description ); ?></p>
		</div>
		<div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 text-base leading-7 sm:grid-cols-2 sm:gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">
		<?php if ( have_rows( 'contact_list' ) ) : ?>
			<?php 
			while ( have_rows( 'contact_list' ) ) :
				the_row();
				$country   = get_sub_field( 'country' ) ?: 'Country';
				$address_1 = get_sub_field( 'address_1' ) ?: 'Address 1';
				$address_2 = get_sub_field( 'address_2' ) ?: 'Address 2';

				?>
			<div>
				<h3 class="border-l <?php echo esc_attr( $border_color ); ?> pl-6 font-semibold <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $country ); ?></h3>
				<address class="border-l border-gray-200 pl-6 pt-2 not-italic <?php echo esc_attr( $text_color_secondary ); ?>">
				<p><?php echo esc_html( $address_1 ); ?></p>
				<p><?php echo esc_html( $address_2 ); ?></p>
				</address>
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<div>
			<h3 class="border-l <?php echo esc_attr( $border_color ); ?> pl-6 font-semibold <?php echo esc_attr( $text_color_primary ); ?>">Los Angeles</h3>
			<address class="border-l border-gray-200 pl-6 pt-2 not-italic <?php echo esc_attr( $text_color_secondary ); ?>">
				<p>4556 Brendan Ferry</p>
				<p>Los Angeles, CA 90210</p>
			</address>
			</div>
			<div>
			<h3 class="border-l <?php echo esc_attr( $border_color ); ?> pl-6 font-semibold <?php echo esc_attr( $text_color_primary ); ?>">New York</h3>
			<address class="border-l border-gray-200 pl-6 pt-2 not-italic <?php echo esc_attr( $text_color_secondary ); ?>">
				<p>886 Walter Street</p>
				<p>New York, NY 12345</p>
			</address>
			</div>
			<div>
			<h3 class="border-l <?php echo esc_attr( $border_color ); ?> pl-6 font-semibold <?php echo esc_attr( $text_color_primary ); ?>">Toronto</h3>
			<address class="border-l border-gray-200 pl-6 pt-2 not-italic <?php echo esc_attr( $text_color_secondary ); ?>">
				<p>7363 Cynthia Pass</p>
				<p>Toronto, ON N3Y 4H8</p>
			</address>
			</div>
			<div>
			<h3 class="border-l <?php echo esc_attr( $border_color ); ?> pl-6 font-semibold <?php echo esc_attr( $text_color_primary ); ?>">London</h3>
			<address class="border-l border-gray-200 pl-6 pt-2 not-italic <?php echo esc_attr( $text_color_secondary ); ?>">
				<p>114 Cobble Lane</p>
				<p>London N1 2EF</p>
			</address>
			</div>
		<?php endif; ?>
		</div>
	</div>
	</div>
<?php endif; ?>

<?php if ( 'simple' === get_field( 'without_form_type' ) ) : ?>
	<div class="isolate <?php echo esc_attr( $bg_color ); ?> px-6 py-24 sm:py-32 lg:px-8">
	<div class="mx-auto max-w-2xl sm:text-center">
		<h2 class="text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?> sm:text-4xl"><?php echo esc_html( $main_title ); ?></h2>
		<p class="mt-2 text-lg leading-8 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $main_description ); ?></p>
	</div>
	<div class="mx-auto mt-20 max-w-lg space-y-16">
		<?php if ( have_rows( 'contact_list' ) ) : ?>
			<?php 
			while ( have_rows( 'contact_list' ) ) :
				the_row();
				$contact_label       = get_sub_field( 'label' ) ?: 'Label';
				$contact_description = get_sub_field( 'description' ) ?: 'Your Description Here';
				$contact_link        = get_sub_field( 'link' ) ?: '#';
				$contact_link_name   = get_sub_field( 'button_name' ) ?: 'Button Name';
				?>

			<div class="flex gap-x-6">
			<div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg <?php echo esc_attr( $image_icon_bg ); ?>">
				<?php echo wp_get_attachment_image( get_sub_field( 'icon' ), 'full', '', array( 'class' => 'h-6 w-6 text-white' ) ); ?>
			</div>
			<div>
				<h3 class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $contact_label ); ?></h3>
				<p class="mt-2 leading-7 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $contact_description ); ?></p>
				<p class="mt-4">
				<a href="<?php echo esc_attr( $contact_link ); ?>" class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_label ); ?>"><?php echo esc_html( $contact_link_name ); ?><span aria-hidden="true">&rarr;</span></a>
				</p>
			</div>
			</div>
			<?php endwhile; ?>
		<?php else : ?>
		<div class="flex gap-x-6">
			<div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg <?php echo esc_attr( $image_icon_bg ); ?>">
			</div>
			<div>
			<h3 class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_primary ); ?>">Sales support</h3>
			<p class="mt-2 leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">Ut cursus est ut amet. Lobortis eget egestas leo vitae eget porttitor risus blandit. Nunc a in lorem vel iaculis porttitor.</p>
			<p class="mt-4">
				<a href="#" class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_label ); ?>">Contact us <span aria-hidden="true">&rarr;</span></a>
			</p>
			</div>
		</div>
		<div class="flex gap-x-6">
			<div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg <?php echo esc_attr( $image_icon_bg ); ?>">
			</div>
			<div>
			<h3 class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_primary ); ?>">Bug reports</h3>
			<p class="mt-2 leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">Expedita qui non ut quia ipsum voluptatum ipsam pariatur. Culpa vitae ipsum minus eius vero quo quibusdam.</p>
			<p class="mt-4">
				<a href="#" class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_label ); ?>">Report a bug <span aria-hidden="true">&rarr;</span></a>
			</p>
			</div>
		</div>
		<div class="flex gap-x-6">
			<div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg <?php echo esc_attr( $image_icon_bg ); ?>">
			</div>
			<div>
			<h3 class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_primary ); ?>">Technical support</h3>
			<p class="mt-2 leading-7 <?php echo esc_attr( $text_color_secondary ); ?>">Sint aut modi porro consequatur architecto commodi qui consequatur. Dignissimos adipisci minima.</p>
			<p class="mt-4">
				<a href="#" class="text-sm font-semibold leading-6 <?php echo esc_attr( $text_color_label ); ?>">Join our Discord <span aria-hidden="true">&rarr;</span></a>
			</p>
			</div>
		</div>
		<?php endif; ?>
	</div>
	</div>
<?php endif; ?>
<?php if ( 'side' === get_field( 'without_form_type' ) ) : ?>
	<div class="<?php echo esc_attr( $bg_color ); ?> py-24 sm:py-32">
	<div class="mx-auto max-w-7xl px-6 lg:px-8">
		<div class="mx-auto max-w-2xl space-y-16 divide-y divide-gray-100 lg:mx-0 lg:max-w-none">
		<?php if ( have_rows( 'container' ) ) : ?>
			<?php 
			while ( have_rows( 'container' ) ) :
				the_row();
				$container_title       = get_sub_field( 'title' ) ?: 'Your Title Here';
				$container_description = get_sub_field( 'description' ) ?: 'Your Description Here';
				?>
			<div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-3 pt-16">
				<div>
				<h2 class="text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $container_title ); ?></h2>
				<p class="mt-4 leading-7 <?php echo esc_attr( $text_color_secondary ); ?>"><?php echo esc_html( $container_description ); ?></p>
				</div>
				<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:col-span-2 lg:gap-8">
				<?php if ( have_rows( 'contact_list' ) ) : ?>
					<?php 
					while ( have_rows( 'contact_list' ) ) :
						the_row();
						$contact_list_label = get_sub_field( 'contact_list_label' ) ?: 'Label';
						$contact_list_link  = get_sub_field( 'contact_list_email' ) ?: 'youremail.example.com';
						$contact_list_tel   = get_sub_field( 'contact_list_tel' ) ?: '+1 (555) 905-2345';
						?>
					<div class="rounded-2xl <?php echo esc_attr( $container_color ); ?> p-10">
						<h3 class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_primary ); ?>"><?php echo esc_html( $contact_list_label ); ?></h3>
						<dl class="mt-3 space-y-1 text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>">
						<div>
							<dt class="sr-only">Email</dt>
							<dd><a class="font-semibold text-indigo-600" href="mailto:<?php echo esc_attr( $contact_list_link ); ?>"><?php echo esc_html( $contact_list_link ); ?></a></dd>
						</div>
						<div class="mt-1">
							<dt class="sr-only">Phone number</dt>
							<dd><?php echo esc_html( $contact_list_tel ); ?></dd>
						</div>
						</dl>
					</div>
					<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>
				</div>
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-3">
			<div>
				<h2 class="text-3xl font-bold tracking-tight <?php echo esc_attr( $text_color_primary ); ?>">Get in touch</h2>
				<p class="mt-4 leading-7 <?php echo esc_attr( $text_color_primary ); ?>">Quam nunc nunc eu sed. Sed rhoncus quis ultricies ac pellentesque.</p>
			</div>
			<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:col-span-2 lg:gap-8">
				<div class="rounded-2xl <?php echo esc_attr( $container_color ); ?> p-10">
				<h3 class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_primary ); ?>">Collaborate</h3>
				<dl class="mt-3 space-y-1 text-sm leading-6 <?php echo esc_attr( $text_color_primary ); ?>">
					<div>
					<dt class="sr-only">Email</dt>
					<dd><a class="font-semibold <?php echo esc_attr( $text_color_label ); ?>" href="mailto:collaborate@example.com">collaborate@example.com</a></dd>
					</div>
					<div class="mt-1">
					<dt class="sr-only">Phone number</dt>
					<dd>+1 (555) 905-2345</dd>
					</div>
				</dl>
				</div>
				<div class="rounded-2xl <?php echo esc_attr( $container_color ); ?> p-10">
				<h3 class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_primary ); ?>">Press</h3>
				<dl class="mt-3 space-y-1 text-sm leading-6 <?php echo esc_attr( $text_color_primary ); ?>">
					<div>
					<dt class="sr-only">Email</dt>
					<dd><a class="font-semibold <?php echo esc_attr( $text_color_label ); ?>" href="mailto:press@example.com">press@example.com</a></dd>
					</div>
					<div class="mt-1">
					<dt class="sr-only">Phone number</dt>
					<dd>+1 (555) 905-3456</dd>
					</div>
				</dl>
				</div>
				<div class="rounded-2xl <?php echo esc_attr( $container_color ); ?> p-10">
				<h3 class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_primary ); ?>">Join our team</h3>
				<dl class="mt-3 space-y-1 text-sm leading-6 <?php echo esc_attr( $text_color_primary ); ?>">
					<div>
					<dt class="sr-only">Email</dt>
					<dd><a class="font-semibold <?php echo esc_attr( $text_color_label ); ?>" href="mailto:careers@example.com">careers@example.com</a></dd>
					</div>
					<div class="mt-1">
					<dt class="sr-only">Phone number</dt>
					<dd>+1 (555) 905-4567</dd>
					</div>
				</dl>
				</div>
				<div class="rounded-2xl <?php echo esc_attr( $container_color ); ?> p-10">
				<h3 class="text-base font-semibold leading-7 <?php echo esc_attr( $text_color_primary ); ?>">Say hello</h3>
				<dl class="mt-3 space-y-1 text-sm leading-6 <?php echo esc_attr( $text_color_secondary ); ?>">
					<div>
					<dt class="sr-only">Email</dt>
					<dd><a class="font-semibold <?php echo esc_attr( $text_color_label ); ?>" href="mailto:hello@example.com">hello@example.com</a></dd>
					</div>
					<div class="mt-1">
					<dt class="sr-only">Phone number</dt>
					<dd>+1 (555) 905-5678</dd>
					</div>
				</dl>
				</div>
			</div>
			</div>
		<?php endif; ?>
		</div>
	</div>
	</div>
<?php endif; ?>
