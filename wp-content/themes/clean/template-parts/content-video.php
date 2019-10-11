<?php if (has_post_thumbnail()) $img_url = get_the_post_thumbnail_url();
else $img_url = 'https://picsum.photos/1280/864';
?>


<div class="fh5co-portfolio-description">
    <img src="<?= $img_url ?>" alt="">
    <h2><?php the_title() ?></h2>
    VIDEO
    <p><?php the_content(''); ?></p>

</div>