<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <?php get_template_part('main/header'); ?>
        <?php get_template_part('main/scroll-down'); ?>
        <?php get_template_part('main/sponsor-desktop'); ?>
        <?php get_template_part('main/hero-scroll'); ?>
        <?php get_template_part('main/about'); ?>
        <?php if (wp_is_mobile()) : ?>
            <?php get_template_part( 'main/sponsor-mobile' ); ?>
        <?php endif; ?>
        <?php /*get_template_part('main/skills'); */?>
        <?php get_template_part('main/benefits'); ?>
        <?php get_template_part('main/workflow'); ?>
        <?php get_template_part('main/faq'); ?>
        <?php get_template_part('main/footer'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>