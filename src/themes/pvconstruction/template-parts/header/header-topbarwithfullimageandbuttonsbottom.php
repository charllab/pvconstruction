<div class="parent-relative" id="topBarWithFullImageAndButtonsBottom">

    <div class="topbar">
        <div class="container">
            <div id="topbarContent" class="row justify-content-between">
                <div class="col-9 col-lg-3 topbar__phoneNumber">
                    <a href="tel:+1234567890"><i class="fas fa-phone"></i> (123) 456-7890</a></div>
                <div class="col-lg-4 d-none d-xl-block topbar__fluff">Helping you make smart investments</div>
                <div class="col-lg-5 d-none d-xl-flex justify-content-end topbar__getStarted">
                    <a href="<?php bloginfo('url'); ?>/contact" class="ml-auto px-4 topbar__GetStarted">Get Started <i
                                class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="col-3 d-xl-none d-flex justify-content-end">
                    <button class="navbar-toggler white" type="button" data-toggle="collapse"
                            data-target="#navbar-container" aria-controls="navbar-container" aria-expanded="false"
                            aria-label="Toggle navigation">
                        Menu
                    </button>
                </div>
            </div><!-- #topbarContent -->
        </div><!-- container -->
    </div><!-- topbar -->


    <div id="pagesHeaderLogo">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a rel="home" href="<?php echo esc_url(home_url('/')); ?>"
                       title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url" class="mb-0">
                        <img src="<?php bloginfo('template_url'); ?>/images/logo.svg"
                             alt="Company logo"
                             class="img-fluid navbar-main-logo">
                    </a>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- #pagesHeaderLogo -->

    <div class="mainMenu">
        <div class="container">
            <div id="menuItems">
                <nav class="navbar navbar-expand-xl p-0">
                    <?php wp_nav_menu([
                        'theme_location' => 'primary',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'navbar-container',
                        'menu_class' => 'navbar-nav d-flex w-100',
                        'fallback_cb' => '',
                        'menu_id' => 'main-menu',
                        'walker' => new understrap_WP_Bootstrap_Navwalker(),
                    ]); ?>
                </nav>
            </div><!-- menuItems -->
        </div><!-- container -->
    </div><!-- mainMenu -->
</div><!-- container-fluid container-relative -->
