<!DOCTYPE html>
<!-- Définit automatiquement la langue du site basé sur le réglage Wordpress Réglages > Général > Langue du site.  -->
<html <?php language_attributes(); ?>>

<head>
    <!-- Définit l'encodage du site (par défaut UTF-8) -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Permet le chargement des scripts, tout comme le title tag -->
    <?php wp_head(); ?>
</head>

<!-- Permets d'ajouter des classes pour le css -->
<body <?php body_class(); ?>>
    <!-- Permet à des extensions d'écrire du code en début de body
         Ex : Yoast place le Google Tag Manager et autres codes de scripts-->
    <?php wp_body_open(); ?>
    <div class="header-top">
        <p class="header-top-left">
            Site réalisé dans le cadre de la formation <strong><a href="https://simplon.co/anti-faq">Simplon</a></strong> sur la création d'un thème wordpress
        </p>
        <p class="header-top-right">
            <a class="header-top-button" href="https://simplon.co/session/developpeur-se-web-et-web-mobile-11/134">Promo Dev Web</a>
        </p>
    </div>
    <header class="nav">
        <!-- Retour à l'acceuil -->
        <div>
            <a href="<?php echo home_url('/'); ?>">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/malt_houblon.png" alt="Logo">
            </a>
        </div>
        <?php wp_nav_menu(
            array(
                'theme_location' => 'main',
                'container' => 'ul', // afin d'éviter d'avoir une div autour 
                'menu_class' => 'site__header__menu', // ma classe personnalisée 
            )
        );
        ?>
    </header>