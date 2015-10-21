<?php get_header(); ?>
<div class="container">

    <?php get_template_part('aside'); ?>

    <div class="news paddingtop paddingbottom col-xs-12 col-sm-8">

        <?php $post_type = get_queried_object(); ?>
        <div class="title col-xs-12">
            <h1><span>O GUIA DO CONSUMIDOR</span></h1>
            <p>Este espaço está aberto para todos os anunciantes do GypaNews Online com o objetivo de facilitar ao consumidor encontrar o melhor lugar para comer, levar suas roupas para lavar, pedir comida delivery, escolher pizzas de vários locais de qualidade, levar seu cão para tomar banho e tosar, contratar adestrador de confiança, escolas, academias e outros profissionais liberais. Sabemos que com a vida corrida dos dias atuais é sempre bom lembrar que no Morumbi e bairros vizinhos podemos contar com serviços especializados todo o tempo.</p>
        </div>

        <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;

            $args = array(
                'post_type' => $post_type->name,
                'paged'     => $paged,
                'orderby'   => 'category',
                'order'     => 'DESC'
            );

            query_posts( $args );
        ?>

        <?php $lastCategory = ''; ?>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php $category = get_the_category();  ?>

                <?php if($category && $lastCategory != $category[0]->slug) { ?>
                    <div class="col-xs-12">
                        <h2><?php echo $category[0]->name; ?></h2>
                    </div>
                    <?php $lastCategory = $category[0]->slug; ?>
                <?php } ?>

                <article class="guia col-xs-12">
                    <div class="<?php echo has_post_thumbnail() ? 'col-xs-8' : 'col-xs-12'; ?>">
                        <p><strong><?php the_title() ?></strong></p>
                        <p>Endereço: <?php the_field('local') ?></p>
                        <p>Telefone: <?php the_field('phone') ?></p>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>

        <div class="buttons col-xs-12">
            <?php get_pagination(); ?>
        </div>

        <?php wp_reset_postdata(); ?>
        <?php wp_reset_query(); ?>
    </div>
</div>
<?php get_footer(); ?>