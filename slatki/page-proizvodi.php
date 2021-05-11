<?php 
/*
* Template Name:  Proizvodi page template
*/
?>
<?php get_header(); ?>
    <!-- header -->
    <section class="headers d-flex justify-content-center align-items-center">
        <h1 class="text-white p-4 rounded-lg display-4 animate__animated animate__backInUp"><?php the_title(); ?></h1>
    </section>
    <section class="proizvodi container py-5">
        <div class="row">
            <?php $query=new WP_Query(array('post_type' => 'proizvodi'));
            if($query->have_posts()) : ?>
            <?php while($query->have_posts()) : $query->the_post(); ?>
                <div class="col-md-4">
                    <a href="<?php the_permalink(); ?>">
                        <div class="featured-image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </a>
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <?php else : ?>
                <?php _e('Nema unetih proizvoda'); ?>
            <?php endif; ?>
        </div>
    </section>
<?php get_footer(); ?>  