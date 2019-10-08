<?php if (has_post_thumbnail()) $img_url = get_the_post_thumbnail_url();
else $img_url = 'https://picsum.photos/1280/864';
global $i;
?>

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