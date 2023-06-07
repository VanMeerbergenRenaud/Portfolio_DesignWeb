<?php /* Template Name: Contact page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="page">
        <!-- FORM 1/5 -->
        <form action="<?= esc_url(admin_url('admin-post.php')); ?>" method="POST" id="email-form" name="email-form" data-name="Email Form" class="contact-form" aria-label="Email Form">
            <div class="question-wrap">
                <fieldset class="q is-1">
                    <p class="q__step">1/5</p>
                    <p class="q__title">Durée moyenne du questionnaire&nbsp;:&nbsp;2 minutes</p>
                    <p class="q__question">Quel est votre besoin&nbsp;?</p>
                    <div class="q__buttons">
                        <label for="Webdesign" class="radio__button">
                            <input type="radio" class="radio-input" name="Besoin" id="Webdesign" value="Webdesign" data-name="Besoin">
                            Site internet
                        </label>
                        <label for="Maquette design" class="radio__button">
                            <input type="radio" class="radio-input" name="Besoin" id="Maquette design" value="Maquette design" data-name="Besoin">
                            Maquette design
                        </label>
                        <label for="Animations" class="radio__button">
                            <input type="radio" class="radio-input" name="Besoin" id="Animations" value="Animations" data-name="Besoin">
                            Animations
                        </label>
                        <label for="Logo" class="radio__button">
                            <input type="radio" class="radio-input" name="Besoin" id="Logo" value="Logo" data-name="Besoin">
                            Logo
                        </label>
                    </div>
                    <div class="q__buttons">
                        <a href="#" class="radio__button">Suivant</a>
                    </div>
                </fieldset>
                <fieldset class="q is-2">
                    <p class="q__step">2/5</p>
                    <p class="q__question">
                        Quel objectif souhaitez-vous atteindre&nbsp;?
                    </p>
                    <label for="reason">
                        <textarea placeholder="Dites-moi tout..." maxlength="2000" id="reason" name="reason" data-name="reason" class="q__textarea"></textarea>
                    </label>
                    <div class="q__buttons">
                        <a href="#" class="radio__button">Suivant</a>
                    </div>
                    <a href="#" class="radio__button-previous">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#b4ebe7" viewBox="0 0 448 512">
                            <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                        </svg>
                    </a>
                </fieldset>
                <fieldset class="q is-3">
                    <p class="q__step">3/5</p>
                    <p class="q__question">
                        Pour quand en avez-vous besoin&nbsp;?
                    </p>
                    <div class="q__buttons">
                        <label for="small" class="radio__button">
                            <input type="radio" class="radio-input" id="small" value="small" name="Besoin" data-name="Besoin">
                            Au plus vite
                        </label>
                        <label for="medium" class="radio__button">
                            <input type="radio" class="radio-input" id="medium" value="medium" name="Besoin" data-name="Besoin">
                            Dans les 2 mois
                        </label>
                        <label for="big" class="radio__button">
                            <input type="radio" class="radio-input" id="big" value="big" name="Besoin" data-name="Besoin">
                            Dans les 6 mois
                        </label>
                        <label for="huge" class="radio__button">
                            <input type="radio" class="radio-input" id="huge" value="huge" name="Besoin" data-name="Besoin">
                            Peu importe
                        </label>
                    </div>
                    <div class="q__buttons">
                        <a href="#" class="radio__button">Suivant</a>
                    </div>
                    <a href="#" class="radio__button-previous">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#b4ebe7" viewBox="0 0 448 512">
                            <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                        </svg>
                    </a>
                </fieldset>
                <fieldset class="q is-4">
                    <p class="q__step">4/5</p>
                    <p class="q__question">
                        Comment avez-vous entendu parler de mon travail&nbsp;?
                    </p>
                    <div class="q__buttons">
                        <label for="option1" class="radio__button">
                            <input type="radio" class="radio-input" id="option1" value="option1" name="Besoin" data-name="Besoin">
                            Recherche Google
                        </label>
                        <label for="option2" class="radio__button">
                            <input type="radio" class="radio-input" id="option2" value="option2" name="Besoin" data-name="Besoin">
                            Bouche à oreille
                        </label>
                        <label for="option3" class="radio__button">
                            <input type="radio" class="radio-input" id="option3" value="option3" name="Besoin" data-name="Besoin">
                            Un de mes anciens projets
                        </label>
                        <label for="option4" class="radio__button">
                            <input type="radio" class="radio-input" id="option4" value="option4" name="Besoin" data-name="Besoin">
                            Réseau social (Github, Linkedin,..)
                        </label>
                        <label for="option5" class="radio__button">
                            <input type="radio" class="radio-input" id="option5" value="option5" name="Besoin" data-name="Besoin">
                            Autre
                        </label>
                    </div>
                    <div class="q__buttons">
                        <a href="#" class="radio__button">Suivant</a>
                    </div>
                    <a href="#" class="radio__button-previous">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#b4ebe7" viewBox="0 0 448 512">
                            <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                        </svg>
                    </a>
                </fieldset>
                <fieldset class="q is-5" id="is-5">
                    <p class="q__step">5/5</p>
                    <p class="q__question">
                        Enfin, renseignez vos informations afin que je puisse revenir vers vous au plus vite.
                    </p>
                    <div class="final-form">
                        <?php
                            $feedback = hepl_session_get('hepl_contact_form_feedback') ?? false;
                            $errors = hepl_session_get('hepl_contact_form_errors') ?? [];
                        ?>

                        <?php if ($feedback): ?>
                            <div class="success">
                                <p>Merci&nbsp;! Votre message a bien été envoyé.</p>
                            </div>
                            <?php else: ?>

                            <?php if ($errors): ?>
                                <div class="error">
                                    <p>Attention&nbsp;! Merci de corriger les erreurs du formulaire.</p>
                                </div>
                            <?php endif; ?>
                            <!-- Formulaire final -->
                                <div class="contact__info">
                                    <div class="field">
                                        <label for="firstname" class="field__label hidden">Votre prénom</label>
                                        <input type="text" name="firstname" id="firstname" placeholder="Nom et prénom" class="field__input"/>
                                        <?php if ($errors['firstname'] ?? null): ?>
                                            <p class="field__error"><?= $errors['firstname']; ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="field">
                                        <label for="lastname" class="field__label hidden">Votre nom</label>
                                        <input type="text" name="lastname" id="lastname" placeholder="Nom de votre entreprise" class="field__input"/>
                                        <?php if ($errors['lastname'] ?? null): ?>
                                            <p class="field__error"><?= $errors['lastname']; ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="field">
                                        <label for="email" class="field__label hidden">Votre adresse mail</label>
                                        <input type="email" name="email" id="email" placeholder="Email" class="field__input"/>
                                        <?php if ($errors['email'] ?? null): ?>
                                            <p class="field__error"><?= $errors['email']; ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="field">
                                        <label for="phone" class="field__label hidden">Votre numéro de téléphone</label>
                                        <input type="tel" name="phone" id="phone" placeholder="N° de téléphone" class="field__input"/>
                                        <?php if ($errors['phone'] ?? null): ?>
                                            <p class="field__error"><?= $errors['phone']; ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="field">
                                        <label for="message" class="field__label hidden">Inscrivez votre message</label>
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" class="field__textarea"></textarea>
                                        <?php if ($errors['message'] ?? null): ?>
                                            <p class="field__error"><?= $errors['message']; ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="contact__footer q__buttons">
                                    <input type="hidden" name="action" value="hepl_contact_form"/>
                                    <input type="hidden" name="contact_nonce" value="<?= wp_create_nonce('hepl_contact_form'); ?>"/>
                                    <button class="contact__submit radio__button" type="submit">Envoyer</button>
                                </div>
                            <!-- Fin du formulaire final -->
                        <?php endif; ?>
                    </div>
                    <a href="#" class="radio__button-previous">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#b4ebe7" viewBox="0 0 448 512">
                            <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                        </svg>
                    </a>
                </fieldset>
            </div>
        </form>
        <!-- END FORM 1/5 -->
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>