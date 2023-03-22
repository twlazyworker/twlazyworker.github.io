<?php
/**
 * Automobile Car Dealer functions and definitions
 * @package Automobile Car Dealer
 */
 /* Breadcrumb Begin */
 function automobile_car_dealer_the_breadcrumb() {
 	if (!is_home()) {
 		echo '<a href="';
 			echo esc_url( home_url() );
 		echo '">';
 			bloginfo('name');
 		echo "</a> ";
 		if (is_category() || is_single()) {
 			the_category(',');
 			if (is_single()) {
 				echo "<span> ";
 					the_title();
 				echo "</span> ";
 			}
 		} elseif (is_page()) {
 			echo "<span> ";
 				the_title();
 		}
 	}
 }
/* Theme Setup */
if ( ! function_exists( 'automobile_car_dealer_setup' ) ) :

function automobile_car_dealer_setup() {

	$GLOBALS['content_width'] = apply_filters( 'automobile_car_dealer_content_width', 640 );

	load_theme_textdomain( 'automobile-car-dealer', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('automobile-car-dealer-homepage-thumb',240,145,true);

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'automobile-car-dealer' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support(
		'post-formats', array(
			'image',
			'video',
			'gallery',
			'audio',
		)
	);

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support('responsive-embeds');
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', automobile_car_dealer_font_url() ) );
}
endif; // automobile_car_dealer_setup
add_action( 'after_setup_theme', 'automobile_car_dealer_setup' );

/*radio button sanitization*/
 function automobile_car_dealer_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function automobile_car_dealer_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function automobile_car_dealer_sanitize_checkbox( $input ) {
	// Boolean check
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

/* Theme Widgets Setup */
function automobile_car_dealer_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'automobile-car-dealer' ),
		'description'   => __( 'Appears on posts and pages', 'automobile-car-dealer' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Posts and Pages Sidebar', 'automobile-car-dealer' ),
		'description'   => __( 'Appears on posts and pages', 'automobile-car-dealer' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Third Column Sidebar', 'automobile-car-dealer' ),
		'description'   => __( 'Appears on posts and pages', 'automobile-car-dealer' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$automobile_car_dealer_widget_areas = get_theme_mod('footer_widget_areas', '4');
	for ($i=1; $i<=$automobile_car_dealer_widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer Widget ', 'automobile-car-dealer' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
}
add_action( 'widgets_init', 'automobile_car_dealer_widgets_init' );
/* Theme Font URL */
function automobile_car_dealer_font_url() {
	$font_family   = array(
		'ABeeZee:ital@0;1',
		'Abril+Fatface',
		'Acme',
		'Allura',
		'Anton',
		'Architects+Daughter',
		'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Arsenal:ital,wght@0,400;0,700;1,400;1,700',
		'Arvo:ital,wght@0,400;0,700;1,400;1,700',
		'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Alfa+Slab+One',
		'Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Bangers',
		'Boogaloo',
		'Bad+Script',
		'Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'BenchNine:wght@300;400;700',
		'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Cardo:ital,wght@0,400;0,700;1,400',
		'Courgette',
		'Caveat+Brush',
		'Cherry+Swash:wght@400;700',
		'Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700',
		'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Cookie',
		'Coming+Soon',
		'Charm:wght@400;700',
		'Chewy',
		'Days+One',
		'Dosis:wght@200;300;400;500;600;700;800',
		'DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700',
		'EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800',
		'Economica:ital,wght@0,400;0,700;1,400;1,700',
		'Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Fredoka+One',
		'Fjalla+One',
		'Francois+One',
		'Frank+Ruhl+Libre:wght@300;400;500;700;900',
		'Gabriela',
		'Gloria+Hallelujah',
		'Great+Vibes',
		'Handlee',
		'Hammersmith+One',
		'Heebo:wght@100;200;300;400;500;600;700;800;900',
		'Hind:wght@300;400;500;600;700',
		'Inconsolata:wght@200;300;400;500;600;700;800;900',
		'Indie+Flower',
		'IM+Fell+English+SC',
		'Julius+Sans+One',
		'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700',
		'Lobster',
		'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900',
		'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Libre+Baskerville:ital,wght@0,400;0,700;1,400',
		'Lobster+Two:ital,wght@0,400;0,700;1,400;1,700',
		'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
		'Marck+Script',
		'Marcellus',
		'Merienda+One',
		'Monda:wght@400;700',
		'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
		'Noto+Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900',
		'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Overpass+Mono:wght@300;400;500;600;700',
		'Oxygen:wght@300;400;700',
		'Oswald:wght@200;300;400;500;600;700',
		'Orbitron:wght@400;500;600;700;800;900',
		'Patua+One',
		'Pacifico',
		'Padauk:wght@400;700',
		'Playball',
		'Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'PT+Sans:ital,wght@0,400;0,700;1,400;1,700',
		'PT+Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Philosopher:ital,wght@0,400;0,700;1,400;1,700',
		'Permanent+Marker',
		'Poiret+One',
		'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Prata',
		'Quicksand:wght@300;400;500;600;700',
		'Quattrocento+Sans:ital,wght@0,400;0,700;1,400;1,700',
		'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900',
		'Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
	 	'Rokkitt:wght@100;200;300;400;500;600;700;800;900',
	 	'Russo+One',
	 	'Righteous',
	 	'Saira:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Satisfy',
	 	'Sen:wght@400;700;800',
	 	'Slabo+13px',
	 	'Shadows+Into+Light+Two',
	 	'Shadows+Into+Light',
	 	'Sacramento',
	 	'Sail',
	 	'Shrikhand',
	 	'League+Spartan:wght@100;200;300;400;500;600;700;800;900',
	 	'Staatliches',
	 	'Stylish',
	 	'Tangerine:wght@400;700',
	 	'Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700',
	 	'Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700',
	 	'Unica+One',
	 	'VT323',
	 	'Varela+Round',
	 	'Vampiro+One',
	 	'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Volkhov:ital,wght@0,400;0,700;1,400;1,700',
	 	'Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Yanone+Kaffeesatz:wght@200;300;400;500;600;700',
	 	'ZCOOL+XiaoWei',
		'Josefin+Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
	 	'Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
		'Bree+Serif',
		'Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700',
	 	'Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900'
	);

	$fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_family ),
		'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
	return $contents;
}

/* Theme enqueue scripts */
function automobile_car_dealer_scripts() {
	wp_enqueue_style( 'automobile-car-dealer-font', automobile_car_dealer_font_url(), array() );

	// blocks-css
	wp_enqueue_style( 'automobile-car-dealer-block-style', get_theme_file_uri('/css/blocks.css') );

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css');

	wp_enqueue_style( 'automobile-car-dealer-basic-style', get_stylesheet_uri() );

	wp_style_add_data( 'automobile-car-dealer-style', 'rtl', 'replace' );

	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/fontawesome-all.css' );

	// body
	$automobile_car_dealer_body_color       = get_theme_mod(
		'automobile_car_dealer_body_color', '');
	$automobile_car_dealer_body_font_family = get_theme_mod('automobile_car_dealer_body_font_family', '');
	$automobile_car_dealer_body_font_size   = get_theme_mod(
		'automobile_car_dealer_body_font_size', '');

	// Paragraph
	$automobile_car_dealer_paragraph_color       = get_theme_mod('automobile_car_dealer_paragraph_color', '');
	$automobile_car_dealer_paragraph_font_family = get_theme_mod('automobile_car_dealer_paragraph_font_family', '');
	$automobile_car_dealer_paragraph_font_size   = get_theme_mod('automobile_car_dealer_paragraph_font_size', '');
	// "a" tag
	$automobile_car_dealer_atag_color       = get_theme_mod('automobile_car_dealer_atag_color', '');
	$automobile_car_dealer_atag_font_family = get_theme_mod('automobile_car_dealer_atag_font_family', '');
	// "li" tag
	$automobile_car_dealer_li_color       = get_theme_mod('automobile_car_dealer_li_color', '');
	$automobile_car_dealer_li_font_family = get_theme_mod('automobile_car_dealer_li_font_family', '');
	// H1
	$automobile_car_dealer_h1_color       = get_theme_mod('automobile_car_dealer_h1_color', '');
	$automobile_car_dealer_h1_font_family = get_theme_mod('automobile_car_dealer_h1_font_family', '');
	$automobile_car_dealer_h1_font_size   = get_theme_mod('automobile_car_dealer_h1_font_size', '');
	// H2
	$automobile_car_dealer_h2_color       = get_theme_mod('automobile_car_dealer_h2_color', '');
	$automobile_car_dealer_h2_font_family = get_theme_mod('automobile_car_dealer_h2_font_family', '');
	$automobile_car_dealer_h2_font_size   = get_theme_mod('automobile_car_dealer_h2_font_size', '');
	// H3
	$automobile_car_dealer_h3_color       = get_theme_mod('automobile_car_dealer_h3_color', '');
	$automobile_car_dealer_h3_font_family = get_theme_mod('automobile_car_dealer_h3_font_family', '');
	$automobile_car_dealer_h3_font_size   = get_theme_mod('automobile_car_dealer_h3_font_size', '');
	// H4
	$automobile_car_dealer_h4_color       = get_theme_mod('automobile_car_dealer_h4_color', '');
	$automobile_car_dealer_h4_font_family = get_theme_mod('automobile_car_dealer_h4_font_family', '');
	$automobile_car_dealer_h4_font_size   = get_theme_mod('automobile_car_dealer_h4_font_size', '');
	// H5
	$automobile_car_dealer_h5_color       = get_theme_mod('automobile_car_dealer_h5_color', '');
	$automobile_car_dealer_h5_font_family = get_theme_mod('automobile_car_dealer_h5_font_family', '');
	$automobile_car_dealer_h5_font_size   = get_theme_mod('automobile_car_dealer_h5_font_size', '');
	// H6
	$automobile_car_dealer_h6_color       = get_theme_mod('automobile_car_dealer_h6_color', '');
	$automobile_car_dealer_h6_font_family = get_theme_mod('automobile_car_dealer_h6_font_family', '');
	$automobile_car_dealer_h6_font_size   = get_theme_mod('automobile_car_dealer_h6_font_size', '');

	$automobile_car_dealer_custom_css = '
		body{
		    color:'.esc_html($automobile_car_dealer_body_color).'!important;
		    font-family: '.esc_html($automobile_car_dealer_body_font_family).';
		    font-size: '.esc_html($automobile_car_dealer_body_font_size).'px;
		}
		p,span{
		    color:'.esc_html($automobile_car_dealer_paragraph_color).'!important;
		    font-family: '.esc_html($automobile_car_dealer_paragraph_font_family).';
		    font-size: '.esc_html($automobile_car_dealer_paragraph_font_size).'px;
		}
		a{
		    color:'.esc_html($automobile_car_dealer_atag_color).'!important;
		    font-family: '.esc_html($automobile_car_dealer_atag_font_family).';
		}
		li{
		    color:'.esc_html($automobile_car_dealer_li_color).'!important;
		    font-family: '.esc_html($automobile_car_dealer_li_font_family).';
		}
		h1{
		    color:'.esc_html($automobile_car_dealer_h1_color).'!important;
		    font-family: '.esc_html($automobile_car_dealer_h1_font_family).'!important;
		    font-size: '.esc_html($automobile_car_dealer_h1_font_size).'px!important;
		}
		h2{
		    color:'.esc_html($automobile_car_dealer_h2_color).'!important;
		    font-family: '.esc_html($automobile_car_dealer_h2_font_family).'!important;
		    font-size: '.esc_html($automobile_car_dealer_h2_font_size).'px!important;
		}
		h3{
		    color:'.esc_html($automobile_car_dealer_h3_color).'!important;
		    font-family: '.esc_html($automobile_car_dealer_h3_font_family).'!important;
		    font-size: '.esc_html($automobile_car_dealer_h3_font_size).'px!important;
		}
		h4{
		    color:'.esc_html($automobile_car_dealer_h4_color).'!important;
		    font-family: '.esc_html($automobile_car_dealer_h4_font_family).'!important;
		    font-size: '.esc_html($automobile_car_dealer_h4_font_size).'px!important;
		}
		h5{
		    color:'.esc_html($automobile_car_dealer_h5_color).'!important;
		    font-family: '.esc_html($automobile_car_dealer_h5_font_family).'!important;
		    font-size: '.esc_html($automobile_car_dealer_h5_font_size).'px!important;
		}
		h6{
		    color:'.esc_html($automobile_car_dealer_h6_color).'!important;
		    font-family: '.esc_html($automobile_car_dealer_h6_font_family).'!important;
		    font-size: '.esc_html($automobile_car_dealer_h6_font_size).'px!important;
		}
	';
	wp_add_inline_style('automobile-car-dealer-basic-style', $automobile_car_dealer_custom_css);

	/* Theme Color sheet */
	require get_parent_theme_file_path( '/theme-color-option.php' );
	wp_add_inline_style( 'automobile-car-dealer-basic-style',$automobile_car_dealer_custom_css );
	wp_enqueue_script( 'tether-js', get_template_directory_uri() . '/js/tether.js', array('jquery') ,'',true);
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') ,'',true);
	wp_enqueue_script( 'jquery-superfish', get_template_directory_uri() . '/js/jquery.superfish.js', array('jquery') ,'',true);
	wp_enqueue_script( 'automobile-car-dealer-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'automobile_car_dealer_scripts' );

define('AUTOMOBILE_CAR_DEALER_LIVE_DEMO',__('https://buywptemplates.com/automobile-car-dealer-pro/', 'automobile-car-dealer'));
define('AUTOMOBILE_CAR_DEALER_BUY_PRO',__('https://www.buywptemplates.com/themes/premium-automotive-wordpress-theme/', 'automobile-car-dealer'));
define('AUTOMOBILE_CAR_DEALER_PRO_DOC',__('https://buywptemplates.com/demo/docs/automobile-car-dealer-pro/', 'automobile-car-dealer'));
define('AUTOMOBILE_CAR_DEALER_FREE_DOC',__('https://buywptemplates.com/demo/docs/free-automobile-car-dealer/', 'automobile-car-dealer'));
define('AUTOMOBILE_CAR_DEALER_PRO_SUPPORT',__('https://www.buywptemplates.com/support/', 'automobile-car-dealer'));
define('AUTOMOBILE_CAR_DEALER_FREE_SUPPORT',__('https://wordpress.org/support/theme/automobile-car-dealer/', 'automobile-car-dealer'));
define('AUTOMOBILE_CAR_DEALER_CREDIT',__('https://www.buywptemplates.com/themes/free-car-dealer-wordpress-theme/', 'automobile-car-dealer'));

if ( ! function_exists( 'automobile_car_dealer_credit' ) ) {
	function automobile_car_dealer_credit(){
		echo "<a href=".esc_url(AUTOMOBILE_CAR_DEALER_CREDIT)." target='_blank'>".esc_html__('Automobile WordPress Theme','automobile-car-dealer')."</a>";
	}
}

function automobile_car_dealer_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

/* Excerpt Limit Begin */
function automobile_car_dealer_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}


/**
* Switch sanitization
*/
if ( ! function_exists( 'automobile_car_dealer_switch_sanitization' ) ) {
	function automobile_car_dealer_switch_sanitization( $input ) {
		if ( true === $input ) {
			return 1;
		} else {
			return 0;
		}
	}
}

// Integer sanitization
if ( ! function_exists( 'automobile_car_dealer_sanitize_integer' ) ) {
	function automobile_car_dealer_sanitize_integer( $input ) {
		return (int) $input;
	}
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'automobile_car_dealer_loop_columns');
if (!function_exists('automobile_car_dealer_loop_columns')) {
	function automobile_car_dealer_loop_columns() {
		$columns = get_theme_mod( 'automobile_car_dealer_per_columns', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'automobile_car_dealer_shop_per_page', 20 );
function automobile_car_dealer_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'automobile_car_dealer_product_per_page', 9 );
	return $cols;
}

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Load Jetpack compatibility file. */
require get_template_directory() . '/inc/customizer.php';

/* Load welcome message.*/
require get_template_directory() . '/inc/dashboard/get_started_info.php';

/* Webfonts */
require get_template_directory() . '/wptt-webfont-loader.php';
