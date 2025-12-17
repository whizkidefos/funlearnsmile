<?php
/**
 * Template Name: Contact
 * Description: Custom template for Contact page
 *
 * @package FunLearnSmile
 */

get_header();
?>

<div class="contact-page">
    
    <!-- Hero Section -->
    <section class="relative py-20 lg:py-32 bg-gradient-to-br from-grass-green/10 via-sky-blue/10 to-soft-coral/10 overflow-hidden">
        <div class="absolute inset-0 bg-pattern-playful opacity-20"></div>
        
        <div class="container-custom relative z-10">
            <div class="max-w-4xl mx-auto text-center animate-on-scroll">
                <div class="inline-block bg-gradient-to-br from-sky-blue to-grass-green text-white p-6 rounded-3xl shadow-2xl mb-8">
                    <svg class="w-16 h-16 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                    </svg>
                </div>
                <h1 class="font-fredoka font-bold text-5xl md:text-6xl lg:text-7xl text-deep-blue mb-6">
                    Get in <span class="text-gradient-learning">Touch</span>
                </h1>
                <p class="text-2xl md:text-3xl text-gray-700 font-nunito leading-relaxed">
                    We'd love to hear from you!
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="section bg-white">
        <div class="container-custom">
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                
                <!-- Contact Information -->
                <div class="animate-on-scroll">
                    
                    <h2 class="font-fredoka font-bold text-3xl md:text-4xl text-deep-blue mb-8">
                        Contact Information
                    </h2>

                    <div class="space-y-6 mb-12">
                        
                        <!-- Email -->
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-soft-coral to-warm-orange rounded-2xl flex items-center justify-center shadow-lg">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-fredoka font-semibold text-xl text-deep-blue mb-2">Email</h3>
                                <a href="mailto:<?php echo esc_attr( get_theme_mod( 'contact_email', 'infofunlearnsmile@gmail.com' ) ); ?>" 
                                   class="text-lg text-gray-700 hover:text-soft-coral font-nunito transition-colors duration-300">
                                    <?php echo esc_html( get_theme_mod( 'contact_email', 'infofunlearnsmile@gmail.com' ) ); ?>
                                </a>
                            </div>
                        </div>

                        <!-- Phone (if set) -->
                        <?php if ( get_theme_mod( 'contact_phone' ) ) : ?>
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-sky-blue to-grass-green rounded-2xl flex items-center justify-center shadow-lg">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-fredoka font-semibold text-xl text-deep-blue mb-2">Phone</h3>
                                <a href="tel:<?php echo esc_attr( str_replace( ' ', '', get_theme_mod( 'contact_phone' ) ) ); ?>" 
                                   class="text-lg text-gray-700 hover:text-sky-blue font-nunito transition-colors duration-300">
                                    <?php echo esc_html( get_theme_mod( 'contact_phone' ) ); ?>
                                </a>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Address -->
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-grass-green to-sky-blue rounded-2xl flex items-center justify-center shadow-lg">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-fredoka font-semibold text-xl text-deep-blue mb-2">Location</h3>
                                <p class="text-lg text-gray-700 font-nunito">
                                    <?php echo esc_html( get_theme_mod( 'contact_address', 'United Kingdom' ) ); ?>
                                </p>
                            </div>
                        </div>

                    </div>

                    <!-- Social Media -->
                    <div class="card p-8">
                        <h3 class="font-fredoka font-semibold text-2xl text-deep-blue mb-6">Follow Us</h3>
                        <div class="flex space-x-4">
                            <?php if ( get_theme_mod( 'instagram_url' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'instagram_url' ) ); ?>" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="w-14 h-14 bg-gradient-to-br from-soft-coral to-warm-orange rounded-2xl flex items-center justify-center text-white hover:scale-110 transition-transform duration-300 shadow-lg">
                                <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                            <?php endif; ?>

                            <?php if ( get_theme_mod( 'facebook_url' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'facebook_url' ) ); ?>" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="w-14 h-14 bg-gradient-to-br from-sky-blue to-grass-green rounded-2xl flex items-center justify-center text-white hover:scale-110 transition-transform duration-300 shadow-lg">
                                <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <?php endif; ?>

                            <?php if ( get_theme_mod( 'twitter_url' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'twitter_url' ) ); ?>" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="w-14 h-14 bg-gradient-to-br from-bright-yellow to-warm-orange rounded-2xl flex items-center justify-center text-white hover:scale-110 transition-transform duration-300 shadow-lg">
                                <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>

                <!-- Contact Form -->
                <div class="animate-on-scroll" style="animation-delay: 0.2s;">
                    
                    <div class="card p-8 md:p-10">
                        <h2 class="font-fredoka font-bold text-3xl md:text-4xl text-deep-blue mb-6">
                            Send Us a Message
                        </h2>

                        <form id="contact-form" class="space-y-6">
                            
                            <!-- Name -->
                            <div>
                                <label for="contact-name" class="block font-nunito font-semibold text-gray-700 mb-2">
                                    Your Name <span class="text-soft-coral">*</span>
                                </label>
                                <input type="text" 
                                       id="contact-name" 
                                       name="name" 
                                       class="form-input"
                                       required>
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="contact-email" class="block font-nunito font-semibold text-gray-700 mb-2">
                                    Your Email <span class="text-soft-coral">*</span>
                                </label>
                                <input type="email" 
                                       id="contact-email" 
                                       name="email" 
                                       class="form-input"
                                       required>
                            </div>

                            <!-- Subject -->
                            <div>
                                <label for="contact-subject" class="block font-nunito font-semibold text-gray-700 mb-2">
                                    Subject
                                </label>
                                <input type="text" 
                                       id="contact-subject" 
                                       name="subject" 
                                       class="form-input"
                                       placeholder="What is this about?">
                            </div>

                            <!-- Message -->
                            <div>
                                <label for="contact-message" class="block font-nunito font-semibold text-gray-700 mb-2">
                                    Your Message <span class="text-soft-coral">*</span>
                                </label>
                                <textarea id="contact-message" 
                                          name="message" 
                                          class="form-textarea"
                                          rows="6"
                                          required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div>
                                <button type="submit" class="btn btn-primary w-full text-lg">
                                    <span class="flex items-center justify-center space-x-2">
                                        <span>Send Message</span>
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>

                            <!-- Form Messages -->
                            <div id="form-messages" class="hidden"></div>

                        </form>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- FAQ or Additional Info -->
    <section class="section bg-gradient-to-br from-sky-blue/5 to-grass-green/5">
        <div class="container-custom">
            
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="font-fredoka font-bold text-4xl md:text-5xl text-deep-blue mb-4">
                    Quick Questions?
                </h2>
                <p class="text-xl text-gray-600 font-nunito max-w-3xl mx-auto">
                    Find answers to common questions below
                </p>
            </div>

            <div class="max-w-4xl mx-auto space-y-6">
                
                <!-- FAQ Item 1 -->
                <div class="card p-8 animate-on-scroll" style="animation-delay: 0.1s;">
                    <h3 class="font-fredoka font-bold text-xl text-deep-blue mb-3">
                        How can I volunteer?
                    </h3>
                    <p class="text-gray-700 font-nunito leading-relaxed">
                        Visit our <a href="<?php echo esc_url( home_url( '/get-involved' ) ); ?>" class="text-sky-blue hover:text-soft-coral underline">Get Involved</a> page to learn about volunteer opportunities and how to apply.
                    </p>
                </div>

                <!-- FAQ Item 2 -->
                <div class="card p-8 animate-on-scroll" style="animation-delay: 0.2s;">
                    <h3 class="font-fredoka font-bold text-xl text-deep-blue mb-3">
                        Can I donate items instead of money?
                    </h3>
                    <p class="text-gray-700 font-nunito leading-relaxed">
                        Yes! We accept donations of educational toys, books, and school supplies. Please contact us to arrange item donations.
                    </p>
                </div>

                <!-- FAQ Item 3 -->
                <div class="card p-8 animate-on-scroll" style="animation-delay: 0.3s;">
                    <h3 class="font-fredoka font-bold text-xl text-deep-blue mb-3">
                        Where do you operate?
                    </h3>
                    <p class="text-gray-700 font-nunito leading-relaxed">
                        We currently operate in Kukurantumi, Ghana, and are registered in the United Kingdom.
                    </p>
                </div>

            </div>

        </div>
    </section>

</div>

<!-- Contact Form Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    const messagesDiv = document.getElementById('form-messages');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const submitButton = form.querySelector('button[type="submit"]');
        const originalButtonText = submitButton.innerHTML;
        
        // Disable button and show loading
        submitButton.disabled = true;
        submitButton.innerHTML = '<span class="flex items-center justify-center space-x-2"><svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg><span>Sending...</span></span>';

        // Prepare form data
        const formData = new FormData(form);
        formData.append('action', 'funlearnsmile_contact_form');
        formData.append('nonce', '<?php echo wp_create_nonce( 'funlearnsmile_contact_nonce' ); ?>');

        // Send AJAX request
        fetch('<?php echo admin_url( 'admin-ajax.php' ); ?>', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Show message
            messagesDiv.classList.remove('hidden');
            
            if (data.success) {
                messagesDiv.className = 'bg-grass-green/10 border-2 border-grass-green text-grass-green p-4 rounded-2xl font-nunito';
                messagesDiv.textContent = data.data.message;
                form.reset();
            } else {
                messagesDiv.className = 'bg-soft-coral/10 border-2 border-soft-coral text-soft-coral p-4 rounded-2xl font-nunito';
                messagesDiv.textContent = data.data.message;
            }

            // Re-enable button
            submitButton.disabled = false;
            submitButton.innerHTML = originalButtonText;

            // Hide message after 5 seconds
            setTimeout(() => {
                messagesDiv.classList.add('hidden');
            }, 5000);
        })
        .catch(error => {
            console.error('Error:', error);
            messagesDiv.classList.remove('hidden');
            messagesDiv.className = 'bg-soft-coral/10 border-2 border-soft-coral text-soft-coral p-4 rounded-2xl font-nunito';
            messagesDiv.textContent = 'An error occurred. Please try again.';
            
            submitButton.disabled = false;
            submitButton.innerHTML = originalButtonText;
        });
    });
});
</script>

<?php
get_footer();