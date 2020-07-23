<?php if (is_active_sidebar('custom-footer-left-widget')
    && is_active_sidebar('custom-footer-center-widget')
    && is_active_sidebar('custom-footer-right-widget')) {
    $footer_col = 'col-sm-4 col-xs-12';
} else {
    $footer_col = 'col-sm-6 col-xs-12';
}
?>

<?php if (is_active_sidebar('custom-before-footer-widget')): ?>
    <?php dynamic_sidebar('custom-before-footer-widget'); ?>
<?php endif; ?>

    <footer class="row">
        <div class="container no-padding">
            <?php if (is_active_sidebar('custom-footer-left-widget')): ?>
                <section id="footer-left" class="<?= $footer_col; ?> footer-widget-area widget-area"
                         role="complementary">
                    <p>&copy; <?= date('Y'); ?> <?= get_bloginfo("name"); ?></p>
                    <p>All Rights Reserved.</p>

                        <?php dynamic_sidebar('custom-footer-left-widget'); ?>

                        <ul class="list-social-icons list-inline list-unstyled">
                            <li>
                                <a href="<?= get_admin_url(); ?>" title="Site Admin"><span class="sr-only">Site Admin</span><span
                                            class="far fa-sign-in"></span></a>
                            </li>
                        </ul>

                        <div class="clearfix"></div>
                    <p><small><a href="https://example.com" target="_blank"
                                 title="Website Designed and Marketed by Example, LLC.">Website Designed and
                                Marketed by Example, LLC.</a></small></p>
                </section><!--/footer-left-->
            <?php endif; ?>

            <?php if (is_active_sidebar('custom-footer-center-widget')): ?>
                <section id="footer-center" class="<?= $footer_col; ?> footer-widget-area widget-area"
                         role="complementary">
                    <?php dynamic_sidebar('custom-footer-center-widget'); ?>
                </section>
            <?php endif; ?>

            <?php if (is_active_sidebar('custom-footer-right-widget')): ?>
                <section id="footer-right" class="<?= $footer_col; ?> footer-widget-area widget-area text-right"
                         role="complementary">
                    <?php dynamic_sidebar('custom-footer-right-widget'); ?>
                </section>
            <?php endif; ?>
        </div>
    </footer>
    </div><!--/.container-fluid-->
<?php wp_footer();