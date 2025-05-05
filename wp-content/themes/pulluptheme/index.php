<?php
// This is the main template file for your WordPress theme.

get_header(); // Includes the header.php template

?>
<main>

<?php
if ( is_page() ) {
    // This is a page (any page)
    ?>
page
    <?php
}else{

    if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
            // Display the content of the post.
            the_content();
    ?>
    
    <section id="home">
      <h1>Welcome to Our Website</h1>
      <p>This is a sample landing page with a fixed header and a responsive footer.</p>
    </section>


    <?php
        endwhile;
    else :
        echo 'No posts found';
    endif;
    

}
?>



</main>


<section id="about" class="section">
    <div class="container">
      <h2>About Us</h2>
      <p>We are an independent record label focused on discovering new and exciting talent in the music world.</p>
    </div>
  </section>

  <section id="artists" class="section">
    <div class="container">
      <h2>Our Artists</h2>
      <div class="artist-grid">
        <div class="artist">
          <img src="artist1.jpg" alt="Artist 1">
          <h3>Artist Name</h3>
        </div>
        <div class="artist">
          <img src="artist2.jpg" alt="Artist 2">
          <h3>Artist Name</h3>
        </div>
        <!-- Add more artists here -->
      </div>
    </div>
  </section>

  <section id="releases" class="section">
    <div class="container">
      <h2>Latest Releases</h2>
      <div class="release-grid">
        <div class="release">
          <img src="album1.jpg" alt="Album 1">
          <h3>Album Name</h3>
          <p>Release Date: January 1, 2025</p>
        </div>
        <div class="release">
          <img src="album2.jpg" alt="Album 2">
          <h3>Album Name</h3>
          <p>Release Date: February 15, 2025</p>
        </div>
        <!-- Add more releases here -->
      </div>
    </div>
  </section>

  <section id="contact" class="section">
    <div class="container">
      <h2>Contact</h2>
      <p>For inquiries, collaborations, and press, please reach out via email: <a href="mailto:contact@recordlabel.com">contact@recordlabel.com</a></p>
    </div>
  </section>



<?php

get_footer(); // Includes the footer.php template

