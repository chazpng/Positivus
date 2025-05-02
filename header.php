<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://cdn.tailwindcss.com"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site container pt-[20px] mx-auto">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'custom-theme'); ?></a>

		<header id="masthead" class="site-heade">
			<nav id="site-navigation" class="main-navigation fixed top-0 left-0 right-0 mx-auto bg-white z-50 py-[20px] max-w-screen">
				<div class="site-branding flex justify-between items-center max-w-[1300px] mx-auto">
					<div>
						<?php
						the_custom_logo();
						if (is_front_page() && is_home()) :
						?>
							<p class="site-title">
								<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
							</p>
						<?php
						else :
						?>
							<div class="site-title">
								<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
									<img src="http://localhost/wordpress/wp-content/uploads/2025/04/positivus-icon-1.svg" alt="Positivus Icon">
								</a>
							</div>
					</div><!-- .site-branding -->

					<div class="text-[20px] leading-[28px] flex gap-[40px] justify-end items-center">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'custom-theme'); ?></button>
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'menu_class'     => 'flex gap-[40px] text-black visited:text-black',
								)
							);
						?>
						<button class="px-[35px] py-[20px] border border-[#191A23] rounded-[14px] text-black">Request a quote</button>

					</div><!-- #site-navigation -->
				</div>

			</nav>
			<div class="flex justify-between pt-[140px] pb-[70px]">
				<div class="flex flex-col gap-[35px]">
				<?php
						endif;
						$custom_theme_description = get_bloginfo('description', 'display');
						if ($custom_theme_description || is_customize_preview()) :
				?>
					<p class="site-description text-[60px] text-black w-[531px]"><?php echo esc_html($custom_theme_description); ?></p>
				<?php endif; ?>
				<p class="text-[20px] leading-[28px] w-[498px] text-black">Our digital marketing agency helps digital businesses grow and succeed online through a range of services including SEO PPC, social media marketing and content creation.</p>
				<button class="bg-[#191A23] px-[35px] py-[20px] text-white rounded-[14px] max-w-[264px]"> Book a consultation </button>
				</div>
				<img src="http://localhost/wordpress/wp-content/uploads/2025/04/Illustration.svg" alt="Illustration">
			</div>
			<div class="flex justify-between">
				<img class="mix-blend-luminosity" src="http://localhost/wordpress/wp-content/uploads/2025/04/amazon-logo.svg" alt="Amazon Logo">
				<img class="mix-blend-luminosity" src="http://localhost/wordpress/wp-content/uploads/2025/04/dribble-logo.svg" alt="Dribble Logo">
				<img class="mix-blend-luminosity" src="http://localhost/wordpress/wp-content/uploads/2025/04/hubspot-logo.svg" alt="HubSpot Logo">
				<img class="mix-blend-luminosity" src="http://localhost/wordpress/wp-content/uploads/2025/04/notion-logo.svg" alt="Notion Logo">
				<img class="mix-blend-luminosity" src="http://localhost/wordpress/wp-content/uploads/2025/04/netflix-logo.svg" alt="Netflix Logo">
				<img class="mix-blend-luminosity" src="http://localhost/wordpress/wp-content/uploads/2025/04/zoom-logo.svg" alt="Zoom Logo">
			</div>

		</header><!-- #masthead -->