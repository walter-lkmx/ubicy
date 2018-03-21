<?php get_header(); ?>
<main class="main-container">
    <section class="title-archive">
      <?php if (is_category()) { ?>
      <h2><span class="marker"><?php single_cat_title(); ?></span></h2>
      <?php } elseif (is_tag()) { ?>
      <?php single_tag_title(); ?>
      <?php } elseif (is_author()) { ?>
      <?php get_the_author_meta('display_name'); ?>
      <?php } elseif (is_day()) { ?>
      <?php the_time('l, F j, Y'); ?>
      <?php } elseif (is_month()) { ?>
      <?php the_time('F Y'); ?>
      <?php } elseif (is_year()) { ?>
      <?php the_time('Y'); ?>
      <?php } ?>
    </section>
  <section class="container-posts">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <section class="post">
      <div class="content">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
        <section class="excerpt">
          <?php echo get_excerpt() ?>
        </section>
        <section class="meta">
          <div class="author">
            <?php the_author() ?>
          </div>
          <div class="date-category">
            <span><?php the_time('F j, Y') ?></span>
            <img src="<?php bloginfo('template_url'); ?>/img/archive.svg">
            <?php the_category() ?>
          </div>
        </section>
      </div>
      <div class="featured-image">
        <?php the_post_thumbnail() ?>
      </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
  </section>
  <aside class="sidebar">
    <?php include('ui-layout/sidebar/sidebar-container.php'); ?>
  </aside>
</main>
<?php get_footer(); ?>