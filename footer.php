<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom_theme
 */

?>

<footer id="colophon" class="site-footer bg-[#191A23] p-[55px] rounded-t-[45px]">
	<div class="flex justify-between pb-[60px]">
		<img src="http://localhost/wordpress/wp-content/uploads/2025/04/white-positivus-logo.svg" alt="White Positivus Logo">
		<ul class="flex gap-[40px] text-[18px] underline text-white">
			<li><a href="">About us</a></li>
			<li><a href="">Services</a></li>
			<li><a href="">Use Cases</a></li>
			<li><a href="">Pricing</a></li>
			<li><a href="">Blog</a></li>
		</ul>
		<div class="flex gap-[20px]">
			<img src="http://localhost/wordpress/wp-content/uploads/2025/04/black-linkedin-icon-1.svg" alt="Linkedin Icon">
			<img src="http://localhost/wordpress/wp-content/uploads/2025/04/black-facebook-icon.svg" alt="Facebook Icon">
			<img src="http://localhost/wordpress/wp-content/uploads/2025/04/black-twitter-icon.svg" alt="Twitter Icon">
		</div>
	</div>
	<div class="site-info flex justify-between pb-[50px]">
		<div>
			<h4 class="text-[20px] bg-[#b9ff66] text-black mb-[27px] font-medium w-fit rounded-[7px] px-[8px]">Contact Us:</h4>
			<div class="flex flex-col gap-[20px]">
				<p class="text-[18px] text-white">Email: info@positivus.com</p>
				<p class="text-[18px] text-white">Phone: 555-567-8901</p>
				<p class="text-[18px] text-white">Address: 1234 Main St
					Moonstone City, Stardust State 12345</p>
			</div>
		</div>
		<div class="bg-[#292A32] py-[58px] px-[40px] flex gap-[20px] rounded-[14px]">
			<div class="px-[35px] py-[22px] border border-white text-white rounded-[14px] w-[285px]">
				Email
			</div>
			<button class="bg-[#b9ff66] text-black px-[35px] py-[22px] rounded-[14px]">
				Subscribe to news
			</button>
		</div>
	</div>
	<div class="border border-white mb-[50px]">
	</div>
	<div class="flex gap-[40px]">
		<p class="text-[18px] text-white">
			©2023 Positivus. All Rights Reserved.
		</p>
		<a href="/privacy-policy" class="text-[18px] text-white underline">
			Privacy Policy
		</a>
	</div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>