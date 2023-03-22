<?php

	$automobile_car_dealer_first_color = get_theme_mod('automobile_car_dealer_first_color');

	$automobile_car_dealer_custom_css ='';

	/*----------- Global First Color -----------*/
	$automobile_car_dealer_custom_css .='input[type="submit"]:hover, #sidebar button, .slide-button i, .appointbtn, .primary-navigation ul ul a:hover, .primary-navigation ul ul a:focus, .postbtn i, .blog-section .section-title a:after, .page-content .read-moresec a.button:hover, #comments input[type="submit"].submit:hover, #comments a.comment-reply-link, #sidebar h3:after, #sidebar input[type="submit"]:hover, #sidebar .tagcloud a, .widget_calendar tbody a, .footer-wp h3:after, .footer-wp input[type="submit"], .footer-wp .tagcloud a:hover , .pagination a:hover, .pagination .current, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, #navbar-header .socialbox, #navbar-header .socialbox, #scrollbutton i, #sidebar button, .footer-wp button, .tags a:hover, .metabox .fa-calendar-alt:before, .metabox .fa-user:before, .metabox .fa-comments:before, .metabox .fa-clock:before, #sidebar ul li:before, .metabox i:before, #sidebar button:hover, .copyright-wrapper, .navigation.posts-navigation a{';
			$automobile_car_dealer_custom_css .='background-color: '.esc_attr($automobile_car_dealer_first_color).';';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_custom_css .='a, #header .socialbox i:hover, .metabox a:hover, .postbtn a, .nav-previous a ,.nav-next a, p.logged-in-as a, nav.navigation.post-navigation a:hover, #sidebar ul li a:hover, .footer-wp li a:hover, h2.entry-title, h2.page-title, #project i, .woocommerce-message::before, .woocommerce-info a, td.product-name a, a.shipping-calculator-button, span.posted_in a, code, .primary-navigation a:hover, .topbar a:hover, #comments p a:hover, .entry-content a{';
			$automobile_car_dealer_custom_css .='color: '.esc_attr($automobile_car_dealer_first_color).';';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_custom_css .='.page-content .read-moresec a.button:hover, #scrollbutton i{';
			$automobile_car_dealer_custom_css .='border-color: '.esc_attr($automobile_car_dealer_first_color).';';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_custom_css .='.woocommerce-message{';
		$automobile_car_dealer_custom_css .='border-top-color: '.esc_attr($automobile_car_dealer_first_color).';';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_custom_css .='#scrollbutton i{';
		$automobile_car_dealer_custom_css .='box-shadow: inset 0px 0px 0px '.esc_attr($automobile_car_dealer_first_color).', 0px 5px 0px 0px #871c1c, 0px 5px 4px #000;';
	$automobile_car_dealer_custom_css .='}';

	/*---------------------------Width Layout -------------------*/
	$automobile_car_dealer_theme_lay = get_theme_mod( 'automobile_car_dealer_width_layout_options','Default');
    if($automobile_car_dealer_theme_lay == 'Default'){
		$automobile_car_dealer_custom_css .='body{';
			$automobile_car_dealer_custom_css .='max-width: 100%;';
		$automobile_car_dealer_custom_css .='}';
	}else if($automobile_car_dealer_theme_lay == 'Container Layout'){
		$automobile_car_dealer_custom_css .='body{';
			$automobile_car_dealer_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$automobile_car_dealer_custom_css .='}';
		$automobile_car_dealer_custom_css .='.page-template-custom-home-page header{';
			$automobile_car_dealer_custom_css .='position: relative;';
		$automobile_car_dealer_custom_css .='}';
	}else if($automobile_car_dealer_theme_lay == 'Box Layout'){
		$automobile_car_dealer_custom_css .='body{';
			$automobile_car_dealer_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$automobile_car_dealer_custom_css .='}';
		$automobile_car_dealer_custom_css .='.page-template-custom-home-page header{';
			$automobile_car_dealer_custom_css .='position: relative;';
		$automobile_car_dealer_custom_css .='}';
		$automobile_car_dealer_custom_css .='.page-template-custom-home-page #header{';
			$automobile_car_dealer_custom_css .='left: 15px; width: 97.3%;';
		$automobile_car_dealer_custom_css .='}';
		$automobile_car_dealer_custom_css .='
		@media screen and (max-width:768px){
			.page-template-custom-home-page #header{';
				$automobile_car_dealer_custom_css .=' width: 100%;';
		$automobile_car_dealer_custom_css .='} }';
	}

	/*----------Slider Content Layout --------------*/
	$automobile_car_dealer_theme_lay = get_theme_mod( 'automobile_car_dealer_slider_content_layout','Center');
    if($automobile_car_dealer_theme_lay == 'Left'){
		$automobile_car_dealer_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, .slide-button {';
			$automobile_car_dealer_custom_css .='text-align:left; ';
		$automobile_car_dealer_custom_css .='}';
	}else if($automobile_car_dealer_theme_lay == 'Center'){
		$automobile_car_dealer_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, .slide-button {';
			$automobile_car_dealer_custom_css .='text-align:center; ';
		$automobile_car_dealer_custom_css .='}';
	}else if($automobile_car_dealer_theme_lay == 'Right'){
		$automobile_car_dealer_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, .slide-button {';
			$automobile_car_dealer_custom_css .='text-align:right; ';
		$automobile_car_dealer_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$automobile_car_dealer_theme_lay = get_theme_mod( 'automobile_car_dealer_slider_opacity','0.7');
	if($automobile_car_dealer_theme_lay == '0'){
		$automobile_car_dealer_custom_css .='#slider img{';
			$automobile_car_dealer_custom_css .='opacity:0';
		$automobile_car_dealer_custom_css .='}';
		}else if($automobile_car_dealer_theme_lay == '0.1'){
		$automobile_car_dealer_custom_css .='#slider img{';
			$automobile_car_dealer_custom_css .='opacity:0.1';
		$automobile_car_dealer_custom_css .='}';
		}else if($automobile_car_dealer_theme_lay == '0.2'){
		$automobile_car_dealer_custom_css .='#slider img{';
			$automobile_car_dealer_custom_css .='opacity:0.2';
		$automobile_car_dealer_custom_css .='}';
		}else if($automobile_car_dealer_theme_lay == '0.3'){
		$automobile_car_dealer_custom_css .='#slider img{';
			$automobile_car_dealer_custom_css .='opacity:0.3';
		$automobile_car_dealer_custom_css .='}';
		}else if($automobile_car_dealer_theme_lay == '0.4'){
		$automobile_car_dealer_custom_css .='#slider img{';
			$automobile_car_dealer_custom_css .='opacity:0.4';
		$automobile_car_dealer_custom_css .='}';
		}else if($automobile_car_dealer_theme_lay == '0.5'){
		$automobile_car_dealer_custom_css .='#slider img{';
			$automobile_car_dealer_custom_css .='opacity:0.5';
		$automobile_car_dealer_custom_css .='}';
		}else if($automobile_car_dealer_theme_lay == '0.6'){
		$automobile_car_dealer_custom_css .='#slider img{';
			$automobile_car_dealer_custom_css .='opacity:0.6';
		$automobile_car_dealer_custom_css .='}';
		}else if($automobile_car_dealer_theme_lay == '0.7'){
		$automobile_car_dealer_custom_css .='#slider img{';
			$automobile_car_dealer_custom_css .='opacity:0.7';
		$automobile_car_dealer_custom_css .='}';
		}else if($automobile_car_dealer_theme_lay == '0.8'){
		$automobile_car_dealer_custom_css .='#slider img{';
			$automobile_car_dealer_custom_css .='opacity:0.8';
		$automobile_car_dealer_custom_css .='}';
		}else if($automobile_car_dealer_theme_lay == '0.9'){
		$automobile_car_dealer_custom_css .='#slider img{';
			$automobile_car_dealer_custom_css .='opacity:0.9';
		$automobile_car_dealer_custom_css .='}';
	}

	/*-------------- Woocommerce Button  -------------------*/
	$automobile_car_dealer_woocommerce_button_padding_top = get_theme_mod('automobile_car_dealer_woocommerce_button_padding_top');
	$automobile_car_dealer_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$automobile_car_dealer_custom_css .='padding-top: '.esc_attr($automobile_car_dealer_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($automobile_car_dealer_woocommerce_button_padding_top).'px;';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_woocommerce_button_padding_right = get_theme_mod('automobile_car_dealer_woocommerce_button_padding_right');
	$automobile_car_dealer_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$automobile_car_dealer_custom_css .='padding-left: '.esc_attr($automobile_car_dealer_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($automobile_car_dealer_woocommerce_button_padding_right).'px;';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_woocommerce_button_border_radius = get_theme_mod('automobile_car_dealer_woocommerce_button_border_radius');
	$automobile_car_dealer_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$automobile_car_dealer_custom_css .='border-radius: '.esc_attr($automobile_car_dealer_woocommerce_button_border_radius).'px;';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_related_product_enable = get_theme_mod('automobile_car_dealer_related_product_enable',true);
	if($automobile_car_dealer_related_product_enable == false){
		$automobile_car_dealer_custom_css .='.related.products{';
			$automobile_car_dealer_custom_css .='display: none;';
		$automobile_car_dealer_custom_css .='}';
	}

	$automobile_car_dealer_woocommerce_product_border_enable = get_theme_mod('automobile_car_dealer_woocommerce_product_border_enable',true);
	if($automobile_car_dealer_woocommerce_product_border_enable == false){
		$automobile_car_dealer_custom_css .='.products li{';
			$automobile_car_dealer_custom_css .='border: none;';
		$automobile_car_dealer_custom_css .='}';
	}

	$automobile_car_dealer_woocommerce_product_padding_top = get_theme_mod('automobile_car_dealer_woocommerce_product_padding_top',10);
	$automobile_car_dealer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$automobile_car_dealer_custom_css .='padding-top: '.esc_attr($automobile_car_dealer_woocommerce_product_padding_top).'px; padding-bottom: '.esc_attr($automobile_car_dealer_woocommerce_product_padding_top).'px;';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_woocommerce_product_padding_right = get_theme_mod('automobile_car_dealer_woocommerce_product_padding_right',10);
	$automobile_car_dealer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$automobile_car_dealer_custom_css .='padding-left: '.esc_attr($automobile_car_dealer_woocommerce_product_padding_right).'px; padding-right: '.esc_attr($automobile_car_dealer_woocommerce_product_padding_right).'px;';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_woocommerce_product_border_radius = get_theme_mod('automobile_car_dealer_woocommerce_product_border_radius');
	$automobile_car_dealer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$automobile_car_dealer_custom_css .='border-radius: '.esc_attr($automobile_car_dealer_woocommerce_product_border_radius).'px;';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_woocommerce_product_box_shadow = get_theme_mod('automobile_car_dealer_woocommerce_product_box_shadow');
	$automobile_car_dealer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$automobile_car_dealer_custom_css .='box-shadow: '.esc_attr($automobile_car_dealer_woocommerce_product_box_shadow).'px '.esc_attr($automobile_car_dealer_woocommerce_product_box_shadow).'px '.esc_attr($automobile_car_dealer_woocommerce_product_box_shadow).'px #eee;';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_woo_product_sale_top_bottom_padding = get_theme_mod('automobile_car_dealer_woo_product_sale_top_bottom_padding', 0);
	$automobile_car_dealer_woo_product_sale_left_right_padding = get_theme_mod('automobile_car_dealer_woo_product_sale_left_right_padding', 0);
	$automobile_car_dealer_custom_css .='.woocommerce span.onsale{';
		$automobile_car_dealer_custom_css .='padding-top: '.esc_attr($automobile_car_dealer_woo_product_sale_top_bottom_padding).'px; padding-bottom: '.esc_attr($automobile_car_dealer_woo_product_sale_top_bottom_padding).'px; padding-left: '.esc_attr($automobile_car_dealer_woo_product_sale_left_right_padding).'px; padding-right: '.esc_attr($automobile_car_dealer_woo_product_sale_left_right_padding).'px; display:inline-block;';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_woo_product_sale_border_radius = get_theme_mod('automobile_car_dealer_woo_product_sale_border_radius',100);
	$automobile_car_dealer_custom_css .='.woocommerce span.onsale {';
		$automobile_car_dealer_custom_css .='border-radius: '.esc_attr($automobile_car_dealer_woo_product_sale_border_radius).'%;';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_wooproduct_sale_font_size = get_theme_mod('automobile_car_dealer_wooproduct_sale_font_size',14);
	$automobile_car_dealer_custom_css .='.woocommerce span.onsale{';
		$automobile_car_dealer_custom_css .='font-size: '.esc_attr($automobile_car_dealer_wooproduct_sale_font_size).'px;';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_woo_product_sale_position = get_theme_mod('automobile_car_dealer_woo_product_sale_position', 'Right');
	if($automobile_car_dealer_woo_product_sale_position == 'Right' ){
		$automobile_car_dealer_custom_css .='.woocommerce ul.products li.product .onsale{';
			$automobile_car_dealer_custom_css .=' left:auto; right:0;';
		$automobile_car_dealer_custom_css .='}';
	}elseif($automobile_car_dealer_woo_product_sale_position == 'Left' ){
		$automobile_car_dealer_custom_css .='.woocommerce ul.products li.product .onsale{';
			$automobile_car_dealer_custom_css .=' left:0; right:auto;';
		$automobile_car_dealer_custom_css .='}';
	}

	// footer setting
	$automobile_car_dealer_footer_bg_color = get_theme_mod('automobile_car_dealer_footer_bg_color');
	$automobile_car_dealer_custom_css .='.footer-wp{';
		$automobile_car_dealer_custom_css .='background-color: '.esc_attr($automobile_car_dealer_footer_bg_color).';';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_footer_bg_image = get_theme_mod('automobile_car_dealer_footer_bg_image');
	if($automobile_car_dealer_footer_bg_image != false){
		$automobile_car_dealer_custom_css .='.footer-wp{';
			$automobile_car_dealer_custom_css .='background: url('.esc_attr($automobile_car_dealer_footer_bg_image).');';
		$automobile_car_dealer_custom_css .='}';
	}

	/*------------- Back to Top  -------------------*/
	$automobile_car_dealer_back_to_top_border_radius = get_theme_mod('automobile_car_dealer_back_to_top_border_radius');
	$automobile_car_dealer_custom_css .='#scrollbutton i{';
		$automobile_car_dealer_custom_css .='border-radius: '.esc_attr($automobile_car_dealer_back_to_top_border_radius).'px;';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_scroll_icon_font_size = get_theme_mod('automobile_car_dealer_scroll_icon_font_size', 22);
	$automobile_car_dealer_custom_css .='#scrollbutton i{';
		$automobile_car_dealer_custom_css .='font-size: '.esc_attr($automobile_car_dealer_scroll_icon_font_size).'px;';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_top_bottom_scroll_padding = get_theme_mod('automobile_car_dealer_top_bottom_scroll_padding', 12);
	$automobile_car_dealer_custom_css .='#scrollbutton i{';
		$automobile_car_dealer_custom_css .='padding-top: '.esc_attr($automobile_car_dealer_top_bottom_scroll_padding).'px; padding-bottom: '.esc_attr($automobile_car_dealer_top_bottom_scroll_padding).'px;';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_left_right_scroll_padding = get_theme_mod('automobile_car_dealer_left_right_scroll_padding', 17);
	$automobile_car_dealer_custom_css .='#scrollbutton i{';
		$automobile_car_dealer_custom_css .='padding-left: '.esc_attr($automobile_car_dealer_left_right_scroll_padding).'px; padding-right: '.esc_attr($automobile_car_dealer_left_right_scroll_padding).'px;';
	$automobile_car_dealer_custom_css .='}';

	/*----------- Preloader Color Option  ----------------*/
	$automobile_car_dealer_preloader_bg_color_option = get_theme_mod('automobile_car_dealer_preloader_bg_color_option');
	$automobile_car_dealer_preloader_icon_color_option = get_theme_mod('automobile_car_dealer_preloader_icon_color_option');
	$automobile_car_dealer_custom_css .='.frame{';
		$automobile_car_dealer_custom_css .='background-color: '.esc_attr($automobile_car_dealer_preloader_bg_color_option).';';
	$automobile_car_dealer_custom_css .='}';
	$automobile_car_dealer_custom_css .='.dot-1,.dot-2,.dot-3{';
		$automobile_car_dealer_custom_css .='background-color: '.esc_attr($automobile_car_dealer_preloader_icon_color_option).';';
	$automobile_car_dealer_custom_css .='}';

	// preloader type
	$automobile_car_dealer_theme_lay = get_theme_mod( 'automobile_car_dealer_preloader_type','First Preloader Type');
    if($automobile_car_dealer_theme_lay == 'First Preloader Type'){
		$automobile_car_dealer_custom_css .='.dot-1, .dot-2, .dot-3{';
			$automobile_car_dealer_custom_css .='';
		$automobile_car_dealer_custom_css .='}';
	}else if($automobile_car_dealer_theme_lay == 'Second Preloader Type'){
		$automobile_car_dealer_custom_css .='.dot-1, .dot-2, .dot-3{';
			$automobile_car_dealer_custom_css .='border-radius:0;';
		$automobile_car_dealer_custom_css .='}';
	}

	// menu settings
	$automobile_car_dealer_menu_font_size_option = get_theme_mod('automobile_car_dealer_menu_font_size_option', 12);
	$automobile_car_dealer_custom_css .='.primary-navigation a{';
		$automobile_car_dealer_custom_css .='font-size: '.esc_attr($automobile_car_dealer_menu_font_size_option).'px;';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_menu_padding = get_theme_mod('automobile_car_dealer_menu_padding');
	$automobile_car_dealer_custom_css .='.primary-navigation a, .primary-navigation ul li a{';
		$automobile_car_dealer_custom_css .='padding: '.esc_attr($automobile_car_dealer_menu_padding).'px;';
	$automobile_car_dealer_custom_css .='}';

	// Responsive Media
	$automobile_car_dealer_slider = get_theme_mod( 'automobile_car_dealer_display_slider',false);
	if($automobile_car_dealer_slider == true && get_theme_mod( 'automobile_car_dealer_slider_hide', false) == false){
    	$automobile_car_dealer_custom_css .='#slider{';
			$automobile_car_dealer_custom_css .='display:none;';
		$automobile_car_dealer_custom_css .='} ';
	}
    if($automobile_car_dealer_slider == true){
    	$automobile_car_dealer_custom_css .='@media screen and (max-width:575px) {';
		$automobile_car_dealer_custom_css .='#slider{';
			$automobile_car_dealer_custom_css .='display:block;';
		$automobile_car_dealer_custom_css .='} }';
	}else if($automobile_car_dealer_slider == false){
		$automobile_car_dealer_custom_css .='@media screen and (max-width:575px){';
		$automobile_car_dealer_custom_css .='#slider{';
			$automobile_car_dealer_custom_css .='display:none;';
		$automobile_car_dealer_custom_css .='} }';
	}

	$automobile_car_dealer_sliderbutton = get_theme_mod( 'automobile_car_dealer_display_slider_button',true);
	if($automobile_car_dealer_sliderbutton == true && get_theme_mod( 'automobile_car_dealer_show_slider_button',true) != true){
    	$automobile_car_dealer_custom_css .='.slide-button{';
			$automobile_car_dealer_custom_css .='display:none;';
		$automobile_car_dealer_custom_css .='} ';
	}
    if($automobile_car_dealer_sliderbutton == true){
    	$automobile_car_dealer_custom_css .='@media screen and (max-width:575px) {';
		$automobile_car_dealer_custom_css .='.slide-button{';
			$automobile_car_dealer_custom_css .='display:block;';
		$automobile_car_dealer_custom_css .='} }';
	}else if($automobile_car_dealer_sliderbutton == false){
		$automobile_car_dealer_custom_css .='@media screen and (max-width:575px){';
		$automobile_car_dealer_custom_css .='.slide-button{';
			$automobile_car_dealer_custom_css .='display:none;';
		$automobile_car_dealer_custom_css .='} }';
	}

	$automobile_car_dealer_sidebar = get_theme_mod( 'automobile_car_dealer_display_sidebar',true);
    if($automobile_car_dealer_sidebar == true){
    	$automobile_car_dealer_custom_css .='@media screen and (max-width:575px) {';
		$automobile_car_dealer_custom_css .='#sidebar{';
			$automobile_car_dealer_custom_css .='display:block;';
		$automobile_car_dealer_custom_css .='} }';
	}else if($automobile_car_dealer_sidebar == false){
		$automobile_car_dealer_custom_css .='@media screen and (max-width:575px) {';
		$automobile_car_dealer_custom_css .='#sidebar{';
			$automobile_car_dealer_custom_css .='display:none;';
		$automobile_car_dealer_custom_css .='} }';
	}

	$automobile_car_dealer_scroll = get_theme_mod( 'automobile_car_dealer_display_scrolltop', true);
	if($automobile_car_dealer_scroll == true && get_theme_mod( 'automobile_car_dealer_hide_show_scroll',true) != true){
    	$automobile_car_dealer_custom_css .='#scrollbutton i{';
			$automobile_car_dealer_custom_css .='display:none;';
		$automobile_car_dealer_custom_css .='} ';
	}
    if($automobile_car_dealer_scroll == true){
    	$automobile_car_dealer_custom_css .='@media screen and (max-width:575px) {';
		$automobile_car_dealer_custom_css .='#scrollbutton i{';
			$automobile_car_dealer_custom_css .='display:block;';
		$automobile_car_dealer_custom_css .='} }';
	}else if($automobile_car_dealer_scroll == false){
		$automobile_car_dealer_custom_css .='@media screen and (max-width:575px){';
		$automobile_car_dealer_custom_css .='#scrollbutton i{';
			$automobile_car_dealer_custom_css .='display:none;';
		$automobile_car_dealer_custom_css .='} }';
	}

	$automobile_car_dealer_preloader = get_theme_mod( 'automobile_car_dealer_display_preloader',false);
	if($automobile_car_dealer_preloader == true && get_theme_mod( 'automobile_car_dealer_preloader',false) != true){
    	$automobile_car_dealer_custom_css .='.frame{';
			$automobile_car_dealer_custom_css .='display:none;';
		$automobile_car_dealer_custom_css .='} ';
	}
    if($automobile_car_dealer_preloader == true){
    	$automobile_car_dealer_custom_css .='@media screen and (max-width:575px) {';
		$automobile_car_dealer_custom_css .='.frame{';
			$automobile_car_dealer_custom_css .='display:block;';
		$automobile_car_dealer_custom_css .='} }';
	}else if($automobile_car_dealer_preloader == false){
		$automobile_car_dealer_custom_css .='@media screen and (max-width:575px){';
		$automobile_car_dealer_custom_css .='.frame{';
			$automobile_car_dealer_custom_css .='display:none;';
		$automobile_car_dealer_custom_css .='} }';
	}

	$automobile_car_dealer_fixed_header = get_theme_mod( 'automobile_car_dealer_display_fixed_header',true);
    if($automobile_car_dealer_fixed_header == true){
    	$automobile_car_dealer_custom_css .='@media screen and (max-width:575px) {';
		$automobile_car_dealer_custom_css .='.fixed-header{';
			$automobile_car_dealer_custom_css .='display:block;';
		$automobile_car_dealer_custom_css .='} }';
	}else if($automobile_car_dealer_fixed_header == false){
		$automobile_car_dealer_custom_css .='@media screen and (max-width:575px) {';
		$automobile_car_dealer_custom_css .='.fixed-header{';
			$automobile_car_dealer_custom_css .='display:none;';
		$automobile_car_dealer_custom_css .='} }';
	}

	//  comment form width
	$automobile_car_dealer_comment_form_width = get_theme_mod( 'automobile_car_dealer_comment_form_width');
	$automobile_car_dealer_custom_css .='#comments textarea{';
		$automobile_car_dealer_custom_css .='width: '.esc_attr($automobile_car_dealer_comment_form_width).'%;';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_title_comment_form = get_theme_mod('automobile_car_dealer_title_comment_form', 'Leave a Reply');
	if($automobile_car_dealer_title_comment_form == ''){
		$automobile_car_dealer_custom_css .='#comments h2#reply-title {';
			$automobile_car_dealer_custom_css .='display: none;';
		$automobile_car_dealer_custom_css .='}';
	}

	$automobile_car_dealer_comment_form_button_content = get_theme_mod('automobile_car_dealer_comment_form_button_content', 'Post Comment');
	if($automobile_car_dealer_comment_form_button_content == ''){
		$automobile_car_dealer_custom_css .='#comments p.form-submit {';
			$automobile_car_dealer_custom_css .='display: none;';
		$automobile_car_dealer_custom_css .='}';
	}

	// slider height
	$automobile_car_dealer_option_slider_height = get_theme_mod('automobile_car_dealer_option_slider_height');
	$automobile_car_dealer_custom_css .='#slider img{';
		$automobile_car_dealer_custom_css .='height: '.esc_attr($automobile_car_dealer_option_slider_height).'px;';
	$automobile_car_dealer_custom_css .='}';

	// site title font size
	$automobile_car_dealer_site_title_font_size = get_theme_mod('automobile_car_dealer_site_title_font_size', 30);
	$automobile_car_dealer_custom_css .='#header .logo a{';
	$automobile_car_dealer_custom_css .='font-size: '.esc_attr($automobile_car_dealer_site_title_font_size).'px;';
	$automobile_car_dealer_custom_css .='}';

	// slider condition
	$automobile_car_dealer_slider_hide = get_theme_mod( 'automobile_car_dealer_slider_hide', false);
	if($automobile_car_dealer_slider_hide == false){
    	$automobile_car_dealer_custom_css .='.page-template-custom-home-page #header{';
			$automobile_car_dealer_custom_css .='position:static !important;';
		$automobile_car_dealer_custom_css .='} ';
	}

	// site tagline font size
	$automobile_car_dealer_site_tagline_font_size = get_theme_mod('automobile_car_dealer_site_tagline_font_size', 12);
	$automobile_car_dealer_custom_css .='#header .logo p{';
	$automobile_car_dealer_custom_css .='font-size: '.esc_attr($automobile_car_dealer_site_tagline_font_size).'px;';
	$automobile_car_dealer_custom_css .='}';

	// site logo padding 
	$automobile_car_dealer_logo_padding = get_theme_mod('automobile_car_dealer_logo_padding', '');
	$automobile_car_dealer_custom_css .='.logo{';
	$automobile_car_dealer_custom_css .='padding: '.esc_attr($automobile_car_dealer_logo_padding).'px !important;';
	$automobile_car_dealer_custom_css .='}';

	// site logo margin 
	$automobile_car_dealer_logo_margin = get_theme_mod('automobile_car_dealer_logo_margin', '');
	$automobile_car_dealer_custom_css .='.logo{';
	$automobile_car_dealer_custom_css .='margin: '.esc_attr($automobile_car_dealer_logo_margin).'px !important;';
	$automobile_car_dealer_custom_css .='}';

	/*------------------ Skin Option  -------------------*/
	$automobile_car_dealer_theme_lay = get_theme_mod( 'automobile_car_dealer_background_skin','Without Background');
    if($automobile_car_dealer_theme_lay == 'With Background'){
		$automobile_car_dealer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product, .search-cat-box, .login-box a, .front-page-content, .background-img-skin, .mainbox{';
			$automobile_car_dealer_custom_css .='background-color: #fff; padding:20px !important;';
		$automobile_car_dealer_custom_css .='}';
	}else if($automobile_car_dealer_theme_lay == 'Without Background'){
		$automobile_car_dealer_custom_css .='.categorybox{';
			$automobile_car_dealer_custom_css .='background-color: transparent;';
		$automobile_car_dealer_custom_css .='}';
		$automobile_car_dealer_custom_css .='.categorybox{';
			$automobile_car_dealer_custom_css .='box-shadow:none;';
		$automobile_car_dealer_custom_css .='}';
	}

	// slider overlay
	$automobile_car_dealer_enable_slider_overlay = get_theme_mod('automobile_car_dealer_enable_slider_overlay', true);
	if($automobile_car_dealer_enable_slider_overlay == false){
		$automobile_car_dealer_custom_css .='#slider img{';
			$automobile_car_dealer_custom_css .='opacity:1;';
		$automobile_car_dealer_custom_css .='}';
	} 
	$automobile_car_dealer_slider_overlay_color = get_theme_mod('automobile_car_dealer_slider_overlay_color', true);
	if($automobile_car_dealer_enable_slider_overlay != false){
		$automobile_car_dealer_custom_css .='#slider{';
			$automobile_car_dealer_custom_css .='background-color: '.esc_attr($automobile_car_dealer_slider_overlay_color).';';
		$automobile_car_dealer_custom_css .='}';
	}

	// woocommerce Product Navigation
	$automobile_car_dealer_wooproducts_nav = get_theme_mod('automobile_car_dealer_wooproducts_nav', 'Yes');
	if($automobile_car_dealer_wooproducts_nav == 'No'){
		$automobile_car_dealer_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$automobile_car_dealer_custom_css .='display: none;';
		$automobile_car_dealer_custom_css .='}';
	}

	/*-------------- Footer Text -------------------*/
	$automobile_car_dealer_footer_text_align = get_theme_mod('automobile_car_dealer_footer_text_align');
	$automobile_car_dealer_custom_css .='.copyright-wrapper{';
		$automobile_car_dealer_custom_css .='text-align: '.esc_attr($automobile_car_dealer_footer_text_align).' !important;';
	$automobile_car_dealer_custom_css .='}';

	// featured image setting
	$automobile_car_dealer_image_border_radius = get_theme_mod('automobile_car_dealer_image_border_radius', 0);
	$automobile_car_dealer_custom_css .='.box-image img, .content_box img{';
		$automobile_car_dealer_custom_css .='border-radius: '.esc_attr($automobile_car_dealer_image_border_radius).'px;';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_image_box_shadow = get_theme_mod('automobile_car_dealer_image_box_shadow',0);
	$automobile_car_dealer_custom_css .='.box-image img, .content_box img{';
		$automobile_car_dealer_custom_css .='box-shadow: '.esc_attr($automobile_car_dealer_image_box_shadow).'px '.esc_attr($automobile_car_dealer_image_box_shadow).'px '.esc_attr($automobile_car_dealer_image_box_shadow).'px #ddd;';
	$automobile_car_dealer_custom_css .='}';

	// slider content spacing
	$automobile_car_dealer_slider_content_top_padding = get_theme_mod('automobile_car_dealer_slider_content_top_padding');
	$automobile_car_dealer_slider_content_left_padding = get_theme_mod('automobile_car_dealer_slider_content_left_padding');
	$automobile_car_dealer_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
		$automobile_car_dealer_custom_css .='top: '.esc_attr($automobile_car_dealer_slider_content_top_padding).'%; bottom: '.esc_attr($automobile_car_dealer_slider_content_top_padding).'%;left: '.esc_attr($automobile_car_dealer_slider_content_left_padding).'%;right: '.esc_attr($automobile_car_dealer_slider_content_left_padding).'%;';
	$automobile_car_dealer_custom_css .='}';

	// copyright font size
	$automobile_car_dealer_copyright_text_font_size = get_theme_mod('automobile_car_dealer_copyright_text_font_size', 15);
	$automobile_car_dealer_custom_css .='.copyright-wrapper p, .copyright-wrapper a{';
		$automobile_car_dealer_custom_css .='font-size: '.esc_attr($automobile_car_dealer_copyright_text_font_size).'px;';
	$automobile_car_dealer_custom_css .='}';

	// copyright padding option
	$automobile_car_dealer_footer_text_padding = get_theme_mod('automobile_car_dealer_footer_text_padding', 15);
	$automobile_car_dealer_custom_css .='.copyright-wrapper{';
		$automobile_car_dealer_custom_css .='padding-top: '.esc_attr($automobile_car_dealer_footer_text_padding).'px !important; padding-bottom: '.esc_attr($automobile_car_dealer_footer_text_padding).'px !important;';
	$automobile_car_dealer_custom_css .='}';

	// menu text transform
	$automobile_car_dealer_theme_lay = get_theme_mod( 'automobile_car_dealer_text_tranform_menu','Uppercase');
    if($automobile_car_dealer_theme_lay == 'Uppercase'){
		$automobile_car_dealer_custom_css .='.primary-navigation a{';
			$automobile_car_dealer_custom_css .='';
		$automobile_car_dealer_custom_css .='}';
	}else if($automobile_car_dealer_theme_lay == 'Lowercase'){
		$automobile_car_dealer_custom_css .='.primary-navigation a{';
			$automobile_car_dealer_custom_css .='text-transform: lowercase;';
		$automobile_car_dealer_custom_css .='}';
	}
	else if($automobile_car_dealer_theme_lay == 'Capitalize'){
		$automobile_car_dealer_custom_css .='.primary-navigation a{';
			$automobile_car_dealer_custom_css .='text-transform: Capitalize;';
		$automobile_car_dealer_custom_css .='}';
	}

	// site title color
	$automobile_car_dealer_site_title_color = get_theme_mod('automobile_car_dealer_site_title_color');
	$automobile_car_dealer_custom_css .='.site-title a{';
		$automobile_car_dealer_custom_css .='color: '.esc_attr($automobile_car_dealer_site_title_color).' !important;';
	$automobile_car_dealer_custom_css .='}';

	// site tagline color
	$automobile_car_dealer_site_tagline_color = get_theme_mod('automobile_car_dealer_site_tagline_color');
	$automobile_car_dealer_custom_css .='.site-description{';
		$automobile_car_dealer_custom_css .='color: '.esc_attr($automobile_car_dealer_site_tagline_color).' !important;';
	$automobile_car_dealer_custom_css .='}';

	//Copyright background css
	$automobile_car_dealer_copyright_text_background = get_theme_mod('automobile_car_dealer_copyright_text_background');
	$automobile_car_dealer_custom_css .='.copyright-wrapper{';
		$automobile_car_dealer_custom_css .='background-color: '.esc_attr($automobile_car_dealer_copyright_text_background).';';
	$automobile_car_dealer_custom_css .='}';

	// Post Block
	$automobile_car_dealer_post_block_option = get_theme_mod( 'automobile_car_dealer_post_block_option','By Block');
    if($automobile_car_dealer_post_block_option == 'By Without Block'){
		$automobile_car_dealer_custom_css .='.gridbox .inner-service, .related-inner-box, .mainbox-post, .layout2, .layout1, .post_format-post-format-video,.post_format-post-format-image,.post_format-post-format-audio, .post_format-post-format-gallery, .mainbox{';
			$automobile_car_dealer_custom_css .='border:none; margin:30px 0; box-shadow:none;';
		$automobile_car_dealer_custom_css .='}';
	}

	// site toggle button color
	$automobile_car_dealer_toggle_button_color = get_theme_mod('automobile_car_dealer_toggle_button_color');
	$automobile_car_dealer_custom_css .='.toggle-menu i{';
		$automobile_car_dealer_custom_css .='color: '.esc_attr($automobile_car_dealer_toggle_button_color).' !important;';
	$automobile_car_dealer_custom_css .='}';

	// menu font weight
	$automobile_car_dealer_menu_font_weight = get_theme_mod( 'automobile_car_dealer_menu_font_weight','700');
	if($automobile_car_dealer_menu_font_weight != ''){
		$automobile_car_dealer_custom_css .='.primary-navigation a, .primary-navigation ul li a{';
			$automobile_car_dealer_custom_css .='font-weight: '.esc_attr($automobile_car_dealer_menu_font_weight).';';
		$automobile_car_dealer_custom_css .='}';
	}

	// menu color
	$automobile_car_dealer_menu_color = get_theme_mod('automobile_car_dealer_menu_color');

	$automobile_car_dealer_custom_css .='.primary-navigation a, .primary-navigation ul li a{';
			$automobile_car_dealer_custom_css .='color: '.esc_attr($automobile_car_dealer_menu_color).' !important;';
	$automobile_car_dealer_custom_css .='}';

	// Sub menu color
	$automobile_car_dealer_sub_menu_color = get_theme_mod('automobile_car_dealer_sub_menu_color');

	$automobile_car_dealer_custom_css .='.primary-navigation ul.sub-menu a, .primary-navigation ul.sub-menu li a{';
			$automobile_car_dealer_custom_css .='color: '.esc_attr($automobile_car_dealer_sub_menu_color).' !important;';
	$automobile_car_dealer_custom_css .='}';

	// menu hover color
	$automobile_car_dealer_menu_hover_color = get_theme_mod('automobile_car_dealer_menu_hover_color');

	$automobile_car_dealer_custom_css .='.primary-navigation a:hover, .primary-navigation ul li a:hover{';
			$automobile_car_dealer_custom_css .='color: '.esc_attr($automobile_car_dealer_menu_hover_color).' !important;';
	$automobile_car_dealer_custom_css .='}';

	// Sub menu hover color
	$automobile_car_dealer_sub_menu_hover_color = get_theme_mod('automobile_car_dealer_sub_menu_hover_color');

	$automobile_car_dealer_custom_css .='.primary-navigation a:hover, .primary-navigation ul.sub-menu li a:hover{';
			$automobile_car_dealer_custom_css .='color: '.esc_attr($automobile_car_dealer_sub_menu_hover_color).' !important;';
	$automobile_car_dealer_custom_css .='}';

	/*-------------- Post Button  -------------------*/
	$automobile_car_dealer_post_button_padding_top = get_theme_mod('automobile_car_dealer_post_button_padding_top');
	$automobile_car_dealer_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$automobile_car_dealer_custom_css .='padding-top: '.esc_attr($automobile_car_dealer_post_button_padding_top).'px !important; padding-bottom: '.esc_attr($automobile_car_dealer_post_button_padding_top).'px !important;';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_post_button_padding_right = get_theme_mod('automobile_car_dealer_post_button_padding_right');
	$automobile_car_dealer_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$automobile_car_dealer_custom_css .='padding-left: '.esc_attr($automobile_car_dealer_post_button_padding_right).'px !important; padding-right: '.esc_attr($automobile_car_dealer_post_button_padding_right).'px !important;';
	$automobile_car_dealer_custom_css .='}';

	$automobile_car_dealer_post_button_border_radius = get_theme_mod('automobile_car_dealer_post_button_border_radius');
	$automobile_car_dealer_custom_css .='#comments input[type="submit"].submit{';
		$automobile_car_dealer_custom_css .='border-radius: '.esc_attr($automobile_car_dealer_post_button_border_radius).'px;';
	$automobile_car_dealer_custom_css .='}';




	

