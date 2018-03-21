<nav class="featured">
  <h2 class="title">Te recomendamos leer</h2>
  <ol>
    <?php rewind_posts(); ?>
    <?php query_posts('tag=destacada'); ?>
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <li>
      <a href="<?php the_permalink(); ?>">
        <?php the_title() ?>
      </a>
    </li>
    <?php endwhile; ?>
    <?php endif; ?>
  </ol>
</nav>