<?php
defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>

<div class="custom-product-wrapper container">
    <?php while ( have_posts() ) : the_post(); ?>
        <div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>

            <div class="product-grid">
                <!-- Product Images -->
                <div class="product-image">
                    <?php do_action( 'woocommerce_before_single_product_summary' ); ?>
                </div>

                <!-- Product Content -->
                <div class="product-summary">
                    <h1 class="product-title"><?php the_title(); ?></h1>

                    <?php
                        do_action( 'woocommerce_single_product_summary' );
                        // This typically includes:
                        // - woocommerce_template_single_title
                        // - woocommerce_template_single_price
                        // - woocommerce_template_single_excerpt
                        // - woocommerce_template_single_add_to_cart
                        // - woocommerce_template_single_meta
                        // - woocommerce_template_single_sharing
                    ?>
                </div>
            </div>

            <!-- Tabs, Upsells, Related Products -->
            <div class="product-extras">
                <?php do_action( 'woocommerce_after_single_product_summary' ); ?>
            </div>

        </div>
    <?php endwhile; ?>
</div>

<?php get_footer( 'shop' ); ?>
