<?php get_header(); ?>

<section id="konfigurator" class="bg-cartBackground pt-36 lg:pt-48 pb-24 -mt-24">
    <div class="container mx-auto">
        <div class="grid grid-cols-5 gap-4">
            <!-- CATEGORIES COLUMN -->
			<div class="products_categories col-span-2 lg:col-span-1">
				<div class="product_categories_kategorije mb-10">
					<h2 class="font-kanit text-2xl font-light uppercase">Kategorije</h2>
				</div>
				<div class="konfigurator_categories font-kanit font-normal text-base">
					<?php 
                    $allowed = array(38,17,16);
					$categories = get_categories(array(
                        'taxonomy' => 'product_cat',
                        'include' => $allowed,
                    ));
					foreach($categories as $category) {
					echo '<div class="text-xl font-kanit font-light text-kategorije my-2"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
					}
					?>
				</div>
			</div>
            <!-- PRODUCTS -->
            <div class="col-span-3 lg:col-span-4 mx-auto lg:mx-0">
                <div class="konfigurator_grid grid lg:grid-cols-4 gap-4">
                    <?php

                    $ourCurrentPpageKonfigurator = get_query_var('paged');

                    $args = array(
                        'post_type'   => 'product',
                        'post_status' => 'publish',
                        'posts_per_page' => 8,
                        'paged' => $ourCurrentPpageKonfigurator,
                        'meta_query' => array(
                            array(
                                'key' => 'proizvod_ima_3d_konfigurator',
                                'value' => 'DA',
                                'compare' => 'LIKE',
                            )
                            )
                        );
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) : $the_query->the_post();

                            // Get default product template
                            wc_get_template_part( 'content', 'product' );

                        endwhile;
                    } else {
                        echo __( 'No products found' );
                    }

                    
                    wp_reset_postdata();
                    ?>

                </div>
                <div class="projekti_pagination nav-links flex justify-center mt-10">
					  <?php 
					 	echo paginate_links(array(
							'total' => $the_query->max_num_pages,	
							'prev_text' => '<i class="fa-solid fa-arrow-left"></i>',
							'next_text' => '<i class="fa-solid fa-arrow-right"></i>'	
						 )) 
					  ?>
				</div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>