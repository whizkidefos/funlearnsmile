<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package FunLearnSmile
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function funlearnsmile_body_classes( $classes ) {
    // Adds a class of hfeed to non-singular pages.
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if ( ! is_active_sidebar( 'sidebar-1' ) ) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
}
add_filter( 'body_class', 'funlearnsmile_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function funlearnsmile_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
}
add_action( 'wp_head', 'funlearnsmile_pingback_header' );

/**
 * Custom Read More Link
 */
function funlearnsmile_read_more_link() {
    return '... <a href="' . get_permalink() . '" class="read-more">' . __( 'Continue reading', 'funlearnsmile' ) . '</a>';
}
add_filter( 'the_content_more_link', 'funlearnsmile_read_more_link' );

/**
 * Add custom image sizes
 */
function funlearnsmile_image_sizes() {
    add_image_size( 'funlearnsmile-featured', 1200, 675, true );
    add_image_size( 'funlearnsmile-thumbnail', 400, 300, true );
    add_image_size( 'funlearnsmile-medium', 800, 600, true );
}
add_action( 'after_setup_theme', 'funlearnsmile_image_sizes' );

/**
 * Custom logo output
 */
function funlearnsmile_custom_logo() {
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }
}

/**
 * Add preload for key resources
 */
function funlearnsmile_preload_resources() {
    // Preload Google Fonts
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action( 'wp_head', 'funlearnsmile_preload_resources', 1 );

/**
 * Remove unnecessary WordPress features
 */
function funlearnsmile_cleanup() {
    // Remove emoji scripts
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    
    // Remove WordPress version
    remove_action( 'wp_head', 'wp_generator' );
    
    // Remove WLW Manifest
    remove_action( 'wp_head', 'wlwmanifest_link' );
    
    // Remove RSD Link
    remove_action( 'wp_head', 'rsd_link' );
    
    // Remove shortlink
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );
}
add_action( 'init', 'funlearnsmile_cleanup' );

/**
 * Async/Defer Scripts
 */
function funlearnsmile_async_scripts( $tag, $handle ) {
    // List of scripts to defer
    $defer_scripts = array( 'funlearnsmile-main' );
    
    if ( in_array( $handle, $defer_scripts ) ) {
        return str_replace( ' src', ' defer src', $tag );
    }
    
    return $tag;
}
add_filter( 'script_loader_tag', 'funlearnsmile_async_scripts', 10, 2 );

/**
 * Custom excerpt for specific post types
 */
function funlearnsmile_custom_excerpt( $excerpt ) {
    if ( is_search() ) {
        return wp_trim_words( $excerpt, 20, '...' );
    }
    return $excerpt;
}
add_filter( 'get_the_excerpt', 'funlearnsmile_custom_excerpt' );

/**
 * Add schema markup to posts
 */
function funlearnsmile_schema_markup() {
    if ( is_single() ) {
        $schema = array(
            '@context'      => 'https://schema.org',
            '@type'         => 'Article',
            'headline'      => get_the_title(),
            'datePublished' => get_the_date( 'c' ),
            'dateModified'  => get_the_modified_date( 'c' ),
            'author'        => array(
                '@type' => 'Person',
                'name'  => get_the_author(),
            ),
        );
        
        if ( has_post_thumbnail() ) {
            $schema['image'] = get_the_post_thumbnail_url( null, 'full' );
        }
        
        echo '<script type="application/ld+json">' . json_encode( $schema ) . '</script>';
    }
}
add_action( 'wp_head', 'funlearnsmile_schema_markup' );

/**
 * Add organization schema to footer
 */
function funlearnsmile_organization_schema() {
    $schema = array(
        '@context' => 'https://schema.org',
        '@type'    => 'Organization',
        'name'     => get_bloginfo( 'name' ),
        'url'      => home_url(),
        'logo'     => get_template_directory_uri() . '/assets/images/logo.png',
        'sameAs'   => array(
            'https://www.instagram.com/funlearnsmile/',
        ),
    );
    
    echo '<script type="application/ld+json">' . json_encode( $schema ) . '</script>';
}
add_action( 'wp_footer', 'funlearnsmile_organization_schema' );

/**
 * Customize archive titles
 */
function funlearnsmile_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
    
    return $title;
}
add_filter( 'get_the_archive_title', 'funlearnsmile_archive_title' );

/**
 * Custom comment form
 */
function funlearnsmile_comment_form_defaults( $defaults ) {
    $defaults['title_reply'] = __( 'Leave a Comment', 'funlearnsmile' );
    $defaults['label_submit'] = __( 'Post Comment', 'funlearnsmile' );
    $defaults['class_submit'] = 'btn btn-primary';
    
    return $defaults;
}
add_filter( 'comment_form_defaults', 'funlearnsmile_comment_form_defaults' );

/**
 * Add security headers
 */
function funlearnsmile_security_headers() {
    header( 'X-Content-Type-Options: nosniff' );
    header( 'X-Frame-Options: SAMEORIGIN' );
    header( 'X-XSS-Protection: 1; mode=block' );
}
add_action( 'send_headers', 'funlearnsmile_security_headers' );