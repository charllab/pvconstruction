<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title"
          content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php bloginfo('url'); ?>/apple-touch-icon-144x144.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="152x152"
          href="<?php bloginfo('url'); ?>/apple-touch-icon-152x152.png"/>
    <link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/favicon-16x16.png" sizes="16x16"/>

    <link rel="stylesheet" href="https://use.typekit.net/gvk2ojm.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-4700177-65"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-4700177-65');
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="logoLeftButtonsRight">
    <?php if (!is_page_template(array('page-templates/landingpage-a.php', 'page-templates/landingpage-b.php'))) : ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <div class="nav-logo">
                    <h1 class="mb-0">
                        <a rel="home" href="<?php echo esc_url(home_url('/')); ?>"
                           title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
                           itemprop="url">
                            <img src="<?php bloginfo('template_url'); ?>/images/logo.svg"
                                 alt="Company logo"
                                 class="img-fluid navbar-main-logo">
                            <span class="sr-only"><?php bloginfo('name'); ?></span>
                        </a>
                    </h1>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#mainnav"
                        aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <?php wp_nav_menu([
                    'theme_location' => 'primary',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'mainnav',
                    'menu_class' => 'navbar-nav ml-auto',
                    'fallback_cb' => '',
                    'menu_id' => 'main-menu',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s <li class="nav-item"><a href="tel:+12503089940" class="nav-link active"><i class="fas fa-phone"></i> (250) 308-9940</a></li></ul>',
                    'walker' => new understrap_WP_Bootstrap_Navwalker(),
                ]); ?>
            </div>
        </nav>
    <?php endif; ?>
</header>

