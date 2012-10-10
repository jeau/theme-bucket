    </div>

    <footer role="contentinfo">

        <nav role="navigation">
            <?php echo public_nav_main(array(__('Home') => url(''), __('Browse Items') => url('items'), __('Browse Collections') => url('collections'))); ?>
        </nav>

        <div id="footer-text">
            <?php echo get_theme_option('Footer Text'); ?>
            <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
                <p><?php echo $copyright; ?></p>
            <?php endif; ?>
            <p><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?></p>
        </div>

        <?php fire_plugin_hook('public_theme_footer'); ?>

    </footer><!-- end footer -->
</body>
</html>
