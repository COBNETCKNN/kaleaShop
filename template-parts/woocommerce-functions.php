<?php 

/**
 * Remove WooCommerce breadcrumbs 
 */
add_action( 'init', 'my_remove_breadcrumbs' );
 
function my_remove_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

add_action( 'woocommerce_single_product_summary', 'custom_button_after_product_summary', 30 );

function custom_button_after_product_summary() {
  global $product;
  echo "<a href='".$product->add_to_cart_url()."'>Add to cart</a>";
}


// GETING TITLE AND CATEGORY 
add_action( 'woocommerce_after_shop_loop_item_title', 'adding_category_beside_title', 10 );

function adding_category_beside_title() {
    global $post;

    // If the WC_product Object is not defined globally
    if ( ! is_a( $product, 'WC_Product' ) ) {
        $product = wc_get_product( get_the_id() );
    }

    $terms = get_the_terms( $post->ID, 'product_cat' );
    $nterms = get_the_terms( $post->ID, 'product_tag'  );

    foreach ($terms  as $term  ) {                    
        $product_cat_id = $term->term_id;              
        $product_cat_name = $term->name;            
        break;
    }

    echo '<div class="titleCat_wrapper">';
    echo  '<h2 class="product_cat_title">' . $product->get_name() .  '</h2>';
    echo '<span class="product_cat_spacer">&nbsp; / &nbsp;</span> ';
    echo '<h2 class="product_cat_name">' . $product_cat_name .  '</h2>';
    echo '</div>';
}

// ADDING DATUM ISPORUKE ON CART PAGE
add_action ('woocommerce_cart_totals_after_shipping', 'datum_isporuke_function', 20);

function datum_isporuke_function() {
    global $post;

    echo '<tr class="datum_isporuke">';
    echo '<th>Datum isporuke</th>';
    echo '<td>';
    echo '<strong>';
    echo '<span>';
    $old_date = date('Y-m-d H:i:s');
    $next_due_date = date('d-m-Y', strtotime($old_date. ' +30 days'));
    echo $next_due_date;
    echo '</span>';
    echo '</strong>';
    echo '</td>';
}

// ADDING TITLE TO CART TOTALS
add_action('woocommerce_cart_totals_before_shipping', 'title_cart_totals');

function title_cart_totals() {
    global $post;

    echo '<h1 class="text-2xl font-kanit font-semibold ml-3 mb-5">Ukupni račun</h1>';
}

// ADDING CONTAINER TO THE CHECKOUT 
add_action('woocommerce_before_checkout_form', 'container_for_checkout');

function container_for_checkout() {
    echo '<section class="bg-cartBackground font-kanit -mt-24 pt-36 pb-14">';
    echo '<div class="container mx-auto">';
}

add_action('woocommerce_after_checkout_form', 'container_closing_for_checkout');

function container_closing_for_checkout() {
    echo '<div>';
    echo '</section>';
}

//ADDING SECTION TAG AROUND SINGLE PRODUCT
add_action('woocommerce_before_single_product', 'section_single_product');

function section_single_product() {
    echo '<section class="singleProduct">';
}

add_action('woocommerce_after_single_product', 'section_closing_single_product');

function section_closing_single_product() {
    echo '</section>';
}




remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );






?>