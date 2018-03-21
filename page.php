<?php
/*
Template Name: Feed
*/
?>
 <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        ... Display post content
    <?php endwhile; ?>
<?php endif; ?>
  <?php get_footer(); ?>