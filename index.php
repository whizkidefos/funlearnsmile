<?php
/**
 * The main template file
 *
 * @package FunLearnSmile
 */

get_header();
?>

<div class="blog-archive-wrapper section bg-white">
    <div class="container-custom">
        
        <!-- Archive Header -->
        <header class="archive-header text-center mb-16 animate-on-scroll">
            <h1 class="font-fredoka font-bold text-4xl md:text-5xl lg:text-6xl text-deep-blue mb-4">
                <?php
                if ( is_home() && ! is_front_page() ) :
                    single_post_title();
                elseif ( is_archive() ) :
                    the_archive_title();
                elseif ( is_search() ) :
                    printf( esc_html__( 'Search Results for: %s', 'funlearnsmile' ), '<span>' . get_search_query() . '</span>' );
                else :
                    esc_html_e( 'Blog', 'funlearnsmile' );
                endif;
                ?>
            </h1>
            <?php
            if ( is_archive() ) :
                the_archive_description( '<div class="archive-description text-xl text-gray-600 font-nunito max-w-3xl mx-auto">', '</div>' );
            endif;
            ?>
        </header>

        <?php if ( have_posts() ) : ?>

            <!-- Blog Posts Grid -->
            <div class="blog-posts-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                
                <?php
                $post_count = 0;
                while ( have_posts() ) :
                    the_post();
                    $post_count++;
                    ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'card animate-on-scroll' ); ?> style="animation-delay: <?php echo esc_attr( ( $post_count % 3 ) * 0.1 ); ?>s;">
                        
                        <!-- Post Thumbnail -->
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" class="block overflow-hidden rounded-t-2xl">
                                <?php the_post_thumbnail( 'medium', array( 'class' => 'w-full h-56 object-cover transition-transform duration-300 hover:scale-110' ) ); ?>
                            </a>
                        <?php else : ?>
                            <a href="<?php the_permalink(); ?>" class="block overflow-hidden rounded-t-2xl group">
                                <div class="w-full h-56 bg-gradient-to-br from-sky-blue/20 via-grass-green/20 to-bright-yellow/20 flex items-center justify-center relative overflow-hidden">
                                    <!-- Pattern Background -->
                                    <div class="absolute inset-0 opacity-10">
                                        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <pattern id="dots" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse">
                                                    <circle cx="5" cy="5" r="2" fill="currentColor"/>
                                                </pattern>
                                            </defs>
                                            <rect x="0" y="0" width="100%" height="100%" fill="url(#dots)"/>
                                        </svg>
                                    </div>
                                    
                                    <!-- Logo Icon -->
                                    <div class="relative z-10 flex flex-col items-center space-y-4">
                                        <div class="w-20 h-20 bg-white/80 backdrop-blur-sm rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                            <svg class="w-12 h-12 text-sky-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                            </svg>
                                        </div>
                                        <span class="font-fredoka font-semibold text-deep-blue/60 text-sm">FunLearnSmile</span>
                                    </div>

                                    <!-- Decorative Shapes -->
                                    <div class="absolute top-4 right-4 w-8 h-8 bg-soft-coral/20 rounded-full animate-pulse"></div>
                                    <div class="absolute bottom-4 left-4 w-6 h-6 bg-grass-green/20 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
                                </div>
                            </a>
                        <?php endif; ?>

                        <!-- Post Content -->
                        <div class="p-6">
                            
                            <!-- Post Meta -->
                            <div class="post-meta flex items-center space-x-4 text-sm text-gray-500 font-nunito mb-3">
                                <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                                    <?php echo esc_html( get_the_date() ); ?>
                                </time>
                                <?php
                                $categories = get_the_category();
                                if ( ! empty( $categories ) ) :
                                    ?>
                                    <span class="text-soft-coral">
                                        <?php echo esc_html( $categories[0]->name ); ?>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <!-- Post Title -->
                            <h2 class="font-fredoka font-bold text-xl md:text-2xl text-deep-blue mb-3 hover:text-soft-coral transition-colors duration-300">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <!-- Post Excerpt -->
                            <div class="post-excerpt text-gray-600 font-nunito mb-4">
                                <?php the_excerpt(); ?>
                            </div>

                            <!-- Read More Link -->
                            <a href="<?php the_permalink(); ?>" 
                               class="inline-flex items-center space-x-2 text-sky-blue hover:text-soft-coral font-nunito font-semibold transition-colors duration-300">
                                <span><?php esc_html_e( 'Read More', 'funlearnsmile' ); ?></span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>

                        </div>

                    </article>

                <?php endwhile; ?>

            </div>

            <!-- Pagination -->
            <?php
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => sprintf(
                    '<span class="flex items-center space-x-2"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg><span>%s</span></span>',
                    __( 'Previous', 'funlearnsmile' )
                ),
                'next_text' => sprintf(
                    '<span class="flex items-center space-x-2"><span>%s</span><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></span>',
                    __( 'Next', 'funlearnsmile' )
                ),
            ) );
            ?>

        <?php else : ?>

            <!-- No Posts Found -->
            <div class="no-posts text-center py-16">
                <svg class="w-24 h-24 mx-auto text-gray-300 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h2 class="font-fredoka font-bold text-3xl text-deep-blue mb-4">
                    <?php esc_html_e( 'No posts found', 'funlearnsmile' ); ?>
                </h2>
                <p class="text-gray-600 font-nunito mb-8">
                    <?php esc_html_e( 'It seems we can\'t find what you\'re looking for.', 'funlearnsmile' ); ?>
                </p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
                    <?php esc_html_e( 'Back to Home', 'funlearnsmile' ); ?>
                </a>
            </div>

        <?php endif; ?>

    </div>
</div>

<!-- Custom Pagination Styles -->
<style>
.navigation.pagination {
    @apply flex justify-center items-center space-x-2;
}

.nav-links {
    @apply flex items-center space-x-2;
}

.page-numbers {
    @apply w-12 h-12 flex items-center justify-center rounded-full font-nunito font-semibold transition-all duration-300;
}

.page-numbers:not(.dots):not(.current) {
    @apply bg-gray-100 text-gray-700 hover:bg-soft-coral hover:text-white;
}

.page-numbers.current {
    @apply bg-soft-coral text-white;
}

.page-numbers.dots {
    @apply bg-transparent text-gray-400;
}

.page-numbers.prev,
.page-numbers.next {
    @apply w-auto px-6 bg-sky-blue text-white hover:bg-soft-coral;
}
</style>

<?php
get_footer();
