<?php
/**
 * The template for displaying all single posts
 *
 * @package FunLearnSmile
 */

get_header();
?>

<div class="single-post-wrapper section bg-white">
    <div class="container-custom">
        
        <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'max-w-4xl mx-auto' ); ?>>
                
                <!-- Post Header -->
                <header class="post-header text-center mb-12 animate-on-scroll">
                    
                    <!-- Categories -->
                    <?php
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) :
                        ?>
                        <div class="post-categories mb-4">
                            <?php foreach ( $categories as $category ) : ?>
                                <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>" 
                                   class="inline-block bg-soft-coral/10 text-soft-coral px-4 py-2 rounded-full text-sm font-nunito font-semibold hover:bg-soft-coral hover:text-white transition-colors duration-300">
                                    <?php echo esc_html( $category->name ); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Title -->
                    <h1 class="font-fredoka font-bold text-4xl md:text-5xl lg:text-6xl text-deep-blue mb-6">
                        <?php the_title(); ?>
                    </h1>

                    <!-- Post Meta -->
                    <div class="post-meta flex items-center justify-center space-x-6 text-gray-600 font-nunito">
                        <span class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                                <?php echo esc_html( get_the_date() ); ?>
                            </time>
                        </span>
                        <span class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span><?php echo esc_html( get_the_author() ); ?></span>
                        </span>
                    </div>
                </header>

                <!-- Featured Image -->
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail mb-12 animate-on-scroll rounded-3xl overflow-hidden shadow-xl">
                        <?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-auto' ) ); ?>
                    </div>
                <?php endif; ?>

                <!-- Post Content -->
                <div class="post-content prose prose-lg max-w-none font-nunito animate-on-scroll">
                    <?php
                    the_content();

                    wp_link_pages( array(
                        'before' => '<div class="page-links mt-8 flex items-center space-x-4"><span class="font-fredoka font-semibold">' . esc_html__( 'Pages:', 'funlearnsmile' ) . '</span>',
                        'after'  => '</div>',
                    ) );
                    ?>
                </div>

                <!-- Post Footer -->
                <footer class="post-footer mt-12 pt-8 border-t border-gray-200">
                    
                    <!-- Tags -->
                    <?php
                    $tags = get_the_tags();
                    if ( $tags ) :
                        ?>
                        <div class="post-tags mb-6">
                            <span class="font-fredoka font-semibold text-lg text-deep-blue mr-3">
                                <?php esc_html_e( 'Tags:', 'funlearnsmile' ); ?>
                            </span>
                            <?php foreach ( $tags as $tag ) : ?>
                                <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" 
                                   class="inline-block bg-sky-blue/10 text-sky-blue px-3 py-1 rounded-full text-sm font-nunito hover:bg-sky-blue hover:text-white transition-colors duration-300 mr-2 mb-2">
                                    #<?php echo esc_html( $tag->name ); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Edit Link -->
                    <?php if ( get_edit_post_link() ) : ?>
                        <?php
                        edit_post_link(
                            sprintf(
                                wp_kses(
                                    /* translators: %s: Name of current post. Only visible to screen readers */
                                    __( 'Edit <span class="screen-reader-text">%s</span>', 'funlearnsmile' ),
                                    array(
                                        'span' => array(
                                            'class' => array(),
                                        ),
                                    )
                                ),
                                wp_kses_post( get_the_title() )
                            ),
                            '<span class="edit-link text-sky-blue hover:text-soft-coral font-nunito">',
                            '</span>'
                        );
                        ?>
                    <?php endif; ?>
                </footer>

            </article>

            <!-- Post Navigation -->
            <nav class="post-navigation flex flex-col sm:flex-row justify-between gap-6 mt-12 max-w-4xl mx-auto">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                ?>
                
                <?php if ( $prev_post ) : ?>
                    <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" 
                       class="nav-previous flex-1 card p-6 hover:shadow-2xl transition-all duration-300 group">
                        <span class="text-sm text-gray-500 font-nunito block mb-2">
                            <?php esc_html_e( '← Previous Post', 'funlearnsmile' ); ?>
                        </span>
                        <span class="font-fredoka font-semibold text-lg text-deep-blue group-hover:text-soft-coral">
                            <?php echo esc_html( get_the_title( $prev_post->ID ) ); ?>
                        </span>
                    </a>
                <?php endif; ?>

                <?php if ( $next_post ) : ?>
                    <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" 
                       class="nav-next flex-1 card p-6 hover:shadow-2xl transition-all duration-300 group text-right">
                        <span class="text-sm text-gray-500 font-nunito block mb-2">
                            <?php esc_html_e( 'Next Post →', 'funlearnsmile' ); ?>
                        </span>
                        <span class="font-fredoka font-semibold text-lg text-deep-blue group-hover:text-soft-coral">
                            <?php echo esc_html( get_the_title( $next_post->ID ) ); ?>
                        </span>
                    </a>
                <?php endif; ?>
            </nav>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                ?>
                <div class="comments-wrapper mt-16 max-w-4xl mx-auto">
                    <?php comments_template(); ?>
                </div>
                <?php
            endif;
            ?>

        <?php endwhile; ?>

    </div>
</div>

<!-- Custom Styles for Post Content -->
<style>
.post-content {
    color: #374151;
    line-height: 1.75;
}

.post-content h2 {
    @apply font-fredoka font-bold text-3xl md:text-4xl text-deep-blue mt-12 mb-6;
}

.post-content h3 {
    @apply font-fredoka font-bold text-2xl md:text-3xl text-deep-blue mt-10 mb-4;
}

.post-content h4 {
    @apply font-fredoka font-semibold text-xl md:text-2xl text-deep-blue mt-8 mb-3;
}

.post-content p {
    @apply mb-6;
}

.post-content ul,
.post-content ol {
    @apply mb-6 ml-6;
}

.post-content ul {
    @apply list-disc;
}

.post-content ol {
    @apply list-decimal;
}

.post-content li {
    @apply mb-2;
}

.post-content a {
    @apply text-sky-blue hover:text-soft-coral underline;
}

.post-content blockquote {
    @apply border-l-4 border-soft-coral pl-6 py-4 my-8 italic bg-gray-50 rounded-r-2xl;
}

.post-content img {
    @apply rounded-2xl shadow-lg my-8;
}

.post-content table {
    @apply w-full border-collapse my-8;
}

.post-content th {
    @apply bg-sky-blue text-white font-fredoka font-semibold p-4 text-left;
}

.post-content td {
    @apply border border-gray-200 p-4;
}

.post-content tr:nth-child(even) {
    @apply bg-gray-50;
}
</style>

<?php
get_footer();