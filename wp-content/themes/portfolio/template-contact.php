<?php /* Template Name: Contact page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="contact">
        <h2 class="contact__title">Contact</h2>
            <?php
            $feedback = hepl_session_get('hepl_contact_form_feedback') ?? false;
            $errors = hepl_session_get('hepl_contact_form_errors') ?? [];
            ?>

            <?php if ($feedback): ?>
                <div class="success">
                <p>Merci&nbsp;! Votre message a bien été envoyé.</p>
            </div>
            <?php else: ?>

                <!-- FORM -->
                <div class="contact-form">
                    <form action="<?= esc_url(admin_url('admin-post.php')); ?>" method="POST">
                        <fieldset class="contact__info">
                            <legend class="contact-form__title">Bienvenue cher internaute, que puis-je faire pour vous aider&nbsp;?</legend>
                            <?php if ($errors): ?>
                                <div class="error">
                                    <img src="<?= get_field('memoji') ?>" alt="memoji qui frappe">
                                    <p>Attention&nbsp;! Merci de corriger les erreurs liées au formulaire.</p>
                                </div>
                            <?php endif; ?>
                            <div class="field">
                                <label for="name" class="field__label">Nom et prénom&nbsp;<span style="color: #ff3e3e">*</span></label>
                                <input type="text" name="name" id="name" class="field__input" placeholder="Quel est votre nom complet ?" />
                                <?php if ($errors['nom et prénom'] ?? null): ?>
                                    <p class="field__error"><?= $errors['nom et prénom']; ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="field">
                                <label for="email" class="field__label">Adresse mail&nbsp;<span style="color: #ff3e3e">*</span></label>
                                <input type="email" name="email" id="email" autocomplete class="field__input" placeholder="Quel est votre adresse mail ?" />
                                <?php if ($errors['email'] ?? null): ?>
                                    <p class="field__error"><?= $errors['email']; ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="field">
                                <label for="compagny" class="field__label">Nom de l'entreprise</label>
                                <input type="text" name="lastname" id="compagny" class="field__input" placeholder="Quel est votre entreprise ?" />
                                <?php if ($errors['entreprise'] ?? null): ?>
                                    <p class="field__error"><?= $errors['entreprise']; ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="field">
                                <label for="tel" class="field__label">Numéro de téléphone</label>
                                <input type="tel" name="phone" id="tel" autocomplete class="field__input" placeholder="Exemple : +32 (0)470 59 60 65">
                                <?php if ($errors['phone'] ?? null): ?>
                                    <p class="field__error"><?= $errors['phone']; ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="field">
                                <label for="message" class="field__label">Message&nbsp;<span style="color: #ff3e3e">*</span></label>
                                <textarea name="message" id="message" cols="30" rows="10" class="field__textarea" placeholder="Inscrivez votre message ici :"></textarea>
                                <?php if ($errors['message'] ?? null): ?>
                                    <p class="field__error"><?= $errors['message']; ?></p>
                                <?php endif; ?>
                            </div>
                        </fieldset>
                        <div class="contact__footer">
                            <input type="hidden" name="action" value="hepl_contact_form" />
                            <input type="hidden" name="contact_nonce" value="<?= wp_create_nonce('hepl_contact_form'); ?>" />
                            <button class="contact__submit" type="submit">Envoyer</button>
                        </div>
                    </form>
                </div>
                <!-- END FORM -->
            <?php endif; ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>