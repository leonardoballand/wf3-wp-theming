<!--
    // https://developer.wordpress.org/reference/functions/bloginfo/
    // Permet de récupérer les informations de notre site
    // en lui spécifiant en paramètres l'information que l'on souhaite
-->


<!DOCTYPE html>
<html lang="<?php echo bloginfo('language'); ?>">
<head>
    <meta charset="<?php echo bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- On affiche le nom du site et la version de Wordpress utilisée dans le titre de la page -->
    <!-- ATTENTION: La version de Wordpress permet à des pirates d'eau douce de saccager votre travail -->
    <title><?php echo bloginfo('name'); ?> - Powered by Wordpress <?php bloginfo('version'); ?></title>
    
    <!--
        // On charge les fichiers style.css du thème parent et du thème enfant
        // On peut utiliser template_directory et stylesheet_directory
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/style.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_directory'); ?>/style.css" />

        // Mais on préfèrera utiliser les fonctions faites pour ça
        // https://developer.wordpress.org/reference/functions/get_template_directory_uri/
        // get_template_directory_uri -> retourne le chemin du template du thème parent
        https://developer.wordpress.org/reference/functions/get_stylesheet_directory_uri/
        // get_stylesheet_directory_uri -> retourne le chemin de la feuille de style du thème enfant
    -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />

    <!-- On peut charger d'autres feuilles de style -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/nav.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/footer.css" />

    <!-- On peut charger n'importe quel autre fichier depuis notre dossier de thème enfant -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>
</head>
<body>

<header>
    <!-- 'url' -->
    <a href="<?php echo bloginfo('url'); ?>">
        <!-- 'name' -->
        <h1><?php echo bloginfo('name'); ?></h1>
    </a>

    <!-- 
        // https://developer.wordpress.org/reference/functions/get_pages/
        // on utilise get_pages() pour récupérer toutes les pages de notre site
    -->
    <nav>
        <ul class="wf3_nav_pages_links">
        <?php
            $pages = get_pages();
            displayWF3Menu($pages);
        ?>
        </ul>
    </nav>

</header>

<div class="description">
    <!-- 'description' -->
    <p><?php echo bloginfo('description'); ?></p>
</div>
