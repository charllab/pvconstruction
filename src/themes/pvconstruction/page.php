<?php
get_header();
?>

<main>

    <?php if (is_page([1717])) : ?>
        <div class="bg-info bg-cover py-3 pt-xl-6 pb-xl-7 topbanner__marginpullup--servicespage"
             style="background-image: url(<?php bloginfo('template_url'); ?>/images/placeholder-img-1920x768.png;);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 text-center text-white">
                        <h1 class="text-capitalize display-5 text-white mb-0"><?php the_title(); ?></h1>
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- bg-primary -->

        <div class="container pb-2 pb-md-3">

            <div class="row">
                <div class="col-12">

                    <?php if (have_posts()) : ?>

                        <?php /* Start the Loop */ ?>

                        <?php while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>

                        <?php endwhile; ?>

                    <?php endif; ?>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

    <?php else : ?>

    <div class="container pt-2 pb-3">

        <div class="row">
            <div class="col-12">

                <?php if (have_posts()) : ?>

                    <?php /* Start the Loop */ ?>

                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>

                    <?php endwhile; ?>

                <?php endif; ?>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    <?php endif; ?>

    <?php get_template_part('template-parts/content/content', 'calltoaction'); ?>

</main>


<?php get_footer(); ?>