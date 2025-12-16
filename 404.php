<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FunLearnSmile
 */

get_header();
?>

<div class="error-404-wrapper section bg-gradient-to-br from-bright-yellow/10 via-sky-blue/10 to-soft-coral/10 min-h-screen flex items-center">
    <div class="container-custom">
        
        <div class="max-w-4xl mx-auto text-center">
            
            <!-- 404 Animation -->
            <div class="relative mb-12 animate-on-scroll">
                <!-- Large 404 Number -->
                <div class="relative inline-block">
                    <h1 class="font-fredoka font-bold text-9xl md:text-[12rem] lg:text-[16rem] text-transparent bg-clip-text bg-gradient-to-r from-soft-coral via-bright-yellow to-sky-blue opacity-20 select-none">
                        404
                    </h1>
                    
                    <!-- Sad Icon -->
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <div class="relative animate-bounce-slow">
                            <!-- Sad Face -->
                            <svg class="w-32 h-32 md:w-48 md:h-48 text-soft-coral" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"></circle>
                                <!-- Eyes -->
                                <circle cx="8" cy="9" r="1.5" fill="currentColor"></circle>
                                <circle cx="16" cy="9" r="1.5" fill="currentColor"></circle>
                                <!-- Sad Mouth -->
                                <path d="M8 16 Q12 13 16 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" fill="none"></path>
                            </svg>
                            
                            <!-- Floating Tears -->
                            <div class="absolute top-12 left-6 w-2 h-3 bg-sky-blue rounded-full animate-float"></div>
                            <div class="absolute top-16 left-8 w-2 h-3 bg-sky-blue rounded-full animate-float" style="animation-delay: 0.5s;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Error Message -->
            <div class="animate-on-scroll" style="animation-delay: 0.2s;">
                <h2 class="font-fredoka font-bold text-4xl md:text-5xl lg:text-6xl text-deep-blue mb-6">
                    <?php esc_html_e( 'Oops! Page Not Found', 'funlearnsmile' ); ?>
                </h2>
                <p class="text-xl md:text-2xl text-gray-700 font-nunito mb-12 leading-relaxed max-w-2xl mx-auto">
                    <?php esc_html_e( 'It looks like the page you\'re looking for took a play break! Let\'s help you find your way back.', 'funlearnsmile' ); ?>
                </p>
            </div>

            <!-- Search Form -->
            <div class="mb-12 animate-on-scroll max-w-2xl mx-auto" style="animation-delay: 0.3s;">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <div class="relative">
                        <input type="search" 
                               class="form-input w-full pr-24" 
                               placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'funlearnsmile' ); ?>" 
                               value="<?php echo get_search_query(); ?>" 
                               name="s">
                        <button type="submit" 
                                class="absolute right-2 top-1/2 transform -translate-y-1/2 btn btn-secondary">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Quick Links -->
            <div class="animate-on-scroll" style="animation-delay: 0.4s;">
                <h3 class="font-fredoka font-semibold text-2xl text-deep-blue mb-6">
                    <?php esc_html_e( 'Try these helpful links instead:', 'funlearnsmile' ); ?>
                </h3>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    
                    <!-- Home -->
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
                       class="card p-6 hover:shadow-2xl transition-all duration-300 group">
                        <div class="w-12 h-12 bg-gradient-to-br from-bright-yellow to-warm-orange rounded-2xl flex items-center justify-center mb-4 mx-auto">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                        </div>
                        <h4 class="font-fredoka font-semibold text-lg text-deep-blue group-hover:text-soft-coral transition-colors duration-300">
                            <?php esc_html_e( 'Home', 'funlearnsmile' ); ?>
                        </h4>
                    </a>

                    <!-- About -->
                    <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" 
                       class="card p-6 hover:shadow-2xl transition-all duration-300 group">
                        <div class="w-12 h-12 bg-gradient-to-br from-sky-blue to-grass-green rounded-2xl flex items-center justify-center mb-4 mx-auto">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h4 class="font-fredoka font-semibold text-lg text-deep-blue group-hover:text-soft-coral transition-colors duration-300">
                            <?php esc_html_e( 'About Us', 'funlearnsmile' ); ?>
                        </h4>
                    </a>

                    <!-- Our Work -->
                    <a href="<?php echo esc_url( home_url( '/our-work' ) ); ?>" 
                       class="card p-6 hover:shadow-2xl transition-all duration-300 group">
                        <div class="w-12 h-12 bg-gradient-to-br from-soft-coral to-bright-yellow rounded-2xl flex items-center justify-center mb-4 mx-auto">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path>
                            </svg>
                        </div>
                        <h4 class="font-fredoka font-semibold text-lg text-deep-blue group-hover:text-soft-coral transition-colors duration-300">
                            <?php esc_html_e( 'Our Work', 'funlearnsmile' ); ?>
                        </h4>
                    </a>

                    <!-- Contact -->
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" 
                       class="card p-6 hover:shadow-2xl transition-all duration-300 group">
                        <div class="w-12 h-12 bg-gradient-to-br from-grass-green to-sky-blue rounded-2xl flex items-center justify-center mb-4 mx-auto">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                        </div>
                        <h4 class="font-fredoka font-semibold text-lg text-deep-blue group-hover:text-soft-coral transition-colors duration-300">
                            <?php esc_html_e( 'Contact', 'funlearnsmile' ); ?>
                        </h4>
                    </a>

                </div>

                <!-- Primary CTA -->
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
                    <span class="flex items-center justify-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        <span><?php esc_html_e( 'Go Back Home', 'funlearnsmile' ); ?></span>
                    </span>
                </a>
            </div>

        </div>

    </div>
</div>

<?php
get_footer();