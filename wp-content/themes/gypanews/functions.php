<?php

include("components/custom_post_types.php");

add_filter( 'excerpt_length', 'get_excerpt_theme', 999 );

add_action( 'admin_menu', 'remove_menus' );

add_action( 'personal_options_update', 'save_profile_fields' );
add_action( 'edit_user_profile_update', 'save_profile_fields' );
add_action( 'show_user_profile', 'add_profile_fields' );
add_action( 'edit_user_profile', 'add_profile_fields' );

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
            $custom_posts .= '<li><a href="' . $link . '">' . $obj->labels->singular_name . '</a></li>';
        }
    }

    return $custom_posts;
}

function get_all_custom_posts() {

    $customs = get_post_types('', 'names');
    $removed = array('post', 'page', 'attachment', 'revision', 'nav_menu_item');
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

function add_profile_fields( $user ) {

    $return = '<h3>Redes Sociais</h3>';
    $return .= '<table class="form-table">';

    $return .= '<tr>';
    $return .= '<th><label for="twitter">Twitter</label></th>';
    $return .= '<td>';
    $return .= '<input type="text" name="twitter" id="twitter" value="'. esc_attr( get_the_author_meta( 'twitter', $user->ID ) ) . '" class="regular-text" /><br />';
    $return .= '</td>';
    $return .= '</tr>';

    $return .= '<tr>';
    $return .= '<th><label for="facebook">Facebook</label></th>';
    $return .= '<td>';
    $return .= '<input type="text" name="facebook" id="facebook" value="'. esc_attr( get_the_author_meta( 'facebook', $user->ID ) ) . '" class="regular-text" /><br />';
    $return .= '</td>';
    $return .= '</tr>';

    $return .= '<tr>';
    $return .= '<th><label for="instagram">Instagram</label></th>';
    $return .= '<td>';
    $return .= '<input type="text" name="instagram" id="instagram" value="'. esc_attr( get_the_author_meta( 'instagram', $user->ID ) ) . '" class="regular-text" /><br />';
    $return .= '</td>';
    $return .= '</tr>';

    $return .= '<tr>';
    $return .= '<th><label for="linkedin">Linkedin</label></th>';
    $return .= '<td>';
    $return .= '<input type="text" name="linkedin" id="linkedin" value="'. esc_attr( get_the_author_meta( 'linkedin', $user->ID ) ) . '" class="regular-text" /><br />';
    $return .= '</td>';
    $return .= '</tr>';

    $return .= '</table>';

    echo $return;
}

function save_profile_fields( $user_id ) {

    if ( !current_user_can( 'edit_user', $user_id ) )
        return false;

    update_metadata ( 'user', $user_id, 'twitter', $_POST['twitter'] );
    update_metadata ( 'user', $user_id, 'facebook', $_POST['facebook'] );
    update_metadata ( 'user', $user_id, 'instagram', $_POST['instagram'] );
    update_metadata ( 'user', $user_id, 'linkedin', $_POST['linkedin'] );
}
