<?php
/**
 * Releve Brands theme functions.
 */

if (! defined('ABSPATH')) {
    exit;
}

function releve_brands_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    register_nav_menus([
        'primary' => __('Primary Menu', 'releve-brands'),
        'footer' => __('Footer Menu', 'releve-brands'),
    ]);
}
add_action('after_setup_theme', 'releve_brands_setup');

function releve_brands_assets(): void
{
    wp_enqueue_style('releve-brands-main', get_template_directory_uri() . '/assets/css/main.css', [], '2.5.0');
    wp_enqueue_script('releve-brands-main', get_template_directory_uri() . '/assets/js/main.js', [], '2.5.0', true);
}
add_action('wp_enqueue_scripts', 'releve_brands_assets');

// This is a classic custom theme; force WooCommerce to use PHP templates instead of block placeholders.
add_filter('woocommerce_has_block_template', '__return_false');

// Temporary ngrok/LocalWP share links can trigger canonical redirect loops.
add_filter('redirect_canonical', function ($redirect_url) {
    if (isset($_SERVER['HTTP_HOST']) && str_contains((string) $_SERVER['HTTP_HOST'], 'ngrok-free.dev')) {
        return false;
    }

    return $redirect_url;
});

function releve_brands_woocommerce_wrapper_start(): void
{
    echo '<main id="primary" class="site-main shop-main">';
}

function releve_brands_woocommerce_wrapper_end(): void
{
    echo '</main>';
}

remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'releve_brands_woocommerce_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'releve_brands_woocommerce_wrapper_end', 10);
