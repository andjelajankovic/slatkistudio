<?php get_header(); ?>
    <!-- header -->
    <section class="headers d-flex justify-content-center align-items-center">
        <h1 class="text-white p-4 rounded-lg display-4 animate__animated animate__backInUp">Novosti</h1>
    </section>
    <section class="novosti container py-5">
        <div class="row">
            <div class="col-md-8">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <div class="row post align-items-center">
                    <div class="col-md-5 featured-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="col-md-7">
                        <h3><?php the_title(); ?></h3>
                        <p class="meta">
                            <?php the_author(); ?> | <?php echo get_the_date('F j, Y'); ?>
                        </p>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn">
                            <?php _e('Ceo tekst'); ?>
                        </a>
                    </div>
                </div>
                <?php endwhile; else : ?>
                    <?php _e('Nema postova'); ?>
                <?php endif; ?>
            </div>
            <div class="col-md-4">
           <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>   