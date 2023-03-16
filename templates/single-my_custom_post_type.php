<?php
/**
 * Template Name: Custom Post Type Template
 *
 * This is a custom template for displaying content from a custom post type.
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<main class="main-container">
        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>

        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        <?php if ( comments_open() || get_comments_number() ) {
            comments_template();
        } ?>
        <footer class="entry-footer">
            <?php if ( has_category() ) : ?>
                <div class="cat-links">
                    <?php the_category( ', ' ); ?>
                </div>
            <?php endif; ?>

            <?php if ( has_tag() ) : ?>
                <div class="tags-links">
                    <?php the_tags(); ?>
                </div>
            <?php endif; ?>
        </footer>
    </article>
</main>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
