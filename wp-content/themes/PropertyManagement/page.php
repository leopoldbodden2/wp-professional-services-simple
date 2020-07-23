<?php get_header(); ?>

<?php $colclass = is_active_sidebar('custom-sidebar-widget') ? 'col-sm-8' : 'col-xs-12'; ?>
<main class="row row-secondary">
    <div class="container">
        <div class="<?= $colclass; ?>">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            <?php endwhile; else: ?>
                <?php _e('Content coming soon.'); ?>
            <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</main>

<?php get_footer(); ?>
