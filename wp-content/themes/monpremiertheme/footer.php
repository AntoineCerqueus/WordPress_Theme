<footer class="nav">
    <!-- Retour à l'acceuil -->
    <div>
        <a href="<?php echo home_url('/'); ?>">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/malt_houblon.png" alt="Logo">
        </a>
    </div>
    <?php wp_nav_menu(
        array(
            'theme_location' => 'footer',
            'container' => 'ul', // afin d'éviter d'avoir une div autour 
            'menu_class' => 'site__footer__menu', // ma classe personnalisée 
        )
    );
    ?>
    <div class="widget">
        <div class="bloc-infos">
            <h3 class="white"><?php echo get_field('titre_infos', 10); ?></h3>
            <p class="white"><?php echo get_field('texte', 10); ?></p>
            <p class="white"><?php echo get_field('telephone', 10); ?></p>
            <p class="email"><a href="www.google.fr"><?php echo get_field('email', 10); ?></a></p>
        </div>
        <div>
            <a href="<?php the_field('bouton'); ?>" target="_blank">
                <input type="button" class="button" value="Contactez-Nous!" />
            </a>
        </div>
    </div>
</footer>
<div class="footer-down">
    <p>
        Malt & Houblon © 2020 - <strong><a href="https://www.google.fr">Mentions légales</a></strong>
        Réalistation - <strong><a href="https://www.google.fr">Antoine Cerqueus</a></strong>
    </p>
</div>
<!-- Idem que wp_head() affiches scripts et styles mais cette fois en bas de page -->
<?php wp_footer(); ?>
</body>

</html>