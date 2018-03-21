<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="header-container">
      <section class="brand">
        <a href="<?php echo home_url(); ?>"><img class="color" src="<?php bloginfo('template_url'); ?>/img/ubicy-logo-color.svg" alt="">
          <img class="blog" src="<?php bloginfo('template_url'); ?>/img/ubicy-blog.svg" alt=""></a>
      </section>
    </div>
  </header>