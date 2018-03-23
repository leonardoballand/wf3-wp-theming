<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/assets/css/bootstrap.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/assets/css/thegoodplace.css" />
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="<?php bloginfo('url'); ?>" class="navbar-brand"><?php bloginfo('name'); ?></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="<?php bloginfo('url') ?>/annonces" class="nav-link">Voir les annonces</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contactez-nous</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                <?php if (!is_user_logged_in()) : ?>
                    <!-- Si on est pas connecté -->
                    <li class="nav-item">
                        <a href="<?php echo wp_login_url(home_url()); ?>" class="nav-link">Se connecter</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo wp_registration_url(); ?>" class="nav-link">S'inscrire</a>
                    </li>
                <?php else: ?>
                    <!-- si on est connecté -->
                    <li class="nav-item">
                        <a href="<?php echo admin_url(); ?>" class="nav-link">
                            <i class="fa fa-tachometer"></i>
                            Tableau de bord
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo wp_logout_url(home_url()); ?>" class="nav-link">Se déconnecter</a>
                    </li>
                <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>