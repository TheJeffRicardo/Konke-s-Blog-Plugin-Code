<?php

/**
 *  Plugin Name:      Konke's Plugin
 * Description:       The very first plugin of KonkeJeff.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            JeffRicardo
 */

add_filter( 'show_admin_bar', '__return_false' );


add_action( 'admin_menu', 'wporg_options_page' );
function wporg_options_page() {
    add_menu_page(
         'Jeffs Plugin',
         'Jeffs Plugin',
         'manage_options',
         'wporg',
         'wporg_options_page_html',
         'dashicons-search',
         20
        );
    }

    add_filter('wp_nav_menu_items','add_search_box', 10, 2);
    function add_search_box($items, $args) {
    ob_start();
    get_search_form();
    $searchform = ob_get_contents();
    ob_end_clean();
    $items.= '<li>' . $searchform. '</li>';
    return $items;
    }
    ?>