<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <article class="post">
      <h1><?php the_title(); ?></h1>
      <?php the_post_thumbnail(); ?>
      <p class="post__meta">
        Publié le <?php the_date(); ?> par <?php the_author(); ?>
      </p>
      <div class="post__content">
        <?php the_content(); ?>
      </div>
    </article>

  <?php endwhile; ?>
<?php else : ?>
  <h2>Il n'y a pas d'articles à afficher</h2>
<?php endif; ?>

<div class="site__navigation">
  <button type="button" class="buttons">
    <i class="fa fa-arrow-left" aria-hidden="true"></i>
    <?php previous_post_link('%link'); ?>
  </button>

  <button type="button" class="buttons">
    <i class="fa fa-arrow-right" aria-hidden="true"></i>
    <?php next_post_link('%link'); ?>
  </button>
</div>

<?php get_footer(); ?>