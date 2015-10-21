<?php

    global $wp_query;
    global $query_string;

    $query_args = explode("&", $query_string);
    $search_query = array();

    foreach($query_args as $key => $string) {
        $query_split = explode("=", $string);
        $search_query[$query_split[0]] = urldecode($query_split[1]);
    }

    $search = new WP_Query($search_query);

    $total_results = $wp_query->found_posts;
?>

<p>Aquiii</p>
