<?php get_header(); ?>

<section id="aboutUsHero" class="relative">
    <div class="relative -mt-24">
        <div class="aboutUsHero_image">
           <?php the_post_thumbnail(); ?>
        </div>
        <?php 
        // getting the custom fields for info

        $brojOtvorenihPoslovnica = get_field('aboutus_broj_otvorenih_poslovnica');
        $godinePostojanja = get_field('aboutus_godine_postojanja');
        $brojModelaNamjestaja = get_field('aboutus_broj_modela_namjestaja');
        $brojZaposlenihRadnika = get_field('aboutus_broj_zaposlenih_radnika');
        
        ?>
        <div class="aboutUs_info">
            <div class="grid grid-cols-4 gap-4">
                <!-- BROJ POSLOVNICA -->
                <div class="">
                    <img class="aboutUs_svginfo slide_top__aboutUsSvg mx-auto" src="<?php echo get_template_directory_uri() . '/assets/images/aboutUs/poslovnice.svg'; ?>" alt="">
                    <span class="count flex justify-center aboutUs_info__number text-white font-montserrat font-medium"><?php echo $brojOtvorenihPoslovnica; ?></span>
                    <span class="text-center flex justify-center text-base text-white font-montserrat font-medium uppercase">Otvorenih <br>poslovnica</span>
                </div>
                <!-- GODINE POSTOJANJA -->
                <div class="">
                    <img class="aboutUs_svginfo slide_top__aboutUsSvg mx-auto" src="<?php echo get_template_directory_uri() . '/assets/images/aboutUs/godine_postojanja.svg'; ?>" alt="">
                    <span class="count flex justify-center aboutUs_info__number text-white font-montserrat font-medium"><?php echo $godinePostojanja; ?></span>
                    <span class="text-center flex justify-center text-base text-white font-montserrat font-medium uppercase">Godine <br>posotjanja</span>
                </div>
                <!-- MODELI NAMJEŠTAJA -->
                <div class="">
                    <img class="aboutUs_svginfo slide_top__aboutUsSvg mx-auto" src="<?php echo get_template_directory_uri() . '/assets/images/aboutUs/tapacirani_namestaj.svg'; ?>" alt="">
                    <span class="count flex justify-center aboutUs_info__number text-white font-montserrat font-medium"><?php echo $brojModelaNamjestaja; ?></span>
                    <span class="text-center flex justify-center text-base text-white font-montserrat font-medium uppercase">Modela tapaciranog <br>namještaja</span>
                </div>
                <!-- BROJ ZAPOSLENIH -->
                <div class="">
                    <img class="aboutUs_svginfo slide_top__aboutUsSvg mx-auto" src="<?php echo get_template_directory_uri() . '/assets/images/aboutUs/zaposleni.svg'; ?>" alt="">
                    <span class="count flex justify-center aboutUs_info__number text-white font-montserrat font-medium"><?php echo $brojZaposlenihRadnika; ?></span>
                    <span class="text-center flex justify-center text-base text-white font-montserrat font-medium uppercase">Zaposlenih<br>radnika</span>
                </div>
            </div>
        </div>
        <lottie-player class="absolute bottom-24 right-10" src="https://assets5.lottiefiles.com/packages/lf20_bf7dckfo.json"  background="transparent"  speed="1"  style="width: 150px; height: 150px;"  loop autoplay></lottie-player>
    </div>
</section>
<!-- O NAMA -->
<section id="aboutUs_onama" class="bg-aboutUsBackground py-24">
    <div class="container mx-auto">
        <h2 class="text-center text-2xl font-lovelace font-normal text-frontPageGray slide_top">VIŠE OD 25 GODINA SA VAMA</h2>
        <div class="flex justify-between mt-10">
            <span class="my-auto pr-10 text-2xl font-lovelace font-normal text-white slide_right">1996.</span>
            <h1 class="aboutUs_onama__title w-full text-center text-4xl font-lovelace font-normal text-white"><?php the_title(); ?></h1>
            <span class="slide_left my-auto pl-10 text-2xl font-lovelace font-normal text-white"><?php echo date("Y"); ?>.</span>
        </div>
        <!-- CONTENT -->
        <div class="flex justify-center ">
            <div class="text-2xl text-center font-kanit font-light text-white mt-10 w-4/5"><?php the_content(); ?></div>
        </div>
    </div>
</section>

<!-- PRODUCTS -->
<section id="aboutUs_products" class="bg-grayBackground py-14">
    <div class="container mx-auto">
        <div class="grid grid-cols-2 gap-24 relative">
            <!-- TEXT SECTION -->
            <div class="slide_right">
                <p class="text-2xl mb-7 font-kanit font-normal text-black">Fbrika namještaja KALEA je odvažno fokusirana na budućnost dizajna i vrhunski kvalitet namještaja za domaće i regionalno tržište.</p>
                <p class="text-2xl mb-7 font-kanit font-extralight text-black">Potrebe kupaca diktiraju evoluciju stila i uređenja enterijera što je imperativ u industriji namještaja kroz balans posvećenosti kvaliteti, dizajnu i funkcionalnosti.</p>
                <p class="text-2xl mb-7 font-kanit font-extralight text-black">Oživljavajući princip autentičnosti posebnu pažnju posvećujemo dizajn detaljima, kvalitetu, koloritu, štofu, komforu i funkcionalnosti svakog komada namještaja po mjeri.</p>
                <p class="text-2xl mb-7 font-kanit font-extralight text-black">Oživite vašu kreativnost i inspiraciju na jednom mjestu, kompletno projektovanje i opremanje doma prepustite KALEA timu.</p>
            </div>
            <!-- IMAGE SECTION -->
            <div class="slide_left aboutUs_product__chair">
                <img class="" src="<?php echo get_template_directory_uri() . '/assets/images/aboutUs/kalea_stolica.png'; ?>" alt="">
            </div>
        </div>
        <div class="py-24"></div>

        <div class="relative">
            <img class="aboutUs_product__couch slide_right__faster" src="<?php echo get_template_directory_uri() . '/assets/images/aboutUs/kalea_couch.png'; ?>" alt="">

            <div class="grid grid-cols-2 gap-24 relative">
                <!-- IMAGE SECTION -->
                <div class="slide_right__faster">

                </div>
                <!-- TEXT SECTION -->
                <div class="slide_left__faster mt-24">
                    <p class="text-2xl mb-7 font-kanit font-normal text-black">Stručni KALEA tim će sve vaše ideje i želje opremanja dnevnog boravka, kuhinje, dječije i spavaće sobe, ili možda hotela, kancelarije, apartmana ili restorana pretvoriti u savremeno idejno rješenje za opremanje enterijera.</p>
                    <p class="text-2xl mb-7 font-kanit font-extralight text-black">Vrhunski kvalitet, upečatljiv kolorit, savremen dizajn i autentičan stil garantuju magiju privlačnosti namještaja KALEA i vašeg enterijera.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- KONTAKTIRAJTE NAS -->
<section id="aboutUs_kontaktirajteNas" class="py-24">
    <div class="container mx-auto">
        <div class="w-4/5 mx-auto">
            <p class="text-lg font-kanit font-light text-white text-center mb-10">Nesumnjivo prateći savremene trendove fabrika namještaja KALEA nudi platformu zajedničke kreativnosti i stvaranja u vašem domu.
            Spojem dizajnerske stručnosti i vaših ličnih kreacija nastaju umjetnička djela u obliku modernog namještaja za vaš dom.
            Iz udobnosti vašeg doma pozovite naš tim dizajnera i projekt menađera i zajedno ostvarite i najmanje želje opremanja vlastitog doma po mjeri proizvodima vrhunskog kvaliteta i prepoznatljivog dizajna.</p>
            <p class="text-lg font-kanit font-light text-white text-center">Prepustite se kreativnosti i pozovite naš tim dizajnera, arhitekata i projekt menadžera, te zajedno s njima napravite magiju ukusa i stila u vašem enterijeru.
            Kombinujte namještaj, boje i materijale koji oslikavaju vaš individualizam, jer dizajnersko opremanje doma nikad nije bilo jednostavnije.</p>
            <!-- KONTAKTIRAJTE NAS BUTTON -->
            <div class="flex justify-center mt-24">
                <a href="#">
                  <button class="bg-transparent font-kanit text-white font-light py-2 px-14 border border-white">Kontaktirajte nas</button>
                </a>
            </div>
        </div>

    </div>
</section>
<?php get_footer(); ?>