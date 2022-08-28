<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/style.css' ?>">
  </head>
  <body>
    <?php if((get_header_image())) : ?>
      <header class="header-site-book-store">
          <img class="header-site-book-store__background" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
          <div class="header-site-book-store__logo">
              <?php the_custom_logo(); ?>
          </div>
          <div class="header-site-book-store__menu-page">
              <nav>
              <?php
                    wp_nav_menu(
                            array(
                                    'menu' => 'menu-navegacao'
                            )
                    );
                ?>
              </nav>
          </div>
      </header>
<?php endif; ?>

  