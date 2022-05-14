<?php get_header(); ?>

<section id="singlePost">
    <section id="singlePost_hero" class="bg-kompletnoOpremanjeBackground">
        <div class="h-screen w-full relative">
            <div class="singlePost_hero_imageWrapper">
                <?php the_post_thumbnail(); ?>
                 <lottie-player class="singlePost_hero__scrollAnimation" src="https://assets3.lottiefiles.com/packages/lf20_7gv4tv2y.json"  background="transparent"  speed="1"  style="width: 150px; height: 150px;"  loop autoplay></lottie-player>
            </div>
        </div>
    </section>
    <!-- CONTENT SECTION -->
    <section id="singlePost_content" class="bg-kompletnoOpremanjeBackground pb-10">
        <div class="container mx-auto">
            <h1 class="singlePost_content__title text-white font-lovelace font-normal mb-10"><?php the_title(); ?></h1>
            <div class="text-white font-kanit text-2xl font-extralight"><?php the_content(); ?></div>
        </div>
    </section>
        <!-- GALLERY SECTION -->
		<section id="third" class="splide3 relative bg-kompletnoOpremanjeBackground pt-14" aria-labelledby="carousel-heading" data-splide='{"type":"loop","perPage":1, "arrows":false, "pagination":false, "heightRatio":1}'>
            <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev">
                        <
                    </button>
                    <button class="splide__arrow splide__arrow--next">
                        >
                    </button>
            </div>
			<div class="splide__track ">
					<ul class="splide__list">
						
                        <?php 
                        $images = get_field('galerija');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if( $images ): ?>
                                <?php foreach( $images as $image_id ): ?>
                                    <li class="splide__slide">
                                        <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                                    </li>
                                <?php endforeach; ?>
                        <?php endif; ?>
					</ul>
			</div>
		</section>
</section>

<?php get_footer(); ?>