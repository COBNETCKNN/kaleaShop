<?php get_header(); ?>

<section id="singlePost">
    <section id="singlePost_hero" class="bg-kompletnoOpremanjeBackground">
        <div class="h-screen w-full relative">
            <div class="singlePost_hero_imageWrapper">
                <?php the_post_thumbnail(); ?>
                <lottie-player class="hidden lg:block absolute bottom-36 right-14" src="https://assets5.lottiefiles.com/packages/lf20_bf7dckfo.json"  background="transparent"  speed="1"  style="width: 150px; height: 150px;"  loop autoplay></lottie-player>
            </div>
        </div>
    </section>
    <!-- CONTENT SECTION -->
    <section id="singlePost_content" class="bg-kompletnoOpremanjeBackground pb-10">
        <div class="container mx-auto">
            <h1 class="singlePost_content__title text-center lg:text-left text-white font-lovelace font-normal mb-10"><?php the_title(); ?></h1>
            <div class="text-center lg:text-left  text-white font-kanit text-xl lg:text-2xl font-extralight"><?php the_content(); ?></div>
        </div>
    </section>
    <!-- GALLERY SECTION -->
    <?php if(get_field('galerija')) { ?>
        <section id="singlePost_gallery" class="bg-kompletnoOpremanjeBackground py-14">
            <div class="singlePost_slider">
                <?php 
                $images = get_field('galerija');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if( $images ): ?>
                    <?php foreach( $images as $image_id ): ?>
                        <a href="<?php echo $image_id ['url']; ?>" target="_blank" class="thumbnail" data-lightbox="image-1"> 
                            <img class="singleProduct_pdfSlika" src="<?php echo $image_id ['sizes']['large']; ?>" alt="<?php the_title(); ?>" width="350" height="300"/> 
                        </a> 
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </section>
    <?php } ?>
</section>

<?php get_footer(); ?>