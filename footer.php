    <footer id="colophon" class="site-footer" role="content-info">
        <div class="wrap wf3_footer">
            <div class="wf3_footer_contact">
                <h2>Contact</h2>
                <p>
                    Powered by Wordpress - 
                    <!-- admin_email -->
                    <a href="mailto:<?php echo bloginfo('admin_email'); ?>"><?php echo bloginfo('name'); ?></a>
                </p>
            </div>
            <!-- 
                // https://codex.wordpress.org/Template_Tags/wp_get_archives
                // on utilise wp_get_archives() pour récupérer toutes les archives
                // on peut lui passer des paramètres pour filtrer les résultats
                // on veut simplement les archives des 12 derniers mois
                // array(
                    'type' => 'monthly', // on spécifie qu'on veut des archives mensuelles
                    'limit' => '12' // on limite à 12 résultats,
                    'order' => 'DESC' // on les affiche du plus récent au plus vieux

                )
             -->
            <div class="wf3_footer_archives">
                <h2>Mes archives</h2>
                <ul class="wf3_footer_archives_links">
                    <?php
                        wp_get_archives(array(
                            'type' => 'monthly',
                            'limit' => '12',
                            'order' => 'DESC'
                        ));
                    ?>
                </ul>
            </div>
            
            <!-- 
                // https://codex.wordpress.org/Template_Tags/wp_get_archives
                // on utilise wp_get_archives() pour récupérer les derniers articles
                // on peut lui passer des paramètres pour filtrer les résultats
                // on veut simplement les 10 derniers articles
                // array(
                    'type' => 'postbypost', // on spécifie qu'on veut des archives mensuelles
                    'limit' => '10' // on limite à 12 résultats,
                    'order' => 'DESC' // on les affiche du plus récent au plus vieux

                )
             -->
            <div class="wf3_footer_lastposts">
                <h2>Mes derniers articles</h2>
                <ul class="wf3_footer_lastposts_links">
                <?php
                        wp_get_archives(array(
                            'type' => 'postbypost',
                            'limit' => '10',
                            'order' => 'DESC'
                        ));
                    ?>
                </ul>
            </div>

            <div class="wf3_footer_categories"></div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>