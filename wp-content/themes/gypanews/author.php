<?php get_header(); ?>
<div class="container">

    <?php get_template_part('aside'); ?>

    <div class="news paddingtop paddingbottom col-xs-12 col-sm-8">
        <h1><span><?php the_author(); ?></span></h1>
        <?php if ( have_posts() ) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="col-xs-12">
                    <div class="image col-xs-2">
                        <a href="<?php the_permalink() ?>">
                            <img src="http://placehold.it/100x100" alt="Noticia" title="Noticia">
                            <p><?php echo get_edition() ?></p>
                        </a>
                    </div>
                    <div class="content col-xs-10">
                        <div class="col-sm-6 hidden-xs">
                            <p class="small"><?php the_time('d/m/Y') ?> - Por  <?php the_author_posts_link() ?></p>
                        </div>
                        <div class="col-sm-6 hidden-xs">
                            <p class="small pull-right">
                                <a href="<?php the_permalink() ?>#comments">
                                    <i class="fa fa-comments-o"></i> <?php echo get_comments_number() ?> comentário(s)
                                </a>
                            </p>
                        </div>
                        <div class="col-xs-12">
                            <?php $category = get_the_category() ?>
                            <a href="<?php the_permalink() ?>">
                                <?php if($category) { ?>
                                    <p class="category"><?php echo $category[0]->name; ?></p>
                                <?php } ?>
                                <h2><?php the_title(); ?></h2>
                                <p> <?php echo get_excerpt_theme(get_the_excerpt()); ?></p>
                            </a>
                        </div>
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