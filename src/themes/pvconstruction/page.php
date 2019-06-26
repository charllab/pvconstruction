<?php
get_header();
?>

    <main>

        <?php if (is_page([1717])) : ?>
            <div class="bg-info bg-cover py-3 pt-xl-6 pb-xl-7 topbanner__marginpullup--servicespage position-relative"
                 style="background-image: url(<?php the_field('banner_image')['sizes']['large']; ?>);">
                <div class="banner__color-overlay"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 text-center text-white">
                            <h1 class="text-capitalize display-5 text-white mb-0"><?php the_title(); ?></h1>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- bg-primary -->

            <div class="container py-2 pt-md-3">

                <?php if (have_rows('service_type')): ?>


                    <?php /* Start the Loop */ ?>

                    <?php while (have_rows('service_type')) : the_row(); ?>


                        <div class="row service-row justify-content-center align-items-center service__content-row">

                            <div class="col-md-6 service__content-column service__content-column--text">
                                <h2><?php the_sub_field('services_title'); ?></h2>
                                <?php the_sub_field('services_blurb'); ?>
                                <a href="<?php the_sub_field('service_link'); ?>"
                                   class="btn btn-secondary mb-md-0"><?php the_sub_field('button_label'); ?> ➝</a>
                            </div><!-- col -->

                            <div class="col-md-6 service__content-column service__content-column--gallery">

                                <div class="owl-carousel owl-theme services-carousel">

                                    <?php

                                    $images = get_sub_field('services_images');

                                    if ($images):?>
                                        <?php foreach ($images as $image): ?>
                                            <div class="item text-center">
                                                <img src="<?php echo $image['sizes']['large']; ?>"
                                                     alt="<?php echo $image['alt']; ?>"
                                                     class="img-fluid"
                                                />
                                            </div><!-- item -->
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div><!-- owl-carousel -->

                            </div><!-- col -->

                        </div>

                    <?php endwhile; ?>


                <?php endif; ?>

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