<?php
/**
 * Template Name: Gallery
 * Description: Custom template for Gallery page
 *
 * @package FunLearnSmile
 */

get_header();
?>

<div class="gallery-page">
    
    <!-- Hero Section -->
    <section class="relative py-20 lg:py-32 bg-gradient-to-br from-bright-yellow/10 via-soft-coral/10 to-sky-blue/10 overflow-hidden">
        <div class="absolute inset-0 bg-pattern-playful opacity-20"></div>
        
        <div class="container-custom relative z-10">
            <div class="max-w-4xl mx-auto text-center animate-on-scroll">
                <div class="inline-block bg-gradient-to-br from-soft-coral to-warm-orange text-white p-6 rounded-3xl shadow-2xl mb-8">
                    <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h1 class="font-fredoka font-bold text-5xl md:text-6xl lg:text-7xl text-deep-blue mb-6">
                    Our <span class="text-gradient-playful">Gallery</span>
                </h1>
                <p class="text-2xl md:text-3xl text-gray-700 font-nunito leading-relaxed">
                    Moments of joy, learning, and smiles
                </p>
            </div>
        </div>
    </section>

    <!-- Gallery Filters -->
    <section class="py-12 bg-white sticky top-20 z-30 shadow-md">
        <div class="container-custom">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="gallery-filter-btn active px-6 py-3 rounded-full font-fredoka font-semibold transition-all duration-300" data-filter="all">
                    All Photos
                </button>
                <?php
                // Get all gallery categories dynamically
                $gallery_categories = get_terms( array(
                    'taxonomy'   => 'gallery_category',
                    'hide_empty' => true,
                ) );
                
                if ( ! empty( $gallery_categories ) && ! is_wp_error( $gallery_categories ) ) :
                    foreach ( $gallery_categories as $category ) :
                ?>
                <button class="gallery-filter-btn px-6 py-3 rounded-full font-fredoka font-semibold transition-all duration-300" data-filter="<?php echo esc_attr( $category->slug ); ?>">
                    <?php echo esc_html( $category->name ); ?>
                </button>
                <?php 
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="section bg-gradient-to-br from-sky-blue/5 to-grass-green/5">
        <div class="container-custom">
            
            <div id="gallery-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                
                <?php
                // Query Gallery Items CPT
                $gallery_query = new WP_Query( array(
                    'post_type'      => 'gallery_item',
                    'posts_per_page' => -1,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                ) );

                if ( $gallery_query->have_posts() ) :
                    $index = 0;
                    while ( $gallery_query->have_posts() ) : $gallery_query->the_post();
                        $index++;
                        $delay = ($index % 8) * 0.05;
                        
                        // Get categories
                        $categories = get_the_terms( get_the_ID(), 'gallery_category' );
                        $category_slug = '';
                        $category_name = '';
                        if ( $categories && ! is_wp_error( $categories ) ) {
                            $category_slug = $categories[0]->slug;
                            $category_name = $categories[0]->name;
                        }
                ?>
                <!-- Item: <?php the_title(); ?> | Category: <?php echo $category_slug ? $category_slug : 'none'; ?> -->
                <div class="gallery-item animate-on-scroll cursor-pointer group" 
                     data-category="<?php echo esc_attr( $category_slug ); ?>"
                     style="animation-delay: <?php echo esc_attr( $delay ); ?>s;"
                     data-image="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'large' ) ); ?>"
                     data-title="<?php echo esc_attr( get_the_title() ); ?>">
                    
                    <div class="relative aspect-square rounded-3xl overflow-hidden shadow-lg group-hover:shadow-2xl transition-all duration-300">
                        
                        <?php if ( has_post_thumbnail() ) : ?>
                            <!-- Gallery Image -->
                            <?php the_post_thumbnail( 'medium_large', array( 
                                'class' => 'absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500'
                            ) ); ?>
                        <?php else : ?>
                            <!-- Placeholder -->
                            <div class="absolute inset-0 bg-gradient-to-br from-bright-yellow/20 via-soft-coral/20 to-sky-blue/20 flex items-center justify-center">
                                <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-deep-blue/80 via-deep-blue/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <div class="text-white">
                                <h3 class="font-fredoka font-bold text-lg mb-2"><?php the_title(); ?></h3>
                                <?php if ( $category_name ) : ?>
                                <span class="inline-block bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-sm font-nunito">
                                    <?php echo esc_html( $category_name ); ?>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Zoom Icon -->
                        <div class="absolute top-4 right-4 w-10 h-10 bg-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-xl">
                            <svg class="w-5 h-5 text-deep-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <?php 
                    endwhile;
                    wp_reset_postdata();
                else : 
                ?>
                
                <!-- Empty State -->
                <div class="col-span-full text-center py-20">
                    <div class="max-w-md mx-auto">
                        <svg class="w-24 h-24 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <h3 class="font-fredoka font-bold text-2xl text-deep-blue mb-3">No Gallery Items Yet</h3>
                        <p class="font-nunito text-gray-600 mb-6">Start adding photos to showcase your amazing work!</p>
                        <?php if ( current_user_can( 'edit_posts' ) ) : ?>
                        <a href="<?php echo esc_url( admin_url( 'post-new.php?post_type=gallery_item' ) ); ?>" class="btn btn-primary">
                            Add Your First Gallery Item
                        </a>
                        <?php endif; ?>
                    </div>
                </div>

                <?php endif; ?>

            </div>

            <!-- No Results Message -->
            <div id="no-results" class="hidden text-center py-16">
                <svg class="w-24 h-24 mx-auto text-gray-300 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <p class="font-fredoka font-bold text-2xl text-gray-400">No photos found in this category</p>
            </div>

        </div>
    </section>

    <!-- Upload Info -->
    <section class="section bg-white">
        <div class="container-custom">
            <div class="max-w-4xl mx-auto">
                <div class="card-playful p-8 md:p-12 text-center animate-on-scroll">
                    <div class="inline-block bg-gradient-to-br from-sky-blue to-grass-green text-white p-6 rounded-3xl shadow-xl mb-6">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-fredoka font-bold text-3xl text-deep-blue mb-4">
                        Want to Contribute Photos?
                    </h3>
                    <p class="text-lg text-gray-700 font-nunito leading-relaxed mb-6">
                        If you have photos from FunLearn Smile events or activities that you'd like to share, we'd love to see them!
                    </p>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-secondary">
                        Get in Touch
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- Lightbox Modal -->
<div id="lightbox-modal" class="fixed inset-0 z-50 bg-deep-blue/95 backdrop-blur-sm hidden items-center justify-center p-4">
    <button id="close-lightbox" class="absolute top-4 right-4 w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center text-white transition-colors duration-300" aria-label="Close lightbox">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>

    <button id="prev-image" class="absolute left-4 w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center text-white transition-colors duration-300" aria-label="Previous image">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>

    <button id="next-image" class="absolute right-4 w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center text-white transition-colors duration-300" aria-label="Next image">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>

    <div class="max-w-6xl w-full">
        <div class="bg-gradient-to-br from-bright-yellow/20 via-soft-coral/20 to-sky-blue/20 rounded-3xl p-8">
            <div id="lightbox-image" class="aspect-[4/3] bg-white rounded-2xl flex items-center justify-center">
                <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
            </div>
            <div id="lightbox-title" class="mt-6 text-center">
                <h3 class="font-fredoka font-bold text-2xl text-white"></h3>
            </div>
        </div>
    </div>
</div>

<!-- Gallery Script -->
<style>
.gallery-filter-btn {
    background: white;
    color: #374151;
    border: 2px solid #E5E7EB;
}

.gallery-filter-btn:hover,
.gallery-filter-btn.active {
    background: linear-gradient(to right, #FF6F61, #FFD700);
    color: white;
    border-color: transparent;
    transform: translateY(-2px);
    shadow: 0 10px 25px -5px rgba(255, 111, 97, 0.3);
}

.gallery-item {
    transition: all 0.3s ease;
}

.gallery-item.hidden {
    display: none;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.gallery-filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    const noResults = document.getElementById('no-results');
    const lightboxModal = document.getElementById('lightbox-modal');
    const closeLightbox = document.getElementById('close-lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const lightboxTitle = document.getElementById('lightbox-title');
    const prevBtn = document.getElementById('prev-image');
    const nextBtn = document.getElementById('next-image');
    
    let currentImageIndex = 0;
    let visibleItems = [];

    // Filter functionality
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const filter = this.dataset.filter;
            
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Filter gallery items
            let visibleCount = 0;
            galleryItems.forEach(item => {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.classList.remove('hidden');
                    visibleCount++;
                } else {
                    item.classList.add('hidden');
                }
            });
            
            // Show/hide no results message
            if (visibleCount === 0) {
                noResults.classList.remove('hidden');
            } else {
                noResults.classList.add('hidden');
            }
        });
    });

    // Lightbox functionality
    function updateVisibleItems() {
        visibleItems = Array.from(galleryItems).filter(item => !item.classList.contains('hidden'));
    }

    function openLightbox(index) {
        updateVisibleItems();
        currentImageIndex = index;
        const item = visibleItems[index];
        const imageUrl = item.dataset.image;
        const title = item.dataset.title;
        
        // Load the image
        if (imageUrl) {
            lightboxImage.innerHTML = `<img src="${imageUrl}" alt="${title}" class="w-full h-full object-contain rounded-2xl">`;
        } else {
            // Fallback placeholder
            lightboxImage.innerHTML = `
                <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
            `;
        }
        
        lightboxTitle.querySelector('h3').textContent = title;
        lightboxModal.classList.remove('hidden');
        lightboxModal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeLightboxModal() {
        lightboxModal.classList.add('hidden');
        lightboxModal.classList.remove('flex');
        document.body.style.overflow = '';
    }

    function showNextImage() {
        currentImageIndex = (currentImageIndex + 1) % visibleItems.length;
        openLightbox(currentImageIndex);
    }

    function showPrevImage() {
        currentImageIndex = (currentImageIndex - 1 + visibleItems.length) % visibleItems.length;
        openLightbox(currentImageIndex);
    }

    // Event listeners
    galleryItems.forEach((item, index) => {
        item.addEventListener('click', function() {
            updateVisibleItems();
            const visibleIndex = visibleItems.indexOf(this);
            openLightbox(visibleIndex);
        });
    });

    closeLightbox.addEventListener('click', closeLightboxModal);
    nextBtn.addEventListener('click', showNextImage);
    prevBtn.addEventListener('click', showPrevImage);

    // Close on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !lightboxModal.classList.contains('hidden')) {
            closeLightboxModal();
        } else if (e.key === 'ArrowRight' && !lightboxModal.classList.contains('hidden')) {
            showNextImage();
        } else if (e.key === 'ArrowLeft' && !lightboxModal.classList.contains('hidden')) {
            showPrevImage();
        }
    });

    // Close on background click
    lightboxModal.addEventListener('click', function(e) {
        if (e.target === lightboxModal) {
            closeLightboxModal();
        }
    });
});
</script>

<?php
get_footer();
