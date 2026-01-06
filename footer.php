</main><!-- #primary -->

<!-- Footer -->
<footer class="site-footer bg-gradient-to-br from-deep-blue to-sky-blue text-white mt-16" role="contentinfo">
    
    <!-- Footer Widgets -->
    <?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
    <div class="footer-widgets section">
        <div class="container-custom">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Footer Widget 1 -->
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <div class="footer-widget-area">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
                <?php endif; ?>

                <!-- Footer Widget 2 -->
                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                <div class="footer-widget-area">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div>
                <?php endif; ?>

                <!-- Footer Widget 3 -->
                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                <div class="footer-widget-area">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Footer Main -->
    <div class="footer-main py-12 border-t border-white/20">
        <div class="container-custom">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                
                <!-- About Column -->
                <div class="footer-column lg:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon.png' ); ?>" 
                             alt="<?php bloginfo( 'name' ); ?>" 
                             class="h-16 w-16">
                        <h3 class="text-2xl font-fredoka font-bold">
                            <span class="text-bright-yellow">Fun</span><span class="text-white">Learn</span><span class="text-grass-green">Smile</span>
                        </h3>
                    </div>
                    <p class="text-white/90 font-nunito leading-relaxed mb-6">
                        <?php 
                        $footer_description = get_theme_mod( 'footer_description', 'Bringing joyful, play-based education to disadvantaged children around the world.' );
                        echo wp_kses_post( $footer_description );
                        ?>
                    </p>
                    
                    <!-- Social Media Links -->
                    <div class="social-links">
                        <h4 class="font-fredoka font-semibold text-lg mb-3"><?php esc_html_e( 'Follow Us', 'funlearnsmile' ); ?></h4>
                        <div class="flex space-x-4">
                            <a href="https://www.instagram.com/funlearnsmile/" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               class="w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110"
                               aria-label="<?php esc_attr_e( 'Follow us on Instagram', 'funlearnsmile' ); ?>">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                            <a href="https://facebook.com/funlearnsmile" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               class="w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110"
                               aria-label="<?php esc_attr_e( 'Follow us on Facebook', 'funlearnsmile' ); ?>">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-column">
                    <h4 class="font-fredoka font-semibold text-xl mb-4"><?php esc_html_e( 'Quick Links', 'funlearnsmile' ); ?></h4>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'menu_class'     => 'space-y-2',
                        'container'      => false,
                        'fallback_cb'    => false,
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'link_before'    => '<span class="text-white/80 hover:text-white transition-colors duration-300">',
                        'link_after'     => '</span>',
                    ) );
                    ?>
                </div>

                <!-- Contact Info -->
                <div class="footer-column">
                    <h4 class="font-fredoka font-semibold text-xl mb-4"><?php esc_html_e( 'Contact Us', 'funlearnsmile' ); ?></h4>
                    <div class="space-y-3 text-white/90">
                        <p class="flex items-start space-x-2">
                            <svg class="w-5 h-5 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <a href="mailto:funlearnsmilecharity@gmail.com" class="hover:text-white">
                                funlearnsmilecharity@gmail.com
                            </a>
                        </p>
                        <p class="flex items-start space-x-2">
                            <svg class="w-5 h-5 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>
                                <?php esc_html_e( 'United Kingdom', 'funlearnsmile' ); ?>
                            </span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom py-6 border-t border-white/20">
        <div class="container-custom">
            <div class="flex flex-col items-center justify-center space-y-3 text-center">
                <p class="text-white/80 text-sm font-nunito">
                    &copy; <?php echo date( 'Y' ); ?> 
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-white">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                    <?php esc_html_e( '. All rights reserved.', 'funlearnsmile' ); ?>
                    <span class="mx-2">•</span>
                    <?php esc_html_e( 'Registered Charity', 'funlearnsmile' ); ?>
                </p>
                <?php if ( get_theme_mod( 'footer_credit_url' ) ) : ?>
                <p class="text-white/60 font-nunito text-sm">
                    <a href="<?php echo esc_url( get_theme_mod( 'footer_credit_url' ) ); ?>" 
                       target="_blank" 
                       rel="noopener noreferrer"
                       class="hover:text-bright-yellow transition-colors duration-300 inline-flex items-center space-x-1">
                        <span>Built with</span>
                        <svg class="w-4 h-4 text-soft-coral animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"></path>
                        </svg>
                        <span>in Manchester</span>
                    </a>
                </p>
                <?php endif; ?>
            </div>
        </div>
    </div>

</footer>

<!-- Back to Top Button -->
<button class="back-to-top fixed bottom-8 right-8 w-12 h-12 bg-soft-coral text-white rounded-full shadow-lg flex items-center justify-center transition-all duration-300 opacity-0 invisible hover:bg-red-500 hover:scale-110 z-40 no-print" 
        aria-label="<?php esc_attr_e( 'Back to top', 'funlearnsmile' ); ?>">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
    </svg>
</button>

<?php if ( get_theme_mod( 'whatsapp_number' ) ) : ?>
<!-- WhatsApp Floating Button -->
<a href="https://wa.me/<?php echo esc_attr( preg_replace( '/[^0-9]/', '', get_theme_mod( 'whatsapp_number' ) ) ); ?>?text=<?php echo esc_attr( urlencode( get_theme_mod( 'whatsapp_message', 'Hi FunLearn Smile! I have a question about...' ) ) ); ?>" 
   target="_blank"
   rel="noopener noreferrer"
   class="whatsapp-button fixed bottom-8 left-8 bg-[#25D366] hover:bg-[#20BA5A] text-white rounded-full shadow-2xl flex items-center justify-center transition-all duration-300 hover:scale-110 z-40 no-print group"
   aria-label="<?php esc_attr_e( 'Chat on WhatsApp', 'funlearnsmile' ); ?>">
    
    <!-- WhatsApp Icon -->
    <div class="whatsapp-icon-container flex items-center justify-center">
        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>
    </div>

    <!-- Tooltip on hover -->
    <span class="whatsapp-tooltip absolute right-full mr-3 bg-deep-blue text-white px-4 py-2 rounded-lg font-nunito font-semibold text-sm whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
        <?php esc_html_e( 'Chat with us!', 'funlearnsmile' ); ?>
    </span>

    <!-- Pulse animation ring -->
    <span class="whatsapp-pulse absolute inset-0 rounded-full bg-[#25D366] opacity-75"></span>
</a>
<?php endif; ?>

<style>
    .back-to-top.visible {
        opacity: 1;
        visibility: visible;
    }

    /* WhatsApp Button Styles */
    .whatsapp-button {
        width: 64px;
        height: 64px;
        animation: whatsapp-entrance 0.6s ease-out, whatsapp-bounce 2s ease-in-out infinite 0.6s;
    }

    .whatsapp-icon-container {
        position: relative;
        z-index: 2;
    }

    .whatsapp-pulse {
        animation: whatsapp-pulse 2s cubic-bezier(0, 0, 0.2, 1) infinite;
    }

    /* Entrance animation */
    @keyframes whatsapp-entrance {
        0% {
            transform: scale(0) rotate(-180deg);
            opacity: 0;
        }
        50% {
            transform: scale(1.2) rotate(20deg);
        }
        100% {
            transform: scale(1) rotate(0deg);
            opacity: 1;
        }
    }

    /* Bounce animation */
    @keyframes whatsapp-bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-8px);
        }
    }

    /* Pulse animation */
    @keyframes whatsapp-pulse {
        0% {
            transform: scale(1);
            opacity: 0.75;
        }
        50% {
            transform: scale(1.15);
            opacity: 0;
        }
        100% {
            transform: scale(1);
            opacity: 0;
        }
    }

    /* Responsive adjustments */
    @media (max-width: 640px) {
        .whatsapp-button {
            width: 56px;
            height: 56px;
            bottom: 1rem;
            left: 1rem;
        }
        
        .whatsapp-button svg {
            width: 1.75rem;
            height: 1.75rem;
        }

        .back-to-top {
            width: 48px;
            height: 48px;
            bottom: 1rem;
            right: 1rem;
        }

        .whatsapp-tooltip {
            display: none; /* Hide tooltip on mobile */
        }
    }

    /* When back-to-top is visible, adjust WhatsApp button position */
    @media (min-width: 641px) {
        .back-to-top.visible ~ .whatsapp-button {
            bottom: 5.5rem; /* Stack above back-to-top button on desktop */
        }
    }

    @media (max-width: 640px) {
        .back-to-top.visible ~ .whatsapp-button {
            bottom: 4.5rem; /* Stack above back-to-top button on mobile */
        }
    }
</style>

<?php wp_footer(); ?>

</body>
</html>