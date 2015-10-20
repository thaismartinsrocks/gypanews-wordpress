<?php

include("components/custom_post_types.php");
include("components/profile.php");

add_filter('pre_get_posts', 'query_post_type');
add_filter( 'excerpt_length', 'get_excerpt_theme', 999 );
add_action( 'admin_menu', 'remove_menus' );

function get_excerpt_theme($string, $length = 100) {

    if(strlen($string) < $length)
        return $string;

    $regex = "/(.{1,$length})\b/";
    preg_match($regex, $string, $matches);

    return $matches[1]. '...';
}

function remove_menus(){
    remove_menu_page( 'edit.php' );
}

function get_custom_posts_menu (){

    $customs = get_all_custom_posts();
    $custom_posts = '';

    if($customs) {
        foreach($customs as $custom) {
            $obj = get_post_type_object($custom);
            $link = get_post_type_archive_link($custom);
            $custom_posts .= '<li><a href="' . $link . '">' . $obj->labels->name . '</a></li>';
        }
    }

    return $custom_posts;
}

function get_all_custom_posts($isMenu = false) {

    $customs = get_post_types('', 'names');
    $removed = array('post', 'page', 'attachment', 'revision', 'acf', 'anuncios');

    if(!$isMenu)
        $removed[] = 'nav_menu_item';

    $custom_posts = array();

    if($customs) {
        foreach($customs as $custom) {
            if(!in_array($custom, $removed))
                $custom_posts[] = $custom;
        }
    }

    return $custom_posts;
}

function get_edition() {

    global $post;
    $obj = get_the_terms($post->ID, 'edicoes');
    $edition = '';

    if($obj)
        $edition = $obj[0]->name;

    return $edition;
}

function custom_comment($commentObj, $args, $depth) {

    $comment = '<li>';
    $comment .= '<p class="title">' . $commentObj->comment_author . ' | ' . get_the_time('d/m/Y') . '</p>';
    $comment .= '<p>' . $commentObj->comment_content . '</p>';
    $comment .= '.</li>';

    echo $comment;
}


function get_pagination() {

    $prev_arrow = is_rtl() ? 'Próximo <i class="fa fa-angle-double-right"></i>' : '<i class="fa fa-angle-double-left"></i> Anterior';
    $next_arrow = is_rtl() ? '<i class="fa fa-angle-double-left"></i> Anterior' : 'Próximo <i class="fa fa-angle-double-right"></i>';

    global $wp_query;
    $total = $wp_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if( $total > 1 )  {

        if(get_option('permalink_structure'))
            $format = 'page/%#%/';
        else
            $format = '&paged=%#%';

        echo paginate_links(array(
            'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format'		=> $format,
            'current'		=> max( 1, get_query_var('paged') ),
            'total' 		=> $total,
            'mid_size'		=> 3,
            'type' 			=> 'list',
            'prev_text'		=> $prev_arrow,
            'next_text'		=> $next_arrow,
        ) );
    }
}

function _dump_files() {
    add_action( 'all', create_function( '', "echo '<pre>'; print_r( get_included_files() ); echo '</pre>'; return;" ) );
}

function query_post_type($query) {

    if(is_category() || is_tag()) {

        $post_type = get_query_var('post_type');

        if($post_type)
            $post_type = $post_type;
        else {
            $post_type = get_all_custom_posts();
        }

        $query->set('post_type', $post_type);
        return $query;
    }
}

function wp_page_menu_theme($defaults) {
    global $wp_query;
    $wp_query->set('post_type', get_all_custom_posts(true));
    wp_nav_menu( $defaults );
    $wp_query->set('post_type', get_all_custom_posts());
}