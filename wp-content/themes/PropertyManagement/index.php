<?php get_header(); ?>

<main class="row row-secondary">
    <div class="container">
        <div class="col-xs-12">
            <?php if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                    <p><a href="<?php the_permalink(); ?>"><strong>Read more &raquo;</strong></a></p>
                    <hr>
                <?php endwhile;
                $prevPosts =  get_previous_posts_link('<span class="previous_post">&laquo; Previous Page</span>');
                $nextPosts = get_next_posts_link('<span class="next_post">Next Page &raquo;</span>');
                if ($prevPosts && $nextPosts) : ?>
                    <p><?= $prevPosts ?><span id="prev-next-pipe">|</span><?= $nextPosts ?></p>
                <?php elseif ($prevPosts) : ?>
                    <p><?= $prevPosts ?></p>
                <?php elseif ($nextPosts) : ?>
                    <p><?= $nextPosts ?></p>
                <?php endif;
            else:
                _e('No posts were found. Sorry!'); ?><br/>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
