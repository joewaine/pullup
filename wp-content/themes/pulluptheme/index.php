<?php
// This is the main template file for your WordPress theme.

get_header(); // Includes the header.php template

if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        // Display the content of the post.
        the_content();
    endwhile;
else :
    echo 'No posts found';
endif;

get_footer(); // Includes the footer.php template

