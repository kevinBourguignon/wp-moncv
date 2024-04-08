<?php

// ----------------------------------------------------------------
//                          chargement des scripts
// ----------------------------------------------------------------
// define('FIRSTTHEME_VERSION','1.0.2');

// function firsttheme_scripts() {

//     wp_enqueue_style('firsttheme_bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css', array(),FIRSTTHEME_VERSION,'all');
//     wp_enqueue_style('firsttheme_custom', get_template_directory_uri() . '/style.css', array('firsttheme_bootstrap-core'),FIRSTTHEME_VERSION,'all');

//     wp_enqueue_script('firsttheme_script', get_template_directory_uri() . '/js/myfirsttheme.js', array('jquery'),FIRSTTHEME_VERSION, true );

// }

// add_action('wp_enqueue_scripts','firsttheme_scripts');

// function firsttheme_admin_scripts() {

//     wp_enqueue_style('bootstrap-adm-core', get_template_directory_uri() . '/css/bootstrap.min.css', array(), FIRSTTHEME_VERSION);

// }

// add_action('admin_init','firsttheme_admin_scripts');

//----------------------------------------------------------------
//                       utilitaires
//----------------------------------------------------------------
function firsttheme_setup() {

    // suport des vignettes
    add_theme_support('post-thumbnails');

    // enlève générateur de version
    remove_action('wp_head','wp_generator');

    // enlève les guillemets à la française
    remove_filter('the_content', 'wptexturize');

    //support de titre
    add_theme_support('title-tag');
    
    register_nav_menu('header', 'entête de page');
}

add_action('after_setup_theme','firsttheme_setup');

register_sidebar(array(
    'id' => 'blog-sidebar',
    'name' => 'Blog',
    'before_widget' => '<section>',
    'after_widget' => '</section',
));