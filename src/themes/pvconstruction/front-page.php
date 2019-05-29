<?php
/**
 *
 * Template Name: Front Page
 *
 */

get_header(); ?>

    <main>
        <div class="bg-primary bg-cover py-3 py-xl-6"
             style="background-image: url(<?php the_field('banner_image')['sizes']['large']; ?>);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 text-center text-white">
                        <h1 class="text-capitalize display-5 text-white"><?php the_field('banner_header'); ?></h1>
                        <p class="lead text-white"><?php the_field('banner_subline'); ?></p>
                        <a href="#content" class="scrollable-anchor header-anchor mt-2">
                          <img src="<?php bloginfo('template_url'); ?>/images/goto-arrow.svg" alt=" " class="goto-arrow-svg">
                        </a>
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- bg-primary -->

        <div class="container py-2" id="content">
            <div class="row">
                <div class="col-12">
                    <?php if (have_posts()) : ?>

                        <?php /* Start the Loop */ ?>

                        <?php while (have_posts()) : the_post(); ?>

                            <?php the_content(); ?>

                        <?php endwhile; ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>


        <div class="py-3">
            <?php get_template_part('template-parts/content/content', 'contactus'); ?>
        </div>


    </main>

<?php get_footer();
