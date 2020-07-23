<?php get_header(); ?>

<main id="front-page-main" class="row" role="main">
    <div class="container no-padding">
        <section id="main-content-front-page" class="col-xs-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; else: ?>
                <?php _e( 'No posts were found. Sorry!' ); ?><br/>
            <?php endif; ?>

            <?php get_template_part('template-parts/section', 'callouts'); ?>
        </section>
    </div>
</main>

<?php get_footer(); ?>
