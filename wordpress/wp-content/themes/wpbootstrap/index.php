<!--Appel du header-->
<?php get_header(); ?>
<!--    On regarde si il existe des pages-->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
<!--Appel du footer-->
<?php get_footer(); ?>