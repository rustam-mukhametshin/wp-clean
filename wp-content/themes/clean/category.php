<?php

get_header();
?>
<?php if (get_theme_mod('clean_home_category')): ?>
    <div id="fh5co-portfolio">

        <?php if (have_posts()) : $i = 1;
            while (have_posts()) : the_post(); ?>
                <?php if (has_post_thumbnail()) $img_url = get_the_post_thumbnail_url();
                else $img_url = 'https://picsum.photos/1280/864'; ?>

                <div class="fh5co-portfolio-item <?= $i % 2 == 0 ? 'fh5co-img-right' : '' ?>">
                    <div class="fh5co-portfolio-figure animate-box"
                         style="background-image: url(<?= $img_url ?>);"></div>
                    <div class="fh5co-portfolio-description">
                        <h2><?php the_title() ?></h2>
                        <p><?php the_content(''); ?></p>
                        <p><a href="<?php the_permalink(); ?>"
                              class="btn btn-primary"><?php _e('Read more', 'clean') ?></a></p>
                    </div>
                </div>
                <?php $i++; endwhile; ?>
            <?php the_posts_pagination([
                'end_size' => 1,
                'mid_size' => 1,
                'type' => 'list',
            ]); ?>
        <?php else: ?>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
    </div>
    <div class="clearfix"></div>
<?php endif; ?>

<?php
get_footer();
