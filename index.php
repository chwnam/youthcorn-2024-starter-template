<?php
get_header();
?>

    <?php while( have_posts() ) : ?>
        <?php the_post(); ?>
        <article>
            <h3>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>
            <section>
                <?php the_content(); ?>
            </section>
        </article>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

<?php
get_footer();
