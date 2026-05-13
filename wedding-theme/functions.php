<?php
/**
 * Wedding Theme - Jacque Prates
 * Functions: Remove ALL WordPress injected styles/scripts that break Showit rendering
 */

// Remove EVERYTHING WordPress injects in <head>
add_action('init', function() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
});

// Remove ALL default WordPress styles and scripts
add_action('wp_enqueue_scripts', function() {
    // Remove block library styles
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('global-styles');
    wp_dequeue_style('dashicons');

    // Remove jQuery (Showit doesn't need it and it can conflict)
    wp_dequeue_script('jquery');
    wp_dequeue_script('jquery-core');
    wp_dequeue_script('jquery-migrate');
}, 100);

// Disable emoji completely
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
add_filter('emoji_svg_url', '__return_false');

// Remove wp-embed
add_action('wp_footer', function() {
    wp_dequeue_script('wp-embed');
}, 100);

// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Remove version from scripts/styles
add_filter('style_loader_src', function($src) {
    return remove_query_arg('ver', $src);
});
add_filter('script_loader_src', function($src) {
    return remove_query_arg('ver', $src);
});

// Inject CSS reset to prevent WordPress from affecting Showit layout
add_action('wp_head', function() {
    echo '<style id="wp-showit-reset">
    /* Reset WordPress interference with Showit */
    html { margin-top: 0 !important; }
    body { margin: 0 !important; padding: 0 !important; }
    #wpadminbar { display: none !important; }
    * { box-sizing: border-box; }
    </style>' . "\n";
}, 5);

// Theme support
add_action('after_setup_theme', function() {
    add_theme_support('title-tag');
    add_theme_support('html5', ['script', 'style']);
});

// Fix viewport - prevent WordPress from overriding the Showit viewport meta
add_filter('wp_head', function() {
    remove_action('wp_head', 'wp_no_robots');
}, 1);

// Force correct viewport meta - remove any WP-injected viewport and keep Showit's
add_action('wp_head', function() {
    // Remove any theme/plugin viewport meta that might conflict
    echo '<script>
    (function(){
        var metas = document.querySelectorAll("meta[name=viewport]");
        if(metas.length > 1){
            for(var i=1; i<metas.length; i++) metas[i].remove();
        }
        if(metas[0]){
            metas[0].setAttribute("content","width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no");
        }
    })();
    </script>' . "\n";
}, 999);
