        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <?php if (is_active_sidebar('sidebar')) : ?>
                <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
        </div>
      </div>
    </div>
        
    <footer class="blog-footer">
        <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
    <?php wp_footer(); ?>

    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
