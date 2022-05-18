<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
$site_name = get_bloginfo( 'name' );
$tagline   = get_bloginfo( 'description', 'display' );
?>
<!-- DESKTOP MENU -->
<header class="py-0 lg:py-5" role="banner">
	<nav id="navbar" class="hidden lg:block">
		<div class="container mx-auto">
			<div class="flex justify-between">
				<!-- LEFT SECTION -->
				<!-- LOGO -->
				<div class="site-branding">
					<?php
					if ( has_custom_logo() ) {
						the_custom_logo();
					} elseif ( $site_name ) {
						?>
						<h1 class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( 'Home', 'hello-elementor' ); ?>" rel="home">
								<?php echo esc_html( $site_name ); ?>
							</a>
						</h1>
						<p class="site-description">
							<?php
							if ( $tagline ) {
								echo esc_html( $tagline );
							}
							?>
						</p>
					<?php } ?>
				</div>
				<!-- RIGHT SECTION --> 
				<!-- NAVIGATION -->
				<div class="nav_rightsection flex my-auto">
					<div class="my-auto">
						<?php wp_nav_menu(
							array(
							'theme_location' => 'menu-1',
							'menu_class' => 'shop_menu text-white text-lg font-kanit font-medium flex')
							); 
						?>
					</div>
					<!-- KONFIGURATOR BUTTON -->
					<div class="ml-5 my-auto">
						<a href="<?php echo site_url('/konfigurator')?>">
							<button class="text-white font-medium font-kanit text-lg uppercase bg-konfiguratorRed px-4 py-1">Konfigurator
							</button>
						</a>
					</div>
					<!-- LOGIN CART BUTTONS -->
					<div class="flex my-auto ml-5">
						<!-- PROFILE INCON -->
						<a href="#" class="my-auto">
							<img class="header_profileIcon" src="<?php echo get_template_directory_uri() . '/assets/images/Vector.png'; ?>" alt="">
						</a>
						<!-- CART INCON -->
						<a href="<?php echo site_url('/cart')?>" class="ml-5 my-auto">
							<img class="header_cartIcon" src="<?php echo get_template_directory_uri() . '/assets/images/Group.png'; ?>" alt="">
						</a>
						<!-- DROPDOWN ICON -->
						<button class="dropDown_toggler ml-5 my-auto" data-target="#headerDropdown">
							<img class="header_dropdown" src="<?php echo get_template_directory_uri() . '/assets/images/header_dropdown.svg'; ?>" alt="">
						</button>
					</div>
				</div>
			</div>
		</div>
	</nav>
</header>

<!-- MOBILE MENU -->
<header>
  <nav id="navbar" class="lg:hidden bg-black py-5 relative">
        <div class="container mx-auto">
            <div class="flex justify-between">
                <!-- LOGO SECTION -->
				<div class="site-branding">
					<?php
					if ( has_custom_logo() ) {
						the_custom_logo();
					} elseif ( $site_name ) {
						?>
						<h1 class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( 'Home', 'hello-elementor' ); ?>" rel="home">
								<?php echo esc_html( $site_name ); ?>
							</a>
						</h1>
						<p class="site-description">
							<?php
							if ( $tagline ) {
								echo esc_html( $tagline );
							}
							?>
						</p>
					<?php } ?>
				</div>
                <!-- MENU ICON -->
                <button class="nav-toggler" data-target="#navigation">
                    <i class="text-2xl text-white fas fa-bars"></i>
                </button>
            </div>
        </div>
        <!-- DROPDOWN CONTAINER -->
        <div class="hidden navbar_grid__dropdown w-full h-auto absolute top-0 right-0 z-10 bg-black flex justify-between" id="navigation">

            <!-- DROPDOWN MENU -->
            <div class="header_dropdown bg-black flex justify-center w-full h-auto py-10">
                <div class="">
                    <!-- CLOSE BUTTON -->
                    <button class="nav_close__button nav-toggler close_button text-white text-4xl p-3 absolute top-2 right-2" data-target="#navigation">&#215;</button>
                    <!-- NAVIGATION -->
                    <div class="navigation">
                        <div class="pages mb-5">
                            <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
									'menu_class' => 'mobile_menu text-white text-lg font-kanit font-medium text-center ')
									);  
                            ?>
                        </div>
                    </div>
					<!-- KONFIGURATOR BUTTON -->
					<div class="">
						<a href="<?php echo site_url('/konfigurator')?>">
							<button class="text-white font-medium font-kanit text-lg uppercase bg-konfiguratorRed px-4 py-1">Konfigurator / Shop
							</button>
						</a>
					</div>
					<!-- LOGIN CART BUTTONS -->
					<div class="flex justify-center my-5">
						<!-- PROFILE INCON -->
						<a href="#">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/Vector.png'; ?>" alt="">
						</a>
						<!-- CART INCON -->
						<a href="<?php echo site_url('/cart')?>" class="ml-5">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/Group.png'; ?>" alt="">
						</a>
					</div>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- HEADER DROPDOWN -->
<section id="headerDropdown" class="bg-kompletnoOpremanjeBackground py-14 w-full absolute top-0 left-0 z-20 hidden navbar_grid__dropdown">
    <div class="container mx-auto">
        <!-- TOP SECTION -->
        <div class="flex justify-between">
            <!-- LOGO -->
            <div class="">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/kalea_white_logo.png'; ?>" alt="">
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
                    <i class="text-white text-2xl fa-brands fa-facebook mr-7"></i>
                </a>
                <!-- LINKEDIN -->
                <a href="<?php echo $socialMediaLinkedin ?>" target="_blank">
                        <i class="text-white text-2xl fa-brands fa-linkedin mr-7"></i>
                </a>
                <!-- INSTAGRAM -->
                <a href="<?php echo $socialMediaInstagram ?>" target="_blank">
                    <i class="text-white text-2xl fa-brands fa-instagram mr-7"></i>
                </a>
                <!-- YOUTUBE -->
                <a href="<?php echo $socialMediaYoutube ?>" target="_blank">
                    <i class="text-white text-2xl fa-brands fa-youtube mr-7"></i>
                </a>
                <!-- CLOSE BUTTON -->
                <button class="dropdown_close dropDown_toggler close_button text-white text-2xl fa-solid fa-x ml-24" data-target="#headerDropdown"><i></i></button>
            </div>
        </div>
        <!-- BOTTOM FIRST ROW SECTION -->
        <div class="grid grid-cols-8 my-20">
            <div class="col-span-7">
                <!-- FIRST ROW -->
                <div class="grid grid-cols-7 gap-4">
                    <!-- SJEDEĆE GARNITURE -->
                    <div class="">
                        <a href="<?php echo site_url('/product-category/sjedece-garniture/')?>">
                            <div class="mx-auto my-auto">
                              <img class="header_dropdown__svg mx-auto" src="<?php echo get_template_directory_uri() . '/assets/images/headerDropdown/sjedeće garniture 1.svg'; ?>" alt="">
                            </div>
                            <h2 class="text-headerDropDownTitle font-calibri text-xl font-normal text-center uppercase">Sjedeće <br>garniture</h2>                 
                        </a>
                    </div>
                    <!-- KUHINJE -->
                    <div class="">
                        <a href="<?php echo site_url('/product-category/kuhinje/')?>">
                            <div class="mx-auto my-auto">
                                <img class="header_dropdown__svg mx-auto" src="<?php echo get_template_directory_uri() . '/assets/images/headerDropdown/kuhinje.svg'; ?>" alt="">
                            </div>
                            <h2 class="text-headerDropDownTitle font-calibri text-xl font-normal text-center uppercase mt-3">Kuhinje</h2>
                        </a>
                    </div>
                    <!-- SPAVAĆE SOBE -->
                    <div class="">
                        <a href="<?php echo site_url('/product-category/spavace-sobe/')?>">
                            <div class="mx-auto my-auto">
                                <img class="header_dropdown__svg mx-auto" src="<?php echo get_template_directory_uri() . '/assets/images/headerDropdown/spavaće sobe.svg'; ?>" alt="">
                            </div>
                            <h2 class="text-headerDropDownTitle font-calibri text-xl font-normal text-center uppercase mt-3">Spavaće sobe</h2>
                        </a>
                    </div>
                    <!-- TERPEZARIJSKI STOLOVI -->
                    <div class="">
                        <a href="<?php echo site_url('/product-category/trpezarijski-stolovi/')?>">
                            <div class="mx-auto my-auto">
                                <img class="header_dropdown__svg mx-auto" src="<?php echo get_template_directory_uri() . '/assets/images/headerDropdown/terpezarijski stolovi.svg'; ?>" alt="">
                            </div>
                            <h2 class="text-headerDropDownTitle font-calibri text-xl font-normal text-center uppercase mt-3">Terpezarijski <br> stolovi</h2>
                        </a>
                    </div>
                    <!-- TERPEZARIJSKE STOLICE -->
                    <div class="">
                        <a href="<?php echo site_url('/product-category/trpezarijske-stolice/')?>">
                            <div class="mx-auto my-auto">
                                <img class="header_dropdown__svg mx-auto" src="<?php echo get_template_directory_uri() . '/assets/images/headerDropdown/terpezarijske stolice.svg'; ?>" alt="">
                            </div>
                            <h2 class="text-headerDropDownTitle font-calibri text-xl font-normal text-center uppercase mt-3">Terpezarijske <br> stolice</h2>
                        </a>
                    </div>
                    <!-- FOTELJE -->
                    <div class="">
                        <a href="<?php echo site_url('/product-category/fotelje/')?>">
                            <div class="mx-auto my-auto">
                                <img class="header_dropdown__svg mx-auto" src="<?php echo get_template_directory_uri() . '/assets/images/headerDropdown/fotelje.svg'; ?>" alt="">                      
                            </div>
                            <h2 class="text-headerDropDownTitle font-calibri text-xl font-normal text-center uppercase mt-3">Fotelje</h2>
                        </a>
                    </div>
                    <!-- KOMODE -->
                    <div class="">
                        <a href="<?php echo site_url('/product-category/komode/')?>">
                            <div class="mx-auto my-auto">
                                <img class="header_dropdown__svg mx-auto" src="<?php echo get_template_directory_uri() . '/assets/images/headerDropdown/komode.svg'; ?>" alt="">
                            </div>
                            <h2 class="text-headerDropDownTitle font-calibri text-xl font-normal text-center uppercase mt-3">Komode</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- BOTTOM SECOND ROW SECTION -->
        <div class="grid grid-cols-8 my-20">
            <div class="col-span-7">
                <!-- SECOND ROW -->
                <div class="grid grid-cols-7 gap-4">
                    <!-- PLAKARI -->
                    <div class="">
                        <a href="<?php echo site_url('/product-category/plakari/')?>">
                            <div class="mx-auto my-auto">
                                <img class="header_dropdown__svg mx-auto" src="<?php echo get_template_directory_uri() . '/assets/images/headerDropdown/plakari.svg'; ?>" alt="">
                            </div>
                            <h2 class="text-headerDropDownTitle font-calibri text-xl font-normal text-center uppercase mt-3">Plakari</h2>                 
                        </a>
                    </div>
                    <!-- KLUB STOLOVI -->
                    <div class="">
                        <a href="<?php echo site_url('/product-category/klub-stolovi/')?>">
                            <div class="mx-auto my-auto">
                                <img class="header_dropdown__svg mx-auto" src="<?php echo get_template_directory_uri() . '/assets/images/headerDropdown/klub stolovi.svg'; ?>" alt="">
                            </div>
                            <h2 class="text-headerDropDownTitle font-calibri text-xl font-normal text-center uppercase mt-3">Klub stolovi</h2>
                        </a>
                    </div>
                    <!-- DJEČIJE SOBE -->
                    <div class="">
                        <a href="<?php echo site_url('/product-category/djecije-sobe/')?>">
                            <div class="mx-auto my-auto">
                              <img class="header_dropdown__svg mx-auto" src="<?php echo get_template_directory_uri() . '/assets/images/headerDropdown/dječije sobe.svg'; ?>" alt="">
                            </div>
                            <h2 class="text-headerDropDownTitle font-calibri text-xl font-normal text-center uppercase mt-3">Dječije sobe</h2>
                        </a>
                    </div>
                    <!-- PREDSOBLJA -->
                    <div class="">
                        <a href="<?php echo site_url('/product-category/predsoblja/')?>">
                            <div class="mx-auto my-auto">
                               <img class="header_dropdown__svg mx-auto" src="<?php echo get_template_directory_uri() . '/assets/images/headerDropdown/predsoblja.svg'; ?>" alt="">
                            </div>
                            <h2 class="text-headerDropDownTitle font-calibri text-xl font-normal text-center uppercase mt-3">Predsoblja</h2>
                        </a>
                    </div>
                    <!-- SISTEMI ZA DNEVNI BORAVAK -->
                    <div class="">
                        <a href="<?php echo site_url('/product-category/sistem-za-dnevni-boravak/')?>">
                            <div class="mx-auto my-auto">
                                <img class="header_dropdown__svg mx-auto" src="<?php echo get_template_directory_uri() . '/assets/images/headerDropdown/sistemi za dnevni boravak.svg'; ?>" alt="">
                            </div>
                            <h2 class="text-headerDropDownTitle font-calibri text-xl font-normal text-center uppercase mt-3">Sistemi za dnevni <br> boravak</h2>
                        </a>
                    </div>
                    <!-- KANCELARIJSKI NAMJEŠTAJ -->
                    <div class="">
                        <a href="<?php echo site_url('/product-category/kancelarijski-namjestaj/')?>">
                            <div class="mx-auto my-auto">
                                <img class="header_dropdown__svg mx-auto" src="<?php echo get_template_directory_uri() . '/assets/images/headerDropdown/kancelarijski namještaj.svg'; ?>" alt="">
                            </div>
                            <h2 class="text-headerDropDownTitle font-calibri text-xl font-normal text-center uppercase mt-3">Kancelarijski<br> namještaj</h2>
                        </a>
                    </div>
                    <!-- PRATEĆE DEKORACIJE -->
                    <div class="">
                        <a href="<?php echo site_url('/product-category/dekoracije/')?>">
                            <div class="mx-auto my-auto">
                                <img class="header_dropdown__svg mx-auto" src="<?php echo get_template_directory_uri() . '/assets/images/headerDropdown/terpezarijski stolovi.svg'; ?>" alt="">
                            </div>
                            <h2 class="text-headerDropDownTitle font-calibri text-xl font-normal text-center uppercase mt-3">Prateće <br> dekoracije</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


