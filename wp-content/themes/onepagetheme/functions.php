<?php 

if ( ! function_exists( 'one_page_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */

// Function to add different functionality in theme
function one_page_theme_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'onepagetheme', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to head.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );

 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'onepagetheme' ),
        'secondary' => __('Secondary Menu', 'onepagetheme' )
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

    add_theme_support( 'custom-logo' );
}
endif; // one_page_theme_setup
add_action( 'after_setup_theme', 'one_page_theme_setup' );
// Function to enqueue stylesheet and script

function one_page_theme_include_script() {

  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  wp_enqueue_style( 'onepagetheme_theme_responsive',get_template_directory_uri() . '/assets/css/responsive.css' );

  wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array ( 'jquery' ), 1.1, true);

 }
 add_action( 'wp_enqueue_scripts', 'one_page_theme_include_script' );

// Function to add custom header in theme

 $header_info = array(
    'width'         => 151,
    'height'        => 100,
    'default-image' => get_template_directory_uri() . '/assets/images/blog-thumb-01.jpg',
);
global $wp_version;
if ( version_compare( $wp_version, '3.4', '>=' ) ) :
    add_theme_support( 'custom-header', $header_info );
else :
    add_custom_image_header( $wp_head_callback, $admin_head_callback );
endif;

 
$header_images = array(
    'sunset' => array(
            'url'           => get_template_directory_uri() . '/assets/images/blog-thumb-01.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/assets/images/blog-thumb-01.jpg',
            'description'   => 'Sunset',
    ),
    'flower' => array(
            'url'           => get_template_directory_uri() . '/assets/images/blog-thumb-01.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/assets/images/blog-thumb-01.jpg',
            'description'   => 'Flower',
    ),  
);
register_default_headers( $header_images );

// Function to add Logo upload option in Wordpress Customizer

function onepagetheme_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 151,
        'flex-height'          => false,
        'flex-width'           => false,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => false, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'onepagetheme_custom_logo_setup' );

function onepagetheme_post_formats_setup() {
  add_theme_support( 'post-formats', 'Standard' );
}
add_action( 'after_setup_theme', 'onepagetheme_post_formats_setup' );


function onepagetheme_one_widgets_init() {

    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer', 'onepagetheme' ),
            'id'            => 'footer-sidebar',
            'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'onepagetheme' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'onepagetheme_one_widgets_init' );

// Adding Customizer Function in Theme 
function onepagetheme_customize_register( $wp_customize ) {

    $wp_customize->add_section( 'home_header', array(
      'title' => __( 'Home Header' ),
      'description' => __( 'Add Home Header Text here' ),
      'priority' => 20,
    ) );

    $wp_customize->add_setting( 'home_welcome_msg', array(
      'type' => 'theme_mod', 
      'default' => _('Welcome to Space Dynamic '),
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'home_welcome_msg', array(
        'type' => 'text',
        'priority' => 10, // Within the section.
        'section' => 'home_header', // Required, core or custom.
        'label' => __( 'Enter Welcome Message' ),
        'description' => __( 'This is a date control with a red border.' ),
        ),
    );

    $wp_customize->add_setting( 'onepagetheme_tagline', array(
      'type' => 'theme_mod', 
      'default' => _('We Make Digital Ideas & SEO Marketing '),
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'onepagetheme_tagline', array(
        'type' => 'text',
        'priority' => 10, // Within the section.
        'section' => 'home_header', // Required, core or custom.
        'label' => __( 'Enter Tagline' ),
        'description' => __( 'Here you have to write Tagline ' ),
        ),
    );

    $wp_customize->add_setting( 'onepagetheme_description', array(
      'type' => 'theme_mod', 
      'default' => _('We Make Digital Ideas & SEO Marketing '),
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_textarea_field',
    ) );

    $wp_customize->add_control( 'onepagetheme_description', array(
        'type' => 'textarea',
        'priority' => 10, // Within the section.
        'section' => 'home_header', // Required, core or custom.
        'label' => __( 'Enter Description' ),
        'description' => __( 'Here you have to write Description ' ),
        ),
    );

    // Adding Checkbox in the wordpress theme customizer
    $wp_customize->add_setting( 'onepagetheme_analysize_site', array(
                'default' => '0',
    ));
 
    //add control
    $wp_customize->add_control( 'onepagetheme_analysize_site_control', array(
                'label' => 'Do You Want to Display Analyse Site Option or Not',
                'type'  => 'checkbox', // this indicates the type of control
                'section' => 'home_header',
                'settings' => 'onepagetheme_analysize_site'
    ));
}
add_action( 'customize_register', 'onepagetheme_customize_register');