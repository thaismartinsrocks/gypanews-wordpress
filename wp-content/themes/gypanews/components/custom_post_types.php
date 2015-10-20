<?php

add_action( 'init', 'add_custom_post_types' );
add_action( 'init', 'add_edition_taxonomy' );
add_action( 'pre_get_posts', 'custom_post_author_archive' );

function add_custom_post_types() {

    register_post_type( 'perfil',
        array(
            'labels' => array(
                'name' => __( 'Perfil' ),
                'singular_name' => __( 'Perfil' )
            ),
            'public' => true,
            'menu_position' => 2,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
        )
    );

    register_post_type( 'social',
        array(
            'labels' => array(
                'name' => __( 'Social' ),
                'singular_name' => __( 'Social' )
            ),
            'taxonomies' => array('category'),
            'public' => true,
            'menu_position' => 3,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'author', 'excerpt', 'comments', 'thumbnail', 'post-thumbnails' )
        )
    );

    register_post_type( 'dicas',
        array(
            'labels' => array(
                'name' => __( 'Dicas' ),
                'singular_name' => __( 'Dica' )
            ),
            'taxonomies' => array('category'),
            'public' => true,
            'menu_position' => 4,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        )
    );

    register_post_type( 'entrevistas',
        array(
            'labels' => array(
                'name' => __( 'Entrevistas' ),
                'singular_name' => __( 'Entrevista' )
            ),
            'taxonomies' => array('category'),
            'public' => true,
            'menu_position' => 5,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        )
    );

    register_post_type( 'reportagens',
        array(
            'labels' => array(
                'name' => __( 'Reportagens' ),
                'singular_name' => __( 'Reportagem' )
            ),
            'taxonomies' => array('category'),
            'public' => true,
            'menu_position' => 6,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        )
    );

    register_post_type( 'blog',
        array(
            'labels' => array(
                'name' => __( 'Blogs' ),
                'singular_name' => __( 'Blog' )
            ),
            'taxonomies' => array('category'),
            'public' => true,
            'menu_position' => 7,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        )
    );

    register_post_type( 'guia',
        array(
            'labels' => array(
                'name' => __( 'Guia' ),
                'singular_name' => __( 'Guia' )
            ),
            'taxonomies' => array('category'),
            'public' => true,
            'menu_position' => 8,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        )
    );

    register_post_type( 'anuncios',
        array(
            'labels' => array(
                'name' => __( 'Anúncios' ),
                'singular_name' => __( 'Anúncio' )
            ),
            'public' => true,
            'menu_position' => 9,
            'has_archive' => true,
            'supports' => array( 'title' )
        )
    );

    add_theme_support('post-thumbnails');
}

function add_edition_taxonomy() {
    $labels = array(
        'name' => __( 'Edições'),
        'singular_name' => __( 'Edição'),
        'search_items' => __( 'Buscar' ),
        'popular_items' => __( 'Mais usados' ),
        'all_items' => __( 'Todos as Edições' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Editar Edição' ),
        'update_item' => __( 'Atualizar Edição' ),
        'add_new_item' => __( 'Adicionar Nova Edição' ),
        'new_item_name' => __( 'Nova Edição' )
    );

    $where = array('reportagens', 'perfil', 'blog', 'guia', 'social', 'dicas', 'entrevistas');

    register_taxonomy('edicoes', $where,
        array(
             'hierarchical' => true,
             'labels' => $labels,
             'singular_label' => 'Edição',
             'all_items' => 'Todas as Edições',
             'query_var' => true,
             'rewrite' => array( 'slug' => 'edicoes' )
        )
     );
}

function custom_post_author_archive( &$query ) {
    if ( $query->is_author )
        $query->set( 'post_type', get_all_custom_posts());

    remove_action( 'pre_get_posts', 'custom_post_author_archive' ); // run once!
}
