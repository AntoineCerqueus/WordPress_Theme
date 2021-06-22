<?php

/*
Template Name: Contact Page
*/

get_header();
?>

<section>
    <div><?php the_field('google_maps'); ?></div>
    <div class="container-form title">
        <h1><?php the_field('titre-1'); ?></h1>
        <p id="sub"><?php the_field('sous-titre'); ?></p>
        <?php echo do_shortcode(get_field('formulaire')); ?>
    </div>
</section>

<section>
    <div class="container">
        <div>
            <h3><?php the_field('titre-2'); ?></h3>
            <p><?php the_field('adresse'); ?></p>
            <p class="yellow"><?php the_field('champ_adresse'); ?></p>
            <p><?php the_field('telephone'); ?></p>
            <p class="yellow"><?php the_field('champ_telephone'); ?></p>
            <p><?php the_field('fax'); ?></p>
            <p class="yellow"><?php the_field('champ_fax'); ?></p>
            <p><?php the_field('email'); ?></p>
            <p class="yellow"><?php the_field('champ_email'); ?></p>
        </div>
        <div>
            <h3><?php the_field('titre_2'); ?></h3>
            <p class="yellow"><?php the_field('champ_plage_horaire'); ?></p>
        </div>
    </div>
</section>



<?php get_footer(); ?>