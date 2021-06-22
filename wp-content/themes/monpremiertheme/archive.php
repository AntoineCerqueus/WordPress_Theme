<?php

/*
Template Name: Archive Post
*/

get_header();

?>
<div class="background">

    <div class="title-articles">
        <h1><?php the_field('titre'); ?></h1>
        <p class="sub-articles"> <span><?php the_field('baseline'); ?></span></p>
    </div>

    <?php
    // Définition des arguments pour définir ce que l'on souhaite récupérer
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5,
        'order' => 'DESC',
        'orderby' => 'date'

    );

    // Instanciation de la WP Query en mettant nos arguments en paramètres
    $wp_query = new WP_Query($args);

    // Lancement de la boucle personalisée
    if ($wp_query->have_posts()) :
        while ($wp_query->have_posts()) :
            $wp_query->the_post();
    ?>
    <article>
        <div class="content-image">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?>
                <p class="text">Lire l'article</p>
                <div class="overlay-color"></div>
            </a>
        </div>
        <div class="content-display">
            <p class="content-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            <p class="content-date"><?php the_time('j F Y'); ?></p>
            <p class="content-text"><?php the_excerpt(); ?></p>
            <button type="button" class=" content-button content-button-background">
                <a href="<?php the_permalink(); ?>">Lire la suite</a>
            </button>
        </div>
    </article>
    <?php
        endwhile;
    else : 
    ?>

    <h2>Il n'y a pas d'articles à afficher</h2>

    <?php
    endif;
    ?>

    <div class="button-articles">
        <div>
            <?php previous_posts_link('<span><i class="fa fa-arrow-left" aria-hidden="true"></i> Page Précédente</span>'); ?>
        </div>
        <div>
            <?php next_posts_link('<span>Page Suivante <i class="fa fa-arrow-right" aria-hidden="true"></i></span>'); ?>
        </div>
    </div>
</div>

<?php get_footer();?>