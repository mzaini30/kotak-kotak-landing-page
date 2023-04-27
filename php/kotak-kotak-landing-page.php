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
    $content = do_shortcode($content);
    $isi = '<div class="columns-2 gap-5 [&>p]:absolute [&>p]:-z-999">';
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

    $content = do_shortcode($content);
    $isi = '<div
    class="border-2 mb-5 border-solid border-black p-3 ini-kotaknya [&_img]:max-w-full astro-4OGIIRG3"
  >
    <div class="[&>*]:mb-3 last:[&>*]:mb-0 astro-4OGIIRG3">
      <h2 class="text-3xl font-bold astro-4OGIIRG3">' . $judul . '</h2>

      ' . $content . '
    </div>
  </div>';

    return $isi;
}
add_shortcode('kotak', 'kotak');

function tambah_gaya_css()
{
    wp_enqueue_style('nama-plugin-anda-style', plugins_url('index.d7072160.css', __FILE__));
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