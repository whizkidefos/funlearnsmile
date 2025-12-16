<?php
/**
 * FunLearn Smile Theme Customizer
 *
 * @package FunLearnSmile
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function funlearnsmile_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector'        => '.site-title a',
                'render_callback' => 'funlearnsmile_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector'        => '.site-description',
                'render_callback' => 'funlearnsmile_customize_partial_blogdescription',
            )
        );
    }

    // Add Theme Options Panel
    $wp_customize->add_panel( 'funlearnsmile_options', array(
        'title'       => __( 'FunLearn Smile Options', 'funlearnsmile' ),
        'description' => __( 'Customize your FunLearn Smile theme settings', 'funlearnsmile' ),
        'priority'    => 30,
    ) );

    // Colors Section
    $wp_customize->add_section( 'funlearnsmile_colors', array(
        'title'    => __( 'Theme Colors', 'funlearnsmile' ),
        'panel'    => 'funlearnsmile_options',
        'priority' => 10,
    ) );

    // Primary Color
    $wp_customize->add_setting( 'primary_color', array(
        'default'           => '#FF6F61',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize,
        'primary_color',
        array(
            'label'    => __( 'Primary Color (Soft Coral)', 'funlearnsmile' ),
            'section'  => 'funlearnsmile_colors',
            'settings' => 'primary_color',
        )
    ) );

    // Secondary Color
    $wp_customize->add_setting( 'secondary_color', array(
        'default'           => '#00BFFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize,
        'secondary_color',
        array(
            'label'    => __( 'Secondary Color (Sky Blue)', 'funlearnsmile' ),
            'section'  => 'funlearnsmile_colors',
            'settings' => 'secondary_color',
        )
    ) );

    // Footer Section
    $wp_customize->add_section( 'funlearnsmile_footer', array(
        'title'    => __( 'Footer Settings', 'funlearnsmile' ),
        'panel'    => 'funlearnsmile_options',
        'priority' => 20,
    ) );

    // Footer Copyright Text
    $wp_customize->add_setting( 'footer_copyright', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( 'footer_copyright', array(
        'label'       => __( 'Copyright Text', 'funlearnsmile' ),
        'description' => __( 'Add custom copyright text for the footer.', 'funlearnsmile' ),
        'section'     => 'funlearnsmile_footer',
        'type'        => 'textarea',
    ) );

    // Social Media Section
    $wp_customize->add_section( 'funlearnsmile_social', array(
        'title'    => __( 'Social Media', 'funlearnsmile' ),
        'panel'    => 'funlearnsmile_options',
        'priority' => 30,
    ) );

    // Instagram URL
    $wp_customize->add_setting( 'instagram_url', array(
        'default'           => 'https://www.instagram.com/funlearnsmile/',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'instagram_url', array(
        'label'   => __( 'Instagram URL', 'funlearnsmile' ),
        'section' => 'funlearnsmile_social',
        'type'    => 'url',
    ) );

    // Facebook URL
    $wp_customize->add_setting( 'facebook_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'facebook_url', array(
        'label'   => __( 'Facebook URL', 'funlearnsmile' ),
        'section' => 'funlearnsmile_social',
        'type'    => 'url',
    ) );

    // Twitter URL
    $wp_customize->add_setting( 'twitter_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'twitter_url', array(
        'label'   => __( 'Twitter URL', 'funlearnsmile' ),
        'section' => 'funlearnsmile_social',
        'type'    => 'url',
    ) );

    // Contact Section
    $wp_customize->add_section( 'funlearnsmile_contact', array(
        'title'    => __( 'Contact Information', 'funlearnsmile' ),
        'panel'    => 'funlearnsmile_options',
        'priority' => 40,
    ) );

    // Contact Email
    $wp_customize->add_setting( 'contact_email', array(
        'default'           => 'infofunlearnsmile@gmail.com',
        'sanitize_callback' => 'sanitize_email',
    ) );

    $wp_customize->add_control( 'contact_email', array(
        'label'   => __( 'Contact Email', 'funlearnsmile' ),
        'section' => 'funlearnsmile_contact',
        'type'    => 'email',
    ) );

    // Contact Phone
    $wp_customize->add_setting( 'contact_phone', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'contact_phone', array(
        'label'   => __( 'Contact Phone', 'funlearnsmile' ),
        'section' => 'funlearnsmile_contact',
        'type'    => 'text',
    ) );

    // Contact Address
    $wp_customize->add_setting( 'contact_address', array(
        'default'           => 'United Kingdom',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'contact_address', array(
        'label'   => __( 'Address', 'funlearnsmile' ),
        'section' => 'funlearnsmile_contact',
        'type'    => 'textarea',
    ) );
}
add_action( 'customize_register', 'funlearnsmile_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function funlearnsmile_customize_partial_blogname() {
    bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function funlearnsmile_customize_partial_blogdescription() {
    bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function funlearnsmile_customize_preview_js() {
    wp_enqueue_script( 'funlearnsmile-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '1.0.0', true );
}
add_action( 'customize_preview_init', 'funlearnsmile_customize_preview_js' );

/**
 * Output custom CSS for customizer options
 */
function funlearnsmile_customizer_css() {
    $primary_color = get_theme_mod( 'primary_color', '#FF6F61' );
    $secondary_color = get_theme_mod( 'secondary_color', '#00BFFF' );
    ?>
    <style type="text/css">
        :root {
            --primary-color: <?php echo esc_attr( $primary_color ); ?>;
            --secondary-color: <?php echo esc_attr( $secondary_color ); ?>;
        }
        .btn-primary {
            background-color: <?php echo esc_attr( $primary_color ); ?>;
        }
        .btn-secondary {
            background-color: <?php echo esc_attr( $secondary_color ); ?>;
        }
        .text-soft-coral {
            color: <?php echo esc_attr( $primary_color ); ?>;
        }
        .text-sky-blue {
            color: <?php echo esc_attr( $secondary_color ); ?>;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'funlearnsmile_customizer_css' );