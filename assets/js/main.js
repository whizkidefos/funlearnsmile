/**
 * FunLearn Smile Theme JavaScript
 * Handles navigation, animations, and interactive features
 */

(function() {
    'use strict';

    // Wait for DOM to be ready
    document.addEventListener('DOMContentLoaded', function() {
        
        // Initialize all modules
        initMobileMenu();
        initScrollAnimations();
        initSmoothScroll();
        initPlayfulCursor();
        initCountUp();
        initParallax();
        initBackToTop();

    });

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const menuToggle = document.querySelector('.mobile-menu-toggle');
        const mobileMenu = document.querySelector('.mobile-menu');
        const menuClose = document.querySelector('.mobile-menu-close');
        const body = document.body;

        if (!menuToggle || !mobileMenu) return;

        menuToggle.addEventListener('click', function() {
            mobileMenu.classList.remove('closed');
            mobileMenu.classList.add('open');
            body.style.overflow = 'hidden';
        });

        if (menuClose) {
            menuClose.addEventListener('click', function() {
                mobileMenu.classList.remove('open');
                mobileMenu.classList.add('closed');
                body.style.overflow = '';
            });
        }

        // Close on link click
        const menuLinks = mobileMenu.querySelectorAll('a');
        menuLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                mobileMenu.classList.remove('open');
                mobileMenu.classList.add('closed');
                body.style.overflow = '';
            });
        });

        // Close on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileMenu.classList.contains('open')) {
                mobileMenu.classList.remove('open');
                mobileMenu.classList.add('closed');
                body.style.overflow = '';
            }
        });
    }

    /**
     * Scroll Animations
     */
    function initScrollAnimations() {
        const animatedElements = document.querySelectorAll('.animate-on-scroll');
        
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            animatedElements.forEach(function(element) {
                observer.observe(element);
            });
        } else {
            // Fallback for browsers without IntersectionObserver
            animatedElements.forEach(function(element) {
                element.classList.add('visible');
            });
        }
    }

    /**
     * Smooth Scroll for Anchor Links
     */
    function initSmoothScroll() {
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        
        anchorLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Skip if it's just "#"
                if (href === '#') return;

                const target = document.querySelector(href);
                
                if (target) {
                    e.preventDefault();
                    const offsetTop = target.offsetTop - 80; // Account for fixed header
                    
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    /**
     * Playful Cursor Effect (Optional - only on desktop)
     */
    function initPlayfulCursor() {
        if (window.innerWidth < 1024) return; // Skip on mobile/tablet

        const cursor = document.createElement('div');
        cursor.className = 'custom-cursor';
        cursor.style.cssText = `
            position: fixed;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: rgba(255, 111, 97, 0.5);
            pointer-events: none;
            z-index: 9999;
            transition: transform 0.2s ease, opacity 0.2s ease;
            display: none;
        `;
        document.body.appendChild(cursor);

        let mouseX = 0, mouseY = 0;
        let cursorX = 0, cursorY = 0;

        document.addEventListener('mousemove', function(e) {
            mouseX = e.clientX;
            mouseY = e.clientY;
            cursor.style.display = 'block';
        });

        // Smooth cursor movement
        function animateCursor() {
            const dx = mouseX - cursorX;
            const dy = mouseY - cursorY;
            
            cursorX += dx * 0.1;
            cursorY += dy * 0.1;
            
            cursor.style.left = cursorX - 10 + 'px';
            cursor.style.top = cursorY - 10 + 'px';
            
            requestAnimationFrame(animateCursor);
        }
        animateCursor();

        // Enlarge cursor on hover over interactive elements
        const interactiveElements = document.querySelectorAll('a, button, .card');
        interactiveElements.forEach(function(element) {
            element.addEventListener('mouseenter', function() {
                cursor.style.transform = 'scale(2)';
            });
            element.addEventListener('mouseleave', function() {
                cursor.style.transform = 'scale(1)';
            });
        });
    }

    /**
     * Count Up Animation for Numbers
     */
    function initCountUp() {
        const counters = document.querySelectorAll('.counter');
        
        counters.forEach(function(counter) {
            const target = parseInt(counter.getAttribute('data-target'));
            const duration = 2000; // 2 seconds
            const increment = target / (duration / 16); // 60fps
            let current = 0;
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        const timer = setInterval(function() {
                            current += increment;
                            if (current >= target) {
                                current = target;
                                clearInterval(timer);
                            }
                            counter.textContent = Math.floor(current);
                        }, 16);
                        observer.unobserve(counter);
                    }
                });
            }, { threshold: 0.5 });
            
            observer.observe(counter);
        });
    }

    /**
     * Parallax Effect for Hero Section
     */
    function initParallax() {
        const parallaxElements = document.querySelectorAll('.parallax');
        
        if (parallaxElements.length === 0) return;

        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            
            parallaxElements.forEach(function(element) {
                const speed = element.getAttribute('data-speed') || 0.5;
                const yPos = -(scrolled * speed);
                element.style.transform = `translateY(${yPos}px)`;
            });
        });
    }

    /**
     * Back to Top Button
     */
    function initBackToTop() {
        const backToTop = document.querySelector('.back-to-top');
        
        if (!backToTop) return;

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });

        backToTop.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    /**
     * Floating Animation for Decorative Elements
     */
    function createFloatingElements() {
        const hero = document.querySelector('.hero-section');
        if (!hero) return;

        // Create floating shapes
        const shapes = ['circle', 'star', 'heart'];
        const colors = ['#FFD700', '#00BFFF', '#FF6F61', '#32CD32'];

        for (let i = 0; i < 10; i++) {
            const shape = document.createElement('div');
            shape.className = 'floating-shape';
            shape.style.cssText = `
                position: absolute;
                width: ${20 + Math.random() * 40}px;
                height: ${20 + Math.random() * 40}px;
                background: ${colors[Math.floor(Math.random() * colors.length)]};
                opacity: 0.1;
                border-radius: 50%;
                left: ${Math.random() * 100}%;
                top: ${Math.random() * 100}%;
                animation: float ${3 + Math.random() * 4}s ease-in-out infinite;
                animation-delay: ${Math.random() * 2}s;
                pointer-events: none;
            `;
            hero.appendChild(shape);
        }
    }

    // Call on load
    createFloatingElements();

    /**
     * Form Validation (if contact form exists)
     */
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = this.querySelector('[name="name"]');
            const email = this.querySelector('[name="email"]');
            const message = this.querySelector('[name="message"]');
            
            let isValid = true;

            // Simple validation
            if (!name.value.trim()) {
                showError(name, 'Please enter your name');
                isValid = false;
            }

            if (!email.value.trim() || !isValidEmail(email.value)) {
                showError(email, 'Please enter a valid email');
                isValid = false;
            }

            if (!message.value.trim()) {
                showError(message, 'Please enter a message');
                isValid = false;
            }

            if (isValid) {
                // Submit form (AJAX can be added here)
                this.submit();
            }
        });
    }

    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    function showError(input, message) {
        const formGroup = input.parentElement;
        let error = formGroup.querySelector('.error-message');
        
        if (!error) {
            error = document.createElement('span');
            error.className = 'error-message text-red-500 text-sm mt-1 block';
            formGroup.appendChild(error);
        }
        
        error.textContent = message;
        input.classList.add('border-red-500');
        
        setTimeout(function() {
            error.remove();
            input.classList.remove('border-red-500');
        }, 3000);
    }

    /**
     * Add loading class on page load
     */
    window.addEventListener('load', function() {
        document.body.classList.add('loaded');
    });

})();