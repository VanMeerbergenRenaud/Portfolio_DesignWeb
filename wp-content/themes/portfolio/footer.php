        <footer class="f">
            <ul class="f__list">
                <li>
                    <a href="#" title="Twitter" target="_blank" data-tooltip="Twitter" data-position="top" class="f__list__link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12">
                            <path fill="rgb(104, 112, 118)" fill-rule="nonzero"
                                  d="M14 1.42063167c-.5150833.24118129-1.0686667.40360951-1.6496667.47682526.59325-.37469237 1.0488334-.96841673 1.2629167-1.6759639-.55475.34700574-1.1695833.59926169-1.8240833.7352338C11.2659167.36792452 10.5186667 0 9.69266667 0 7.83825 0 6.47558333 1.82485644 6.89441667 3.71923708 4.508 3.59310911 2.39166667 2.38720263.97475.55434783.22225 1.91591468.5845 3.69708778 1.86316667 4.5990566c-.47016667-.01599671-.9135-.15196882-1.30025-.37899918-.0315 1.40340443.92225 2.71636588 2.30358333 3.00861362-.40425.11566858-.847.14273995-1.29733333.05168171C1.93433333 8.4837982 2.99483333 9.35931091 4.2525 9.38392125 3.045 10.3824856 1.52366667 10.828548 0 10.6390484 1.27108333 11.4985644 2.78133333 12 4.403 12c5.33283333 0 8.34575-4.75041017 8.16375-9.01107465.5611667-.4276046 1.04825-.96103364 1.43325-1.56829368Z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="/contact" class="link__effect">Contact</a>
                </li>
                <li>
                    <a href="https://cv.renaud-vmb.com" target="_blank" class="link__effect">Mon cv</a>
                </li>
                <li>
                    <a href="/mentions-legales" class="link__effect">Mentions légales</a>
                </li>
            </ul>
            <p class="f__copyright">
                © 2023 <a href="/accueil" title="Retourner à l'accueil"><?= get_bloginfo('name'); ?></a>. Tous droits réservés.
            </p>
        </footer>
        <?php
            if (is_front_page()) {
                echo '<script src="' . get_stylesheet_directory_uri() . '/public/js/site.js"></script>';
            } elseif (is_page('contact')) {
                echo '<script src="' . get_stylesheet_directory_uri() . '/public/js/form.js"></script>';
            } elseif (is_page('projets')) {
                echo '<script src="' . get_stylesheet_directory_uri() . '/public/js/projets.js"></script>';
            }
        ?>
        <script>document.documentElement.classList.add("js-enabled");</script>
    </body>
</html>