<?php
/**
 * Plugin Name: carrousel
 * Author: Dominic Gibeau
 * Description: affiche carrousel
 * Version:1.0.0
 * Plugin URI:https://github.com/DominicGibeau
 * Author URI:https://github.com/DominicGibeau
 */



add_shortcode('carrousel', 'genere_html');
 
function enqueue_style_script() {
    $version_css = filemtime(plugin_dir_path( __FILE__ ) . "style.css");
    $version_js = filemtime(plugin_dir_path(__FILE__) . "js/carrousel.js");

    wp_enqueue_style(   'em_plugin_carrousel_css',
        plugin_dir_url(__FILE__) . "style.css",
        array(),
        $version_css);

    wp_enqueue_script(  'em_plugin_carrousel_js',
        plugin_dir_url(__FILE__) ."js/carrousel.js",
        array(),
        $version_js,
        true);
        // true pour mettre le script en bas de page
}

//il faut wp_head(); soit ajouter


add_action('wp_enqueue_scripts', 'enqueue_style_script');

function genere_html() {
    $html = '
    <button class="bouton__ouvrir">Ouvrir Carrousel</button>
    <div class="carrousel">
        <a href="" class="carrousel__x">X</a>
        <figure class="carrousel__figure"></figure>
        <form action="" class="carrousel__form"></form>
    </div>
    ';
    return $html;
}

// [carrousel juste après la galerie dans votre article ou page]
// quand la fonction the_content() rencontrera [carrousel] c'est à se moment
// que le carrousel sera initialisé

add_shortcode('carrousel', 'genere_html');
   