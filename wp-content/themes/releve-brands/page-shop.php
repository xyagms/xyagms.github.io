<?php
/**
 * Shop page fallback template.
 * Ensures /shop displays products even when WooCommerce does not route to archive-product.php.
 */
get_header();
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

    <?php
    if (shortcode_exists('products')) {
        echo do_shortcode('[products limit="12" columns="3" orderby="menu_order title" order="ASC"]');
    } elseif (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }
    ?>
</main>
<?php get_footer(); ?>
