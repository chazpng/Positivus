<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package custom_theme
 */

get_header();
?>

<main id="primary" class="site-main pt-[150px]">
	<div class="flex gap-[40px] pb-[100px]">
		<h2 class="bg-[#b9ff66] px-[4px] rounded-[7px] font-medium text-[40px] text-black">Services</h2>
		<p class="w-[580px] text-black text-[18px]">At our digital marketing agency, we offer a range of service to help businesses grow and succeed online. These services include:</p>
	</div>
	<!-- Services Section -->
	<div class="grid grid-cols-2 grid-rows-3 gap-x-[40px] gap-y-[40px] mx-auto">
		<div class="bg-[#f3f3f3] drop-shadow-[0_5px_0_rgba(25,26,35,1)] border border-[#191A23] w-[600px] p-[50px] rounded-[45px] flex items-center justify-between">
			<div>
				<div class="pb-[93px]">
					<h3 class="bg-[#b9ff66] text-black font-medium text-[30px] m-0 px-[4px] rounded-[7px] w-fit">Search engine</h3>
					<h3 class="bg-[#b9ff66] text-black font-medium text-[30px] m-0 px-[4px] rounded-[7px] w-fit">optimization</h3>
				</div>
				<a href="#" class="flex items-center gap-[16px]">
					<img src="http://localhost/wordpress/wp-content/uploads/2025/04/arrow-up.svg" alt="Arrow Icon">
					<span class="text-[20px] leading-[28px] text-black">Learn More</span>
				</a>
			</div>
			<img src="http://localhost/wordpress/wp-content/uploads/2025/04/seo-Illustration.svg" alt="SEO Illustration">
		</div>
		<div class="bg-[#b9ff66] drop-shadow-[0_5px_0_rgba(25,26,35,1)] border border-[#191A23] w-[600px] p-[50px] rounded-[45px] flex items-center justify-between">
			<div>
				<div class="pb-[93px]">
					<h3 class="text-black font-medium text-[30px] bg-[#b9ff66] m-0 px-[4px] rounded-[7px] w-fit">Pay-per click</h3>
					<h3 class="text-black font-medium text-[30px] bg-[#b9ff66] m-0 px-[4px] rounded-[7px] w-fit">advertising</h3>
				</div>
				<a href="#" class="flex items-center gap-[16px]">
					<img src="http://localhost/wordpress/wp-content/uploads/2025/04/arrow-up.svg" alt="Arrow Icon">
					<span class="text-[20px] leading-[28px] text-black">Learn More</span>
				</a>
			</div>
			<img src="http://localhost/wordpress/wp-content/uploads/2025/04/pa-illustration.svg" alt="Pay-per click advertising Illustration">
		</div>
		<div class="bg-[#191A23] drop-shadow-[0_5px_0_rgba(25,26,35,1)] border border-[#191A23] w-[600px] p-[50px] rounded-[45px] flex items-center justify-between">
			<div>
				<div class="pb-[93px]">
					<h3 class="text-black font-medium text-[30px] bg-[#b9ff66] m-0 px-[4px] rounded-[7px] w-fit">Social Media</h3>
					<h3 class="text-black font-medium text-[30px] bg-[#b9ff66] m-0 px-[4px] rounded-[7px] w-fit">Marketing</h3>
				</div>
				<a href="#" class="flex items-center gap-[16px]">
					<img src="http://localhost/wordpress/wp-content/uploads/2025/04/arrow-up-white.svg" alt="Arrow Icon">
					<span class="text-[20px] text-white leading-[28px]">Learn More</span>
				</a>
			</div>
			<img src="http://localhost/wordpress/wp-content/uploads/2025/04/smm-illustration.svg" alt="Social Media Marketing Illustration">
		</div>
		<div class="bg-[#f3f3f3] drop-shadow-[0_5px_0_rgba(25,26,35,1)] border border-[#191A23] w-[600px] p-[50px] rounded-[45px] flex items-center justify-between">
			<div>
				<div class="pb-[93px]">
					<h3 class="text-black font-medium text-[30px] bg-[#b9ff66] m-0 px-[4px] rounded-[7px] w-fit">Email</h3>
					<h3 class="text-black font-medium text-[30px] bg-[#b9ff66] m-0 px-[4px] rounded-[7px] w-fit">Marketing</h3>
				</div>
				<a href="#" class="flex items-center gap-[16px]">
					<img src="http://localhost/wordpress/wp-content/uploads/2025/04/arrow-up.svg" alt="Arrow Icon">
					<span class="text-[20px] leading-[28px] text-black">Learn More</span>
				</a>
			</div>
			<img src="http://localhost/wordpress/wp-content/uploads/2025/04/em-illustration.svg" alt="Email Marketing Illustration">
		</div>
		<div class="bg-[#b9ff66] drop-shadow-[0_5px_0_rgba(25,26,35,1)] border border-[#191A23] w-[600px] p-[50px] rounded-[45px] flex items-center justify-between">
			<div>
				<div class="pb-[93px]">
					<h3 class="text-black font-medium text-[30px] bg-[#b9ff66] m-0 px-[4px] rounded-[7px] w-fit">Content</h3>
					<h3 class="text-black font-medium text-[30px] bg-[#b9ff66] m-0 px-[4px] rounded-[7px] w-fit">Creation</h3>
				</div>
				<a href="#" class="flex items-center gap-[16px]">
					<img src="http://localhost/wordpress/wp-content/uploads/2025/04/arrow-up.svg" alt="Arrow Icon">
					<span class="text-[20px] leading-[28px] text-black">Learn More</span>
				</a>
			</div>
			<img src="http://localhost/wordpress/wp-content/uploads/2025/04/cc-illustration.svg" alt="Content Creation Illustration">
		</div>
		<div class="bg-[#191A23] drop-shadow-[0_5px_0_rgba(25,26,35,1)] border border-[#191A23] w-[600px] p-[50px] rounded-[45px] flex items-center justify-between">
			<div>
				<div class="pb-[93px]">
					<h3 class="text-black font-medium text-[30px] bg-[#b9ff66] m-0 px-[4px] rounded-[7px] w-fit">Analytics and</h3>
					<h3 class="text-black font-medium text-[30px] bg-[#b9ff66] m-0 px-[4px] rounded-[7px] w-fit">Tracking</h3>
				</div>
				<a href="#" class="flex items-center gap-[16px]">
					<img src="http://localhost/wordpress/wp-content/uploads/2025/04/arrow-up-white.svg" alt="Arrow Icon">
					<span class="text-[20px] text-white leading-[28px">Learn More</span>
				</a>
			</div>
			<img src="http://localhost/wordpress/wp-content/uploads/2025/04/at-illustration.svg" alt="Analytics and Tracking Illustration">
		</div>
	</div>
	<div class="bg-[#f3f3f3] relative flex items-center justify-between mt-[120px] p-[60px] rounded-[45px]">
		<div class="flex flex-col gap-[26px] max-w-[500px]">
			<h3 class="text-[30px] text-black font-medium">Let's make this happen</h3>
			<p class="text-black">Contact us today to learn more about how our digital marketing services can help your business grow and succeed online.</p>
			<button class="bg-[#191A23] px-[35px] py-[20px] rounded-[14px] text-white w-fit">Get your free proposal</button>
		</div>
		<div>
		</div>
		<img class="absolute right-32" src="http://localhost/wordpress/wp-content/uploads/2025/04/lets-make-thing-happen-illustration.svg" alt="Let's make this happen Illustration">
	</div>

	<!-- Case Studies Section -->
	<div class="flex gap-[40px] pb-[100px] pt-[150px]">
		<h2 class="bg-[#b9ff66] px-[4px] rounded-[7px] font-medium text-[40px] text-black">Case Studies</h2>
		<p class="w-[580px] text-black text-[18px]">Explore Real-Life Examples of Our Proven Digital Marketing Scucess through Our Case Studies</p>
	</div>
	<div class="flex p-[70px] bg-[#191A23] rounded-[45px]">
		<div class="flex flex-col gap-[20px]">
			<p class="text-white">For a local restaurant, we implemented a targeted PPC campaign that resulted in a 50% increase in website traffic and a 25% increase in sales.</p>
			<a href="#" class="text-[#b9ff66] text-[20px] leading-[28px] flex gap-[14px] hover:text-[#b9ff66]">Learn more <img src="http://localhost/wordpress/wp-content/uploads/2025/04/green-arrow.svg" alt="Green Arrow Icon"></a>
		</div>
		<div class="border border-white mx-[64px]"></div>
		<div class="flex flex-col gap-[20px]">
			<p class="text-white">For a B2B software company, we developed an SEO strategy that resulted in a first page ranking for key keywords and a 200% increase in organic traffic.</p>
			<a href="#" class="text-[#b9ff66] text-[20px] leading-[28px] flex gap-[14px] hover:text-[#b9ff66]">Learn more <img src="http://localhost/wordpress/wp-content/uploads/2025/04/green-arrow.svg" alt="Green Arrow Icon"></a>
		</div>
		<div class="border border-white mx-[64px]"></div>
		<div class="flex flex-col gap-[20px]">
			<p class="text-white">For a national retail chain, we created a social media marketing campaign that increased followers by 25% and generated a 20% increase in online sales.</p>
			<a href="#" class="text-[#b9ff66] text-[20px] leading-[28px] flex gap-[14px] hover:text-[#b9ff66]">Learn more <img src="http://localhost/wordpress/wp-content/uploads/2025/04/green-arrow.svg" alt="Green Arrow Icon"></a>
		</div>
	</div>

	<!-- Our Working Process Section -->
	<div class="flex gap-[40px] pb-[100px] pt-[150px]">
		<h2 class="bg-[#b9ff66] px-[4px] rounded-[7px] font-medium text-[40px] text-black">Our Working Process</h2>
		<p class="w-[292px] text-black text-[18px]">Step-by-Step Guide to Achieving Your Business Goals</p>
	</div>
	<div class="flex flex-col gap-[30px]">
		<div class="flex justify-between items-center p-[41px] drop-shadow-[0_5px_0_rgba(25,26,35,1)] bg-[#f3f3f3] rounded-[45px] border border-[#191A23]">
			<div class="flex item-center gap-[25px]">
				<span class="text-[60px] text-black font-medium">01</span>
				<span class="text-[30px] my-auto text-black font-medium">Consultation</span>
			</div>
			<button class="p-[12px] rounded-full border border-[#191A23] h-fit">
				<img src="http://localhost/wordpress/wp-content/uploads/2025/04/plus-icon.svg" alt="Plus Icon">
			</button>
		</div>
		<div class="flex justify-between items-center p-[41px] drop-shadow-[0_5px_0_rgba(25,26,35,1)] bg-[#f3f3f3] rounded-[45px] border border-[#191A23]">
			<div class="flex item-center gap-[25px]">
				<span class="text-[60px] text-black font-medium">02</span>
				<span class="text-[30px] my-auto text-black font-medium">Research and Strategy Development</span>
			</div>
			<button class="p-[12px] rounded-full border border-[#191A23] h-fit">
				<img src="http://localhost/wordpress/wp-content/uploads/2025/04/plus-icon.svg" alt="Plus Icon">
			</button>
		</div>
		<div class="flex justify-between items-center p-[41px] drop-shadow-[0_5px_0_rgba(25,26,35,1)] bg-[#f3f3f3] rounded-[45px] border border-[#191A23]">
			<div class="flex item-center gap-[25px]">
				<span class="text-[60px] text-black font-medium">03</span>
				<span class="text-[30px] my-auto text-black font-medium">Implementation</span>
			</div>
			<button class="p-[12px] rounded-full border border-[#191A23] h-fit">
				<img src="http://localhost/wordpress/wp-content/uploads/2025/04/plus-icon.svg" alt="Plus Icon">
			</button>
		</div>
		<div class="flex justify-between items-center p-[41px] drop-shadow-[0_5px_0_rgba(25,26,35,1)] bg-[#f3f3f3] rounded-[45px] border border-[#191A23]">
			<div class="flex item-center gap-[25px]">
				<span class="text-[60px] text-black font-medium">04</span>
				<span class="text-[30px] my-auto text-black font-medium">Monitoring and Implementation</span>
			</div>
			<button class="p-[12px] rounded-full border border-[#191A23] h-fit">
				<img src="http://localhost/wordpress/wp-content/uploads/2025/04/plus-icon.svg" alt="Plus Icon">
			</button>
		</div>
		<div class="flex justify-between items-center p-[41px] drop-shadow-[0_5px_0_rgba(25,26,35,1)] bg-[#f3f3f3] rounded-[45px] border border-[#191A23]">
			<div class="flex item-center gap-[25px]">
				<span class="text-[60px] text-black font-medium">05</span>
				<span class="text-[30px] my-auto text-black font-medium">Reporting and Communication</span>
			</div>
			<button class="p-[12px] rounded-full border border-[#191A23] h-fit">
				<img src="http://localhost/wordpress/wp-content/uploads/2025/04/plus-icon.svg" alt="Plus Icon">
			</button>
		</div>
		<div class="flex justify-between items-center p-[41px] drop-shadow-[0_5px_0_rgba(25,26,35,1)] bg-[#f3f3f3] rounded-[45px] border border-[#191A23]">
			<div class="flex item-center gap-[25px]">
				<span class="text-[60px] text-black font-medium">06</span>
				<span class="text-[30px] my-auto text-black font-medium">Continual Improvement</span>
			</div>
			<button class="p-[12px] rounded-full border border-[#191A23] h-fit">
				<img src="http://localhost/wordpress/wp-content/uploads/2025/04/plus-icon.svg" alt="Plus Icon">
			</button>
		</div>
	</div>

	<!-- Team Section -->
	<div class="flex gap-[40px] pb-[100px] pt-[150px]">
		<h2 class="bg-[#b9ff66] px-[4px] rounded-[7px] font-medium text-[40px] text-black">Team</h2>
		<p class="w-[473px] text-black text-[18px]">Meet the skilled and experienced team behind our successful digital marketing strategies</p>
	</div>
	<div class="grid grid-cols-3 grid-rows-2 gap-x-[40px] gap-y-[40px] mb-[40px] mx-auto">
		<div class="rounded-[45px] border border-[#191A23] drop-shadow-[0_5px_0_rgba(25,26,35,1)] bg-white px-[35px] py-[40px] ">
			<div class="flex gap-[20px]">
				<img src="http://localhost/wordpress/wp-content/uploads/2025/04/John-Smith.svg" alt="John Smith">
				<div class="self-end">
					<h4 class="text-black text-[20px] font-medium">John Smith</h4>
					<p class="text-black">CEO and Founder</p>
				</div>
				<div class="bg-black p-[12px] rounded-full h-fit">
					<img src="http://localhost/wordpress/wp-content/uploads/2025/04/linkedin.svg" alt="LinkedIn Icon">
				</div>
			</div>
			<div class="border border-[#191A23] my-[28px]">
			</div>
			<p class="text-black text-[18px]">10+ years of experience in digital marketing. Expertise in SEO, PPC, and content strategy</p>
		</div>
		<div class="rounded-[45px] border border-[#191A23] drop-shadow-[0_5px_0_rgba(25,26,35,1)] bg-white px-[35px] py-[40px] ">
			<div class="flex gap-[20px]">
				<img src="http://localhost/wordpress/wp-content/uploads/2025/04/Jane-Doe.svg" alt="Jane Doe">
				<div class="self-end">
					<h4 class="text-black text-[20px] font-medium">Jane Doe</h4>
					<p class="text-black">Director of Operations</p>
				</div>
				<div class="bg-black p-[12px] rounded-full h-fit">
					<img src="http://localhost/wordpress/wp-content/uploads/2025/04/linkedin.svg" alt="LinkedIn Icon">
				</div>
			</div>
			<div class="border border-[#191A23] my-[28px]">
			</div>
			<p class="text-black text-[18px]">7+ years of experience in project management and team leadership. Strong organizational and communication skills</p>
		</div>
		<div class="rounded-[45px] border border-[#191A23] drop-shadow-[0_5px_0_rgba(25,26,35,1)] bg-white px-[35px] py-[40px] ">
			<div class="flex gap-[20px]">
				<img src="http://localhost/wordpress/wp-content/uploads/2025/04/Michael-Brown.svg" alt="Michael Brown">
				<div class="self-end">
					<h4 class="text-black text-[20px] font-medium">Michael Brown</h4>
					<p class="text-black">Senior SEO Specialist</p>
				</div>
				<div class="bg-black p-[12px] rounded-full h-fit">
					<img src="http://localhost/wordpress/wp-content/uploads/2025/04/linkedin.svg" alt="LinkedIn Icon">
				</div>
			</div>
			<div class="border border-[#191A23] my-[28px]">
			</div>
			<p class="text-black text-[18px]">5+ years of experience in SEO and content creation. Proficient in keyword research and on-page optimization</p>
		</div>
		<div class="rounded-[45px] border border-[#191A23] drop-shadow-[0_5px_0_rgba(25,26,35,1)] bg-white px-[35px] py-[40px] ">
			<div class="flex gap-[20px]">
				<img src="http://localhost/wordpress/wp-content/uploads/2025/04/Emily-Johnson.svg" alt="Emily Johnson">
				<div class="self-end">
					<h4 class="text-black text-[20px] font-medium">Emily Johnson</h4>
					<p class="text-black">PPC Manager</p>
				</div>
				<div class="bg-black p-[12px] rounded-full h-fit">
					<img src="http://localhost/wordpress/wp-content/uploads/2025/04/linkedin.svg" alt="LinkedIn Icon">
				</div>
			</div>
			<div class="border border-[#191A23] my-[28px]">
			</div>
			<p class="text-black text-[18px]">3+ years of experience in paid search advertising. Skilled in campaign management and performance analysis</p>
		</div>
		<div class="rounded-[45px] border border-[#191A23] drop-shadow-[0_5px_0_rgba(25,26,35,1)] bg-white px-[35px] py-[40px] ">
			<div class="flex gap-[20px]">
				<img src="http://localhost/wordpress/wp-content/uploads/2025/04/Brian-Williams.svg" alt="Brian Williams">
				<div class="self-end">
					<h4 class="text-black text-[20px] font-medium">Brian Williams</h4>
					<p class="text-black">Social Media Specialist</p>
				</div>
				<div class="bg-black p-[12px] rounded-full h-fit">
					<img src="http://localhost/wordpress/wp-content/uploads/2025/04/linkedin.svg" alt="LinkedIn Icon">
				</div>
			</div>
			<div class="border border-[#191A23] my-[28px]">
			</div>
			<p class="text-black text-[18px]">4+ years of experience in social media marketing. Proficient in creating and scheduling content, analyzing metrics, and building engagement</p>
		</div>
		<div class="rounded-[45px] border border-[#191A23] drop-shadow-[0_5px_0_rgba(25,26,35,1)] bg-white px-[35px] py-[40px] ">
			<div class="flex gap-[20px]">
				<img src="http://localhost/wordpress/wp-content/uploads/2025/04/Sarah-Kim.svg" alt="Sarah Kim">
				<div class="self-end">
					<h4 class="text-black text-[20px] font-medium">Sarah Kim</h4>
					<p class="text-black">Content Creator</p>
				</div>
				<div class="bg-black p-[12px] rounded-full h-fit">
					<img src="http://localhost/wordpress/wp-content/uploads/2025/04/linkedin.svg" alt="LinkedIn Icon">
				</div>
			</div>
			<div class="border border-[#191A23] my-[28px]">
			</div>
			<p class="text-black text-[18px]">2+ years of experience in writing and editing.
				Skilled in creating compelling, SEO-optimized content for various industries</p>
		</div>
	</div>
	<div class="flex justify-end">
		<button class="bg-[#191A23] px-[35px] py-[20px] rounded-[14px] text-white w-fit">See all team</button>
	</div>

	<!-- Testimonials Section -->
	<div class="flex gap-[40px] pb-[100px] pt-[150px]">
		<h2 class="bg-[#b9ff66] px-[4px] rounded-[7px] font-medium text-[40px] text-black">Team</h2>
		<p class="w-[473px] text-black text-[18px]">Meet the skilled and experienced team behind our successful digital marketing strategies</p>
	</div>
	<div class="bg-[#191A23] overflow-x-hidden flex flex-col gap-[124px] py-[70px] rounded-[45px]">
		<div class="flex justify-between w-[1918px] mx-auto">
			<div>
				<img src="http://localhost/wordpress/wp-content/uploads/2025/04/Bubble.svg" alt="Bubble">
			</div>
			<div class="flex flex-col gap-[20px]">
				<img src="http://localhost/wordpress/wp-content/uploads/2025/04/Bubble.svg" alt="Bubble">
				<div class="ml-20">
					<h4 class="text-[20px] font-medium text-[#b9ff66]">John Smith</h4>
					<p class="text-[18px] text-white">Marketing Director at XYZ Corp</p>
				</div>

			</div>
			<div>
				<img src="http://localhost/wordpress/wp-content/uploads/2025/04/Bubble.svg" alt="Bubble">
			</div>
		</div>
		<div></div>
	</div>

	<!-- Contact Us Section -->
	<div class="flex gap-[40px] pb-[100px] pt-[150px]">
		<h2 class="bg-[#b9ff66] px-[4px] rounded-[7px] font-medium text-[40px] text-black">Contact Us</h2>
		<p class="w-[323px] text-black text-[18px]">Connect with Us: Let's Discuss Your Digital Marketing Needs</p>
	</div>
	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', 'page');

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
