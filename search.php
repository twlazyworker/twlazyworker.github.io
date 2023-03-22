<?php
/**
 * The template for displaying Search Results pages.
 * @package Automobile Car Dealer
 */
get_header(); ?>

<main id="skip_content" role="main">
    <div class="container">
        <?php
        $automobile_car_dealer_layout_option = get_theme_mod( 'automobile_car_dealer_layout_options','Right Sidebar');
        if($automobile_car_dealer_layout_option == 'One Column'){ ?>
            <div id="blog_sec" class="blog-section mt-5">
               <h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','automobile-car-dealer'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                <?php if ( have_posts() ) :
                    /* Start the Loop */          
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content',get_post_format() );           
                    endwhile;
                    else :
                        get_template_part( 'no-results' ); 
                    endif; 
                ?>
                <?php if( get_theme_mod( 'automobile_car_dealer_enable_post_pagination',true) != '') { ?>
                        <div class="navigation">
                            <?php automobile_car_dealer_pagination_type(); ?>
                        </div>
                <?php } ?>
            </div>
        <?php }else if($automobile_car_dealer_layout_option == 'Three Columns'){ ?>
            <div class="row">
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1'); ?></div>
                <div id="blog_sec" class="blog-section col-lg-6 col-md-6 mt-5">
                    <h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','automobile-car-dealer'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */          
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content',get_post_format() );           
                        endwhile;
                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <?php if( get_theme_mod( 'automobile_car_dealer_enable_post_pagination',true) != '') { ?>
                        <div class="navigation">
                            <?php automobile_car_dealer_pagination_type(); ?>
                        </div>
                    <?php } ?>
                </div>
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
            </div>
        <?php }else if($automobile_car_dealer_layout_option == 'Four Columns'){ ?>
            <div class="row">
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1'); ?></div>
                <div id="blog_sec" class="blog-section col-lg-3 col-md-3 mt-5">
                    <h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','automobile-car-dealer'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <?php if ( have_posts() ) :
                    /* Start the Loop */          
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content',get_post_format() );           
                        endwhile;
                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <?php if( get_theme_mod( 'automobile_car_dealer_enable_post_pagination',true) != '') { ?>
                        <div class="navigation">
                            <?php automobile_car_dealer_pagination_type(); ?>
                        </div>
                    <?php } ?>
                </div>
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-3'); ?></div>
            </div>
        <?php }else if($automobile_car_dealer_layout_option == 'Grid Layout'){ ?>
            <div class="row">
                <div id="blog_sec" class="blog-section col-lg-8 col-md-8 mt-5">
                   <h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','automobile-car-dealer'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <div class="row">
                        <?php if ( have_posts() ) :
                        /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/grid-layout' );
                            endwhile;
                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                    </div>
                    <?php if( get_theme_mod( 'automobile_car_dealer_enable_post_pagination',true) != '') { ?>
                        <div class="navigation">
                            <?php automobile_car_dealer_pagination_type(); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-lg-4 col-md-4"><?php get_sidebar(); ?></div>
            </div>
        <?php }else if($automobile_car_dealer_layout_option == 'Left Sidebar'){ ?>
            <div class="row">
                <div class="<?php if( get_theme_mod( 'automobile_car_dealer_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-4 col-md-4<?php } else { ?>col-lg-3 col-md-4 <?php } ?>"><?php get_sidebar(); ?></div>
                <div id="blog_sec" class="blog-section <?php if( get_theme_mod( 'automobile_car_dealer_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-8 col-md-8<?php } else { ?>col-lg-9 col-md-8 <?php } ?> mt-5">
                    <h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','automobile-car-dealer'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content',get_post_format() );
                        endwhile;
                        else :
                            get_template_part( 'no-results' );
                        endif; 
                    ?>
                    <?php if( get_theme_mod( 'automobile_car_dealer_enable_post_pagination',true) != '') { ?>
                        <div class="navigation">
                            <?php automobile_car_dealer_pagination_type(); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php }else if($automobile_car_dealer_layout_option == 'Right Sidebar'){ ?>
            <div class="row">
                <div id="blog_sec" class="blog-section <?php if( get_theme_mod( 'automobile_car_dealer_sidebar_size_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-8 col-md-8<?php } else { ?>col-lg-9 col-md-8 <?php } ?> mt-5">
                   <h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','automobile-car-dealer'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content',get_post_format() );
                        endwhile;
                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <?php if( get_theme_mod( 'automobile_car_dealer_enable_post_pagination',true) != '') { ?>
                        <div class="navigation">
                            <?php automobile_car_dealer_pagination_type(); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="<?php if( get_theme_mod( 'automobile_car_dealer_sidebar_size_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-4 col-md-4<?php } else { ?>col-lg-3 col-md-4 <?php } ?>"><?php get_sidebar(); ?></div>
            </div>
        <?php }else {?>
            <div class="row">
                <div id="blog_sec" class="blog-section <?php if( get_theme_mod( 'automobile_car_dealer_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-8 col-md-8<?php } else { ?>col-lg-9 col-md-8 <?php } ?> mt-5">
                   <h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','automobile-car-dealer'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content',get_post_format() );
                        endwhile;
                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <?php if( get_theme_mod( 'automobile_car_dealer_enable_post_pagination',true) != '') { ?>
                        <div class="navigation">
                            <?php automobile_car_dealer_pagination_type(); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="<?php if( get_theme_mod( 'automobile_car_dealer_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-4 col-md-4<?php } else { ?>col-lg-3 col-md-4 <?php } ?>"><?php get_sidebar(); ?></div>
            </div>
        <?php }?>
    </div>
</main>
<div class="clearfix"></div>

<?php get_footer(); ?>