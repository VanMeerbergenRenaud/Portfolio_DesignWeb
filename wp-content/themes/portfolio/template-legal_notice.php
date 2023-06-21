<?php /* Template Name: Legal_notice page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="notice">
       <h2 class="notice__title">Mentions légales</h2>
        <h3 class="notice__subtitle">Identité</h3>
        <p class="notice__text">
            Renaud Van Meerbergen<br>
            Rue Petit Bioleux, 18<br>
            4122 Plainevaux<br>
            Belgique
        </p>

        <h3 class="notice__subtitle">Contact</h3>
        <p class="notice__text">
            Téléphone : <a href="tel:+32 470 59 60 65" title="me téléphoner">+32 (0)470 59 60 65</a><br>
            E-mail : <a href="mailto:renaud.vanmeerbergen@gmail.com" title="m'envoyer un mail">renaud.vanmeerbergen@gmail.com</a>
        </p>

        <h3 class="notice__subtitle">Hébergement</h3>
        <ul class="notice__text">
            <li>HOSTINGER</li>
            <li>HOSTINGER INTERNATIONAL LTD,<br> 61 Lordou Vironos Street,<br> 6023 Larnaca,<br> Chypre</li>
            <li><a href="https://www.hostinger.fr" title="vers l'hébergeur Hostinger">https://www.hostinger.fr</a></li>
        </ul>

        <h3 class="notice__subtitle">Objectif du site web</h3>
        <p class="notice__text">
            Le site web renaud-vmb.com est un portfolio qui présente mes compétences et mes projets en tant qu'étudiant à l'HEPL de Seraing actuellement en 2ème année.
        </p>

        <h3 class="notice__subtitle">Propriété intellectuelle</h3>
        <p class="notice__text">
            Je suis le propriétaire du contenu et des droits de propriété intellectuelle présents sur ce site web, sauf indication contraire.
        </p>

        <h3 class="notice__subtitle">Responsabilité</h3>
        <p class="notice__text">
            Je décline toute responsabilité quant aux dommages éventuels causés par l'utilisation de ce site web, des liens externes ou des informations qui y sont fournies.
        </p>

        <h3 class="notice__subtitle">Respect de la vie privée</h3>
        <p class="notice__text">
            Ce site web ne diffuse pas les données à caractère personnel communiquées via le formulaire de contact.
        </p>

        <h3 class="notice__subtitle">Liens externes</h3>
        <p class="notice__text">
            Je n'assume aucune responsabilité quant au contenu des sites web liés depuis mon portfolio, car je n'ai aucun contrôle sur ces sites.
        </p>

        <h3 class="notice__subtitle">Litige</h3>
        <p class="notice__text">
            Ce site web est soumis à la législation belge. Tout litige relatif à ce site web sera soumis à la juridiction des tribunaux belges.
        </p>

        <h3 class="notice__subtitle">Date de mise à jour</h3>
        <p class="notice__text">
            <?php
                $date = get_the_modified_date();
                setlocale(LC_TIME, 'fr_FR');
                $date_format_fr = strftime('%d %B %Y', strtotime($date));
            ?>
            Dernière mise à jour le <?= $date_format_fr; ?>.
        </p>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>