<?php get_header(); ?>

<main class="artist-profile">
<?php
  //if ( have_posts() ) :
    //while ( have_posts() ) : the_post();
      //the_title('<h1>', '</h1>');
      //the_content();
    //endwhile;
  //endif;
   ?>


<?php
// Artist Name
$artist_name = get_field('artist_name');
if ($artist_name) {
    echo '<h2>' . esc_html($artist_name) . '</h2>';
}

// Artist Bio
$artist_bio = get_field('artist_bio');
if ($artist_bio) {
    echo '<p>' . esc_html($artist_bio) . '</p>';
}?>
<br>
<?php
// Artist Image (Image URL)
$artist_image = get_field('artist_image');
if ($artist_image) {
    echo '<img src="' . esc_url($artist_image) . '" alt="' . esc_attr($artist_name) . '" />';
}

// Links Repeater
if (have_rows('links')) {
    echo '<ul class="artist-links">';
    while (have_rows('links')) {
        the_row();
        $link_text = get_sub_field('link_text');
        $link_url = get_sub_field('link_url');

        if ($link_text && $link_url) {
            echo '<li><a href="' . esc_url($link_url) . '" target="_blank" rel="noopener">' . esc_html($link_text) . '</a></li>';
        }
    }
    echo '</ul>';
}
?>




</main>

<?php get_footer(); ?>
