<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
} ?>

<footer class="bg-kompletnoOpremanjeBackground py-10">
	<section id="footer" class="bg-kompletnoOpremanjeBackground py-10">
	<div class="container mx-auto">
		<div class="lg:grid grid-cols-5 gap-4">
			<!-- LOGO AND INFO SECTION -->
			<div class="lg:col-span-1 lg:border-r-2 border-footerText">
				<div class="footer_content__wrapper lg:w-4/5 text-center lg:text-left">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/Kalea logo sa crtom 1.png'; ?>" alt="Kalea Logo" class="mb-6 mx-auto">
					</a>
					<div class="footer_info__written relative">
						<div class="footer_info__address mb-6">
							<span class="block mb-2 text-sm text-footerText font-light font-kanit">+ 387 (0)33 40 24 44</span>
							<span class="block mb-2 text-sm text-footerText font-light font-kanit">+ 387 (0)33 40 11 66</span>
						</div>
						<div class="footer_info__location mb-6">
							<span class="block mb-2 text-sm text-footerText font-light font-kanit">Bosanski put b.b. 71380 Ilijaš, BIH</span>	
						</div>
						<div class="footer_info__emails mb-6">
							<span class="block mb-2 text-sm text-footerText font-light font-kanit">kalea@kalea.ba</span>
							<span class="block mb-2 text-sm text-footerText font-light font-kanit">marketing@kalea.ba</span>
							<span class="block mb-2 text-sm text-footerText font-light font-kanit">racunovodstvo@kalea.ba</span>	
						</div>
						<div class="footer_info__years mb-6">
							<div class="block text-center mb-2">
								<span class="text-center text-lg font-kanit mb-2 text-footerText font-normal border-b-2 border-footerText">1996</span>
							</div>
							<span class="text-center block mb-2 text-sm text-footerText font-light font-kanit">VIŠE OD 25 GODINA SA VAMA</span>
							<div class="block text-center">
								<span class="text-center text-lg font-kanit mb-2 text-footerText font-normal border-t-2 border-footerText"><?php echo date("Y"); ?></span>
							</div>
						</div>
						<!-- ICONS -->
						<div class="absolute top-2 -left-10">
							<!-- TELEPHONE -->
							<div class="mb-10">
								<i class="text-xl text-white fa-solid fa-phone"></i>
							</div>
							<!-- LOCATION -->
							<div class="mb-8">
								<i class="text-xl text-white fa-solid fa-location-dot"></i>
							</div>
							<!-- EMAIL -->
							<div class="mb-10">
								<i class="text-xl text-white fa-solid fa-envelope"></i>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- SALONI NAMJEŠTAJA -->
			<div class="hidden lg:block col-span-4 my-auto relative">
				<div class="grid grid-cols-4 gap-4 ml-16">
					<?php 
					
						$args = array(  
							'post_type' => 'lokacije',
							'posts_per_page' => 7,
							'meta_query' => array(
								array(
									'key' => 'prikazi_lokaciju_salona',
									'value' => 'Da',
									'compare' => 'LIKE',
								)
								)
						);

						$loop = new WP_Query( $args ); 
							
						while ( $loop->have_posts() ) : $loop->the_post(); 
						
						$radnoVrijeme = get_field('radno_vrijeme');
						$radnoVrijemeNedeljom = get_field('radno_vrijeme_ned');
						$kontaktTelefon = get_field('telefon_1');
						$kontaktEmail = get_field('mail');
						
						?>
						
						<div class="">
							<h2 class="text-xl font-kanit font-semibold text-white mb-3.5"><?php the_title(); ?></h2>
							<span class="block mb-2 text-sm text-footerText font-light font-kanit"><?php echo $radnoVrijeme; ?></span>
							<span class="block mb-2 text-sm text-footerText font-light font-kanit"><?php echo $radnoVrijemeNedeljom; ?></span>
							<span class="block mb-2 text-sm text-footerText font-light font-kanit"><?php echo $kontaktTelefon; ?></span>
							<span class="block mb-2 text-sm text-footerText font-light font-kanit"><?php echo $kontaktEmail; ?></span>
						</div>
						<?php
						endwhile;

						wp_reset_postdata(); 
					?>
				</div>
				<!-- SOCIAL MEDIA SECTION -->
				<div class="absolute bottom-20 right-48">
					<div class="mb-3">
						<span class="text-xl text-white uppercase font-kanit font-normal ">Follow Us</span>
					</div>
					<!-- SOCIAL MEDIA -->
					<?php 
					
					$socialMediaFacebook  = get_field('social_media_facebook');
					$socialMediaLinkedin  = get_field('social_media_linkedin');
					$socialMediaInstagram = get_field('social_media_instagram');
					$socialMediaYoutube   = get_field('social_media_youtube');
					
					?>
					<div class="flex justify-start my-auto">
						<!-- FACEBOOK -->
						<a href="<?php echo $socialMediaFacebook ?>" target="_blank">
							<i class="text-white text-2xl fa-brands fa-facebook mr-4"></i>
						</a>
						<!-- INSTAGRAM -->
						<a href="<?php echo $socialMediaInstagram ?>" target="_blank">
							<i class="text-white text-2xl fa-brands fa-instagram mr-4"></i>
						</a>
						<!-- YOUTUBE -->
						<a href="<?php echo $socialMediaYoutube ?>" target="_blank">
							<i class="text-white text-2xl fa-brands fa-youtube mr-4"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- WAY OF PAYMET SECTION -->
		<div class="flex justify-center my-10">
			<!-- WS PAY -->
			<div class="mx-2">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/footerImages/wsPayWebSecureLogo-106x50-whitebg-1.png'; ?>" alt="" class="mx-auto">
			</div>
			<!-- AMERICAN EXPRESS -->
			<div class="mx-2">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/footerImages/AmericanExpress50-1.jpg'; ?>" alt="" class="mx-auto">
			</div>
			<!-- DINNERS CLUB -->
			<div class="mx-2">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/footerImages/diners_50.gif'; ?>" alt="" class="mx-auto">
			</div>
			<!-- VISA -->
			<div class="mx-2">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/footerImages/Visa50-1.gif'; ?>" alt="" class="mx-auto">
			</div>
			<!-- VISA SECURE -->
			<div class="mx-2">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/footerImages/visa-secure.png'; ?>" alt="" class="mx-auto">
			</div>
			<!-- MASTERCARD -->
			<div class="mx-2">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/footerImages/maestro50-1.gif'; ?>" alt="" class="mx-auto">
			</div>
			<!-- MAESTRO -->
			<div class="mx-2">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/footerImages/maestro50-1.gif'; ?>" alt="" class="mx-auto">
			</div>
			<!-- DISCOVER -->
			<div class="mx-2">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/footerImages/discover_50-1.gif'; ?>" alt="" class="mx-auto">
			</div>
			<!-- MASTERCARD IDENTITY CHECK -->
			<div class="mx-2">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/footerImages/mastercard-identity-check.png'; ?>" alt="" class="mx-auto">
			</div>
			<!-- DINACARD-->
			<div class="mx-2">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/footerImages/dinacard50.png'; ?>" alt="" class="mx-auto">
			</div>

		</div>
		<!-- COPYRIGHT SECTION -->
		<div class="hidden lg:flex justify-end text-white">
			<a href="#" class="text-grayBackground font-kanit text-sm font-normal px-10 py-2">Politika Pirvatnosti</a>
			<a href="#" class="text-grayBackground font-kanit text-sm font-normal px-10 py-2">Opći uvjeti poslovanja</a>
			<span class="text-zinc-500 font-kanit text-sm font-normal py-2">Copy right © <?php echo date("Y"); ?> KALEA All right reserved by <span class="text-grayBackground font-kanit text-sm font-normal">ACKE Creative Studio</span></span>
		</div>
	</div>
	</section>

</footer>

<?php wp_footer(); ?>

</body>
</html>
