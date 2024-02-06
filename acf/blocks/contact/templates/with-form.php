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
$mode                 = 'light';
$text_color_label     = 'text-indigo-600';
$image_icon_bg        = 'bg-indigo-600';
$border_color         = 'border-indigo-600';
$main_title           = get_field('title') ?: 'Our offices';
$main_description     = get_field('description') ?: 'Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.';



if ('is-style-dark' === $style) {
    $text_color_primary   = 'text-white';
    $text_color_secondary = 'text-gray-300';
    $text_color_label     = 'text-indigo-400';
    $border_color         = 'border-indigo-400';
    $mode                 = 'dark';
    $container_color      = 'bg-white/5';
    $bg_color             = 'bg-gray-900';
    $image_icon_bg        = 'bg-indigo-400';
}
?>
<?php if ('split-pattern' === get_field('with_form_type')) : ?>
    <div class="relative isolate <?php echo esc_html($bg_color); ?> split-pattern ">
        <div class="mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2 <?php echo esc_html($mode); ?>">
            <div class="relative px-6 pb-20 pt-24 sm:pt-32 lg:static lg:px-8 lg:py-48">
                <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg ">
                    <?php if ('is-style-dark' === $style) : ?>
                        <div class="absolute inset-y-0 left-0 -z-10 w-full overflow-hidden ring-1 ring-white/5 lg:w-1/2 ">
                            <svg class="absolute inset-0 h-full w-full stroke-gray-700 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
                                <defs>
                                    <pattern id="54f88622-e7f8-4f1d-aaf9-c2f5e46dd1f2" width="200" height="200" x="100%" y="-1" patternUnits="userSpaceOnUse">
                                        <path d="M130 200V.5M.5 .5H200" fill="none" />
                                    </pattern>
                                </defs>
                                <svg x="100%" y="-1" class="overflow-visible fill-gray-800/20">
                                    <path d="M-470.5 0h201v201h-201Z" stroke-width="0" />
                                </svg>
                                <rect width="100%" height="100%" stroke-width="0" fill="url(#54f88622-e7f8-4f1d-aaf9-c2f5e46dd1f2)" />
                            </svg>
                            <div class="absolute -left-56 top-[calc(100%-13rem)] transform-gpu blur-3xl lg:left-[max(-14rem,calc(100%-59rem))] lg:top-[calc(50%-7rem)]" aria-hidden="true">
                                <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-br from-[#80caff] to-[#4f46e5] opacity-20" style="clip-path: polygon(74.1% 56.1%, 100% 38.6%, 97.5% 73.3%, 85.5% 100%, 80.7% 98.2%, 72.5% 67.7%, 60.2% 37.8%, 52.4% 32.2%, 47.5% 41.9%, 45.2% 65.8%, 27.5% 23.5%, 0.1% 35.4%, 17.9% 0.1%, 27.6% 23.5%, 76.1% 2.6%, 74.1% 56.1%)"></div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ('is-style-light' === $style) : ?>
                        <div class="absolute inset-y-0 left-0 -z-10 w-full overflow-hidden bg-gray-100 ring-1 ring-gray-900/10 lg:w-1/2">
                            <svg class="absolute inset-0 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
                                <defs>
                                    <pattern id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527" width="200" height="200" x="100%" y="-1" patternUnits="userSpaceOnUse">
                                        <path d="M130 200V.5M.5 .5H200" fill="none" />
                                    </pattern>
                                </defs>
                                <rect width="100%" height="100%" stroke-width="0" fill="white" />
                                <svg x="100%" y="-1" class="overflow-visible fill-gray-50">
                                    <path d="M-470.5 0h201v201h-201Z" stroke-width="0" />
                                </svg>
                                <rect width="100%" height="100%" stroke-width="0" fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)" />
                            </svg>
                        </div>
                    <?php endif; ?>
                    <h2 class="text-3xl font-bold tracking-tight <?php echo esc_html($text_color_primary); ?>"><?php echo esc_html($main_title); ?></h2>
                    <p class="mt-6 text-lg leading-8 <?php echo esc_html($text_color_secondary); ?>"><?php echo esc_html($main_description); ?></p>
                    <dl class="mt-10 space-y-4 text-base leading-7 <?php echo esc_html($text_color_primary); ?>">
                        <?php if (have_rows('address_list')) : ?>
                            <?php while (have_rows('address_list')) :
                                the_row();
                                $address = get_sub_field('address') ?: 'Address';
                            ?>
                                <div class="flex gap-x-4">
                                    <dt class="flex-none">
                                        <span class="sr-only"><?php echo esc_html($address); ?></span>
                                        <?php echo wp_get_attachment_image(get_sub_field('contact_icon'), 'full', '', array('class' => 'h-7 w-6 text-gray-400')); ?>
                                    </dt>
                                    <dd><?php echo wp_kses_post($address); ?></dd>
                                </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <div class="flex gap-x-4">
                                <dt class="flex-none">
                                    <span class="sr-only">Address</span>
                                </dt>
                                <dd>545 Mavis Island<br>Chicago, IL 99191</dd>
                            </div>
                            <div class="flex gap-x-4">
                                <dt class="flex-none">
                                    <span class="sr-only">Telephone</span>
                                </dt>
                                <dd><a class="hover:<?php echo esc_html($text_color_primary); ?>" href="tel:+1 (555) 234-5678">+1 (555) 234-5678</a></dd>
                            </div>
                            <div class="flex gap-x-4">
                                <dt class="flex-none">
                                    <span class="sr-only">Email</span>
                                </dt>
                                <dd><a class="hover:<?php echo esc_html($text_color_primary); ?>" href="mailto:hello@example.com">hello@example.com</a></dd>
                            </div>
                        <?php endif; ?>
                    </dl>
                </div>
            </div>
            <?php echo do_shortcode(get_field('shortcode')); ?>
        </div>
    </div>
<?php endif; ?>
<?php if ('split-image' === get_field('with_form_type')) : ?>
    <div class="relative <?php echo esc_html($bg_color); ?> split-image">
        <div class="lg:absolute lg:inset-0 lg:left-1/2">
            <?php echo wp_get_attachment_image(get_field('featured_image'), 'full', '', array('class' => 'h-64 w-full bg-gray-50 object-cover sm:h-80 lg:absolute lg:h-full')); ?>
        </div>
        <div class="pb-24 pt-16 sm:pb-32 sm:pt-24 lg:mx-auto lg:grid lg:max-w-7xl lg:grid-cols-2 lg:pt-32 <?php echo esc_html($mode); ?>">
            <div class="px-6 lg:px-8">
                <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
                    <h2 class="text-3xl font-bold tracking-tight <?php echo esc_html($text_color_primary); ?>"><?php echo esc_html($main_title); ?></h2>
                    <p class="mt-2 text-lg leading-8 <?php echo esc_html($text_color_secondary); ?>"><?php echo esc_html($main_description); ?></p>
                    <?php echo do_shortcode(get_field('shortcode')); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if ('testimonial' === get_field('with_form_type')) :
    $qoute           = get_field('qoute') ?: 'Your Qoute Here';
    $avatar_name           = get_field('avatar_name') ?: 'Avatar Name';
    $avatar_job           = get_field('avatar_job') ?: 'Job Position';


?>
    <div class="relative isolate <?php echo esc_html($bg_color); ?> px-6 py-24 sm:py-32 lg:px-8">
        <?php if ('is-style-light' === $style) : ?>
            <svg class="absolute inset-0 -z-10 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
                <defs>
                    <pattern id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527" width="200" height="200" x="50%" y="-64" patternUnits="userSpaceOnUse">
                        <path d="M100 200V.5M.5 .5H200" fill="none" />
                    </pattern>
                </defs>
                <svg x="50%" y="-64" class="overflow-visible fill-gray-50">
                    <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M299.5 800h201v201h-201Z" stroke-width="0" />
                </svg>
                <rect width="100%" height="100%" stroke-width="0" fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)" />
            </svg>
        <?php endif; ?>
        <?php if ('is-style-dark' === $style) : ?>
            <svg class="absolute inset-0 -z-10 h-full w-full stroke-gray-700 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
                <defs>
                    <pattern id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527" width="200" height="200" x="50%" y="-64" patternUnits="userSpaceOnUse">
                        <path d="M100 200V.5M.5 .5H200" fill="none" />
                    </pattern>
                </defs>
                <svg x="50%" y="-64" class="overflow-visible fill-gray-800/20">
                    <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M299.5 800h201v201h-201Z" stroke-width="0" />
                </svg>
                <rect width="100%" height="100%" stroke-width="0" fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)" />
            </svg>
        <?php endif; ?>
        <div class="mx-auto max-w-xl lg:max-w-4xl">
            <h2 class="text-4xl font-bold tracking-tight <?php echo esc_html($text_color_primary); ?>"><?php echo esc_html($main_title); ?></h2>
            <p class="mt-2 text-lg leading-8 <?php echo esc_html($text_color_primary); ?>"><?php echo esc_html($main_description); ?>.</p>
            <div class="mt-16 flex flex-col gap-16 sm:gap-y-20 lg:flex-row <?php echo esc_html($mode); ?>">
                <?php echo do_shortcode(get_field('shortcode')); ?>
                <div class="lg:mt-6 lg:w-80 lg:flex-none">
                    <?php echo wp_get_attachment_image(get_field('company_logo'), 'full', '', array('class' => 'h-12 w-auto')); ?>
                    <figure class="mt-10">
                        <blockquote class="text-lg font-semibold leading-8 <?php echo esc_html($text_color_primary); ?>">
                            <p>“<?php echo wp_kses_post($qoute); ?>”</p>
                        </blockquote>
                        <figcaption class="mt-10 flex gap-x-6">
                            <?php echo wp_get_attachment_image(get_field('avatar_icon'), 'full', '', array('class' => 'h-12 w-12 flex-none rounded-full bg-gray-50')); ?>
                            <div>
                                <div class="text-base font-semibold <?php echo esc_html($text_color_primary); ?>"><?php echo esc_html($avatar_name); ?></div>
                                <div class="text-sm leading-6 <?php echo esc_html($text_color_secondary); ?>"><?php echo esc_html($avatar_job); ?></div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if ('simple' === get_field('with_form_type')) : ?>
    <div class="isolate <?php echo esc_html($bg_color); ?> px-6 py-24 sm:py-32 lg:px-8 simple-centered  <?php echo esc_html($mode); ?>">
        <?php if ('is-style-light' === $style) : ?>
            <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
                <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
        <?php endif; ?>
        <?php if ('is-style-dark' === $style) : ?>
            <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
                <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#80caff] to-[#4f46e5] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
        <?php endif; ?>
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight <?php echo esc_html($text_color_primary); ?> sm:text-4xl"><?php echo esc_html($main_title); ?></h2>
            <p class="mt-2 text-lg leading-8 <?php echo esc_html($text_color_secondary); ?>"><?php echo esc_html($main_description); ?></p>
        </div>
        <?php echo do_shortcode(get_field('shortcode')); ?>
    </div>
    
<?php endif; ?>