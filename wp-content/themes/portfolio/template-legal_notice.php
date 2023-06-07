<?php /* Template Name: Legal_notice page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
       <h2>Mentions légales</h2>
        <p class="first">Clause de confidentialité</p>
        <p class="second">
            Je traiterais avec le plus grand soin les données personnelles qui m’ont été communiquées. Je les traiterais en toute confidentialité et ne les utiliserais qu’aux fins pour lesquelles elles m’ont été communiquées. Ces données peuvent être enregistrées dans une ou plusieurs de mes bases de données et ne seront pas communiquées à des tiers sans le consentement de la personne concernée. Cette dernière peut en outre toujours réclamer la communication de ses données en ma possession, et en demander rectification et suppression.
        </p>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>