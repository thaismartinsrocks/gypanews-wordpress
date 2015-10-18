<div class="paddingtop-double paddingbottom mobile-nopaddingbottom col-xs-12 col-sm-4 pull-right">
    <div class="search hidden-xs">
        <form method="post">
            <input type="text" name="s" placeholder="Pesquisar por...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
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
        <h1><span>Mais Lidas</span></h1>
        <?php

            global $post;
            global $wp_query;

            $args = array(
                'posts_per_page'   => 5,
                'orderby'          => 'date',
                'order'            => 'DESC',
                'post_status'      => 'publish',
            );

            if (is_author()) {
                $args['author'] = $wp_query->queried_object->ID;
                $args['post_type'] = get_all_custom_posts();
            } else if(is_single() || is_archive()) {
                $args['post_type'] = $post->post_type;
            }

            $posts = get_posts($args);
        ?>
        <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
            <article class="col-xs-12">
                <div class="image col-xs-2">
                    <a href="<?php the_permalink(); ?>">
                        <img src="http://placehold.it/100x100" alt="<?php the_title() ?>" title="<?php the_title() ?>">
                    </a>
                </div>
                <div class="content col-xs-10">
                    <div class="col-sm-12 hidden-xs">
                        <?php $category = get_the_category() ?>
                        <p class="small"><a href="#"><?php echo $category[0]->name; ?></a> | <?php the_time('d/m/Y') ?> - Por <?php the_author_posts_link() ?></p>
                    </div>
                    <div class="col-xs-12">
                        <a href="<?php the_permalink(); ?>">
                            <p><?php the_title(); ?></p>
                        </a>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
        <?php wp_reset_postdata();?>
    </div>
    <div class="categories hidden-xs">
        <h1><span>Categorias</span></h1>
        <ul>
            <?php for($i = 1; $i < 9; $i++){ ?>
                <li>
                    <a href="#">
                        <p>Teste de Título</p>
                    </a>
                </li>
            <?php } ?>
    </div>
</div>