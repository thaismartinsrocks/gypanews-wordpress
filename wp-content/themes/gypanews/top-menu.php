<header>
    <div class="container">
        <div class="logo hidden-xs col-sm-2">
            <a href="<?php bloginfo('url'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="GypaNews" title="GypaNews">
            </a>
        </div>
        <div class="ad col-xs-12 col-sm-10">
            <?php
                $args = array(
                    'posts_per_page'   => 1,
                    'offset'           => 0,
                    'post_status'      => 'publish',
                    'post_type'        => 'anuncios',
                    'meta_query'       => array(
                                                array(
                                                    'key' => 'local',
                                                    'value' => 'all_top'
                                                )
                                            ),
                    'meta_key'         => 'order_exibition',
                    'orderby'          => 'meta_value_num',
                    'order'            => 'DESC',
                );

                query_posts($args);
            ?>
            <?php if ( have_posts() ) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php $image = get_field('image'); ?>
                    <a href="http://<?php str_replace('http://', '', the_field('url')); ?>" target="_blank">
                        <img src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
    <nav class="col-xs-12">
        <div class="container">
            <div class="hidden-sm hidden-md hidden-lg mobile-menu">
                <div class="logo col-xs-8">
                    <a href="<?php bloginfo('url'); ?>" class="pull-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt="GypaNews" title="GypaNews">
                        <p>GypaNews Online</p>
                    </a>
                </div>
                <div class="menu col-xs-4">
                    <p class="pull-right">Menu <i class="fa fa-bars"></i></p>
                </div>
            </div>

            <?php

                $custom_posts = get_custom_posts_menu();
                $defaults = array(
                    'menu'            => 'menu_topo',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'menu',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu_theme',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s ' . $custom_posts . '</ul>',
                    'depth'           => 0,
                    'walker'          => ''
                );

                wp_page_menu_theme($defaults)
            ?>
        </div>
    </nav>
    <div class="featured col-xs-12">
        <div class="container">
            <p class="hidden-xs">Nesta Edição</p>

            <?php

                $args = array(
                    'numberposts' => 5,
                    'offset' => 0,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => get_all_custom_posts(),
                    'post_status' => 'publish',
                );

                $recent_posts = get_posts($args);
            ?>
            <ul>
                <?php foreach($recent_posts as $post){ ?>
                    <li>
                        <a href="<?php echo get_permalink($post->ID) ?>">
                            <?php the_time('d/m/Y') ?> - <?php echo get_excerpt_theme($post->post_title, 80); ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>

            <?php wp_reset_postdata(); ?>
            <?php wp_reset_query(); ?>

            <div class="hidden-xs buttons">
                <div class="prev"></div>
                <div class="next"></div>
            </div>
        </div>
    </div>
</header>