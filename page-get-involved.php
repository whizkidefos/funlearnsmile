<?php
/**
 * Template Name: Get Involved
 * Description: Custom template for Get Involved page
 *
 * @package FunLearnSmile
 */

get_header();
?>

<div class="get-involved-page">
    
    <!-- Hero Section -->
    <section class="relative py-20 lg:py-32 bg-gradient-to-br from-grass-green/10 via-bright-yellow/10 to-soft-coral/10 overflow-hidden">
        <div class="absolute inset-0 bg-pattern-dots opacity-20"></div>
        
        <div class="container-custom relative z-10">
            <div class="max-w-4xl mx-auto text-center animate-on-scroll">
                <div class="inline-block bg-gradient-to-br from-grass-green to-sky-blue text-white p-6 rounded-3xl shadow-2xl mb-8">
                    <svg class="w-16 h-16 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                    </svg>
                </div>
                <h1 class="font-fredoka font-bold text-5xl md:text-6xl lg:text-7xl text-deep-blue mb-6">
                    Get <span class="text-gradient-learning">Involved</span>
                </h1>
                <p class="text-2xl md:text-3xl text-gray-700 font-nunito leading-relaxed">
                    Join us in bringing joy and learning to children
                </p>
            </div>
        </div>
    </section>

    <!-- Ways to Get Involved -->
    <section class="section bg-white">
        <div class="container-custom">
            
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="font-fredoka font-bold text-4xl md:text-5xl text-deep-blue mb-4">
                    Ways to Make a Difference
                </h2>
                <p class="text-xl text-gray-600 font-nunito max-w-3xl mx-auto">
                    There are many ways you can support FunLearn Smile
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Volunteer -->
                <div class="card overflow-hidden group animate-on-scroll" style="animation-delay: 0.1s;">
                    <div class="h-3 bg-gradient-to-r from-soft-coral to-warm-orange"></div>
                    <div class="p-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-soft-coral to-warm-orange rounded-3xl flex items-center justify-center mb-6 shadow-xl group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                            </svg>
                        </div>
                        <h3 class="font-fredoka font-bold text-2xl text-deep-blue mb-4">Volunteer</h3>
                        <p class="text-gray-700 font-nunito leading-relaxed mb-6">
                            Join our team of dedicated volunteers helping children learn through play.
                        </p>
                        <ul class="space-y-2 mb-6 text-gray-600 font-nunito">
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-soft-coral flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Work directly with children</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-soft-coral flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Flexible schedules</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-soft-coral flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Training provided</span>
                            </li>
                        </ul>
                        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary w-full text-center">
                            Apply to Volunteer
                        </a>
                    </div>
                </div>

                <!-- Donate -->
                <div class="card overflow-hidden group animate-on-scroll" style="animation-delay: 0.2s;">
                    <div class="h-3 bg-gradient-to-r from-sky-blue to-grass-green"></div>
                    <div class="p-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-sky-blue to-grass-green rounded-3xl flex items-center justify-center mb-6 shadow-xl group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"></path>
                            </svg>
                        </div>
                        <h3 class="font-fredoka font-bold text-2xl text-deep-blue mb-4">Donate</h3>
                        <p class="text-gray-700 font-nunito leading-relaxed mb-6">
                            Your financial support directly impacts children's lives and learning.
                        </p>
                        <ul class="space-y-2 mb-6 text-gray-600 font-nunito">
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-sky-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>One-time or monthly giving</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-sky-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Secure PayPal donation</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-sky-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Tax-deductible (where applicable)</span>
                            </li>
                        </ul>
                        <a href="<?php echo esc_url( home_url( '/donate' ) ); ?>" class="btn btn-secondary w-full text-center">
                            Donate Now
                        </a>
                    </div>
                </div>

                <!-- Partner -->
                <div class="card overflow-hidden group animate-on-scroll" style="animation-delay: 0.3s;">
                    <div class="h-3 bg-gradient-to-r from-bright-yellow to-warm-orange"></div>
                    <div class="p-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-bright-yellow to-warm-orange rounded-3xl flex items-center justify-center mb-6 shadow-xl group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                            </svg>
                        </div>
                        <h3 class="font-fredoka font-bold text-2xl text-deep-blue mb-4">Partner</h3>
                        <p class="text-gray-700 font-nunito leading-relaxed mb-6">
                            Organizations and businesses can partner with us for lasting impact.
                        </p>
                        <ul class="space-y-2 mb-6 text-gray-600 font-nunito">
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-bright-yellow flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Corporate partnerships</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-bright-yellow flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>School collaborations</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-bright-yellow flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Community engagement</span>
                            </li>
                        </ul>
                        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-tertiary w-full text-center">
                            Become a Partner
                        </a>
                    </div>
                </div>

                <!-- Fundraise -->
                <div class="card overflow-hidden group animate-on-scroll" style="animation-delay: 0.4s;">
                    <div class="h-3 bg-gradient-to-r from-grass-green to-sky-blue"></div>
                    <div class="p-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-grass-green to-sky-blue rounded-3xl flex items-center justify-center mb-6 shadow-xl group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="font-fredoka font-bold text-2xl text-deep-blue mb-4">Fundraise</h3>
                        <p class="text-gray-700 font-nunito leading-relaxed mb-6">
                            Create your own fundraising campaign to support our mission.
                        </p>
                        <ul class="space-y-2 mb-6 text-gray-600 font-nunito">
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-grass-green flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Birthday campaigns</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-grass-green flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Challenge events</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-grass-green flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Community events</span>
                            </li>
                        </ul>
                        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline w-full text-center">
                            Start Fundraising
                        </a>
                    </div>
                </div>

                <!-- Donate Items -->
                <div class="card overflow-hidden group animate-on-scroll" style="animation-delay: 0.5s;">
                    <div class="h-3 bg-gradient-to-r from-soft-coral to-bright-yellow"></div>
                    <div class="p-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-soft-coral to-bright-yellow rounded-3xl flex items-center justify-center mb-6 shadow-xl group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                            </svg>
                        </div>
                        <h3 class="font-fredoka font-bold text-2xl text-deep-blue mb-4">Donate Items</h3>
                        <p class="text-gray-700 font-nunito leading-relaxed mb-6">
                            Donate educational materials, toys, books, and supplies.
                        </p>
                        <ul class="space-y-2 mb-6 text-gray-600 font-nunito">
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-soft-coral flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Educational toys & games</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-soft-coral flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Books & school supplies</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-soft-coral flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Sports equipment</span>
                            </li>
                        </ul>
                        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline w-full text-center">
                            Arrange Donation
                        </a>
                    </div>
                </div>

                <!-- Spread the Word -->
                <div class="card overflow-hidden group animate-on-scroll" style="animation-delay: 0.6s;">
                    <div class="h-3 bg-gradient-to-r from-sky-blue to-bright-yellow"></div>
                    <div class="p-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-sky-blue to-bright-yellow rounded-3xl flex items-center justify-center mb-6 shadow-xl group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"></path>
                            </svg>
                        </div>
                        <h3 class="font-fredoka font-bold text-2xl text-deep-blue mb-4">Spread the Word</h3>
                        <p class="text-gray-700 font-nunito leading-relaxed mb-6">
                            Share our mission and help us reach more people and children.
                        </p>
                        <ul class="space-y-2 mb-6 text-gray-600 font-nunito">
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-sky-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Follow us on social media</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-sky-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Share our posts & stories</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-sky-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Tell friends & family</span>
                            </li>
                        </ul>
                        <div class="flex space-x-3">
                            <?php if ( get_theme_mod( 'instagram_url' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'instagram_url' ) ); ?>" 
                               target="_blank" 
                               class="flex-1 bg-soft-coral hover:bg-red-500 text-white py-3 rounded-full font-fredoka font-semibold text-center transition-all duration-300">
                                Instagram
                            </a>
                            <?php endif; ?>
                            <?php if ( get_theme_mod( 'facebook_url' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'facebook_url' ) ); ?>" 
                               target="_blank" 
                               class="flex-1 bg-sky-blue hover:bg-blue-500 text-white py-3 rounded-full font-fredoka font-semibold text-center transition-all duration-300">
                                Facebook
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Volunteer Requirements -->
    <section class="section bg-gradient-to-br from-sky-blue/5 to-grass-green/5">
        <div class="container-custom">
            
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="font-fredoka font-bold text-4xl md:text-5xl text-deep-blue mb-4">
                    Volunteer with Us
                </h2>
                <p class="text-xl text-gray-600 font-nunito max-w-3xl mx-auto">
                    Make a direct impact on children's lives
                </p>
            </div>

            <div class="max-w-5xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    
                    <div class="animate-on-scroll">
                        <div class="card-playful p-8 md:p-10">
                            <h3 class="font-fredoka font-bold text-3xl text-deep-blue mb-6">What We're Looking For</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start space-x-3">
                                    <div class="flex-shrink-0 w-8 h-8 bg-soft-coral rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="font-nunito text-gray-700">Passionate about children's education and wellbeing</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <div class="flex-shrink-0 w-8 h-8 bg-sky-blue rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="font-nunito text-gray-700">Patient, energetic, and creative individuals</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <div class="flex-shrink-0 w-8 h-8 bg-grass-green rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="font-nunito text-gray-700">Able to commit to regular volunteer sessions</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <div class="flex-shrink-0 w-8 h-8 bg-bright-yellow rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-deep-blue" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="font-nunito text-gray-700">Willing to undergo background checks (UK DBS or equivalent)</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="animate-on-scroll" style="animation-delay: 0.2s;">
                        <div class="card p-8 md:p-10">
                            <h3 class="font-fredoka font-bold text-3xl text-deep-blue mb-6">What You'll Get</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start space-x-3">
                                    <div class="flex-shrink-0 w-8 h-8 bg-soft-coral/20 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-soft-coral" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    </div>
                                    <span class="font-nunito text-gray-700">Comprehensive training and ongoing support</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <div class="flex-shrink-0 w-8 h-8 bg-sky-blue/20 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-sky-blue" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                                        </svg>
                                    </div>
                                    <span class="font-nunito text-gray-700">Join a welcoming community of like-minded volunteers</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <div class="flex-shrink-0 w-8 h-8 bg-grass-green/20 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-grass-green" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z"></path>
                                        </svg>
                                    </div>
                                    <span class="font-nunito text-gray-700">Develop new skills and gain valuable experience</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <div class="flex-shrink-0 w-8 h-8 bg-bright-yellow/20 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-warm-orange" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"></path>
                                        </svg>
                                    </div>
                                    <span class="font-nunito text-gray-700">The joy of making a real difference in children's lives</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="text-center mt-12 animate-on-scroll">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary text-lg">
                        <span class="flex items-center justify-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            <span>Apply to Volunteer</span>
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section bg-white">
        <div class="container-custom">
            
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="font-fredoka font-bold text-4xl md:text-5xl text-deep-blue mb-4">
                    Hear from Our Volunteers
                </h2>
            </div>

            <?php
            // Query Testimonials
            $testimonials_query = new WP_Query( array(
                'post_type'      => 'testimonial',
                'posts_per_page' => 6,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ) );

            if ( $testimonials_query->have_posts() ) :
            ?>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <?php 
                $delay = 0.1;
                $colors = array( 'soft-coral', 'sky-blue', 'grass-green', 'bright-yellow' );
                $color_index = 0;
                
                while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post();
                    $person_name = get_post_meta( get_the_ID(), '_testimonial_person_name', true );
                    $person_role = get_post_meta( get_the_ID(), '_testimonial_person_role', true );
                    $color = $colors[ $color_index % count( $colors ) ];
                ?>
                
                <div class="card-playful p-8 animate-on-scroll" style="animation-delay: <?php echo esc_attr( $delay ); ?>s;">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="mb-6 flex justify-center">
                            <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'w-20 h-20 rounded-full object-cover shadow-lg' ) ); ?>
                        </div>
                    <?php else : ?>
                        <svg class="w-12 h-12 text-<?php echo esc_attr( $color ); ?>/20 mb-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"></path>
                        </svg>
                    <?php endif; ?>
                    
                    <?php if ( get_the_title() ) : ?>
                        <h3 class="font-fredoka font-bold text-xl text-deep-blue mb-4"><?php the_title(); ?></h3>
                    <?php endif; ?>
                    
                    <blockquote class="text-lg text-gray-800 font-nunito italic mb-6 leading-relaxed">
                        <?php the_content(); ?>
                    </blockquote>
                    
                    <cite class="font-fredoka font-semibold text-lg text-deep-blue not-italic">
                        <?php 
                        if ( $person_name ) {
                            echo '— ' . esc_html( $person_name );
                            if ( $person_role ) {
                                echo ', ' . esc_html( $person_role );
                            }
                        }
                        ?>
                    </cite>
                </div>

                <?php 
                    $delay += 0.1;
                    $color_index++;
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <?php else : ?>
            
            <!-- Empty State -->
            <div class="text-center py-12">
                <p class="text-gray-600 font-nunito text-lg mb-4">No testimonials yet.</p>
                <?php if ( current_user_can( 'edit_posts' ) ) : ?>
                <a href="<?php echo esc_url( admin_url( 'post-new.php?post_type=testimonial' ) ); ?>" class="btn btn-primary">
                    Add First Testimonial
                </a>
                <?php endif; ?>
            </div>
            
            <?php endif; ?>

        </div>
    </section>

</div>

<?php
get_footer();
