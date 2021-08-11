<?php
function load_scripts()
{

    wp_enqueue_script('materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array('jquery'), '1.0.0', false);
    wp_enqueue_script('style', get_template_directory_uri() . '/js/style.js', array('jquery'), '1.0', false);
    

    wp_enqueue_style('materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('template', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');

}
add_action('wp_enqueue_scripts', 'load_scripts');
