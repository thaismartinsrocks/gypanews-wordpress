<?php

add_action( 'wp_ajax_add_newsletter', 'add_newsletter' );
add_action( 'wp_ajax_nopriv_add_newsletter', 'add_newsletter' );

function add_newsletter() {

    $email = $_POST['email'];
    if(!$email) echo 0;

    $send = wp_insert_post(array(
        'post_title' => $email,
        'post_content' => '',
        'post_type' => 'newsletter',
        'post_date' => date('Y-m-d H:i:s')
    ));

    echo $send;
}