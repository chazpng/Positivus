<?php

/**
 * Two columns with photo on dark Feature Template.
 *
 * @package greydientlab
 */

?>

<?php

/**
 * Simple Feature Template.
 *
 * @package greydientlab
 */

?>

<?php
$label       = get_field('subtitle') ?: 'Award winning support';
$main_title  = get_field('title') ?: 'Boost your productivity.';
$description = get_field('description') ?: 'Incididunt sint fugiat pariatur cupidatat consectetur sit cillum anim id veniam aliqua proident excepteur commodo do ea.';
$button_1    = get_field('link_text') ?: 'Get Started';
$button_2    = get_field('link_text_2') ?: 'Learn More';
$page_link_1 = get_field('page_link') ?: '#';
$page_link_2 = get_field('page_link_2') ?: '#';

$bg_color             = '';
$text_color_primary   = 'text-gray-900';
$text_color_secondary = 'text-gray-600';
$img_gradient_class   = 'absolute -inset-x-20 bottom-0 bg-gradient-to-t from-white pt-[7%]';

$cta_container = 'mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8';
$button_container     = 'mt-10 flex items-center justify-center gap-x-6 lg:justify-start';
$title_container = 'max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl text-left';
$description_container = 'mt-6 text-lg leading-8 text-gray-300 text-left';
$subtitle_container = 'mt-10 flex items-center justify-center gap-x-6 text-left';

switch ($align) {
    case 'center':
        $cta_container = 'mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8';
        $button_container = 'mt-10 flex items-center justify-center gap-x-6';
        $title_container = 'mx-auto max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl';
        $description_container = 'mt-6 text-lg leading-8 text-gray-300';
        $subtitle_container = 'mt-10 flex items-center justify-center gap-x-6';
        break;

    case 'right':
        $cta_container = 'ml-auto max-w-2xl text-right';

    default:
        break;
}

if ('is-style-dark' === $style) { //add get_field('background_image' ) || later.
    $text_color_primary   = 'text-white';
    $text_color_secondary = 'text-gray-300';
    $gradient_background  = 'from-[#ff4694] to-[#776fff]';
    $bg_color             = 'bg-gray-900';
}

if (get_field('background_image')) {
    $text_color_primary   = 'text-white';
    $text_color_secondary = 'text-gray-300';
    $gradient_background  = 'from-[#ff4694] to-[#776fff]';
    $bg_color             = 'bg-gray-900';
}
?>

<div class="<?php echo esc_attr($bg_color); ?>">
    <div class="<?php echo esc_attr($cta_container); ?>">
        <?php if (get_field('featured_image')) : 
            $main_title  = get_field('title') ?: 'Boost your productivity. Start using our app today.';
         ?>
            <div class="relative isolate overflow-hidden bg-gray-900 px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
                <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left my-auto">
                    <?php if (get_field('subtitle')) : ?>
                        <h2 class="text-base font-semibold leading-7 text-indigo-400"><?php echo esc_html($label); ?></h2>
                    <?php endif; ?>
                    <p class="text-3xl font-bold tracking-tight text-white sm:text-4xl"><?php echo esc_html($main_title); ?></p>
                    <?php if (get_field('description')) : ?>
                        <p class="mt-6 text-lg leading-8 text-gray-300"><?php echo esc_html($description); ?></p>
                    <?php endif; ?>
                    <div class="<?php echo esc_attr($button_container); ?>">
                        <a href="<?php echo esc_url($page_link_1); ?>" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white"><?php echo esc_html($button_1) ?></a>
                        <a href="<?php echo esc_url($page_link_2); ?>" class="text-sm font-semibold leading-6 text-white"><?php echo esc_html($button_2) ?> <span aria-hidden="true">→</span></a>
                    </div>
                </div>
                <div class="relative mt-16 h-80 lg:mt-8">
                    <?php echo wp_get_attachment_image(get_field('featured_image'), 'full', '', array('class' => 'absolute left-0 top-0 w-[57rem] max-w-none rounded-md bg-white/5 ring-1 ring-white/10', 'width' => 1824,'height' => 1000,)); ?>
                </div>
            </div>
        <?php else : ?>
            <div class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 text-center shadow-2xl sm:rounded-3xl sm:px-16">
                <?php if (get_field('subtitle')) : ?>
                    <h2 class="text-base font-semibold leading-7 text-indigo-600"><?php echo esc_html($label); ?></h2>
                <?php endif; ?>
                <p class="<?php echo esc_attr($title_container); ?>"><?php echo esc_html($main_title); ?></p>
                <?php if (get_field('description')) : ?>
                    <p class="<?php echo esc_attr($description_container); ?>"><?php echo esc_html($description); ?></p>
                <?php endif; ?>
                <div class="<?php echo esc_attr($button_container); ?>">
                    <a href="<?php echo esc_url($page_link_1); ?>" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white"><?php echo esc_html($button_1) ?></a>
                    <a href="<?php echo esc_url($page_link_2); ?>" class="text-sm font-semibold leading-6 text-white"><?php echo esc_html($button_2) ?> <span aria-hidden="true">→</span></a>
                </div>
            </div>
        <?php endif; ?>

    </div>
</div>