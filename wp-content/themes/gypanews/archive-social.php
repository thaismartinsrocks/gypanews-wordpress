<?php get_header(); ?>
<div class="container">

    <?php get_template_part('aside'); ?>

    <div class="news paddingtop paddingbottom col-xs-12 col-sm-8">

        <?php $post_type = get_queried_object(); ?>
        <h1><span><?php echo $post_type->labels->name; ?></span></h1>

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="col-xs-12">
                    <div class="content agenda <?php echo has_post_thumbnail() ? 'col-xs-8' : 'col-xs-12'; ?>">
                        <span class="day"><?php the_field('day') ?></span>
                        <p class="month"><?php the_field('month') ?> de <?php the_field('ano') ?></p>
                        <?php the_content() ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="text-center" style="margin: 100px 0">Nenhum conteúdo cadastrado até o momento.</p>
        <?php endif; ?>

        <div class="buttons col-xs-12">
            <?php get_pagination(); ?>
        </div>

        <?php wp_reset_postdata(); ?>
        <?php wp_reset_query(); ?>
    </div>
</div>
<?php get_footer(); ?>