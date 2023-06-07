<?php /* Template Name: Project page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>

    <main class="projets">
        <h2></h2>
    </main>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
