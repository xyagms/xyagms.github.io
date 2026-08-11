<?php
/**
 * Site footer.
 */
$asset_base = get_template_directory_uri() . '/assets/img/releve/';
?>
<footer class="site-footer">
    <div>
        <img class="footer-logo" src="<?php echo esc_url($asset_base . 'logo-white.png'); ?>" alt="Releve Brands">
        <p>Natural relief products crafted for everyday wellness you can trust.</p>
        <p>&copy; <?php echo esc_html(date_i18n('Y')); ?> Releve Brands. All rights reserved.</p>
    </div>
    <div>
        <nav class="footer-links" aria-label="Footer links">
            <a href="faq.html">FAQ</a>
            <a href="shipping-policy.html">Shipping Policy</a>
            <a href="refund-policy.html">Refund Policy</a>
            <a href="terms.html">Payment Methods</a>
        </nav>
        <p><strong>P.O. Box:</strong><br>13531 Will Clayton Pkwy<br>Ste 300 #1040<br>Humble, TX 77346</p>
        <p><strong>Contact:</strong><br><a href="mailto:info@relevebrands.com">info@relevebrands.com</a><br><a href="tel:8324983411">832-498-3411</a></p>
        <div class="social-icons" aria-label="Social links">
            <a href="https://www.facebook.com/relevebrands" aria-label="Releve Brands Facebook"><img src="<?php echo esc_url($asset_base . 'social-1.png'); ?>" alt="Facebook"></a>
            <a href="https://www.instagram.com/relevebrands/" aria-label="Releve Brands Instagram"><img src="<?php echo esc_url($asset_base . 'social-2.png'); ?>" alt="Instagram"></a>
            <a href="https://twitter.com/Relevebrands" aria-label="Releve Brands Twitter"><img src="<?php echo esc_url($asset_base . 'social-3.png'); ?>" alt="Twitter"></a>
        </div>
        <p class="disclaimer">These statements have not been evaluated by the FDA. Products are not intended to diagnose, treat, cure, or prevent disease. Final claims should be reviewed by Releve Brands before launch.</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
