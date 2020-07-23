<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <?php if ( function_exists( 'prof_serv_get_custom_logo' ) ): ?>
                <a id="logo" href="<?= get_site_url(); ?>/" title="<?= get_bloginfo('name'); ?> Home" class="navbar-left">
                    <?php prof_serv_get_custom_logo(); ?>
                </a>
            <?php endif; ?>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-default-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-default-collapse">
            <?php get_custom_navbar ([
                'container'         => '',
                'container_class'   => '',
                'container_id'      => 'navbar-default-container',
                'menu_class'        => 'nav navbar-nav'
            ]); ?>

            <?php do_action( 'before_sidebar' ); ?>
            <?php if ( ! dynamic_sidebar( 'custom-navbar-right-widget' ) ) : ?>
                <div class="navbar-form navbar-right">
                    <div class="btn-group" role="group" aria-label="Contact <?= get_bloginfo("name"); ?>>">
                        <a href="mailto:example@email.com" class="btn btn-blue">
                            <span class="visible-lg visible-xs">example@email.com</span>
                            <span class="fa fa-envelope hidden-lg hidden-xs"></span>
                        </a>
                        <a href="tel:1231231234" class="btn btn-grey">
                            <span class="visible-lg visible-xs">(123) 123-1234</span>
                            <span class="fa fa-phone hidden-lg hidden-xs"></span>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</nav>