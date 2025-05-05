<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); // Hook for scripts, styles, etc. ?>
</head>
<body <?php body_class(); ?>>
    <!-- <header> -->


        <!-- <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        <p><?php bloginfo( 'description' ); ?></p> -->
    <!-- </header> -->


    <header class="header">
    <div class="logo">

  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Site Logo">
  </a>


    </div>
    <nav class="nav">
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>




