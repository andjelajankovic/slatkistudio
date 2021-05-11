<?php
/*
* Templete Name : Main page templete
/*/
?>
   

   
   <?php get_header(); ?>
    <!-- header -->
    <section class="headers d-flex justify-content-center align-items-center">
        <h1 class="text-white p-4 rounded-lg display-4 animate__animated animate__backInUp"> <?php the_title(); ?> </h1>
    </section>
    <section class="novosti container py-5">
        <div class="row">
            <div class="col-md-10 offset-1">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                
                        <?php the_content(); ?>
                      
                <?php endwhile; else : ?>
                    <?php _e('Nema postova'); ?>
                <?php endif; ?>
            </div>
          
        </div>
    </section>
<?php get_footer(); ?>   