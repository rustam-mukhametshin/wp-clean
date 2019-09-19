<?php

get_header();
?>

    <div id="fh5co-portfolio">
        <?php $query = new WP_Query([
            'category_name' => 'home',
        ]) ?>
        <?php if ($query->have_posts()) : $i = 1;
            while ($query->have_posts()) : $query->the_post(); ?>
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
        <?php else: ?>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
    </div>

<?php
get_footer();
