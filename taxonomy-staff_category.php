<?php get_template_part('templates/page', 'header'); ?>

<hr>

<?php while (have_posts()) : the_post(); ?>

<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="entry-summary">
  <?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
    <?php the_post_thumbnail('thumbnail'); ?>
    </a>
  <?php endif; ?>
    <?php //the_excerpt(); ?>
    <?php //get_template_part('templates/entry-meta'); ?>
  </div>
  <hr>
</article>

<?php endwhile; ?>
