<?php get_header(); ?>


<!-- HERO SECTION -->
<section id="heroImage" class="bg-kompletnoOpremanjeBackground h-screen">
    <div class="w-full heroImage_video__wrapper relative h-screen">
        <div class="hero_video__overlay h-screen">
            <video autoplay muted loop id="myVideo">
            <source src="<?php echo get_template_directory_uri() . '/assets/images/Video Pocetna 1 Loop.mp4'; ?>" type="video/mp4">
            </video>
        </div>
        <lottie-player class="absolute bottom-24 right-10" src="https://assets5.lottiefiles.com/packages/lf20_bf7dckfo.json"  background="transparent"  speed="1"  style="width: 150px; height: 150px;"  loop autoplay></lottie-player>
    </div>
</section>
<!-- KOMPLETNO OPREMANJE SECTION -->
<section id="kompletnoOpremanje" class="bg-kompletnoOpremanjeBackground">
    <div class="container mx-auto">
        <div class="grid grid-cols-2 gap-4 py-36">
            <!-- LEFT SIDE -->
            <div class="my-auto">
              <h2 class="slide_right kompletnoOpremanje_heading font-5xl font-lovelace font-normal text-frontPageGray">Kompletno opremanje</h2>
            </div>
            <!-- RIGHT SIDE -->
            <div class="slide_left kompletnoOpremanje_paragraph">
                <p class="font-kanit font-extralight text-2xl text-frontPageGray mb-10 ">Opremanje enterijera zahtjeva stručnost, inspiraciju i slobodu kreativnosti. Trendovi budućnosti diktiraju spoj struke i individualno-kreativnih ideja.</p>
                <p class="font-kanit font-extralight text-2xl text-frontPageGray">Nesumnjivo prateći savremene trendove fabrika namještaja KALEA nudi platformu zajedničke kreativnosti i stvaranja u vašem domu. Spojem dizajnerske stručnosti i vaših ličnih kreacija nastaju umjetnička djela u obliku modernog namještaja za vaš dom.</p>
            </div>
        </div>
    </div>
    <div class="kompletnoOpremanje_image" class="w-full">
        <div class="h-4/6"></div>
    </div>
</section>


<!-- WEB SHOP SECTION -->
<section id="webShop" class="py-14 bg-cartBackground">
    <div class="container mx-auto">

        <?php 
        
        //query to load selected featured post on front page
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 2,
            'meta_query' => array(
            array(
                'key' => 'show_post_front_page',
                'value' => 'Da',
                'compare' => 'LIKE',
            )
            )
        );

        $heroPostQuery = new WP_Query($args);
        $i = 1;
        while($heroPostQuery->have_posts()){
            $heroPostQuery->the_post(); 
            
            $frontPageRedirectLink = get_field('link_front_page_post');

            ?>
        <div class="grid grid-cols-2 gap-36 grid-item-<?php echo $i; ?> py-10">
            <!-- LEFT SECTION -->
            <div class="scroll__short webShop_left font-5xl font-lovelace font-normal text-grayText">
                <h1 class="scroll_short font-light mb-10 tags"><?php the_title(); ?></h1>
                <div class="scroll_fast font-kanit font-light text-base text-grayText mb-10"><?php the_content(); ?></div>
                <a href="<?php echo $frontPageRedirectLink; ?>">
                    <button class="scroll_faster text-base bg-grayText text-frontPageGray font-medium font-montserrat py-5 px-16 uppercase">Pogledajte više</button>
                </a>
            </div>
            <!-- RIGHT SECTION -->
            <div class="scroll_faster webShop_right">
                <?php the_post_thumbnail(); ?>
            </div>
        </div>
        <?php    $i++; }  
            wp_reset_postdata();
        ?>
    </div>
</section>

<!-- BLOG SECTION -->
<section id="blog" class="bg-kompletnoOpremanjeBackground py-10">
            <div class="container mx-auto">
                <span class="block font-5xl font-lovelace font-semibold text-white uppercase">Posljednje</span>
                <span class="text-2xl font-lovelace font-semibold text-white uppercase"> novosti</span>
            </div>

            <section id="third" class="blog_slider splide mt-24" aria-label="Basic Structure Example">
            <div class="splide__track">
                <ul class="splide__list frontPage_blog__splide">

            <?php 
            
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1,
                'meta_query' => array(
                array(
                    'key' => 'show_post_front_page',
                    'value' => '"Ne"',
                    'compare' => 'LIKE',
                )
                )
            );

            $heroBlogQuery = new WP_Query($args);

            while($heroBlogQuery->have_posts()){
             $heroBlogQuery->the_post(); ?>
            

                <div class="splide__slide grid grid-cols-2 gap-7 h-2/6">
                    <!-- LEFT SIDE -->
                    <div class="blogSection_image">
                        <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium_large'); ?>
                        </a>
                    </div>
                    <!-- RIGHT SIDE -->
                    <div class="w-2/3">
                        <a href="<?php the_permalink(); ?>">
                            <h1 class="text-2xl font-lovelace font-light text-white mb-10"><?php the_title(); ?></h1>
                            <div class="text-sm font-kanit font-light text-white">
                                <?php 
                                    $blogKratkiText = get_field('kratki_text');         
                                    echo $blogKratkiText; ?>
                            </div>
                        </a>
                    </div>
                </div>
          <?php }
            wp_reset_postdata();
          ?>

            </ul>
        </div>
        </section>
</section>

<!-- BOTTOM VIDEO -->
<section id="bottomVideo" class="w-full h-auto">
    <div class="bottomVideo_wrapper w-full relative">
        <video class="bottomVideo_video absolute top-0 right-0 z-0" autoplay muted loop id="myVideo">
        <source src="<?php echo get_template_directory_uri() . '/assets/images/Video Pocetna 2 Loop.mp4'; ?>" type="video/mp4">
        </video>
        <div class="bottomVideo_blackOverlay h-auto w-full absolute top-0 right-0 z-10"></div>
    </div>
</section>

<?php get_footer(); ?>