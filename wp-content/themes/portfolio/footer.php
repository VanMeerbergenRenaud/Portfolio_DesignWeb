        <footer class="f">
            <ul class="f__list">
                <li>
                    <a href="https://twitter.com/RenaudVmb" title="Twitter" target="_blank" data-tooltip="Twitter" data-position="top" class="f__list__link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12">
                            <path fill="rgb(104, 112, 118)" fill-rule="nonzero"
                                  d="M14 1.42063167c-.5150833.24118129-1.0686667.40360951-1.6496667.47682526.59325-.37469237 1.0488334-.96841673 1.2629167-1.6759639-.55475.34700574-1.1695833.59926169-1.8240833.7352338C11.2659167.36792452 10.5186667 0 9.69266667 0 7.83825 0 6.47558333 1.82485644 6.89441667 3.71923708 4.508 3.59310911 2.39166667 2.38720263.97475.55434783.22225 1.91591468.5845 3.69708778 1.86316667 4.5990566c-.47016667-.01599671-.9135-.15196882-1.30025-.37899918-.0315 1.40340443.92225 2.71636588 2.30358333 3.00861362-.40425.11566858-.847.14273995-1.29733333.05168171C1.93433333 8.4837982 2.99483333 9.35931091 4.2525 9.38392125 3.045 10.3824856 1.52366667 10.828548 0 10.6390484 1.27108333 11.4985644 2.78133333 12 4.403 12c5.33283333 0 8.34575-4.75041017 8.16375-9.01107465.5611667-.4276046 1.04825-.96103364 1.43325-1.56829368Z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://github.com/VanMeerbergenRenaud" title="Github" target="_blank" class="f__list__link">
                        <svg class="svg-github" xmlns="http://www.w3.org/2000/svg" width="354" height="111" viewBox="0 0 354 111">
                          <g data-name="Groupe 32" transform="translate(4030 -1112)">
                            <text transform="translate(-3968 1197)" fill="#687076" font-size="92" font-family="MuseoSansRounded-500, Museo Sans Rounded" font-weight="500"><tspan x="-61.18" y="0">Git</tspan></text>
                            <rect width="209" height="111" rx="10" transform="translate(-3885 1112)" fill="#e0963d"/>
                            <text transform="translate(-3779 1197)" fill="#11161d" font-size="92" font-family="MuseoSansRounded-500, Museo Sans Rounded" font-weight="500"><tspan x="-88.09" y="0">Hub</tspan></text>
                          </g>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://renaud-vmb.com/contact" class="link__effect" title="Contact">Contact</a>
                </li>
                <li>
                    <a href="https://renaud-vmb.com/mentions-legales" class="link__effect" title="Mentions légales">Mentions légales</a>
                </li>
            </ul>
            <p class="f__copyright">
                © 2023 <a href="https://renaud-vmb.com" title="Retourner à l'accueil"><?= get_bloginfo('name'); ?></a>. Tous droits réservés.
            </p>
        </footer>
        <?php
            if (is_front_page()) {
                echo '<script src="' . get_stylesheet_directory_uri() . '/public/js/site.js"></script>';
            } elseif (is_page('contact')) {
                echo '<script src="' . get_stylesheet_directory_uri() . '/public/js/form.js"></script>';
            } elseif (is_page('projets')) {
                echo '<script src="' . get_stylesheet_directory_uri() . '/public/js/projets.js"></script>';
            } else {
                echo '<script src="' . get_stylesheet_directory_uri() . '/public/js/navigation.js"></script>';
            }
        ?>

    </body>
</html>