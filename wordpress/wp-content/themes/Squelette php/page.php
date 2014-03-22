<?php get_header(); ?>


    <div class="container fond_blanc">
        <div class="row">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="post">

                        <div class="post-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>

    </div>
<?php get_footer(); ?>