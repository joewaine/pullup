<?php
// This is the main template file for your WordPress theme.

get_header(); // Includes the header.php template

?>
<main>












<div class="content-area">
    <div class="container">
    <div class="row">

<?php
if ( is_page() ) {

}else{

    if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
            // Display the content of the post.
?>            
            <div class="col col-12 col-md-6 col-lg-4">
            <?php
            // the_field('artist_name');       // Text field
            // the_field('artist_bio');        // Text area
            $url = get_field('artist_slug');
            $text = get_field('artist_name');
            $image = get_field('artist_image'); // Image (url)
    
            if ($image) {
                echo '<img src="' . esc_url($image) . '" alt="' . esc_attr(get_the_title()) . '">';
            }
?>



        <a href="/artists/<?php echo esc_url($url); ?>">
                        <?php echo esc_html($text); ?>
                    </a>

  
</div>
    
<?php

endwhile;
endif;
}
?>
    


</div></div></div>

    <!-- <section id="home">
      <h1>Welcome to Our Website</h1>
      <p>This is a sample landing page with a fixed header and a responsive footer.</p>
    </section> -->




</main>





<?php

get_footer(); // Includes the footer.php template

