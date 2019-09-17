</div>
<footer id="fh5co-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <p>&copy; Clean. All Rights Reserved.<br>
                    Created by <a target="_blank" rel="nofollow noopener" href="//freehtml5.co/">FreeHTML5.co</a>
                    Images: Pexels</p>
            </div>
        </div>
    </div>
</footer>

<?php if (false): ?>
    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="site-info">
            <a href="<?php echo esc_url(__('https://wordpress.org/', 'clean')); ?>">
                <?php
                /* translators: %s: CMS name, i.e. WordPress. */
                printf(esc_html__('Proudly powered by %s', 'clean'), 'WordPress');
                ?>
            </a>
            <span class="sep"> | </span>
            <?php
            /* translators: 1: Theme name, 2: Theme author. */
            printf(esc_html__('Theme: %1$s by %2$s.', 'clean'), 'clean', '<a href="https://github.com/iproman">iproman</a>');
            ?>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
    </div><!-- #page -->
<?php endif; ?>
<?php wp_footer(); ?>

</body>
</html>
