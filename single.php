<?php
/**
 * The Template for displaying all single posts.
 * @package Automobile Car Dealer
 */
get_header(); ?>

<main id="skip_content" role="main">
	<div class="container">
	    <div class="main-wrapper my-3">
	    	<?php
            $automobile_car_dealer_layout_option = get_theme_mod( 'automobile_car_dealer_layout_options','Right Sidebar');
            if($automobile_car_dealer_layout_option == 'One Column'){ ?>
				<div class="content_box py-4 px-0">
					<?php if (get_theme_mod('automobile_car_dealer_single_post_bradcrumb',false) != ''){ ?>
						<div class="bradcrumbs">
							<?php automobile_car_dealer_the_breadcrumb(); ?>
						</div>
					<?php }?>
					<?php while ( have_posts() ) : the_post();
						get_template_part('template-parts/single-post');
		            endwhile; // end of the loop. ?>
		       	</div>
		    <?php }else if($automobile_car_dealer_layout_option == 'Three Columns'){ ?>
		    	<div class="row">
					<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
					<div class="col-lg-6 col-md-6">
						<div class="content_box py-4 px-0">
							<?php if (get_theme_mod('automobile_car_dealer_single_post_bradcrumb',false) != ''){ ?>
								<div class="bradcrumbs">
									<?php automobile_car_dealer_the_breadcrumb(); ?>
								</div>
							<?php }?>
							<?php while ( have_posts() ) : the_post();
								get_template_part('template-parts/single-post');
			            	endwhile; // end of the loop. ?>
			            </div>
			       	</div>
					<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
				</div>
			<?php }else if($automobile_car_dealer_layout_option == 'Four Columns'){ ?>
				<div class="row">
					<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
					<div class="col-lg-3 col-md-3">
						<div class="content_box py-4 px-0">
							<?php if (get_theme_mod('automobile_car_dealer_single_post_bradcrumb',false) != ''){ ?>
					          	<div class="bradcrumbs">
									<?php automobile_car_dealer_the_breadcrumb(); ?>
								</div>
							<?php }?>
							<?php while ( have_posts() ) : the_post();
								get_template_part('template-parts/single-post');
				            endwhile; // end of the loop. ?>
				        </div>
			       	</div>
					<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
					<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
				</div>
			<?php }else if($automobile_car_dealer_layout_option == 'Grid Layout'){ ?>
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<div class="content_box py-4 px-0">
						   	<?php if (get_theme_mod('automobile_car_dealer_single_post_bradcrumb',false) != ''){ ?>
						        <div class="bradcrumbs">
					             	<?php automobile_car_dealer_the_breadcrumb(); ?>
					        	</div>
				         	<?php }?>
							<?php while ( have_posts() ) : the_post();
								get_template_part('template-parts/single-post');
				            endwhile; // end of the loop. ?>
				        </div>
			       	</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-2'); ?></div>
				</div>
		    <?php }else if($automobile_car_dealer_layout_option == 'Left Sidebar'){ ?>
		   		<div class="row">
		    		<div id="sidebar" class="<?php if( get_theme_mod( 'automobile_car_dealer_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-4 col-md-4"<?php } else { ?>col-lg-3 col-md-4 <?php } ?>"><?php dynamic_sidebar('sidebar-1'); ?></div>
					<div class="<?php if( get_theme_mod( 'automobile_car_dealer_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-8 col-md-8"<?php } else { ?>col-lg-9 col-md-8 <?php } ?>">
						<div class="content_box py-4 px-0">
							<?php if (get_theme_mod('automobile_car_dealer_single_post_bradcrumb',false) != ''){ ?>
						      	<div class="bradcrumbs">
									<?php automobile_car_dealer_the_breadcrumb(); ?>
								</div>
							<?php }?>
							<?php while ( have_posts() ) : the_post();
								get_template_part('template-parts/single-post');
				            endwhile; // end of the loop. ?>
				        </div>
			       	</div>
			    </div>
		    <?php }else if($automobile_car_dealer_layout_option == 'Right Sidebar'){ ?>
		    	<div class="row">
			       	<div class="<?php if( get_theme_mod( 'automobile_car_dealer_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-8 col-md-8"<?php } else { ?>col-lg-9 col-md-8 <?php } ?>">
			       		<div class="content_box py-4 px-0">
							<?php if (get_theme_mod('automobile_car_dealer_single_post_bradcrumb',false) != ''){ ?>
			            		<div class="bradcrumbs">
					                <?php automobile_car_dealer_the_breadcrumb(); ?>
			             		</div>
				          	<?php }?>
							<?php while ( have_posts() ) : the_post();
								get_template_part('template-parts/single-post');
				            endwhile; // end of the loop. ?>
				        </div>
			       	</div>
					<div id="sidebar" class="<?php if( get_theme_mod( 'automobile_car_dealer_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-4 col-md-4"<?php } else { ?>col-lg-3 col-md-4 <?php } ?>"><?php dynamic_sidebar('sidebar-1'); ?></div>
				</div>
			<?php }else {?>
				<div class="row">
			       	<div class="<?php if( get_theme_mod( 'automobile_car_dealer_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-8 col-md-8"<?php } else { ?>col-lg-9 col-md-8 <?php } ?>">
			       		<div class="content_box py-4 px-0">
							<?php if (get_theme_mod('automobile_car_dealer_single_post_bradcrumb',false) != ''){ ?>
				            	<div class="bradcrumbs">
				                	<?php automobile_car_dealer_the_breadcrumb(); ?>
					            </div>
				           	<?php }?>
					   		<?php while ( have_posts() ) : the_post();
								get_template_part('template-parts/single-post');
				            endwhile; // end of the loop. ?>
				        </div>
			       	</div>
					<div id="sidebar" class="<?php if( get_theme_mod( 'automobile_car_dealer_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-4 col-md-4"<?php } else { ?>col-lg-3 col-md-4 <?php } ?>"><?php dynamic_sidebar('sidebar-1'); ?></div>
				</div>
			<?php }?>
		    <div class="clearfix"></div>
	    </div>
	</div>
</main>

<?php get_footer(); ?>
