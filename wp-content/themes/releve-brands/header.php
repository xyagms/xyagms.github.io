<?php
/**
 * Site header.
 */
$logo_url = get_template_directory_uri() . '/assets/img/releve/logo-black.png';
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <a class="brand" href="<?php echo esc_url(home_url('/shop/')); ?>" aria-label="Releve Brands home">
        <img class="brand-logo" src="<?php echo esc_url($logo_url); ?>" alt="Releve Brands">
    </a>
    <nav class="primary-nav" aria-label="Primary navigation">
        <?php
        if (has_nav_menu('primary')) {
            wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'fallback_cb' => false,
            ]);
        } else {
            ?>
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/shop')); ?>">Shop</a></li>
                <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
                <li><a href="<?php echo esc_url(home_url('/faq')); ?>">FAQ</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
            </ul>
            <?php
        }
        ?>
    </nav>
    <a class="cart-link" href="<?php echo esc_url(function_exists('wc_get_cart_url') ? wc_get_cart_url() : home_url('/cart')); ?>">
        Cart<?php echo function_exists('WC') && WC()->cart ? ' (' . esc_html((string) WC()->cart->get_cart_contents_count()) . ')' : ''; ?>
    </a>
</header>
