<?php

/**
 * Simple Feature Template.
 *
 * @package greydientlab
 */

?>

<?php
$label       = get_field('subtitle') ?: 'Award winning support';
$main_title  = get_field('title') ?: 'Better Work Flow';
$description = get_field('description') ?: 'Incididunt sint fugiat pariatur cupidatat consectetur sit cillum anim id veniam aliqua proident excepteur commodo do ea.';
$button_1    = get_field('link_text') ?: 'Get Started';
$button_2    = get_field('link_text_2') ?: 'Learn More';
$page_link_1 = get_field('page_link') ?: '#';
$page_link_2 = get_field('page_link_2') ?: '#';

$bg_color             = '';
$text_color_primary   = 'text-gray-900';
$text_color_secondary = 'text-gray-600';
$img_gradient_class   = 'absolute -inset-x-20 bottom-0 bg-gradient-to-t from-white pt-[7%]';

$cta_container = 'mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8';
$button_container     = 'mt-10 flex items-center gap-x-6';

switch ($align) {
    case 'center':
        $cta_container = 'mx-auto max-w-2xl lg:text-center';
        $button_container = 'mt-10 flex items-center justify-center gap-x-6';
        break;

    case 'right':
        $cta_container = 'ml-auto max-w-2xl text-right';

    default:
        break;
}

if ('is-style-dark' === $style) { //add get_field('background_image) || later.
    $text_color_primary   = 'text-white';
    $text_color_secondary = 'text-gray-300';
    $gradient_background  = 'from-[#ff4694] to-[#776fff]';
    $bg_color             = 'bg-gray-900';
}
?>

<div class="<?php echo esc_attr($bg_color); ?> py-24 sm:py-32">
    <div class="<?php echo esc_attr($cta_container); ?>">
        <?php if (get_field('subtitle')) : ?>
            <h2 class="text-base font-semibold leading-7 text-indigo-600"><?php echo esc_html($label); ?></h2>
        <?php endif; ?>
        <p class="<?php echo esc_attr( $text_color_primary ); ?> text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php echo esc_html($main_title); ?></p>
        <?php if (get_field('description')) : ?>
            <p class="<?php echo esc_attr($text_color_secondary); ?> mt-6 text-lg leading-8"><?php echo esc_html($description); ?></p>
        <?php endif; ?>
        <div class="<?php echo esc_attr( $button_container )?>">
            <a href="<?php echo esc_url($page_link_1); ?>" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><?php echo esc_html($button_1) ?></a>
            <a href="<?php echo esc_url($page_link_2); ?>" class="text-sm font-semibold leading-6 <?php echo esc_attr($text_color_primary); ?>"><?php echo esc_html($button_2) ?> <span aria-hidden="true">→</span></a>
        </div>
    </div>
</div>