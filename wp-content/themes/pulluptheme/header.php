<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); // Hook for scripts, styles, etc. ?>
</head>
<body <?php body_class(); ?>>


<header>
    <div class="container">
    
<nav class="navbar">
    <div class="logo">
    
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Site Logo">

</a>

    </div>
    <div class="menu-toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <ul class="nav-links" id="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>

<!-- <nav>
        <ul>
          <li><a href="#about">About</a></li>
          <li><a href="#artists">Artists</a></li>
          <li><a href="#releases">Releases</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav> -->
    </div>
  </header>




