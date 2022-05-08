<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('tailpress_header'); ?>

		<header>
			<div class="headerBG">
				<div class="navContainer">
					<div>
						<div id="navHeader">
							<?php if (has_custom_logo()) { ?>
								<?php the_custom_logo(); ?>
							<?php } else { ?>
								<div class="headerLinks">
									<div>
										<a href="<?php echo get_bloginfo('url'); ?>" id="homeLink">
											<!--<?php echo get_bloginfo('name'); ?> --> Accountants & Co
										</a>

									</div>
									<nav>
										<div class="aboutUsLinks">
											<a href="<?php echo get_bloginfo('url'); ?>" class="navLink">
												About Us
											</a>

											<a href="<?php echo get_bloginfo('url'); ?>" class="navLink">
												The Team
											</a>

											<a href="<?php echo get_bloginfo('url'); ?>" class="navLink">
												Services
											</a>
										</div>
										<div class="interactionLinks">
											<a href="<?php echo get_bloginfo('url'); ?>" class="navLink">
												Login
											</a>
											<a href="<?php echo get_bloginfo('url'); ?>" class="navLink">
												Blog
											</a>
										</div>


									</nav>
									<a href="<?php echo get_bloginfo('url'); ?>" class="orangeBtn">
										Get in touch
									</a>


								</div>

							<?php } ?>
						</div>


						<div class="lg:hidden">
							<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
								<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
										<g id="icon-shape">
											<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
										</g>
									</g>
								</svg>
							</a>
						</div>


					</div>
					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
							'menu_class'      => 'lg:flex lg:-mx-4',
							'theme_location'  => 'primary',
							'li_class'        => 'lg:mx-4',
							'fallback_cb'     => false,
						)
					);
					?>
				</div>
				<div class="slider">

					<a href="<?php echo get_bloginfo('url'); ?>" id="previousRoundNavBtn" class="roundNavButton">
						<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M39.375 20C39.375 9.29687 30.7031 0.625 20 0.625C9.29688 0.625 0.625 9.29688 0.625 20C0.625 30.7031 9.29688 39.375 20 39.375C30.7031 39.375 39.375 30.7031 39.375 20ZM20 36.875C10.7266 36.875 3.125 29.3672 3.125 20C3.125 10.7266 10.6328 3.125 20 3.125C29.2734 3.125 36.875 10.6328 36.875 20C36.875 29.2734 29.3672 36.875 20 36.875ZM13.2344 19.3359L22.2266 10.3516C22.5938 9.98437 23.1875 9.98437 23.5547 10.3516L24.1094 10.9062C24.4766 11.2734 24.4766 11.8672 24.1094 12.2344L16.3281 20L24.1016 27.7734C24.4688 28.1406 24.4688 28.7344 24.1016 29.1016L23.5469 29.6562C23.1797 30.0234 22.5859 30.0234 22.2188 29.6562L13.2266 20.6719C12.8672 20.2969 12.8672 19.7031 13.2344 19.3359Z" fill="white" />
						</svg>
					</a>
					<div id="description">
						<p id="mainDescription">
							<!-- <?php echo get_bloginfo('description'); ?> -->

							We help our clients to understand, measure & improve their numbers

						</p>
						<p class="subDescription">
							We help our clients to understand, measure and improve their numbers. <br>
							We do this based on our core values and we are UNIQUE...
						</p>
						<a href="<?php echo get_bloginfo('url'); ?>" class="largerOrangeBtn">
							Get in touch
						</a>
					</div>

					<a href="<?php echo get_bloginfo('url'); ?>" id="nextRoundNavBtn" class="roundNavButton">
						<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M39.375 20C39.375 9.29687 30.7031 0.625 20 0.625C9.29688 0.625 0.625 9.29688 0.625 20C0.625 30.7031 9.29688 39.375 20 39.375C30.7031 39.375 39.375 30.7031 39.375 20ZM20 36.875C10.7266 36.875 3.125 29.3672 3.125 20C3.125 10.7266 10.6328 3.125 20 3.125C29.2734 3.125 36.875 10.6328 36.875 20C36.875 29.2734 29.3672 36.875 20 36.875ZM13.2344 19.3359L22.2266 10.3516C22.5938 9.98437 23.1875 9.98437 23.5547 10.3516L24.1094 10.9062C24.4766 11.2734 24.4766 11.8672 24.1094 12.2344L16.3281 20L24.1016 27.7734C24.4688 28.1406 24.4688 28.7344 24.1016 29.1016L23.5469 29.6562C23.1797 30.0234 22.5859 30.0234 22.2188 29.6562L13.2266 20.6719C12.8672 20.2969 12.8672 19.7031 13.2344 19.3359Z" fill="white" />
						</svg>
					</a>
				</div>

				<div class="headerFooter">
					<div class="currentSlideIndicatorContainer">
						<!-- I understand that I should make a query to the database and create a loop to create these -->
						<a href="<?php echo get_bloginfo('url'); ?>" id="firstIndicator" class="currentSlideIndicator">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0 8C0 3.58172 3.58172 0 8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8Z" fill="white" />
							</svg>
						</a>
						<a href="<?php echo get_bloginfo('url'); ?>" id="secondIndicator" class="currentSlideIndicator">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0.5 8C0.5 3.85786 3.85786 0.5 8 0.5C12.1421 0.5 15.5 3.85786 15.5 8C15.5 12.1421 12.1421 15.5 8 15.5C3.85786 15.5 0.5 12.1421 0.5 8Z" stroke="white" />
							</svg>
						</a>
						<a href="<?php echo get_bloginfo('url'); ?>" id="lastIndicator" class="currentSlideIndicator">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0.5 8C0.5 3.85786 3.85786 0.5 8 0.5C12.1421 0.5 15.5 3.85786 15.5 8C15.5 12.1421 12.1421 15.5 8 15.5C3.85786 15.5 0.5 12.1421 0.5 8Z" stroke="white" />
							</svg>
						</a>
					</div>
					<div class="socialMediaLinkContainer">
						<a href="<?php echo get_bloginfo('url'); ?>" id="fbIcon" class="socialMediaLink">
							<svg width="42.55" height="42.55" viewBox="0 0 42.55 42.55" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="42.5507" height="42.5507" rx="21.2754" fill="white" />
								<image x="16.5" y="11.7" width="10.03" height="19.15" href="/wp-content/themes/tailpress-master/resources/images/icons/facebook-f-brands.svg"
							</svg>
						</a>
						<a href="<?php echo get_bloginfo('url'); ?>" id="twitterIcon" class="socialMediaLink">
							<svg width="42.55" height="42.55" viewBox="0 0 42.55 42.55" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="42.5507" height="42.5507" rx="21.2754" fill="white" />
								<image x="11.17" y="11.7" width="20.21" height="16.42" href="/wp-content/themes/tailpress-master/resources/images/icons/twitter-brands.svg"
							</svg>
						</a>
						<a href="<?php echo get_bloginfo('url'); ?>" id="instaIcon" class="socialMediaLink">
							<svg width="42.55" height="42.55" viewBox="0 0 42.55 42.55" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="42.5507" height="42.5507" rx="21.2754" fill="white" />
								<image x="11.815" y="11.7" width="18.92" height="18.02" href="/wp-content/themes/tailpress-master/resources/images/icons/instagram-brands.svg"
							</svg>
						</a>
						<a href="<?php echo get_bloginfo('url'); ?>" id="linkedInIcon" class="socialMediaLink">
							<svg width="42.55" height="42.55" viewBox="0 0 42.55 42.55" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="42.5507" height="42.5507" rx="21.2754" fill="white" />
								<image x="12.765" y="11.7" width="17.02" height="17.69" href="/wp-content/themes/tailpress-master/resources/images/icons/linkedin-brands.svg"
							</svg>
						</a>
						<a href="<?php echo get_bloginfo('url'); ?>" id="ytIcon" class="socialMediaLink">
							<svg width="42.55" height="42.55" viewBox="0 0 42.55 42.55" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="42.5507" height="42.5507" rx="21.2754" fill="white" />
								<image x="10.685" y="11.7" width="21.18" height="19.16" href="/wp-content/themes/tailpress-master/resources/images/icons/youtube-brands.svg"
							</svg>
						</a>
					</div>
				</div>

			</div>

		</header>

		<div id="content" class="site-content flex-grow">

			<?php if (is_front_page()) { ?>
				<!-- Start introduction -->
				<div class="container mx-auto my-12 border-b pb-12">
					<h1 class="font-bold text-lg text-secondary uppercase">TailPress</h1>
					<h2 class="text-3xl lg:text-7xl tracking-tight font-extrabold my-4">Rapidly build your WordPress theme
						with <a href="https://tailwindcss.com" class="text-primary">Tailwind CSS</a>.</h2>
					<p class="max-w-screen-lg text-gray-700 text-lg font-medium mb-10">TailPress is your go-to starting
						point for developing WordPress themes with TailwindCSS and comes with basic block-editor support out
						of the box.</p>
					<a href="https://github.com/jeffreyvr/tailpress" class="w-full sm:w-auto flex-none bg-gray-900 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">View
						on Github</a>
				</div>
				<!-- End introduction -->
			<?php } ?>

			<?php do_action('tailpress_content_start'); ?>

			<main>