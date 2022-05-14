<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>
<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
<div class="grid grid-cols-3 gap-4">
	<!-- LEFT SECTION -->
	<div class="col-span-2 bg-white p-10 rounded-xl">


			<?php if ( $checkout->get_checkout_fields() ) : ?>

				<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

				<div class="col2-set" id="customer_details">
					<div class="">
						<?php do_action( 'woocommerce_checkout_billing' ); ?>
					</div>

					<div class="">
						<?php do_action( 'woocommerce_checkout_shipping' ); ?>
					</div>
				</div>

				<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

			<?php endif; ?>
			
			<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
			
			<?php /* ?>
			<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
			<?php */  ?>
			
			<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>


	</div>
	<!-- RIGHT SECTION -->
	<div class="col-span-1">
		<div class="">
			<div id="order_review" class="woocommerce-checkout-review-order bg-white p-5 rounded-xl">
				<?php do_action( 'woocommerce_checkout_order_review' ); ?>
			</div>
		</div>
		<!-- KALEA USLUGE -->
		<div class="p-8">
			<div class="grid grid-cols-2 gap-4">
				<!-- LEFT SECTION -->
				<div class="">
					<div class="footer_content__wrapper">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/kalea_black.png'; ?>" alt="Kalea Logo" class="mb-6">
						</a>
						<div class="footer_info__address mb-6">
							<span class="block mb-2 text-sm text-footerText font-light font-kanit">+ 387 (0)33 40 24 44</span>
							<span class="block mb-2 text-sm text-footerText font-light font-kanit">+ 387 (0)33 40 11 66</span>
							<span class="block mb-2 text-sm text-footerText font-light font-kanit">Bosanski put b.b. 71380 Ilijaš, BIH</span>	
						</div>
						<div class="footer_info__emails mb-6">
							<span class="block mb-2 text-sm text-footerText font-light font-kanit">kalea@kalea.ba</span>
							<span class="block mb-2 text-sm text-footerText font-light font-kanit">marketing@kalea.ba</span>
							<span class="block mb-2 text-sm text-footerText font-light font-kanit">racunovodstvo@kalea.ba</span>	
						</div>
						<div class="footer_info__kartice">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/visamastercard_shadow.png'; ?>" alt="Kalea Logo" class="">
						</div>
					</div>
				</div>
				<!-- RIGHT SECTION -->
				<div class="my-auto">
					<div class="grid grid-cols-2 gap-4">
						<div class="mx-auto">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/kalea_dostava.png'; ?>" alt="Kalea Logo" class="">
							<p class="text-center">Usluga <br> dostave</p>
						</div>
						<div class="mx-auto">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/kalea_garancija.png'; ?>" alt="Kalea Logo" class="">
							<p class="text-center">Garancija <br>365 dana</p>
						</div>
						<div class="mx-auto">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/kalea_projektovanje.png'; ?>" alt="Kalea Logo" class="mx-auto">
							<p class="text-center">Usluga <br>projektovanja</p>
						</div>
						<div class="mx-auto">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/kalea_montaza.png'; ?>" alt="Kalea Logo" class="">
							<p class="text-center">Usluga<br> montaže</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>


<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
