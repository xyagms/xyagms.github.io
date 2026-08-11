<?php
/**
 * Custom WooCommerce product archive for Releve Brands.
 */
defined('ABSPATH') || exit;

get_header('shop');
?>
<main id="primary" class="site-main shop-main">
    <section class="page-hero">
        <p class="eyebrow">Shop Releve Brands</p>
        <h1>Natural relief and wellness products.</h1>
        <p>Browse Releve’s owner-review product lineup. Final ingredient details, sizes, and compliant product claims can be approved before public launch.</p>
    </section>

    <?php if (function_exists('woocommerce_output_all_notices')) : ?>
        <?php woocommerce_output_all_notices(); ?>
    <?php endif; ?>

    <?php if (woocommerce_product_loop()) : ?>
        <div class="shop-toolbar">
            <?php woocommerce_result_count(); ?>
            <?php woocommerce_catalog_ordering(); ?>
        </div>

        <?php woocommerce_product_loop_start(); ?>

        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <?php wc_get_template_part('content', 'product'); ?>
        <?php endwhile; ?>

        <?php woocommerce_product_loop_end(); ?>

        <?php woocommerce_pagination(); ?>
    <?php else : ?>
        <section class="empty-shop-panel">
            <h2>Products are being added.</h2>
            <p>Check back soon for Releve Brands natural wellness products.</p>
        </section>
    <?php endif; ?>
</main>
<?php get_footer('shop'); ?>
