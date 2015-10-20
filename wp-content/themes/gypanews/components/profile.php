<?php

add_action( 'personal_options_update', 'save_profile_fields' );
add_action( 'edit_user_profile_update', 'save_profile_fields' );
add_action( 'show_user_profile', 'add_profile_fields' );
add_action( 'edit_user_profile', 'add_profile_fields' );

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