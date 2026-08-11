<?php
/**
 * Default template.
 */
get_header();
?>
<main id="primary" class="site-main content-page">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <h1>Page not found</h1>
        <p>We couldn’t find that page.</p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
