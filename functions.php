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

/**
 * Handle Contact Form Submission
 */
function funlearnsmile_handle_contact_form() {
    // Verify nonce
    if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( $_POST['nonce'], 'funlearnsmile_contact_nonce' ) ) {
        wp_send_json_error( array( 'message' => 'Security check failed.' ) );
    }

    // Sanitize input
    $name = sanitize_text_field( $_POST['name'] );
    $email = sanitize_email( $_POST['email'] );
    $subject = sanitize_text_field( $_POST['subject'] );
    $message = sanitize_textarea_field( $_POST['message'] );

    // Validate
    if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
        wp_send_json_error( array( 'message' => 'Please fill in all required fields.' ) );
    }

    if ( ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => 'Please enter a valid email address.' ) );
    }

    // Get recipients from customizer
    $recipients_text = get_theme_mod( 'contact_form_recipients', 'infofunlearnsmile@gmail.com' );
    $recipients = array_filter( array_map( 'trim', explode( "\n", $recipients_text ) ) );

    // Prepare email
    $email_subject = 'Contact Form: ' . $subject;
    $email_message = "Name: {$name}\n";
    $email_message .= "Email: {$email}\n\n";
    $email_message .= "Message:\n{$message}";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        "Reply-To: {$name} <{$email}>",
    );

    // Send email to all recipients
    $sent = wp_mail( $recipients, $email_subject, $email_message, $headers );

    if ( $sent ) {
        wp_send_json_success( array( 'message' => 'Thank you! Your message has been sent successfully.' ) );
    } else {
        wp_send_json_error( array( 'message' => 'Sorry, there was an error sending your message. Please try again.' ) );
    }
}
add_action( 'wp_ajax_funlearnsmile_contact_form', 'funlearnsmile_handle_contact_form' );
add_action( 'wp_ajax_nopriv_funlearnsmile_contact_form', 'funlearnsmile_handle_contact_form' );

/**
 * Custom comment callback
 */
function funlearnsmile_comment( $comment, $args, $depth ) {
    ?>
    <li <?php comment_class( 'comment-item bg-white rounded-2xl p-6 md:p-8 shadow-md hover:shadow-xl transition-all duration-300' ); ?> id="comment-<?php comment_ID(); ?>">
        
        <div class="comment-body">
            
            <div class="comment-author-section flex items-start space-x-4 mb-4">
                
                <div class="comment-avatar flex-shrink-0">
                    <?php echo get_avatar( $comment, 64, '', '', array( 'class' => 'rounded-full shadow-lg' ) ); ?>
                </div>

                <div class="comment-metadata flex-1">
                    <div class="comment-author-name font-fredoka font-bold text-xl text-deep-blue mb-1">
                        <?php comment_author_link(); ?>
                    </div>
                    <div class="comment-date flex items-center space-x-3 text-sm text-gray-500 font-nunito">
                        <time datetime="<?php comment_time( 'c' ); ?>">
                            <?php
                            printf(
                                esc_html__( '%1$s at %2$s', 'funlearnsmile' ),
                                get_comment_date( '', $comment ),
                                get_comment_time()
                            );
                            ?>
                        </time>
                        <?php
                        comment_reply_link(
                            array_merge(
                                $args,
                                array(
                                    'depth'     => $depth,
                                    'max_depth' => $args['max_depth'],
                                    'before'    => '<span class="text-sky-blue hover:text-soft-coral transition-colors duration-300">',
                                    'after'     => '</span>',
                                )
                            )
                        );
                        ?>
                        <?php edit_comment_link( esc_html__( 'Edit', 'funlearnsmile' ), '<span class="text-gray-400 hover:text-gray-600">', '</span>' ); ?>
                    </div>
                </div>

            </div>

            <?php if ( '0' === $comment->comment_approved ) : ?>
                <p class="comment-awaiting-moderation bg-bright-yellow/10 text-warm-orange border-l-4 border-bright-yellow px-4 py-3 rounded-lg font-nunito mb-4">
                    <?php esc_html_e( 'Your comment is awaiting moderation.', 'funlearnsmile' ); ?>
                </p>
            <?php endif; ?>

            <div class="comment-content font-nunito text-gray-700 leading-relaxed prose prose-sm max-w-none">
                <?php comment_text(); ?>
            </div>

        </div>
    <?php
}

/**
 * Customize WordPress Login Screen
 */
function funlearnsmile_login_stylesheet() {
    ?>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Nunito:wght@400;600;700&display=swap');

        body.login {
            background: linear-gradient(135deg, #E0F7FA 0%, #C8E6C9 50%, #FFF9C4 100%);
            font-family: 'Nunito', sans-serif;
            position: relative;
            overflow: hidden;
        }

        body.login::before,
        body.login::after {
            content: '';
            position: fixed;
            border-radius: 50%;
            opacity: 0.1;
            animation: float 20s infinite ease-in-out;
        }

        body.login::before {
            width: 300px;
            height: 300px;
            background: #FFD700;
            top: -100px;
            left: -100px;
        }

        body.login::after {
            width: 400px;
            height: 400px;
            background: #00BFFF;
            bottom: -150px;
            right: -150px;
            animation-delay: 5s;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(30px, -30px) rotate(120deg); }
            66% { transform: translate(-20px, 20px) rotate(240deg); }
        }

        #login { position: relative; z-index: 10; }

        #loginform, #lostpasswordform, #registerform {
            background: #ffffff;
            border: none;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            padding: 40px;
            position: relative;
            overflow: hidden;
        }

        #loginform::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, #FF6F61 0%, #FFD700 50%, #00BFFF 100%);
        }

        #login h1 a {
            background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon.png' ); ?>');
            background-size: contain;
            background-position: center;
            width: 120px;
            height: 120px;
            margin-bottom: 30px;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        #login h1 a:hover {
            transform: scale(1.05) rotate(2deg);
        }

        .login label {
            font-family: 'Nunito', sans-serif;
            font-weight: 600;
            color: #374151;
            font-size: 15px;
        }

        .login input[type="text"],
        .login input[type="password"],
        .login input[type="email"] {
            font-family: 'Nunito', sans-serif;
            background: #F9FAFB;
            border: 2px solid #E5E7EB;
            border-radius: 12px;
            padding: 14px 16px;
            font-size: 15px;
            transition: all 0.3s ease;
            box-shadow: none;
        }

        .login input[type="text"]:focus,
        .login input[type="password"]:focus,
        .login input[type="email"]:focus {
            background: #ffffff;
            border-color: #00BFFF;
            box-shadow: 0 0 0 4px rgba(0, 191, 255, 0.1);
            outline: none;
        }

        .login input[type="checkbox"] {
            width: 18px;
            height: 18px;
            border: 2px solid #00BFFF;
            border-radius: 6px;
        }

        .login .button-primary {
            background: linear-gradient(135deg, #00BFFF 0%, #0D4F7D 100%);
            border: none;
            border-radius: 12px;
            padding: 14px 24px;
            font-family: 'Fredoka', sans-serif;
            font-weight: 600;
            font-size: 16px;
            text-shadow: none;
            box-shadow: 0 4px 12px rgba(0, 191, 255, 0.3);
            width: 100%;
            transition: all 0.3s ease;
            height: auto;
        }

        .login .button-primary:hover {
            background: linear-gradient(135deg, #0D4F7D 0%, #00BFFF 100%);
            box-shadow: 0 6px 20px rgba(0, 191, 255, 0.4);
            transform: translateY(-2px);
        }

        .login #nav a,
        .login #backtoblog a {
            color: #00BFFF;
            font-family: 'Nunito', sans-serif;
            font-weight: 600;
            transition: color 0.3s ease;
            text-decoration: none;
        }

        .login #nav a:hover,
        .login #backtoblog a:hover {
            color: #FF6F61;
        }

        .login .message {
            border-left: 4px solid #32CD32;
            background: #F0FDF4;
            border-radius: 12px;
            padding: 16px;
            font-family: 'Nunito', sans-serif;
        }

        .login #login_error {
            border-left: 4px solid #FF6F61;
            background: #FEF2F2;
            border-radius: 12px;
            padding: 16px;
            font-family: 'Nunito', sans-serif;
            box-shadow: none;
        }

        @media screen and (max-width: 640px) {
            #loginform, #lostpasswordform, #registerform {
                padding: 30px 24px;
            }
            #login h1 a {
                width: 100px;
                height: 100px;
            }
        }
    </style>
    <?php
}
add_action( 'login_enqueue_scripts', 'funlearnsmile_login_stylesheet' );

function funlearnsmile_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'funlearnsmile_login_logo_url' );

function funlearnsmile_login_logo_url_title() {
    return get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' );
}
add_filter( 'login_headertext', 'funlearnsmile_login_logo_url_title' );

/**
 * Create Donations Table on Theme Activation
 */
function funlearnsmile_create_donations_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'funlearnsmile_donations';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        order_id varchar(255) NOT NULL,
        payer_email varchar(255) NOT NULL,
        payer_name varchar(255) NOT NULL,
        amount decimal(10,2) NOT NULL,
        currency varchar(10) NOT NULL,
        donation_type varchar(50) DEFAULT 'one-time',
        status varchar(50) NOT NULL,
        transaction_data text,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY  (id),
        KEY order_id (order_id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}
add_action( 'after_switch_theme', 'funlearnsmile_create_donations_table' );

/**
 * Handle PayPal Donation Logging
 */
function funlearnsmile_log_donation() {
    global $wpdb;

    // Verify nonce
    if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( $_POST['nonce'], 'funlearnsmile_donation_nonce' ) ) {
        wp_send_json_error( array( 'message' => 'Security check failed.' ) );
    }

    // Get POST data
    $order_id = sanitize_text_field( $_POST['orderID'] );
    $details = json_decode( stripslashes( $_POST['details'] ), true );

    if ( ! $order_id || ! $details ) {
        wp_send_json_error( array( 'message' => 'Invalid data.' ) );
    }

    // Extract donation info
    $payer_email = sanitize_email( $details['payer']['email_address'] ?? '' );
    $payer_name = sanitize_text_field( $details['payer']['name']['given_name'] ?? '' ) . ' ' . 
                  sanitize_text_field( $details['payer']['name']['surname'] ?? '' );
    $amount = floatval( $details['purchase_units'][0]['amount']['value'] ?? 0 );
    $currency = sanitize_text_field( $details['purchase_units'][0]['amount']['currency_code'] ?? 'GBP' );
    $status = sanitize_text_field( $details['status'] ?? 'PENDING' );

    // Insert into database
    $table_name = $wpdb->prefix . 'funlearnsmile_donations';
    $inserted = $wpdb->insert(
        $table_name,
        array(
            'order_id'         => $order_id,
            'payer_email'      => $payer_email,
            'payer_name'       => trim( $payer_name ),
            'amount'           => $amount,
            'currency'         => $currency,
            'status'           => $status,
            'transaction_data' => json_encode( $details ),
        ),
        array( '%s', '%s', '%s', '%f', '%s', '%s', '%s' )
    );

    if ( $inserted ) {
        // Send email notification to admin
        $admin_email = get_option( 'admin_email' );
        $subject = sprintf( 'New Donation: %s %s', $currency, number_format( $amount, 2 ) );
        $message = sprintf(
            "A new donation has been received!\n\n" .
            "Donor: %s\n" .
            "Email: %s\n" .
            "Amount: %s %s\n" .
            "Order ID: %s\n" .
            "Status: %s\n\n" .
            "View all donations in your WordPress admin.",
            trim( $payer_name ),
            $payer_email,
            $currency,
            number_format( $amount, 2 ),
            $order_id,
            $status
        );

        wp_mail( $admin_email, $subject, $message );

        wp_send_json_success( array( 'message' => 'Donation logged successfully.' ) );
    } else {
        wp_send_json_error( array( 'message' => 'Failed to log donation.' ) );
    }
}
add_action( 'wp_ajax_funlearnsmile_log_donation', 'funlearnsmile_log_donation' );
add_action( 'wp_ajax_nopriv_funlearnsmile_log_donation', 'funlearnsmile_log_donation' );

/**
 * Add Donations Menu to Admin
 */
function funlearnsmile_donations_menu() {
    add_menu_page(
        'Donations',
        'Donations',
        'manage_options',
        'funlearnsmile-donations',
        'funlearnsmile_donations_page',
        'dashicons-heart',
        30
    );
}
add_action( 'admin_menu', 'funlearnsmile_donations_menu' );

/**
 * Donations Admin Page
 */
function funlearnsmile_donations_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'funlearnsmile_donations';
    
    // Get donations
    $donations = $wpdb->get_results( "SELECT * FROM $table_name ORDER BY created_at DESC LIMIT 100" );
    
    // Calculate totals
    $total_donations = $wpdb->get_var( "SELECT COUNT(*) FROM $table_name" );
    $total_amount = $wpdb->get_var( "SELECT SUM(amount) FROM $table_name WHERE status = 'COMPLETED'" );
    
    ?>
    <div class="wrap">
        <h1>💚 Donations</h1>
        
        <div class="funlearnsmile-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin: 20px 0;">
            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <h3 style="margin: 0 0 10px; color: #0D4F7D;">Total Donations</h3>
                <p style="font-size: 32px; font-weight: bold; margin: 0; color: #00BFFF;"><?php echo esc_html( $total_donations ); ?></p>
            </div>
            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <h3 style="margin: 0 0 10px; color: #0D4F7D;">Total Amount</h3>
                <p style="font-size: 32px; font-weight: bold; margin: 0; color: #32CD32;">£<?php echo esc_html( number_format( $total_amount, 2 ) ); ?></p>
            </div>
        </div>

        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Donor Name</th>
                    <th>Email</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Order ID</th>
                </tr>
            </thead>
            <tbody>
                <?php if ( $donations ) : ?>
                    <?php foreach ( $donations as $donation ) : ?>
                        <tr>
                            <td><?php echo esc_html( date( 'M j, Y g:i a', strtotime( $donation->created_at ) ) ); ?></td>
                            <td><strong><?php echo esc_html( $donation->payer_name ); ?></strong></td>
                            <td><?php echo esc_html( $donation->payer_email ); ?></td>
                            <td><strong style="color: #32CD32;"><?php echo esc_html( $donation->currency . ' ' . number_format( $donation->amount, 2 ) ); ?></strong></td>
                            <td>
                                <?php if ( $donation->status === 'COMPLETED' ) : ?>
                                    <span style="background: #32CD32; color: white; padding: 4px 12px; border-radius: 12px; font-size: 12px; font-weight: 600;">✓ Completed</span>
                                <?php else : ?>
                                    <span style="background: #FFD700; color: #000; padding: 4px 12px; border-radius: 12px; font-size: 12px; font-weight: 600;"><?php echo esc_html( $donation->status ); ?></span>
                                <?php endif; ?>
                            </td>
                            <td><code><?php echo esc_html( $donation->order_id ); ?></code></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6" style="text-align: center; padding: 40px;">
                            <p style="font-size: 16px; color: #666;">No donations yet. Share your donation page to start receiving support!</p>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php
}

/**
 * Register Gallery Items Custom Post Type
 */
function funlearnsmile_register_gallery_cpt() {
    $labels = array(
        'name'                  => _x( 'Gallery Items', 'Post Type General Name', 'funlearnsmile' ),
        'singular_name'         => _x( 'Gallery Item', 'Post Type Singular Name', 'funlearnsmile' ),
        'menu_name'             => __( 'Gallery', 'funlearnsmile' ),
        'name_admin_bar'        => __( 'Gallery Item', 'funlearnsmile' ),
        'archives'              => __( 'Gallery Archives', 'funlearnsmile' ),
        'attributes'            => __( 'Gallery Item Attributes', 'funlearnsmile' ),
        'parent_item_colon'     => __( 'Parent Item:', 'funlearnsmile' ),
        'all_items'             => __( 'All Gallery Items', 'funlearnsmile' ),
        'add_new_item'          => __( 'Add New Gallery Item', 'funlearnsmile' ),
        'add_new'               => __( 'Add New', 'funlearnsmile' ),
        'new_item'              => __( 'New Gallery Item', 'funlearnsmile' ),
        'edit_item'             => __( 'Edit Gallery Item', 'funlearnsmile' ),
        'update_item'           => __( 'Update Gallery Item', 'funlearnsmile' ),
        'view_item'             => __( 'View Gallery Item', 'funlearnsmile' ),
        'view_items'            => __( 'View Gallery Items', 'funlearnsmile' ),
        'search_items'          => __( 'Search Gallery Items', 'funlearnsmile' ),
        'not_found'             => __( 'Not found', 'funlearnsmile' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'funlearnsmile' ),
        'featured_image'        => __( 'Gallery Image', 'funlearnsmile' ),
        'set_featured_image'    => __( 'Set gallery image', 'funlearnsmile' ),
        'remove_featured_image' => __( 'Remove gallery image', 'funlearnsmile' ),
        'use_featured_image'    => __( 'Use as gallery image', 'funlearnsmile' ),
        'insert_into_item'      => __( 'Insert into gallery item', 'funlearnsmile' ),
        'uploaded_to_this_item' => __( 'Uploaded to this gallery item', 'funlearnsmile' ),
        'items_list'            => __( 'Gallery items list', 'funlearnsmile' ),
        'items_list_navigation' => __( 'Gallery items list navigation', 'funlearnsmile' ),
        'filter_items_list'     => __( 'Filter gallery items list', 'funlearnsmile' ),
    );

    $args = array(
        'label'                 => __( 'Gallery Item', 'funlearnsmile' ),
        'description'           => __( 'Gallery items for the photo gallery', 'funlearnsmile' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'excerpt' ),
        'hierarchical'          => false,
        'public'                => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 25,
        'menu_icon'             => 'dashicons-format-gallery',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );

    register_post_type( 'gallery_item', $args );
}
add_action( 'init', 'funlearnsmile_register_gallery_cpt', 0 );

/**
 * Register Gallery Category Taxonomy
 */
function funlearnsmile_register_gallery_taxonomy() {
    $labels = array(
        'name'                       => _x( 'Gallery Categories', 'Taxonomy General Name', 'funlearnsmile' ),
        'singular_name'              => _x( 'Gallery Category', 'Taxonomy Singular Name', 'funlearnsmile' ),
        'menu_name'                  => __( 'Categories', 'funlearnsmile' ),
        'all_items'                  => __( 'All Categories', 'funlearnsmile' ),
        'parent_item'                => __( 'Parent Category', 'funlearnsmile' ),
        'parent_item_colon'          => __( 'Parent Category:', 'funlearnsmile' ),
        'new_item_name'              => __( 'New Category Name', 'funlearnsmile' ),
        'add_new_item'               => __( 'Add New Category', 'funlearnsmile' ),
        'edit_item'                  => __( 'Edit Category', 'funlearnsmile' ),
        'update_item'                => __( 'Update Category', 'funlearnsmile' ),
        'view_item'                  => __( 'View Category', 'funlearnsmile' ),
        'separate_items_with_commas' => __( 'Separate categories with commas', 'funlearnsmile' ),
        'add_or_remove_items'        => __( 'Add or remove categories', 'funlearnsmile' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'funlearnsmile' ),
        'popular_items'              => __( 'Popular Categories', 'funlearnsmile' ),
        'search_items'               => __( 'Search Categories', 'funlearnsmile' ),
        'not_found'                  => __( 'Not Found', 'funlearnsmile' ),
        'no_terms'                   => __( 'No categories', 'funlearnsmile' ),
        'items_list'                 => __( 'Categories list', 'funlearnsmile' ),
        'items_list_navigation'      => __( 'Categories list navigation', 'funlearnsmile' ),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => false,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => false,
        'show_tagcloud'              => false,
        'show_in_rest'               => true,
    );

    register_taxonomy( 'gallery_category', array( 'gallery_item' ), $args );
}
add_action( 'init', 'funlearnsmile_register_gallery_taxonomy', 0 );

/**
 * Create Default Gallery Categories
 */
function funlearnsmile_create_default_gallery_categories() {
    // Check if categories already exist
    if ( term_exists( 'Activities', 'gallery_category' ) ) {
        return;
    }

    // Create default categories
    $categories = array(
        'Activities'  => 'Children playing games, sports, and outdoor activities',
        'Learning'    => 'Educational activities, reading, arts and crafts',
        'Events'      => 'Special events, celebrations, and gatherings',
        'Community'   => 'Community engagement, volunteers, and team activities',
    );

    foreach ( $categories as $name => $description ) {
        wp_insert_term(
            $name,
            'gallery_category',
            array(
                'description' => $description,
                'slug'        => strtolower( $name ),
            )
        );
    }
}
add_action( 'init', 'funlearnsmile_create_default_gallery_categories' );

/**
 * Customize Gallery Admin Columns
 */
function funlearnsmile_gallery_columns( $columns ) {
    $new_columns = array();
    $new_columns['cb'] = $columns['cb'];
    $new_columns['image'] = __( 'Image', 'funlearnsmile' );
    $new_columns['title'] = $columns['title'];
    $new_columns['taxonomy-gallery_category'] = __( 'Category', 'funlearnsmile' );
    $new_columns['date'] = $columns['date'];
    return $new_columns;
}
add_filter( 'manage_gallery_item_posts_columns', 'funlearnsmile_gallery_columns' );

/**
 * Display Gallery Image in Admin Column
 */
function funlearnsmile_gallery_column_content( $column_name, $post_id ) {
    if ( $column_name === 'image' ) {
        $thumbnail = get_the_post_thumbnail( $post_id, array( 80, 80 ), array( 'style' => 'border-radius: 8px;' ) );
        echo $thumbnail ? $thumbnail : '<span style="color: #999;">No image</span>';
    }
}
add_action( 'manage_gallery_item_posts_custom_column', 'funlearnsmile_gallery_column_content', 10, 2 );