<?php

/* Cache bust WP */
wp_cache_flush();

/* Require */

/* BS Nav Walker */
require get_template_directory().'/includes/bootstrap-wp-navwalker.php';

/* Add ACF widget */
include_once get_template_directory().'/includes/acf-custom-widget.php';

/* Hooks */
if (!function_exists('enqueue_scripts')) {

    add_action('wp_enqueue_scripts', 'enqueue_scripts');

    function enqueue_scripts()
    {
        wp_enqueue_script('jquery', false, array(), false, false);
        wp_enqueue_style('style_file', get_stylesheet_directory_uri().'/style/style.css', [], '1.0.3');
        wp_enqueue_script('header_js', get_stylesheet_directory_uri().'/js/header-bundle.js', null, '1.0.3', false);
        wp_enqueue_script('footer_js', get_stylesheet_directory_uri().'/js/footer-bundle.js', null, '1.0.3', true);
    }
}

/* Misc */
show_admin_bar(false);

// add_filter('login_errors', create_function('$a', "return null;"));
remove_action('wp_head', 'wp_generator');
remove_filter ('the_content', 'wpautop');
remove_filter ('the_excerpt', 'wpautop');
add_filter('gform_init_scripts_footer', '__return_true');
add_filter( 'gform_confirmation_anchor', '__return_false' );

/* Add Theme-Options WP-admin SideBar */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title'    => 'Theme Options',
        'menu_title'    => 'Theme Options',
        'menu_slug'     =>  'theme-options',
        'capability'    => 'edit_posts',
        'position'      =>  80,
        'redirect'      =>  false
    ]);
}


/* Child Theme */
add_action('after_setup_theme', 'custom_after_setup_theme', 11);

/* Rename Post */
if (!function_exists('admin_init')) {

    function remove_posts_menu()
    {
        remove_menu_page('edit.php');
        remove_menu_page('edit-comments.php');
    }

    add_action('admin_init', 'remove_posts_menu');
}

function custom_after_setup_theme()
{
    // add gravity forms confirmation anchor
    add_filter( 'gform_confirmation_anchor', '__return_true' );
    add_image_size( 'homepagebanner', 1920, 490, true, array('center','center') );
    add_image_size( 'homepageserving', 1920, 780, true, array('center','center') );
    add_image_size( 'homepageserving', 768, 434, true, array('center','center') );
    add_image_size( 'homepageevents', 768, 434, true, array('center','center') );
    add_image_size( 'eventimage', 1170, 450, true, array('center','center') );
    remove_theme_support('custom-background');
    remove_theme_support('post-thumbnails');
    register_nav_menus([
        'primary'   =>  'Primary Menu',
        'secondary' =>  'Footer Menu',
        'tertiary'  =>  'Legal Menu'
    ]);
}


/* Wrap block element  */
add_filter( 'render_block', 'my_wrap_quote_block_fitler', 10, 3);

function my_wrap_quote_block_fitler( $block_content, $block ) {

    if( "core-embed/youtube" !== $block['blockName'] ) {
        return $block_content;
    }

    $output = '<div class="embed-responsive embed-responsive-16by9 mb-1">';
    $output .= $block_content;
    $output .= '</div>';

    return $output;
}
