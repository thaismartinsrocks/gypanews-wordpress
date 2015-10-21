<?php get_header(); ?>
<div class="container">

    <?php include "aside.php"; ?>

    <div class="news paddingtop paddingbottom col-xs-12 col-sm-8">
        <h1><span><?php single_cat_title(); ?></span></h1>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php $post_type =  get_post_type_object( get_post_type($post) ); ?>
                <?php if($post_type->name == 'guia') { ?>
                    <article class="guia col-xs-12">
                        <div class="<?php echo has_post_thumbnail() ? 'col-xs-8' : 'col-xs-12'; ?>">
                            <p><strong><?php the_title() ?></strong></p>
                            <p>Endereço: <?php the_field('local') ?></p>
                            <p>Telefone: <?php the_field('phone') ?></p>
                        </div>
                    </article>
                <?php } else { ?>
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
                <?php } ?>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="text-center" style="margin: 100px 0">Nenhum conteúdo cadastrado até o momento.</p>
        <?php endif; ?>

        <div class="buttons col-xs-12">
           <?php get_pagination(); ?>
        </div>

        <?php wp_reset_query(); ?>
    </div>
</div>
<?php get_footer(); ?>