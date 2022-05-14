<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<div class="container mx-auto">

<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>



</div>

<section id="singleProduct" class="bg-grayBackground pb-10">
		<!-- HERO SECTION -->
		<div class="singleProduct_hero__image relative">
			<?php 
				$singleProduct_hero = get_field('naslovna_slika');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $singleProduct_hero ) {
					echo wp_get_attachment_image( $singleProduct_hero, $size );
				}
			?>
			<div class="singleProduct_hero__scroll absolute bottom-10 right-10">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/scroll.png'; ?>" alt="">
			</div>
		</div>
		<!-- SPLIDE CAROUSEL -->
		<section id="third" class="splide my-10" aria-labelledby="carousel-heading">
				<div class="splide__track h-3/6">
						<ul class="splide__list">
							
								<?php 
									global $product;

									$attachment_ids = $product->get_gallery_image_ids();

									foreach( $attachment_ids as $attachment_id ) {
										$image_link = wp_get_attachment_url( $attachment_id );
										echo '<li class="splide__slide">';
										echo '<img src="'.$image_link.'" alt="" class="splide_image">"';
										echo '</li>';
									}
								?>
						</ul>
				</div>
		</section>
		<!-- CONTENT SECTION -->
		<section id="singleProduct_mainContent" class="pt-14">
			<div class="container mx-auto">
				<div class="grid grid-cols-2 gap-4">
					<!-- LEFT SECTION -->
					<div class="border-r border-black">
						<!-- TITLE AND CATEGORY -->
						<h1 class="font-lovelace uppercase text-4xl font-normal text-grayText"><?php the_title(); ?></h1>
						<div class="font-kanit uppercase text-2xl font-normal text-grayText mt-1.5">
							<?php
							$terms = get_the_terms($product->ID, 'product_cat');
								foreach ($terms as $term) {

									$product_cat = $term->name;
										echo $product_cat;
										break;
									}
							?>
						</div>
						<!-- OPIS PROIZVODA -->
						<div class="singleProduct_opisProizvoda mt-16 lg:w-9/12">
							<h3 class="text-xl uppercase font-lovelace font-normal text-grayText">Opis proizvoda</h3>
							<p class="text-sm font-kanit font-normal text-grayText mt-1.5 "><?php the_content(); ?></p>
						</div>
						<!-- PREUZMI PODATKE U PDF-u -->
						<div class="text-2xl font-kanit font-extralight text-grayText flex uppercase mt-16 ">
							<?php
							$tehnickiPDF = get_field('tehnicki_podaci_pdf');
							if($tehnickiPDF): ?>
								<a href="<?php echo $tehnickiPDF ['url']; ?>"><?php echo $file['filename']; ?>Preuzmi tehničke podatke u PDF-u</a>
								<img src="<?php echo get_template_directory_uri() . '/assets/images/PDF_icon.svg.png'; ?>" alt="" class="tehnicki_podaci__icon ml-5">
							<?php endif; ?>
						</div>
					</div>
					<!-- RIGHT SECTION -->
					<div class="mt-10 ml-10">
					<?php
						// Check rows exists.
						if( have_rows('dodaj_informacije_o_3d_modelima') ):

							// Loop through rows.
							while( have_rows('dodaj_informacije_o_3d_modelima') ) : the_row();

								// Load sub field value.
								$vrstaModela = get_sub_field('vrsta_modela');
								$cijenaModela = get_sub_field('osnovni');
								// Do something... ?>
								<div class="mt-4">
									<div class="grid grid-cols-4 gap-4">
										<!-- VRSTA MODELA -->
										<div class="">
											<span class="font-kanit text-2xl font-light uppercase text-grayText"><?php echo $vrstaModela; ?></span>
										</div>
										<!-- CIJENA MODELA -->
										<div class="">
											<span class="font-kanit text-2xl font-bold text-grayText"><?php echo $cijenaModela; ?>&nbsp;KM</span>
										</div>
									</div>
								</div>
							<?php
							// End loop.
							endwhile;

						// No value.
						else :
							// Do something...
						endif;
						?>
						<div class="singleProduct_buttons">
							<div class="grid grid-cols-2 gap-4 mt-14">
								<!-- DODAJ U KOŠARICU -->
								<a href="<?php
									$add_to_cart = do_shortcode('[add_to_cart_url id="'.$post->ID.'"]');
									echo $add_to_cart;
								?>" class="more"><button class="bg-addToCartButton text-addToCartText font-medium py-3 px-4rounded w-3/4 uppercase">Dodaj u košaricu</button></a>
								<!-- 3D KONFIGURATOR -->
								<?php 
								if(get_field('proizvod_ima_3d_konfigurator') == 'DA') { ?>

								<a href="#">
									<div class="relative">
									<span class="konfigurator_text textl-lg font-light font-kanit text-grayText">UREDI NAMJEŠTAJ PO SVOM IZBORU</span>
									<button class="bg-transparent text-white font-bold py-3 px-4 border-2 border-black rounded w-3/4 uppercase">
										<div class="flex">
											<img src="<?php echo get_template_directory_uri() . '/assets/images/3dkonfigurator.svg'; ?>" alt="" class="mr-7"><span class="textl-lg font-semibold font-kanit text-grayText">3d konfigurator</span>
										</div>
									</button>
									</div>
								</a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- GALLERY SECTION -->
		<section id="third" class="splide2 relative" aria-label="Galerija Render Slika">
		<div class="splide__track">
			<ul class="splide__list">
					<?php 
					$galerijaRenderSlika = get_field('galerija_render_slika');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)
					if( $galerijaRenderSlika ): ?>
							<?php foreach( $galerijaRenderSlika as $galerijaRenderSlike ): ?>
								<li class="splide__slide">
									<?php echo wp_get_attachment_image( $galerijaRenderSlike, $size ); ?>
								</li>
							<?php endforeach; ?>
						
					<?php endif; ?>
			</ul>
		</div>
		</section>
		<!-- YOUTUBE EMBEDED VIDEO -->
		<!-- <section id="singleProduct_video">
            <div class="embed-container flex justify-center mt-12">
              <?php // the_field('video_'); ?>
            </div>
		</section> -->
		<!-- TEHNIČKI PODACI PDF -->
		<?php $pdfSlike = get_field('tehnicki_podaci_galerija'); ?> 

		<?php if($pdfSlike): ?> 
		<section id="singleProduct_pdfpodaci" class="my-14">
			<div class="container mx-auto">
			<div class="grid grid-cols-3 gap-6">

			<?php foreach( $pdfSlike as $pdfSlika ): ?> 
				
				<a href="<?php echo $pdfSlika['url']; ?>" target="_blank" class="thumbnail" data-lightbox="image-1"> 
					<img class="singleProduct_pdfSlika" src="<?php echo $pdfSlika['sizes']['large']; ?>" alt="<?php the_title(); ?>" width="350" height="300"/> 
				</a> 

			<?php endforeach; ?> 

				</div>
			</div>
		</section>
		<?php endif; ?>
</section>

<?php
get_footer( 'shop' ); 
/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
?>
