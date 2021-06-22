<?php

get_header(); ?>

<!-- ==================
     PRESENTATION
=======================  -->

<section class="presentation">
    <div class="title">
        <h1>
            <?php the_field('titre'); ?>
        </h1>
        <p>
            <?php the_field('baseline'); ?>
        </p>
    </div>

    <div class="container">
        <div class="bloc">
            <img class="image" src="<?php the_field('rubrique_1_-_image'); ?>" alt="Dégustation" />
            <div class="name">
                <strong><?php the_field('rubrique_1_-_nom'); ?></strong>
            </div>
            <div class="description">
                <?php the_field('rubrique_1_-_description'); ?>
            </div>
            <div>
                <button class="button pres">
                    <a target="_blank" href="<?php the_field('rubrique_1_-_lien'); ?>"><?php the_field('rubrique_1_-_titre_du_lien'); ?></a>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <div class="bloc">
            <img class="image" src="<?php the_field('rubrique_2_-_image'); ?>" alt="Discussions" />
            <div class="name">
                <strong><?php the_field('rubrique_2_-_nom'); ?></strong>
            </div>
            <div class="description">
                <?php the_field('rubrique_2_-_description'); ?>
            </div>
            <div>
                <button class="button pres">
                    <a target="_blank" href="<?php the_field('rubrique_2_-_lien'); ?>"><?php the_field('rubrique_2_-_titre_du_lien'); ?></a>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <div class="bloc">
            <img class="image" src="<?php the_field('rubrique_3_-_image'); ?>" alt="Initiation" />
            <div class="name">
                <strong><?php the_field('rubrique_3_-_nom'); ?></strong>
            </div>
            <div class="description">
                <?php the_field('rubrique_3_-_description'); ?>
            </div>
            <div>
                <button class="button pres">
                    <a target="_blank" href="<?php the_field('rubrique_3_-_lien'); ?>"><?php the_field('rubrique_3_-_titre_du_lien'); ?></a>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- ==================
     SOUSCRIPTION
=======================  -->

<section class="subscribe">
    <div class="container">
        <div class="item-left">
            <p>
                <?php the_field('bloc_gauche_-_description'); ?>
            </p>
            <h3>
                <?php the_field('bloc_gauche_-_titre'); ?>
            </h3>
            <!-- Placer dans une div pour ne pas que le bouton prenne toute la largeur de item -->
            <div>
                <button class="buttons">
                    <a target="_blank" href="<?php the_field('bloc_gauche_-_lien'); ?>"><?php the_field('bloc_gauche_-_titre_du_lien'); ?></a>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        <div class="item-right">
            <p>
                <?php the_field('bloc_droite_-_description'); ?>
            </p>
            <h3>
                <?php the_field('bloc_droite_-_titre'); ?>
            </h3>
            <div>
                <button class="buttons">
                    <a target="_blank" href="<?php the_field('bloc_droit_-_lien'); ?>"><?php the_field('bloc_droit_-_titre_du_lien'); ?></a>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- ==================
       INFORMATION
=======================  -->

<section class="information">
    <div class="title">
        <h2>
            <?php the_field('titre_info'); ?>
        </h2>
        <p>
            <?php the_field('sous-titre_info'); ?>
        </p>
    </div>
    <div class="video_info">
        <?php the_field('video_info'); ?>
    </div>
</section>

<!-- ==================
        A PROPOS
=======================  -->

<section class="about">
    <div class="title">
        <h2><?php the_field('titre_presentation'); ?></h2>
        <p><?php the_field('sous-titre_presentation'); ?></p>
    </div>
    <div class="container">
        <div class="video">
            <?php the_field('video_presentation'); ?>
        </div>
        <div class="content">
            <h3><?php the_field('titre_contenu'); ?></h3>
            <div>
                <?php the_field('contenu_de_la_section'); ?>
                <div>
                    <button class="button">
                        <a target="_blank" href="<?php the_field('lien_1'); ?>"><?php the_field('titre_du_lien_1'); ?></a>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </button>
                    <button class="button" id="fonctionnement">
                        <a target="_blank" href="<?php the_field('lien_2'); ?>"><?php the_field('titre_du_lien_2'); ?></a>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slideshow">
    <ul class="s-content">
        <li>
            <?php
            $image_id = get_field('caroussel_image2');
            if ($image_id) {
                echo wp_get_attachment_image($image_id, 'medium');
            }
            ?>
        </li>
        <li>
            <?php
            $image_id = get_field('caroussel_image3');
            if ($image_id) {
                echo wp_get_attachment_image($image_id, 'medium');
            }
            ?>
        </li>
        <li>
            <?php
            $image_id = get_field('caroussel_image4');
            if ($image_id) {
                echo wp_get_attachment_image($image_id, 'medium');
            }
            ?>
        </li>

</section>

<?php get_footer(); ?>