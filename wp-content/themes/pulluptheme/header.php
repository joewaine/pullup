<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); // Hook for scripts, styles, etc. ?>


    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  </head>
<body <?php body_class(); ?>>


<header>



    <div class="container">
    
<nav class="navbar">

    <div class="logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">


</a>


        <!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Site Logo">

</a> -->

    </div>
    <div class="menu-toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <!-- <h1 style="color:black">sss</h1> -->
    <?php if (have_rows('navigation_links', 'option')) : ?>
      <!-- <div class="menu-toggle" id="mobile-menu"> -->
        <!-- <nav> -->
    <ul class="nav-links" id="nav-links">
            <?php while (have_rows('navigation_links', 'option')) : the_row(); 
                $text = get_sub_field('link_text');
                $url = get_sub_field('link_url');
                ?>
                <li>
                    <a href="<?php echo esc_url($url); ?>">
                        <?php echo esc_html($text); ?>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    <!-- </nav> -->
    <!-- </div> -->
<?php endif; ?>




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




