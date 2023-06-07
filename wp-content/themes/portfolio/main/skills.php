<!-- Class skills -->
<section class="skills">
    <h2 class="skills__title"><?= get_field('skills-title'); ?></h2>
    <h2 class="skills__title-back"><?= get_field('skills-title-back'); ?></h2>
    <p class="skills__text"><?= get_field('skills-text'); ?></p>
    <div class="skills__flip backend">
        <div class="card__inner">
            <!--<div class="card__face card__face--back">
                <img src="<?php /*= get_field('skills-back') */ ?>" alt="" class="back">
            </div>-->
            <div class="card__face skills__code card__face--front">
                <nav class="tabs">
                    <h2 class="hidden">Navigation</h2>
                    <button class="tablinks active" data-language="HTML">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"/>
                        </svg>HTML
                    </button>
                    <button class="tablinks" data-language="PHP">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M504.4,115.83a5.72,5.72,0,0,0-.28-.68,8.52,8.52,0,0,0-.53-1.25,6,6,0,0,0-.54-.71,9.36,9.36,0,0,0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84,8.84,0,0,0-.9-.68L404.4,55.55a8,8,0,0,0-8,0L300.12,111h0a8.07,8.07,0,0,0-.88.69,7.68,7.68,0,0,0-.78.6,8.23,8.23,0,0,0-.72.93c-.17.24-.39.45-.54.71a9.7,9.7,0,0,0-.52,1.25c-.08.23-.21.44-.28.68a8.08,8.08,0,0,0-.28,2.08V223.18l-80.22,46.19V63.44a7.8,7.8,0,0,0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35,8.35,0,0,0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36,9.36,0,0,0-.72-.94,9.46,9.46,0,0,0-.78-.6,9.8,9.8,0,0,0-.88-.68h0L115.61,1.07a8,8,0,0,0-8,0L11.34,56.49h0a6.52,6.52,0,0,0-.88.69,7.81,7.81,0,0,0-.79.6,8.15,8.15,0,0,0-.71.93c-.18.25-.4.46-.55.72a7.88,7.88,0,0,0-.51,1.24,6.46,6.46,0,0,0-.29.67,8.18,8.18,0,0,0-.28,2.1v329.7a8,8,0,0,0,4,6.95l192.5,110.84a8.83,8.83,0,0,0,1.33.54c.21.08.41.2.63.26a7.92,7.92,0,0,0,4.1,0c.2-.05.37-.16.55-.22a8.6,8.6,0,0,0,1.4-.58L404.4,400.09a8,8,0,0,0,4-6.95V287.88l92.24-53.11a8,8,0,0,0,4-7V117.92A8.63,8.63,0,0,0,504.4,115.83ZM111.6,17.28h0l80.19,46.15-80.2,46.18L31.41,63.44Zm88.25,60V278.6l-46.53,26.79-33.69,19.4V123.5l46.53-26.79Zm0,412.78L23.37,388.5V77.32L57.06,96.7l46.52,26.8V338.68a6.94,6.94,0,0,0,.12.9,8,8,0,0,0,.16,1.18h0a5.92,5.92,0,0,0,.38.9,6.38,6.38,0,0,0,.42,1v0a8.54,8.54,0,0,0,.6.78,7.62,7.62,0,0,0,.66.84l0,0c.23.22.52.38.77.58a8.93,8.93,0,0,0,.86.66l0,0,0,0,92.19,52.18Zm8-106.17-80.06-45.32,84.09-48.41,92.26-53.11,80.13,46.13-58.8,33.56Zm184.52,4.57L215.88,490.11V397.8L346.6,323.2l45.77-26.15Zm0-119.13L358.68,250l-46.53-26.79V131.79l33.69,19.4L392.37,178Zm8-105.28-80.2-46.17,80.2-46.16,80.18,46.15Zm8,105.28V178L455,151.19l33.68-19.4v91.39h0Z"/>
                        </svg>PHP
                    </button>
                    <button class="tablinks" data-language="CHATGPT">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="m22.2819 9.8211a5.9847 5.9847 0 0 0 -.5157-4.9108 6.0462 6.0462 0 0 0 -6.5098-2.9 6.0651 6.0651 0 0 0 -10.2757 2.1715 5.9847 5.9847 0 0 0 -3.9977 2.9 6.0462 6.0462 0 0 0 .7427 7.0966 5.98 5.98 0 0 0 .511 4.9107 6.051 6.051 0 0 0 6.5146 2.9001 5.9847 5.9847 0 0 0 4.5086 2.0108 6.0557 6.0557 0 0 0 5.7718-4.2058 5.9894 5.9894 0 0 0 3.9977-2.9001 6.0557 6.0557 0 0 0 -.7475-7.0729zm-9.022 12.6081a4.4755 4.4755 0 0 1 -2.8764-1.0408l.1419-.0804 4.7783-2.7582a.7948.7948 0 0 0 .3927-.6813v-6.7369l2.02 1.1686a.071.071 0 0 1 .038.052v5.5826a4.504 4.504 0 0 1 -4.4945 4.4944zm-9.6607-4.1254a4.4708 4.4708 0 0 1 -.5346-3.0137l.142.0852 4.783 2.7582a.7712.7712 0 0 0 .7806 0l5.8428-3.3685v2.3324a.0804.0804 0 0 1 -.0332.0615l-4.8398 2.7913a4.4992 4.4992 0 0 1 -6.1408-1.6464zm-1.2584-10.4082a4.485 4.485 0 0 1 2.3655-1.9728v5.6772a.7664.7664 0 0 0 .3879.6765l5.8144 3.3543-2.0201 1.1685a.0757.0757 0 0 1 -.071 0l-4.8303-2.7865a4.504 4.504 0 0 1 -1.6464-6.1408zm16.5963 3.8558-5.8333-3.3874 2.0154-1.164a.0757.0757 0 0 1 .071 0l4.8303 2.7913a4.4944 4.4944 0 0 1 -.6765 8.1042v-5.6772a.79.79 0 0 0 -.407-.667zm2.0107-3.0231-.142-.0852-4.7735-2.7818a.7759.7759 0 0 0 -.7854 0l-5.8379 3.3684v-2.3323a.0662.0662 0 0 1 .0284-.0615l4.8303-2.7866a4.4992 4.4992 0 0 1 6.6802 4.66zm-12.6413 4.1347-2.02-1.1638a.0804.0804 0 0 1 -.038-.0567v-5.5683a4.4992 4.4992 0 0 1 7.3757-3.4537l-.142.0805-4.7782 2.758a.7948.7948 0 0 0 -.3927.6813zm1.0976-2.3654 2.602-1.4998 2.6069 1.4998v2.9994l-2.5974 1.4997-2.6067-1.4997z"/>
                        </svg>ChatGPT
                    </button>
                </nav>
                <!-- Tab content -->
                <article class="wrapper_tabcontent">
                    <h2 class="hidden">Mes méthodes et ma structure de code</h2>
                    <section id="HTML" class="tabcontent active">
                        <h3 class="hidden">Ma méthode HTML</h3>
                        <pre>
                            <code class="html" lang="html">
                                &lt;<span class="html__tag">form</span> method="<span class="html__class">GET</span>"&gt;
                                &nbsp;&nbsp;&lt;<span class="html__tag">label</span> for="<span class="html__class">searchTerm</span>"&gt;<span class="pre__text">searchTerm</span>&lt;/<span class="html__tag">label</span>&gt;
                                &nbsp;&nbsp;&lt;<span class="html__tag">input</span> type="<span class="html__class">text</span>" id="<span class="html__class">searchTerm</span>" name="<span class="html__class">searchTerm</span>" placeholder="<span class="html__class">Search books</span>"&gt;
                                &nbsp;&nbsp;&lt;<span class="html__tag">input</span> type="<span class="html__class">submit</span>" value="<span class="html__class">Filter</span>"&gt;
                                &lt;/<span class="html__tag">form</span>&gt;
                                &lt;<span class="html__tag">ul</span>&gt;
                                &nbsp;&nbsp;&lt;<span class="html__tag">li</span>&gt;<span class="pre__text">The Catcher in the Rye - J.D. Salinger</span>&lt;/<span class="html__tag">li</span>&gt;
                                &nbsp;&nbsp;&lt;<span class="html__tag">li</span>&gt;<span class="pre__text">To Kill a Mockingbird - Harper Lee</span>&lt;/<span class="html__tag">li</span>&gt;
                                &nbsp;&nbsp;&lt;<span class="html__tag">li</span>&gt;<span class="pre__text">1984 - George Orwell</span>&lt;/<span class="html__tag">li</span>&gt;
                                &nbsp;&nbsp;&lt;<span class="html__tag">li</span>&gt;<span class="pre__text">The Great Gatsby - F. Scott Fitzgerald</span>&lt;/<span class="html__tag">li</span>&gt;
                                &nbsp;&nbsp;&lt;<span class="html__tag">li</span>&gt;<span class="pre__text">Pride and Prejudice - Jane Austen</span>&lt;/<span class="html__tag">li</span>&gt;
                                &lt;/<span class="html__tag">ul</span>&gt;
                            </code>
                        </pre>
                    </section>
                    <section id="PHP" class="tabcontent">
                        <h3 class="hidden">Ma méthode PHP</h3>
                        <pre>
                            <code class="php" lang="php">
                                &lt;<span class="php__tag">ul</span>&gt;
                                &nbsp;&nbsp;&lt;?php
                                <span class="php__variable">$books</span> = [
                                ['<span class="php__string">title</span>' =&gt; '<span class="pre__text">The Catcher in the Rye</span>', 'author' =&gt; '<span class="pre__text">J.D. Salinger</span>'],
                                ['<span class="php__string">title</span>' =&gt; '<span class="pre__text">To Kill a Mockingbird</span>', 'author' =&gt; '<span class="pre__text">Harper Lee</span>'],
                                ['<span class="php__string">title</span>' =&gt; '<span class="pre__text">1984</span>', 'author' =&gt; '<span class="pre__text">George Orwell</span>'],
                                ['<span class="php__string">title</span>' =&gt; '<span class="pre__text">The Great Gatsby</span>', 'author' =&gt; '<span class="pre__text">F. Scott Fitzgerald</span>'],
                                ['<span class="php__string">title</span>' =&gt; '<span class="pre__text">Pride and Prejudice</span>', 'author' =&gt; '<span class="pre__text">Jane Austen</span>']
                                ];

                                <span class="php__variable">$searchTerm</span> = $_GET['<span class="pre__text">searchTerm</span>'] ?? '';

                                <span class="php__variable">$filteredBooks</span> = array_filter($books, function(<span class="php__variable">$book</span>) use (<span class="php__variable">$searchTerm</span>) {
                                <span class="php__variable">$title</span> = strtolower(<span class="php__variable">$book</span>['<span class="pre__text">title'</span>]);
                                <span class="php__variable">$author</span> = strtolower(<span class="php__variable">$book</span>['<span class="pre__text">author'</span>]);
                                    return strpos(<span class="php__variable">$title</span>, <span class="php__variable">$searchTerm</span>) !== false || strpos(<span class="php__variable">$author</span>, <span class="php__variable">$searchTerm</span>) !== false;
                                });

                                foreach (<span class="php__variable">$filteredBooks</span> as <span class="php__variable">$book</span>) {
                                echo "<span class="pre__text">&lt;li&gt;{$book['title']} - {$book['author']}&lt;/li&gt;</span>";
                                }
                                ?&gt;
                                &lt;/<span class="php__tag">ul</span>&gt;
                            </code>
                        </pre>
                    </section>
                    <section id="CHATGPT" class="tabcontent">
                        <h3 class="hidden">Ma méthode utilisant ChtGPT</h3>
                        <pre>
                            <code class="chatgpt pre__text" lang="fr">L'amélioration du code PHP passe par l'optimisation de ses performances, l'amélioration de sa lisibilité et le respect des bonnes pratiques. Voici quelques conseils pour vous aider à améliorer votre code PHP :<br>
                                - Optimiser les requêtes de base de données.<br>
                                - Utilisez des instructions préparées ou des requêtes paramétrées pour éviter les injections SQL.<br>
                                - Indexez vos tables de base de données de manière appropriée pour améliorer les performances des requêtes.<br>
                                - Minimisez le nombre de requêtes de base de données en utilisant des jointures et en ne sélectionnant que les colonnes nécessaires.<br>
                                - Mettez en place un système de mise en cache.<br>
                                - Réduire les inclusions de fichiers,...
                            </code>
                        </pre>
                    </section>
                </article>
            </div>
        </div>
    </div>
</section>