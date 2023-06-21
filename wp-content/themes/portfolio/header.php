<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta donnée du site -->
    <meta name="author" content="<?= get_bloginfo('name'); ?>">
    <meta name="description" content="<?= get_bloginfo('description'); ?>">

    <link rel="icon" href="https://renaud-vmb.com/favicon.ico" type="image/x-icon">

    <?php if (is_page('accueil')) : ?>
        <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() . '/public/css/site.css'; ?>">
    <?php elseif (is_page('contact')) : ?>
        <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() . '/public/css/contact.css'; ?>">
    <?php elseif (is_page('projets')) : ?>
        <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() . '/public/css/projets.css'; ?>">
    <?php elseif (is_page('mentions-legales')) : ?>
        <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() . '/public/css/mentions-legales.css'; ?>">
    <?php elseif (is_search()) : ?>
        <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() . '/public/css/search.css'; ?>">
    <?php elseif (is_404()) : ?>
        <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() . '/public/css/404.css'; ?>">
    <?php endif; ?>

    <title>
        <?php if (is_front_page()) {
            echo get_bloginfo('name');
        } elseif (is_page('projets')) {
            echo 'Projets - ' . get_bloginfo('name');
        } elseif (is_page('contact')) {
            echo 'Contact - ' . get_bloginfo('name');
        } elseif (is_page('mentions-legales')) {
            echo 'Mentions Légales - ' . get_bloginfo('name');
        } elseif (is_search()) {
            echo 'Page de recherche';
        } elseif (is_404()) {
            echo '404 - Page non trouvée';
        } ?>
    </title>
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">Vous utilisez un navigateur <strong> obsolète </strong>. Veuillez
        <a href="https://browsehappy.com/" title="vers le site browsehappy"> mettre à niveau votre navigateur </a> pour améliorer votre expérience et votre sécurité.
    </p>
    <![endif]-->
    <p class="no-js__message">
        Pour accéder à toutes les fonctionnalités de ce site, vous devez activer JavaScript.
        Voici les <a href="https://www.enable-javascript.com/fr/" title="vers le site enable-javascript">
        instructions pour activer JavaScript dans votre navigateur Web</a>.
    </p>
    <header class="hidden">
        <h1 class="header__sitename"><?= get_bloginfo('name'); ?></h1>
        <p class="header__tagline"><?= get_bloginfo('description'); ?></p>
    </header>
    <?php get_template_part('main/navigation'); ?>