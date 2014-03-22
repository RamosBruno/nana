
<?php
/*
Template Name: Accueil
*/

?>


<?php get_header(); ?>
[17:16:05] johan bover: <marquee direction="right">Mon texte va vers la droite</marquee>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <h1 class="post-title"><?php the_title(); ?></h1>

        <?php the_content(); ?>

    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
[17:16:05] johan bover: <marquee direction="right">Mon texte va vers la droite</marquee>