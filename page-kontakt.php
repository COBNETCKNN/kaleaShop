<?php get_header(); ?>

<section id="kontakt" class="">
    <section id="kontakt_mapa" class="-mt-20 h-3/4 w-full relative">
        <!-- LEAFLET MAP -->
        <div id="map"></div>

        <script>
            // Leaflet map
            var map = L.map('map').setView([44.211902, 17.926458], 8);

            var Stadia_AlidadeSmoothDark = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
                maxZoom: 20,
                attribution: 'Kalea'
            });
            Stadia_AlidadeSmoothDark.addTo(map);

            // markers
            var fabrikaMarker = L.icon ({
                iconUrl: './assets/images/kontaktMap/fabrika_svg.png',
                iconSize: [45,30],
            })

            var lokacijaMarker = L.icon ({
                iconUrl: './assets/images/kontaktMap/location_svg.png',
                iconSize: [45,30],
            })


            // FABRIKA ILIJAŠ
            var photoImgFabrikaIlijas = '<img class="kontakt_popup__image" src="https://i.ibb.co/YPz33Xx/fabrika-ilija.jpg" height="120px" width="300px"/>';

            L.marker([43.9428671, 18.2697683], {
                icon: new L.DivIcon({
                className: 'my-div-icon',
                html: '<img class="my-div-image" src="https://i.ibb.co/4F4zH6w/fabrika-svg.png"/>'+
                '<span class="kontakt_location__span">Fabrika Ilijaš</span>'
                })
            })
            .addTo(map)
            .bindPopup(
                L.popup({}).setContent(
                `
                <div class="kontakt_popup__content">
                    <h3 class="kontakt_popup__naziv">Fabrika Ilijaš</h3>
                    <p>Bosanski Put b.b. 71380 Ilijaš, BiH</p>
                    <p>PON - PET: 07:00 - 15:30</p>
                    <p>SUB i NED : neradni dan</p>
                    <p>+387 33 40 24 44</p>
                    <p>kalea@kalea.ba</p>
                </div>
                `+ photoImgFabrikaIlijas
                )
            );

            // SALON BIHAĆ
            var photoImgSalonBihac = '<img class="kontakt_popup__image" src="https://i.ibb.co/6NWT6FP/Bihac-Reklame-scaled.jpg" height="120px" width="300px"/>';

            L.marker([44.8223093, 15.8521128], {
                icon: new L.DivIcon({
                className: 'my-div-icon',
                html: '<img class="my-div-image" src="https://i.ibb.co/Z6sKdDm/location-svg.png"/>'+
                '<span class="kontakt_location__span">Salon Bihać</span>'
                })
            })
            .addTo(map)
            .bindPopup(
                L.popup({}).setContent(
                `
                <div class="kontakt_popup__content">
                    <h3 class="kontakt_popup__naziv">Salon Bihać</h3>
                    <p>Žrtava srebreničkog genocida, Bihać 77000</p>
                    <p>PON - SUB: 08:00 - 20:00</p>
                    <p>NED : neradni dan</p>
                    <p>+387 37 35 22 35</p>
                    <p>bihac@kalea.ba</p>
                </div>
                `+ photoImgSalonBihac
                )
            );

            // SALON VITEZ
            var photoImgSalonVitez = '<img class="kontakt_popup__image" src="https://i.ibb.co/C56HW8F/Vitez-scaled.jpg" height="120px" width="300px"/>';

            L.marker([44.1609539, 17.7919773], {
                icon: new L.DivIcon({
                className: 'my-div-icon',
                html: '<img class="my-div-image" src="https://i.ibb.co/Z6sKdDm/location-svg.png"/>'+
                '<span class="kontakt_location__span">Salon Vitez</span>'
                })
            })
            .addTo(map)
            .bindPopup(
                L.popup({}).setContent(
                `
                <div class="kontakt_popup__content">
                    <h3 class="kontakt_popup__naziv">Salon Vitez</h3>
                    <p>Poslovni Centar 96, 72250 Vitez</p>
                    <p>PON - SUB: 08:00 - 20:00</p>
                    <p>NED : neradni dan</p>
                    <p>+387 30 54 50 16</p>
                    <p>vitez@kalea.ba</p>
                </div>
                `+ photoImgSalonVitez
                )
            );

            // SALON BIJELJINA
            var photoImgSalonBijeljina = '<img class="kontakt_popup__image" src="https://i.ibb.co/Q8xBXMG/DSC01489-scaled.jpg" height="120px" width="300px"/>';

            L.marker([44.804510, 19.259231], {
                icon: new L.DivIcon({
                className: 'my-div-icon',
                html: '<img class="my-div-image" src="https://i.ibb.co/Z6sKdDm/location-svg.png"/>'+
                '<span class="kontakt_location__span">Salon Bijeljina</span>'
                })
            })
            .addTo(map)
            .bindPopup(
                L.popup({}).setContent(
                `
                <div class="kontakt_popup__content">
                    <h3 class="kontakt_popup__naziv">Salon Bijeljina</h3>
                    <p>Karađorđeva 82b, 76300 Bijeljina</p>
                    <p>PON - SUB: 08:00 - 20:00</p>
                    <p>NED : neradni dan</p>
                    <p>+387 55 24 36 54</p>
                    <p>bijeljina@kalea.ba</p>
                </div>
                `+ photoImgSalonBijeljina
                )
            );

            // SALON BANJA LUKA
            var photoImgSalonBanjaLuka = '<img class="kontakt_popup__image" src="https://i.ibb.co/tDK6HRT/IMG-20180514-201546.jpg" height="120px" width="300px"/>';

            L.marker([44.817538, 17.215503], {
                icon: new L.DivIcon({
                className: 'my-div-icon',
                html: '<img class="my-div-image" src="https://i.ibb.co/Z6sKdDm/location-svg.png"/>'+
                '<span class="kontakt_location__span">Salon Banja Luka</span>'
                })
            })
            .addTo(map)
            .bindPopup(
                L.popup({}).setContent(
                `
                <div class="kontakt_popup__content">
                    <h3 class="kontakt_popup__naziv">Salon Banja Luka</h3>
                    <p>Branka Popovića 306, Banja Luka 78000</p>
                    <p>PON - SUB: 08:00 - 20:00</p>
                    <p>NED : neradni dan</p>
                    <p>+387 51 30 52 77</p>
                    <p>banjaluka@kalea.ba</p>
                </div>
                `+ photoImgSalonBanjaLuka
                )
            );

            // SALON SARAJEVO
            var photoImgSalonSarajevo = '<img class="kontakt_popup__image" src="https://i.ibb.co/WPsHVpJ/sarajevo-3.jpg" height="120px" width="300px"/>';

            L.marker([43.858617, 18.320418], {
                icon: new L.DivIcon({
                className: 'my-div-icon',
                html: '<img class="my-div-image" src="https://i.ibb.co/Z6sKdDm/location-svg.png"/>'+
                '<span class="kontakt_location__span">Salon Sarajevo</span>'
                })
            })
            .addTo(map)
            .bindPopup(
                L.popup({}).setContent(
                `
                <div class="kontakt_popup__content">
                    <h3 class="kontakt_popup__naziv">Salon Sarajevo</h3>
                    <p>Safeta Zajke bb, Sarajevo 71000</p>
                    <p>PON - SUB: 08:00 - 20:00</p>
                    <p>NED : neradni dan</p>
                    <p>+387 33 66 09 40</p>
                    <p>rkkalea@kalea.ba</p>
                </div>
                `+ photoImgSalonSarajevo
                )
            );

            // SALON JELAH
            var photoImgSalonJelah = '<img class="kontakt_popup__image" src="https://i.ibb.co/6BrVNw7/Jelah.jpg" height="120px" width="300px"/>';

            L.marker([44.667697, 17.995918], {
                icon: new L.DivIcon({
                className: 'my-div-icon',
                html: '<img class="my-div-image" src="https://i.ibb.co/Z6sKdDm/location-svg.png"/>'+
                '<span class="kontakt_location__span">Salon Jelah</span>'
                })
            })
            .addTo(map)
            .bindPopup(
                L.popup({}).setContent(
                `
                <div class="kontakt_popup__content">
                    <h3 class="kontakt_popup__naziv">Salon Jelah</h3>
                    <p>Žabljak, b.b. 74264</p>
                    <p>PON - SUB: 08:00 - 20:00</p>
                    <p>NED : neradni dan</p>
                    <p>+387 32 89 11 10</p>
                    <p>jelah@kalea.ba</p>
                </div>
                `+ photoImgSalonJelah
                )
            );

            // SALON MOSTAR
            var photoImgSalonMostar = '<img class="kontakt_popup__image" src="https://i.ibb.co/MSqBj2J/Kalea-Mostar.jpg" height="120px" width="300px"/>';

            L.marker([43.368859, 17.839466], {
                icon: new L.DivIcon({
                className: 'my-div-icon',
                html: '<img class="my-div-image" src="https://i.ibb.co/Z6sKdDm/location-svg.png"/>'+
                '<span class="kontakt_location__span">Salon Mostar</span>'
                })
            })
            .addTo(map)
            .bindPopup(
                L.popup({}).setContent(
                `
                <div class="kontakt_popup__content">
                    <h3 class="kontakt_popup__naziv">Salon Mostar</h3>
                    <p>Sutina bb, Mostar 88000</p>
                    <p>PON - SUB: 08:00 - 20:00</p>
                    <p>NED : neradni dan</p>
                    <p>+387 36 55 82 95</p>
                    <p>mostar@kalea.ba</p>
                </div>
                `+ photoImgSalonMostar
                )
            );

            // SALON INTERIJER FRANIĆ
            var photoImgSalonFranić = '<img class="kontakt_popup__image" src="https://i.ibb.co/MSqBj2J/Kalea-Mostar.jpg" height="120px" width="300px"/>';

            L.marker([43.5273793, 16.4833746], {
                icon: new L.DivIcon({
                className: 'my-div-icon',
                html: '<img class="my-div-image" src="https://i.imgur.com/OtAyBC9.png"/>'+
                '<span class="kontakt_location__span">Interijeri Franić</span>'
                })
            })
            .addTo(map)
            .bindPopup(
                L.popup({}).setContent(
                `
                <div class="kontakt_popup__nopicture">
                    <h3 class="kontakt_popup__naziv">Interijeri Franić</h3>
                    <p>Solinska ul. 84, 21000, Split, Hrvatska</p>
                    <p>PON - SUB: 08:00 - 20:00</p>
                    <p>NED : neradni dan</p>
                    <p>+385 21 58 42 60</p>
                </div>
                `
                )
            );

            // Namještaj VEZO Labin
            var photoImgSalonFranić = '<img class="kontakt_popup__image" src="https://i.ibb.co/MSqBj2J/Kalea-Mostar.jpg" height="120px" width="300px"/>';

            L.marker([45.1159427, 14.1074113], {
                icon: new L.DivIcon({
                className: 'my-div-icon',
                html: '<img class="my-div-image" src="https://i.imgur.com/OtAyBC9.png"/>'+
                '<span class="kontakt_location__span">Namještaj VEZO Labin</span>'
                })
            })
            .addTo(map)
            .bindPopup(
                L.popup({}).setContent(
                `
                <div class="kontakt_popup__nopicture">
                    <h3 class="kontakt_popup__naziv">Namještaj VEZO Labin</h3>
                    <p>Gorica 201 (Ind. zona Dubrova, 52220, Labin, Hrvatska</p>
                    <p>PON - SUB: 08:00 - 20:00</p>
                    <p>NED : neradni dan</p>
                    <p>+385 91 28 80 644</p>
                </div>
                `
                )
            );

            
            // Namještaj VEZO Pula
            var photoImgSalonFranić = '<img class="kontakt_popup__image" src="https://i.ibb.co/MSqBj2J/Kalea-Mostar.jpg" height="120px" width="300px"/>';

            L.marker([44.8769827, 13.8505123], {
                icon: new L.DivIcon({
                className: 'my-div-icon',
                html: '<img class="my-div-image" src="https://i.imgur.com/OtAyBC9.png"/>'+
                '<span class="kontakt_location__span">Namještaj VEZO Pula</span>'
                })
            })
            .addTo(map)
            .bindPopup(
                L.popup({}).setContent(
                `
                <div class="kontakt_popup__nopicture">
                    <h3 class="kontakt_popup__naziv">Namještaj VEZO Pula</h3>
                    <p>Monte Giro 5, Put za groblje 5, 52100, Pula, Hrvatska</p>
                    <p>PON - SUB: 08:00 - 20:00</p>
                    <p>NED : neradni dan</p>
                    <p>+385 91 44 43 459</p>
                </div>
                `
                )
            );

            // Sabolić Interijeri - Si
            var photoImgSalonFranić = '<img class="kontakt_popup__image" src="https://i.ibb.co/MSqBj2J/Kalea-Mostar.jpg" height="120px" width="300px"/>';

            L.marker([45.8043617, 15.8591887], {
                icon: new L.DivIcon({
                className: 'my-div-icon',
                html: '<img class="my-div-image" src="https://i.imgur.com/OtAyBC9.png"/>'+
                '<span class="kontakt_location__span">Sabolić Interijeri - Si</span>'
                })
            })
            .addTo(map)
            .bindPopup(
                L.popup({}).setContent(
                `
                <div class="kontakt_popup__nopicture">
                    <h3 class="kontakt_popup__naziv">Sabolić Interijeri - Si</h3>
                    <p>Ul. Velimira Škorpika 11, 10090, Zagreb, Hrvatska</p>
                    <p>PON - SUB: 08:00 - 20:00</p>
                    <p>NED : neradni dan</p>
                    <p>+385 91 23 40 080</p>
                </div>
                `
                )
            );

            // Intermod
            var photoImgSalonFranić = '<img class="kontakt_popup__image" src="https://i.ibb.co/MSqBj2J/Kalea-Mostar.jpg" height="120px" width="300px"/>';

            L.marker([44.1015609, 15.2586132], {
                icon: new L.DivIcon({
                className: 'my-div-icon',
                html: '<img class="my-div-image" src="https://i.imgur.com/OtAyBC9.png"/>'+
                '<span class="kontakt_location__span">Intermod</span>'
                })
            })
            .addTo(map)
            .bindPopup(
                L.popup({}).setContent(
                `
                <div class="kontakt_popup__nopicture">
                    <h3 class="kontakt_popup__naziv">Intermod</h3>
                    <p>Ul. Braće Miroslava i Janka Perice 141, 23000, Zadar, Hrvatska</p>
                    <p>PON - SUB: 08:00 - 20:00</p>
                    <p>NED : neradni dan</p>
                    <p>+385 23 34 29 51</p>
                </div>
                `
                )
            );

            // Intermod d.o.o.
            var photoImgSalonFranić = '<img class="kontakt_popup__image" src="https://i.ibb.co/MSqBj2J/Kalea-Mostar.jpg" height="120px" width="300px"/>';

            L.marker([43.5899231, 16.5748897], {
                icon: new L.DivIcon({
                className: 'my-div-icon',
                html: '<img class="my-div-image" src="https://i.imgur.com/OtAyBC9.png"/>'+
                '<span class="kontakt_location__span">Intermod d.o.o.</span>'
                })
            })
            .addTo(map)
            .bindPopup(
                L.popup({}).setContent(
                `
                <div class="kontakt_popup__nopicture">
                    <h3 class="kontakt_popup__naziv">Intermod d.o.o.</h3>
                    <p>Svetog Leopolda Mandica 1, 21204, Dugopolje, Hrvatska</p>
                    <p>PON - SUB: 08:00 - 20:00</p>
                    <p>NED : neradni dan</p>
                    <p>+385 21 65 62 25</p>
                </div>
                `
                )
            );

            // Intermod - TC Apfel
            var photoImgSalonFranić = '<img class="kontakt_popup__image" src="https://i.ibb.co/MSqBj2J/Kalea-Mostar.jpg" height="120px" width="300px"/>';

            L.marker([43.2894229, 17.0290975], {
                icon: new L.DivIcon({
                className: 'my-div-icon',
                html: '<img class="my-div-image" src="https://i.imgur.com/OtAyBC9.png"/>'+
                '<span class="kontakt_location__span">Intermod - TC Apfel</span>'
                })
            })
            .addTo(map)
            .bindPopup(
                L.popup({}).setContent(
                `
                <div class="kontakt_popup__nopicture">
                    <h3 class="kontakt_popup__naziv">Intermod - TC Apfel</h3>
                    <p>Dubrovačka ul. 35-D8, 21300, Makarska, Hrvatska</p>
                    <p>PON - SUB: 08:00 - 21:30</p>
                    <p>NED : neradni dan</p>
                    <p>+385 21 69 59 60</p>
                </div>
                `
                )
            );

            // Intermod namještaj
            var photoImgSalonFranić = '<img class="kontakt_popup__image" src="https://i.ibb.co/MSqBj2J/Kalea-Mostar.jpg" height="120px" width="300px"/>';

            L.marker([42.6528905, 18.085347], {
                icon: new L.DivIcon({
                className: 'my-div-icon',
                html: '<img class="my-div-image" src="https://i.imgur.com/OtAyBC9.png"/>'+
                '<span class="kontakt_location__span">Intermod namještaj</span>'
                })
            })
            .addTo(map)
            .bindPopup(
                L.popup({}).setContent(
                `
                <div class="kontakt_popup__nopicture">
                    <h3 class="kontakt_popup__naziv">Intermod namještaj</h3>
                    <p>Ul. Nikole Tesle 2, 20000, Dubrovnik, Hrvatska</p>
                    <p>PON - SUB: 08:00 - 20:00</p>
                    <p>NED : neradni dan</p>
                    <p>+385 20 35 81 48</p>
                </div>
                `
                )
            );



        </script>
    </section>

    <!-- INFO AND FORM -->
    <section id="contactInfoForm" class="bg-kompletnoOpremanjeBackground py-14 lg:py-24">
        <div class="container mx-auto">
            <div class="grid lg:grid-cols-2 gap-4">
                <!-- INFO SECTION -->
                <div class="">
                    <div class="border-l-4 border-white -ml-10 text-center lg:text-left">
                        <h2 class="kontakt_title ml-10 text-4xl text-white font-bold mb-16">Za sve dodatne informacije <br>kontaktirajte nas!</h2>
                    </div>
                    <div class="flex justify-center lg:justify-start mb-14">
                        <i class="text-white text-2xl font-light fa-solid fa-location-dot mr-5"></i>
                        <span class="text-white text-2xl font-light font-kanit">Bosanski put b.b. 71380 Ilijaš, BIH</span>
                    </div>
                    <div class="flex justify-center lg:justify-start mb-14">
                        <i class="text-white text-2xl font-light fa-solid fa-envelope mr-5"></i>
                        <span class="text-white text-2xl font-light font-kanit">kalea@kalea.ba</span>
                    </div>
                    <div class="flex justify-center lg:justify-start mb-24">
                        <i class="text-white text-2xl font-light fa-solid fa-phone mr-5"></i>
                        <span class="text-white text-2xl font-light font-kanit">+387 (0)33 40 24 44</span>
                    </div>

                    <?php 
                    
                    $socialMediaFacebook  = get_field('social_media_facebook');
                    $socialMediaLinkedin  = get_field('social_media_linkedin');
                    $socialMediaInstagram = get_field('social_media_instagram');
                    $socialMediaYoutube   = get_field('social_media_youtube');
                    
                    ?>
                    <!-- SOCIAL MEDIA -->
                    <div class="scrol__short flex justify-center lg:justify-start mb-10 lg:mb-0">
                        <!-- FACEBOOK -->
                        <a href="<?php echo $socialMediaFacebook; ?>" target="_blank">
                            <i class="text-white text-3xl fa-brands fa-facebook mr-7"></i>
                        </a>
                        <!-- LINKEDIN -->
                        <a href="<?php echo $socialMediaLinkedin; ?>" target="_blank">
                            <i class="text-white text-3xl fa-brands fa-linkedin mr-7"></i>
                        </a>
                        <!-- INSTAGRAM -->
                        <a href="<?php echo $socialMediaInstagram; ?>" target="_blank">
                            <i class="text-white text-3xl fa-brands fa-instagram mr-7"></i>
                        </a>
                        <!-- YOUTUBE -->
                        <a href="<?php echo $socialMediaYoutube; ?>" target="_blank">
                            <i class="text-white text-3xl fa-brands fa-youtube mr-7"></i>
                        </a>
                    </div>
                </div>
                <!-- FORM SECTION -->
                <?php    
                    $contactFormShortcode = get_field('contact_form_shortcode');
                ?>

                <div class="">
                    <?php echo do_shortcode($contactFormShortcode); ?>
                </div>
            </div>
        </div>
    </section>
</section>

<?php get_footer(); ?>