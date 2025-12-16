<?php
/**
 * FunLearn Smile Theme Functions
 *
 * @package FunLearnSmile
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function funlearnsmile_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1200, 675, true );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'funlearnsmile' ),
        'footer'  => esc_html__( 'Footer Menu', 'funlearnsmile' ),
    ) );

    // Switch default core markup to output valid HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Add theme support for selective refresh for widgets
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Add support for responsive embedded content
    add_theme_support( 'responsive-embeds' );

    // Add support for editor styles
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/main.css' );
}
add_action( 'after_setup_theme', 'funlearnsmile_setup' );

/**
 * Set the content width in pixels
 */
function funlearnsmile_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'funlearnsmile_content_width', 1200 );
}
add_action( 'after_setup_theme', 'funlearnsmile_content_width', 0 );

/**
 * Enqueue scripts and styles
 */
function funlearnsmile_scripts() {
    // Main stylesheet
    wp_enqueue_style( 'funlearnsmile-style', get_stylesheet_uri(), array(), '1.0.0' );
    
    // Custom compiled CSS (Tailwind + custom styles)
    wp_enqueue_style( 'funlearnsmile-main', get_template_directory_uri() . '/assets/css/output.css', array(), '1.0.0' );

    // Google Fonts - Fredoka and Nunito
    wp_enqueue_style( 'funlearnsmile-fonts', 'https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Nunito:wght@300;400;600;700;800&display=swap', array(), null );

    // Main JavaScript
    wp_enqueue_script( 'funlearnsmile-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );

    // Localize script for AJAX
    wp_localize_script( 'funlearnsmile-main', 'funlearnsmile', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'funlearnsmile_nonce' ),
    ) );

    // Comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'funlearnsmile_scripts' );

/**
 * Register widget areas
 */
function funlearnsmile_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 1', 'funlearnsmile' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'funlearnsmile' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 2', 'funlearnsmile' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'funlearnsmile' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 3', 'funlearnsmile' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'funlearnsmile' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'funlearnsmile_widgets_init' );

/**
 * Custom excerpt length
 */
function funlearnsmile_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'funlearnsmile_excerpt_length', 999 );

/**
 * Custom excerpt more
 */
function funlearnsmile_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'funlearnsmile_excerpt_more' );

/**
 * Custom logo support
 */
function funlearnsmile_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => false, 
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'funlearnsmile_custom_logo_setup' );

/**
 * Include additional theme files
 */
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';