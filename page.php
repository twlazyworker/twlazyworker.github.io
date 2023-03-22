<?php
/**
 * The template for displaying all pages.
 * @package Automobile Car Dealer
 */

get_header(); ?>

<main id="skip_content" class="content_box py-4 px-0" role="main">
    <?php do_action( 'automobile_car_dealer_page_top' ); ?>
    <div class="container background-img-skin">
        <div class="main-wrapper my-3">
          <?php if (get_theme_mod('automobile_car_dealer_single_page_breadcrumb',true) != ''){ ?>
                <div class="bradcrumbs">
                         <?php automobile_car_dealer_the_breadcrumb(); ?>
                 </div>
         <?php }?>
            <?php while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php if(has_post_thumbnail()) { ?>
                <div class="feature-box">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php } ?>
            <div class="new-text"><?php the_content(); ?></div>
            <?php
                wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'automobile-car-dealer' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'automobile-car-dealer' ) . ' </span>%',
                    'separator'   => '<span class="screen-reader-text">, </span>',
                ) );
            ?>
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || '0' != get_comments_number() ) {
                comments_template();
            }
            ?>
            <?php endwhile; // end of the loop. ?>
            <div class="clear"></div>
        </div>
    </div>
    <?php do_action( 'automobile_car_dealer_page_bottom' ); ?>
</main>

<?php get_footer(); ?>
