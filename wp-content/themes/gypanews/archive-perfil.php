<?php get_header(); ?>
<div class="container">

    <?php get_template_part('aside'); ?>

    <article class="article col-xs-12 col-sm-8">

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <div class="col-xs-12">
                    <?php $post_type = get_queried_object(); ?>
                    <p class="category"><?php echo $post_type->labels->name; ?></p>
                </div>

                <h1><?php the_title(); ?></h1>

                <div class="col-xs-12">
                    <p class="small"><?php the_time('d/m/Y') ?> - Por <?php the_author_posts_link(); ?></p>
                </div>

                <?php  if(has_post_thumbnail()) { ?>
                    <div class="image col-xs-12">
                        <?php the_post_thumbnail(); ?>
                        <p><?php echo get_edition(); ?></p>
                    </div>
                <?php } ?>

                <div class="content col-xs-12">
                    <div class="text">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="text-center" style="margin: 100px 0">Nenhum conteúdo cadastrado até o momento.</p>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
        <?php wp_reset_query(); ?>
    </article>
</div>
<?php get_footer(); ?>