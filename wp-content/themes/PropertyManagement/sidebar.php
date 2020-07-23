<?php if (is_active_sidebar('custom-sidebar-widget')): ?>
    <aside id="sidebar" class="col-sm-4" role="complementary">
        <div id="sidebar-widget-area" class="sidebar-widget-area widget-area">
            <?php dynamic_sidebar('custom-sidebar-widget'); ?>
        </div>
    </aside>
<?php endif; ?>