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
                            <a href="<?php the_permalink(); ?>" class="block overflow-hidden">
                                <?php the_post_thumbnail( 'medium', array( 'class' => 'w-full h-56 object-cover transition-transform duration-300 hover:scale-110' ) ); ?>
                            </a>
                        <?php else : ?>
                            <a href="<?php the_permalink(); ?>" class="block overflow-hidden">
                                <div class="w-full h-56 bg-gradient-to-br from-bright-yellow/20 to-soft-coral/20 flex items-center justify-center">
                                    <svg class="w-20 h-20 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
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