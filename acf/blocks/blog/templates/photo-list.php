<footer class="bg-white" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-20 sm:pt-24 lg:px-8 lg:pt-32">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold leading-6 text-gray-900">Solutions</h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'solutions',
                                'menu_id'        => 'solutions-menu',
                                'menu_class'     => 'footer-menu',
                                'add_li_class'   => '',
                            )
                        );
                        ?>
                    </div>

                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold leading-6 text-gray-900">Support</h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'support',
                                'menu_id'        => 'support-menu',
                                'menu_class'     => 'footer-menu',
                                'add_li_class'   => '',
                            )
                        );
                        ?>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold leading-6 text-gray-900">Company</h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'company',
                                'menu_id'        => 'company-menu',
                                'menu_class'     => 'footer-menu',
                                'add_li_class'   => '',
                            )
                        );
                        ?>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold leading-6 text-gray-900">Legal</h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'legal',
                                'menu_id'        => 'legal-menu',
                                'menu_class'     => 'footer-menu',
                                'add_li_class'   => '',
                            )
                        );
                        ?>
                    </div>
                </div>

            </div>
            <div class="mt-10 xl:mt-0 default">
                <h3 class="text-sm font-semibold leading-6 text-gray-900">Subscribe to our newsletter</h3>
                <p class="mt-2 text-sm leading-6 text-gray-600">The latest news, articles, and resources, sent to your inbox weekly.</p>
                <div class="mt-6 sm:flex sm:max-w-md">
                    <?php echo do_shortcode('[contact-form-7 id="5adf8bb" title="Newsletter"]'); ?>
                </div>
            </div>
        </div>
        <div class="mt-16 border-t border-gray-900/10 pt-8 sm:mt-20 md:flex md:items-center md:justify-between lg:mt-24">
            <div class="flex space-x-6 md:order-2">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-social-menu',
                        'menu_id'        => 'footer-social-menu',
                        'menu_class'     => '',
                        'add_li_class'   => '',
                    )
                );
                ?>
            </div>
            <p class="mt-8 text-xs leading-5 text-gray-500 md:order-1 md:mt-0">&copy; 2020 Your Company, Inc. All rights reserved.</p>
        </div>
    </div>
</footer>
<!-- Footer 1-->
<footer class="bg-white">
    <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8">
        <nav class="" aria-label="Footer">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'company',
                    'menu_id'        => 'company-menu',
                    'menu_class'     => 'footer-menu -mb-6 columns-2 sm:flex sm:justify-center sm:space-x-12',
                    'add_li_class'   => 'pb-6  !mt-0',
                )
            );
            ?>
        </nav>
        <div class="mt-10 flex justify-center space-x-10">

            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-social-menu',
                    'menu_id'        => 'footer-social-menu',
                    'menu_class'     => '',
                    'add_li_class'   => '',
                )
            );
            ?>

        </div>
        <p class="mt-10 text-center text-xs leading-5 text-gray-500">&copy; 2020 Your Company, Inc. All rights reserved.</p>
    </div>
</footer>
<!-- Footer 2-->
<footer class="bg-gray-900 dark" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-20 sm:pt-24 lg:px-8 lg:pt-32">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold leading-6 text-white">Solutions</h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'solutions',
                                'menu_id'        => 'solutions-menu',
                                'menu_class'     => 'footer-menu ',
                                'add_li_class'   => '',
                            )
                        );
                        ?>
                    </div>

                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold leading-6 text-white">Support</h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'support',
                                'menu_id'        => 'support-menu',
                                'menu_class'     => 'footer-menu',
                                'add_li_class'   => '',
                            )
                        );
                        ?>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold leading-6 text-white">Company</h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'company',
                                'menu_id'        => 'company-menu',
                                'menu_class'     => 'footer-menu',
                                'add_li_class'   => '',
                            )
                        );
                        ?>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold leading-6 text-white">Legal</h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'legal',
                                'menu_id'        => 'legal-menu',
                                'menu_class'     => 'footer-menu',
                                'add_li_class'   => '',
                            )
                        );
                        ?>
                    </div>
                </div>

            </div>
            <div class="mt-10 xl:mt-0">
                <h3 class="text-sm font-semibold leading-6 text-white">Subscribe to our newsletter</h3>
                <p class="mt-2 text-sm leading-6 text-gray-300">The latest news, articles, and resources, sent to your inbox weekly.</p>
                <div class="mt-6 sm:flex sm:max-w-md dark2">
                    <?php echo do_shortcode('[contact-form-7 id="5adf8bb" title="Newsletter"]'); ?>
                </div>
            </div>
        </div>
        <div class="mt-16 border-t border-white/10 pt-8 sm:mt-20 md:flex md:items-center md:justify-between lg:mt-24">
            <div class="flex space-x-6 md:order-2">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-social-menu',
                        'menu_id'        => 'footer-social-menu',
                        'menu_class'     => '',
                        'add_li_class'   => '',
                    )
                );
                ?>
            </div>
            <p class="mt-8 text-xs leading-5 text-gray-400 md:order-1 md:mt-0">&copy; 2020 Your Company, Inc. All rights reserved.</p>
        </div>
    </div>
</footer>
<!-- Footer 3-->
<footer class="site-footer bg-gray-900 dark">
    <div class="site-info">
        <div class="mx-auto max-w-7xl px-6 py-16 sm:py-24 lg:px-8 lg:py-32">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="space-y-8">
                    <?php the_custom_logo(); ?>
                </div>

                <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold leading-6 text-white">Solutions</h3>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'solutions',
                                    'menu_id'        => 'solutions-menu',
                                    'menu_class'     => 'footer-menu',
                                    'add_li_class'   => '',
                                )
                            );
                            ?>
                        </div>

                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm font-semibold leading-6 text-white">Support</h3>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'support',
                                    'menu_id'        => 'support-menu',
                                    'menu_class'     => 'footer-menu',
                                    'add_li_class'   => '',
                                )
                            );
                            ?>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold leading-6 text-white">Company</h3>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'company',
                                    'menu_id'        => 'company-menu',
                                    'menu_class'     => 'footer-menu',
                                    'add_li_class'   => '',
                                )
                            );
                            ?>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm font-semibold leading-6 text-white">Legal</h3>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'legal',
                                    'menu_id'        => 'legal-menu',
                                    'menu_class'     => 'footer-menu',
                                    'add_li_class'   => '',
                                )
                            );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .site-info -->
</footer>

<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<footer class="bg-gray-900 dark h-full" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <?php the_custom_logo(); ?>
            <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">

                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold leading-6 text-white">Solutions</h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'solutions',
                                'menu_id'        => 'solutions-menu',
                                'menu_class'     => 'footer-menu',
                                'add_li_class'   => '',
                            )
                        );
                        ?>
                    </div>

                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold leading-6 text-white">Support</h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'support',
                                'menu_id'        => 'support-menu',
                                'menu_class'     => 'footer-menu',
                                'add_li_class'   => '',
                            )
                        );
                        ?>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold leading-6 text-white">Company</h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'company',
                                'menu_id'        => 'company-menu',
                                'menu_class'     => 'footer-menu',
                                'add_li_class'   => '',
                            )
                        );
                        ?>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold leading-6 text-white">Legal</h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'legal',
                                'menu_id'        => 'legal-menu',
                                'menu_class'     => 'footer-menu',
                                'add_li_class'   => '',
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-16 border-t border-white/10 pt-8 sm:mt-20 lg:mt-24 lg:flex lg:items-center lg:justify-between">
            <div>
                <h3 class="text-sm font-semibold leading-6 text-white">Subscribe to our newsletter</h3>
                <p class="mt-2 text-sm leading-6 text-gray-300">The latest news, articles, and resources, sent to your inbox weekly.</p>
            </div>
            <div class="mt-6 sm:flex sm:max-w-md dark2">
                <?php echo do_shortcode('[contact-form-7 id="5adf8bb" title="Newsletter"]'); ?>
            </div>
        </div>
        <div class="mt-8 border-t border-white/10 pt-8 md:flex md:items-center md:justify-between">
            <div class="flex space-x-6 md:order-2">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-social-menu',
                        'menu_id'        => 'footer-social-menu',
                        'menu_class'     => '',
                        'add_li_class'   => '',
                    )
                );
                ?>
            </div>
            <p class="mt-8 text-xs leading-5 text-gray-400 md:order-1 md:mt-0">&copy; 2020 Your Company, Inc. All rights reserved.</p>
        </div>
    </div>
</footer>

<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<footer class="bg-white" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <?php the_custom_logo(); ?>
            <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold leading-6">Solutions</h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'solutions',
                                'menu_id'        => 'solutions-menu',
                                'menu_class'     => 'footer-menu',
                                'add_li_class'   => '',
                            )
                        );
                        ?>
                    </div>

                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold leading-6">Support</h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'support',
                                'menu_id'        => 'support-menu',
                                'menu_class'     => 'footer-menu',
                                'add_li_class'   => '',
                            )
                        );
                        ?>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold leading-6">Company</h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'company',
                                'menu_id'        => 'company-menu',
                                'menu_class'     => 'footer-menu',
                                'add_li_class'   => '',
                            )
                        );
                        ?>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold leading-6">Legal</h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'legal',
                                'menu_id'        => 'legal-menu',
                                'menu_class'     => 'footer-menu',
                                'add_li_class'   => '',
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-16 border-t border-gray-900/10 pt-8 sm:mt-20 lg:mt-24 lg:flex lg:items-center lg:justify-between">
            <div>
                <h3 class="text-sm font-semibold leading-6 text-gray-900">Subscribe to our newsletter</h3>
                <p class="mt-2 text-sm leading-6 text-gray-600">The latest news, articles, and resources, sent to your inbox weekly.</p>
            </div>
            <div class="mt-6 sm:flex sm:max-w-md default">
                <?php echo do_shortcode('[contact-form-7 id="5adf8bb" title="Newsletter"]'); ?>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-900/10 pt-8 md:flex md:items-center md:justify-between">
            <div class="flex space-x-6 md:order-2">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-social-menu',
                        'menu_id'        => 'footer-social-menu',
                        'menu_class'     => '',
                        'add_li_class'   => '',
                    )
                );
                ?>
            </div>
            <p class="mt-8 text-xs leading-5 text-gray-500 md:order-1 md:mt-0">&copy; 2020 Your Company, Inc. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Footer 5-->

<footer class="bg-white">
    <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
        <div class="flex justify-center space-x-6 md:order-2">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-social-menu',
                    'menu_id'        => 'footer-social-menu',
                    'menu_class'     => '',
                    'add_li_class'   => '',
                )
            );
            ?>
        </div>
        <div class="mt-8 md:order-1 md:mt-0">
            <p class="text-center text-xs leading-5 text-gray-500">&copy; 2020 Your Company, Inc. All rights reserved.</p>
        </div>
    </div>
</footer>