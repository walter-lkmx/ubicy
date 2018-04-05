<?php get_header(); ?>
<main class="main-container">
  <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <section class="featured-image">
    <?php the_post_thumbnail() ?>
  </section>
  <section class="post">
    <h1 class="post-title"><?php the_title() ?></h1>
    <section class="meta">
      <span>
        <?php the_category() ?>
      </span>
      <span>
        <?php the_author() ?>
      </span>
      <span>
        <?php the_time('F j, Y') ?>
      </span>
    </section>
    <section class="content">
      <?php the_content() ?>
      <div class="category-list"><?php the_tags('Tags <br /><p class="label-tags">', '</p> <p class="label-tags">', '</p>'); ?></p></div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
  </section>
</main>
<?php get_footer(); ?>