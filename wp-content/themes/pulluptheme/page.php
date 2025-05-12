<?php
/**
 * Template Name: Custom Page
 * Description: A custom template for special content.
 */

get_header(); // Includes the header.php template
?>

<div class="container">    <div class="container">
<div class="row">
    <h1><?php the_title(); ?></h1>
    </div>  </div>
    <div class="content-area">
    <div class="container">
    <div class="row">
        <?php
        if (have_posts()):
            while (have_posts()): the_post();
            ?>
            <div class="col col-12 col-md-6 col-lg-4">
            <?php
                the_content(); // Displays the page content
                
                ?>
                </div><?php
            endwhile;
        endif;
        ?>
    </div>  </div>
</div>
</div>

<?php get_footer(); // Includes the footer.php template ?>

<!-- <div class="container">
    <div class="row">
        <div class="col col-12 col-md-6 col-lg-4">Column 1</div>
        <div class="col col-12 col-md-6 col-lg-4">Column 2</div>
        <div class="col col-12 col-md-6 col-lg-4">Column 3</div>
        <div class="col col-12 col-md-6 col-lg-4">Column 4</div>
        <div class="col col-12 col-md-6 col-lg-4">Column 5</div>
        <div class="col col-12 col-md-6 col-lg-4">Column 6</div>
    </div>
</div> -->
