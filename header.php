<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'funlearnsmile' ); ?></a>

<!-- Header -->
<header class="site-header fixed top-0 left-0 right-0 z-50 bg-white shadow-md transition-all duration-300" id="masthead">
    <nav class="container-custom py-4" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'funlearnsmile' ); ?>">
        <div class="flex items-center justify-between">
            
            <!-- Logo -->
            <div class="site-branding">
                <?php if ( has_custom_logo() ) : ?>
                    <div class="custom-logo-link">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php else : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="flex items-center space-x-3">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon.png' ); ?>" 
                             alt="<?php bloginfo( 'name' ); ?>" 
                             class="h-12 w-12">
                        <div>
                            <h1 class="text-2xl font-fredoka font-bold text-deep-blue">
                                <span class="text-soft-coral">Fun</span><span class="text-deep-blue">Learn</span><span class="text-sky-blue">Smile</span>
                            </h1>
                        </div>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-8">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'flex items-center space-x-6',
                    'container'      => false,
                    'fallback_cb'    => false,
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'link_before'    => '<span class="nav-link">',
                    'link_after'     => '</span>',
                ) );
                ?>
                
                <!-- Donate Button -->
                <a href="<?php echo esc_url( home_url( '/donate' ) ); ?>" class="btn btn-primary">
                    <?php esc_html_e( 'Donate', 'funlearnsmile' ); ?>
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <button class="lg:hidden mobile-menu-toggle p-2 focus:outline-none focus:ring-2 focus:ring-soft-coral rounded-lg" 
                    aria-label="<?php esc_attr_e( 'Toggle mobile menu', 'funlearnsmile' ); ?>"
                    aria-expanded="false">
                <svg class="w-8 h-8 text-deep-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </nav>
</header>

<!-- Mobile Menu -->
<div class="mobile-menu closed lg:hidden">
    <div class="h-full flex flex-col bg-white">
        
        <!-- Mobile Menu Header -->
        <div class="flex items-center justify-between p-6 border-b border-gray-200">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon.png' ); ?>" 
                 alt="<?php bloginfo( 'name' ); ?>" 
                 class="h-10 w-10">
            <button class="mobile-menu-close p-2 focus:outline-none focus:ring-2 focus:ring-soft-coral rounded-lg" 
                    aria-label="<?php esc_attr_e( 'Close mobile menu', 'funlearnsmile' ); ?>">
                <svg class="w-8 h-8 text-deep-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu Links -->
        <div class="flex-1 overflow-y-auto p-6">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'space-y-4',
                'container'      => false,
                'fallback_cb'    => false,
                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'link_before'    => '<span class="block text-2xl font-fredoka font-semibold text-gray-700 hover:text-soft-coral py-2">',
                'link_after'     => '</span>',
            ) );
            ?>
        </div>

        <!-- Mobile Menu Footer -->
        <div class="p-6 border-t border-gray-200">
            <a href="<?php echo esc_url( home_url( '/donate' ) ); ?>" class="btn btn-primary w-full text-center block">
                <?php esc_html_e( 'Donate Now', 'funlearnsmile' ); ?>
            </a>
        </div>
    </div>
</div>

<main id="primary" class="site-main pt-20">