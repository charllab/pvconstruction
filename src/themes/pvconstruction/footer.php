<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>

<footer>

    <section class="py-1 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center text-lg-left d-lg-flex">
                    <p class="mb-lg-0">&copy; <?php echo Date('Y');
                        echo ' ';
                        echo get_bloginfo('name'); ?></p>
                    <?php wp_nav_menu([
                        'theme_location' => 'tertiary',
                        'container_class' => 'legal-nav',
                        'menu_class' => 'list-unstyled d-flex justify-content-center',
                        'fallback_cb' => '',
                        'walker' => new understrap_WP_Bootstrap_Navwalker(),
                    ]); ?>
                </div>
                <div class="col-lg-5 text-center text-lg-right">
                    <p class="mb-0">Designed, Developed and Hosted by <a href="https://sproing.ca/" target="_blank">Sproing&nbsp;Creative</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

</footer>

<?php wp_footer(); ?>

</body>

</html>