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



<?php

get_footer(); // Includes the footer.php template

