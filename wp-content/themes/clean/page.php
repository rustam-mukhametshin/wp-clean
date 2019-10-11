<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package clean
 */

get_header();
?>
    <div id="fh5co-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('template-parts/content', 'page') ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
