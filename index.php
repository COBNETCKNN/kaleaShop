<?php get_header(); ?>

<section id="blog" class="bg-cartBackground py-28 -mt-16">
	<div class="container mx-auto">
		<div class="grid lg:grid-cols-5 gap-4">
			<!-- CATEGORIES SECTION -->
			<div class="hidden lg:block col-span-1 border-r border-black">
				<h1 class="text-3xl font-kanit font-light text-grayText uppercase">Novosti</h1>
				<div class="mt-10">
					<?php 
                    $allowed = array(1,29,32);
					$categories = get_categories(array(
                        'taxonomy' => 'category',
                        'include' => $allowed,
                    ));
					foreach($categories as $category) {
					echo '<div class="text-xl font-kanit font-light text-kategorije my-2"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
					}
					?>
				</div>
			</div>
			<!-- CONTENT SECTION -->
			<div class="col-span-4">
				<div class="grid lg:grid-cols-2 gap-8">
				<?php 

					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 4,
						'paged' => get_query_var( 'paged' )
					);

					$novostiQuery = new WP_Query($args);

					while($novostiQuery->have_posts()){
						$novostiQuery->the_post(); 

						get_template_part('template-parts/blog', 'card');

					  } 

				?>

				</div>
				<div class="flex justify-center mt-10">
					<?php the_posts_pagination(
						array(

						'prev_text' => '<i class="fa-solid fa-arrow-left"></i>',
						'next_text' => '<i class="fa-solid fa-arrow-right"></i>'

						)
						); ?>
				</div>
			</div>
		</div>
	</div>
	<?php wp_reset_postdata(); ?>
</section>

<?php get_footer(); ?>