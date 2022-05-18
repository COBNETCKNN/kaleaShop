<?php get_header(); ?>

<?php get_header(); ?>

<?php do_action( 'woocommerce_before_main_content' ); ?>

<section id="konfigurator" class="bg-cartBackground pt-48 pb-24 -mt-24">
    <div class="container mx-auto">
        <div class="grid grid-cols-5 gap-4">
            <!-- CATEGORIES COLUMN -->
			<div class="products_categories col-span-1">
				<div class="product_categories_kategorije mb-10">
					<h2 class="font-kanit text-2xl font-light uppercase">Kategorije</h2>
				</div>
				<div class="konfigurator_categories font-kanit font-normal text-base">
                    <?php wp_list_categories( array('taxonomy' => 'product_cat', 'title_li'  => '') ); ?>

				</div>
			</div>
            <!-- PRODUCTS -->
            <div class="col-span-4">
                <div class="konfigurator_grid grid grid-cols-4 gap-4">
                    <?php

                    $ourCurrentPpageKonfigurator = get_query_var('paged');

                    $query = new WP_Query( array(
                        'post_type'      => 'product',
                        'post_status'    => 'publish',
                        'posts_per_page' => 8,
                        'paged' => $ourCurrentPpageKonfigurator,
                        'tax_query'      => array( array(
                            'taxonomy'   => 'product_cat',
                            'field'      => 'term_id',
                            'terms'      => array( get_queried_object()->term_id ),
                        ) )
                    ) );

                    while ( $query->have_posts() ) : $query->the_post();
                        // Get default product template
                        wc_get_template_part( 'content', 'product' );
                    endwhile;

                    
                    wp_reset_postdata();
                    ?>

                </div>
                <div class="projekti_pagination nav-links flex justify-center mt-10">
					  <?php 
					 	echo paginate_links(array(
							 'total' => $query->max_num_pages
						 )) 
					  ?>
				</div>
            </div>
        </div>
    </div>
</section>

<?php do_action( 'woocommerce_after_main_content' ); ?>

<?php get_footer(); ?>

<?php get_footer(); ?>