<?php get_header(); ?>
  <!-- header -->
    <section class="mainHeader d-flex justify-content-center align-items-center">
        <h1 class="text-white p-4 rounded-lg display-4 animate__animated animate__backInUp"><?php the_field('naslov_u_headeru'); ?></h1>
    </section>
    <!-- uvod -->
    <section class="uvod py-5 container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img class="img-thumbnail" src="<?php the_field('slika_uvod'); ?>" alt="">
            </div>
            <div class="col-md-6">
                <p class="lead"><?php the_field('tekst_uvod'); ?> </p>
            </div>
        </div>
    </section>
    <!-- najboljaTorta -->
    <section class="najboljaTorta text-center py-5 text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="display-4"><?php the_field('najbolja_torta_naslov'); ?></h2>
                    <img src="<?php the_field('slika_tortica'); ?>" alt="" class="img-fluid animate__animated animate__fadeIn animate__delay-2s">
                    <p class="mt-4 lead"><?php the_field('najbolja_torta_tekst'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- slider -->
    <section class="slider py-5 container text-center">
        <div class="row">
            <div class="col-md-12">
                <h2 class="display-4 pb-3"><?php the_field('slajder_naslov') ?></h2>
                <img src="img/royal%20logo%20crni.png" alt="" class="img-fluid">
                <p class="lead py-3"><?php the_field('slajder_tekst') ?></p>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="<?php the_field(slajd_1) ?> /img/slatki-studio-royal1.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php the_field(slajd_2) ?> /img/slatki-studio-royal2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php the_field(slajd_3) ?> /img/slatki-studio-royal3.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php the_field(slajd_4) ?> /img/slatki-studio-royal4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>