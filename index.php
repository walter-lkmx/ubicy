<?php get_header();?>
<main class="main-container">
  <nav class="featured-categories">
    <a href="<?php echo home_url(); ?>/secciones/bienes-raices">Bienes Raíces</a>
    <a href="<?php echo home_url(); ?>/secciones/noticias">Noticias</a>
    <a href="<?php echo home_url(); ?>/secciones/tips">Tips</a>
  </nav>
  <?php include 'ui-layout/featured-content.php';?>
  <section class="container-posts">
    <?php rewind_posts();?>
    <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post();?>
      <section class="post">
      <div class="featured-image">
          <a href="<?php the_permalink();?>"><?php the_post_thumbnail()?></a>
          </div>
        <div class="content">
          <h1><a href="<?php the_permalink();?>"><?php the_title()?></a></h1>
          <div class="featured-image-mobile">
            <?php the_post_thumbnail()?>
          </div>
          <section class="excerpt">
            <?php echo get_excerpt() ?>
          </section>
          <section class="meta">
            <div class="author">
              <?php the_author()?>
            </div>
            <div class="date-category">
              <span><?php the_time('F j, Y')?></span>
              <img src="<?php bloginfo('template_url');?>/img/archive.svg">
              <?php the_category()?>
            </div>
          </section>
        </div>
      </section>
      <?php endwhile;?>
    <section class="pagination">
      <div class="nav-previous alignright">
        <?php next_posts_link('<div class="arrow-prev">Posts anteriores</div>');?>
      </div>
      <div class="nav-next alignleft">
        <?php previous_posts_link('<div class="arrow-next">Posts recientes</div>');?>
      </div>
      <?php else: ?>
      <p>
        <?php _e('Sorry, no posts matched your criteria.');?>
      </p>
      <?php endif;?>
    </section>
  </section>
  <aside class="sidebar">
    <?php include 'ui-layout/sidebar/sidebar-container.php';?>
  </aside>
</main>
<?php get_footer();?>