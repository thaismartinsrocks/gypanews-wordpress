<?php get_header(); ?>
<div class="highlights col-xs-12">
    <div class="container">
        <div class="slide col-xs-12 col-sm-8">
            <ul>
                <?php
                    $args = array(
                        'posts_per_page'   => 10,
                        'offset'           => 0,
                        'post_status'      => 'publish',
                        'post_type'        => 'slide',
                        'orderby'          => 'date',
                        'order'            => 'ASC',
                    );

                    query_posts($args);
                ?>

                <?php if ( have_posts() ) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <li>

                            <?php $image = get_field('image'); ?>
                            <?php $post = get_field('go_to'); ?>
                            <?php $edition = get_the_terms($post->ID, 'edicoes'); ?>

                            <a href="<?php echo get_permalink($post->ID); ?>">

                                <?php if($image) { ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>">
                                <?php } ?>

                                <div class="details">
                                    <?php if($edition) { ?>
                                        <div class="edition"><?php echo $edition[0]->name; ?></div>
                                    <?php } ?>
                                    <h1>
                                        <?php echo $post->post_title; ?>
                                    </h1>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="buttons">
                <div class="prev"></div>
                <div class="next"></div>
            </div>
        </div>
        <div class="search col-xs-12 col-sm-4">
            <?php get_search_form(); ?>
        </div>
        <div class="facebook-box col-xs-12 col-sm-4">
            <div class="fb-page" data-href="https://www.facebook.com/gypanews" data-small-header="true" data-width="380px" data-height="245px" data-hide-cover="true" data-show-facepile="true" data-show-posts="true">
                <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="https://www.facebook.com/gypanews">
                        <a href="https://www.facebook.com/gypanews">Conheça a página do Facebook da Gypa News</a>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="news col-xs-12">

    <div class="container">
        <section class="nopadding-mobile col-xs-12 col-sm-8">
            <h1><span>Reportagens</span></h1>

            <?php
                $args = array(
                    'posts_per_page'   => 4,
                    'offset'           => 0,
                    'post_status'      => 'publish',
                    'post_type'        => 'reportagens',
                    'orderby'          => 'date',
                    'order'            => 'DESC',
                );

                query_posts($args);
            ?>
            <?php $count = 1; ?>
            <?php if ( have_posts() ) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <article class="<?php echo $count == 1 ? 'first' : '' ?> col-xs-12 col-sm-6">

                        <?php  if(has_post_thumbnail()) { ?>
                            <div class="image <?php echo ($count > 1) ? 'small' : '' ; ?> col-xs-12 <?php echo $count == 1 ? '' : 'col-sm-4' ?>">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                    <p><?php echo get_edition(); ?></p>
                                </a>
                            </div>
                        <?php } ?>

                        <?php if($count == 1) { ?>
                            <div class="content col-xs-6">
                                <p class="small"><?php the_time('d/m/Y') ?> - Por <?php the_author_posts_link(); ?></p>
                            </div>
                            <div class="content col-xs-6">
                                <p class="small pull-right">
                                    <a href="<?php the_permalink(); ?>#comments">
                                        <i class="fa fa-comments-o"></i> <?php echo get_comments_number() ?> comentário
                                    </a>
                                </p>
                            </div>

                            <div class="content col-xs-12">
                                <a href="<?php the_permalink(); ?>">
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php echo get_excerpt_theme(get_the_excerpt()); ?></p>
                                </a>
                            </div>
                        <?php } else { ?>
                            <div class="content col-sm-8 col-xs-12">
                                <div class="small col-xs-12">
                                    <p><?php the_time('d/m/Y') ?> - Por <?php the_author_posts_link(); ?></p>
                                </div>
                                <div class="resume col-xs-12">
                                    <a href="<?php the_permalink(); ?>">
                                        <h2><?php echo get_excerpt_theme(get_the_title(), 35); ?></h2>
                                    </a>
                                </div>
                                <div class="small col-xs-12">
                                    <p class="pull-right">
                                        <a href="<?php the_permalink(); ?>$comments">
                                            <i class="fa fa-comments-o"></i> <?php echo get_comments_number() ?> comentário
                                        </a>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    </article>
                    <?php $count++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="more col-xs-12">
                <a href="<?php bloginfo('url'); ?>/reportagens">
                    <p>Mais Reportagens <i class="fa fa-angle-double-right"></i></p>
                </a>
            </div>
        </section>

        <div class="ads paddingtop col-xs-12 col-sm-4">

            <?php
                $args = array(
                    'posts_per_page'   => 5,
                    'offset'           => 0,
                    'post_status'      => 'publish',
                    'post_type'        => 'anuncios',
                    'meta_query'       => array(
                                            array(
                                                    'key' => 'local',
                                                    'value' => 'home_aside'
                                            )
                                          ),
                    'meta_key'         => 'order_exibition',
                    'orderby'          => 'meta_value_num',
                    'order'            => 'DESC',
                );

                query_posts($args);
            ?>
            <ul>
                <?php if ( have_posts() ) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php $image = get_field('image'); ?>
                        <li>
                            <div class="ad col-xs-12 col-sm-12">
                                <a href="http://<?php echo str_replace('http://', '', get_field('url')); ?>" target="_blank">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                                </a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <?php wp_reset_query(); ?>
            </ul>
        </div>
    </div>
</div>

<div class="ads col-xs-12">
    <div class="container">
        <?php
            $args = array(
                'posts_per_page'   => 3,
                'offset'           => 0,
                'post_status'      => 'publish',
                'post_type'        => 'anuncios',
                'meta_query'       => array(
                    array(
                        'key' => 'local',
                        'value' => 'home_center'
                    )
                ),
                'meta_key'         => 'order_exibition',
                'orderby'          => 'meta_value',
                'order'            => 'ASC',
            );

            query_posts($args);
        ?>
        <ul>
            <?php if ( have_posts() ) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php $image = get_field('image'); ?>
                    <li>
                        <div class="ad col-xs-12 col-sm-4">
                            <a href="http://<?php echo str_replace('http://', '', get_field('url')); ?>" target="_blank">
                                <img src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                            </a>
                        </div>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            <?php wp_reset_query(); ?>
        </ul>
    </div>
</div>

<div class="interviews col-xs-12">
    <div class="container">
        <div class="ads ads-double">
            <?php
            $args = array(
                'posts_per_page'   => 2,
                'offset'           => 0,
                'post_status'      => 'publish',
                'post_type'        => 'anuncios',
                'meta_query'       => array(
                    array(
                        'key' => 'local',
                        'value' => 'home_bottom'
                    )
                ),
                'meta_key'         => 'order_exibition',
                'orderby'          => 'meta_value_num',
                'order'            => 'DESC',
            );

            query_posts($args);
            ?>
            <ul>
                <?php if ( have_posts() ) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php $image = get_field('image'); ?>
                        <li>
                            <div class="ad ad-border col-xs-12 col-sm-4">
                                <a href="http://<?php echo str_replace('http://', '', get_field('url')); ?>" target="_blank">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                                </a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <?php wp_reset_query(); ?>
            </ul>
        </div>

        <div class="box col-xs-12 col-sm-4">
            <h1><span>Entrevistas</span></h1>

            <?php
                $args = array(
                    'posts_per_page'   => 2,
                    'offset'           => 0,
                    'post_status'      => 'publish',
                    'post_type'        => 'entrevistas',
                    'orderby'          => 'date',
                    'order'            => 'DESC',
                );

                query_posts($args);
            ?>

            <?php if ( have_posts() ) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="row">
                        <?php  if(has_post_thumbnail()) { ?>
                            <div class="image col-sm-4 hidden-xs">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            </div>
                        <?php } ?>

                        <div class="col-xs-12 <?php echo has_post_thumbnail() ? 'col-sm-8' : 'col-sm-12'; ?>">
                            <h2><?php the_title(); ?></h2>
                            <p><?php echo get_excerpt_theme(get_the_excerpt(), 70); ?></p>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="more col-xs-12">
            <a href="<?php bloginfo('url'); ?>/entrevistas">
                <p>Mais Entrevistas <i class="fa fa-angle-double-right"></i></p>
            </a>
        </div>

    </div>
</div>
<?php get_footer(); ?>