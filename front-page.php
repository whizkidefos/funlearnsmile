<?php
/**
 * The front page template file
 *
 * @package FunLearnSmile
 */

get_header();
?>

<!-- Decorative floating shapes throughout -->
<div class="fixed inset-0 pointer-events-none overflow-hidden z-0" aria-hidden="true">
    <div class="absolute top-20 left-10 w-20 h-20 bg-bright-yellow/10 rounded-full animate-float"></div>
    <div class="absolute top-40 right-20 w-32 h-32 bg-sky-blue/10 rounded-full animate-float" style="animation-delay: 1s;"></div>
    <div class="absolute bottom-40 left-1/4 w-24 h-24 bg-soft-coral/10 rounded-full animate-float" style="animation-delay: 2s;"></div>
    <div class="absolute top-1/3 right-1/3 w-16 h-16 bg-grass-green/10 rounded-full animate-float" style="animation-delay: 1.5s;"></div>
</div>

<!-- Hero Section -->
<section class="hero-section relative overflow-hidden bg-gradient-to-br from-bright-yellow/20 via-sky-blue/10 to-soft-coral/20 py-20 lg:py-32">
    
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 bg-pattern-playful"></div>
    <div class="absolute top-10 left-10 w-32 h-32 bg-bright-yellow/20 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-20 right-20 w-40 h-40 bg-sky-blue/20 rounded-full blur-3xl animate-float" style="animation-delay: 1s;"></div>
    <div class="absolute top-1/2 left-1/4 w-24 h-24 bg-soft-coral/20 rounded-full blur-2xl animate-bounce-slow"></div>

    <div class="container-custom relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <!-- Hero Text -->
            <div class="animate-on-scroll">
                <h1 class="font-fredoka font-bold text-5xl md:text-6xl lg:text-7xl text-deep-blue mb-6 leading-tight">
                    Play is children's brain's 
                    <span class="text-gradient-playful">favourite way of learning</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-700 font-nunito mb-8 leading-relaxed">
                    We bring joyful, play-based education to disadvantaged children across Ghana.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="<?php echo esc_url( home_url( '/donate' ) ); ?>" class="btn btn-primary">
                        <span class="flex items-center justify-center space-x-2">
                            <span><?php esc_html_e( 'Donate Now', 'funlearnsmile' ); ?></span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn-outline">
                        <?php esc_html_e( 'Learn More', 'funlearnsmile' ); ?>
                    </a>
                </div>
            </div>

            <!-- Hero Image/Animation -->
            <div class="relative animate-on-scroll" style="animation-delay: 0.2s;">
                <div class="relative">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>" 
                         alt="FunLearn Smile" 
                         class="w-full max-w-lg mx-auto animate-float">
                </div>
                
                <!-- Floating Icons -->
                <div class="absolute -top-8 -left-8 w-20 h-20 bg-bright-yellow rounded-2xl flex items-center justify-center shadow-lg animate-bounce-slow">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                </div>
                <div class="absolute top-1/4 -right-8 w-16 h-16 bg-sky-blue rounded-full flex items-center justify-center shadow-lg animate-bounce-slow" style="animation-delay: 0.5s;">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z"></path>
                    </svg>
                </div>
                <div class="absolute bottom-8 left-1/4 w-14 h-14 bg-grass-green rounded-xl flex items-center justify-center shadow-lg animate-bounce-slow" style="animation-delay: 1s;">
                    <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Mission Statement Section -->
<section class="section bg-white">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto text-center animate-on-scroll">
            <h2 class="font-fredoka font-bold text-4xl md:text-5xl text-deep-blue mb-6">
                <?php esc_html_e( 'Our Purpose', 'funlearnsmile' ); ?>
            </h2>
            <p class="text-xl md:text-2xl text-gray-700 font-nunito leading-relaxed">
                <?php esc_html_e( 'Advancement of the education of young people from disadvantaged and vulnerable communities through a play-based approach.', 'funlearnsmile' ); ?>
            </p>
        </div>
    </div>
</section>

<!-- What We Do Section -->
<section class="section bg-gradient-to-br from-sky-blue/10 to-grass-green/10">
    <div class="container-custom">
        
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="font-fredoka font-bold text-4xl md:text-5xl text-deep-blue mb-4">
                <?php esc_html_e( 'What We Do', 'funlearnsmile' ); ?>
            </h2>
            <p class="text-xl text-gray-700 font-nunito max-w-3xl mx-auto">
                <?php esc_html_e( 'At FunLearn Smile children develop new skills through play', 'funlearnsmile' ); ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Card 1: Play-Based Learning -->
            <div class="card animate-on-scroll" style="animation-delay: 0.1s;">
                <div class="p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-bright-yellow to-warm-orange rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
                        </svg>
                    </div>
                    <h3 class="font-fredoka font-bold text-2xl text-deep-blue mb-3">
                        <?php esc_html_e( 'Play-Based Learning', 'funlearnsmile' ); ?>
                    </h3>
                    <p class="text-gray-600 font-nunito leading-relaxed">
                        <?php esc_html_e( 'Through play, children develop social, mental, and physical skills while learning about the world around them.', 'funlearnsmile' ); ?>
                    </p>
                </div>
            </div>

            <!-- Card 2: Safe Spaces -->
            <div class="card animate-on-scroll" style="animation-delay: 0.2s;">
                <div class="p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-sky-blue to-grass-green rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-fredoka font-bold text-2xl text-deep-blue mb-3">
                        <?php esc_html_e( 'Safe Spaces', 'funlearnsmile' ); ?>
                    </h3>
                    <p class="text-gray-600 font-nunito leading-relaxed">
                        <?php esc_html_e( 'We create private areas where children can explore activities and different approaches to learning with qualified volunteers.', 'funlearnsmile' ); ?>
                    </p>
                </div>
            </div>

            <!-- Card 3: Rich Resources -->
            <div class="card animate-on-scroll" style="animation-delay: 0.3s;">
                <div class="p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-soft-coral to-bright-yellow rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path>
                        </svg>
                    </div>
                    <h3 class="font-fredoka font-bold text-2xl text-deep-blue mb-3">
                        <?php esc_html_e( 'Rich Resources', 'funlearnsmile' ); ?>
                    </h3>
                    <p class="text-gray-600 font-nunito leading-relaxed">
                        <?php esc_html_e( 'From board games to books, LEGO to art supplies, we provide children with resources they may have never experienced before.', 'funlearnsmile' ); ?>
                    </p>
                </div>
            </div>

        </div>

        <!-- CTA Button -->
        <div class="text-center mt-12 animate-on-scroll">
            <a href="<?php echo esc_url( home_url( '/our-work' ) ); ?>" class="btn btn-secondary">
                <?php esc_html_e( 'Learn More About Our Work', 'funlearnsmile' ); ?>
            </a>
        </div>

    </div>
</section>

<!-- Impact Statistics Section -->
<section class="section bg-gradient-to-br from-deep-blue to-sky-blue text-white relative overflow-hidden">
    
    <!-- Background Decoration -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-64 h-64 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
    </div>

    <div class="container-custom relative z-10">
        
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="font-fredoka font-bold text-4xl md:text-5xl mb-4">
                <?php esc_html_e( 'Our Impact', 'funlearnsmile' ); ?>
            </h2>
            <p class="text-xl text-white/90 font-nunito max-w-3xl mx-auto">
                <?php esc_html_e( 'Making a difference in children\'s lives every day', 'funlearnsmile' ); ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            
            <!-- Stat 1 -->
            <div class="text-center animate-on-scroll" style="animation-delay: 0.1s;">
                <div class="mb-4">
                    <span class="counter font-fredoka font-bold text-6xl md:text-7xl block" data-target="500">0</span>
                    <span class="text-bright-yellow text-4xl font-fredoka">+</span>
                </div>
                <p class="text-xl font-nunito text-white/90">
                    <?php esc_html_e( 'Children Supported', 'funlearnsmile' ); ?>
                </p>
            </div>

            <!-- Stat 2 -->
            <div class="text-center animate-on-scroll" style="animation-delay: 0.2s;">
                <div class="mb-4">
                    <span class="counter font-fredoka font-bold text-6xl md:text-7xl block" data-target="10">0</span>
                    <span class="text-bright-yellow text-4xl font-fredoka">+</span>
                </div>
                <p class="text-xl font-nunito text-white/90">
                    <?php esc_html_e( 'Communities Reached', 'funlearnsmile' ); ?>
                </p>
            </div>

            <!-- Stat 3 -->
            <div class="text-center animate-on-scroll" style="animation-delay: 0.3s;">
                <div class="mb-4">
                    <span class="counter font-fredoka font-bold text-6xl md:text-7xl block" data-target="50">0</span>
                    <span class="text-bright-yellow text-4xl font-fredoka">+</span>
                </div>
                <p class="text-xl font-nunito text-white/90">
                    <?php esc_html_e( 'Volunteers', 'funlearnsmile' ); ?>
                </p>
            </div>

        </div>

    </div>
</section>

<!-- Call to Action Section -->
<section class="section bg-white">
    <div class="container-custom">
        <div class="max-w-5xl mx-auto">
            
            <div class="card-playful p-12 md:p-16 text-center animate-on-scroll">
                <h2 class="font-fredoka font-bold text-4xl md:text-5xl text-deep-blue mb-6">
                    <?php esc_html_e( 'Help Us Bring Smiles to More Children', 'funlearnsmile' ); ?>
                </h2>
                <p class="text-xl text-gray-700 font-nunito mb-8 leading-relaxed max-w-3xl mx-auto">
                    <?php esc_html_e( 'Your donation helps us provide play-based education to disadvantaged children, giving them the tools they need to learn, grow, and thrive.', 'funlearnsmile' ); ?>
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo esc_url( home_url( '/donate' ) ); ?>" class="btn btn-primary text-lg">
                        <span class="flex items-center justify-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                            <span><?php esc_html_e( 'Donate Now', 'funlearnsmile' ); ?></span>
                        </span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/get-involved' ) ); ?>" class="btn btn-secondary text-lg">
                        <?php esc_html_e( 'Get Involved', 'funlearnsmile' ); ?>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
get_footer();