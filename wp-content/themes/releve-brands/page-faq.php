<?php
/**
 * FAQ page template for /faq.
 */
get_header();
?>
<main id="primary" class="site-main content-page narrow-page">
    <section class="page-hero">
        <p class="eyebrow">FAQ</p>
        <h1>Questions customers ask before buying.</h1>
        <p>Clear answers reduce hesitation and make checkout feel safer.</p>
    </section>

    <section class="faq-list">
        <details open>
            <summary>Are Releve products natural?</summary>
            <p>Releve focuses on natural wellness products. Final ingredient and claim language should match each product label.</p>
        </details>
        <details>
            <summary>How do I use the products?</summary>
            <p>Each product page should include usage directions, ingredients, warnings, and recommended storage.</p>
        </details>
        <details>
            <summary>Do you ship orders?</summary>
            <p>Shipping zones, rates, and delivery options are managed through WooCommerce.</p>
        </details>
        <details>
            <summary>Can I track my order?</summary>
            <p>Customers can receive order emails and view account/order history once WooCommerce email settings are configured.</p>
        </details>
        <details>
            <summary>Are these medical products?</summary>
            <p>No medical claims should be made without approval. Use the FDA disclaimer in the footer and on relevant product pages.</p>
        </details>
    </section>
</main>
<?php get_footer(); ?>
