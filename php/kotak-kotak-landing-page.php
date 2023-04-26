<?php
/*
Plugin Name: Kotak-Kotak Landing Page
Description: Plugin untuk membuat kotak-kotak landing page
Version: 0.0.1
Author: Zen
Author URI: https://zenzen.web.id
License: MIT
*/
function tambah_tautan_join_community( $links ) {
    $join_link = '<a href="https://chat.whatsapp.com/C4z9B6X4mSLLcdbooqQnGZ">Join Community</a>';
    array_unshift( $links, $join_link );
    return $links;
}
$plugin = plugin_basename( __FILE__ );
add_filter( "plugin_action_links_$plugin", 'tambah_tautan_join_community' );