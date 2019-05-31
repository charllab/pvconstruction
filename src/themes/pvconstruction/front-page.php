<?php
/**
 *
 * Template Name: Front Page
 *
 */

get_header(); ?>

    <main>
        <div class="bg-primary bg-cover pt-3 pt-lg-7 pt-xxl-8 pb-2"
             style="background-image: url(<?php the_field('banner_image')['sizes']['large']; ?>);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10 text-center text-white">
                        <h1 class="text-capitalize display-5 text-white mb-1 mb-sm-0"><?php the_field('banner_header'); ?></h1>
                        <p class="lead text-white mb-2 mb-lg-4 mb-xxl-5"><?php the_field('banner_subline'); ?></p>
                        <a href="#content" class="scrollable-anchor header-anchor mt-2">
                            <img src="<?php bloginfo('template_url'); ?>/images/goto-arrow.svg" alt=" "
                                 class="goto-arrow-svg">
                        </a>
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- bg-primary -->

        <div class="bigbox__wrapper">
            <div class="container front-page__maincontent" id="content">
                <?php if (have_posts()) : ?>

                    <?php /* Start the Loop */ ?>

                    <?php while (have_posts()) : the_post(); ?>

                        <?php the_content(); ?>

                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div><!-- bigbox__wrapper -->

        <div class="seperator__border--top">
            <div class="py-2">
                <?php get_template_part('template-parts/content/content', 'contactus'); ?>
            </div>
        </div><!-- seperator__border--top -->


    </main>

<?php get_footer();