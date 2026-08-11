<?php
/**
 * Releve Brands homepage — futuristic owner proof.
 */
get_header();
$asset_base = get_template_directory_uri() . '/assets/img/releve/';
$hero_products = [
    ['Topical Ointment', '$25.00', 'products-web/topical-ointment.jpg'],
    ['Healing Balm', '$25.00', 'products-web/healing-balm.jpg'],
    ['CBD Gummies', '$25.00', 'products-web/cbd-gummies-full-spectrum.jpg'],
];
$products = [
    ['Shower Steamer Spray', '$15.00', 'products-web/shower-steamer-spray.jpg', 'Aromatherapy'],
    ['Bug Spray 8 oz Refill', '$30.00', 'products-web/bug-spray-8-oz-refill-no-spray-too.jpg', 'Refills'],
    ['Hair Tonic 8 oz Refill', '$55.00', 'products-web/hair-tonic-8-oz.jpg', 'Refills'],
    ['Make-Up Remover', '$12.00', 'products-web/make-up-remover.jpg', 'Body Care'],
    ['Lip Balm', '$8.00', 'products-web/lip-balm.jpg', 'Body Care'],
    ['Bath Salts', '$25.00', 'products-web/bath-salts.jpg', 'Bath Care'],
    ['Hair Tonic', '$15.00', 'products-web/hair-tonic.jpg', 'Hair Care'],
    ['Bug Spray', '$8.00', 'products-web/bug-spray.jpg', 'Outdoor'],
    ['Essential Oil Inhalers', '$5.00', 'products-web/essential-oil-inhalers.jpg', 'Aromatherapy'],
];
?>
<main id="primary" class="site-main future-home">
    <section class="future-hero">
        <div class="future-glow glow-a"></div>
        <div class="future-glow glow-b"></div>
        <div class="future-hero-copy">
            <p class="eyebrow">Releve Brands • Natural Wellness Storefront</p>
            <h1>Everyday natural relief and wellness products you can trust for your whole family.</h1>
            <p class="future-lede">A polished blue wellness experience built around Releve’s current product lineup, high-resolution imagery, clear prices, product details, and a review-ready shopping flow.</p>
            <div class="hero-actions">
                <a class="button primary" href="shop.html">Shop Products</a>
                <a class="button secondary" href="#about">Meet Releve</a>
            </div>
            <div class="future-stats">
                <span><strong>12</strong> Products</span>
                <span><strong>HD</strong> Images</span>
                <span><strong>Demo</strong> Cart</span>
            </div>
        </div>
        <div class="future-stage organized-stage" aria-label="Featured Releve products">
            <article class="future-main-product">
                <span>Featured Relief</span>
                <img src="<?php echo esc_url($asset_base . 'products-web/topical-ointment.jpg'); ?>" alt="Releve Topical Ointment">
                <div><h3>Topical Ointment</h3><p>$25.00</p></div>
            </article>
            <div class="future-side-products">
                <article>
                    <img src="<?php echo esc_url($asset_base . 'products-web/healing-balm.jpg'); ?>" alt="Releve Healing Balm">
                    <div><h3>Healing Balm</h3><p>$25.00</p></div>
                </article>
                <article>
                    <img src="<?php echo esc_url($asset_base . 'products-web/cbd-gummies-full-spectrum.jpg'); ?>" alt="Releve CBD Gummies">
                    <div><h3>CBD Gummies</h3><p>$25.00</p></div>
                </article>
            </div>
        </div>
    </section>

    <section class="future-strip" aria-label="Releve benefits">
        <span>CBD Wellness</span><span>Pain Relief</span><span>Aromatherapy</span><span>Body Care</span><span>Outdoor Essentials</span><span>Family Wellness</span>
    </section>

    <section id="about" class="brand-story founder-spotlight founder-lower">
        <div>
            <p class="eyebrow">About Releve • Founder Story</p>
            <h2>Meet Wendy Williams, the founder behind Releve Brands.</h2>
            <p>In August 2016, Wendy Williams started searching for safe anti-bacterial products for her family. She researched the effects of natural ingredients and began experimenting in her kitchen until she created products with the results she was looking for.</p>
            <p>After sharing her products with friends and family, their response encouraged her to start Releve Brands. In September 2018, after researching the anti-inflammatory and pain-relieving properties of CBD, Wendy began incorporating CBD isolate into select products and found it enhanced and accelerated the effects.</p>
            <p>Wendy built Releve while balancing entrepreneurship and life as a single mother, growing the brand through trade shows, customer referrals, e-commerce, and a full portfolio of natural, safe, and effective health and wellness products.</p>
            <div class="story-points">
                <span>Family owned</span>
                <span>Kitchen-born recipes</span>
                <span>Humble, Texas</span>
            </div>
            <a class="button primary" href="about.html">Read Wendy’s Story</a>
        </div>
        <div class="story-photo-card founder-photo-card screenshot-photo-card">
            <img src="<?php echo esc_url($asset_base . 'founder-wendy-tight.jpg'); ?>" alt="Wendy Williams, founder and owner of Releve Brands">
            <div class="founder-badge">
                <strong>Wendy Williams</strong>
                <span>Founder &amp; Owner</span>
            </div>
        </div>
    </section>



    <section id="future-lineup" class="future-section-head">
        <p class="eyebrow">Current Releve Lineup</p>
        <h2>Every product gets a premium card.</h2>
        <p>Clear product names, prices, sharp visuals, and clickable product pages so the owner can review the full store experience quickly.</p>
    </section>

    <section class="future-product-grid">
        <?php foreach ($products as [$name, $price, $image, $tag]) : ?>
            <article>
                <span><?php echo esc_html($tag); ?></span>
                <img src="<?php echo esc_url($asset_base . $image); ?>" alt="<?php echo esc_attr('Releve ' . $name); ?>">
                <h3><?php echo esc_html($name); ?></h3>
                <p class="product-price"><?php echo esc_html($price); ?></p>
                <a class="button secondary demo-add-home" href="shop.html">Add to Cart</a>
            </article>
        <?php endforeach; ?>
    </section>

    <section class="future-split">
        <div>
            <p class="eyebrow">Owner Review Ready</p>
            <h2>Modern presentation now, real WooCommerce checkout when hosted.</h2>
            <p>This proof is now self-contained for review. The demo cart shows the shopping flow; final payment/cart checkout requires the WordPress site to be on real hosting.</p>
            <a class="button light" href="shop.html">Open Shop</a>
        </div>
        <div class="future-orbit">
            <img src="<?php echo esc_url($asset_base . 'products-web/shower-steamer-spray.jpg'); ?>" alt="Shower Steamer Spray">
            <img src="<?php echo esc_url($asset_base . 'products-web/essential-oil-inhalers.jpg'); ?>" alt="Essential Oil Inhalers">
            <img src="<?php echo esc_url($asset_base . 'products-web/bug-spray.jpg'); ?>" alt="Bug Spray">
        </div>
    </section>

    <section id="faq" class="faq-section">
        <p class="eyebrow">FAQ</p>
        <h2>Frequently asked questions</h2>
        <p class="faq-kicker">Looking for something? Here are the core Releve Products questions customers ask first.</p>
        <div class="faq-grid">
            <article>
                <h3>What type of ingredients are in Releve products?</h3>
                <p>All Releve products are made with 100% natural ingredients. Proprietary blends use the finest herbs and essential oils selected for safe, effective results. CBD isolate is used in some products to enhance anti-inflammatory effects.</p>
                <p>All Releve products are paraben free and contain no toxic chemicals.</p>
            </article>
            <article>
                <h3>How do I know which Releve products contain CBD?</h3>
                <p>Products that include CBD are clearly identified in the product description and detail page so customers can choose the option that fits their needs.</p>
            </article>
            <article>
                <h3>Are Releve products safe for children?</h3>
                <p>Releve products are made with natural ingredients, but customers should review each product’s details and consult a healthcare professional when needed, especially for children or sensitive skin.</p>
            </article>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <div>
            <p class="eyebrow">Contact Releve</p>
            <h2>Questions, orders, or product guidance?</h2>
            <p>Reach out to Releve Brands directly for product questions, return requests, shipping questions, or help choosing the right natural wellness product.</p>
            <div class="contact-actions">
                <a class="button primary" href="mailto:info@relevebrands.com">Email Releve</a>
                <a class="button secondary" href="tel:8324983411">Call 832-498-3411</a>
            </div>
        </div>
        <div class="contact-card">
            <h3>Releve Brands</h3>
            <p><strong>Email</strong><br><a href="mailto:info@relevebrands.com">info@relevebrands.com</a></p>
            <p><strong>Phone</strong><br><a href="tel:8324983411">832-498-3411</a></p>
            <p><strong>P.O. Box</strong><br>13531 Will Clayton Pkwy<br>Ste 300 #1040<br>Humble, TX 77346</p>
        </div>
    </section>
</main>
<?php get_footer(); ?>
