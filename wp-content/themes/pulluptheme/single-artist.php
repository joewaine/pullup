<?php get_header(); ?>

<main class="artist-profile">
  <div class="container">
  <div class="row">
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

// Artist Bio
$artist_bio = get_field('artist_bio');
?>
<br>
<?php
// Artist Image (Image URL)
$artist_image = get_field('artist_image');
if ($artist_image) {
    echo '<img src="' . esc_url($artist_image) . '" alt="' . esc_attr($artist_name) . '" />';
}
?>
</div>
</div>
<div class="container">

<div class="row">
<div class="col col-6 col-md-12 col-lg-6 artist-left-column">
  <?php
  // <!-- // Artist Name -->
if ($artist_name) {
    echo '<h2 class="arist-name">' . esc_html($artist_name) . '</h2>';
}


// Links Repeater
if (have_rows('links')) {
    echo '<ul class="artist-links">';
    while (have_rows('links')) {
        the_row();
        $link_text = get_sub_field('link_text');
        $link_url = get_sub_field('link_url');
        $image = get_sub_field('icon');
        if ($link_text && $link_url) {
            echo '<li><a href="' . esc_url($link_url) . '" target="_blank" rel="noopener"><img class="social icon" src="' . esc_url($image) . '" alt="' . esc_html($link_text) . '"></a></li>';




          }
    }
    echo '</ul>';
}
?>
</div>
<div class="col col-6 col-md-12 col-lg-6">
<div class="arist-bio">
<?php
if ($artist_bio) {
  echo '<p>' . esc_html($artist_bio) . '</p>';
}

?>

</div>
</div>
</div>
</div>

</main>

<?php get_footer(); ?>
