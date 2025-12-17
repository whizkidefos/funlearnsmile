<?php
/**
 * Template Name: Donate
 * Description: Custom template for Donations page with PayPal
 *
 * @package FunLearnSmile
 */

get_header();
?>

<div class="donate-page">
    
    <!-- Hero Section -->
    <section class="relative py-20 lg:py-32 bg-gradient-to-br from-soft-coral/20 via-bright-yellow/20 to-sky-blue/20 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-96 h-96 bg-bright-yellow/10 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-soft-coral/10 rounded-full blur-3xl animate-float" style="animation-delay: 1s;"></div>
        </div>
        
        <div class="container-custom relative z-10">
            <div class="max-w-4xl mx-auto text-center animate-on-scroll">
                <div class="inline-block bg-gradient-to-br from-soft-coral to-warm-orange text-white p-6 rounded-3xl shadow-2xl mb-8">
                    <svg class="w-16 h-16 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"></path>
                    </svg>
                </div>
                <h1 class="font-fredoka font-bold text-5xl md:text-6xl lg:text-7xl text-deep-blue mb-6">
                    Make a <span class="text-gradient-playful">Difference</span>
                </h1>
                <p class="text-2xl md:text-3xl text-gray-700 font-nunito leading-relaxed">
                    Your donation brings smiles, learning, and hope to children in need
                </p>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="section bg-white">
        <div class="container-custom">
            
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="font-fredoka font-bold text-4xl md:text-5xl text-deep-blue mb-4">
                    Your Impact
                </h2>
                <p class="text-xl text-gray-600 font-nunito max-w-3xl mx-auto">
                    See how your donation makes a real difference
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                
                <!-- Impact 1 -->
                <div class="card text-center p-8 animate-on-scroll" style="animation-delay: 0.1s;">
                    <div class="w-24 h-24 bg-gradient-to-br from-bright-yellow to-warm-orange rounded-full flex items-center justify-center mx-auto mb-6 shadow-xl">
                        <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path>
                        </svg>
                    </div>
                    <h3 class="font-fredoka font-bold text-2xl text-deep-blue mb-3">£10</h3>
                    <p class="text-gray-600 font-nunito">
                        Provides school books for one child for a term
                    </p>
                </div>

                <!-- Impact 2 -->
                <div class="card text-center p-8 animate-on-scroll" style="animation-delay: 0.2s;">
                    <div class="w-24 h-24 bg-gradient-to-br from-sky-blue to-grass-green rounded-full flex items-center justify-center mx-auto mb-6 shadow-xl">
                        <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                        </svg>
                    </div>
                    <h3 class="font-fredoka font-bold text-2xl text-deep-blue mb-3">£25</h3>
                    <p class="text-gray-600 font-nunito">
                        Supplies educational toys and games for our playroom
                    </p>
                </div>

                <!-- Impact 3 -->
                <div class="card text-center p-8 animate-on-scroll" style="animation-delay: 0.3s;">
                    <div class="w-24 h-24 bg-gradient-to-br from-soft-coral to-bright-yellow rounded-full flex items-center justify-center mx-auto mb-6 shadow-xl">
                        <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                        </svg>
                    </div>
                    <h3 class="font-fredoka font-bold text-2xl text-deep-blue mb-3">£50</h3>
                    <p class="text-gray-600 font-nunito">
                        Funds a full day of activities for 20 children
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Donation Form Section -->
    <section class="section bg-gradient-to-br from-sky-blue/5 to-grass-green/5">
        <div class="container-custom">
            
            <div class="max-w-4xl mx-auto">
                
                <div class="card p-8 md:p-12 animate-on-scroll">
                    
                    <div class="text-center mb-8">
                        <h2 class="font-fredoka font-bold text-3xl md:text-4xl text-deep-blue mb-4">
                            Choose Your Donation Amount
                        </h2>
                        <p class="text-lg text-gray-600 font-nunito">
                            Every contribution makes a real difference in a child's life
                        </p>
                    </div>

                    <!-- Donation Amounts -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                        <button class="donation-amount-btn bg-white border-2 border-gray-200 hover:border-soft-coral hover:bg-soft-coral/5 rounded-2xl p-6 text-center transition-all duration-300 group" data-amount="10">
                            <span class="font-fredoka font-bold text-3xl text-gray-700 group-hover:text-soft-coral block mb-2">£10</span>
                            <span class="text-sm text-gray-500 font-nunito">School Books</span>
                        </button>
                        <button class="donation-amount-btn bg-white border-2 border-gray-200 hover:border-sky-blue hover:bg-sky-blue/5 rounded-2xl p-6 text-center transition-all duration-300 group" data-amount="25">
                            <span class="font-fredoka font-bold text-3xl text-gray-700 group-hover:text-sky-blue block mb-2">£25</span>
                            <span class="text-sm text-gray-500 font-nunito">Toys & Games</span>
                        </button>
                        <button class="donation-amount-btn bg-white border-2 border-gray-200 hover:border-grass-green hover:bg-grass-green/5 rounded-2xl p-6 text-center transition-all duration-300 group" data-amount="50">
                            <span class="font-fredoka font-bold text-3xl text-gray-700 group-hover:text-grass-green block mb-2">£50</span>
                            <span class="text-sm text-gray-500 font-nunito">Activities Day</span>
                        </button>
                        <button class="donation-amount-btn bg-white border-2 border-gray-200 hover:border-bright-yellow hover:bg-bright-yellow/5 rounded-2xl p-6 text-center transition-all duration-300 group" data-amount="100">
                            <span class="font-fredoka font-bold text-3xl text-gray-700 group-hover:text-warm-orange block mb-2">£100</span>
                            <span class="text-sm text-gray-500 font-nunito">Major Impact</span>
                        </button>
                    </div>

                    <!-- Custom Amount -->
                    <div class="mb-8">
                        <label class="block font-nunito font-semibold text-lg text-gray-700 mb-3">
                            Or enter a custom amount:
                        </label>
                        <div class="relative max-w-md mx-auto">
                            <span class="absolute left-6 top-1/2 transform -translate-y-1/2 font-fredoka font-bold text-2xl text-gray-400">£</span>
                            <input type="number" 
                                   id="custom-amount" 
                                   class="w-full pl-12 pr-6 py-4 text-2xl font-fredoka font-bold text-gray-700 border-2 border-gray-200 rounded-2xl focus:border-soft-coral focus:ring-4 focus:ring-soft-coral/20 transition-all duration-300" 
                                   placeholder="0"
                                   min="1"
                                   step="1">
                        </div>
                    </div>

                    <!-- PayPal Button Container -->
                    <div class="text-center">
                        <div id="paypal-button-container" class="max-w-md mx-auto"></div>
                    </div>

                    <!-- Alternative Payment Info -->
                    <div class="mt-8 pt-8 border-t border-gray-200 text-center">
                        <p class="text-gray-600 font-nunito mb-4">
                            Prefer to donate by bank transfer?
                        </p>
                        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="text-sky-blue hover:text-soft-coral font-semibold underline">
                            Contact us for bank details
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Why Donate Section -->
    <section class="section bg-white">
        <div class="container-custom">
            
            <div class="max-w-4xl mx-auto">
                
                <div class="text-center mb-12 animate-on-scroll">
                    <h2 class="font-fredoka font-bold text-4xl md:text-5xl text-deep-blue mb-4">
                        Why Your Donation Matters
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    <div class="flex items-start space-x-4 animate-on-scroll" style="animation-delay: 0.1s;">
                        <div class="flex-shrink-0 w-12 h-12 bg-soft-coral/10 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-soft-coral" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-fredoka font-bold text-xl text-deep-blue mb-2">100% Direct Impact</h3>
                            <p class="text-gray-600 font-nunito">Every penny goes directly to supporting children and our programs</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 animate-on-scroll" style="animation-delay: 0.2s;">
                        <div class="flex-shrink-0 w-12 h-12 bg-sky-blue/10 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-sky-blue" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-fredoka font-bold text-xl text-deep-blue mb-2">Transparent Reporting</h3>
                            <p class="text-gray-600 font-nunito">See exactly how your donation is making a difference in our annual reports</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 animate-on-scroll" style="animation-delay: 0.3s;">
                        <div class="flex-shrink-0 w-12 h-12 bg-grass-green/10 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-grass-green" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-fredoka font-bold text-xl text-deep-blue mb-2">Community Impact</h3>
                            <p class="text-gray-600 font-nunito">Your support helps build stronger, more resilient communities</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 animate-on-scroll" style="animation-delay: 0.4s;">
                        <div class="flex-shrink-0 w-12 h-12 bg-bright-yellow/10 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-warm-orange" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-fredoka font-bold text-xl text-deep-blue mb-2">Tax Efficient</h3>
                            <p class="text-gray-600 font-nunito">Registered charity - your donations may be eligible for Gift Aid</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="section bg-gradient-to-br from-soft-coral/10 to-bright-yellow/10">
        <div class="container-custom">
            <div class="max-w-4xl mx-auto text-center animate-on-scroll">
                <div class="card-playful p-8 md:p-12">
                    <svg class="w-16 h-16 text-soft-coral/30 mx-auto mb-6" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"></path>
                    </svg>
                    <blockquote class="text-xl md:text-2xl text-gray-800 font-nunito italic mb-6 leading-relaxed">
                        "Seeing the joy on children's faces when they receive new books and toys is priceless. Your donations truly transform lives."
                    </blockquote>
                    <cite class="font-fredoka font-semibold text-lg text-deep-blue">— Louisa, Founder</cite>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- PayPal SDK and Custom Script -->
<script src="https://www.paypal.com/sdk/js?client-id=YOUR_PAYPAL_CLIENT_ID&currency=GBP"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    let selectedAmount = 10; // Default amount

    // Amount buttons
    const amountButtons = document.querySelectorAll('.donation-amount-btn');
    const customAmountInput = document.getElementById('custom-amount');

    amountButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active state from all buttons
            amountButtons.forEach(btn => {
                btn.classList.remove('border-soft-coral', 'bg-soft-coral/10', 'border-sky-blue', 'bg-sky-blue/10', 'border-grass-green', 'bg-grass-green/10', 'border-bright-yellow', 'bg-bright-yellow/10');
                btn.classList.add('border-gray-200', 'bg-white');
            });
            
            // Add active state to clicked button
            this.classList.remove('border-gray-200', 'bg-white');
            const color = this.classList.contains('hover:border-soft-coral') ? 'soft-coral' : 
                         this.classList.contains('hover:border-sky-blue') ? 'sky-blue' :
                         this.classList.contains('hover:border-grass-green') ? 'grass-green' : 'bright-yellow';
            
            this.classList.add(`border-${color}`, `bg-${color}/10`);
            
            selectedAmount = parseFloat(this.dataset.amount);
            customAmountInput.value = '';
        });
    });

    customAmountInput.addEventListener('input', function() {
        if (this.value) {
            selectedAmount = parseFloat(this.value);
            amountButtons.forEach(btn => {
                btn.classList.remove('border-soft-coral', 'bg-soft-coral/10', 'border-sky-blue', 'bg-sky-blue/10', 'border-grass-green', 'bg-grass-green/10', 'border-bright-yellow', 'bg-bright-yellow/10');
                btn.classList.add('border-gray-200', 'bg-white');
            });
        }
    });

    // PayPal Buttons
    paypal.Buttons({
        createOrder: function(data, actions) {
            const amount = customAmountInput.value || selectedAmount;
            return actions.order.create({
                purchase_units: [{
                    description: 'FunLearn Smile Donation',
                    amount: {
                        currency_code: 'GBP',
                        value: amount.toString()
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                // Show success message
                alert('Thank you for your generous donation, ' + details.payer.name.given_name + '! Your support means the world to us.');
                
                // Optional: Send confirmation to your backend
                // fetch('/wp-admin/admin-ajax.php', {
                //     method: 'POST',
                //     body: JSON.stringify({
                //         action: 'process_donation',
                //         orderID: data.orderID,
                //         details: details
                //     })
                // });
                
                // Redirect to thank you page
                window.location.href = '<?php echo esc_url( home_url( '/thank-you' ) ); ?>';
            });
        },
        onError: function(err) {
            console.error('PayPal Error:', err);
            alert('An error occurred with your donation. Please try again or contact us for assistance.');
        },
        style: {
            shape: 'pill',
            color: 'blue',
            layout: 'vertical',
            label: 'donate'
        }
    }).render('#paypal-button-container');
});
</script>

<?php
get_footer();