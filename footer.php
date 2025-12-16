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
                             class="h-12 w-12">
                        <h3 class="text-2xl font-fredoka font-bold">
                            <span class="text-bright-yellow">Fun</span><span class="text-white">Learn</span><span class="text-grass-green">Smile</span>
                        </h3>
                    </div>
                    <p class="text-white/90 font-nunito leading-relaxed mb-6">
                        <?php 
                        $description = get_bloginfo( 'description', 'display' );
                        if ( $description ) :
                            echo esc_html( $description );
                        else :
                            esc_html_e( 'Bringing joyful, play-based education to disadvantaged children around the world.', 'funlearnsmile' );
                        endif;
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
                            <a href="mailto:infofunlearnsmile@gmail.com" class="hover:text-white">
                                infofunlearnsmile@gmail.com
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
            <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0">
                <p class="text-white/80 text-sm font-nunito">
                    &copy; <?php echo date( 'Y' ); ?> 
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-white">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                    <?php esc_html_e( '. All rights reserved.', 'funlearnsmile' ); ?>
                </p>
                <p class="text-white/80 text-sm font-nunito">
                    <?php esc_html_e( 'Registered Charity', 'funlearnsmile' ); ?>
                </p>
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

<style>
    .back-to-top.visible {
        opacity: 1;
        visibility: visible;
    }
</style>

<?php wp_footer(); ?>

</body>
</html>