    <footer>
        <div class="newsletter">
            <div class="container">
                <div class="col-xs-12 col-sm-6">
                    <p>Receba as novidades do GypaNews Online</p>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <input type="email" name="email" id="news-email" placeholder="SEU EMAIL">
                    <button type="submit" class="btn-newsletter">CADASTRAR</button>
                </div>
            </div>
        </div>
        <div class="menu">
            <div class="container">
                <div class="col-sm-2 hidden-xs">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt="GypaNews Online" title="GypaNews Online" class="pull-right">
                </div>
                <div class="col-xs-12 col-sm-10">
                    <?php

                    $custom_posts = get_custom_posts_menu();
                    $defaults = array(
                        'menu'            => 'menu_bottom',
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
            </div>
        </div>
        <div class="address">
            <div class="container">
                <p>Desenvolvido por <a href="http://thaismartins.rocks" target="_blank">thaismartins.rocks</a></p>
            </div>
        </div>
    </footer>
    </div>

    <script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/bower_components/lightbox2/dist/js/lightbox.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slide.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/social.js"></script>

</body>
</html>