<?php
/**
 * Single post template file.
 *
 * @package TailPress
 */

get_header();
?>

<div class="container my-8 mx-auto">
    <h1 class="text-4xl font-bold text-blue-600 mb-4">🚀 Tes Edit Berhasil!</h1>

    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <?php get_template_part('template-parts/content', 'single'); ?>

            <?php if (comments_open() || get_comments_number()): ?>
                <?php comments_template(); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php
get_footer();