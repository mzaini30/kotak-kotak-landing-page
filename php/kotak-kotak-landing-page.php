<?php
/*
Plugin Name: Kotak-Kotak Landing Page
Description: Plugin untuk membuat kotak-kotak landing page
Version: 0.0.1
Author: Zen
Author URI: https://zenzen.web.id
License: MIT
*/
function kotak_kotak($atts, $content = null)
{
    $isi = '<div class="grid grid-cols-1 sm:grid-cols-2 gap-5">';
    $isi .= $content;
    $isi .= '</div>';

    return $isi;
}
add_shortcode('kotak_kotak', 'kotak_kotak');

function kotak($atts, $content = null)
{
    extract(
        shortcode_atts(
            array(
                'judul' => ''
            ),
            $atts
        )
    );

    $isi = '<div class="border rounded p-3 [&>*]:mb-3 last:[&>*]:mb-0 shadow [&_img]:max-w-full">
        <div class="text-2xl font-bold">' . $judul . '</div>
      
        ' . $content . '
      </div>';

    return $isi;
}
add_shortcode('kotak', 'kotak');

function tambah_gaya_css()
{
    wp_enqueue_style('nama-plugin-anda-style', plugins_url('index.63af628b.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'tambah_gaya_css');

function tambah_tautan_join_community($links)
{
    $join_link = '<a href="https://chat.whatsapp.com/C4z9B6X4mSLLcdbooqQnGZ">Join Community</a>';
    array_unshift($links, $join_link);
    return $links;
}
$plugin = plugin_basename(__FILE__);
add_filter("plugin_action_links_$plugin", 'tambah_tautan_join_community');