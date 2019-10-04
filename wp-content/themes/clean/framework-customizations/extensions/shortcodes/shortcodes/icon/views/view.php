<?php if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
?>
<?php if (isset($atts['url']) && $atts['url']): ?>
    <a href="<?= esc_attr($atts['url']) ?>">
<?php endif; ?>
    <span class="fw-icon">
	<i class="<?php echo esc_attr($atts['icon']); ?>"></i>
	<?php if (!empty($atts['title'])): ?>
        <br/>
        <span class="list-title"><?php echo $atts['title'] ?></span>
    <?php endif; ?>
</span>
<?php if (isset($atts['url']) && $atts['url']): ?>
    </a>
<?php endif; ?>