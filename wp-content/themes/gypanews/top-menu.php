<header>
    <div class="container">
        <div class="logo hidden-xs col-sm-2">
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="GypaNews" title="GypaNews">
            </a>
        </div>
        <div class="ad col-xs-12 col-sm-10">
            <a href="#">
                <img src="http://placehold.it/728x90" alt="Anuncia Aqui" title="Anuncie Aqui">
            </a>
        </div>
    </div>
    <nav class="col-xs-12">
        <div class="container">
            <div class="hidden-sm hidden-md hidden-lg mobile-menu">
                <div class="logo col-xs-8">
                    <a href="#" class="pull-left">
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
                    'container'       => 'div',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'menu',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s ' . $custom_posts . '</ul>',
                    'depth'           => 0,
                    'walker'          => ''
                );

                wp_nav_menu( $defaults );
            ?>
        </div>
    </nav>
    <div class="featured col-xs-12">
        <div class="container">
            <p class="hidden-xs">Nesta Edição</p>
            <ul>
                <?php for($i = 1; $i < 4; $i++){ ?>
                    <li><a href="#">20/10/2015 - Conheça o novo restaurante da Rua bla bla <?php echo $i; ?></a></li>
                <?php } ?>
            </ul>
            <div class="hidden-xs buttons">
                <div class="prev"></div>
                <div class="next"></div>
            </div>
        </div>
    </div>
</header>