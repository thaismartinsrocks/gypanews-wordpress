<div class="paddingtop-double paddingbottom mobile-nopaddingbottom col-xs-12 col-sm-4 pull-right">
    <div class="search hidden-xs">
        <?php get_search_form(); ?>
    </div>
    <div class="facebook-box hidden-xs">
        <div class="fb-page" data-href="https://www.facebook.com/gypanews" data-small-header="true" data-width="380px" data-height="245px" data-hide-cover="true" data-show-facepile="true" data-show-posts="true">
            <div class="fb-xfbml-parse-ignore">
                <blockquote cite="https://www.facebook.com/gypanews">
                    <a href="https://www.facebook.com/gypanews">Conheça a página do Facebook da Gypa News</a>
                </blockquote>
            </div>
        </div>
    </div>
    <div class="ads">
        <ul>
            <?php for($i = 1; $i < 5; $i++){ ?>
                <li>
                    <div class="ad">
                        <a href="#" target="_blank">
                            <img src="http://placehold.it/320x100?text=Anuncio+<?php echo $i ?>" alt="Anuncie Aqui" title="Anuncie Aqui">
                        </a>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="news hidden-xs">
        <h1><span>Últimos Artigos</span></h1>
        <?php

            global $posts;

            $args = array(
                'posts_per_page'   => 5,
                'offset'           => 0,
                'orderby'          => 'date',
                'order'            => 'DESC',
                'post_status'      => 'publish',
            );

            if (is_author()) {
                global $wp_query;
                $args['author'] = $wp_query->queried_object->ID;
                $args['post_type'] = get_all_custom_posts();
            } else if(is_single() || is_archive()) {
                $args['post_type'] = get_post_type($posts->ID);
            } else {
                $args['post_type'] = get_query_var('post_type');
            }
            query_posts($args);
        ?>
        <?php if ( have_posts() ) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="col-xs-12">
                    <div class="image col-xs-2">
                        <a href="<?php the_permalink(); ?>">
                            <img src="http://placehold.it/100x100" alt="<?php the_title() ?>" title="<?php the_title() ?>">
                        </a>
                    </div>
                    <div class="content col-xs-10">
                        <div class="col-sm-12 hidden-xs">
                            <?php $category = get_the_category() ?>
                            <p class="small">
                                <?php if($category) { ?>
                                   <span style="text-transform: uppercase"><?php echo $category[0]->name; ?></span>
                                <?php } ?>
                            </p>
                            <p class="small">
                                <?php the_time('d/m/Y') ?> - Por <?php the_author_posts_link() ?>
                            </p>
                        </div>
                        <div class="col-xs-12">
                            <a href="<?php the_permalink(); ?>">
                                <p><?php the_title(); ?></p>
                            </a>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <article class="col-xs-12">
                <p style="margin: 50px 0" class="text-center">Nenhum artigo encontrado.</p>
            </article>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
    <div class="categories col-xs-12 hidden-xs">
        <h1><span>Todas as Categorias</span></h1>
        <ul>
            <?php

                $args = array(
                    'show_option_all'    => '',
                    'style'              => 'list',
                    'hide_empty'         => 1,
                    'title_li'           => __( '' ),
                    'show_option_none'   => __( '' ),
                    'taxonomy'           => 'category',
                );

                wp_list_categories($args);
            ?>
        </ul>
        <?php wp_reset_query(); ?>
    </div>
</div>