<?php $paged1 = isset( $_GET['paged1'] ) ? (int) $_GET['paged1'] : 1;
            // Custom Loop with Pagination 1
            // http://codex.wordpress.org/Class_Reference/WP_Query#Usage
            $args1 = array(
                'paged'          => $paged1,
                'posts_per_page' => 3,
            );
            $query1 = new WP_Query( $args1 ); ?>
<?php while ( $query1->have_posts() ) : $query1->the_post();?>
<section class="first-posts">
  <h1><a href="<?php the_permalink(); ?>"><span><?php the_title() ?></span></a></h1>
  <div class="featured-image">
    <?php the_post_thumbnail() ?>
  </div>
</section>
<?php endwhile;

            // http://codex.wordpress.org/Class_Reference/WP_Query#Pagination_Parameters
            $pag_args1 = array(
                'format'  => '?paged1=%#%',
                'current' => $paged1,
                'total'   => $query1->max_num_pages,
                'add_args' => array( 'paged2' => $paged2 )
            );
            echo paginate_links( $pag_args1 );
        ?>