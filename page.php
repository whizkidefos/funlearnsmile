<?php
/**
 * The template for displaying all pages
 *
 * @package FunLearnSmile
 */

get_header();
?>

<div class="page-wrapper section bg-white">
    <div class="container-custom">
        
        <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'max-w-4xl mx-auto' ); ?>>
                
                <!-- Page Header -->
                <header class="page-header text-center mb-12 animate-on-scroll">
                    <h1 class="font-fredoka font-bold text-4xl md:text-5xl lg:text-6xl text-deep-blue mb-4">
                        <?php the_title(); ?>
                    </h1>
                    <?php if ( has_excerpt() ) : ?>
                        <div class="page-excerpt text-xl text-gray-600 font-nunito leading-relaxed">
                            <?php the_excerpt(); ?>
                        </div>
                    <?php endif; ?>
                </header>

                <!-- Featured Image -->
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="page-thumbnail mb-12 animate-on-scroll rounded-3xl overflow-hidden shadow-xl">
                        <?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-auto' ) ); ?>
                    </div>
                <?php endif; ?>

                <!-- Page Content -->
                <div class="page-content prose prose-lg max-w-none font-nunito animate-on-scroll">
                    <?php
                    the_content();

                    wp_link_pages( array(
                        'before' => '<div class="page-links mt-8 flex items-center space-x-4"><span class="font-fredoka font-semibold">' . esc_html__( 'Pages:', 'funlearnsmile' ) . '</span>',
                        'after'  => '</div>',
                    ) );
                    ?>
                </div>

                <!-- Entry Footer -->
                <?php if ( get_edit_post_link() ) : ?>
                    <footer class="entry-footer mt-12 pt-8 border-t border-gray-200">
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
                    </footer>
                <?php endif; ?>

            </article>

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

<!-- Custom Styles for Page Content -->
<style>
.page-content {
    color: #374151;
    line-height: 1.75;
}

.page-content h2 {
    @apply font-fredoka font-bold text-3xl md:text-4xl text-deep-blue mt-12 mb-6;
}

.page-content h3 {
    @apply font-fredoka font-bold text-2xl md:text-3xl text-deep-blue mt-10 mb-4;
}

.page-content h4 {
    @apply font-fredoka font-semibold text-xl md:text-2xl text-deep-blue mt-8 mb-3;
}

.page-content p {
    @apply mb-6;
}

.page-content ul,
.page-content ol {
    @apply mb-6 ml-6;
}

.page-content ul {
    @apply list-disc;
}

.page-content ol {
    @apply list-decimal;
}

.page-content li {
    @apply mb-2;
}

.page-content a {
    @apply text-sky-blue hover:text-soft-coral underline;
}

.page-content blockquote {
    @apply border-l-4 border-soft-coral pl-6 py-4 my-8 italic bg-gray-50 rounded-r-2xl;
}

.page-content img {
    @apply rounded-2xl shadow-lg my-8;
}

.page-content table {
    @apply w-full border-collapse my-8;
}

.page-content th {
    @apply bg-sky-blue text-white font-fredoka font-semibold p-4 text-left;
}

.page-content td {
    @apply border border-gray-200 p-4;
}

.page-content tr:nth-child(even) {
    @apply bg-gray-50;
}
</style>

<?php
get_footer();