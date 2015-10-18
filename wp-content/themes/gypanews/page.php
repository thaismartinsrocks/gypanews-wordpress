<?php get_header(); ?>

<div class="container">

    <?php include "aside.php"; ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article class="page col-xs-12 col-sm-8">

            <h1><?php the_title(); ?></h1>

            <?php  if(has_post_thumbnail()) { ?>
                <div class="image col-xs-12">
                   <?php the_post_thumbnail(); ?>
                </div>
            <?php } ?>

            <div class="content col-xs-12">
                <?php the_content(); ?>
            </div>

            <?php if ( comments_open()) { ?>
                <?php comments_template(); ?>
            <?php }  ?>

        </article>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>